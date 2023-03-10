<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function registerCustomer(Request $request)
    {
        $entity_type = '';
        $entity_name = '';
        $signatory_title = '';
        if( is_null($request["fields"]["account_type"]) && $request["fields"]["account_type"] == "entity_trust_or_corporation"){
            
            $entity_type = $request["fields"]["entity_type"];
            $entity_name = $request["fields"]["corporate_entity_name"];
            $signatory_title =$request["fields"]["corporate_signatory_title"];

        }else if( is_null($request["fields"]["account_type"]) && $request["fields"]["account_type"]  == "retirement"){
            
            $entity_name = $request["fields"]["retired_entity_name"];
            $signatory_title = $request["fields"]["retired_signatory_title"];

        }
        
        $incompleteStep = 0;
        if(empty($request["fields"]["first_name"])){
            $incompleteStep = 2;
        }else if(empty($request["fields"]["last_name"])){
            $incompleteStep = 3;
        }else if(empty($request["fields"]["citizen_ship"])){
            $incompleteStep = 4;
        }else if( is_null($request["fields"]["account_type"]) && $request["fields"]["account_type"] == "entity_trust_or_corporation"){
            if(empty($entity_type) || empty($entity_name) || empty($signatory_title) ){
                $incompleteStep = 5;
            }
        }else if( is_null($request["fields"]["account_type"]) && $request["fields"]["account_type"]  == "retirement"){
            if(empty($entity_name) || empty($signatory_title) ){
                $incompleteStep = 5;
            }
        }else if( empty($request["fields"]["account_type"])){
                $incompleteStep = 5;
        }else if(empty($request["fields"]["street_address"]) || empty($request["fields"]["city"]) || empty($request["fields"]["state"]) || empty($request["fields"]["postal_code"])){
            $incompleteStep = 6;
        }else if(empty($request["fields"]["country"]) || empty($request["fields"]["phone_number"])){
            $incompleteStep = 7;
        }else if(empty($request["fields"]["dob"])){
            $incompleteStep = 8;
        }else if(empty($request["fields"]["ssn"]) || empty($request["fields"]["ein"])){
            $incompleteStep = 9;
        }else if(empty($request["fields"]["net_worth_each_owner_one_million_check"]) && empty($request["fields"]["net_worth_joint_spouse_check"]) && empty($request["fields"]["total_asset_exceeding_check"]) && empty($request["fields"]["indiviual_income_check"]) && empty($request["fields"]["finary_member_check"]) && empty($request["fields"]["member_of_board_of_director_check"])){
            $incompleteStep = 10;
        }
        $customer = [
            'first_name' =>$request["fields"]["first_name"],
            'last_name' =>$request["fields"]["last_name"] ,
            'citizen_ship' => is_null($request["fields"]["citizen_ship"]) == false ? $request["fields"]["citizen_ship"] : '',
            'account_type' => is_null($request["fields"]["account_type"]) == false ? $request["fields"]["account_type"]  : '',
            'entity_type' => $entity_type,
            'entity_name' => $entity_name,
            'signatory_title' => $signatory_title,
            'street_address' =>$request["fields"]["street_address"],
            'apartment_suit' => $request["fields"]["apartment_suit"],
            'city' => $request["fields"]["city"],
            'state' => $request["fields"]["state"],
            'postal_code' => $request["fields"]["postal_code"],
            'mailing_address' => is_null($request["fields"]["mailing_address"])  == false ? 1 : 0 ,
            'country' => $request["fields"]["country"],
            'phone_number' => $request["fields"]["phone_number"],
            'dob' => $request["fields"]["dob"],
            'ssn' =>$request["fields"]["ssn"],
            'ein' =>$request["fields"]["ein"],
            "net_worth_each_owner_one_million_check" =>  $request["fields"]["net_worth_each_owner_one_million_check"] == "true" ? 1 : 0,
            "net_worth_joint_spouse_check" =>  $request["fields"]["net_worth_joint_spouse_check"] == "true" ? 1 : 0,
            "total_asset_exceeding_check" =>$request["fields"]["total_asset_exceeding_check"] == "true" ? 1 : 0,
            "indiviual_income_check" => $request["fields"]["indiviual_income_check"] == "true" ? 1 : 0,
            "finary_member_check" =>$request["fields"]["finary_member_check"] == "true" ? 1 : 0,
            "member_of_board_of_director_check" => $request["fields"]["member_of_board_of_director_check"] == "true" ? 1 : 0,
            "step_in_complete" => $incompleteStep
        ];
        DB::beginTransaction();
        try{
            Customer::where('user_id',$request["fields"]["user_id"])->update($customer);
            DB::commit();
            return response()->json(['success' => true,"redirectUrl" => url('/login')]);
        }catch(\Exception $ex){
            return response()->json(['success' => false,"Exception Message" => $ex->getMessage()]);
            DB::rollBack();
        }
    }

    public function validateEmail(Request $request)
    {
        $count = User::where("email",$request['email'])->count();
        if($count > 0){
            return response()->json(['success' => false]);
        }else{
            return response()->json(['success' => true]);
        }
    }

    public function user_register(Request $request)
    {

        // return $request->all();
     
        $entity_type = '';
        $entity_name = '';
        $signatory_title = '';
        if( is_null($request->account_type) && $request->account_type == "entity_trust_or_corporation"){
            
            $entity_type = $request->entity_type;
            $entity_name = $request->corporate_entity_name;
            $signatory_title =$request->corporate_signatory_title;

        }else if( is_null($request->account_type) && $request->account_type  == "retirement"){
            
            $entity_name = $request->retired_entity_name;
            $signatory_title = $request->retired_signatory_title;

        }
        
        $incompleteStep = 0;
        if(empty($request->first_name)){
            $incompleteStep = 2;
        }else if(empty($request->last_name)){
            $incompleteStep = 3;
        }else if(empty($request->citizen_ship)){
            $incompleteStep = 4;
        }else if( is_null($request->account_type) && $request->account_type == "entity_trust_or_corporation"){
            if(empty($entity_type) || empty($entity_name) || empty($signatory_title) ){
                $incompleteStep = 5;
            }
        }else if( is_null($request->account_type) && $request->account_type  == "retirement"){
            if(empty($entity_name) || empty($signatory_title) ){
                $incompleteStep = 5;
            }
        }else if( empty($request->account_type)){
                $incompleteStep = 5;
        }else if(empty($request->street_address) || empty($request->city) || empty($request->state) || empty($request->postal_code)){
            $incompleteStep = 6;
        }else if(empty($request->country) || empty($request->phone_number)){
            $incompleteStep = 7;
        }else if(empty($request->dob)){
            $incompleteStep = 8;
        }else if(empty($request->ssn) || empty($request->ein)){
            $incompleteStep = 9;
        }else if(empty($request->net_worth_each_owner_one_million_check) && empty($request->net_worth_joint_spouse_check) && empty($request->total_asset_exceeding_check) && empty($request->indiviual_income_check) && empty($request->finary_member_check) && empty($request->member_of_board_of_director_check)){
            $incompleteStep = 10;
        }
        $customer = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name ,
            'citizen_ship' => is_null($request->citizen_ship) == false ? $request->citizen_ship : '',
            'account_type' => is_null($request->account_type) == false ? $request->account_type  : '',
            'entity_type' => $entity_type,
            'entity_name' => $entity_name,
            'signatory_title' => $signatory_title,
            'street_address' => $request->street_address,
            'apartment_suit' => $request->apartment_suit,
            // 'city' => $request->city,
            // 'state' => $request->state,
            // 'country' => $request->country,
            'postal_code' => $request->postal_code,
            'mailing_address' => is_null( $request->mailing_address)  == false ? 1 : 0 ,
            'phone_number' => $request->phone_number,
            'dob' => $request->dob,
            'ssn' => $request->ssn,
            'ein' => $request->ein,
            "net_worth_each_owner_one_million_check" => $request->net_worth_each_owner_one_million_check == "true" ? 1 : 0,
            "net_worth_joint_spouse_check" =>  $request->net_worth_joint_spouse_check == "true" ? 1 : 0,
            "total_asset_exceeding_check" => $request->total_asset_exceeding_check == "true" ? 1 : 0,
            "indiviual_income_check" => $request->indiviual_income_check == "true" ? 1 : 0,
            "finary_member_check" => $request->finary_member_check == "true" ? 1 : 0,
            "member_of_board_of_director_check" => $request->member_of_board_of_director_check == "true" ? 1 : 0,
            "step_in_complete" => $incompleteStep
        ];
        DB::beginTransaction();
        try{
            Customer::where('user_id',$request->user_id)->update($customer);
            DB::commit();
            return redirect()->route('login');
            // return response()->json([
            //     'success' => true,
            //     "redirectUrl" => url('/login')
            // ]);
        }catch(\Exception $e){
            return $e->getMessage();
            DB::rollBack();
        }

        // return $request->all();
    }
    
}
