

<?php
 include('include/header.php');
 include('include/navbar.php');
?>
<div class="hero_login">
    <div class="wrapper">
        <p class="hero_text1">Login is only for SEC members</p>
        <div class="container ml-5" style="position:absolute;top:60%;">
            <form class="user" action="admin_files/code.php" method="POST">
                <div class="form-group">
                <input type="text" name="usernamee" class="form-control form-control-user" placeholder="Enter username...">
                </div>
                <div class="form-group">
                <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password">
                </div>
                <button type="submit" name="member_login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                <hr>
            </form>
        </div>
       
    </div>
</div>

<?php
 include('include/scripts.php');
?>