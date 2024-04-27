<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php include 'header.php';
        // Session Start
        session_start();
        // Check user is logged in or not
        if(empty($_SESSION['email'])){
            // Redirect to login page
            header('Location: signin.php');
            exit();
        }

        // Welcome message to user
        if(isset( $_SESSION['status'])){
        echo "<script>
                 alert(".$_SESSION['status'].");
            </script>";
        }else{
            echo "<script>
            alert('Welcome to ".$_SESSION['name'].".');
            </script>";
        }       
    ?>
    <style>
        .profile-box{
            border: 1px solid none;
            border-radius: 10px;
            padding: 20px;
            background-color: #e7e6e6a9;    
        }
        .profile-box label{
            width: 35%;
            margin: 5px auto;
            padding: 3px auto;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 500;
            font-size: 17px;
        }
        .profile-box label .user{
            width: 65%;
            margin: 5px auto;
            padding: 3px auto;
        }
    </style>
</head>
<body>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 profile-box text-center">
              
                 <h3 class="text-center heading">Profile <br> ************</h3>
                  <!-- Display User Data -->
                   <label for="">Name : </label>
                   <label class="user"><?php echo $_SESSION['name']; ?> </label>

                   <label for="">Date of Birth :</label>
                   <label class="user"><?php echo $_SESSION['dob']; ?> </label>

                   <label for="">Gender :</label>
                   <label class="user"><?php echo $_SESSION['gen']; ?> </label>

                   <label for="">email :</label>
                   <label class="user"><?php echo $_SESSION['email']; ?> </label>

                   <label for="">Mobile :</label>
                   <label class="user"><?php echo $_SESSION['mob']; ?> </label>
                   <!-- logout Button  -->
                   <button class="bg-danger"> <a href="logout.php">logout</a></button>  
            </div>
        </div>
    </div>
  
  
</body>
</html>