<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;
use PDF;
use Carbon\Carbon;

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
        
        return view('sales.index', compact('transactions'));
    }

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
