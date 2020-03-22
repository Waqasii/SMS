@extends('layouts.tch')
@section('content')


<table class="table border border-success ">
    <thead class="thead-dark" >
      <tr>
        <th scope="col">CNIC</th>
        <th scope="col">Test Name</th>
        <th scope="col">Total Marks</th>
        <th scope="col">Obtained Marks</th>
        <th scope="col">Date/Time</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($user as $user)
        <tr>
            <td>{{$user->std_cnic}}</td>
            <td>{{$user->Name}}</td>
            <td>{{$user->Total}}</td>
            <td>{{$user->Obtained}}</td>
            <td>{{$user->created_at}}</td>
        </tr>
    @endforeach

    
    </tbody>
  </table>
    
@endsection