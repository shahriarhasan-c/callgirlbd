<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "callgirl");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$user = mysqli_real_escape_string($link, $_REQUEST['username']);
$em = mysqli_real_escape_string($link, $_REQUEST['email']);
$pass = mysqli_real_escape_string($link, $_REQUEST['psw']);
$pass1 = mysqli_real_escape_string($link, $_REQUEST['psw-repeat']);

;		
if($pass!=$pass1) {
echo "Your passwords did not match";
exit;
}


// Attempt insert query execution
$sql = "INSERT INTO login (username, email, password) VALUES ('$user', '$em', '$pass')";
if(mysqli_query($link, $sql)){
    header("Location:login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>