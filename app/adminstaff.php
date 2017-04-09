<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

class adminstaff extends Model {
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'branch', 'contactNo', 'isAdmin'
    ];
}