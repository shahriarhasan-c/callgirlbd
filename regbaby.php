<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 if(isset($_POST['submit']))
 {
 	$image = $_FILES['image']['tmp_name'];
        $image = addslashes(file_get_contents($image));
 }
$link = mysqli_connect("localhost", "root", "", "callgirl");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$n = mysqli_real_escape_string($link, $_REQUEST['name']);
$em = mysqli_real_escape_string($link, $_REQUEST['age']);
$fig = mysqli_real_escape_string($link, $_REQUEST['fig']);
$det = mysqli_real_escape_string($link, $_REQUEST['det']);
$pr = mysqli_real_escape_string($link, $_REQUEST['price']);
$image = mysqli_real_escape_string($link, $_REQUEST['image']);
 




// Attempt insert query execution
$sql = "INSERT INTO baby (name, age, figure, details, price,image) VALUES ('$n', '$em', '$fig', '$det', '$pr','$image')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>