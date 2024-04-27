Login module connect our project 

Step 1. => import User Sql file in Mysql database
Step 2. => Go to the Navbar of your project and add Login & Signup button and link the login button to signin.php and the signup button to signup.php.
Setp 3. => Now go to the profile page of Login-Model, include your Navbar and click on Create Profile button and link it to the profile page.
Setp 4. => if(empty($_Session['name')){ header('Location: index.(file-path)'); exit(); }

Setp 5. => Add this code to all pages of your project

  if(isset($_Session['name')){
  $username = $_Session['name'];
  echo $username;
  }
