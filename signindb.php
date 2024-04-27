<?php
include 'config.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve from data
    $email = $_POST['email'];
    $dob = $_POST['dob'];
 
    // Validate input (you can add more validattion)
    if(!empty($dob) && !empty($email)){
        
        // user check 
        $check_query = "SELECT * FROM `users` WHERE `email` ='$email' && `dob` = '$dob';";

        $result = mysqli_query($conn, $check_query);
        
        if(mysqli_num_rows($result) > 0){
            $row = $result->fetch_assoc();
                //  Set All Session 
            $_SESSION['name']= $row['name'];
            $_SESSION['dob']= $row['dob'];
            $_SESSION['email']= $row['email'];
            $_SESSION['gen']= $row['gen'];
            $_SESSION['mob']= $row['mob'];

                // Redirect profile page
                header('Location: profile.php');
                exit();
        }else{
            // Error message... Display on user
            $_SESSION['status'] = "email id and dob  not Match !";
            // Redirect Login page 
            header('Location: signin.php');
            // this page is close 
            exit();
        }
    } else{ 
        // Error message... field required ;
         $_SESSION['status'] = "All * fields are required."; 
        // Redirect Login Page
        header('Location: signin.php');
        // this page is close  
            exit();
            }
}
?>
