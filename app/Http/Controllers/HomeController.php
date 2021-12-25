<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Mail\TestMail;
use App\Jobs\SendMails;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function sendMails(){
        
         $emails = Data::chunk(50,function($data){
             // dispatch => linked in constructor in job , $data = 50
             dispatch(new SendMails($data));
         });
            
            return "Will Send In Back ground can do any other things";
     }
   
}
