<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booked Pass Details</title>
    <link rel="stylesheet" type="text/css" href="ShowBookPasstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="bohome.php">
                        <div class="logo"><img src="DashBuslogo.png" alt=""></div>
                        <div class="dash">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="ManageBus.php">
                        <i class="fa fa-bus"></i>
                        <div class="title">Manage Bus Details</div>
                    </a>
                </li>
                <li>
                    <a href="ShowBookPass.php">
                        <i class="fa fa-ticket"></i>
                        <div class="title">Show Booked Pass</div>
                    </a>
                </li>
                <li>
                    <a href="AllBooking.php">
                        <i class="fa fa-ticket"></i>
                        <div class="title">All Booking</div>
                    </a>
                </li>
                <li>
                    <a href="StudentDetails.php">
                        <i class="fa fa-user"></i>
                        <div class="title">Student Details</div>
                    </a>
                </li>
                <li>
                    <a href="PaymentDetails.php">
                        <i class="fa fa-credit-card-alt"></i>
                        <div class="title">Payment Details</div>
                    </a>
                </li>
                <li>
                    <a href="ShowCancelled.php">
                        <i class="fa fa-ban"></i>
                        <div class="title">Show Cancelled</div>
                    </a>
                </li>
                <li>
                    <a href="ManageProfile.php">
                        <i class="fa fa-user-circle"></i>
                        <div class="title">Manage Profile</div>
                    </a>
                </li>
                <li>
                    <a href="ViewFeedback.php">
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
            <span>
                <label>Show Booked Pass : </label>
                <select>
                    <option>--Choose--</option>
                    <option value="1">Surat-Bardoli</option>
                    <option value="2">Bardoli-Suart</option>
                </select>
            </span>
            <div class="table">
                <div class="pass-details">
                    <div class="heading">
                        <h2>Booked Pass Details</h2>
                    </div>
                    <table class="details">
                        <thead>
                            <td>Bus Number</td>
                            <td>Origin</td>
                            <td>Destination</td>
                            <td>Bus Seat</td>
                            <td>Available Seats</td>
                            <td>Date of booking</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>9999</td>
                                <td>Surat</td>
                                <td>Bardoli</td>
                                <td>56</td>
                                <td>30</td>
                                <td>30/07/2022</td>
                            </tr>
                            <tr>
                                <td>1999</td>
                                <td>Bardoli</td>
                                <td>Surat</td>
                                <td>56</td>
                                <td>40</td>
                                <td>29/07/2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>