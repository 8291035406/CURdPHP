<?php
require('conn.php');
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/v5.0.0/css/bootstrap.min.css" />
    <title>Edit user</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4>Update User
                        <a href="userdetail.php"><button class="btn btn-danger float-end">Close</button></a>
                        </h4>
                    </div>
                    <?php 
                        if(isset($_GET['id']))
                        {
                            $userid = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM users where id='$userid' ";
                            $query_run = mysqli_query($conn,$query);
                            if(mysqli_num_rows($query_run)>0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                 <form action="code.php" method="POST">
                    <div class="card-body">
                    <div class="row">
                            <div class="col">
                                <input type="hidden" name="user_id" class="form-control" value="<?=$user['id']?>" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">First Name:</label>
                                <input type="text" class="form-control" value="<?=$user['FirstName'];?>" id="Fname" name="Fname">
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Last Name:</label>
                                <input type="text" class="form-control" value="<?=$user['LastName'];?>" id="Lname" name="Lname">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Age:</label>
                                <input type="text" class="form-control" value="<?=$user['Age'];?>" id="Age" name="Age">
                            </div>
                            <div class="col">
                                <label for="" class="form-label ">Email:</label>
                                <input type="text" class="form-control" value="<?=$user['Email'];?>" id="Email" name="Email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Contact:</label>
                                <input type="text" class="form-control" value="<?=$user['Contact'];?>" id="Contact" name="Contact">
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Password:</label>
                                <input type="password" class="form-control" value="<?=$user['Password'];?>" id="Password" name="Password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="" type="hidden" aria-readonly="true" class="form-label"></label>
                                <input type="hidden" class="form-control">
                            </div>
                            <div class="col">
                                <label for=""  class="form-label">show Password:</label>
                                <input type="checkbox" onclick="myFunction()">                                
                                
                            </div>
                        </div>


                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3 ">
                            <button type="submit" name="Update_User" class="btn btn-dark">Update User</button>
                        </div>
                    
                    </div>

                    </form>
                                <?php
                    
                            }
                            else
                            {
                                echo"data not found";
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
            button: "Aww yiss!",
        });
        function myFunction()
         {
            var x=
            document.getElementById("Password");
            if(x.type== "password"){
                x.type ="text";
            }
            else{
                x.type ="password";
            }
         }   
        
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>