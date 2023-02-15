<?php require_once 'header.php';
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
// 
$articles = sql_select('ARTICLE', '*');?>

<main>
    <div class="last-article">
        <h1>
            Dernier Article
        </h1>
        <div class="last-article-cover">
            <h3>titre</h3>
            <p>date</p>
        </div>
    </div>
    <div class="more-articles">
        <h2>Plus d'articles</h2>
        <div class="grid-articles">
            <?php 
            $i=0;
           
            while($i<4){
                 $article= $articles[$i];
                ?>
                <div class="card-article">
                <div class="card-article-left">

                    <h3><?php echo $article['libTitrArt'] ?></h3>
                    <p><?php echo $article['libChapoArt'] ?></p>
                    <p id="date"><?php echo $article['dtCreArt'] ?></p>
                    <a href=""><h4>LIRE PLUS</h4></a>
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
            <!-- <div class="card-article">
                <div class="card-article-left">

                    <h3>tire</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias hic necessitatibus delectus sunt dignissimos ad.</p>
                    <p id="date">date</p>
                    <a href=""><h4>LIRE PLUS</h4></a>
                </div>
                <div class="card-article-right">
                    <div class="img-container">
                        <img src="./views/assets/img/cover test.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card-article">
                <div class="card-article-left">

                    <h3>tire</h3>
                    <p>chapo</p>
                    <p id="date">date</p>
                    <a href=""><h4>LIRE PLUS</h4></a>
                </div>
                <div class="card-article-right">
                    <div class="img-container">
                        <img src="./views/assets/img/cover test.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card-article">
                <div class="card-article-left">

                    <h3>tire</h3>
                    <p>chapo</p>
                    <p id="date">date</p>
                    <a href=""><h4>LIRE PLUS</h4></a>
                </div>
                <div class="card-article-right">
                    <div class="img-container">
                        <img src="./views/assets/img/cover test.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card-article">
                <div class="card-article-left">

                    <h3>tire</h3>
                    <p>chapo</p>
                    <p id="date">date</p>
                    <a href=""><h4>LIRE PLUS</h4></a>
                </div>
                <div class="card-article-right">
                    <div class="img-container">
                        <img src="./views/assets/img/cover test.png" alt="">
                    </div>
                </div>
            </div> -->
        </div>
        <button id="voir-plus">Voir plus</button>
    </div>
</main>


<?php require_once 'footer.php'; ?>