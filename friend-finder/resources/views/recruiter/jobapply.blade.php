@extends('layouts.master')

@section('content')
<br>
<center><h2>Apply Here</h2></center>

<form method="post" enctype="multipart/form-data">  
    @csrf
      <div class="row g-3">
    <div class="col-md-5">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="col-md-5">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
      </div>
      <div class="col-md-5">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="col-md-5">
        <label for="phone" class="form-label">Phone</label>
        <input type="number" class="form-control" id="phone" name="phone">
      </div>

    <div class="col-md-7">
      <label for="address" class="form-label">Address</label>
      <!-- <input type="text" class="form-control" id="joblocation" placeholder="Apartment, studio, or floor"> -->
      <textarea class="form-control" id="address" name="address"></textarea>
      
  
    </div>
    <h3></h3>

    <div class="col-md-4" >
      <label for="addfile" class="form-label">Attach Your CV</label>
      <input class="form-control form-control-sm" id="addfile" name="addfile" type="file">
      <br>
      
    </div>
   
    {{-- <div class="col-md-4" >
      <label for="documents" class="form-label">Upload Documents</label>
      <input class="form-control form-control-sm" id="documents" name="documents" type="file">
      <br>
    </div> --}}
    

    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary" value="Apply Now">Apply Now</button>
    </div>
  </div>
  </form>
  <center>
    @foreach($errors->all() as $error)
      
      {{$error}} <br>
  @endforeach
  </center>

@endsection
