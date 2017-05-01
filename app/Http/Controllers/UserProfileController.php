<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Auth;
use Input;
//use App\userprofile;
use App\User;

class UserProfileController extends Controller
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
        //return view('userprofile');
        //$user=userprofile::where('name', '=', '{{ Auth::user()->name }}')->get();
        //return view('userprofile')->with('user',$user);

        $user = Auth::user();
        return view('userprofile')->with(['user' => $user]);
    }
/*
    public function store()
    {
        $name =Input::get('name');
        $branch =Input::get('branch');
        $contactNo =Input::get('contactNo');
        $isAdmin =Input::get('isAdmin');

        //$user = DB::table('users')->where('name', '{{ Auth::user()->name }}')->first();
        $data=array(
                'id'=>$id,
                'name'=>$name,
                'branch'=>$branch,
                'contactNo'=>$contactNo,
                'isAdmin'=>$isAdmin,

            );

            $response=userprofile::create($data);
            if($response)
            {
                return redirect()->back();
            }
    }
*/
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));

    }
    
}
