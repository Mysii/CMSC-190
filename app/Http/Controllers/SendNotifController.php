<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Chikka;
use App\Transaction;
use App\User;
use Illuminate\Support\Facades\Input;
use DB;

class SendNotifController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        //$transactions = DB::table('transactions')->select('contactNo')->all();
        //return view('sendnotif.index');
        $transactions = User::all();
        
        return view('sendnotif.index', compact('transactions'));


        //return view('sendnotif.index', compact('transactions'));
    }

    /*public function sendSMS()
    {
        // Mobile number of receiver and message to send
        $mobile = '09157514851';
        $message = 'Hello world';

        // Send SMS
        Chikka::send($mobile, $message);
    }*/
}
