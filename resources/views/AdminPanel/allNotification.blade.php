

@extends('layouts.admin')
@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Announce By</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">EndDate</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($not as $not)
        <tr>
            <td>{{$not->creator}}</td>
            <td>{{$not->title}}</td>
            <td>{{$not->description}}</td>
            <td>{{$not->end_date}}</td>

        </tr>
    @endforeach

    
    </tbody>
</table>

@endsection