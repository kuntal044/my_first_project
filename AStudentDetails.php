<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Details</title>
    <link rel="stylesheet" type="text/css" href="AStudentDetailstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
        <div class="tables">
            <div class="table">
                <div class="student-details">
                    <div class="heading">
                        <h2>Student Details</h2>
                    </div>
                    <table class="details">
                        <thead>
                            <td>Student Name</td>
                            <td>Enrollment number</td>
                            <td>Email</td>
                            <td>Contact Number</td>
                            <td>Department</td>
                            <td>course</td>
                            <td>Semester</td>
                            <td>Reciept</td>
                            <td>City</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Anvi Patel</td>
                                <td>202006100110081</td>
                                <td>20bmiit081@gamil.com</td>
                                <td>0123456789</td>
                                <td>BMIIT</td>
                                <td>M.Sc.IT</td>
                                <td>5</td>
                                <td><i class="fa fa-print"></i></td>
                                <td>Navapur</td>
                            </tr>
                            <tr>
                                <td>Kuntal Kevadiya</td>
                                <td>202006100110044</td>
                                <td>20bmiit044@gamil.com</td>
                                <td>9876543210</td>
                                <td>CGPIT</td>
                                <td>Chemical Engineering</td>
                                <td>5</td>
                                <td><i class="fa fa-print"></i></td>
                                <td>Surat</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>