<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Création de site web en Normandie</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="David Levast, développeur web freelance Javascript, indépendant, sérieux et passionné, à la recherche de nouvelles opportunités en Normandie, France, je m'occuperai de la création de votre site, j'aurai à coeur d'optimiser un site internet existant, d'améliorer son référencement naturel. Si vous cherchez un développeur indépendant, contactez-moi">
    <meta name="robots" content="index, follow">
    <!-- Open Graph data -->
    <!-- Facebook Meta tags-->
    <meta name="author" content="David Levast">
    <meta property="fb:app_id" content="245955314257726" />
    <meta property="og:title" content="Création de site web en Normandie" />
    <meta property="og:url" content="https://www.davidlevast.fr" />
    <meta property="og:image:width" content="640" />
    <meta property="og:image:height" content="480" />
    <meta property="og:image" content="https://aprc.it/api/640x480/http://davidlevast.fr/" />
    <meta property="og:description" content="Développez votre identité visuelle et professionnelle sur le web" />
    <meta property="og:site_name" content="Portfolio David Levast" />
    <meta property="og:type" content="website" />
    <!-- End of Open Graph Data-->
    <link rel="icon" type="image/x-icon" href="img/david_levast.ico">
    <link as="style" rel="stylesheet preload prefetch" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link as="style" rel="stylesheet preload prefetch" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link as="style" rel="stylesheet preload prefetch" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H3WGH5P6V6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-H3WGH5P6V6');
    </script>
    <script src="js/script.js" async></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="15">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar" aria-label="menu_header">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#contact">
                    <img src="img/logo_davidlevast.webp" alt="logo david levast développeur freelance">
                </a>
            </nav>
            <div class="collapse navbar-collapse myRipple" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#about">Réflexions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Expériences</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container-fluid bg-banniere" id="about">
        <div class="col-xs-8 col-md-4 profile-picture">
            <img src="img/moi.webp" srcset="img/moi_small.webp 480w" sizes="50vw" alt="David Levast développeur web freelance en Normandie" class="rounded-circle img-thumbnail shadow" data-holder-rendered="true" />
        </div>
        <div class="head_banner">
            <h1>Développeur Web freelance</h1>
            <h2>Créateur de site web professionnel</h2>
            <h3>David Levast</h3>
            <a href="docs/CV_david_levast.pdf" class="btn btn-sm button1" aria-label="téléchargement cv"><i class="far fa-file-pdf"></i>Télécharger le
                CV</a>
        </div>
    </section>
    <section id="bio">
        <div class="blue-divider"></div>
        <div class="container" id="bio_responsive">
            <div class="head_banner">
                <h2>Réflexions : comment créer un site internet ?</h2>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>Qu'y a t-il de plus heureux que de vivre de sa <i>passion</i> ?</p>
                    <p>Peut-on écrire et faire vivre ces chaînes de caractères, ces octets, comme on laisse se répandre son caractère au travers de lignes de code superposées, imbriquées ?</p>
                    <p>Cette idée grandit sans cesse, donne du sens à ces mots et s'anime entre ces chevrons, ces attributs, ces classes et ces indentations.</p>
                    <p>Le <strong>développement web</strong>, un art, une <i>motivation</i>, un fil d'Ariane.</p>
                    <p id="bio_separate"></p>
                    <p>Je me tiendrai à vos côtés pour réaliser vos rêves d'entreprendre, de créer, d'avancer; nous mettrons en scène vos idées de <strong>création de site web</strong>, nous apprendrons ensemble l'un de l'autre, nous concrétiserons et optimiserons vos projets actuels.</p>
                    <p>Exprimez-moi vos souhaits quand vous en avez l'envie, je serai à l'écoute.</p>
                    <p>Pour faire connaissance, c'est <a id="bio_contact" href="#contact">ici </a>.
                </div>
            </div>
        </div>
    </section>
    <section class="quote container">
        <div class="blue-divider"></div>
        <div class="row">
            <div class="col-sm-12">
                <blockquote>
                    La vocation, c'est avoir pour métier sa passion.
                    <span>Stendhal</span>
                </blockquote>
            </div>
        </div>
        <div class="blue-divider"></div>
    </section>
    <div class="bg-divider"></div>
    <section id="skills">
        <div class="blue-divider"></div>
        <div class="head_banner">
            <h2>Compétences</h2>
            <div class="d-flex justify-content-center align-items-center">
                <span class="spinner-border m-2"></span>
                In progress
                <div class="spin1 spinner-grow" role="status"></div>
                <div class="spin2 spinner-grow" role="status"></div>
                <div class="spin3 spinner-grow" role="status"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <h3>HTML 85%</h3>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <h3>CSS 85%</h3>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                <h3>JAVASCRIPT 75%</h3>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                <h3>PHP 65%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                <h3>VUEJS 65%</h3>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <h3>NODEJS 60%</h3>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <h3>BOOTSTRAP 70%</h3>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                <h3>SASS 65%</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="experience">
        <div class="blue-divider"></div>
        <div class="head_banner">
            <h2>Expériences Professionnelles</h2>
            <div class="d-flex justify-content-center align-items-center">
                <span class="spinner-border m-2"></span>
                In progress
                <div class="spin1 spinner-grow" role="status"></div>
                <div class="spin2 spinner-grow" role="status"></div>
                <div class="spin3 spinner-grow" role="status"></div>
            </div>
            <div class="container" id="exp_responsive">
                <div class="timeline">
                    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
                        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
                            <h3 class=" text-light">Développeur Web freelance</h3>
                            <h4 class=" text-light">Auto-entreprise</h4>
                            <ul>
                                <li>- Création de sites Web professionnels</li>
                                <li>- Optimisation d'un projet, recherches de solutions</li>
                                <li>- Aide au référencement naturel</li>
                            </ul>
                        </div>
                        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
                            <img src="img/laptop-logo.webp" class="img-fluid" alt="openclassrooms-logo">
                        </div>
                        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
                            <time>13-09-2021 / Aujourd'hui</time>
                        </div>
                    </div>
                    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
                        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
                            <h3 class=" text-light">Formation développeur Web junior</h3>
                            <h4 class=" text-light">Openclassrooms - Obtention du titre RNCP Bac+2</h4>
                            <p>Cours à distance, mise en place et validation de projets professionnels, sessions de
                                mentorat hebdomadaires durant chaque étape avec appréciations</p>
                            <ul>
                                <li>- Transformer une maquette en site web</li>
                                <li>- Dynamiser une page web en utilisant des animations CSS</li>
                                <li>- Optimiser un site web existant</li>
                                <li>- Construire un site de e-commerce</li>
                                <li>- Construire une API sécurisée pour une application</li>
                                <li>- Créer un réseau social d'entreprise</li>
                            </ul>
                        </div>
                        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
                            <img src="img/oc-logo.webp" class="img-fluid" sizes="(min-width: 12vw) 12vw" alt="lpmicro-logo">
                        </div>
                        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
                            <time>24-06-2020 / 27-07-2021</time>
                        </div>
                    </div>
                    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
                        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
                            <h3 class=" text-light">Maintenance & installation informatique</h3>
                            <h4 class=" text-light">LPMICRO27 : Auto-entreprise</h4>
                            <ul>
                                <li>- Assistance informatique logicielle & matérielle</li>
                                <li>- Prise en charge et installation à distance</li>
                                <li>- Dépannage & diagnostic réseau domestique</li>
                                <li>- Formation & conseils sur divers systèmes d'exploitations & logiciels</li>
                            </ul>
                        </div>
                        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
                            <img src="img/lpmicro-logo.webp" class="img-fluid" sizes="(min-width: 12vw) 12vw" alt="lpmicro-logo">
                        </div>
                        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
                            <time>06-2014 / 12-2018</time>
                        </div>
                    </div>
                    <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
                        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
                            <h3 class=" text-light">Vendeur produits & services</h3>
                            <h4 class=" text-light">Carrefour : secteur informatique</h4>
                            <ul>
                                <li>- Accueil & écoute des besoins clients</li>
                                <li>- Synthèse & argumentaire de vente</li>
                                <li>- Conseils techniques & accompagnement d'achat</li>
                                <li>- Gestion de l'après-vente, solutionnement de conflits clients</li>
                            </ul>
                        </div>
                        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
                            <img src="img/carrefour-logo.webp" class="img-fluid" sizes="(min-width: 12vw) 12vw" alt="lpmicro-logo">
                        </div>
                        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
                            <time>05-2003 / Aujourd'hui</time>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="bg-divider-bottom"></div>
    <div class="blue-divider"></div>
    <section id="portfolio">
        <div class="container">
            <div class="blue-divider"></div>
            <div class="head_banner">
                <h2>Portfolio</h2>
            </div>
            <div class="row" id="mouse_out">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <figure class="zoom-overlay">
                        <img class="img-thumbnail" src="img/ohmyfood.webp" alt="portfolio david levast ohmyfood">
                        <div class="overlay_top">
                            <a href="https://dasyx.github.io/ohmyfood/" class="icon_top_display" target="_blank" rel="noopener">
                                <p class="text_top"></p>
                                <p class="text_top_second"></p>
                                <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                        <div class="overlay_bottom">
                            <a href="https://github.com/dasyx/ohmyfood" target="_blank" rel="noopener">
                                <div class="icon_bottom_display">
                                    <p class="text_techno1"></p>
                                    <p class="text_techno2"></p>
                                    <p class="text_techno3"></p>
                                </div>
                                <div class="bottom_flex">
                                    <i class="fas fa-download text_icon2 "></i>
                                    <p class="text_bottom"></p>
                                </div>
                            </a>
                        </div>
                    </figure>
                    <div class="low-res_display">
                        <a href="https://dasyx.github.io/ohmyfood/" class="btn btn-light lw_res_site" aria-label="affichage site github" target="_blank" rel="noopener">Voir le site</a>
                        <a href="https://github.com/dasyx/ohmyfood/" class="btn btn-light lw_res_code" aria-label="affichage code github" target="_blank" rel="noopener">Voir le code</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <figure class="zoom-overlay">
                        <img class="img-thumbnail" src="img/chouette_agence.webp" alt="portfolio david levast chouette agence">
                        <div class="overlay_top">
                            <a href="https://dasyx.github.io/chouette_agence_new/" class="icon_top_display" target="_blank" rel="noopener">
                                <p class="text_top"></p>
                                <p class="text_top_second"></p>
                                <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                        <div class="overlay_bottom">
                            <a href="https://github.com/dasyx/chouette_agence_new/" target="_blank" rel="noopener">
                                <div class="icon_bottom_display">
                                    <p class="text_techno1"></p>
                                    <p class="text_techno2"></p>
                                    <p class="text_techno3"></p>
                                </div>
                                <div class="bottom_flex">
                                    <i class="fas fa-download text_icon2 "></i>
                                    <p class="text_bottom"></p>
                                </div>
                            </a>
                        </div>
                    </figure>
                    <div class="low-res_display">
                        <a href="https://dasyx.github.io/chouette_agence_new/" class="btn btn-light lw_res_site" aria-label="affichage site github" target="_blank" rel="noopener">Voir le
                            site</a>
                        <a href="https://github.com/dasyx/chouette_agence_new/" class="btn btn-light" aria-label="affichage code github" target="_blank" rel="noopener">Voir le
                            code</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <figure class="zoom-overlay">
                        <img class="img-thumbnail" src="img/orinoco.webp" alt="portfolio david levast orinoco">
                        <div class="overlay_top">
                            <a href="https://dasyx.github.io/orinoco/" class="icon_top_display" target="_blank" rel="noopener">
                                <p class="text_top"></p>
                                <p class="text_top_second"></p>
                                <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                        <div class="overlay_bottom">
                            <a href="https://github.com/dasyx/orinoco/" class="icon_bottom_display" target="_blank" rel="noopener">
                                <div class="icon_bottom_display">
                                    <p class="text_techno1"></p>
                                    <p class="text_techno2"></p>
                                    <p class="text_techno3"></p>
                                </div>
                                <div class="bottom_flex">
                                    <i class="fas fa-download text_icon2 "></i>
                                    <p class="text_bottom"></p>
                                </div>
                            </a>
                        </div>
                    </figure>
                    <div class="low-res_display">
                        <a href="https://dasyx.github.io/orinoco/" class="btn btn-light lw_res_site" aria-label="affichage site github" target="_blank" rel="noopener">Voir le
                            site</a>
                        <a href="https://github.com/dasyx/orinoco/" class="btn btn-light" aria-label="affichage code github" target="_blank" rel="noopener">Voir le
                            code</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <figure class="zoom-overlay">
                        <img class="img-thumbnail" src="img/so_peckoko.webp" alt="portfolio david levast so_peckoko">
                        <div class="overlay_top">
                            <a href="https://dasyx.github.io/so_peckoko/" class="icon_top_display" target="_blank" rel="noopener">
                                <p class="text_top"></p>
                                <p class="text_top_second"></p>
                                <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                        <div class="overlay_bottom">
                            <a href="https://github.com/dasyx/so_peckoko/" class="icon_bottom_display" target="_blank" rel="noopener">
                                <div class="icon_bottom_display">
                                    <p class="text_techno1"></p>
                                    <p class="text_techno2"></p>
                                    <p class="text_techno3"></p>
                                </div>
                                <div class="bottom_flex">
                                    <i class="fas fa-download text_icon2 "></i>
                                    <p class="text_bottom"></p>
                                </div>
                            </a>
                        </div>
                    </figure>
                    <div class="low-res_display">
                        <a href="https://dasyx.github.io/so_peckoko/" class="btn btn-light lw_res_site" aria-label="affichage site github" target="_blank" rel="noopener">Voir le
                            site</a>
                        <a href="https://github.com/dasyx/so_pekocko/" class="btn btn-light" aria-label="affichage code github" target="_blank" rel="noopener">Voir le
                            code</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <figure class="zoom-overlay">
                        <img class="img-thumbnail" src="img/groupomania.webp" alt="portfolio david levast groupomania">
                        <div class="overlay_top">
                            <a href="https://dasyx.github.io/groupomania/" class="icon_top_display" target="_blank" rel="noopener">
                                <p class="text_top"></p>
                                <p class="text_top_second"></p>
                                <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                        <div class="overlay_bottom">
                            <a href="https://github.com/dasyx/groupomania/" class="icon_bottom_display" target="_blank" rel="noopener">
                                <div class="icon_bottom_display">
                                    <p class="text_techno1"></p>
                                    <p class="text_techno2"></p>
                                    <p class="text_techno3"></p>
                                </div>
                                <div class="bottom_flex">
                                    <i class="fas fa-download text_icon2 "></i>
                                    <p class="text_bottom"></p>
                                </div>
                            </a>
                        </div>
                    </figure>
                    <div class="low-res_display">
                        <a href="https://dasyx.github.io/groupomania/" class="btn btn-light lw_res_site " aria-label="affichage site github" target="_blank" rel="noopener">Voir le
                            site</a>
                        <a href="https://github.com/dasyx/groupomania/" class="btn btn-light" aria-label="affichage code github" target="_blank" rel="noopener">Voir le
                            code</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <figure class="zoom-overlay">
                        <img class="img-thumbnail" src="img/travel_agency.webp" alt="portfolio david levast travel agency">
                        <div class="overlay_top">
                            <a href="https://dasyx.github.io/projet_web/" class="icon_top_display" target="_blank" rel="noopener">
                                <p class="text_top"></p>
                                <p class="text_top_second"></p>
                                <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                        <div class="overlay_bottom">
                            <a href="https://github.com/dasyx/projet_web/" class="icon_bottom_display" target="_blank" rel="noopener">
                                <div class="icon_bottom_display">
                                    <p class="text_techno1"></p>
                                    <p class="text_techno2"></p>
                                    <p class="text_techno3"></p>
                                </div>
                                <div class="bottom_flex">
                                    <i class="fas fa-download text_icon2 "></i>
                                    <p class="text_bottom"></p>
                                </div>
                            </a>
                        </div>
                    </figure>
                    <div class="low-res_display">
                        <a href="https://dasyx.github.io/projet_web/" class="btn btn-light lw_res_site" aria-label="affichage site github" target="_blank" rel="noopener">Voir le
                            site</a>
                        <a href="https://github.com/dasyx/projet_web/" class="btn btn-light" aria-label="affichage code github" target="_blank" rel="noopener">Voir le
                            code</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="quote container" id="quote_bottom">
        <div class="blue-divider"></div>
        <div class="row">
            <div class="col-sm-12">
                <blockquote>
                    Les passions sont les vents qui enflent les voiles du navire ; elles le submergent quelquefois, mais
                    sans elles il ne pourrait voguer.
                    <span>Voltaire</span>
                </blockquote>
            </div>
        </div>
        <div class="blue-divider"></div>
    </section>
    <div class="bg-divider-bottom"></div>
    <footer id="contact">
        <div class="container">
            <div class="blue-divider"></div>
            <div class="head_banner">
                <h2>Contact</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-decoration-none myRipple" href="https://www.linkedin.com/in/david-levast-9553881aa" target="_blank" rel="noopener">
                                <span class="bi bi-linkedin">
                                    <p>Linkedin</p>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-decoration-none" href="https://twitter.com/davidlevast27" target="_blank" rel="noopener">
                                <span class="bi bi-twitter">
                                    <p>Twitter</p>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-decoration-none" onclick="displayContact()">
                                <span class="bi bi-mailbox">
                                    <p>Email</p>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="contactDisplay">
            <?php include "php/contact.php" ?>
        </div>
        <button class="scrollToTopBtn">
            <i class="bi bi-chevron-double-up"></i>
        </button>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" async>
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous" async>
</script>

</html>