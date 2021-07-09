<?php
session_start();
?>

<?php include_once('inc/conn.php');?>
<?php

if(!isset($_SESSION['User_Fname'])){
    header("location: index.php");
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
    <title>Creat Post</title>
</head>
<body>
    
   <?php include_once('inc/navbar.php')?>

   <div class="container">
        <div class="row">
           <div class="col-md-12">

                
                    <div class="card mt-4">
                        <div class="card-header" id="card-header">
                            <h4>Creat a New Post</h4>
                        </div>
                        <div class="card-body" id="card-body">

                        <form action="create_post.php" method="POST" autocomplete="off">

                             <?php if(!empty($msg)){echo $msg;}?>

                            <div class="form-group">
                              <label for="">Title</label>
                              <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Post Title</small>
                            </div>

                            
                              <div class="form-group">
                                <label for=""></label>
                                <script src="plugin/ckeditor/ckeditor.js"></script>
                                <textarea class="form-control" name="" id="post_body" rows="15"></textarea>
                                <script>
                                      CKEDITOR.replace( 'post_body' );
                                </script>
                                 <small id="helpId" class="text-muted">Post Content</small>
                              </div>

                        <div class="card-footer" id="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Create Post</button>
                        </div>

                   </form>
                </div>
              </div>
           </div>
        </div>
   </div>
   

</body>
</html>