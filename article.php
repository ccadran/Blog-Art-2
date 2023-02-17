<?php 
require_once 'header.php';
sql_connect();

if (isset($_GET['numArt'])) {
    $numArt = $_GET['numArt'];
    $article = sql_select('ARTICLE', '*', "numArt=$numArt")[0];
?>

<main>
<a href="./all-articles.php">

    <button class="other-article">Autres Articles</button>
</a>
    <h1><?php echo $article['libTitrArt'] ?></h1>
    <section class="article-container">
        <div class="img-container">
            <img src="<?php echo $article['urlPhotArt'] ?>" alt="">
        </div>

        <p><?php echo $article['libChapoArt'] ?></p>
        <p id=" accroche"><?php echo $article['libAccrochArt'] ?></p>
        <p><?php echo $article['parag1Art'] ?></p>
        <p class="subtitle"><?php echo $article['libSsTitr1Art'] ?></p>
        <p ><?php echo $article['parag2Art'] ?></p>
        <p class="subtitle"><?php echo $article['libSsTitr2Art'] ?></p>
        <p ><?php echo $article['parag3Art'] ?></p>
        <p ><?php echo $article['libConclArt'] ?></p>
    </section>
</main>

<?php } 
require_once 'footer.php'; ?>