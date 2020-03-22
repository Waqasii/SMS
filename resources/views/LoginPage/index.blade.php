<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}"  type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>Login</title>
    </head>

    
    <body>
            

            
        <div class="form-container">
                

        <form method="POST"  action="{{route('checkLogin')}}" > 
                {{-- action="{{url('Login/')}}  you can use this type of linking of u don’t want to give name to your routes --}}
                {{csrf_field()}}
                {{-- @csrf --}}
                    <div class="right-end"> 
                            <select name="usertype" class="custom-select right-enddropdown-toggle ">
                                    <option selected>--Choose User--</option>
                                    <option value="admin">Admin</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>
                            </select>
        
                        </div>


                        <div class="text-center mt-3">
                            <img src="https://img.icons8.com/cute-clipart/100/000000/lock.png">
                        </div>
                    <div class="form-group actualform " >
                      <label for="exampleInputEmail1">CNIC</label>
                      <input type="text"  name="cnic" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter CNIC">
                      <small id="emailHelp" class="form-text text-muted">Never share CNIC number with anyone</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    
            </form>
            <a href="{{route('stdsignup')}}"  ><button type="button"  class="btn btn-success mt-2 ">Signup</button></a>

        </div>
        
    </body>


</html>