<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Chikka;
use App\Transaction;
use App\User;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;
use PDF;
use Carbon\Carbon;

class TransactionsController extends Controller
{

     public function __construct()
    {
        $this->middleware('guest');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        /*
        $dt = Carbon::now();
        $beforedt = $dt->subWeek();
        $transaction = Transaction::where('dueDate','>=', $beforedt )->select('contactNo')->get();

        // Mobile number of receiver and message to send
        //$mobile = '09157514851';
        $message = "Good day! Please be reminded that your pawn will be defaulted after a week. Please redeem your pawn before its maturity date. From J&M Pawnshop.";

        $mobile =  $transaction;
        //$message = Input::get ( 'message' );

        // Send SMS
        $response = Chikka::send($mobile, $message);

        // Send SMS and retrieve response
        //$response = $chikka->send($mobile, $message);

        // Get message id
        $messageId = $response->attachments->message->id;
        //return redirect()->back();
        */
        
        $transactions = Transaction::paginate(5);
        
        return view('transactions.index', compact('transactions'));


    }

    public function sanla()
    {
        //
       
        $tsanla = DB::table('transactions')->where('transactionType', '=', 'Sanla')->paginate(5);
        
        return view('transactions.sanla', compact('tsanla'));

    }

    public function renew()
    {
        //
        $trenew= DB::table('transactions')->where('transactionType', '=', 'Renew')->paginate(5);
        
        return view('transactions.renew', compact('trenew'));

    }

    public function tubos()
    {
        //
        $ttubos = DB::table('transactions')->where('transactionType', '=', 'Tubos')->paginate(5);
        
        return view('transactions.tubos', compact('ttubos'));

    }

    public function search(){
        $q = Input::get ( 'q' );
        $search =DB::table('transactions')->where('clientName','like', '%'.$q.'%')->orWhere('transactionCode','like', '%'.$q.'%')->paginate(5);
       // $search =DB::table('transactions')->where('transactionCode','like', '%'.$q.'%')->paginate(5);

      
        //return view('transactions.search', compact('search'));
        //return view('transactions.search',['transaction' => $transaction]);

        if(count($search) >= 0) {
            //return view('transactions.search')->withDetails($transaction)->withQuery ( $q );
            return view('transactions.search', compact('search'))->withDetails($search)->withQuery ( $q );
        }
        else return view ('transactions.search')->withMessage("No Details found. Try to search again !");
    }

    public function searchDate(){
        $d = Input::get ( 'd' );
        //$d1 = Input::get ( 'd1' );
        $searchdate =DB::table('transactions')->where('date','=', $d)->orWhere('dueDate','=', $d)->paginate(5);
        //$searchdate =DB::table('transactions')->whereBetween('date','=', [$d, $d1])->paginate(5);

      
        //return view('transactions.searchdate', compact('searchdate'));
        //return view('transactions.search',['transaction' => $transaction]);

        if(count($searchdate) >= 0) {
            return view('transactions.searchdate', compact('searchdate'))->withDetails($searchdate)->withQuery ( $d );
        }
        else return view ('transactions.searchdate')->withMessage('No Details found. Try to search again !');
    }

    /**
     * File Export Code
     *
     * @var array
     */
    
    public function downloadExcel()
    {
        $data = Transaction::get()->toArray();
        return Excel::create('transactions', function($excel) use ($data) 
        {
            $excel->sheet('transactions', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->export('xlsx');
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transactions = Transaction::create($request->all());
        /*Transaction::create([
            'branch' => $request->branch,
            'transactionCode' => $request->transactionCode,
            'transactionType' => $request->transactionType,
            'clientName' => $request->clientName,
            'unit' => $request->unit,
            'serialNo' => $request->serialNo,
            'principalLoan' => $request->principalLoan,
            'tubos' => $request->tubos,
            'penalty' => $request->penalty,
            'date' => $request->date,
            'dueDate' => $request->date->addDays(30),
            'staffAssigned' => $request->staffAssigned
        ]);*/

        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $transaction = Transaction::findOrFail($id);
        return view('transactions.show', compact('transaction'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $transaction = Transaction::findOrFail($id);
        return view('transactions.edit', compact('transaction'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $transaction = Transaction::findOrFail($id);

        $transaction->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect('/transactions');
    }

    public function pdf()
    {
        $transactions = Transaction::all();
        $pdf = PDF::loadView('transactions.pdf', ['transactions' => $transactions])->setPaper('a4', 'landscape');
        return $pdf->download('transactions.pdf');
        //return view('transactions.pdf', compact('transactions'));
    }

    
    
   
    

}
