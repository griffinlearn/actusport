<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <a class="navbar-brand text-light font-weight-bolder" href="index.php">ACTU SPORTS</a>
                    <h5 class="font-weight-normal mt-4 mb-5">
                        Suivez l'actualité de vos sports favoris (football, rugby, tennis, basket, cyclisme...) et les résultats et classements en direct avec Actu Sports.
                    </h5>
                    <ul class="social-media mb-3">
                        <li>
                            <a href="#">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="font-weight-bold mb-3">ARTICLE RÉCENT</h3>
                    <!-- Start for loop -->
                    <?php for ($index = 0; $index < 2; $index++) {
                        $article = $json['articles'][$index]
                    ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="footer-border-bottom pb-2">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="<?php echo $article['urlToImage'] ?>" alt="thumb" class="img-fluid" />
                                        </div>
                                        <div class="col-9">
                                            <h5 class="font-weight-600">
                                                <a href="<?php echo $article['url'] ?>" class="text-light" target="blank"> <?php echo $article['title'] ?></a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end for lop -->
                </div>
                <div class="col-sm-3">
                    <h3 class="font-weight-bold mb-3">CATÉGORIES</h3>
                    <div class="footer-border-bottom pb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="football.php" class="text-light">
                                <h5 class="mb-0 font-weight-600">Football</h5>
                            </a>
                        </div>
                    </div>
                    <div class="footer-border-bottom pb-2 pt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="formule1.php" class="text-light">
                                <h5 class="mb-0 font-weight-600">Formule 1</h5>
                            </a>
                        </div>
                    </div>
                    <div class="footer-border-bottom pb-2 pt-2">
                        <a href="motogp.php" class="text-light">
                            <h5 class="mb-0 font-weight-600">Moto GP</h5>
                        </a>
                    </div>
                    <div class="footer-border-bottom pb-2 pt-2">
                        <a href="tennis.php" class="text-light">
                            <h5 class="mb-0 font-weight-600">Tennis</h5>
                        </a>
                    </div>
                    <div class="pt-2">
                        <a href="cyclisme.php" class="text-light">
                            <h5 class="mb-0 font-weight-600">Cyclisme</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <div class="fs-14 font-weight-600">
                            © 2022 @ Actu Sport All rights reserved.
                        </div>
                        <div class="fs-14 font-weight-600">
                            Mezoughi Mehdi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>