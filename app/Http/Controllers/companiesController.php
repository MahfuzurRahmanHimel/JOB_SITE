<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\compaany;
use App\jobpost;
use App\applyinfo;
use App\applicant;
use Illuminate\support\Facades\DB;


class companiesController extends Controller
{
	//for company login
  public function login(){
   	return view("companies.login");
   }

   public function verify(Request $request){
      $email=$request->email;
      $password=$request->password;
      $compaany=compaany::where('email',$email)
                           ->where('password',$password)
                           ->first();
      if($compaany){
         $request->session()->put('id',$compaany->id);
         return redirect()->route('companies.home');
      }
      else{
            $request->session()->flash('message','invalid company email or password');
            return redirect()->route('companies.login');

        }

   }
   public function home(Request $request){
      $id=$request->session()->get('id');
      $compaany=compaany::find($id);
      $jobpost=jobpost::where('com_id',$id)
                        ->get();
      return view('companies.home',compact('jobpost','compaany'));
   }

//for company register
   public function register(){
   	return view("companies.register");
   }

   public function create(Request $request ){
   		$compaany = new compaany();
   		$compaany->first_name =$request->first_name;
   		$compaany->last_name =$request->last_name;
   		$compaany->business_name =$request->business_name;
   		$compaany->email =$request->email;
         $compaany->password=$request->password;
   		$compaany->save();
   		return redirect()->route('companies.home');
	}

//company home page
	public function show(){
		return view("companies.home");
	}

//company jobpost
   public function jobpost(){
      return view("companies.jobpost");
   }

   public function post(Request $request){
      $jobpost=new jobpost();

      $jobpost->job_title=$request->job_title;
      $jobpost->job_description=$request->job_description;
      $jobpost->salary=$request->salary;
      $jobpost->location=$request->location;
      $jobpost->country=$request->country;
      $jobpost->com_id=$request->session()->get('id');
      $jobpost->save();
      return redirect()->route('companies.home')->with('success','Post has been successfully added!');
   }

   //company applicant info 
   public function applicantinfo(Request $request){
      //$applyinfo=applyinfo::all();

      $id = $request->session()->get('id');
      $compaany=compaany::find($id);
      $jobposts = jobpost::where('com_id', $id)->get();
      $applyinfos=applyinfo::all();
      $applicants=applicant::all();
      return view('companies.applicantinfo',compact('applyinfos','applicants','jobposts','compaany'));

      }

}
