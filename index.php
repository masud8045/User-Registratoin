

<?php include('header.php'); ?>

    
   

   <section>
     <div class="container">
       <div class="row">
         <div class="col-md-4 offset-md-4">
          <h3>User Registration Form</h3>
           <form action="" method="post">
             <div class="form-group">
               <label>First Name</label>
               <input type="text" name="fname" class="form-control" autocomplete="off" required="required">
             </div>
             <div class="form-group">
               <label>Last Name</label>
               <input type="text" name="lname" class="form-control" autocomplete="off" required="required">
             </div>
              <div class="form-group">
               <label>Username</label>
               <input type="text" name="username" class="form-control" autocomplete="off" required="required">
             </div>
             <div class="form-group">
               <label>Password</label>
               <input type="password" name="password" class="form-control" autocomplete="off" required="required">
             </div>
             <div class="form-group">
               <label>Email Address</label>
               <input type="email" name="email" class="form-control" autocomplete="off" required="required">
             </div>
              <div class="form-group">
               <label>Phone</label>
               <input type="text" name="phone" class="form-control" autocomplete="off" required="required">
             </div>

             <div class="form-group">
               <input type="submit" name="register" value="Register Member" class="btn btn-success">  
             </div>
           </form>






          <?php 

    if (isset($_POST['register'])) {
     
     $fname        =$_POST['fname'];
     $lname        =$_POST['lname'];
     $username     =$_POST['username'];
     $password     =$_POST['password'];
     $email        =$_POST['email'];
     $phone        =$_POST['phone'];


     // Password encryption


     $hassedpass = sha1($password);



     //  Data insert

     $query = "INSERT INTO users (firstname, lastname, username , password, email, phone, join_date) VALUES ('$fname', '$lname', '$username', '$hassedpass', '$email', '$phone', now() )";

    // echo $query;

     $registerUser = mysqli_query($db, $query);

    } 


    ?> 
         </div>
       </div>
     </div>
   </section>
       

       
<?php include('footer.php'); ?>
