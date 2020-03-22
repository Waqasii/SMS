@extends('layouts.admin')
@section('content')

<div class="row justify-content-center  mt-lg-5">
    <div class=" col-3  mr-lg-5  tomato height">
        <label class="h1">{{ $Teacher }}</label>
        <i class="fas fa-chalkboard-teacher display-3 ml-lg-5 mt-lg-1"></i><br>
        <small class="h5">Teacher</small>
    </div>

    <div class="col-3 bg-primary mr-lg-5 height">
        <label class="h1">{{ $Student }}</label>
        <i class="fas fa-user-graduate display-3 ml-lg-5 mt-lg-1"></i><br>
        <small class="h5">Students</small>
    </div>

    <div class="col-3 navy mr-lg-5 height">
        <label class="h1">{{ $Subject }}</label>
        <i class="fa fa-book display-3 ml-lg-5 mt-lg-1"></i><br>
        <small class="h5">Subjects</small>
    </div>
    
    
</div>


@endsection