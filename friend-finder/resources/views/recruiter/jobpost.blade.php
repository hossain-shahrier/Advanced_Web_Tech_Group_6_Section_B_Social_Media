@extends('layouts.master')

@section('content')
<br>
<center><h2>POST A JOB</h2> </center>

<form method="post" enctype="multipart/form-data">  
  @csrf
    <div class="row g-3">
  <div class="col-md-5">
    <label for="jobtitle" class="form-label">Job Title</label>
    <input type="text" class="form-control" id="jobtitle" name="jobtitle">
  </div>
  <div class="col-md-6">
    <label for="jobinfo" class="form-label">Job Information</label>
    <!-- <input type="" class="form-control" id="jobinfo"> -->
    <textarea class="form-control" id="jobinfo" name="jobinfo"></textarea>
  </div>
  <div class="col-2">
    <label for="jobcategory" class="form-label">Job Category</label>
    <input type="text" class="form-control" id="jobcategory" name="jobcategory" >
  </div>

  <div class="col-md-4">
    <label for="jobtype" class="form-label">Job Type</label>
    <select id="jobtype" class="form-control" name="jobtype">
    <option>Select Job Type</option>
                        <option value="fulltime">Fulltime</option>
                        <option value="parttime">Parttime</option>
                        <option value="partership">Partership</option>
                        
    </select>
  </div>
  

  <div class="col-7">
    <label for="joblocation" class="form-label">Job Location</label>
    <!-- <input type="text" class="form-control" id="joblocation" placeholder="Apartment, studio, or floor"> -->
    <textarea class="form-control" id="joblocation" name="joblocation"></textarea>

  </div>
  <div class="col-md-6">
    <label for="jobapplicant" class="form-label">Job Applicant</label>
    <input type="text" class="form-control" id="jobapplicant" name="jobapplicant">
    <br>
  </div>
 
  <!-- <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div> -->

   

  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" value="Submit Job">Submit Job</button>
  </div>
</div>
</form>
    
  {{session('msg')}}

<br>
@foreach($errors->all() as $error)
      
      {{$error}} <br>


@endforeach
@endsection