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
                <div class="text-info">(TPE / PME / ASSOCIATION / STRUCTURE publique ou privée)</div>
            </div>
        </div>
        <!-----------------------------Partie Milieu------------------------------->
        <!------------------------------------------------------------------------->

        <Div class="col-12 p-1 d-flex">
            <!--------------------------partie gauche-1------------------------------>
            <!----------------------------------------------------------------------->
            <div class="col-4 d-flex flex-wrap">
                <div class="col-12 d-flex flex-wrap align-items-center">
                    <img class="col-3 p-2" src="image/logo blanc.png" alt="">
                    <div class="col-8 d-flex justify-content-start text-white pe-3" style="font-size:3rem">Dis-Don</div>
                </div>
                <div class="col-10 sous-titre">le dispositif Dis-Don est un portail réservé<br>aux organisments et tous utilisateurs<br>domiciliés en France
                </div>
                <div class="col-4 text-white pt-2 text-center"> Votre adresse<br>postale *
                </div>
                <div class=" col-8 form-floating d-flex flex-wrap pt-1 px-1">
                    <div class="col-12">
                        <textarea class="form-control" placeholder="Leave a comment here" id="adresse-postale" style="height: 60px">
                    </textarea>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control text-center" style="height: 30px" id="CP" placeholder="CP" pattern="[0-9]{5}" required>
                    </div>
                    <div class="col-8 ps-1">
                        <input type="text" class="form-control text-center" style="height: 30px" id="" placeholder="Ville">
                    </div>
                </div>
                <div class="col-4 text-white d-flex align-items-center justify-content-end px-2 pb-4"> téléphone *
                </div>
                <div class="col-8 d-flex flex-wrap justify-content-between px-1">
                    <div class="col-3">
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder="+33" pattern="[0-9]{3}" required>
                    </div>
                    <div class="col-9 ps-1">
                        <input type="text" class="form-control" id="" aria-describedby="" pattern="[0-9]{10}" required>
                    </div>
                </div>
            </div>


            <!--------------------------partie droite-1------------------------------>
            <!----------------------------------------------------------------------->
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
                    <label class="text-dark opacity-25 text-center" for="floatingTextarea2">100 caractères</label>
                </div>
                <div class="col-6 text-white d-flex align-items-center justify-content-end px-4"> Numéro de SIRET
                </div>
                <div class="col-6">
                    <div class="form-floating^">
                        <input type="text" class="form-control text-center" id="siretNumber" placeholder="14 chiffres" pattern="[0-9]{14}" required>
                    </div>
                </div>
                <div class="col-6 text-white d-flex justify-content-end px-4 pt-3"> Votre champs d'activité *
                </div>
                <div class=" col-6 form-floating py-2">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 60px"></textarea>
                    <label class="text-dark opacity-25" for="floatingTextarea2">100 caractères</label>
                </div>
                <div class="col-6 text-white d-flex align-items-center justify-content-end px-4"> Votre email *
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-6 d-flex flex-wrap">
                    <div class="col-12 text-white d-flex align-items-center justify-content-end px-4"> Mot de passe *
                    </div>
                    <div class="col-12 sous-titre-2 px-4 ps-5 text-end">

                        (8 car. min dont 1 majuscule, 1 chiffre et 1 miniscule )
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------PARTIE Inférieur---------------------------->
        <!--------------------------------------------------------------------->
        <div class="col-12 d-flex justify-content-center">
        <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label text-white" for="flexCheckDefault">
  En cochant cette case, mon organisme accepte les Conditions Générales d'Utilisation.
  </label>
</div>
</div>
        </div>
    </div>
    </div>