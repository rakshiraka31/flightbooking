
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) { 
    
    $air = mysqli_real_escape_string($mysqli, $_POST['air']);
    $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
    $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
    $destination = mysqli_real_escape_string($mysqli, $_POST['destination']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $flight = mysqli_real_escape_string($mysqli, $_POST['flight']);
    $nopass = mysqli_real_escape_string($mysqli, $_POST['nopass']);
    $seat = mysqli_real_escape_string($mysqli, $_POST['seat']);
    $payment = mysqli_real_escape_string($mysqli, $_POST['payment']);

    // checking empty fields
    if(empty($fname) || empty($lname) ||  empty($gender) || empty($air) || empty($email) || empty($address) || empty($flight) || empty($contact) || empty($nopass) || empty($seat) || empty($payment) || empty($destination)){
        if(empty($fname)) {
            echo "<font color='red'> First Name field is empty.</font><br/>";
        }
		if(empty($lname)) {
            echo "<font color='red'>Last Name filed is empty.</font><br/>";
        }
		if(empty($gender)) {
            echo "<font color='red'>Gender is not Ticked.</font><br/>";
        }  
		if(empty($destination)) {
            echo "<font color='red'>destination  not entered.</font><br/>";
        }       
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        } 
		if(empty($address)) {
            echo "<font color='red'>Permanet address field is empty.</font><br/>";
        } 
        if(empty($contact)) {
            echo "<font color='red'>Pnone number empty.</font><br/>";
        }
        if(empty($flight)) {
            echo "<font color='red'>flight in not   entered.</font><br/>";
        }
		if(empty($nopass)) {
            echo "<font color='red'>nopass  field is empty.</font><br/>";
        } 
		if(empty($seat)) {
            echo "<font color='red'> seat not  submitted</font><br/>";
        }
		if(empty($payment)) {
            echo "<font color='red'> Paayment not seleced.</font><br/>";
        } 
        if(empty($air)) {
            echo "<font color='red'> airlines  nOt seleced.</font><br/>";
        }
    }
        else { 
            $result = mysqli_query($mysqli,"INSERT INTO airlines (air,fname,lname,gender,destination,email,contact,address,flight,nopass,seat,payment)
                         VALUES('$air','$fname','$lname','$gender','$destination','$email','$contact','$address','$flight','$nopass','$seat','$payment')");
       if (!$result) die ("Insertion failed: " . mysqli_error($mysqli));
       echo"<font color='black' size='25px'> Congratulations ! You have successefully reservation of flight.";
       echo"<br><br><a href='read.php'> View Result </a>";
        }
    }
?>