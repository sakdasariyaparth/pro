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
    <?php include 'link.php'; ?>
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