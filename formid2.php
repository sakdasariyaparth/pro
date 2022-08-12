<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOG IN</title>
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
    </div><br><br><br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
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
                            <?php 
                            if(isset($_REQUEST["b1"]))
                            {
                                $aduser=$_REQUEST['mail2'];
                                $adpass=$_REQUEST['pass2'];
                                $qry="select * from sign_up2 where stu_id='$aduser' and stu_pass='$adpass'";
                                $link=mysqli_connect("localhost","root","","parth_db");
                                $result=mysqli_query($link,$qry);
                                if(mysqli_affected_rows($link)>0)
                                {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        ob_start();
                                        session_start();
                                        ob_end_clean();
                                        $_SESSION['uname']=$aduser;
                                        $_SESSION['is_login']="yes";
                                        header("location:identity.php");
                                    }
                                }
                            else
                            {
                            	echo "<font color='red'>";
                                echo "Wrong Username Or Password";
                                echo "</font>";
                            }
                        }
                        ?>
                        </div>
                        <div class="col-12">
                            <input type="submit" value="LOG IN" id="b1" name="b1" class="btn btn-success mt-2">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="formid.php" id="next">Create A New Account ?</a>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
		</div>
	</div>
</body>
</html>