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
        #per{
            margin-left: 10px;
            margin-top: 20px;
        }
        #serach{
            margin-top: 14px;
            font-size: 20px;
            border: 1px solid green;
            border-radius: 7px;
        }
        .per{
            color: green;
            float: right;
            margin-top: 20px;
            margin-right: 40px;
        }
       /* #search{
            font-size: large;
            margin-top: 20px;
            margin-left: 500px;
        }
        @media screen and (min-width: 245px){
            #search{
                float: none;
                display: block;
                text-align: center;
                width: 100%;
                margin: 15px;
                padding: 20px;
            }
        }
        @media screen and (max-width: 522px){
            #search{
                float: none;
                display: block;
                text-align: center;
                width: 100%;
                margin: 15px;
                padding: 20px;
            }
        }
        @media screen and (min-width: 245px){
            .fa fa-search{
                float: none;
                display: block;
                text-align: center;
                width: 100%;
                margin: 15px;
                padding: 20px;
            }
        }
        @media screen and (max-width: 522px){
            .fa fa-search{
                float: none;
                display: block;
                text-align: center;
                width: 100%;
                margin: 15px;
                padding: 20px;
            }
        }*/
         .input-group{
            margin-top: 20px; 
        }
        .table{
            font-size: 14px;
        }
        .form-control
        {
            font-size: 12px;
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
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <form method="POST">
                    <div class="form-group">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search Enroll No." aria-label="Search" aria-describedby="search-addon" name="search" />
                        <input type="submit" name="b1" class="btn btn-outline-success btn-lg" value="Search">&nbsp;&nbsp;
                        <a href="logout2.php"><button type="button" class="btn btn-success me-3 btn-lg">
                        LOG OUT
                        </button></a>
                    </div>      
                        <!--<a href="logout2.php"><input type="submit" value="LOG OUT" id="b2" name="b2" class="btn btn-outline-success btn-lg per"></a>-->
                    </div>
                </form>
            </div>
        </div>
    </div><br>
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
      </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_REQUEST["b1"]))
        {
            $enumber=$_REQUEST['search'];
            $qry="select * from idcard_gettbl where s_enumber='$enumber'";
            $link=mysqli_connect("localhost","root","","parth_db");
            $result=mysqli_query($link,$qry);

            if(mysqli_affected_rows($link)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
        ?>       
        
    <tr align="center">
            <th scope="row"><a href='change.php?ennumber=<?php echo $row["s_enumber"] ?>'><?php echo $row["s_enumber"] ?></a></th>
            <td><?php echo $row["s_name"] ?></td>
            <td><?php echo $row["s_cname"] ?></td>
            <td><?php echo $row["s_fyear"] ?></td>
            <td><?php echo $row["s_tsem"] ?></td>
            <td><?php echo $row["s_dob"] ?></td>
            <td><?php echo $row["s_cnumber"] ?></td>
            <td><?php echo $row["s_optradio"] ?></td>
            <td><?php echo $row["s_add"] ?></td>
            <td><img src=<?php echo "photo/" . $row["s_f1"] ?> width="50px"></td>
    </tr>
        
<?php
            }
        }
    }
    else{    
?>
<?php
         $qry="select * from idcard_gettbl";
         $link=mysqli_connect("localhost","root","","parth_db");
         $result=mysqli_query($link,$qry);
         
         if(mysqli_affected_rows($link)>0)
         {
             while($row=mysqli_fetch_assoc($result))
             {
         ?> 
         
         <tr align="center">
             <th scope="row"><a href='change.php?ennumber=<?php echo $row["s_enumber"] ?>'><?php echo $row["s_enumber"] ?></a></th>
             <td><?php echo $row["s_name"] ?></td>
             <td><?php echo $row["s_cname"] ?></td>
             <td><?php echo $row["s_fyear"] ?></td>
             <td><?php echo $row["s_tsem"] ?></td>
             <td><?php echo $row["s_dob"] ?></td>
             <td><?php echo $row["s_cnumber"] ?></td>
             <td><?php echo $row["s_optradio"] ?></td>
             <td><?php echo $row["s_add"] ?></td>
             <td><img src=<?php echo "photo/" . $row["s_f1"] ?> width="45px"></td>
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
    </div>
    <br><br>
    <div class="container">
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                <a href="identity.php"><button class="btn btn-success me-md-2 btn-lg" type="button">FILL THE FORM ?</button></a>
        </div>
    </div>
</body>
</html>