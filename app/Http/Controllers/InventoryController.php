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
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::paginate(25);
        
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
        $pdf = PDF::loadView('inventory.pdf', ['transactions' => $transactions])->setPaper('a4', 'landscape');
        return $pdf->download('inventory.pdf');
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
