<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\applicant;
use App\Model\jobpost;
use App\Model\company;
use App\Model\apply;
use Session;

class applicantController extends Controller
{
    public function login()
    {
        return view('applicant.login');
    }

    public function loginCheck(Request $request)
    {
        $email=$request->email_address;
        $password=$request->password;

        $applicant=applicant::where('email_address',$email)
                            ->where('password',$password)
                            ->first();

        if($applicant){
            $request->session()->put('id',$applicant->id);
            return redirect()->route('applicant.jobApply');

        }
        else{
            $request->session()->flash('message','Wrong Email or Password !!!');
            return redirect()->route('applicant.login');
        }
    }

    public function register()
    {
        return view('applicant.register');
    }

    public function store(Request $request)
    {
        $applicant = applicant::create($request->all());
        return redirect()->route('applicant.login');
    }

    public function jobApply(Request $request)
    {
        $id = $request->session()->get('id');
        $applicant = applicant::find($id);
        $jobpost = jobpost::all();
        $company = company::all();
        return view('applicant.jobApply')->with('jobpost',$jobpost)->with('company',$company)->with('applicant',$applicant);
    }

    public function apply(Request $request,$id){

        $applicant_id = $request->session()->get('id');

        $applicant = applicant::find($applicant_id);

        if($applicant->upload_resume)
        {
            $apply = new apply;
            $apply->job_id = $id;
            $apply->applicant_id = $applicant_id;
            $apply->save();
            return redirect()->back()->with('alert', 'Applied!');
        }
        else
        {
            return redirect()->back() ->with('alert', 'your resume is not uploaded!');
            $request->session()->flash('alert','your resume is not uploaded');
            return redirect()->route('applicant.profile');
        }
    }

    public function profile(Request $request)
    {
        $id = $request->session()->get('id');
        $applicant = applicant::find($id);
        return view('applicant.profile',compact('applicant'));
    }

    public function profileStore(Request $request)
    {
        $id = $request->session()->get('id');
        $applicant = applicant::find($id);


        if($request->hasfile('profile_picture')){
            $file = $request->file('profile_picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/profile picture',$filename);
            $applicant->profile_picture=$filename;
        }

        if($request->hasfile('upload_resume')){
            $file = $request->file('upload_resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('files/resume',$filename);
            $applicant->upload_resume=$filename;
        }

        $applicant->skills = $request->skills;

        $applicant->save();
        return redirect()->route('applicant.viewProfile');
    }

    public function updateProfile($id)
    {
        $applicant = applicant::find($id);
		return view('applicant.updateProfile')->with('applicant',$applicant);
    }

    public function updateProfileStore(Request $request)
    {
        $id = $request->session()->get('id');
        $applicant = applicant::find($id);
        $applicant->first_name = $request->first_name;
        $applicant->last_name = $request->last_name;
        $applicant->email_address = $request->email_address;

        if($request->hasfile('profile_picture')){
            $file = $request->file('profile_picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/profile picture',$filename);
            $applicant->profile_picture=$filename;
        }

        if($request->hasfile('upload_resume')){
            $file = $request->file('upload_resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('files/resume',$filename);
            $applicant->upload_resume=$filename;
        }

        $applicant->skills = $request->skills;

        $applicant->save();
        return redirect()->route('applicant.viewProfile');
    }

    public function viewProfile(Request $request)
    {
        $id = $request->session()->get('id');
        $applicant = applicant::find($id);
        return view('applicant.viewProfile')->with('applicant',$applicant);
    }

    public function logout(Request $request)
    {
        Session::flush();
    	$request->session()->regenerate();
    	return redirect()->route('applicant.login');;
    }
}
