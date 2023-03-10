<?php

namespace App\Http\Controllers\Customer;

use App\Models\UserDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserDocumentController extends Controller
{
    public function upload(Request $request)
    {

        $request->validate([
            'document_name' => 'required',
            'document' => 'required|max:2048',
        ]);

        $document_file = $request->file('document')->store('uploads/userDocuments', 'public');
        $document = new UserDocument();
        $document->name          = $request->document_name;
        $document->file_name     = $document_file;
        $document->user_id       = Auth::user()->id;
        $document->save();
        Alert::success('Document has been saved successfully!');
         return redirect()->route('home');
        //  return redirect()->route('home')->with('msg_success', 'Document has been saved successfully!');
        // return redirect()->route('profile.show')->with('msg_success', 'Document has been saved successfully!');
    }

    public function destroy($id)
    {
        UserDocument::where('id', $id)->where('user_id', Auth::id())->delete();
        Alert::success('Document has been saved successfully!');
        return redirect()->route('profile.show');
        // toastr()->success('Document has been saved successfully!');
        // return redirect()->route('user.profile');
    }

}
