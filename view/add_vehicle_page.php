<!DOCTYPE html>
<html>
<head>
   <title>otp verification</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> LOGIN PAGE</title>
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="../js/sign_up.js"></script>
   <script src="../js/jquery-2.2.3.min.js"></script> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="logo">
                    <img src="../images/image1.jpg" alt="mytruck">
                    <span>my truck</span>
                </div>
            </div>
        </div>    
    </nav>
        <div class="container">
            <h1>vehicle details</h1> 
            <form method="post">  
                <div class="input-field">
                    <div class="question">
                    <h4>1.Enter Vehicle Number</h4><br>
                    </div>
                    <input class="cls" id="tb1" type="text" name="vehicle_no" placeholder="Enter Vehicle Number" required><br><br>
                </div>
                <div class="input-field">
                    <div class="question">
                    <h4>2.Enter Vehicle RC Date</h4><br>
                    </div>
                    <input class="cls" id="tb2" type="date" name="vehicle_RC_date" placeholder="Enter Vehicle RC Date" required><br><br>
                </div>
                <div class="input-field">
                    <div class="question">
                    <h4>3.Enter Insurance Date</h4><br>
                    </div>
                    <input class="cls" id="tb3" type="date" name="insurance_date" placeholder="Enter Vehicle Insurance Date" required><br><br>
                </div>
                <div class="input-field">
                    <div class="question">
                    <h4>4.Enter Loan Due Date</h4><br>
                    </div>
                    <input class="cls" id="tb4" type="date" name="loan_due_date" v  placeholder="Enter Loan Due Date" required><br><br>
                </div>
                <div class="input-field">
                    <div class="question">
                    <h4>5.Enter Loan Due Amount</h4><br>
                    </div>
                    <input class="cls" id="tb5" type="text" name="loan_due_amount" placeholder="Enter Loan Due Amount" required><br><br>
                </div>
                <div class="input-field">
                    <div class="question">
                    <h4>6.Enter Reminder Date</h4><br>
                    </div>
                    <input class="cls" id="tb6" type="text" name="reminder_before" placeholder="Enter Reminder Date" required><br><br>
                </div>
                <div class="input-field">
                    <div class="question">
                    <h4>7.Enter Due Time Interval</h4><br>
                    </div>
                    <input class="cls" id="tb7" type="text" name="due_time_interval" placeholder="Enter Due Time Interval" required><br><br>
                </div>
                <div class="input-field">
                    <div class="question">
                    <h4>8. Enter Total Due For This Truck</h4><br>
                    </div>
                    <input class="cls" id="tb8" type="text" name="total_due" placeholder="Enter Total Due For this Truck" required><br><br>
                </div>
                <button style="width=150px; height=40px" class="btn btn-success" type="submit">submit</button>
                <!-- <button style="width=150px;height=40px; float=left" class="btn btn-danger " type="submit">Remove</button> --><br><br><br>
            </form>
    </div>
</body>
</html>
