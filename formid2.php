<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOG IN</title>
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
                            <label>Username</label>
                            <input type="text" name="mail2" id="mail2" class="form-control" placeholder="Username" maxlength="15">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Password">
                            <?php 
                            if(isset($_REQUEST["b1"]))
                            {
                                $aduser=$_REQUEST['mail2'];
                                $adpass=$_REQUEST['pass2'];
                                $qry="select * from sign_up2 where stu_id='$aduser' and stu_pass='$adpass'";
                                include 'conn.php';
                                /*$link=mysqli_connect("localhost","root","","parth_db");
                                $result=mysqli_query($link,$qry);*/
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