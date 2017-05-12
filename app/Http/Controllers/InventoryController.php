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
        $transactions = Transaction::where('dueDate','<=', $dt )->orWhere('dueDate','>=', $beforedt )->paginate(5);
        
        return view('inventory.index', compact('transactions'));
    }

    public function remata()
    {
        $dt = Carbon::now();
        $transactions =Transaction::where('dueDate','>=', $dt )->paginate(5);
        
        return view('inventory.remata', compact('transactions'));
    }

    public function mareremata()
    {
        $dt = Carbon::now();
        $beforedt = $dt->subWeek();
        $transactions =Transaction::where('dueDate','>=', $beforedt )->paginate(5);
        
        return view('inventory.mareremata', compact('transactions'));
    }

    public function pdf()
    {
        $dt = Carbon::now();
        $beforedt = $dt->subWeek();
        $transactions = Transaction::where('dueDate','>=', $dt )->orWhere('dueDate','>=', $beforedt )->get();
        $pdf = PDF::loadView('inventory.pdf', ['transactions' => $transactions])->setPaper('a4', 'landscape');
        return $pdf->download('inventory.pdf');
        //return view('transactions.pdf', compact('transactions'));
    }

    public function downloadExcel()
    {
        $dt = Carbon::now();
        $beforedt = $dt->subWeek();
        $data = Transaction::where('dueDate','>=', $dt )->orWhere('dueDate','>=', $beforedt )->get()->toArray();
        return Excel::create('inventory', function($excel) use ($data) 
        {
            $excel->sheet('inventory', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->export('xlsx');
    }

    public function search(){
        $dt = Carbon::now();
        $beforedt = $dt->subWeek();
        //$transactions = Transaction::where('dueDate','>=', $dt )->orWhere('dueDate','>=', $beforedt )->paginate(5);

        $q = Input::get ( 'q' );
        $search = Transaction::where('dueDate','>=', $dt )->orWhere('dueDate','>=', $beforedt )->where('clientName','like', '%'.$q.'%')->orWhere('transactionCode','like', '%'.$q.'%')->paginate(5);
       // $search =DB::table('transactions')->where('transactionCode','like', '%'.$q.'%')->paginate(5);

      
        //return view('transactions.search', compact('search'));
        //return view('transactions.search',['transaction' => $transaction]);

        if(count($search) >= 0) {
            //return view('transactions.search')->withDetails($transaction)->withQuery ( $q );
            return view('inventory.search', compact('search'))->withDetails($search)->withQuery ( $q );
        }
        else return view ('inventory.search')->withMessage("No Details found. Try to search again !");
    }

    public function searchDate(){
        $dt = Carbon::now();
        $beforedt = $dt->subWeek();
        $d = Input::get ( 'd' );
        //$d1 = Input::get ( 'd1' );
        $searchdate =Transaction::where('dueDate','>=', $dt )->orWhere('dueDate','>=', $beforedt )->where('date','=', $d)->paginate(5);
        $searchdate =Transaction::where('dueDate','>=', $dt )->orWhere('dueDate','>=', $beforedt )->where('dueDate','=', $d)->paginate(5);
        //$searchdate =DB::table('transactions')->whereBetween('date','=', [$d, $d1])->paginate(5);

      
        //return view('transactions.searchdate', compact('searchdate'));
        //return view('transactions.search',['transaction' => $transaction]);

        if(count($searchdate) >= 0) {
            return view('transactions.searchdate', compact('searchdate'))->withDetails($searchdate)->withQuery ( $d );
        }
        else return view ('transactions.searchdate')->withMessage('No Details found. Try to search again !');
    }
}
