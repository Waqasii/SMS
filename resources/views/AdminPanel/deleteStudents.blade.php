<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/css/simple-sidebar.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ asset('css/css/mycss.css') }}"  type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- For Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <title>AdminPanel </title>

</head>



<body>


    <div class="d-flex " id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right list-group-flush " id="sidebar-wrapper">
            <div class="sidebar-heading bg-primary "> <i class="fas fa-cog fa-spin"></i> DashBoard </div>

            <div class="list-group  bg-danger " id="side">

                <a  class="nav-link list-group-item list-group-item-action" href="{{route('adminHome')}}"> <i class="fa fa-home"></i> Home</a>


                <div class="dropright">
                    <a href="sidebar.html" class="nav-link dropdown-toggle list-group-item list-group-item-action" href="" data-toggle="dropdown"><i class="fa fa-users"></i> Students</a>
                    <div class="dropdown-menu bg-danger ">
                        <li class="dropdown-header bg-primary font-weight-bold text-white">Student Options</li>

                        <a class="dropdown-item bg-light" href="{{route('stdsignup')}}"> <i class="fas fa-edit"></i> Add New Student <i></i></a>
                        <a class="dropdown-item bg-light" href="{{route('delStudentshow')}}"> <i class="fa fa-trash"></i> Delete Student</a>
                        <a class="dropdown-item bg-light" href="{{route('updateStudentshow')}}"><i class="fas fa-pen-square"></i> Update Student</a>
                        <a class="dropdown-item bg-white" href="{{route('allStudents')}}"><i class="fa fa-search"></i> Show Students</a>
                    </div>
                </div>

                <div class="dropright">
                        <a href="sidebar.html" class="nav-link dropdown-toggle list-group-item list-group-item-action" href="" data-toggle="dropdown"> <i class="fa fa-address-card"></i> Teacher</a>
                        <div class="dropdown-menu bg-danger">
                            <li class="dropdown-header bg-primary font-weight-bold text-white">Teachers Options</li>
    
                            <a class="dropdown-item bg-white" href="{{route('tchsignup')}}"> <i class="fas fa-edit"></i> Add New Teacher</a>
                            <a class="dropdown-item bg-white" href="{{route('delTeachershow')}}"> <i class="fa fa-trash"></i>Delete Teacher</a>
                            <a class="dropdown-item bg-white" href="{{route('updateTeachershow')}}"> <i class="fas fa-pen-square"></i> Update Teacher </a>
                            <a class="dropdown-item bg-white" href="{{route('allTeachers')}}"> <i class="fa fa-search"></i> Show Teacher Record</a>
                        </div>
                    </div>
    


                
		 <div class="dropright">
            <a href="sidebar.html" class="nav-link dropdown-toggle list-group-item list-group-item-action" href="" data-toggle="dropdown"> <i class="fa fa-book"></i> Subjects</a>
            <div class="dropdown-menu bg-danger">
                <li class="dropdown-header bg-primary font-weight-bold text-white">Subjects Options</li>
                <a class="dropdown-item bg-white" href="{{route('subInsert')}}"> <i class="fas fa-edit"> </i> Add New Subject</a>
                <a class="dropdown-item bg-white" href="{{route('delSubjectshow')}}"> <i class="fa fa-trash"></i> Delete Subject</a>
                <a class="dropdown-item bg-white" href="{{route('updateSubjectshow')}}"> <i class="fas fa-pen-square"> </i> Update Subject</a>
                <a class="dropdown-item bg-white" href="{{route('allSubjects')}}"> <i class="fa fa-search"></i> Show all Subjects</a>
            </div>
        </div>


                <div class="dropright">
                    <a href="sidebar.html" class="nav-link dropdown-toggle list-group-item list-group-item-action" href="" data-toggle="dropdown"> <i class="fa fa-bullhorn"></i> Notifications</a>
                    <div class="dropdown-menu bg-danger">
                        <li class="dropdown-header bg-primary font-weight-bold text-white">Announcement Options</li>
                        <a class="dropdown-item bg-white" href="{{route('postNotification')}}"> <i class="fas fa-edit"> </i> Post Notification</a>
                        <a class="dropdown-item bg-white" href="{{route('delNotshow')}}"> <i class="fa fa-trash"></i> Delete Notification</a>
                        <a class="dropdown-item bg-white" href="{{route('updateNotshow')}}"> <i class="fas fa-pen-square"> </i> Update Notification</a>
                        <a class="dropdown-item bg-white" href="{{route('Notshow')}}"> <i class="fa fa-search"></i> Show Notification</a>
                    </div>
                </div>


            </div>

        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-dark  border-bottom justify-content-lg-between ">
                <button class="btn btn-primary " id="menu-toggle"> <span class="text-white"></span><i class="fas fa-bars"></i> Menu</button>
                <marquee width="40%" direction="right" height="50px" scrollamount="3" class=" justify-content-end ">
                    Welcome Waqas on Admin Panel
                </marquee>
                <a href="{{ route('loginHome') }}"><button class="btn btn-primary bg-danger" > <span class="text-white"></span><i class="fas fa-sign-out-alt"></i> Logout</button></a>

            </nav>
            <div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">CNIC</th>
                        <th scope="col">Father CNIC</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($user as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->cnic}}</td>
                            <td>{{$user->fcnic}}</td>
                            <td><a class="btn btn-danger"  href="{{route('delStudent',$user->cnic)}}">  <i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                        </tr>
                    @endforeach

                    
                    </tbody>
                  </table>
            </div>
            
                    
            


            
        </div>
        <!-- /#page-content-wrapper -->


    </div>
    <!-- /#wrapper -->







    

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>