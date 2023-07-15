<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function addview()
   {
    return view('admin.include.add_doctor');
   }
   public function doctordata(Request $request)
   {
      $doctor=new Doctor;
      if($request->hasFile('image')){

         $file=$request->file('image');
         $ext=$file->getClientOriginalExtension();
         $filename=time().'.'.$ext;
         $file->move('assets/uploads/doctors/',$filename);
         $doctor->image=$filename;
      } 
      $doctor->name=$request->name;
      $doctor->phone=$request->phone;
      $doctor->speciality=$request->speciality;
      $doctor->room=$request->room;
      $doctor->save();
      return redirect()->back()->with('status','Doctor added successfully');
   }
   public function appointment(Request $request)
   {
      $data=new Appointment;
      $data->name=$request->name;
      $data->email=$request->email;
      $data->doctor=$request->doctor;
      $data->date=$request->date;
      $data->phone=$request->phone;
      $data->message=$request->message;
      $data->status="in progress..";
     
     
      if(Auth::id())
      {
         $data->user_id=Auth::user()->id;
      }
      $data->save();
      return redirect()->back()->with('status',"Appoint Request is successful,We will contact with you soon");
   
   }
}
