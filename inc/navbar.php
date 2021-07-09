<style>
  #creat{
    border: 1px solid #0066ff;
    color: #0066ff;
  }
  #creat:hover{
    border: 1px solid #0066ff;
    color: #fff;
    background-color: #0066ff;
  }
  #sign_out{
    border: 1px solid #ff0000;
    color: #ff0000;
  }
  #sign_out:hover{
    border: 1px solid #ff0000;
    color: #fff;
    background-color: #ff0000;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Tags</a>
      </li>
    </ul>
    
     <ul class="navbar-nav">
       
        <?php
        
        if(isset($_SESSION['User_Fname'])){

          echo "
          
              <li class='nav-item mr-2'>
                  <a id='creat' class='nav-link' href='create_post.php'>Create</a>
              </li>

              <li class='nav-item'>
                  <a id='sign_out' class='nav-link' href='sign_out.php'>Sign Out</a>
              </li>
          
          ";

        }
        else{
            echo "
            
            <li class='nav-item'>
                 <a class='nav-link' href='sign_in.php'>Sign In</a>
          </li>

          <li class='nav-item'>
                 <a class='nav-link' href='sign_up.php'>Sign Up</a>
          </li>

            ";

        }
        
        ?>
     </ul>

  </div>
</nav>