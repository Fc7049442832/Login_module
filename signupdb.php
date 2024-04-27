<?php
include 'config.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve from data

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gen = $_POST['gen'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];

    $length = strlen($mob); // check the Mobile no Length 

    if($length != 10){
         //Error Show message
         $_SESSION['status'] = "Please Enter the 10 digit valid Mobile No !"; 
         //redirect Registration Page
         header('Location: signup.php');
         exit();
    }

    $Digit = substr($mob, 0, 1);

    if($Digit != 9 ||$Digit != 8 || $Digit != 7 || $Digit != 6 ){
        //Error Show message
        $_SESSION['status'] = "First digit of mobile no should start with 9,8,7 & 6 !"; 
        //redirect Registration Page
        header('Location: signup.php');
        exit(); 
    }


    // Validate input (you can add more validattion)
    if(!empty($name) && !empty($dob) && !empty($gen)&&! empty($email)&&! empty($mob)){
        



        // user check 
        // $check_query = "SELECT * FROM `users` WHERE `email` ='$email' && `dob` = '$dob';";

        // $result = mysqli_query($conn, $check_query);
        
        // if(mysqli_num_rows($result) > 0){
        //     $row = $result->fetch_assoc();
        //         //  Set All Session 
        //     $_SESSION['status'] = $name ." Already Registered ! ";
        //     $_SESSION['name']= $row['name'];
        //     $_SESSION['dob']= $row['dob'];
        //     $_SESSION['email']= $row['email'];
        //     $_SESSION['gen']= $row['gen'];
        //     $_SESSION['mob']= $row['mob'];

        //         // Redirect profile page
        //         header('Location: profile.php');
        //         exit();
        // }else{

        //     // Prepare SQL statement to insert data into the database
        //     $sql = "INSERT INTO `users`(`id`, `name`, `dob`, `gen`, `email`, `mob`, `create_at`) 
        //     VALUES ('null','$name','$dob','$gen','$email','$mob',' $currentDateTime')";
            
        //     if($conn->query($sql) === TRUE){
                
        //         // Fetch Data
        //         $check_query = "SELECT * FROM `users` WHERE `email` ='$email' && `dob` = '$dob';";

        //         $result = mysqli_query($conn, $check_query);
                
        //             if(mysqli_num_rows($result) > 0){
        //                 $row = $result->fetch_assoc();
        //                 //  Set All Session 
        //                 $_SESSION['name']= $row['name'];
        //                 $_SESSION['dob']= $row['dob'];
        //                 $_SESSION['email']= $row['email'];
        //                 $_SESSION['gen']= $row['gen'];
        //                 $_SESSION['mob']= $row['mob'];

        //                     // Redirect profile page
        //                     header('Location: profile.php');
        //                     exit();

        //             }else{ echo " no data";}

        //     }else{
        //         //Error Show message
        //          $_SESSION['status'] = "Error : ". $sql."<br>". $conn->error; 
        //         //redirect Registration Page
        //         header('Location: signup.php');
        //         exit();
        //         }
            
        //     //close database connection
        //     $conn->close();
        // }
    } else{  
        //Error Show message
        $_SESSION['status'] = "All filelds are required."; 
        //redirect Registration Page
        header('Location: signup.php');
        exit();
        }
}

