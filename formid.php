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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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
            font-size: 12px;
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
                            <label>E-mail</label>
                            <input type="email" name="mail" id="mail" class="form-control"required placeholder="E-mail">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        <div class="col-12">
                            <a href="formid2.php"><input type="submit" value="SIGN UP" id="b1" name="b1" class="btn btn-success mt-2"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="formid2.php" id="next">You Have Alredy Sign Up?</a> 
                        </div>
                    <?php
                              if(isset($_REQUEST["b1"]))
                                {
                                    $name=$_REQUEST['name'];
                                    $lname=$_REQUEST['lname'];
                                    $qry="insert into sign_up(stu_name,stu_name2)values('$name','$lname')";
                                    $link=mysqli_connect("localhost","root","","parth_db");
                                    mysqli_query($link,$qry);
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
                                }
                    ?>
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