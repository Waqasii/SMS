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
            

            
        <div class="form-container container">
                
         
        <form method="POST"  action="{{route('send',$id)}}" > 
                {{-- action="{{url('Login/')}}  you can use this type of linking of u don’t want to give name to your routes --}}
                {{csrf_field()}}

                {{-- RegisterTeacherB.jpeg --}}
               
                    <div class="form-group row mt-4">
                      <label  class="col-sm-2 col-form-label ">Your Message:</label>
                      <div class="col-sm-10">
                        <input type="text" name='msg' class="form-control"  placeholder="Type Here">
                      </div>
                    </div>
                    
                    
                   
                    
                    <div class="form-group row">
                        <div class="col-sm-10 ">
                            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                            <button type="submit" class="btn btn-success">Send</button>
                          
                        </div>
                    </div>
            

        </div>
        
    </body>


</html>