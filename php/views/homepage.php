<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Libree</title>
    <link rel="stylesheet" href="css/styles.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<header class="header">
    <h1 role="heading" aria-level="1" class="header__title">Libree</h1>

    <?php include('partials/_main_navigation.php');?>

    <span class="header__main-span">Libree, pour que la lecture redevienne un partage.</span>
    <span class="header__second-span">Lisez des histoires d'auteurs inconnus et commentez-les !</span>
    <div class="header__contener__button-hasard">
        <a href="#" class="header__button-hasard">Une histoire au hasard</a>
    </div>
</header>
    <div class="contener-top">
        <section class="author-top">
            <h2 class="author-top__title">Auteur à la une</h2>
            <article class="index-article author-top-article">
                <img class="author-top-article__img" src="./img/png/profil.png" alt="Photo de Michael Jackson"
                     width="224" height="300">
                <div class="author-top-article__contener">
                    <h3 class="author-top-article__title">Michael Jackson</h3>
                    <p class="author-top-article__paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="author-top-article__link-contener">
                        <a href="#" class="author-top-article__link author-top-article__bio">Biographie</a>
                        <a href="#" class="author-top-article__link author-top-article__history">Lire ses
                            histoires</a>
                    </div>
                </div>
            </article>
        </section>
        <section class="history-top">
            <h2 class="history-top__title">Histoires à succès</h2>
            <article class="index-article history-top-article">
                <ul class="history__top-list">
                    <li class="history__top-item">
                        <h3 class="history__top-item__title">Le petit marin</h3>
                        <img class="history__top-item__img" src="./img/png/img_profil.png"
                             alt="Image de l'histoire « Le petit marin »" width="182" height="289">
                        <a href="#" class="history__top-item__link">Lire l'histoire</a>
                    </li>
                    <li class="history__top-item">
                        <h3 class="history__top-item__title">Le petit marin</h3>
                        <img class="history__top-item__img" src="./img/png/img_profil.png"
                             alt="Image de l'histoire « Le petit marin »" width="182" height="289">
                        <a href="#" class="history__top-item__link">Lire l'histoire</a>
                    </li>
                    <li class="history__top-item">
                        <h3 class="history__top-item__title">Le petit marin</h3>
                        <img class="history__top-item__img" src="./img/png/img_profil.png"
                             alt="Image de l'histoire « Le petit marin »" width="182" height="289">
                        <a href="#" class="history__top-item__link">Lire l'histoire</a>
                    </li>
                </ul>
            </article>
        </section>
        </div>
        <?php include('partials/_footer.php'); ?>
    </div>
    </body>
</html>
