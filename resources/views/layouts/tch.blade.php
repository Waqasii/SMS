<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- For Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
  <body>
      <div class="container-fluid">
          <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
                <div class="container">
                
                <div class="bg-white rounded-pill "><label class="navbar-brand mr-3 ml-3 mt-2 mb-2 " ><small class="text-danger">Welcome Waqas</small> </label></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ">
                    <li class="nav-item ">
                        <a class="nav-link bg-success text-white btn-md mt-2 mr-4 pr-4 pl-4  rounded-pill text-center" href="{{ route('TeacherHomeView') }}" type="button">Home<i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="nav-item ">
                      <div class="dropdown">
                          <a class="nav-link text-white btn btn-md mt-2 mr-2 rounded-pill text-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Class
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('selStudent') }}">Add Student In Class</a>
                            <a class="dropdown-item" href="{{ route('delStudent') }}">Delete Student</a>
                          </div>
                        </div>
                  </li>
                    <li class="nav-item ">
                        <div class="dropdown">
                            <a class="nav-link  text-white  btn btn-md mt-2 mr-2 rounded-pill text-dark dropdown-toggle" type="button"  data-toggle="dropdown"  >
                              Attendence
                            </a>
                            <div class="dropdown-menu" aria-labelledby=" pl-4dropdownM enuButton">
                              <a class="dropdown-item" href="{{ route('getAttendence') }}">Take Attendence</a>
                              <a class="dropdown-item" href="{{ route('ListAttendence') }}">Show Attendence</a>
                            </div>
                          </div>
                    </li>
                    <li class="nav-item ">
                        <div class="dropdown">
                            <a class="nav-link text-white btn btn-md mt-2 mr-2 rounded-pill text-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Marks
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{ route('showEnterMarks') }}">Enter Marks</a>
                              <a class="dropdown-item" href="{{ route('marksReport') }}">Show Report</a>
                            </div>
                          </div>
                    </li>
                    
                    {{-- <li class="nav-item ">
                        <div class="dropdown">
                            <a class="nav-link text-white btn btn-md mt-2 mr-2 rounded-pill text-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Study Material
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Upload</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                    </li> --}}
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class=" nav-link text-white btn btn-md mt-2 mr-2 rounded-pill text-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Messages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{ route('Participants') }}">Send Message</a>
                              <a class="dropdown-item" href="{{ route('delMsg') }}">Delete Messages</a>
                              <a class="dropdown-item" href="{{ route('allMsg') }}">Show Messages</a>

                            </div>
                          </div>
                    </li>
                    
                    </ul>
                </div>
                </div>
            </nav>
            
           
            
            <!-- Page Content -->
            <div class="py-5 mt-4">
                @yield('content')
            </div>
            


      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>