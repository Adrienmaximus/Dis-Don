<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dis-DON
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!----------------------------Page inscription--------------------------->
    <!------------------------------------------------------------------------->
    <div class="row d-flex container-fluid col-12">
        <!-------------------------------------zone a gauche---------------------------->
        <!------------------------------------------------------------------------------->
        <div class="col-7 partie gauche mt-5 p-3">
            <div class="d-grid gap-2 col-6 mx-auto p-3 mt-5">
                <button type="button" class="btn" id="connexion" disabled data-bs-toggle="button">PAGE DE CONNEXION</button>
            </div>
            <div class="connexion border-2 border-end py-3 px-2">
                <div class="inscription row flex align-items-center my-4 mx-3">
                    <div class="col-5 text-white text-center">Identifiant</div>
                    <div class="form-floating mb-3 m col-7">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label class="col-12 text-center opacity-25" for="floatingInput">Email</label>
                    </div>

                </div>
                <div class="inscription row flex align-items-center m-3">

                    <div class="col-5 text-white text-center">Mot de passe</div>

                    <div class="form-floating col-7">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label class="col-12 fs-6 py-2 text-center opacity-25" for="floatingPassword">(8 caractères minimum dont<br> 1 majuscule,1 chiffre et 1 miniscule)</label>
                    </div>
                </div>
            </div>
        </div>


        <!-------------------------------------zone a droite------------------------------->
        <!--------------------------------------------------------------------------------------->
        <div class="col-5">
            <div class="col-12 d-flex align-items-center mt-5">
                <img class="col-3" src="image/logo blanc.png" alt="">
                <div class="col-9">
                    <h1>Dis-Don</h1>
                </div>
            </div>

            <p class="sous-titre">le dispositif Dis-Don est un portail réservé<br>aux organisments et tous utilisateurs<br>domiciliés en France</p>
            <div class="col-12 d-flex justify-content-center">
                <img class="chevron" src="image/chevron.png" alt="double chevron vers le bas">
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-7 m-2 p-3 bouton-fuchsia rounded-5 text-center">Premiere connexion,<br>inscrivez-vous<br>gratuitement ici!</div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <a class="m-3 text-center text-white" href="">Continuez sans se connecter</a>

            </div>
        </div>
    </div>




    <?php include "page2.php" ?>
    <?php include "page3.php" ?>
</body>

</html>