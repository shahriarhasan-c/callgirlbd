

<!DOCTYPE html>
<html>
<head>
  
<style>
 body {
  background-color: green;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
tr:nth-child(odd) {background-color: #f2f2f2;}
</style>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
              

 

<body>
  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">CallGirlBD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Logout</a>
        </li>
        <li class="nav-item">
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="container">
  <div class="row">
    <div class="col-12">
    <table class="table table-image">

        <thead>
          <tr>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Figure</th>
            <th scope="col">Details</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead> <tbody>
        <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "callgirl");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM baby";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_array($result)){
       
            echo "<tr>";
                  

                   
             echo "<td><img src=\"profile_image/{$row['image']}\" width=\"200\" height=\"200\" /></td>";
                 
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['figure'] . "</td>";
                echo "<td>" . $row['details'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                 echo "<td>" . '<button onclick="myFunction()" >Buy' . "</td>";

          // <td>  header("Location:but.php");
             // </td> 
            echo "</tr>";
          
        }
        echo "</table>";
        
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
       
  </div>
</div>
<script>
function myFunction() {
  alert("Hello...\n Now pay for this baby by Bkash:01679592991\n We will confirm you by mail.\nIf you have any quary Contact Us Email: sh.shahriar@gmail.com");
}
</script>

</body>
</html>