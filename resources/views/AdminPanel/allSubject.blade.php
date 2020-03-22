
@extends('layouts.admin')
@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Course-Code</th>
        <th scope="col">Course Name</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($sub as $sub)
        <tr>
            <td>{{$sub->course_code}}</td>
            <td>{{$sub->name}}</td>
                
        </tr>
    @endforeach

    
    </tbody>
</table>
@endsection