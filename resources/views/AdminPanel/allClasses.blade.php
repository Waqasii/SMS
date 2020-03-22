

@extends('layouts.admin')
@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
          <th scope="col">Room No:</th>
          <th scope="col">Class Name:</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($class as $class)
          <tr>
              <td>{{$class->room_no}}</td>
              <td>{{$class->class_name}}</td>
                
        </tr>
    @endforeach

    
    </tbody>
</table>

@endsection