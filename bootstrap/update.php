<?php
include('header.php');

?> 
<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <form action="edit.php" method="Post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlTextarea3" class="py-2">About Us</label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" name="about" rows="7"><?php
                            $sql= "SELECT * FROM `about` Order By a_id DESC";
                            $rs= mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($rs);
                            if($num>0){
                                $data = mysqli_fetch_assoc($rs);
                                echo $data['about'];
                            }
                        ?></textarea>
                </div>
                <div class="form-group">
                    <label for="file">upload Image:</label>
                    <input type="file" name="file" class="form-control" id="fileToUpload">
                </div>
                <div class="sub">
                    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>
<?php
include('footer.php');
?>
<style>
.up{
text-align:justify;
padding-top:0px;
}

</style>