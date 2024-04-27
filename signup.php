<?php  
    session_start();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <?php include'header.php'; ?>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 rg-box">
                <?php if(isset($_SESSION['status'])){
                    $message =$_SESSION['status'];
                    echo "<span>".$message."</span>";
                    // Maximum time limit set karain
                    set_time_limit(10); // time for 10 second
                    session_unset();
                    session_destroy();
               }?>
               <!-- Form code Start -->
                <form action="signupdb.php" method="post">
                   <h3 class="text-center heading">Registration Form <br> *********************</h3>
                   <label for="">Full Name :</label>
                   <input type="text" name="name" id="">

                   <label for="">Date of Birth :</label>
                   <input type="date" name="dob" id="" class="mb-3">

                   <label for="">Gender :</label>
                   <input type="radio" name="gen" value="Male" id=""> <b>Male</b>
                   <input type="radio" name="gen" value="Female" id=""> <b>Female</b> <br>

                   <label for="">Email :</label>
                   <input type="email" name="email" id="">

                   <label for="">Mobile</label>
                   <input type="number" name="mob" id="">
                    <!-- Button Code Session -->
                   <button  type="submit" class="bg-success mt-4">Register</button>
                   <button type="button"  class="bg-primary" onclick="redirectToLoginPage('signin.php')"> Login</button>
                </form>
                        <center><b>OR</b></center>

                        <div class="row text-center mb-5">
                            <div class="col">Google Login</div>
                        </div>
            </div>
        </div>
        <script>
        function redirectToLoginPage(url) {
          window.location.href = url;
        }
    </script>
   
</body>
</html>