

@extends('layouts.admin')
@section('content')


<table class="table border border-success ">
    <thead class="thead-dark" >
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">CNIC</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($user as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->cnic}}</td>
            <td><a class="btn btn-danger"  href="{{route('Teacheredit',$user->cnic)}}">  <i class="fas fa-edit"></i> Update</a></td>
        </tr>
    @endforeach

    
    </tbody>
  </table>

  
@endsection