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
    <div class="container-fluid" style="max-height: 560px">
        <!-----------------------------Partie sup------------------------------->
        <div class="col-12 d-flex justify-content-end">

            <div class="col-7 row r-4 my-3 mx-3 p-1 text-center">
                <div class="titre_inscription text-white fs-3 fw-bold">FORMULAIRE D'INSCRIPTION</div>
                <div class="text-info">(particulier/ bénévole)</div>
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
                    <div class="col-8 d-flex justify-content-start text-white pe-3" style="font-size:3.5rem">Dis-Don</div>
                </div>
                <div class="col-10 sous-titre-2 text-end" style="font-style: italic;">le dispositif Dis-Don est un portail réservé<br>aux organisments et tous utilisateurs<br>domiciliés en France
                </div>
                <!------------------------------------------------------------------>
                <!------------------------------------------------------------------>
                <div class="col-12 mt-5 d-flex align-items-center">
                    <div class="col-5 d-flex flex-wrap justify-content-end text-white">
                        <h5 class="m-0 text-end pe-2 fs-6">
                            Pseudo
                        </h5>
                    </div>
                    <div class="col-7 pb-1">
                        <input type="text" class="form-control p-1" id="pseudo2" aria-describedby="pseudoHelp">
                    </div>
                </div>

                <div class="col-12 d-flex align-items-center">
                    <div class="col-5 d-flex flex-wrap justify-content-end text-white">
                        <h5 class="m-0 text-end pe-2 fs-6">
                            Votre email *
                        </h5>
                    </div>
                    <div class="col-9 pb-1">
                        <input type="text" class="form-control p-1" id="email2" aria-describedby="emailoHelp">
                    </div>
                </div>
                <div class="col-12 d-flex align-items-center">
                    <div class="col-5 d-flex flex-wrap justify-content-end text-white">
                        <h5 class="m-0 text-end pe-2 fs-6">Mot de passe *</h5>
                    </div>
                    <div class="col-9 pb-1">
                        <input type="text" class="col-12 form-control p-1" id="motdepasse2" aria-describedby="motdepasseHelp">
                        <label class="sous-titre-2 col-12" for="motdepasse2">(8 car. min dont 1 majuscule, 1 chiffre et 1 minuscule)</label>
                    </div>
                </div>
            </div>


            <!--------------------------partie droite-1------------------------------>
            <!----------------------------------------------------------------------->
            <div class="col-8 d-flex flex-wrap justify-content-end text-white">
                <div class="col-12 fs-6 text-end m-1">*renseignement obligatoire
                </div>
                <!------------------------------------------------------------------------->
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <h5 class="m-0 text-end pe-4">
                        Votre nom de famille *
                    </h5>
                </div>
                <div class="col-6 pb-1">
                    <input type="text" class="form-control p-1" id="nom" aria-describedby="nomHelp">
                </div>
                <!------------------------------------------------------------------------->
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <h5 class="m-0 text-end pe-4">
                        Votre prénom *
                    </h5>
                </div>
                <div class="col-6 pb-1">
                    <input type="text" class="form-control p-1" id="prenom" aria-describedby="prenomHelp">
                </div>
                <!------------------------------------------------------------------------->
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <h5 class="m-0 text-end pe-4">
                        Vous êtes *
                    </h5>
                </div>
                <div class="col-6 pb-1">
                    <select class="form-select p-1" aria-label="Default select example" id="sexe">
                        <option selected class="text-center">Choisir dans la liste</option>
                        <option value="1">Monsieur</option>
                        <option value="2">Madame</option>
                        <option value="3">Indéfini</option>
                    </select>
                </div>

                <!------------------------------------------------------------------------->
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <h5 class="m-0 text-end pe-4">
                        Votre date de naissance
                    </h5>
                </div>
                <div class="col-6 pb-1 d-flex">
                    <div class="col-2 me-3">
                        <input type="text" class="form-control text-center p-1" placeholder="JJ" id="jour" aria-describedby="" pattern="[0-9]{2}" required>
                    </div>
                    <div class="col-2 me-3">
                        <input type="text" class="form-control text-center p-1" placeholder="MM" id="mois" aria-describedby="" pattern="[0-9]{2}" required>
                    </div>
                    <div class="col-4 me-3">
                        <input type="text" class="form-control text-center p-1" placeholder="YYYY" id="annee" aria-describedby="" pattern="[0-9]{4}" required>
                    </div>
                </div>
                <!------------------------------------------------------------------------>

                <div class="col-6 d-flex align-items-center justify-content-end">
                    <h5 class="m-0 text-end pe-4">
                        Votre numéro de téléphone *
                    </h5>
                </div>
                <div class="col-6 d-flex">
                    <div class="col-2 text-center pb-1">
                        <input type="text" class="form-control p-1 text-center" id="indicatif" aria-describedby="" placeholder="+33" pattern="[0-9]{3}" required>
                    </div>
                    <div class="col-10 text-start ps-3 pe-1">
                        <input type="text" class="form-control p-1" id="telephone" aria-describedby="" pattern="[0-9]{10}" required>
                    </div>
                </div>
                <!------------------------------------------------------------------------>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <h5 class="m-0 text-end pe-4">
                        Votre adresse postale
                    </h5>
                </div>
                <div class="col-6 pe-1 pb-1">
                    <textarea class="form-control p-1" placeholder="Leave a comment here" id="adresse-postale2" style="height: 60px">
                    </textarea>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <div class=" col-6 form-floating d-flex flex-wrap pb-1">

                        <div class="col-4 pe-1">
                            <input type="text" class="form-control p-1 text-center" style="height: 30px" id="CP" placeholder="CP" pattern="[0-9]{5}" required>
                        </div>
                        <div class="col-8 ps-3 pe-1">
                            <input type="text" class="form-control p-1 text-center" style="height: 30px" id="ville" placeholder="Ville">
                        </div>
                    </div>
                </div>




                <!------------------------------------------------------------------------>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <h5 class="m-0 text-end pe-4">
                        Vous situation *
                    </h5>
                </div>
                <div class="col-6 pb-1">
                    <select class="form-select p-1" aria-label="Default select example" id="situation">
                        <option selected class="text-center">Choisir dans la liste</option>
                        <option value="1">Marié</option>
                        <option value="2">Célibataire</option>
                        <option value="3">En couple</option>
                        <option value="4">Indefine</option>

                    </select>
                </div>
            </div>
        </div>
        <!-------------------------PARTIE Inférieur---------------------------->
        <!--------------------------------------------------------------------->
        <div class="col-12 mt-2 d-flex flex-wrap justify-content-between">

            <div class="col-9 d-flex flex-wrap pe-2">
                <div class="col-12 form-check d-flex justify-content-end align-items-center">
                    <input class="form-check-input fs-3" type="checkbox" value="" id="flexCheckDefault2">
                    <label class="form-check-label ps-2 text-white" for="flexCheckDefault2">En cochant cette case, mon organisme accepte les Conditions Générales d'Utilisation.</label>
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <div class="text-end sous-titre-2"><a href="#" class="link-underline-light sous-titre-2">Cliquez ici</a> pour prendre connaissance des CGU</div>

                </div>
            </div>

            <div class="col-3 r-4 rounded-5 justify-content-center d-flex align-items-center">
                <div class="btn titre_inscription text-white">VALIDER<br>MON FORMULAIRE</div>
            </div>
        </div>
    </div>
    </div>
    </div>