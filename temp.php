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