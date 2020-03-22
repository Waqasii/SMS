@extends('layouts.tch')
@section('content')


    <div class="fluid-container mt-4 text-white ">

                        <div class="row  justify-content-center">
                                <div class="col-3 bg-primary mr-lg-5 p-2 rounded-pill text-center">
                                    <label class="h1">{{$Student }}</label>
                                    <i class="fas fa-user-graduate display-3 ml-lg-5 mt-lg-1"></i><br>
                                    <small class="h5">Students</small>
                                </div>
            
                                <div class="col-3 bg-info mr-lg-5 p-2 rounded-pill text-center">
                                    <label class="h1">{{$Subject }}</label>
                                    <i class="fa fa-book display-3 ml-lg-5 mt-lg-1"></i><br>
                                    <small class="h5">Subjects</small>
                                </div>
                        </div>
                        
                        {{-- <div class="row mt-4">
                            <div class="col-lg-8">
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
                            </div>
                            <div class="col-lg-4">
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
                            </div>
                        </div> --}}
    </div>
    
@endsection