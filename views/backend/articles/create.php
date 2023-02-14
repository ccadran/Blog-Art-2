<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">libTitrArt</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt">

                    <label for="libChapoArt">libChapoArt</label>
                    <input id="libChapoArt" class="form-control" type="text" name="libChapoArt">


                    <label for="libAccrochArt">libAccrochArt</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt">
                    
                    <label for="parag1Art">parag1Art</label>
                    <input id="parag1Art" class="form-control" type="text" name="parag1Art">
                    
                    <label for="libSsTitr1Art">libSsTitr1Art</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art">
                    
                    <label for="parag2Art">parag2Art</label>
                    <input id="parag2Art" class="form-control" type="text" name="parag2Art">
                    
                    <label for="libSsTitr2Art">libSsTitr2Art</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art">
                    
                    <label for="parag3Art">parag3Art</label>
                    <input id="parag3Art" class="form-control" type="text" name="parag3Art">
                    
                    <label for="libConclArt">libConclArt</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt">

                    <label for="urlPhotArt">urlPhotArt</label>
                    <input id="urlPhotArt" class="form-control" type="text" name="urlPhotArt">

                    <label for="numThem">numThem</label>
                    <input id="numThem" class="form-control" type="text" name="numThem">

                    

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>