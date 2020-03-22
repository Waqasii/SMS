@extends('layouts.tch')
@section('content')


<table class="table border border-success ">
    <thead class="thead-dark" >
      <tr>
        <th scope="col">Sender CNIC</th>
        <th scope="col">Message</th>
        <th scope="col">Time/Date</th>

      </tr>
    </thead>
    <tbody>
      
      @foreach ($user as $user)
        <tr>
            <td>{{$user->sender_cnic}}</td>
            <td>{{$user->message}}</td>
            <td>{{$user->created_at}}</td>

        </tr>
    @endforeach

    
    </tbody>
  </table>
    
@endsection