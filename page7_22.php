<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Inscription
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <!-----------------------------Partie sup------------------------------->
        <div class="col-12 d-flex justify-content-end">

            <div class="col-7 row r-4 m-3 p-1 text-center">
                <div class="titre_inscription">FORMULAIRE D'INSCRIPTION</div>
                <div class="sous-titre_inscription ">(TPE / PME / ASSOCIATION / STRUCTURE publique ou privée)</div>
            </div>
        </div>
        <!-----------------------------Partie Milieu------------------------------->
        <!------------------------------------------------------------------->

        <Div class="col-12 p-1 d-flex justify-content-between">
            <!--------------------------partie gauche-1------------------------------>
            <div class="col-4 d-flex flex-wrap">
                <div class="col-12 d-flex flex-wrap align-items-center">
                    <img class="col-3 p-2" src="image/logo blanc.png" alt="">
                    <div class="col-8 d-flex justify-content-start text-white pe-3" style="font-size:3rem">Dis-Don</div>
                </div>
                <div class="col-10 sous-titre">le dispositif Dis-Don est un portail réservé<br>aux organisments et tous utilisateurs<br>domiciliés en France</div>
            </div>

            <!--------------------------partie droite-1------------------------------>
            <div class="col-8 d-flex flex-wrap justify-content-end text-white">
                <div class="col-12 fs-6 text-end m-1">*renseignement obligatoire
                </div>

                <div class="col-6 p-1">
                    <h5 class="m-0 text-end pe-4">Nom de votre organisme *</h5>
                    <div class="sous-titre-2 px-4 ps-5">
                        (Ecrivez ici le nom déclaré en prefecture de votre association, fondation ou fonds de dotation tel qu'il est déclaré en préfecture, et non un diminutif ou un nom d'usage.)
                    </div>
                </div>
                <div class=" col-6 form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 60px"></textarea>
                    <label class="text-dark opacity-25" for="floatingTextarea2">100 caractères</label>
                </div>
                <div class="col-6 text-white d-flex align-items-center justify-content-end px-4"> Numéro de SIRET</div>
                <div class="col-6">
                    <form>
                        <div class="form-floating">
                            <!-- <label for="exampleFormControlInput1">Numéro de SIRET</label> -->
                            <input type="text" class="form-control text-center" id="siretNumber" placeholder="14 chiffres" pattern="[0-9]{14}" required>
                    <label class="text-dark opacity-25" for="siretNumber">14 caractères</label>

                        </div>
                        <!-- Vous pouvez ajouter d'autres champs de formulaire ici -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>