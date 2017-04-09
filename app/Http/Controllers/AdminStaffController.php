<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use App\adminstaff;

class AdminStaffController extends Controller
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
        //return view('adminstaff');
        $data=adminstaff::paginate(5);
        return view('adminstaff')->with('data',$data);
    }
    
    public function store()
    {
        $name =Input::get('name');
        $branch =Input::get('branch');
        $contactNo =Input::get('contactNo');
        $isAdmin =Input::get('isAdmin');
        $data=array(
                'id'=>$id,
                'name'=>$name,
                'branch'=>$branch,
                'contactNo'=>$contactNo,
                'isAdmin'=>$isAdmin,

            );

            $response=adminstaff::create($data);
            if($response)
            {
                return redirect()->back();
            }
    }
    
    public function edit($id)
    {
        $data = adminstaff::findOrFail($id);

        return view('adminstaff')->with('data',$data);
    }

    public function update($id, Request $request)
    {
        $data = adminstaff::findOrFail($id);

        $this->validate($request, [
            'id'=>$id,
            'name'=>$name,
            'branch'=>$branch,
            'contactNo'=>$contactNo,
            'isAdmin'=>$isAdmin,
        ]);

        $input = $request->all();

        $data->fill($input)->save();

        //Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }
/*
    public function destroy($id)
    {
        if(isset($id)) {
            $data = adminstaff::findOrFail($id);
            if($data) {
                adminstaff::find($id)->delete();
                //return redirect('/')->with('success', 'Record has been deleted');return redirect()->back();
                return redirect()->back();
            }
        }
    }*/
    public function destroy($id)
    { 
        $data = adminstaff::findOrFail($id);
        $data->delete(); 
        
        return redirect('/adminstaff');
    }
}
