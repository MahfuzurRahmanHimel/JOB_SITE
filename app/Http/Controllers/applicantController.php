<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\applicant;
use App\jobpost;
use App\applyinfo;
use App\compaany;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\support\Facades\DB;






class applicantController extends Controller
{
	//Applicant Login
    public function login(){
    	return view('applicant.login');
    }

    public function verify(Request $request){
        $email=$request->email;
        $password=$request->password;
        
        $applicant=applicant::where('email',$email)
                            ->where('password',$password)
                            ->first();
        
        if($applicant){
            $request->session()->put('id',$applicant->id);
            $request->session()->put('user',$applicant->first_name);
            return view('applicant.home',compact('$applicant'));
            //return redirect()->route('applicant.home');
            
        }
        else{
            $request->session()->flash('message','invalid applicant email or password');
            return redirect()->route('applicant.login');

        }
    }

    //Applicant Registration
    public function register(){
    	return view('applicant.register');
    }

    public function create(Request $request){
    	$applicant=new applicant();
    	$applicant->first_name=$request->first_name;
    	$applicant->last_name=$request->last_name;
    	$applicant->email=$request->email;
    	$applicant->password=$request->password;
    	// $applicant->profile_pic=$request->profile_pic;
    	// $applicant->resume=$request->resume;
    	// $applicant->skills=$request->skills;
    	$applicant->save();
    	return redirect()->route('applicant.home');
    }

    //applicant home
    public function show(){
    	return view('applicant.home');
    }

    //Applicant View Job
    public function viewjob(){
        
    	$compaany=compaany::all();
        $jobposts = jobpost::all();
                                          
    	return view('applicant.viewjob',compact('jobposts','compaany'));
    }


    //Applicant Profile
    public function profile(Request $request){
     $id=$request->session()->get('id');
    	$applicant= applicant::find($id);
                                
                           
    	return view('applicant.profile')->with('applicant',$applicant);
    }


    //Applicant Profile Update
    public function profileUpdate(Request $request,$id){
    	$applicant=applicant::find($id)
    						->first();
    	return view('applicant.update')->with('applicant',$applicant);
    }

    public function updatedProfile(Request $request,$id){
    	$applicant=applicant::find($id);
    	$applicant->first_name=$request->first_name;
    	$applicant->last_name=$request->last_name;
    	$applicant->email=$request->email;
    	//$applicant->password=$request->password;
    	// if($request->hasFile('profile_pic')) {
	    //     $profile_pic = $request->file('profile_pic');
	    //     $filename = $profile_pic->getClientOriginalName();
	    //     $profile_pic->move(public_path('images'), $filename);
	    //     $applicant->profile_pic = $request->file('profile_pic')->getClientOriginalName();
    	// }
    	//$applicant->profile_pic=$request->profile_pic;
    	if ($request->has('profile_pic')) {
            // Get image file
            $image = $request->file('profile_pic');
   	     	$filename = time() . '.' . $image->getClientOriginalExtension();
        	Image::make($image)->resize(250,250)->save(public_path('/images/'.$filename));
        	$imagePath = $filename;
        	$applicant->profile_pic=$imagePath;
        }
    	//$applicant->resume=$request->resume;
        if ($request->has('resume')) {
            // Get image file
            $resume = $request->file('resume');
   	     	$filename = time() . '.' . $resume->getClientOriginalExtension();
        	// Storage::make($resume)->save(public_path('/files/'.$filename));
            $destinationPath = 'files';
            $resume->move($destinationPath,$filename);
        	// $resumePath = $filename;
        	$applicant->resume=$filename;
        }
       // $path = $request->file('resume')->store('avatars');
    	$applicant->skills=$request->skills;
    	$applicant->save();
    	return redirect()->route('applicant.profile');

    }


	//Applicant Apply
    public function apply(Request $request,$id){
    	//applicant id from session
        $aid = $request->session()->get('id');
    	//check if applicant has profile infos
    	//apply for job
        // $resume=$request->resume;

        $applicant=applicant::find($aid);

        if($applicant->resume){


            $apply = new applyinfo;
            $apply->job_id = $id;
            $apply->applicant_id = $aid;
            
            $apply->save();
            return redirect()->back() ->with('alert', 'Applied!');
            //return redirect()->route('applicant.viewjob');
            
        }
        else{

            return redirect()->route('applicant.profile') ->with('error', 'your resume is not uploaded!');
            //$request->session()->flash('message','your resume is not uploaded');
            //return redirect()->route('applicant.profile');

        }
    	//return $id;
    }
}
