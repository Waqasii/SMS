
@extends('layouts.admin')
@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Course-Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($sub as $sub)
        <tr>
            <td>{{$sub->course_code}}</td>
            <td>{{$sub->name}}</td>
            <td><a class="btn btn-danger"  href="{{route('delSubject',$sub->id)}}">  <i class="fas fa-trash"></i> Update</a></td>

        </tr>
    @endforeach

    
    </tbody>
</table>

@endsection