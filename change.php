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
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
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
    <style>
        #hed{
            align-items: center;
            text-align: center;
            font-size: 450%;
            background-color: green;
            color: white;
            margin-top: 25px;
        }
        .table{
            font-size: 14px;
        }
        .btn{
                background-color: green;
        }
    </style>    
    <title>CHANGES</title>
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
    <br>
    <div class="container">
        <div class="d-flex align-items-center">
        <a href="showdata.php"><button type="button" class="btn btn-success px-3 me-2 btn-lg">
          CHECK CHANGES
        </button></a>
        <a href="logout2.php"><button type="button" class="btn btn-success px-3 me-3 btn-lg">
          LOG OUT
        </button></a>
        </div>
        </div>
    <br><br>
    <?php
        if(isset($_REQUEST["b2"]))
        {
            $eno=$_REQUEST["ennumber"];
            $name=$_REQUEST["name"];
            $cname=$_REQUEST["cname"];
            $fyear=$_REQUEST["fyear"];
            $tsem=$_REQUEST["tsem"];
            $dob=$_REQUEST["dob"];
            $cnumber=$_REQUEST["cnumber"];
            $gender=$_REQUEST["gender"];
            $add=$_REQUEST["add"];
            if(isset($_FILES["photo"]) && $_FILES["photo"]["size"]>0)
            {
                $photo=time().$_FILES["photo"]["name"];
                move_uploaded_file($_FILES["photo"]["tmp_name"],"photo/".$photo);
                $qry="update idcard_gettbl set s_name='$name',s_cname='$cname',s_fyear='$fyear',s_tsem='$tsem',s_dob='$dob',s_cnumber='$cnumber',s_optradio='$gender',s_add='$add',s_f1='$photo' where s_enumber=$eno";
                $link=mysqli_connect("localhost","root","","parth_db");
                mysqli_query($link,$qry);
                mysqli_close($link);
            }
            else
            {
                $qry="update idcard_gettbl set s_name='$name',s_cname='$cname',s_fyear='$fyear',s_tsem='$tsem',s_dob='$dob',s_cnumber='$cnumber',s_optradio='$gender',s_add='$add' where s_enumber=$eno";
                $link=mysqli_connect("localhost","root","","parth_db");
                mysqli_query($link,$qry);
                mysqli_close($link);
            }
            
        }
    ?>
<form method="POST" enctype="multipart/form-data">
<div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover">
                        <thead>
                                <tr align="center">
                                        <th>Enroll Number.</th>
                                        <th>Name</th>
                                        <th>Course Name</th>
                                        <th>First Year</th>
                                        <th>Total Sem</th>
                                        <th>Date Of Birth</th>
                                        <th>Phone Number</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Photo</th>
                                        <th>SAVE</th>
                                </tr>
                        </thead>
                        <tbody>
<?php
    if(isset($_REQUEST["ennumber"]))
        {
            $enumber=$_REQUEST['ennumber'];
            $link=mysqli_connect("localhost","root","","parth_db");
            $enumber=mysqli_real_escape_string($link,$enumber);
            $qry="select * from idcard_gettbl where s_enumber=$enumber";
            $result=mysqli_query($link,$qry);
            if(mysqli_affected_rows($link)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
        ?>       
        
    <tr align="center">
            <td><input type="text" value="<?php echo $row["s_enumber"] ?>" readonly name="ennumber"></td>
            <td><input type="text" value="<?php echo $row["s_name"] ?>" name="name"></td>
            <td><input type="text" value="<?php echo $row["s_cname"] ?>" name="cname"></td>
            <td><input type="text" value="<?php echo $row["s_fyear"] ?>" name="fyear"></td>
            <td><input type="text" value="<?php echo $row["s_tsem"] ?>" name="tsem"></td>
            <td><input type="text" value="<?php echo $row["s_dob"] ?>" name="dob"></td>
            <td><input type="text" value="<?php echo $row["s_cnumber"] ?>" name="cnumber"></td>
            <td><input type="text" value="<?php echo $row["s_optradio"] ?>" name="gender"></td>
            <td><input type="text" value="<?php echo $row["s_add"] ?>" name="add"></td>
            <td><img src=<?php echo "photo/" . $row["s_f1"] ?> width="50px">
            <br>
            <input type="file" name="photo" class="btn btn-success"></td>
            <td><input type="submit" value="SUBMIT" name="b2" class="btn btn-success btn-lg "></td>
    </tr>
<?php
            }
        }
    }
?>
                        </tbody>       
                </table>
             </div>
        </div>
<br><br>
</body>
</html>