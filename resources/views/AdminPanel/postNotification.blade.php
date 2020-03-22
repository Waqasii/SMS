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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Notification</title>
        
    </head>

    
    <body>
            

            
        <div class="form-container container mt-3">
                
         
        <form method="POST"  action="{{route('notiAdd')}}" > 
                {{csrf_field()}}
                <div class="text-center">
                  <img src="{{URL::asset('/images/notification.png')}}" alt="profile Pic"  class="rounded-pill" height="100" width="200">

              </div>
                    <div class="form-group row mt-1">
                      <label  class="col-sm-2 col-form-label ">Title:</label>
                      <div class="col-sm-10">
                        <input type="text" name='title' class="form-control"  placeholder="Title Of Notification">
                      </div>
                    </div> 
                    <div class="form-group row ">
                      <label  class="col-sm-2 col-form-label ">Description:</label>
                      <div class="col-sm-10">
                      <textarea class="form-control rounded-0"  placeholder="Briefly Describe Here......" name="description" rows="10"></textarea>  
                    </div>
                    </div>

                    <div class="form-group row ">
                      <label  class="col-sm-2 col-form-label ">End Date:</label>
                      <div class="col-sm-10">
                      <input type="date" name="end_date" placeholder="End Date Here"/>
                      
                    </div>
                    </div>

                                            
                    <div class="form-group row">
                        <div class="col-sm-10 ">
                            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                            <button type="submit" class="btn btn-primary">Post</button>
                          
                        </div>
                    </div>
            

        </div>
        
        
    </body>


</html>