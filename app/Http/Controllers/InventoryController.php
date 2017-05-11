<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;
use PDF;
use Carbon\Carbon;

class InventoryController extends Controller
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
        $dt = Carbon::now();
        $beforedt = $dt->subWeek();
        $transactions = Transaction::where('dueDate','>=', $dt )->orWhere('dueDate','>=', $beforedt )->paginate(5);
        
        return view('inventory.index', compact('transactions'));
    }

    public function remata()
    {
        $dt = Carbon::now();
        $transactions =DB::table('transactions')->where('dueDate','>=', $dt )->paginate(5);
        
        return view('inventory.remata', compact('transactions'));
    }

    public function mareremata()
    {
        $dt = Carbon::now();
        $beforedt = $dt->subWeek();
        $transactions =DB::table('transactions')->where('dueDate','>=', $beforedt )->paginate(5);
        
        return view('inventory.mareremata', compact('transactions'));
    }

    public function pdf()
    {
        $transactions = Transaction::all();
        $pdf = PDF::loadView('transactions.pdf', ['transactions' => $transactions])->setPaper('a4', 'landscape');
        return $pdf->download('transactions.pdf');
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
        $searchdate =DB::table('transactions')->where('date','=', $d)->paginate(5);
        $searchdate =DB::table('transactions')->where('dueDate','=', $d)->paginate(5);
        //$searchdate =DB::table('transactions')->whereBetween('date','=', [$d, $d1])->paginate(5);

      
        //return view('transactions.searchdate', compact('searchdate'));
        //return view('transactions.search',['transaction' => $transaction]);

        if(count($searchdate) >= 0) {
            return view('transactions.searchdate', compact('searchdate'))->withDetails($searchdate)->withQuery ( $d );
        }
        else return view ('transactions.searchdate')->withMessage('No Details found. Try to search again !');
    }
}
