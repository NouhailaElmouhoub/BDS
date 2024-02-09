

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="stylesheet" href="./CSS/Acceuil.css">
    <link rel="stylesheet" href="./CSS/Contact.css">
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
                        <a class="nav-link " aria-current="page"
                            href="./Acceuil.PHP">Acceuil</a></button>
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Qui-sommes-nous
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item bg-info border border-2 border-secondary" href="./Historique.PHP">Historique</a></li>
                            <li><a class="dropdown-item bg-info border border-2 border-secondary" href="./Membres.PHP">Membres du groupe</a></li>
                            <li><a class="dropdown-item bg-info border border-2 border-secondary" href="./Réglement.PHP">Réglement intérieur</a></li>
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
    </header>

    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/office/24/000000/iphone.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Phone</div>
                                <div class="contact_info_text">+91 9876 543 2198</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/filled-message.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text">contact@bbbootstrap.com</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/map-marker.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Address</div>
                                <div class="contact_info_text">298,Menlo Park,CA,USA</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Get in Touch</div>

                        <form action="#" id="contact_form">
                            <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required.">
                                <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required.">
                                <input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number">
                            </div>
                            <div class="contact_form_text">
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                            </div>
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">Send Message</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>





    <div class=" mt-5 ">

        <footer class="card bg-white" >
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
                        <li><a href="./Admin">Admin</a> </li>
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