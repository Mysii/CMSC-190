<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use DB;

class UsersController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::paginate(5);
        
        return view('users.index', compact('users'));

    }

    public function admin()
    {
        //
       
        $uadmin = DB::table('users')->where('isAdmin', '=', 1)->paginate(5);
        
        return view('users.admin', compact('uadmin'));

    }

    public function staff()
    {
        //
        $ustaff= DB::table('users')->where('isAdmin', '=', 0)->paginate(5);
        
        return view('users.staff', compact('ustaff'));

    }

    public function search(){
        $q = Input::get ( 'q' );
        $search =DB::table('users')->where('name','like', '%'.$q.'%')->paginate(5);

      
        //return view('transactions.search', compact('search'));
        //return view('transactions.search',['transaction' => $transaction]);

        if(count($search) >= 0) {
            //return view('transactions.search')->withDetails($transaction)->withQuery ( $q );
            return view('users.search', compact('search'))->withDetails($search)->withQuery ( $q );
        }
        else return view ('users.search')->withMessage("No Details found. Try to search again !");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //User::create($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'contactNo' => $request->contactNo,
            'branch' => $request->branch,
            'isAdmin' => $request->isAdmin

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::findOrFail($id);

        $user->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users');
    }
}
