<?php
session_start();
?>

<?php include_once('inc/conn.php');?>
<?php

   if(isset($_POST['submit'])){

       //declarring variables and assign emtpy values
     
       $email = "";
       $password = "";
       $msg = "";

       
       $email = input_varify ($_POST['email']);
       $password = input_varify ($_POST['password']);

      /* echo $firstname;
       echo "<br>";
       echo $lastname;
       echo "<br>";
       echo $email;
       echo "<br>";
       echo $password;
       echo "<br>"; */


       $query = "SELECT * FROM TBL_User WHERE email ='{$email}' AND pwd ='{$password}' LIMIT 1";

       $ShowResult = mysqli_query($conn, $query);

       if($ShowResult){
           if(mysqli_num_rows($ShowResult) == 1){

            $user = mysqli_fetch_assoc($ShowResult);
            $_SESSION['User_Fname'] = $user['Fname'];
            $_SESSION['User_lname'] = $user['Lname'];

            header('location: index.php');

           }
           else{

            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Sorry!</strong> Please check your email or password
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
                
           }
       }

   }


  //prevent cross site data

  function input_varify($data){

        //Remove empty space from user input
        $data = trim($data);

        //Remove back slash from user input
        $dat = stripslashes($data);

        //Convert special chars to html entities
        $data = htmlspecialchars($data);

        return $data;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/bootstrap.min.css">
    <script src="plugin/jquery.min.js"></script>
    <script src="plugin/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/sign_up.css">
    <title>Blog App</title>
</head>
<body>
    
   <?php include_once('inc/navbar.php')?>

   <div class="container">
        <div class="row">
           <div class="col-md-12">

              
                
                    <div class="card mt-4">
                        <div class="card-header" id="card-header">
                            <h4>Sign In</h4>
                        </div>
                        <div class="card-body" id="card-body">

                        <form action="sign_in.php" method="POST" autocomplete="off">

                         <?php if(!empty($msg)){echo $msg;}?>


                            <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Enter your email address</small>
                            </div>

                            <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Create your own password</small>
                            </div>

                        </div>
                        <div class="card-footer" id="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                        </div>

                   </form>
                </div>
              </div>
           </div>
        </div>
   </div>
   

</body>
</html>