@extends('layouts.master')

@section('content')
<br>
<center><h2>Applicant Details</h2></center>

<table class="table table-dark table-striped">

    <thead>
      <tr>
        <th scope="col" class="col-md-1">First Name</th>
        <th scope="col" class="col-md-1">Last Name</th>
        <th scope="col" class="col-md-1">Email</th>
        <th scope="col" class="col-md-1">Phone</th>
  
        <th scope="col" class="col-md-3">Address</th>
        <th scope="col" class="col-md-3">Files</th>
        {{-- <th scope="col" class="col-md-3">Documents</th> --}}
        {{-- <th scope="col" class="col-md-1">Action</th> --}}
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
    @foreach($applicants as $applicant)
    <tr>
        <td>{{$applicant->firstname}}</td>
        <td>{{$applicant->lastname}}</td>
        <td>{{$applicant->email}}</td>
        <td>{{$applicant->phone}}</td>
        <td>{{$applicant->address}}</td>
        {{-- <td>{{$applicant->file}}</td> --}}
        <td>
            <a href="/recruiter/viewfiles/{{$applicant['id']}}"><button type="button" class="btn btn-primary" >View File</button> </a> 
            
            
            <a href="/recruiter/download/{{$applicant['file']}}"><button type="button" class="btn btn-primary" >Download File</button> </a>
        </td>

        {{-- <td>
          <a href="/recruiter/viewdocument/{{$applicant['id']}}"><button type="button" class="btn btn-primary" >View</button> </a> 
          
          
          <a href="/recruiter/downloaddocument/{{$applicant['file']}}"><button type="button" class="btn btn-primary" >Download</button> </a>
      </td> --}}
       
  
       {{-- <td>
       <a href="/recruiter/applicantview/{{$applicant['id']}}"><button type="button" class="btn btn-primary" >View Details</button> </a>
  
       </td> --}}
    
    
    </tr>
  
    @endforeach
    
  </table>
@endsection