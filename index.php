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
  <div class="container-scroller">
    <div class="main-panel">
      <!-- partial:partials/_navbar.html -->
      <?php include "components/navbar.php"; ?>
      <div class="content-wrapper">
        <div class="container">
          <div class="row" data-aos="fade-up">

            <!-- php 1 article-->
            <?php $article1 = $json['articles'][0] ?>
            <div class="col-xl-8 stretch-card grid-margin">
              <div class="position-relative">
                <a href="<?php echo $article1['url'] ?>"><img src="<?php echo $article1['urlToImage'] ?>" alt="banner" class="img-fluid" /></a>
                <div class="banner-content">
                  <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    <?php echo $article1['source']['name'] ?>
                  </div>
                  <a href="<?php echo $article1['url'] ?>" class="text-light" target="blank">
                    <h2 class="mb-0 bg-title p-3">
                      <?php echo $article1['title'] ?>
                    </h2>
                  </a>
                  <div class="fs-12 mb-5 bg-title p-3">
                    <?php
                    $date = date_create($article1['publishedAt']);
                    echo date_format($date, 'Y-m-d');
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- end article 1-->
            <div class="col-xl-4 stretch-card grid-margin">
              <div class="card text-white bg-card">
                <div class="card-body">
                  <h2>Dernières Nouvelles
                  </h2>

                  <!-- php start for 3 article -->
                  <?php for ($index = 1; $index < 4; $index++) {
                    $article = $json['articles'][$index]
                  ?>
                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                      <div class="pr-3">
                        <a href="<?php echo $article['url'] ?>" class="text-light" target="blank">
                          <h6>
                            <?php echo $article['title'] ?>
                          </h6>
                        </a>
                        <div class="fs-12">
                          <?php
                          $date = date_create($article['publishedAt']);
                          echo date_format($date, 'Y-m-d');
                          ?>
                        </div>
                      </div>
                      <div class="rotate-img">
                        <a href="<?php echo $article1['url'] ?>"><img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid img-lg" /></a>
                      </div>
                    </div>
                  <?php } ?>
                  <!-- end php for -->
                </div>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up">
            <div class="col-lg-3 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2>Nos Sports</h2>
                  <ul class="vertical-menu">
                    <li><a href="football.php">Football</a></li>
                    <li><a href="formule1.php">Formule 1</a></li>
                    <li><a href="motogp.php">Moto GP</a></li>
                    <li><a href="tennis.php">Tennis</a></li>
                    <li><a href="cyclisme.php">Cyclisme</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-9 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <!-- php start for 3 article -->
                  <?php for ($index = 4; $index < 7; $index++) {
                    $article = $json['articles'][$index]
                  ?>
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <a href="<?php echo $article1['url'] ?>"><img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid" /></a>
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"> <?php echo $article['source']['name'] ?></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <a href="<?php echo $article['url'] ?>" class="text-dark" target="blank">
                          <h2 class="mb-2 font-weight-600">
                            <?php echo $article['title'] ?>
                          </h2>
                        </a>
                        <div class="fs-13 mb-2">
                          <?php
                          $date = date_create($article['publishedAt']);
                          echo date_format($date, 'Y-m-d');
                          ?>
                        </div>
                        <p class="mb-0">
                          <?php echo $article['description'] ?>
                        </p>
                      </div>
                    </div>
                  <?php } ?>
                  <!-- end for 3 articles -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_footer.html -->
      <?php include "components/footer.php"; ?>
    </div>
  </div>
  <!-- Js Lib -->
  <?php include "components/script.php"; ?>
</body>

</html>