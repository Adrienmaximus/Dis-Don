<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 6</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <!---------------Page inscription--------------------------->
    <div class="row d-flex container-fluid col-12">
        <!-------------------zone a gauche---------------------------->
        <!-------------------zone a gauche---------------------------->
        <div class="col-7 partie mt-5 gauche p-3 pt-5">
            <!----------------------Connexion-------------------------->
            <div class="col-12 d-flex mt-5 pb-4 border-2 border-end justify-content-center">
                <div class="col-6 mt-3 mx-4 r-4 rounded-4 px-1 py-2 text-center d-flex justify-content-center">
                    <div class="btn titre_inscription  fw-bold text-info" style="font-family: 'Open Sans', sans-serif;font-size:120%;" href="">PAGE DE CONNEXION
                    </div>
                </div>
            </div>
            <!-----------------onglets------------------------------>
            <div class="info connexion border-2 border-end py-3 px-3 d-flex flex-wrap justify-content-around">
                <div class=" col-12 inscription d-flex align-items-center mb-4 me-3">
                    <div class="col-6 text-white text-center">Identifiant</div>
                    <div class="form-floating col-6">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label class="col-12 text-center opacity-25" for="floatingInput">Email</label>
                    </div>
                </div>
                <div class="col-12 inscription d-flex align-items-center me-3 pb-5">

                    <div class="col-6 text-white text-center">Mot de passe</div>

                    <div class="form-floating col-6">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label class="col-12 fs-20 text-center py-1 opacity-25" for="floatingPassword">(8 caractères minimum dont<br> 1 majuscule,1 chiffre et 1 miniscule)</label>
                    </div>
                </div>
            </div>
        </div>
        <!----------------zone a droite------------------------------->
        <!----------------zone a droite------------------------------->
        <div class="col-5 mt-5">
            <div class="col-12 d-flex align-items-center mt-3">
                <img class="col-3" src="image/logo blanc.png" alt="logo">
                <div class="col-9">
                    <h1>Dis-Don</h1>
                </div>
            </div>

            <p class="sous-titre">le dispositif Dis-Don est un portail réservé<br>aux organisments et tous utilisateurs<br>domiciliés en France</p>
            <div class="col-12 d-flex justify-content-center">
                <img class="chevron" src="image/chevron.png" alt="double chevron vers le bas">
            </div>
        <!----------------connexion------------------------------->

            <div class="d-flex justify-content-center mt-3">
                <button class="col-7 p-3 rounded-5 bouton-fuchsia">Premiere connexion,<br>inscrivez-vous<br>gratuitement ici!</button>
            </div>
            <div class="col-12 d-flex justify-content-center mt-3">
                <a class="m-3 text-center text-white" href="">Continuez sans se connecter</a>

            </div>
        </div>
    </div>

</body>

</html>