<?php
    ob_start();
    session_start();
    ob_end_clean();
                                        
        if(isset($_SESSION["is_login"]) && $_SESSION['is_login']=="yes")
        {

        }
        else
        {
            header("location:formid2.php");
        }
?>
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
    <!--NEW START UP--> 
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
    ></script>
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
        #hed2{
            align-items: center;
            text-align: center;
            font-size: 250%;
            background-color: green;
            color: white;
            margin-top: 20px;
        }
        #mafe{
            margin-top: 10px;
            margin-left: 10px;
        }
        #btn{
            background-color: green;
            color: white;
        }
        label{
            font-size: 13px;
        }
        .form-control {
            font-size: 1.8rem;
        }
        #per2{
            font-size: 12px;
            text-decoration: none;
        }
        .per{
            float: right;
            margin-top: 20px;
            margin-right: 40px;
        }
        .text{
            font-size: 18px;
        }
        a{
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
        <div class="row">
            <div class="col-sm-12">
                <header id="hed2">
                    FILL YOUR IDENTITY CARD.
                </header>
            </div>
        </div>
    </div>
        <br>
        <div class="container">
        <div class="d-flex align-items-center">
        <a href="showdata.php"><input type="button" value="You have alredy Fill This form ?" class="btn btn-link px-4 me-2 btn-lg"></a>
        <a href="logout2.php"><button type="button" class="btn btn-success me-3 btn-lg">
          LOG OUT
        </button></a>
        </div>
        </div>
    <!--<div class="container">
        <div class="row">
            <div class="col-sm-12">
                FIRST LOG OUT BUTTON IN USER
                <a href="logout2.php"><input type="submit" value="LOG OUT" id="b2" name="b2" class="btn btn-success btn-lg per"></a>
                <a href="showdata.php" id="per2">&nbsp;&nbsp;&nbsp;You have alredy Fill This form ?</a>
            </div>
        </div>
    </div>-->
    <br>
    <form method="POST" enctype="multipart/form-data">
        <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Your Name :- </label>
                    <input type="text" name="name" class="form-control" id="name"><p id="n1"></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Enroll Number :- </label>
                    <input type="text" name="enumber" class="form-control" id="number">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            <div class="form-group">
                    <label>Course Name :- </label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="cname">
                          <option selected>SELECT ANY</option>
                          <option value="B.C.A">B.C.A</option>
                          <option value="B.Com">B.Com</option>
                          <option value="M.com">M.com</option>
                          <option value="L.L.B">L.L.B</option>
                          <option value="L.L.M">L.L.M</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>First Year [Ex : 2021]:- </label>
                    <input type="text" name="fyear" class="form-control" id="fyear">
                </div>
            </div>
             <div class="col-sm-4">
                <div class="form-group">
                    <label>Total Sem :- </label>
                    <input type="text" name="tsem" class="form-control" id="totalsem">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Date Of Birth :- </label>
                    <input type="date" name="dob" class="form-control" id="dob">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Contact Number :- </label>
                    <input type="tel" name="cnumber" class="form-control" id="cnumber" >
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group" id="mafe">
                    <label>Male :- </label><br>
                    <label class="radio-inline"><input type="radio" name="optradio" checked value="Male">Male</label>
                    <label class="radio-inline"><input type="radio" name="optradio" value="Female">Female</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Address :- </label>
                    <input type="text" name="add" class="form-control" id="add">
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
               
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Upload Your Passport Size Photo :- </label>
                    <input type="file" name="f1" class="form-control" id="pic">
                </div>    
            </div>
        </div>
        <div class="alert alert-success">
            <p class="text"><strong>1.&nbsp;</strong>The Form Will Be Considered Valid Only If All The Details Are Filled.</p>
        </div>
        <div class="alert alert-success">
            <p class="text"><strong>2.&nbsp;</strong></p>
        </div>
        <div class="alert alert-success">
            <p class="text"><strong>3.&nbsp;</strong></p>
        </div>
        <div class="alert alert-success">
            <p class="text"><strong>4.&nbsp;</strong></p>
        </div>
        <div class="alert alert-success">
            <p class="text"><strong>5.&nbsp;</strong></p>
        </div>
        <div class="alert alert-success">
            <p class="text"><strong>6.&nbsp;</strong></p>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="submit" name="b1" value="SUBMIT"  class="btn btn-block btn-lg btn-" id="btn">
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php
        if(isset($_REQUEST["b1"]))
        {
            $name=$_REQUEST['name'];
            $enumber=$_REQUEST['enumber'];
            $cname=$_POST['cname'];
            $fyear=$_REQUEST['fyear'];
            $tsem=$_REQUEST['tsem'];
            $dob=$_REQUEST['dob'];
            $cnumber=$_REQUEST['cnumber'];
            $optradio=$_POST['optradio'];
            $add=$_REQUEST['add'];
            $f1=time().$_FILES["f1"]['name'];
            move_uploaded_file($_FILES["f1"]['tmp_name'],"photo/$f1");
            $qry="insert into idcard_gettbl(s_name,s_enumber,s_cname,s_fyear,s_tsem,s_dob,s_cnumber,s_optradio,s_add,s_f1)values('$name','$enumber','$cname',$fyear,$tsem,'$dob',$cnumber,'$optradio','$add','$f1')";
            $link=mysqli_connect("localhost","root","","parth_db");
            $name=mysqli_real_escape_string($link,$name);
            $enumber=mysqli_real_escape_string($link,$enumber);
            $cname=mysqli_real_escape_string($link,$cname);
            $fyear=mysqli_real_escape_string($link,$fyear);
            $tsem=mysqli_real_escape_string($link,$tsem);
            $dob=mysqli_real_escape_string($link,$dob);
            $cnumber=mysqli_real_escape_string($link,$cnumber);
            $optradio=mysqli_real_escape_string($link,$optradio);
            $add=mysqli_real_escape_string($link,$add);
            $f1=mysqli_real_escape_string($link,$f1);
            mysqli_query($link,$qry);
        }
    ?>


</body>
</html>
    <!--</*?php
            $qry="select * from ";
            $link=mysqli_connect("localhost","root","","parth_db");
            $result=mysqli_query($link,$qry);
            if(mysqli_affected_rows($link)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
        ?*/>          
            
                <img src='photo/</*?php echo $row["photo"] ?>' width='100px'>
            
        </*f?php
                }
            }
        ?>



        -->