<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/signup.css') }}"  type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>signup</title>
    </head>

    
    <body>
            

            
        <div class="form-container container " >
                
         
        <form method="POST"  action="{{route('updatedStudent',$id)}}" > 
                {{-- action="{{url('Login/')}}  you can use this type of linking of u don’t want to give name to your routes --}}
                {{csrf_field()}}

                    
                <label class="text-danger">****Enter New Data For Selected Student of CNIC {{ $id }} </label>

                    <div class="form-group row mt-1">
                      <label  class="col-sm-2 col-form-label ">Your Name:</label>
                      <div class="col-sm-10">
                        <input type="text" name='std_name' class="form-control"  placeholder="Muhammad Waqas">
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label  class="col-sm-2 col-form-label ">Father Name:</label>
                      <div class="col-sm-10">
                        <input type="text" name="father_name" class="form-control"  placeholder="Muhammad Fayyaz">
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label  class="col-sm-2 col-form-label ">Enter Your Phon#</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="std_phone" placeholder="+923045415284">
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label  class="col-sm-2 col-form-label ">Enter Father Phone#</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="father_phone"  placeholder="+923045415284">
                      </div>
                    </div>
                    
                    <div class="form-group row ">
                      <label  class="col-sm-2 col-form-label ">Enter Your CNIC:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="std_cnic" placeholder="3710153103033">
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label  class="col-sm-2 col-form-label ">Enter Father CNIC:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="father_cnic"  placeholder="3710153103033">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="confirm_password" placeholder="Retype Password">
                      </div>
                    </div>
                   
                    <div class="form-group row">
                        <div class="col-sm-10 ">
                            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                            <button type="submit" class="btn btn-primary">Update</button>
                          
                        </div>
                    </div>
        </form>  

        </div>
        
    </body>


</html>