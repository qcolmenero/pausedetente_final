<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pause détente</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
</head>

<body>

    <div class="global m-0 align-items-center">
        
        <!-- Header background -->
        <img class="headerbg w-100" src="ressources/bckgd_header.png">

        <div class="container d-flex justify-content-center row mx-sm-auto pt-5 mb-5">
            <img class="logo mt-lg-5" src="ressources/logo_et_trait.png">
            <h1 class="headertext mt-lg-5 pl-lg-4 sm-title">JEU<span class="slash">/</span>CONCOURS</h1>
        </div>
        
        <!-- Start of main container -->
        <div class="container-fluid maincontainer">
            
            <!-- ROW 1 -->
            <div class="row d-flex flex-nowrap justify-content-between">
                <div class="col-sm-1 row1margintop avantlesvacancescol">
                    <div class="row pendantlesvacancesdiv">
                        <img src="ressources/avant les vacances....png">
                    </div>
                </div>
                <div class="col-lg-4 col-md-10 pl-0 pr-0 ml-5 mr-0 row1margintop">
                    <h2 class="title pl-sm-3 pb-4 pr-sm-3">Pause détente avec <span class="bluetext">data expertise</span></h2>
                    <p class="pausedetentedesc pl-sm-3 pr-sm-3">Remplissez le formulaire ci-dessous et si vous faites partie des premières bonnes réponses recevez un cadeau !</p>
                </div>

                <div class="col-lg-6 col-sm-0 m-0 p-0 d-flex justify-content-end align-items-end ananasimgcontainer">
                    <img class="img-fluid ananasimg" src="ressources/ananas.jpg">
                </div>
            </div>

            <!--ROW 2 -->
            <div class="row">

                <img src="ressources/disque_dur.png" class="col-sm-6 col-lg-3 pr-0 pl-0">
                <div class="col-lg-3 col-sm-6 p-5 winnerdiv">
                    <span class="bluetext number">#1</span>
                    <p class="winnertext">Le 1<span class="ordinal">er</span> qui décryptera le chiffrement gagnera un <span class="font-weight-bold">disque dur sécurisé 500 Go (valeur 220€)</span></p>
                </div>

                <img src="ressources/coffret.jpg" class="col-lg-3 col-sm-6 pl-0 pr-0">
                <div class="col-lg-3 col-sm-6 py-5 pl-5 pr-5 pb-4 otherwinnerdiv">
                    <span class="number">#2 </span> <span class="middle-of-line">...</span> <span class="number">10</span>
                    <p class="winnertext">Les 10 suivants recevront un <span class="font-weight-bold">coffret gourmand composé de produits d'exception</span> issus de producteurs de nos régions.</p>
                </div>

            </div>

            <!-- ROW 3 -->
            <div class="row jeubg form mt-5 mb-5">
                <div class="col-md-2 col-sm-0 col-lg-3"></div>
                <form class="col-md-8 col-sm-12 col-lg-6 text-center pb-3 mt-3 mb-5" id="sendmailform" method="POST">
                    <h2 class="formtitle text-nowrap text-center pb-3">Tentez votre <span class="bluetext"> chance !</span></h2>
                    
                    <div class="alert alert-success messageform" id="successmessageform" role="alert">
                    Le mail a été envoyé avec succès.
                    </div>
                    <div class="alert alert-danger messageform" id="notcheckedmessageform" role="alert">
                    Veillez autoriser la conservation des données personnelles.
                    </div>
                    <div class="alert alert-danger messageform" id="notfilledmessageform" role="alert">
                    Veuillez remplir toutes les entrées avant de continuer.
                    </div>
                    <div class="form-group mb-2 col-md-12">
                        <input type="nom" id="lastname" class="form-control" name="lastname" placeholder="Nom" required>
                    </div>

                    <div class="form-group mb-2 col-md-12">
                        <input type="prenom" id="firstname" class="form-control" name="firstname" placeholder="Prenom" required>
                    </div>

                    <div class="form-group mb-2 col-md-12">
                        <input type="email" id="email" class="form-control" name="email" placeholder="E-mail" required>
                    </div>

                    <div class="form-group col-md-12">
                        <textarea class="form-control no-resize" id="mailbody" name="mailbody" rows="3" placeholder="Vous avez découvert les secrets de la cryptographie... précisez nous ici votre réponse !" required></textarea>
                    </div>

                    <label class="control control-checkbox mx-auto w-75">
                        <p>J'autorise la conservation de mes données personnelles afin d'être contacté sur les résultats du concours.</p>
                        <input type="checkbox" id="agree" name="agree"/>
                        <div class="control_indicator"></div>
                    </label>
                    <button id="send" type="submit" class="btn btn-primary mt-2">ENVOYER</button>
                </form>
                <div class="col-md-2 col-sm-0 col-lg-3"></div>
            </div>
            <!-- End on main container -->

        </div>
        <!-- contact and pre-footer imgs -->
        <div class="row container mx-auto lg-d-flex-between">
            <div class="col-lg-2 col-md-3 col-sm-6">
                <img class="img-fluid" src="ressources/logo_footer.png">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <span class="font-weight-bold footertitle">CONTACT</span>
                <p class="contacttext">8 Allée Paul Harris, 31200 Toulouse <br>05 34 26 02 46</p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <h5 class="font-weight-bold footertitle">ORGANISME DE FORMATION</h5>
                <img src="ressources/logo-datadock.png">
            </div>
            <div class="d-flex col-lg-offset-1 col-lg-3 col-md-3 col-sm-6">
                <div class="mr-3">
                    <img src="ressources/picto_huco.png">
                </div>
                <div>
                    <span class="text-uppercase footertitle font-weight-bold ">Un besoin en ERP, WEB ou <br>objets connectés ?</span>
                    <p class="orangetexte">Rendez-vous sur <br>humansconnexion.com</p>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="d-flex footerbg w-100 justify-content-around align-items-center">
            <a href="#" class="footertext">Mentions légales | Politique de confidentialité</a>
        </footer>

    </div>
    <!-- Scripts -->

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</body></html>
