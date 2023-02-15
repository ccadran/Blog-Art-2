<?php require_once '../../header.php';
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
// 
$articles = sql_select('ARTICLE', '*');?>

<main>
    <h1>Tous nos articles</h1>
    <section class="articles-container">
        <div class="card-all-article">
            <div class="img-container">
                <img src="../assets/img/cover test.png" alt="">
            </div>
            <h3>titre</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, aperiam.</p>
            <p id="all-date">Il y a ...</p>
            <button class="discover">DÉCOUVRIR</button>
        </div>
    </section>
</main>


<?php require_once '../../footer.php'; ?>