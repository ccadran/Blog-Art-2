


<?php
include './../../header.php';
//Security check
//Level 1 mean administator in DB
// if (!check_access(1)) {
//     header('Location: /index.php'); //Redirect to home
//     exit();
// } 
?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/users/login.php' ?>" method="post">
                <div class="form-group">
                    <label for="pseudoMemb">pseudoMemb</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">

                    <label for="passMemb">passMemb</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb">


                    
                    
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>