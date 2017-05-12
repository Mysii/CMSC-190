<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Chikka;
use App\Transaction;
use App\User;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon\Carbon;

class SendNotifController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        //$transactions = DB::table('transactions')->select('contactNo')->all();
        //return view('sendnotif.index'
        $transactions = Transaction::all();
        
        return view('sendnotif.index', compact('transactions'));


        //return view('sendnotif.index', compact('transactions'));
    }

    public function sendSMS()
    {
        // Mobile number of receiver and message to send
        //$mobile = '09157514851';
        //$message = 'Hello world';

        $mobile = Input::get ( 'mobile' );
        $message = Input::get ( 'message' );

        // Send SMS
        $response = Chikka::send($mobile, $message);

        // Send SMS and retrieve response
        //$response = $chikka->send($mobile, $message);

        // Get message id
        $messageId = $response->attachments->message->id;
        return redirect()->back();
    }

    public function sendNotif()
    {
        $dt = Carbon::now();
        $beforedt = $dt->subWeek();
        $transactions = Transaction::where('dueDate','>=', $beforedt )->select('contactNo')->get();

        // Mobile number of receiver and message to send
        //$mobile = '09157514851';
        $message = "Good day! Please be reminded that your pawn will be defaulted after a week. Please redeem your pawn before its maturity date. From J&M Pawnshop.";

        $mobile =  $transactions;
        //$message = Input::get ( 'message' );

        // Send SMS
        $response = Chikka::send($mobile, $message);

        // Send SMS and retrieve response
        //$response = $chikka->send($mobile, $message);

        // Get message id
        $messageId = $response->attachments->message->id;
        return redirect()->back();
    }
}
