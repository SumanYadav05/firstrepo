<?
?>  
<div class="container-fluid py-4">
<h2 class="text-center">About Us</h2>
<hr>
    <div class="row">
        <?php
            $sql= "SELECT * FROM `about` Order By a_id DESC";
            $rs= mysqli_query($conn,$sql);
            $num = mysqli_num_rows($rs);
            
            // if($num>0){
                $data = mysqli_fetch_assoc($rs);
                // echo $data['about'];
            // }
        ?>
        <div class="col-md-3 s1">
            <img src="<?=$data['file']?>" width="290px" height="280px">
        </div>
        <div class="col-md-9 s2">
            <p>
              <!--   <?=$data['about']?> -->
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 s2">
            <div class="main py-3">
                <button type="submit" class="btn btn-info">
                    <a href="update.php" style="color:white;">Edit</a>
                </button>
            </div>
        </div>  
    </div>  
    <div class="container py-5">
        <h2>Other</h2>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <img src="image/img1.jpg" width="266px" height="250px"></img>
            </div>
            <div class="col-sm-4">
                <img src="image/img2.jpg" width="266px" height="250px"></img>
            </div>
            <div class="col-sm-4">   
                <img src="image/img3.jpg" width="266px" height="250px"></img>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>
