@extends('layouts.tch')
@section('content')


<table class="table border border-success ">
    <thead class="thead-dark" >
      <tr>
        <th scope="col">CNIC</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($user as $user)
        <tr>
            <td>{{$user->std_cnic}}</td>
            <td><a class="btn btn-danger"  href="{{route('Absent',$user->std_cnic)}}"> Absent</a><a class="btn btn-success"  href="{{route('Present',$user->std_cnic)}}"> Present</a></td>
        </tr>
    @endforeach

    
    </tbody>
  </table>
    
@endsection