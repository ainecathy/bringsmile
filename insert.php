<?php
//create connection
$dbhost = 'localhost';
$username = 'root';
$password = '';
$con = mysqli_connect("$dbhost", "$username", "$password");
echo "Ka baby is connected <br>";
//connect to database
mysqli_select_db($con, "get-in-touch");
$put = "INSERT INTO contact-us (Name, Phone Number, Email-address, Message)
VALUES
('$_POST[Name]','$_POST[Phone]', '$_POST[Eaddress]', '$_POST[Message]')";
if ($con->query($put) === TRUE) {
echo "One record added!";
} else {
echo "Error". $con->error;
}
//closse connection
mysqli_close($con);
?>
