@extends('layouts.master')

@section('content')


@foreach ($value as $value)

<iframe src="{{url('upload/' .$value->file)}}" style="width: 1500px; height: 1200px;" frameborder="1"></iframe>
    
@endforeach

@endsection