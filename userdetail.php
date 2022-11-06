<?php
session_start();
require('conn.php');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
    <title>PHP CURD operation</title>
  </head>
  <body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h4>user details
                        <a href="addNewUser.php"><button class="btn btn-dark float-end"><i class="bi bi-plus-lg"><span> </span></i>Add User</button></a>
                        </h4>
                    </div>
                    <?php include('message.php') ?>
                    <div class="card-body ">
                        <table class="table table-bordered table-stiped table-hover align-middle ">
                            <thead class="table-dark ">
                                <tr>
                                    <td>Sr.no</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>age</td>
                                    <td>Email</td>
                                    <td>Contact</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php 
                                    $query = "SELECT `id`, `FirstName`, `LastName`, `Age`, `Email`, `Contact` FROM `users`";
                                    $query_run = mysqli_query($conn, $query);
                                    if(mysqli_num_rows($query_run)>0)
                                    {
                                        foreach($query_run as $user)
                                        {
                                            
                                            ?>
                                            <tr>
                                                <td><?= $user['id']?></td>
                                                <td><?= $user['FirstName']?></td>
                                                <td><?= $user['LastName']?></td> 
                                                <td><?= $user['Age']?></td>
                                                <td><?= $user['Email']?></td>
                                                <td><?= $user['Contact']?></td>
                                                <td><a href="edituser.php?id=<?= $user['id'];?>"><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a></td>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        <button type="submit" name="delete_user" value="<?= $user['id'];?>" class="btn btn-danger"> <i class="bi bi-trash-fill"></i></button>
                                                    </form>
                                            
                                                </td>
                                            </tr>
                                            <?php 
                                        }
                                    }
                                    else
                                    {
                                        echo"no records found";
                                    }
                                    ?>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>