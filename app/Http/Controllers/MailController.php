<?php
namespace App\Http\Controllers;

use App\Mail\SellerTicketApproved;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketListingAdded;
use App\Mail\TicketListingRejected;
use App\Mail\Ticketpurchased;
use App\Mail\SellerTicketPurchased;
use App\Mail\UserRegisteredSuccessfully;
use Exception;
use Illuminate\Http\Request;


class MailController extends Controller
{
    //
    public static function UserRegisteredSuccessfully($email,$data) {

        try{
            $mail = Mail::to($email)->send(new UserRegisteredSuccessfully());
            return $mail;
        }catch(Exception $th){
            dd($th);
            return response()->json(['Mail not sent']);
        }
    }

    public static function ticketlistingadded($email) {

        try{
            $mail = Mail::to($email)->send(new TicketListingAdded());
            return $mail;
        }catch(Exception $th){
            dd($th);
            return response()->json(['Mail not sent']);
        }
    }

    public static function ticketlistingrejected($email, $ticket) {

        try{
            $mail = Mail::to($email)->send(new TicketListingRejected($ticket));
            return $mail;
        }catch(Exception $th){
            dd($th);
            return response()->json(['Mail not sent']);
        }
    }

    public static function ticketlistingapproved($email, $ticket) {

        try{
            $mail = Mail::to($email)->send(new SellerTicketApproved($ticket));
            return $mail;
        }catch(Exception $th){
            dd($th);
            return response()->json(['Mail not sent']);
        }
    }

    public static function ticketpurchased($email, $data, $purchase,$webCharge,$grand_total2,$webChargeforBuyer,) {
        
        try{
            $mail = Mail::to($email)->send(new Ticketpurchased($data, $purchase,$webCharge,$grand_total2,$webChargeforBuyer,));
            return $mail;
        }catch(Exception $th){
            dd($th);
            return response()->json(['Mail not sent']);
        }
    }

    public static function sellerticketpurchased($email, $data, $purchase,$webCharge,$grand_total) {

        try{
            $mail = Mail::to($email)->send(new SellerTicketPurchased($data, $purchase,$webCharge,$grand_total));
            return $mail;
        }catch(Exception $th){
            dd($th);
            return response()->json(['Mail not sent']);
        }
    }
}
