<?php
    session_start();

    include("db.connect.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $Name = $_POST['name'];
      $Email = $_POST['email'];
      $PhoneNO = $_POST['pnum'];
      $Courses= $_POST['courses'];

      if(!empty($email) && !empty($password) && !is_numeric($email))
      {
        $query = "insert into Your dream (name, email, pnum,courses) values('$Name', '$Email', '$phoneNo', '$courses')";

        mysqli_query($con, $query);

        echo "<script type = 'text/javascript'> alert('Successfully created')</script>";

      }
      else
      {
        echo "<script type = 'text/javascript'> alert('Please Enter Some Valid Information')</script>";
      }
    }
?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="rectangle.css">
</head>
<body>
    <div class="rectangle">
    
            

        <div class="text-white">
            <div class="text-shape-orange">
                <p class="font-size">Your dream <br>
                    Job Awaits here.</p>
            </div>
            <div class="contact-form">
                <form method="post">
                    <label>Name*</label>
                    <input type="text" name="name" required>
                    <label>Email*</label>
                    <input type="text" name="email" required>
                    <label>PhoneNO.*</label>
                    <input type="text" name="pnum" required>
                    <label>Courses*</label>
                    <select name="courses" required>
                        <option value="firstC">PPC Adviser</option>
                        <option value="firstC">xcvcvcxc</option>
                    </select><br>
                    <button>Request a call-back</button>
                
                    <img class="contact-img" src="Human avatar.png">
                
                </form>
                
            </div>
            
        </div>
        
        
    </div>
</body>
</html>