<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password', 'admin'
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function generateCode()
    {
        $code = rand(1000, 9999);

        $record = UserCode::orderBy('id', 'desc')->first();
        if(!$record){
            $id = 1;
        }else{
            $id = $record['id'];
        }
        
        UserCode::Create([
            'id' =>$id,
            'user_id' => auth()->user()->id,
            'code' => $code
        ]);

       // $receiverNumber = auth()->user()->phone;

        // $receiverNumber = '+923169631715';
        // $message = "2FA login code is " . $code;

        // try {

        //     $account_sid = getenv("TWILIO_SID");
        //     $auth_token = getenv("TWILIO_TOKEN");
        //     $twilio_number = getenv("TWILIO_FROM");
        //     $client = new Client($account_sid, $auth_token);
        //     $client->messages->create($receiverNumber, [
        //                       'from' => $twilio_number,
        //                       'body' => $message
        //     ]);
        // } catch (Exception $e) {
        //     dd($e);
        //     info("Error: " . $e->getMessage());
        // }
    }

    public function favorites()
    {
        return $this->belongsToMany(Favorite::class);
    }


    public function customerInfo()
    {
        return $this->hasOne(Customer::class);
    }

    
}
