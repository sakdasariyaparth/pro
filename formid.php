<?php
                              if(isset($_REQUEST["b1"]))
                                {
                                    $name=$_REQUEST['name'];
                                    $lname=$_REQUEST['lname'];
                                    $qry="insert into sign_up(stu_name,stu_name2)values('$name','$lname')";
                                    $link=mysqli_connect("localhost","root","","parth_db");
                                    mysqli_query($link,$qry);
                                    ob_start();
                                    session_start();
                                    ob_end_clean();
                                    $_SESSION['uname']=$name;
                                    $_SESSION['is_login']="yes";
                                    header("location:identity.php");
                                }
                    ?>
                    <?php 
                                if(isset($_REQUEST["b1"]))
                                {
                                    $mail=$_REQUEST['mail'];
                                    $pass=$_REQUEST['pass'];    
                                    $qry="insert into sign_up2(stu_id,stu_pass)values('$mail','$pass')";
                                    $link=mysqli_connect("localhost","root","","parth_db");
                                    mysqli_query($link,$qry);
                                    ob_start();
                                    session_start();
                                    ob_end_clean();
                                    $_SESSION['uname']=$mail;
                                    $_SESSION['is_login']="yes";
                                    header("location:identity.php");
                                }
                    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET DATA</title>
    <?php include 'link.php'; ?>
    <!--JAVA SCRIPT ID COMPLSERY && PHP NAME COMPLSERY-->
    <style>
        #hed{
            align-items: center;
            text-align: center;
            font-size: 450%;
            background-color: green;
            color: white;
            margin-top: 25px;
        }
        .btn{
            background-color: green;
        }
        label{
            font-size: 13px;
        }
        .form-control {
            font-size: 1.5rem;
        }
        #next{
            font-size: 11px;
            text-decoration: none;
        }
    </style>
	<title>Log In.</title>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <header id="hed">
                    NAV GUJRAT COLLEGE
                </header>
            </div>
        </div>
    </div>
    <br><br><br><br><brbr>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="formid.php" method="POST" class="row g-3"> 
                        <h2>SIGN UP</h2>
                        <div class="col-12">
                            <label>First Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="First Name" required>
                        </div>
                         <div class="col-12">
                            <label>Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control"required placeholder="Last Name">
                        </div>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="mail" id="mail" class="form-control"required placeholder="Username" maxlength="15" title="Create Username Only 15 Character">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        <div class="col-12">
                            <input type="submit" value="SIGN UP" id="b1" name="b1" class="btn btn-success mt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="formid2.php" id="next">You Have Alredy Sign Up?</a> 
                        </div>
                    </form>
                </div>
            </div>
            <!--<div class="col-md-4 offset-md-0">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="POST" class="row g-3"> 
                        <h2>LOG IN</h2>
                        <div class="col-12">
                            <label>E-mail</label>
                            <input type="email" name="mail2" id="mail2" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>
                        <div class="col-12">
                            <input type="submit" value="LOG IN" id="b1" name="b1" class="btn btn-success mt-2">    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>-->
</body>
</html>