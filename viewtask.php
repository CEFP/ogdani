<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails sur une tâche</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/bootstrap.js"></script>
</head>

<body>
   <?php include("header.php") ; ?>

    <main class="container mt-5 pt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex">
                    <div>
                        <a class="btn btn-dark" title="Retour au précédent">
                            <i class="mdi mdi-arrow-left"></i>
                        </a>
                    </div>
                    <div class="flex-grow-1 ms-4">
                        <p>
                            #8585NJEINJUV
                            <br>
                            Depuis 2h heures
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-dark ms-2" title="Ajouter des collaborateurs" data-bs-toggle="modal"
                            data-bs-target="#asign">
                            <i class="mdi mdi-account-multiple-plus"></i>
                        </button>
                    </div>
                    <div>
                        <button class="btn btn-dark ms-2" title="Modifier cette tâche" data-bs-toggle="modal"
                            data-bs-target="#edittask">
                            <i class="mdi mdi-pencil"></i>
                        </button>
                    </div>
                    <div>
                        <button class="btn btn-dark ms-2" title="Supprimer cette tâche">
                            <i class="mdi mdi-delete"></i>
                        </button>
                    </div>
                </div>
                <div>
                    <p>
                        Date limite: 2022-05-05 13:00:00
                    </p>
                    <p>
                        Description:
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ad corrupti blanditiis
                        exercitationem praesentium velit commodi consequuntur quo quae, assumenda repellendus cumque
                        dolores ex, esse tempore? Quidem sequi unde nobis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptates dignissimos
                        accusantium assumenda, corrupti numquam commodi omnis deleniti! Iste temporibus exercitationem
                        distinctio necessitatibus soluta quisquam delectus non laboriosam sed ratione!
                    </p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a class="btn btn-dark">
                        Marquer en cours
                    </a>
                    <a class="btn btn-dark">
                        Marquer fait
                    </a>
                    <a class="btn btn-dark">
                        Marquer annulée
                    </a>
                    <a class="btn btn-dark">
                        Marquer reportée
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div>
                        Statut:
                    </div>
                    <div class="badge bg-dark bg-opacity-50 rounded-pill">
                        <h4>
                            EN ATTENTE
                        </h4>
                    </div>
                </div>
                <div class="mt-5">
                    <div>
                        Créée par:
                    </div>
                    <span class="badge bg-dark">
                        John Doe
                    </span>
                </div>
                <div class="mt-5">
                    <div>
                        Collaborateurs:
                    </div>
                    <span class="badge rounded-pill bg-dark">
                        John Doe <i class="mdi mdi-close-circle" title="Retirer de cette tâche"></i>
                    </span>
                    <span class="badge rounded-pill bg-dark">
                        John Doe <i class="mdi mdi-close-circle" title="Retirer de cette tâche"></i>
                    </span>
                    <span class="badge rounded-pill bg-dark">
                        John Doe <i class="mdi mdi-close-circle" title="Retirer de cette tâche"></i>
                    </span>
                    <span class="badge rounded-pill bg-dark">
                        John Doe <i class="mdi mdi-close-circle" title="Retirer de cette tâche"></i>
                    </span>
                </div>
            </div>
        </div>
    </main>
    
    <?php include("footer.php") ; ?>
</body>

</html>