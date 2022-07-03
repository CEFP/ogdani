<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taf-Taf</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/bootstrap.js"></script>
</head>
<body>
    
<?php include("header.php") ; ?>

      <main>
        <div class="container-fluid">
          <div class="row vh-100 align-items-center">
            <div class="col-md-3">
              
            </div>
            <div class="col-md-6 text-center">
              <h1>
                Bonjour John Doe
              </h1>
              <p>
                Récapitulatif de la semaine en cours
              </p>
              <div class="row mb-5">
                <div class="col-md-3">
                  <h3 class="mb-3 display-4">
                    12
                  </h3>
                  <span class="text-muted">
                    Tâches en attente
                  </span>
                </div>
                <div class="col-md-3">
                  <h3 class="mb-3 display-4">
                    12
                  </h3>
                  <span class="text-muted">
                    Tâches en cours
                  </span>
                </div>
                <div class="col-md-3">
                  <h3 class="mb-3 display-4">
                    12
                  </h3>
                  <span class="text-muted">
                    Tâches terminées
                  </span>
                </div>
                <div class="col-md-3">
                  <h3 class="mb-3 display-4">
                    12
                  </h3>
                  <span class="text-muted">
                    Tâches annulées
                  </span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-dark btn-lg m-2">
                  Toutes les tâches
                </button>
                <button class="btn btn-dark btn-lg m-2">
                  Mes tâches
                </button>
              </div>
            </div>
            <div class="col-md-3">
              
            </div>
          </div>
        </div>
      </main>
      <div class="modal fade" id="newtask" tabindex="-1" aria-labelledby="newtaskLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="newtaskLabel">
                Nouvelle tâche à faire
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
              <div class="modal-body">
                  <div class="mb-3">
                    <textarea class="form-control mb-3" placeholder="Description" rows="5"></textarea>
                </div>
                <div>
                    <div class="col-12">
                    <input type="datetime-local" class="form-control">
                    </div>
                </div>
              </div>
              <div id="submiter" class="modal-footer border-0 justify-content-center">
                <button type="submit" class="btn btn-dark">
                  Enregistrer
                </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Annuler
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
</main>

<?php include("footer.php") ; ?>

</body>
</html>