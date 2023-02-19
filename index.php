<?php require_once 'header.php';
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
// 


session_start();
// if (session_status() === PHP_SESSION_ACTIVE) {
//     echo 'La session est lancée.';
// } else {
//     echo 'La session n\'est pas lancée.';
// }

check_access(1);

$articles = sql_select('ARTICLE', '*');?>

<main>
    <div class="last-article">
        <h1>
            Derniers Articles
        </h1>
        <!-- <?php 
            $i=1;
            
            $article1= $articles[0];
                ?>
        <div class="last-article-cover" style="background: url(/views/assets/img/cover\ test.png) cover/no-repeat;">
            <h3><?php echo $article1['libTitrArt'] ?></h3>
            <p><?php echo $article1['dtCreArt'] ?></p>
            <a href="article.php?numArt=<?php echo $article1['numArt']; ?>">
   <h4>LIRE PLUS</h4>
</a>
        </div>
    </div> -->
    <div class="more-articles">
        <h2>Plus d'articles</h2>
        <div class="grid-articles">
            <?php 
            $i=0;
            while($i<2){
            $article= $articles[$i];
                ?>
                <div class="card-article">
                <div class="card-article-left">

                    <h3><?php echo $article['libTitrArt'] ?></h3>
                    <p><?php echo $article['libChapoArt'] ?></p>
                    <p id="date"><?php echo $article['dtCreArt'] ?></p>
                    <a href="article.php?numArt=<?php echo $article['numArt']; ?>">
   <h4>LIRE PLUS</h4>
</a>
                </div>
                <div class="card-article-right">
                    <div class="img-container">
                        <img src="./views/assets/img/cover test.png" alt="">
                    </div>
                </div>
            </div>
<?php
$i++;
            }
            
            
            ?>

        </div>
        <a href="./all-articles.php">

            <button id="voir-plus">Voir plus</button>
        </a>
    </div>
</main>


<?php require_once 'footer.php'; ?>