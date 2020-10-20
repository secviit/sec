<?php
session_start();
include('security.php');
require 'dbconfig.php';	
include('include/header.php'); 
include('include/navbar.php'); 
?>
    <main>
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h1 class="m-4">Dashboard</h1>
        <!-- Content Row -->
        <div class="row">
       
        <div class="col-xl-3 col-md-6 m-3">
            <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <a href="admin_table.php">Total Registered Admin</a>    
                    </div>
                    <div class="h5 mb-0 font-weight-bold">
                    <?php
                    $query = "SELECT id FROM admin_table ORDER BY id";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h1>'.$row.'</h1>';
                    ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x"></i>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 m-3">
            <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        <a href="member_table.php">Total Registered Member</a>
                    </div>
                    <div class="h5 mb-0 font-weight-bold">
                    <?php
                        $query = "SELECT id FROM member_table ORDER BY id";
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h1>'.$row.'</h1>';
                    ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x"></i>
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
        