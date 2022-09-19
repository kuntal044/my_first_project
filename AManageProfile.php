<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="AManageProfilestyle.css">
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
                <div class="user-profile">
                    <img src="avatar.png" alt="">
                </div>
                <div class="table">
                    <div class="profile-details">
                        <table class="details">
                            <tbody>
                                <tr>
                                    <td style="font-weight: 600;">Full Name</td>
                                    <td>Kuntal Kevadiya</td>
                                    <td><i class="fa fa-edit"></i></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600;">Date Of Birth</td>
                                    <td>18/04/2022</td>
                                    <td><i class="fa fa-edit"></i></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600;">Email</td>
                                    <td>20bmiit044@gamil.com</td>
                                    <td><i class="fa fa-edit"></i></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600;">Contact Number</td>
                                    <td>0123456789</td>
                                    <td><i class="fa fa-edit"></i></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600;">Gender</td>
                                    <td>Female</td>
                                    <td><i class="fa fa-edit"></i></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600;">Aadhar card number</td>
                                    <td>987654321012</td>
                                    <td><i class="fa fa-edit"></i></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600;">Bus agency certificate</td>
                                    <td><i class="fa fa-print"></i></td>
                                    <td><i class="fa fa-edit"></i></td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="button-list">
                    <ul class="button">
                        <li><a href="AChangePassword.php" class="btn"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>