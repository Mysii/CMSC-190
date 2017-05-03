<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renew extends Model
{
	//
	//protected $table = 'transactions';
    protected $fillable = [
        'branch', 'transactionCode', 'transactionType', 'clientName', 'unit', 'serialNo', 'principalLoan', 'tubos', 'penalty', 'renewfee', 'date', 'dueDate', 'staffAssigned'
    ];
/*
    public function setDueDateAttribute($date)
    {
        $this->attributes['dueDate'] = date('m-d-Y', strtotime($this->attributes['date'] .' +30 days '));
    }
*/
    
   
    
}
