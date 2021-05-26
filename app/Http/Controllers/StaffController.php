<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs=staff::paginate(5);
        $role=Auth::user()->role;

        if($role=='1')
        {
            return view('staff.index',['staff'=>$staffs]);
        }
        else
        {
            return view('dashboard');
        }


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staffs= new staff;
            $staffs->sname=$request->sname;
            $staffs->saddress=$request->saddress;
            $staffs->sphone=$request->sphone;
            $staffs->semail=$request->semail;
            $staffs->sgender=$request->sgender;
            $staffs->sdesignation=$request->sdesignation;
            $staffs->ssalary=$request->ssalary;
            $staffs->sdoj=$request->sdoj;
            
            $staffs->save();
        if($staffs){
            return redirect()->back()->with('Staff Added Successfully');
        }
         return redirect()->back()->with('Staff Add failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staffs=staff::find($id);
        
        if(!$staffs){
            return back()->with('Error','Staff not found');
        }
        $staffs->update($request->all());
        return back()->with('Success','Staff updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staffs=staff::find($id);
        
        if(!$staffs){
            return back()->eith('Error','Staff not found');
        }
        $staffs->delete();
        return back()->with('Success','Staff deleted successfuly');
    }
}
