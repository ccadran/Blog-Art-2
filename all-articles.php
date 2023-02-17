<?php require_once 'header.php';
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
// 
$articles = sql_select('ARTICLE', '*');?>

<main>
    <h1>Tous nos articles</h1>
    <section class="articles-container">
        <?php 
        foreach ($articles as $article) { ?> 
        
        
        <div class="card-all-article">
            <div class="img-container">
                <img src="./views/assets/img/cover test.png" alt="">
            </div>
            <h3><?php echo $article['libTitrArt'] ?></h3>
            <p><?php echo $article['libChapoArt'] ?></p>
            <p id="all-date"><?php echo $article['dtCreArt'] ?></p>
            <a href="article.php?numArt=<?php echo $article['numArt']; ?>">
    <button class="discover">DÉCOUVRIR</button>
</a>
        </div>
        <?php } ?>
    </section>
</main>


<?php require_once 'footer.php'; ?>