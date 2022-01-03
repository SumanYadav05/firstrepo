<?php
include('header.php');
?> 
<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8 py-4">
            <h2>Contact Us</h2>
            <hr>
            <form action="save.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea3" class="py-2">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"  name="message"></textarea>
                </div>
                <div class="sub">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
.sub{
 position:relative;
bottom:5px;
}
 </style>


