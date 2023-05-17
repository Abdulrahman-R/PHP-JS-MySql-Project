<?php
include './inc/db.php';
include './inc/form.php';
include './inc/db_close.php';
include './inc/select.php';







/*
echo '<pre>';
print_r($users);
echo '</pre>';
*/
/*
mysqli_free_result($result);
mysli_close($conn);
*/


?>

    <?php include_once './parts/header.php'; ?>


        
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
             <div class="col-md-5 p-lg-5 mx-auto ">
                    <img src="images/winners-gold.png" alt="" style="width: 100px;
                    height: 100px; padding-bottom: 5px;">
                    <h1 class="display-4 fw-normal">WIN WITH US</h1>
                    <p class="lead fw-normal">we will be open in</p>
                    <p id="CountDown"></p>
                    <p class="lead fw-normal">best of luck</p>


             <div class="container">
                <h5>To increase your chance of winning:</h5>
                <br>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">follow us on instagram</li>
                <li class="list-group-item">follow us on facebook</li>
                <li class="list-group-item">follow us on youtube</li>
                </ul>

            </div>
            
              </div>
          
       
        </div>
       
        
     
    
       
        <div class="container">

        <div class="position-relative  text-center ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">

        <form  action="<?php $_SERVER['PHP_SELF'] ?>" method = "POST" >
            <h3>Enter your information</h3>
            <div class="mb-3">
                <label for="FirstName" class="form-label">First name</label>
                <input type="text" name="firstName" class="form-control" id="FirstName" value ="<?php echo $firstName ?>" >
                <div  class="form-text error"><?php echo $errors['firstNameError']; ?></div>
            </div>
            <div class="mb-3">
                <label for="LastName" class="form-label">Last name</label>
                <input type="text" name="lastName" class="form-control" id="LastName" value ="<?php echo $lastName ?>" >
                <div  class="form-text error"><?php echo $errors['lastNameError']; ?></div>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="text" name="email" class="form-control" id="Email" value ="<?php echo $email ?>" >
                <div  class="form-text error"><?php echo $errors['emailError']; ?></div>
            </div>
            <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
    
  
    <!---
    <form action="index.php" method = "POST">
                        
        <input type="text" name="firstName" id="firstName" placeholder= "First Name">
        <br>
        <input type="text" name="lastName" id="lastName" placeholder= "Last Name">
        <br>
        <input type="text" name="email" id="email" placeholder= "Email">
        <input type="submit" name ="submit" value="send">    
    </form>
    --->


    
    <div class = "loader-con" style="position: fixed; top: 0%; left:0%; background-color: #000000eb; width: 100%;
                    height: 100%; display: none;">
     <div id="loader" style = "position: fixed; top: 50%; left:50%; transform: translate(-50%,-50%);">
	    <canvas id="circularLoader" width="200" height="200"></canvas>
     </div>
    </div>




    <!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto my-5 ">
<button type="button"  id = "winner" class="btn btn-primary" >
Selecting The Winner
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="modalLabel1">The Winner!!</h5>
  
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($users as $user) : ?>
            <h1 class="display-4 text-center modal-title" id="modalLabel1"><?php echo htmlspecialchars($user['firstName']). ' '
                    . htmlspecialchars($user['lastName']);?></h1>
        <?php endforeach;?>
      </div>
      
    </div>
  </div>
</div>




<!--

    <div id = "cards" class ="row mb-5 pb-5">
       
        <div class = "col-sm-6">
            <div class = "card my-2 bg-light">
                <div class = "card-body">
                    <h5 class = "card-title">  </h5>
                    <p class = "card_text"><?php echo htmlspecialchars($user['email']) ?></p>

                </div>
            

            </div>
       
        </div>
       
        
    
    </div>

        -->

    <?php include_once './parts/footer.php';?>
   

  
