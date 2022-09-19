<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="Adhomestyle.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="overflow-x: hidden;">
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="Adhome.php">
                        <div class="logo"><img src="DashBuslogo.png" alt=""></div>
                        <div class="dash">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="AManageBus.php">
                        <i class="fa fa-bus"></i>
                        <div class="title">Manage Bus Details</div>
                    </a>
                </li>
                <li>
                    <a href="AShowBookPass.php">
                        <i class="fa fa-ticket"></i>
                        <div class="title">Show Booked Pass</div>
                    </a>
                </li>
                <li>
                    <a href="AAllBooking.php">
                        <i class="fa fa-ticket"></i>
                        <div class="title">All Booking</div>
                    </a>
                </li>
                <li>
                    <a href="AStudentDetails.php">
                        <i class="fa fa-user"></i>
                        <div class="title">Student Details</div>
                    </a>
                </li>
                <li>
                    <a href="APaymentDetails.php">
                        <i class="fa fa-credit-card-alt"></i>
                        <div class="title">Payment Details</div>
                    </a>
                </li>
                <li>
                    <a href="AShowCancelled.php">
                        <i class="fa fa-ban"></i>
                        <div class="title">Show Cancelled</div>
                    </a>
                </li>
                <li>
                    <a href="AManageProfile.php">
                        <i class="fa fa-user-circle"></i>
                        <div class="title">Manage Profile</div>
                    </a>
                </li>
                <li>
                    <a href="AViewFeedback.php">
                        <i class="fa fa-comment"></i>
                        <div class="title">View Feedback</div>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <i class="fa fa-sign-out"></i>
                        <div class="title">Logout</div>
                    </a>
                </li> 
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="top-bar">
            <div class="search">
                <input type="text" name="search" placeholder="Search">
                <label for="search"><i class="fa fa-search"></i></label>
            </div>
            <i class="fa fa-bell"></i>
            <div class="user">
                <img src="avatar.png" alt="">
            </div>
        </div>
        <div class="cards">
            <div class="imgset">
                <img src="Busabout.jpg" alt="">
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-content">
                        <div class="number">20</div>
                        <div class="card-name">Buses</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa fa-bus"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">50000</div>
                        <div class="card-name">Bus Pass</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa fa-ticket"></i>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-content">
                        <div class="number">10</div>
                        <div class="card-name">Bus Routes</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa fa-road"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">150000\-</div>
                        <div class="card-name">Earnings</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa fa-inr"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="tables">
            <div class="last-booking">
                <div class="heading">
                    <h2>Last Booking</h2>
                    <a href="AAllBooking.php" class="tbtn">View All</a>
                </div>
                <table class="booking">
                    <thead>
                        <td>Bus Number</td>
                        <td>Origin</td>
                        <td>Arrival Time</td>
                        <td>Destination</td>
                        <td>Bus Capacity</td>
                        <td>Date Of Booking</td>
                        <td>Action</td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>9999</td>
                            <td>Surat</td>
                            <td>7:00</td>
                            <td>Bardoli</td>
                            <td>56</td>
                            <td>29/07/2022</td>
                            <td>
                                <i class="fa fa-eye"></i>
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>9999</td>
                            <td>Surat</td>
                            <td>7:00</td>
                            <td>Bardoli</td>
                            <td>56</td>
                            <td>29/07/2022</td>
                            <td>
                                <i class="fa fa-eye"></i>
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="student-details">
                <div class="heading">
                    <h2>Student Details</h2>
                    <a href="AStudentDetails.php" class="tbtn">View All</a>
                </div>
                <table class="details">
                    <thead>
                        <td>Photo</td>
                        <td>Full Name</td>
                        <td>Email</td>
                        <td>Action</td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="img-box-small">
                                    <img src="avatar.png" alt="">
                                </div>
                            </td>
                            <td>Kuntal Kevadia</td>
                            <td>20bmiit044@gmail.com</td>
                            <td>
                                <i class="fa fa-eye"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="img-box-small">
                                    <img src="avatar.png" alt="">
                                </div>
                            </td>
                            <td>Anvi Patel</td>
                            <td>20bmiit081@gmail.com</td>
                            <td>
                                <i class="fa fa-eye"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
    <script>
        $('.btn').click(function(){
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        })
    </script>
</body>
</html>