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
        #btn{
            background-color: green;
            color: white;
        }
        #per{
            margin-left: 10px;
            margin-top: 20px;
        }
        #serach{
            margin-top: 20px;
            font-size: 20px;
            border: 1px solid green;
            border-radius: 20px;
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
        .table{
            font-size: 14px;
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
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="  Search Enroll Number.." name="search" id="serach">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-outline-success" name="b1">SEARCH</button>
                    </div>
                </form>
                    <a href="logout2.php"><input type="submit" value="LOG OUT" id="b2" name="b2" class="btn btn-outline-success btn-lg " id="per"></a>
            </div>
        </div>
    </div><br>
    <div class="container">
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
        <th>Any Changes</th>
      </tr>
    </thead>
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
        <tbody>
    <tr align="center">
            <th scope="row"><?php echo $row["s_enumber"] ?></th>
            <td><?php echo $row["s_name"] ?></td>
            <td><?php echo $row["s_cname"] ?></td>
            <td><?php echo $row["s_fyear"] ?></td>
            <td><?php echo $row["s_tsem"] ?></td>
            <td><?php echo $row["s_dob"] ?></td>
            <td><?php echo $row["s_cnumber"] ?></td>
            <td><?php echo $row["s_optradio"] ?></td>
            <td><?php echo $row["s_add"] ?></td>
            <td><img src=<?php echo "photo/" . $row["s_f1"] ?> width="45px"></td>
            <td><a href="logout2.php"><input type="submit" value="LOG OUT" id="b2" name="b2" class="btn btn-outline-success btn-lg " id="per"></a></td>
    </tr>
        </tbody>
<?php
            }
        }
    }
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
         <tbody>
         <tr align="center">
             <th scope="row"><?php echo $row["s_enumber"] ?></th>
             <td><?php echo $row["s_name"] ?></td>
             <td><?php echo $row["s_cname"] ?></td>
             <td><?php echo $row["s_fyear"] ?></td>
             <td><?php echo $row["s_tsem"] ?></td>
             <td><?php echo $row["s_dob"] ?></td>
             <td><?php echo $row["s_cnumber"] ?></td>
             <td><?php echo $row["s_optradio"] ?></td>
             <td><?php echo $row["s_add"] ?></td>
             <td><img src=<?php echo "photo/" . $row["s_f1"] ?> width="45px"></td>
             <td><a href="#"><input type="submit" value="REQUEST CHANGES." id="b2" name="b2" class="btn btn-outline-success btn-lg " id="per"></a></td>
         </tr>
         </tbody>
         <?php
                 }
            }
         ?>       
        </table>
    </div>
</body>
</html>