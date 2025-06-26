<?php
$insert=false;
$error = "";
    // Set connection variables
if(isset($_POST['name'])){
       // Check if any field is empty
    if (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['gender']) ||
        empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['desc'])) {
        $error = "Please fill in all the fields before submitting.";
         echo "<script>alert('$error');</script>";
    } else {
     $server="localhost";
     $username="root";
     $password="";   

     //Create a database connection
     $con=mysqli_connect($server, $username, $password);

     //Check for connection success
     if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
     }
    //  echo "Success connecting to the db";

     // Select database
    mysqli_select_db($con, "tripp");

    // Collect post variables

     $name =$_POST['name'];
     $gender =$_POST['gender'];
     $age =$_POST['age'];
     $email =$_POST['email'];
     $phone =$_POST['phone'];
    $desc =$_POST['desc'];

     $sql=" INSERT INTO `tripp` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
   // echo $sql;

   //Execute the query
        if($con ->query($sql) == true){
            //  // 1. Write to CSV
            // $file = fopen("submissions.csv", "a");
            // fputcsv($file, [$name, $age, $gender, $email, $phone, $desc, date("Y-m-d H:i:s")]);
            // fclose($file);

            // 2. Redirect to thank-you page
            header("Location: thankyou.html");
            exit(); // stop execution
      //  echo " Successfully inserted";


      //Flag for successful insertion
    //   $insert=true;
    }
    else{
        echo "ERROR:$sql <br> $con->error";
         echo "<script>alert('$error');</script>";
        
    }

    // Close the database connection
    $con->close();
 }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
  <!--   <img class="ph" src="ph.jpeg" alt="BPPIMT"> -->
     
    <div class="container">
        <h1>Welcome to BPPIMT Industrial Visit Form</h1>
        <p class="submitMsgg">Enter your details and submit this form to confirm your participation in the trip.</p>
       <?php

//        if (!empty($error)) {
//     echo "<p style='color:red; font-weight:bold;'>$error</p>";
// }

     //   if (!empty($error)) {
     //       echo "<script>alert('$error');</script>";
    //    }
      // if($insert ==true){
    //  echo  "<p class='submitMsg'>Thanks for submitting your form.We are happy to see u joining us for the industrial visit
    //     </p>";

    //  echo "<script>alert('Thanks for submitting your form. We are happy to see you joining us for the industrial visit.');</script>";
    //         echo "<script>document.addEventListener('DOMContentLoaded', function() {
    //             document.querySelector('form').reset();
    //         });</script>";
    //    }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
       
<!-- <br><br>
<a href="download.php">
    <button class="btn" type="button">Download Submissions (CSV)</button>
</a> -->

    </div>
    <script src="index.js"></script>
    <script>
    document.querySelector("form").addEventListener("submit", function (e) {
        const name = document.getElementById("name").value.trim();
        const age = document.getElementById("age").value.trim();
        const gender = document.getElementById("gender").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const desc = document.getElementById("desc").value.trim();

        if (!name || !age || !gender || !email || !phone || !desc) {
            alert("⚠️ Please fill in all the fields before submitting.");
            e.preventDefault(); // Stop form from submitting
        }
    });
</script>
    
</body>

</html>

















