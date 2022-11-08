<!DOCTYPE html>
<html lang="fr">
<!-- Head include -->
<?php include "components/head.php"; ?>
<!-- php fetch data and curl function -->
<?php
include 'components/function_curl.php';
// Important : Ajouter pageSize=20 à l'URL
$apiKey = 'be3b33af6a4548e184f8dd989ad36305';
$lang = 'fr';
$q = 'tennis';
$page = 2;

$url = 'http://newsapi.org/v2/everything?q=' . $q . '&apiKey=' . $apiKey . '&page=' . $page . '&language=' . $lang . '&pageSize=20' . '&sortBy=publishedAt';

$response = loadJson($url);
$json = json_decode($response, true);
?>

<body>
    <!-- partial:partials/_navbar.html -->
    <?php include "components/navbar.php"; ?>
    <div class="content-wrapper">
        <div class="container">
            <div class="col-sm-12">
                <div class="card" data-aos="fade-up">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="font-weight-600 mb-4">
                                    TENNIS
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <?php for ($index = 6; $index <= 12; $index++) {
                                    $article = $json['articles'][$index] ?>
                                    <div class="row">
                                        <div class="col-sm-4 grid-margin">
                                            <div class="rotate-img imgArticleSize">
                                                <a href="<?php echo $article['url'] ?>"><img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid" /></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 grid-margin">
                                            <a href="<?php echo $article['url'] ?>" class="text-dark" target="blank">
                                                <h2 class="font-weight-600 mb-2">
                                                    <?php echo $article['title'] ?>
                                                </h2>
                                            </a>
                                            <p class="fs-13 text-muted mb-0">
                                                <?php
                                                $date = date_create($article['publishedAt']);
                                                echo date_format($date, 'Y-m-d');
                                                ?>
                                            </p>
                                            <p class="fs-15">
                                                <?php echo $article['description'] ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-lg-4">
                                <h2 class="mb-4 text-primary font-weight-600">
                                    Dernières Nouvelles
                                </h2>
                                <?php for ($index = 0; $index <= 2; $index++) {
                                    $article = $json['articles'][$index] ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="border-bottom pb-4 pt-4">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <a href="<?php echo $article['url'] ?>" class="text-dark" target="blank">
                                                            <h5 class="font-weight-600 mb-1">
                                                                <?php echo $article['title'] ?>
                                                            </h5>
                                                        </a>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <?php
                                                            $date = date_create($article['publishedAt']);
                                                            echo date_format($date, 'Y-m-d');
                                                            ?>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="rotate-img">
                                                            <a href="<?php echo $article['url'] ?>"><img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                <div class="trending">
                                    <h2 class="mb-4 text-primary font-weight-600">
                                        En ce moment
                                    </h2>
                                    <?php for ($index = 3; $index <= 5; $index++) {
                                        $article = $json['articles'][$index] ?>
                                        <div class="mb-4">
                                            <div class="rotate-img">
                                                <a href="<?php echo $article['url'] ?>"><img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid" /></a>
                                            </div>
                                            <a href="<?php echo $article['url'] ?>" class="text-dark" target="blank">
                                                <h3 class="mt-3 font-weight-600">
                                                    <?php echo $article['title'] ?>
                                                </h3>
                                            </a>
                                            <p class="fs-13 text-muted mb-0">
                                                <?php
                                                $date = date_create($article['publishedAt']);
                                                echo date_format($date, 'Y-m-d');
                                                ?>
                                            </p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_footer.html -->
    <?php include "components/footer.php"; ?>
    <!-- Js Lib -->
    <?php include "components/script.php"; ?>
</body>

</html>