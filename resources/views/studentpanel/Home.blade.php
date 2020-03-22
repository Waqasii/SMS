<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<title>Home</title>
    <style>
        .notification
         {
            background-color: #196F3D;
            color: white;
            border-color: white;
            text-align: center;
            margin: auto;
            height: 200px;
            overflow: scroll;
         }

        .carousel-item
         {
            height: 65vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{ route('StudentHome') }}">Student Panel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('StudentHome') }}"><i class="fa fa-home" aria-hidden="true"></i> Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('StudentNotification') }}"><i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="{{ route('allstdMsg') }}" ><i class="fa fa-envelope" aria-hidden="true"></i> Messages</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('stdListAttendence') }}"><i class="fa fa-check" aria-hidden="true"></i> Attendance</a>
                      </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('Contact') }}"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image:url({{URL::asset('/images/school.jpg')}})">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="display-4">Welcome</h3>
                <p class="lead">Beautiful Front veiw of our School</p>
              </div>
            </div>
             <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image:url({{URL::asset('/images/prize.jpg')}})">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="display-4">Prize Distribution Cermony</h3>
                <p class="lead">This picture is taken on Sports gala.</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image:url({{URL::asset('/images/faculty.jpg')}})">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="display-4">Faculty</h3>
                <p class="lead">This picture is taken on Welcome party of new batch.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
      </header>
      
      <!-- Page Content -->
      <section class="py-5">
          <div class="container ju ">
                <div class="notification w-75 p-3">
                        <h1 class="font-weight-light"> Notification</h1>

                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">By </th>
                              <th scope="col">Title</th>
                              <th scope="col">Description</th>
                              <th scope="col">End Date</th>
                              <th scope="col">Created Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($noti as $user)
                              <tr>
                                  <td>{{$user->creator}}</td>
                                  <td>{{$user->title}}</td>
                                  <td>{{$user->description}}</td>
                                  <td>{{$user->end_date}}</td>
                                  <td>{{$user->created_at}}</td>
                                      
                              </tr>
                          @endforeach
                      
                          
                          </tbody>
                      </table>
                        
                </div>
          </div>
       
      </section>
    </div>
     
</body>
</html>