<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DEPARTMENT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOG IN </title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
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
                                echo "wrong username or password";
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