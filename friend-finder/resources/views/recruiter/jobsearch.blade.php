@extends('layouts.master')

@section('content')
<br>
<center><h2>Search For A Job</h2></center>
<form class="d-flex" method="post">
   @csrf
        <input class="form-control me-2" type="search" name="searching" placeholder="Search" aria-label="Search">
        
        <button class="btn btn-outline-success" type="submit">Search</button>
</form>
@endsection

@section('content1')
<br>
<table class="table table-dark table-striped">

<thead>
  <tr>
    <th scope="col" class="col-md-1">Job Id</th>
    <th scope="col" class="col-md-1">Job Title</th>
    <th scope="col" class="col-md-3">Job Information</th>
    <th scope="col" class="col-md-1">Job Category</th>
    <th scope="col" class="col-md-1">Job Type</th>
    <th scope="col" class="col-md-3">Job Location</th>
    <!-- <th scope="col" class="col-md-1">Applicants</th> -->

    <th scope="col" class="col-md-1">Action</th>
  </tr>
</thead>

<!-- <tbody>
  <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
  </tr>
  <tr>
    <th scope="row">3</th>
    <td colspan="2">Larry the Bird</td>
    <td>@twitter</td>
    <td colspan="2">Larry the Bird</td>
    <td>@twitter</td>
  </tr>
</tbody> -->
@if ($result)
    @foreach($result as $job)
    <tr>
       
       <td>{{$job->id}}</td>
       <td>{{$job->title}}</td>
       <td>{{$job->info}}</td>
       <td>{{$job->category}}</td>
       <td>{{$job->type}}</td>
       <td>{{$job->location}}</td>
       <!-- <td>{{$job->applicants}}</td> -->
    
       <td>
       <a href="/recruiter/jobapply/{{$job['id']}}"><button type="button" class="btn btn-primary" >Apply Now</button> </a>
    
       </td>
    
    
    </tr>
    
    @endforeach

    
@endif
</table>
<center>{{ session('msg') }}</center>
<br>

<center>
  @foreach($errors->all() as $error)
      
      {{$error}} <br>
  @endforeach
</center>
@endsection