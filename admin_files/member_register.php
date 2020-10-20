<?php
session_start();
include('security.php');
include('include/header.php'); 
include('include/navbar.php'); 
?>

<main>
    <div class="container">
    <?php

        if(isset($_SESSION['success'])&&$_SESSION['success']!=""){
            echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['status'])&&$_SESSION['status']!=""){
            echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
    ?>
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8 col-md-8">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">New Member Registration</h1>
                                </div>
                                <form class="user" action="code.php" method="POST">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group pb-2">
                                                <label>First Name</label>
                                                <input type="text" name="first_name" class="form-control form-control-user" placeholder="Enter First Name" required >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group pb-2">
                                                <label>Last Name</label>
                                                <input type="text"  name="last_name" class="form-control form-control-user" placeholder="Enter Last Name" required>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group pb-2">
                                                <label>Username</label>
                                                <input type="text"  name="user_name"class="form-control form-control-user" placeholder="Enter Username" required >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group pb-2">
                                                <label>Email</label>
                                                <input type="email"  name="email"class="form-control form-control-user" placeholder="Enter Valid Email" required>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group pb-2">
                                                <label>Password</label>
                                                <input type="password"  name="pass" class="form-control form-control-user" placeholder="Enter password" required >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group pb-2">
                                            <label>Confirm Password</label>
                                                <input type="password"  name="con_pass" class="form-control form-control-user" placeholder="Re-enter password" required >
                                            </div>
                                        </div>
                                    </div>      
                                    <button type="submit" name="member_register_btn" class="btn btn-primary btn-user btn-block"style="border-radius: 10rem;"> Submit </button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>




<?php
include('include/footer.php'); 
include('include/scripts.php'); 
?>
        