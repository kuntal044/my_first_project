<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Bus Details</title>
    <link rel="stylesheet" type="text/css" href="AManageBustyle.css">
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
                        <li><a href="Addbus.php" class="btn"><i class="fa fa-plus-square-o"></i>Add</a></li>
                        <li><a href="#" class="btn"><i class="fa fa-minus-square-o"></i>Delete</a></li>
                        <li><a href="Updatebus.php" class="btn"><i class="fa fa-pencil-square-o"></i>Update</a></li>
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
                    <div class="bus-details">
                        <div class="heading">
                            <h2>Bus Details</h2>
                        </div>
                        <table class="details">
                            <thead>
                                <td>Agency Name</td>
                                <td>Bus Number</td>
                                <td>Bus Seat</td>
                                <td>Origin</td>
                                <td>Destination</td>
                                <td>Price/Pass</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dolphin Travels</td>
                                    <td>9999</td>
                                    <td>56</td>
                                    <td>Surat</td>
                                    <td>Bardoli</td>
                                    <td>3500</td>
                                </tr>
                                <tr>
                                    <td>Nimit Travels</td>
                                    <td>9999</td>
                                    <td>56</td>
                                    <td>Surat</td>
                                    <td>Bardoli</td>
                                    <td>3500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>