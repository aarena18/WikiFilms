<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WikiFilms</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <!------------ HEADER ------------>
    <header>
        <h1 id="logoNav">WikiFilms</h1>
        <nav>
            <ul>
                <li>Films</li>
                <li>Séries</li>
                <li>Genres</li>
                <li><a href="profil.php">Mon profil</a></li>
            </ul>
        </nav>
    </header>

    <!------------ BANNER ------------>

    <section id="banner">
        <div class="contentBanner">
            <h1>Hello vous!</h1>
            <h2>Une envie de films ou de séries? Nous avons ce qu'il vous faut! </h2>
            <div class="searchBar">
                <form action="#" method="post">
                    <label>
                        <input type="text" name="query" placeholder="Rechercher un film, une série, un genre ...">
                    </label>
                    <input type="submit" value="search">
                </form>
            </div>
        </div>
    </section>

    <!------------ MAIN ------------>

    <main>
    
        <!------------ SECTION WIKI (texte) ------------>

        <section id="wiki">
            <div class="contentWiki">
                <div class="textWiki">
                    <h3>Blabla</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est rem rerum ex reiciendis minima consequuntur! Tempora saepe ab consectetur voluptatibus nulla mollitia atque deserunt culpa iusto corporis, porro eaque vel minus nesciunt deleniti accusantium neque! Cum exercitationem provident doloremque commodi? Unde blanditiis saepe natus officiis laboriosam cupiditate non recusandae quia?</p>
                </div>
            </div>
        </section>

        <!------------ SECTION CARD (carroussel films/séries) ------------>

        <section id="card">
            <div class="cardWrapper">
                <div class="cardElement">
                    <div class="cardImage"><img src="https://picsum.photos/id/684/600/400?blur=5" alt=""></div>
                    <div class="cardContent">
                        <h3>blabla - Card - </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque deserunt debitis, unde rerum excepturi hic et ratione earum corporis officiis officia a, necessitatibus, aperiam id?</p>
                    </div>
                </div>
                <div class="cardElement">
                    <div class="cardImage"><img src="https://picsum.photos/id/684/600/400?blur=5" alt=""></div>
                    <div class="cardContent">
                        <h3>blabla - Card - </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque deserunt debitis, unde rerum excepturi hic et ratione earum corporis officiis officia a, necessitatibus, aperiam id?</p>
                    </div>
                </div>
                <div class="cardElement">
                    <div class="cardImage"><img src="https://picsum.photos/id/684/600/400?blur=5" alt=""></div>
                    <div class="cardContent">
                        <h3>blabla - Card - </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque deserunt debitis, unde rerum excepturi hic et ratione earum corporis officiis officia a, necessitatibus, aperiam id?</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!------------ FOOTER ------------>

    <footer>
        <h4 id="logoFooter">WikiFilms</h4>
        <ul>
            <li>infos</li>
            <li>mentions légales</li>
            <li><a href="#">github</a></li>
            <li><a href="#">Linkedin</a></li>
        </ul>
    </footer>
    
    <!---------------------- END ---------------------->

</body>
</html>