@extends('layouts.tch')
@section('content')


<table class="table border border-success ">
    <thead class="thead-dark" >
      <tr>
        <th scope="col">CNIC</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($user as $user)
        <tr>
            <td>{{$user->std_cnic}}</td>
            <td><a class="btn btn-danger"  href="{{route('delClassStudent',$user->std_cnic)}}"><i class="fa fa-trash" aria-hidden="true"></i>  delete</a></td>
        </tr>
    @endforeach

    
    </tbody>
  </table>
    
@endsection