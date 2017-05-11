<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Renew;

class RenewController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
        //
        $renew = Renew::paginate(5);
        
        return view('renew.index', compact('renew'));

    }

    public function store(Request $request)
    {
        $renew = Renew::create($request->all());
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

        return view('renew.index');
        
    }
}
