<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include 'header.php'; ?>
</head>
<body>
    <div class="container">
        <div class="row gapping">

        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 rg-box">
                <?php if(isset($_SESSION['status'])){
                    $message= $_SESSION['status'];
                    echo "<span style='color:red;'>".$message."</span>";
                 }?>
                <form action="signindb.php" method="POST">
                   <h3 class="text-center heading">Login Page <br> *************</h3>
                

                   <label for="">Email/User id :</label>
                   <input type="email" name="email" id="" require>

                   <label for="">Date of Birth :</label>
                   <input type="date" name="dob" id=""  require>

                   <button type="submit" class="bg-primary mt-5"> Login</button>
                  <button class="bg-success" ><a href="signup.php">Registration</a></button>
                  
                </form>
                        <center><b>OR</b></center>

                        <div class="row text-center mb-5">
                            <div class="col">Google Login</div>
                        </div>
            </div>
        </div>

        <div class="row gapping">

        </div>
    </div>
    
    
</body>
</html>
<?php  
    if(isset($_SESSION['status'])){
        // Maximum time limit set karain
        set_time_limit(10); // time for 10 second
        session_unset();
        session_destroy();

    }
?>