<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <title>Recherche</title>

    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/acceuil.css">
    <link rel="stylesheet" href="fontawesome-free-5.0.1/css/fontawesome-all.css">


</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-4">
                <div class="administration">
                    <a class="btn btn-link" href=""><i class="fa fa-user"></i> Administration</a>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-2 col-xs-6 col-xs-offset-2">
                <div style="text-align: center" class="connection">
                    <a class="btn btn-link" href="">Se connecter</a>
                    <a class="btn btn-link" href="">S'inscrire </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- recherche  -->

<div class="milieu">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-3">
                <div>
                    <h1><a href=""><img src="images/shop.jpg"></a></h1>
                </div>
            </div>

            <a href="" class="col-md-4 col-xs-3 col-md-offset-4 col-xs-offset-6">
                <div class="shopping-item">
                    <div>Total : <span class="cart-amunt">1.200.000,00 CFA</span> <i class="fa fa-shopping-cart"></i><span class="product-count">5</span></div>
                </div>
            </a>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-xs-12">
                <div class="recherche ">
                    <form role="form" name="form" action="" method="post">
                        <div class="input-group">
                            <input type="text" placeholder="recherche" name="s" class="form-control left-rounded">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FIN Recherche -->

<!-- Debut Menu  -->

<div class="menu">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Les catégories</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu_categories">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="menu_categories" class="collapse navbar-collapse navbar-ex2-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Animalerie</a></li>
                            <li><a href="#">Auto et Moto</a></li>
                            <li><a href="#">Beauté et parfum</a></li>
                            <li><a href="#">Bijoux</a></li>
                            <li><a href="#">Sac et Chaussure</a></li>
                            <li><a href="#">High-Tech</a></li>
                            <li><a href="#">Jouet</a></li>
                            <li><a href="#">Livre</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Fin du menu -->

<!-- 1er Partie -->
<section>
    <div class="container">
        <div class="row">
            <div class="recommended_items">
                <!--recommended_items-->
                <h2 class="title">Résultats de la recherche : 551 produits trouvés</h2>

                <div class="col-lg-2 col-xs-12">
                    <?php
                    $facets = [
                        [
                            "name"=>"Categories",
                            "values"=>[
                                ["aliments et boissons", 5],
                                ["chaussures et vêtements",10],
                                ["jardinage",3],
                                ["puériculture",8],
                            ]
                        ] ,
                        [
                            "name"=>"Vendeurs",
                            "values"=>[
                                ["jordy fatigba",5],
                                ["ethiel adiassa",15],
                                ["barry thierno",8],
                            ]
                        ]
                    ];
                    foreach($facets as $facet)
                    {
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo $facet['name'] ;  ?>
                            </div>
                            <div class="text-center panel-body">
                                <ul class="list-unstyled">
                                    <?php
                                    foreach($facet["values"] as $value)
                                    {
                                        ?>
                                        <li class="active">
                                            <a title="<?php echo $value[0]; ?>" href="#"><?php echo $value[0]; ?> <i class="badge"><?php echo $value[1]; ?></i></a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <!-- Faceting -->

                <div class="col-lg-10 col-xs-12">
                    <?php
                    for($i=0; $i<5; $i++)
                    {
                    ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/recommend1.jpg" alt=""/>
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="col-lg-12 col-xs-12">
                        <div class="text-center">
                            <a class="btn btn-default add-to-cart">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div><!--/recommended_items-->
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="companyinfo">
                        <h2><span>OPENTRADE</span></h2>
                        <p>Opentrade est un site qui est developpé par l'entreprise BLITZ-DEV</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="companyinfo">
                        <h2><span>Adresse</span></h2>
                        <p>Avedji non loin du terrain du lycée d' Avedji</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="companyinfo">
                        <h2><span>Contact</span></h2>
                        <p>Téléphone : 99470778</p>
                        <p>Email : Specialteam39@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="companyinfo">
                        <h2><span>Liens Externes</span></h2>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Besoins d' aide?</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Tarifs et Options de Livraisons</a></li>
                            <li><a href="#">Moyens de Paiements</a></li>
                            <li><a href="#">Surveillance de vos commandes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Pour mieux nous connaitre</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">A propos de BLITZ-DEV</a></li>
                            <li><a href="#">Devenir Partenaire</a></li>
                            <li><a href="#">Aide</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>??????</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Condition d'utilisation</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            <li><a href="#">BLITZ-DEV Assistance</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous les droits sont réservés.</p>
                <p class="pull-right">Réaliser par <span><a target="_blank"
                                                            href="">BLITZ-DEV</a></span></p>

            </div>
        </div>
    </div>

</footer><!--/Footer-->


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/acceuil.js"></script>

</body>
</html>