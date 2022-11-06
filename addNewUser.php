<?php
session_start();
/*include "conn.php";
if(isset($_POST['submit'])){
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $age = $_POST['Age'];
    $email = $_POST['Email'];
    $contact = $_POST['Contact'];
    $password = $_POST['Password'];

    $sql ="INSERT INTO users( `id`,`FirstName`, `LastName`, `Age`, `Email`, `Contact`, `Password`) VALUES ('','$fname','$lname','$age','$email','$contact','$password')";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        $_SESSION['message']= "User added Sucessfully";
        header("Location: addNewUser.php");
        exit(0);
    }
    else{
        $_SESSION['message']= "User not created";
        header("Location: addNewUser.php");
        exit(0);
    }
}
*/

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
    <title>Add user</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4>Add User
                        <a href="userdetail.php"><button class="btn btn-danger float-end">Close</button></a>
                        </h4>
                    </div>
                    <?php 
                    include ('message.php');
                    ?>
                    <form action="code.php" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">First Name:</label>
                                <input type="text" class="form-control"placeholder="First Name" id="Fname" name="Fname">
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Last Name:</label>
                                <input type="text" class="form-control"placeholder="Last Name" id="Lname" name="Lname">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Age:</label>
                                <input type="text" class="form-control"placeholder="Age" id="Age" name="Age">
                            </div>
                            <div class="col">
                                <label for="" class="form-label ">Email:</label>
                                <input type="text" class="form-control"placeholder="Email" id="Email" name="Email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Contact:</label>
                                <input type="text" class="form-control"placeholder="Contact Number" id="Contact" name="Contact">
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Password:</label>
                                <input type="password" class="form-control"placeholder="Password" id="Password" name="Password" >
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
                            <button type="submit" name="submit" class="btn btn-dark">Add User</button>
                        </div>
                    
                    </div>

                    </form>
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