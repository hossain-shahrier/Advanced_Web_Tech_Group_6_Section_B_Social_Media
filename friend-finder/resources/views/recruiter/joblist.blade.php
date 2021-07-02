@extends('layouts.master')

@section('content')
<br>
<center><h2>Posted Job Details</h2></center>

<table class="table table-dark table-striped">

  <thead>
    <tr>
      <th scope="col" class="col-md-1">Job Id</th>
      <th scope="col" class="col-md-1">Job Title</th>
      <th scope="col" class="col-md-3">Job Information</th>
      <th scope="col" class="col-md-1">Job Category</th>
      <th scope="col" class="col-md-1">Job Type</th>
      <th scope="col" class="col-md-3">Job Location</th>
      <th scope="col" class="col-md-1">Applicants</th>

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
  @foreach($joblist as $job)
  <tr>
     
     <td>{{$job->id}}</td>
     <td>{{$job->title}}</td>
     <td>{{$job->info}}</td>
     <td>{{$job->category}}</td>
     <td>{{$job->type}}</td>
     <td>{{$job->location}}</td>
     <td>{{$job->applicants}}</td>

     <td>
     <a href="/recruiter/jobupdate/{{$job['id']}}"><button type="button" class="btn btn-primary" >Update</button> </a>

     </td>
  
  
  </tr>

  @endforeach
  
</table>

@endsection

