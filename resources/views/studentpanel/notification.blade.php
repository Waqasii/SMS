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
<title>Notification</title>
</head>
<style>
        
</style>
<body>
    <div class="container-fluid">
        <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Student Panel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="#" ><i class="fa fa-envelope" aria-hidden="true"></i> Messages</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-check" aria-hidden="true"></i> Attendance</a>
                      </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

      <div class="container mt-5 p-4">
        <h2>Notification</h2>        
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
    </body>
</html>