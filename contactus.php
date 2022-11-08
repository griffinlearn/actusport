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
$q = 'sport';
$page = 2;

$url = 'http://newsapi.org/v2/everything?q=' . $q . '&apiKey=' . $apiKey . '&page=' . $page . '&language=' . $lang . '&pageSize=20';

$response = loadJson($url);
$json = json_decode($response, true);
?>

<body>
  <div class="container-scroller">
    <!-- partial:../partials/_navbar.html -->
    <?php include "components/navbar.php"; ?>
    <!-- partial -->
    <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
              <div class="card-body">
                <div class="aboutus-wrapper">
                  <h1 class="mt-5 text-center mb-5">
                    Contacter Mezoughi Mehdi
                  </h1>
                  <div class="row">
                    <div class="col-lg-12 mb-5 mb-sm-2">
                      <form>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <textarea class="form-control textarea" placeholder="Votre Message *" id="message"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Nom Complet *" />
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email *" />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <a href="#" class="btn btn-lg btn-dark font-weight-bold mt-3">ENVOYER</a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container-scroller ends -->
  <!-- partial:../partials/_footer.html -->
  <?php include "components/footer.php"; ?>
  <!-- Js Lib -->
  <?php include "components/script.php"; ?>
</body>

</html>