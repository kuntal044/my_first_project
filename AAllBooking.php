<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Booking</title>
    <link rel="stylesheet" type="text/css" href="AAllBookingstyle.css">
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
            <div class="button-list">
                    <ul class="button">

                        <li>
                            <label><i class="fa fa-pencil-square-o"></i> Agency :</label>
                            <select>
                                <option value="1">--Choose--</option>
                                <option value="2">Dolphin Travels</option>
                                <option value="3">Nimit Travels</option>
                            </select>
                        </li>
                    </ul>
                </div>
            <div class="table">
                <div class="booking-details">
                    <div class="heading">
                    <h2>All Booking</h2>
                </div>
                    <table class="details">
                        <thead>
                            <td>Student Name</td>
                            <td>Enrollment Number</td>
                            <td>Bus Number</td>
                            <td>Agency Name</td>
                            <td>Origin</td>
                            <td>Destination</td>
                            <td>Date of Booking</td>
                            <td>Expiry Date</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kuntal Kevadiya</td>
                                <td>202006100110044</td>
                                <td>9999</td>
                                <td>Dolphin Travels</td>
                                <td>Surat</td>
                                <td>Bardoli</td>
                                <td>01/07/2022</td>
                                <td>31/12/2022</td>
                            </tr>
                            <tr>
                                <td>Anvi Patel</td>
                                <td>202006100110081</td>
                                <td>1999</td>
                                <td>Nimit Travels</td>
                                <td>Bardoli</td>
                                <td>Surat</td>
                                <td>01/01/2022</td>
                                <td>31/05/2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>