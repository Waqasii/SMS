
                    
                   
@extends('layouts.admin')
@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Room No:</th>
        <th scope="col">Class Name:</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($class as $class)
        <tr>
            <td>{{$class->room_no}}</td>
            <td>{{$class->class_name}}</td>
            <td><a class="btn btn-danger"  href="{{route('delClass',$class->id)}}">  <i class="fas fa-trash"></i> Delete</a></td>

        </tr>
    @endforeach

    
    </tbody>
  </table>

@endsection