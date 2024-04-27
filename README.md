Login module connect our project 

Step 1. => import User Sql file in Mysql database
Step 2. => apne project ke navbar me jakar Login & signup ka button add kare  aur use  Login button ko signin.php se aur signup ko signup.php se link kare.
Setp 3. => ab Login-module ke profile page me jakar apna navbar include kare  aur profile button create kare link kare profile page se
Setp 4. => if(empty($_Session['name')){ header('Location: index.(file-path)'); exit(); }

Setp 5. => apne project ke sabhi page me  

  if(isset($_Session['name')){
  $username = $_Session['name'];
  echo $username;
  }
