<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\company;
use App\Model\jobpost;
use App\Model\applicant;
use App\Model\apply;
use Session;

class companyController extends Controller
{
    public function login()
    {

        return view('company.login');
    }

    public function loginCheck(Request $request)
    {
        $email=$request->email_address;
        $password=$request->password;

        $company=company::where('email_address',$email)
                            ->where('password',$password)
                            ->first();

        if($company){
            $request->session()->put('id',$company->id);
            return redirect()->route('company.dashboard');

        }
        else{
            $request->session()->flash('message','Wrong Email or Password !!!');
            return redirect()->route('company.login');
        }
    }

    public function register()
    {
        return view('company.register');
    }

    public function store(Request $request)
    {
        $company = company::create($request->all());
        return redirect()->route('company.login');
    }

    public function dashboard(Request $request)
    {
        $id = $request->session()->get('id');
        $company = company::find($id);
        $jobpost = jobpost::where('cid',$id)->get();
        $applicant = applicant::all();
        $apply = apply::all();
        return view('company.dashboard',compact('company','jobpost','applicant','apply'));
    }

    public function jobPost(Request $request)
    {
        $id = $request->session()->get('id');
        $company = company::find($id);
        return view('company.jobPost')->with('company',$company);
    }

    public function jobPostStore(Request $request)
    {
        $id = $request->session()->get('id');
        $company = company::find($id);

        $jobpost = new jobpost;
        $jobpost->cid = $request->session()->get('id');
        $jobpost->job_title = $request->job_title;
        $jobpost->job_description = $request->job_description;
        $jobpost->salary = $request->salary;
        $jobpost->location = $request->location;
        $jobpost->country = $request->country;
        $jobpost->save();
        return view('company.jobPost')->with('company',$company);
    }

    public function viewPost(Request $request)
    {
        $cid = $request->session()->get('id');
        $company = company::find($cid);
        $jobpost = jobpost::where('cid',$cid)->get();
        return view('company.viewPost')->with('jobpost',$jobpost)->with('company',$company);
    }

    public function editJobpost(Request $request,$id)
    {
        $cid = $request->session()->get('id');
        $company = company::find($cid);

        $jobpost = jobPost::find($id);
        return view('company.editJobpost')->with('jobpost',$jobpost)->with('company',$company);
    }

    public function updateJobpost(Request $request,$id)
    {
        $cid = $request->session()->get('id');
        $company = company::find($cid);

        $jobpost = jobPost::find($id);
        $jobpost->job_title=$request->job_title;
        $jobpost->job_description=$request->job_description;
        $jobpost->salary=$request->salary;
        $jobpost->location=$request->location;
        $jobpost->country=$request->country;
        $jobpost->save();

        return redirect()->route('company.viewPost')->with('company',$company);
    }

    public function deleteJobpost($id)
    {
        $jobpost = jobPost::find($id);
        $jobpost->delete();

        return redirect()->route('company.viewPost');
    }

    public function deleteAppliedpost($id)
    {
        $apply = apply::find($id);
        $apply->delete();

        return redirect()->route('company.dashboard');
    }

    public function logout(Request $request)
    {
        Session::flush();
    	$request->session()->regenerate();
    	return redirect()->route('company.login');;
    }
}
