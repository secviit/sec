<?php
session_start();
include('security.php');
require 'dbconfig.php';	
include('include/header.php'); 
include('include/navbar.php'); 
?>
<main style="margin-top: 30px;">
        <div class="container-fluid">
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
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">New Admin
                        <a href="admin_register.php"class="ml-3 btn btn-primary text-left">Add</a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <?php
                        $query = "SELECT * FROM admin_table";
                        $query_run = mysqli_query($connection, $query);
                    ?>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> FirstName </th>
                                    <th> LastName </th>
                                    <th> Username </th>
                                    <th> Email </th>
                                    <th> EDIT </th>
                                    <th> DELETE </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if(mysqli_num_rows($query_run)>0){
                                    while($row=mysqli_fetch_assoc($query_run)){
				            ?>
                                <tr>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['FirstName'];?></td>
                                    <td><?php echo $row['LastName'];?></td>
                                    <td><?php echo $row['username'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td>
                                        <form action="#" method="post">
                                            <input type="hidden" name="edit_id" value="">
                                            <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
				                }
			                    }
                                else{
                                    echo "No Record found";
                                }
		                        ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </main>
    <?php
include('include/footer.php'); 
include('include/scripts.php'); 
?>
        