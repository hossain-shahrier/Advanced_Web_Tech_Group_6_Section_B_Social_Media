@extends('layouts.master')

@section('content')
<br>
<center><h2>List Of Aplicants</h2></center>

<table class="table table-dark table-striped">

    <thead>
      <tr>
        <th scope="col" class="col-md-5">Applicant Id</th>
        <th scope="col" class="col-md-5">Job Id</th>
  
        <th scope="col" class="col-md-5">Action</th>
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
    @foreach($applicantlist as $applicant)
    <tr>
        <td>{{$applicant->id}}</td>
       <td>{{$applicant->job_id}}</td>
       
  
       <td>
        <a href="/recruiter/applicantview/{{$applicant['id']}}"><button type="button" class="btn btn-primary" >View Details</button> </a>
  
       </td>
    
    
    </tr>
  
    @endforeach
    
  </table>
@endsection