<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>

    <title>Open Trade - Lova Boutique</title>
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/acceuil.css">
    <link rel="stylesheet" href="styles/shopinfo.css">
    <link rel="stylesheet" href="fontawesome-free-5.0.1/css/fontawesome-all.css">
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.min.css">


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
                    <h1><a href=""><img width="100" height="100" class="img-circle" src="images/shop/logo.png"></a></h1>
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

<!-- Debut Slide -->

<div class="slider">
    <div id="shop_banner" class="container container-fluid">
        <div class="row">
            <h2 class="shop-name">nom de la boutique</h2>
            <img id="shop_banner_logo" height="128" width="128" class="img-responsive img-circle" src="images/shop/logo.png">
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#shop_menu">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand">Nom de la boutique</a>
                        </div>
                        <div id="shop_menu" class="collapse navbar-collapse navbar-ex2-collapse">
                            <ul class="nav navbar-nav">
                                <li><a class="btn btn-link" data-toggle="modal" data-target="#shop_description">Détails de la boutique</a></li>
                                <li><a class="btn btn-link" data-toggle="modal" data-target="#shop_contact">Contacter le vendeur</a></li>
                                <li><a class="btn btn-link" onclick="explore()">Explorer la boutique</a></li>
                                <li><a class="btn btn-link" href="#">S'abonner/Se désabonner</a></li>
                                <li><a class="btn btn-link" title="rechercher" data-toggle="collapse" data-target="#filter">Rechercher</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal pour afficher la description de la boutique -->
    <div id="shop_description" class="modal shop-description" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3>Nom de la boutique</h3>
                </div>
                <div class="modal-body">
                    <div class="fa fa-2x mg-bottom-1">
                        Description de la boutique
                    </div>
                    <div>
                        vendeur : nom et prénom du vendeur
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal pour contacter le vendeur-->
    <div id="shop_contact" class="modal shop-description" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3>Nom de la boutique</h3>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="active"> <a class="btn btn-link" data-toggle="tab" href="#contact">Contact</a></li>
                        <li><a class="btn btn-link" data-toggle="tab"  href="#form_contact">Envoyer un message</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="contact" class="tab-pane fade in active">
                            <h3>Contact</h3>
                            <ul>
                                <li>numéro de téléphone : +228 99-99-99-99-</li>
                                <li>email : vendeur@exemple.com</li>
                            </ul>
                        </div>
                        <div id="form_contact" class="tab-pane fade">
                            <h3>Envoyer un message</h3>
                            <form>
                                <div class="form-group">
                                    <label>Objet <i style="color:red">*</i></label>
                                    <input required class="form-control" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Message <i style="color:red">*</i></label>
                                    <textarea required class="form-control"></textarea>
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-primary">
                                    <input type="reset" class="btn btn-warning">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fin des sliders -->

