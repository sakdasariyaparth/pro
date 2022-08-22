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
            <div class="container">
               <div class="row">
                    <div class="col-md-4 offset-md-5">
                        <div class="form-group">
                            <?php echo $row["s_name"] ?>
                        </div>
                    </div>
               </div>
            </div>
        <?php
                }
            }
        }
        ?>

<div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary">search</button>



            <!--
                <td><h2 align='center'><?php echo $row["s_cname"] ?></h2></td>
            </tr>        
            <tr>
                <td align="center"><img src=<?php echo "photo/" . $row["s_f1"] ?> width='55px' height="30px"></td>
            </tr>   
            <tr>
                <td><h4 align='center'><?php echo $row["s_name"] ?></h4></td>
            </tr>    
            <tr>
                <td><h4 align='center'><?php echo $row["s_enumber"] ?></h4></td>
            </tr>    
            <tr>
                <td><h4 align='center'><?php echo $row["s_dob"] ?></h4></td>
            </tr>    
            <tr>
                <td><h4 align='center'><?php echo $row["s_cnumber"] ?></h4></td>
            </tr>    
            <tr>
                <td><h4 align='center'><?php echo $row["s_optradio"] ?></h4></td>
            </tr> 
            <tr>
                <td><h4 align='center'><?php echo $row["s_add"] ?></h4></td>
            </tr> -->
            $qry="select * from idcard_gettbl";
$link=mysqli_connect("localhost","root","","parth_db");
$result=mysqli_query($link,$qry);

if(mysqli_affected_rows($link)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
?> 
<tbody>
<tr>
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
</tr>
</tbody>
<?php
        }
    }
?>   