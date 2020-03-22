@extends('layouts.tch')
@section('content')


<table class="table border border-success ">
    <thead class="thead-dark" >
      <tr>
        <th scope="col">CNIC</th>
        <th scope="col">Date/Time</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($user as $user)
        <tr>
            <td>{{$user->std_cnic}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->status}}</td>
        </tr>
    @endforeach

    
    </tbody>
  </table>
    
@endsection