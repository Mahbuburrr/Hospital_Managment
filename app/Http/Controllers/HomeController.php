<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
   public function redirect()
   {

    if(Auth::id()){

        if(Auth::User()->usertype=='0'){
            $doctor=Doctor::all();
            return view('user.home',compact('doctor'));
        }
        else{

            return view('admin.home');
        }
    }
    else{
        return redirect()->back();
    }
   }
   public function index()
   {
    if(auth::id())
    {
        return redirect('home');
    }
    else
    {$doctor=Doctor::all();
    return view('user.home',compact('doctor'));}
   }
   public function myappointment()
   {
    if(Auth::check())
    {
        $user_id=Auth::User()->id;
        $appointment=Appointment::where('user_id',$user_id)->get();
        return view('user.include.myappointment',compact('appointment'));
    }
    else{
        return redirect()->back();
    }
   }
   public function cancel_appoint($id){

    $data=Appointment::find($id);
    $data->delete();
    return redirect()->back()->with('status',"Appointment is deleted successfully");
   }
}
