<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	//
	//protected $table = 'transactions';
    protected $fillable = [
        'branch', 'transactionCode', 'transactionType', 'clientName', 'unit', 'serialNo', 'principalLoan', 'tubos', 'penalty', 'date', 'dueDate', 'staffAssigned'
    ];
/*
    public function setDueDateAttribute($date)
    {
        $this->attributes['dueDate'] = date('m-d-Y', strtotime($this->attributes['date'] .' +30 days '));
    }
*/
   /* 
    public function getTotalSanlaAttribute() {
	    return $this->principalLoan;
	}

	public function getTotalTubosAttribute() {
	    return $this->tubos;
	}
*/
    public function getTotalAttribute() {
        return $this->tubos + $this->penalty - $this->principalLoan;
    }

    public function getOverAllTotalAttribute() {
        return $this->sum('tubos') + $this->sum('penalty') - $this->sum('principalLoan');
    }
    
}
