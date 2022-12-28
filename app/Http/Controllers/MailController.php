<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\TicketListingAdded;
use App\Mail\Ticketpurchased;
use Exception;
use Illuminate\Http\Request;


class MailController extends Controller
{
    //

    public static function ticketlistingadded($email) {
        
        try{
            $mail = Mail::to($email)->send(new TicketListingAdded());
            return $mail;
        }catch(Exception $th){
            dd($th);
            return response()->json(['Mail not sent']);
        }
    } 


    public static function ticketpurchased($email, $data) {
        
        try{
            $mail = Mail::to($email)->send(new Ticketpurchased($data));
            return $mail;
        }catch(Exception $th){
            dd($th);
            return response()->json(['Mail not sent']);
        }
    }
}
