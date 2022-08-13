<?php
    ob_start();
    session_start();
    ob_end_clean();
                                        
        if(isset($_SESSION["is_login"]) && $_SESSION['is_login']=="yes")
        {

        }
        else
        {
            header("location:formid.php");
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
            font-size: 15px;
        }
        .form-control {
            font-size: 2rem;
        }
        .per{
            color: green;
            float: right;
            margin-top: 20px;
            margin-right: 100px;
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
                    GET YOUR IDENTITY CARD.
                </header>
            </div>
        </div>
        </div>
        <div class="row">
        <a href="logout2.php"><input type="submit" value="LOG OUT" id="b2" name="b2" class="btn btn-outline-success btn-lg per"></a>
        <div class="row">
        </div>
    <form method="post" enctype="multipart/form-data">
        <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <br><br>
                    <label>Your Name :- </label>
                    <input type="text" name="name" class="form-control" id="name"><p id="n1"></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <br><br>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <a href=""><input type="submit" name="b1" value="GET YOUR IDENTITY CARD"  class="btn btn-block" id="btn"></a>
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
            
        </*?php
                }
            }
        ?*/>



        -->