<!-- 1er Partie -->
<section id="shop_items">
    <div class="container">
        <div class="collapse" id="filter">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Rechercher dans la boutique Lova Boutique</div>
                        <div class="panel-body">
                            <form id="filter_form">
                                <div class="form-group">
                                    <label>
                                        Prix : <input disabled style="display:inline; border:0; font-weight:bold;" class="form-control" type="text" id="amount">
                                    </label>
                                    <div id="slider-range">

                                    </div>
                                    <input id="min-price_input" hidden value="0" name="min_price" type="number"/>
                                    <input id="max-price_input" hidden value="1000" name="max_price" type="number"/>
                                </div>
                                <div class="form-group">
                                    <label>En promotion</label>
                                    <input id="filter_promotion_input" name="promotion" type="checkbox"/>
                                </div>
                                <div class="form-group">
                                    <label>Etat du produit</label>
                                    <select class="form-control" name="state">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mots clés</label>
                                    <input placeholder="saisissez des mots clés" name="keyword" type="text" required class="form-control" />
                                </div>
                                <input type="submit" value="rechercher" class="btn btn-primary" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: auto; width: 50%; z-index: 1;">
            <div id="spinner" class="hidden text-center">
                <i style="margin-bottom: 20%;" class="fa fa-3x fa-spin fa-spinner"></i>
            </div>
        </div>

        <div id="shop_items_row" class="row">
            <div class="recommended_items"><!--recommended_items-->
                <h2 class="title text-center">Promotions</h2>
                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend1.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend2.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend3.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend1.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend2.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend3.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div><!--/recommended_items-->


            <div class="recommended_items"><!--recommended_items-->
                <h2 class="title text-center">Meilleurs Ventes</h2>

                <div id="new-item-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend1.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend3.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend1.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend2.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend3.jpg" alt=""/>
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left recommended-item-control" href="#new-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" href="#new-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div><!--/recommended_items-->

            <div> <!--intermediare-->
                <img class="intermediaire" src="images/Early%20Christmas%20Treat.jpg" alt="Inscription">
            </div>

            <div class="col-lg-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Les produits</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/product1.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/product2.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/product3.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/product4.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="images/home/new.png" class="new" alt=""/>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/product5.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="images/home/sale.png" class="new" alt=""/>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/product6.jpg" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--features_items-->
                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Produits Populaires</h2>

                    <div id="populaire-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend1.jpg" alt=""/>
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend2.jpg" alt=""/>
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend3.jpg" alt=""/>
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend1.jpg" alt=""/>
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend2.jpg" alt=""/>
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend3.jpg" alt=""/>
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#populaire-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#populaire-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
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
<script src="js/jquery-ui/jquery-ui.min.js"></script>

<script type="text/javascript">
    /* slider */
    $( function() {
        var max_price = $("#max-price_input");
        var min_price = $("#min-price_input");
        var slider = $( "#slider-range" ) ;
        slider.slider({
            range: true,
            min: 0,
            max: 100000,
            values: [ 0, 1000 ],
            slide: function( event, ui ) {
                $( "#amount" ).val(ui.values[ 0 ] + " FCFA - " + ui.values[ 1 ] +" FCFA" );
                min_price.attr("value", ui.values[ 0 ] ) ;
                max_price.attr("value", ui.values[ 1 ] ) ;
                console.log("max "+max_price.val()) ;
                console.log("min "+min_price.val()) ;
            }
        });
        $( "#amount" ).val( slider.slider( "values", 0 )+" FCFA " + slider.slider( "values", 1 ) +" FCFA" );
    } );
    /* explorer la boutique (afficher tout les produits) */
    function explore()
    {
        $("#shop_items").find("#shop_items_row").fadeIn(400).html("").addClass("hidden") ;
        $("#spinner").removeClass("hidden") ;
        var i = 0;
        for(i=0; i<20; i++)
        {
            var lv1 = $('<div></div>').addClass("col-sm-3") ;
            var lv2 = $('<div></div>').addClass("product-image-wrapper") ;
            var lv3 = $('<div></div>').addClass("single-products") ;
            var lv4 = $('<div></div>').addClass("productinfo text-center") ;
            var img = $('<img/>').attr('src', "images/home/recommend1.jpg") ;
            var title = $('<h2></h2>').text('$56') ;
            var paragraphe = $('<p></p>').text('Easy Polo Black Edition') ;
            var link = $('<a></a>').addClass('btn btn-default add-to-cart').text("Add to cart") ;
            var linkDecoration = $('<i></i>').addClass('fa fa-shopping-cart') ;
            link.append(linkDecoration) ;
            lv4.append(img).append(title).append(link).append(paragraphe) ;
            lv3.append(lv4) ;
            lv2.append(lv3) ;
            lv1.append(lv2) ;
            $("#shop_items").find("#shop_items_row").append(lv1) ;
        }
        setTimeout(function () {
            $("#shop_items").find("#shop_items_row").removeClass("hidden") ;
            $("#spinner").addClass("hidden") ;
        }, 800) ;
    }
    /* Formulaire de filtre */
    $("#filter_form").submit(function (event) {
        event.preventDefault() ;
    }) ;
</script>

</body>
</html>