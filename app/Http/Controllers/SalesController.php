<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;
use PDF;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class SalesController extends Controller
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
        $transactions = Transaction::paginate(25);
        $d = Input::get ( 'dd' );
        $tsanla = DB::table('transactions')->where('transactionType', '=', 'Sanla');
        $ttubos = DB::table('transactions')->where('transactionType', '=', 'Tubos');
        
        if(count($transactions) >= 0) {
            return view('sales.index', compact('transactions'))->withDetails($transactions)->withQuery ( $d );
        }
        else return view ('sales.index')->withMessage('No Details found. Try to search again !');
    }

    public function daily()
    {
        $d = Input::get ( 'dd' );
        $searchdate =DB::table('transactions')->where('date','=', $d)->paginate(5);

        if(count($searchdate) >= 0) {
            return view('sales.daily', compact('searchdate'))->withDetails($searchdate)->withQuery ( $d );
        }
        else return view ('sales.daily')->withMessage('No Details found. Try to search again !');

    }

    public function weekly()
    {
        $transactions = Transaction::paginate(25);
        
        return view('sales.weekly', compact('transactions'));
    }

    public function monthly()
    {
        $d = Input::get ( 'dm' );
        $searchmonth =DB::table('transactions')->whereMonth('date' , $d)->paginate(5);

        if(count($searchmonth) >= 0) {
            return view('sales.monthly', compact('searchmonth'))->withDetails($searchmonth)->withQuery ( $d );
        }
        else return view ('sales.monthly')->withMessage('No Details found. Try to search again !');
    }
/*
    public function searchDate(){
        $d = Input::get ( 'd' );
        //$d1 = Input::get ( 'd1' );
        $searchdate =DB::table('transactions')->where('date','=', $d)->paginate(5);
        //$searchdate =DB::table('transactions')->where('dueDate','=', $d)->paginate(5);
        //$searchdate =DB::table('transactions')->whereBetween('date','=', [$d, $d1])->paginate(5);

      
        //return view('transactions.searchdate', compact('searchdate'));
        //return view('transactions.search',['transaction' => $transaction]);

        if(count($searchdate) >= 0) {
            return view('sales.daily', compact('searchdate'))->withDetails($searchdate)->withQuery ( $d );
        }
        else return view ('sales.daily')->withMessage('No Details found. Try to search again !');
    }
*/
     public function pdf()
    {
        $transactions = Transaction::all();
        $pdf = PDF::loadView('sales.pdf', ['transactions' => $transactions])->setPaper('a4', 'landscape');
        return $pdf->download('sales.pdf');
        //return view('transactions.pdf', compact('transactions'));
    }

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
}
