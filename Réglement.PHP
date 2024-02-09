
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Réglement</title>
    <link rel="stylesheet" href="./CSS/Acceuil.css">
    <link rel="stylesheet" href="./CSS/Réglement.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header class="navbar navbar-expand-lg   ">
        <div class="container-fluid d-flex">
            <a class="navbar-brand" href="#"><img src="./image/Class__2_-removebg-preview.png" alt=""></a>
        </div>
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./Acceuil.PHP">Acceuil</a></button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="./AIDE.PHP">AIDE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="./Blog.PHP">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="./Espace-vote.PHP">Espace-vote</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="./Missions.PHP">Missions</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active text-success text-decoration-underline" href="#"
                            role="button" data-bs-toggle="dropdown">
                            Qui-sommes-nous
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item bg-info border border-2 border-secondary"
                                    href="./Historique.PHP">Historique</a></li>
                            <li><a class="dropdown-item bg-info border border-2 border-secondary"
                                    href="./Membres.PHP">Membres du groupe</a></li>
                            <li><a class="dropdown-item bg-info border border-2 border-secondary"
                                    href="./Réglement.PHP">Réglement intérieur</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
        <div>
            <ul class="navbar nav">
                <li>
                    <a href="./Login.PHP" class="navbar-brand nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-add" viewBox="0 0 16 16">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                            <path
                                d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./Login.PHP">login</a></li>
                        <li><a class="dropdown-item" href="./Sign-UP.PHP">sign-up</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <div>
            <ul class="navbar nav">
                <li>
                    <a href="#" class="navbar-brand nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                        </svg></a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Français</a></li>
                        <li><a href="" class="dropdown-item"> Arabe</a></li>
                    </ul>
                </li>
            </ul>
        </div>    
    </header>
    </header>
    <div class="container">
        <img src="./image/guide-salaries-slide_0.jpg" alt="">
        <div class="text">
            <h1>Réglement intérieur</h1>
        </div>
    </div>
    <div class="container" style="padding: 60px;">
        <div class="row">
            <div class="col-md-8 content">
                <div class="card">

                    <p>Le règlement intérieur des EFP de l'OFPPT est le fruit d'un long processus d'étude, d'échange et
                        de
                        concertation avec les établissements de formation, les directions régionales et les directions
                        centrales.</p>
                    <p>Entré en vigueur depuis le 1er Septembre 2012, et remplaçant le règlement du 30 Mai 2005, le
                        nouveau
                        règlement intérieur arrête le cadre de travail des différents intervenants en formation, et fixe
                        les
                        prérogatives des organes technico-pédagogiques.</p>
                        
                            <strong>DOCUMENTS À TÉLÉCHARGER:</strong>
                        
                        <div class="ao-downloadable">
                            <h5>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                </svg>
                                <a
                                    href="https://www.ofppt.ma/sites/default/files/documents/R%C3%A8glement%20Int%C3%A9rieur%20des%20EFP%20de%20l%27OFPPT_1.pdf">
                                    <span>Réglement intérieur des EFP de l'OFPPT</span>
                                </a>
                            </h5>
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-title">
                        <h1>A rejoindre</h1>
                    </div>
                    <div class="card-body">
                        <h5><a href="./Acceuil.PHP">Acceuil</a></h5>
                        <hr>
                        <h5><a href="./Blog.PHP">Blog</a></h5>
                        <hr>
                        <h5><a href="./Admin.PHP">Admin</a></h5>
                        <hr>
                        <h5><a href="./Contact.PHP">Contact</a></h5>
                        <hr>
                        <h5><a href="./Espace-vote.PHP">Espace-vote</a></h5>
                        <hr>
                        <h5><a href="./Historique.PHP">Historique</a></h5>
                        <hr>
                        <h5><a href="./Login.PHP">Login</a></h5>
                        <hr>
                        <h5><a href="./Membres.PHP">Membres</a></h5>
                        <hr>
                        <h5><a href="./Missions.PHP">Missions</a></h5>
                        <hr>
                        <h5><a href="./Réglement.PHP">Réglement</a></h5>
                        <hr>
                        <h5><a href="./Sign-UP.PHP">Sign-UP</a></h5>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" mt-5 ">

<footer class="card bg-white " >
    <div class="row mb-4 ">

        <div class="col-md-4 col-sm-11 col-xs-11">
            <div class="footer-text pull-left">
                <div class="d-flex">
                    <h1 class="font-weight-bold mr-2 px-3" style="color:#0b7c22;;font-family:cursive;"> BDS
                    </h1>
                    <h1 style="color: #0400fc ;font-family:cursive;">ofppt</h1>
                </div>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi non
                    pariatur numquam animi nam at impedit odit nisi.</p>
                <div class="icons">
                    <a href="https://www.instagram.com/ofppt.officiel/" class="icon icon--instagram">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="https://www.linkedin.com/company/ofpptpageofficielle/" class="icon icon--linkedin">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="https://www.facebook.com/Ntic.Safi" class="icon icon--facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>

            </div>
        </div>


        <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>




        <div class="col-md-3 col-sm-4 col-xs-4">

            <h5 class="heading text-decoration-underline">Industries</h5>
            <ul class="card-text">
                <li>
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>Morocco</span>
                            Safi</p>
                    </div>
                </li>
                <li>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+212 5246-53195</p>
                    </div>
                </li>
                <li>
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:sagar00001.co@gmail.com" class="text-success">
                                <h6>
                                    ISTANTICSAFI@GMAIL.COM</h6>
                            </a></p>
                    </div>
                </li>
            </ul>

        </div>


        <div class="col-md-3 col-sm-4 col-xs-4">
            <h5 class="heading text-decoration-underline">Company</h5>
            <ul class="card-text">
                <li><<a href="./Admin.PHP">Admin</a> </li>
                <li><a href="./Blog.PHP">Blog</a> </li>
                <li><a href="./Contact.PHP">Contact</a> </li>
                <li><a href="./Acceuil.PHP">Acceuil</a> </li>
            </ul>

        </div>

    </div>


    <div class="divider mb-4">
    </div>


    <div class="row" style="font-size:10px;">

        <div class="col-md-6 col-sm-6 col-xs-6">

            <div class="pull-left">

                <p><i class="fa fa-copyright"></i> safi © 2022SagarDeveloper All rights reserved</p>

            </div>

        </div>



        <div class="col-md-6 col-sm-6 col-xs-6">


            <div class="pull-right mr-4 d-flex policy">

                <div>Terms of Use</div>
                <div>Privacy Policy</div>
                <div>Cookie Policy</div>

            </div>



        </div>



    </div>
</footer>

</div>



<script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>