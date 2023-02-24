<?php
$insert= false;
if(isset($_POST['name'])){

    // set connection variables
  $server ="localhost";
  $username = "root";
  $password = "";
  /// creat a connection 
  $con = mysqli_connect($server, $username, $password);


  // chech for connection success 
  if(!$con){
    die("Connection failed".mysql_connect_error());
  }
  //echo "Connectected to DataBase";


  // collect post variable
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phone_no = $_POST['phone_no'];
  $age = $_POST['age'];
  $other = $_POST['other'];

  $sql = "INSERT INTO  `trip`.`trip` (`email`, `name`, `phone_no`, `age`, `other`, `dt`) VALUES ('$email', '$name', '$phone_no', '$age', '$other', current_timestamp())";
  //echo $sql


  // execute the query
  if ($con-> query($sql)== true) {
    //echo "successfull";
    $insert= true;
  }
  else{
    echo"error: $sql <br>  $con->error";
  }
 
  // close the data base connection 
  $con-> close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLEGE DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
    <link rel="stylesheet" href="index.css">
</head>
<body> 
  <img class="bg" src="bgg.jpg" alt="College">

    <div class="container">
      <h1>
        WELCOME TO KMCLU
      </h1>
      <P class="head">
        <b>ENTER YOUR DETAILS</b> 
      </P>
    
     <?php
       if($insert == true){
       echo "<p class='after'>
        <b> YOUR DATA HAS SUBMITTED</b>
        </p>";
    }
      ?>

      <form action="index.php" method="post">
      <input type="email" name="email" id="" placeholder="Enter Your Email">
      <input type="text" name="name" id="" placeholder="Enter Your Name">
      <input type="text" name="phone_no" id="" placeholder="Enter Your Phone Number">
      <input type="text" name="age" id="" placeholder="Enter Your AGE">
      <textarea name="other" id="" cols="30" rows="10" placeholder="Enter Other Details" ></textarea>
      <button type="" class="btn btn-success">SUBMIT</button>
      </form>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  

   
</body>
</html>