<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DEPARTMENT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOG IN </title>
    <?php include 'link.php'; ?>
     <style>
    	body{
    		font-family: monospace;
    	}
    	#hed{
            align-items: center;
            text-align: center;
            font-size: 450%;
            background-color: green;
            color: white;
            margin-top: 25px;
            font-family: monospace;
        }
        h4{
            line-height: 3.2;
        }
        .btn{
            background-color: green;
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
     </div>
     <br><br><br><br><br><br><br>
      <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="POST" class="row g-3"> 
                        <h4>WELCOME BACK ADMIN</h4>
                        <div class="col-12">
                            <label>USERNAME</label>
                            <input type="text" name="username" id="user" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-12">
                            <label>PASSWORD</label>
                            <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-12">
                        <?php 
                            if(isset($_REQUEST["b1"]))
                            {
                                $aduser=$_REQUEST['username'];
                                $adpass=$_REQUEST['password'];
                                $qry="select * from admin where ad_user='$aduser' and ad_pass='$adpass'";
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
                                        header("location:admin2.php");
                                    }
                                }
                            else
                            {
                                echo "<font color='red'>wrong username or password</font>";
                            }
                        }
                        ?>
                        </div>
                        <div class="col-6">
                            <!--<a href="datadis.php">--><input type="submit" value="LOG IN" id="b1" name="b1" class="btn btn-success mt-4">   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</table>
</html>
<!-- test purpose -->