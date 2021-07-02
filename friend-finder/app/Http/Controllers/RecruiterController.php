<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\JobApply;
use Validator;
use App\Http\Requests\JobRequest;
use App\Http\Requests\ApplyRequest;
use App\Http\Requests\SearchRequest;

class RecruiterController extends Controller
{
    // public function index(){

    //     return view('recruiter.header');
    //     //return view('recruiter.jobpost');
    // }


    public function home(){

        return view('recruiter.jobhome');
        //return view('recruiter.jobpost');
    }
    public function jobindex(){

        return view('recruiter.jobpost');
        //return view('recruiter.jobpost');
    }

    public function postjob(JobRequest $req){
        $job = new JobPost;

        $job->title = $req->jobtitle;
        $job->info = $req->jobinfo;
        $job->category = $req->jobcategory;
        $job->type = $req->jobtype;
        $job->location = $req->joblocation;

        $job->save();

        return redirect()->route('recruiter.home');

        
    }

    public function joblist(){
        
        $job = JobPost::all();
        
        return view('recruiter.joblist')->with('joblist', $job);
    }

    public function jobedit($id){
        
        $job = JobPost::where('id', $id)
                            ->first();
        return view('recruiter.jobupdate')->with('job', $job);
    }

    public function jobupdate(JobRequest $req, $id){
        
        $job = JobPost::where('id', $id)
                            ->first();

        $job->title = $req->jobtitle;
        $job->info = $req->jobinfo;
        $job->category = $req->jobcategory;
        $job->type = $req->jobtype;
        $job->location = $req->joblocation;
                    
        $job->save();
        $req->session()->flash('msg','update successful');           
        return redirect()->route('recruiter.joblist');
    }

    public function jobfind(){
        $search = JobPost::all();
        $result = JobPost::where('title', 'LIKE', "%{$search}%")
                           ->orWhere('category', 'LIKE', "%{$search}%") 
                           ->get();
        // return view('recruiter.jobsearch', compact('result'));
        return view('recruiter.jobsearch')->with('result', $result);

        // return view('recruiter.jobsearch');

    }

    public function jobsearch(SearchRequest $req){
        //$search = JobPost::all();
        $result = JobPost::where('title', 'LIKE', "%{$req->searching}%")
                           ->orWhere('category', 'LIKE', "%{$req->searching}%") 
                           ->get();
        // return view('recruiter.jobsearch', compact('result'));
        return view('recruiter.jobsearch')->with('result', $result);
    }

    public function jobget($id){

        // $job = JobPost::where('id', $id)
        //                     ->first();
        //return view('recruiter.jobupdate')->with('job', $job);

        return view('recruiter.jobapply');
    }


    public function jobapply(ApplyRequest $req, $id){

        
        $apply = new JobApply;
        $job = JobPost::where('id', $id)
                            ->first();
        $jobcount = $job->applicants;
        $jobcount+=1;
        $job->applicants = $jobcount;
        $job->save();
        // $job = JobPost::join('jobs')

        if($req->hasFile('addfile')){
            $file = $req->file('addfile');
            $filename = $file->getClientOriginalName();
            $fileex = $filename. '.' .$file->getClientOriginalExtension();
            // $filemim = $file->getMimType();
            $filesize = $file->getSize();

            
            $file->move('upload/', $filename);

            $apply->file = $filename;

        }
        if($req->hasFile('documents')){
            $document = $req->file('documents');
            $documentname = $document->getClientOriginalName();
            $documentex = $documentname. '.' .$document->getClientOriginalExtension();
            // $filemim = $file->getMimType();
            $documentsize = $document->getSize();

            
            $document->move('upload/', $documentname);

            $apply->document = $documentname;

        }

        $apply->job_id = $job->id;
        $apply->firstname = $req->firstname;
        $apply->lastname = $req->lastname;
        $apply->email = $req->email;
        $apply->phone = $req->phone;
        $apply->address = $req->address;
        
        $apply->save();

        // $job->applicants = $jobcount;
        // $job->save();

        return redirect()->route('recruiter.home');
    }

    public function jobapplicants(){
        $applicant = JobApply::all();
        
        return view('recruiter.applicantlist')->with('applicantlist', $applicant);
    }
    
    public function viewapplicantdetails($id){
        // $job = JobPost::where('id', $id)
        //                     ->first();
        $applicant = JobApply::where('id', $id)
                              ->get();
        
        return view('recruiter.applicantview')->with('applicants', $applicant);
    }

    public function viewfiles($id){
        $value = JobApply::where('id', $id)
                           ->get();

        return view('recruiter.viewfiles')->with('value', $value); 
    }

    public function download($file){
        return response()->download('upload/' . $file);
    }

    public function viewdocument($id){
        $document = JobApply::where('id', $id)
                           ->get();

        return view('recruiter.viewdocument')->with('document', $document);
    }

    public function downloaddocument($document){
        return response()->download('upload/' . $document);
    }

}
