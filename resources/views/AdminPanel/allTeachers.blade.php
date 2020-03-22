

@extends('layouts.admin')
@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">CNIC</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($user as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->cnic}}</td>
                
        </tr>
    @endforeach

    
    </tbody>
</table>

@endsection