<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>APROASUR</title>
        <meta name="description" content="">
        <!-- Mobile Specific Metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- CSS
        ================================================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="Style/css/bootstrap.min.css"/>
        <!-- FontAwesome -->

        <link rel="stylesheet" href="Style/css/font-awesome.min.css"/>
        <!-- Animation -->
        <link rel="stylesheet" href="Style/css/animate.css" />
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="Style/css/owl.carousel.css"/>
        <link rel="stylesheet" href="Style/css/owl.theme.css"/>
        <!-- Pretty Photo -->
        <link rel="stylesheet" href="Style/css/prettyPhoto.css"/>
        <link rel="stylesheet" href="Style/css/flexslider.css"/>
        <link rel="stylesheet" href="Style/css/red.css"/>

        <!-- Template styles-->
        <link rel="stylesheet" href="Style/css/custom.css" />
        <link rel="stylesheet" href="Style/css/responsive.css" />
        <link rel="stylesheet" href="Style/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500' rel='stylesheet' type='text/css'>
        <!--inclusions and instances-->
        <!--inclusions-->
        <?php
        include './Business/OrganizationBusiness.php';
        include './Business/PlanBusiness.php';
        include './Business/ProgramBusiness.php';
        include './Business/ProductBusiness.php';
        ?>
        <!--instances-->
        <?php
        $organizationBusiness = new OrganizationBusiness();
        $organization = $organizationBusiness->getOrganization();
        ?>
    </head>

    <body data-spy="scroll" data-target=".navbar-fixed-top">

        <header id="header" class="navbar-fixed-top navbar-inverse video-menu" role="banner">
            <div class="container">
                <!-- <div class="row"> -->
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <h4 style="color: #fff; font-size: 25px">APROASUR</h4>
                    </a>
                </div><!--Navbar header End-->
                <nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                    <ul class="nav navbar-nav navbar-right ">
                        <li class="active"> <a href="#home" class="page-scroll">Home </a></li>
                        <li><a href="#service" class="page-scroll" >¿Quienes somos?</a> </li>
                        <li><a href="#portfolio"  class="page-scroll">Planes</a> </li>
                        <li><a href="#team" class="page-scroll">Galería</a> </li>
                        <li><a href="#blog" class="page-scroll">Productos</a> </li>
                        <li><a href="#contact" class="page-scroll">Contacto</a> </li>
                    </ul>
                </nav>
            </div><!-- /.container-fluid -->
        </header>
        <!-- Slider start -->
        <section id="home" class="hero landing hero-section">
            <div class="video-background-container">
                <video preload="auto" autoplay loop muted class="video-background">
                    <source type="video/mp4" src="Style/videos/gdrive.mp4" />
                    <source type="video/ogg" src="Style/videos/gdrive.ogv" />
                    <source type="video/webm" src="Style/videos/gdrive.webm" />
                </video>
            </div> 

            <!--<div class="parallax-overlay"></div>-->

            <div class="container">
                <div class="hero-content text-center">
                    <div class="hero-text wow fadeIn" data-wow-delay=".8s ">
                        <img src="Style/images/APROASUR LOGO.png" style="width: 500px; height: 370px; " class="img-responsive center-block">

                    </div><!--/ Hero text end -->
                </div><!--/ Hero content end -->
            </div><!--/ Container end -->
        </section><!--/ Home end -->
        <!-- ABOUT US -->
        <section id="service" style="background-color: #CEF6EC">
            <div class="container" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title">APROASUR <b>Costa Rica</b></h3>
                            <h4 class="feature_sub">
                                <?php echo substr($organization->history, 0, 667); ?> 
                            </h4>
                            <div class="divider"></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->
                </div>
                <div class="row">
                    <div class="main_feature text-center">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="feature_content">
                                <i class=" glyphicon glyphicon-flag"></i>
                                <h5>Misión</h5>
                                <!--<p>You can not ignore mobile devices anymore and with this theme all your visitors will be very pleased how they see your website.</p>-->
                                <p><?php echo substr($organization->mission, 0, 102) . '...'; ?> </p>
                                <button onclick="<?php echo "modalSelect('" . substr($organization->mission, 0, 1100) . "','" . "Misión" . "')"; ?>" type="button" class="btn btn-main" data-toggle="modal" data-target="#myModal">Leer más</button>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="feature_content">
                                <i class="fa fa-eye"></i>
                                <h5>Visión</h5>
                                <p><?php echo substr($organization->view, 0, 113) . '...'; ?></p>
                                <button onclick="<?php echo "modalSelect('" . substr($organization->view, 0, 1100) . "','" . "Visión" . "')"; ?>" type="button" class="btn btn-main" data-toggle="modal" data-target="#myModal">Leer más</button>
                            </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="feature_content">
                                <i class="fa fa-history"></i>
                                <h5>Historia</h5>
                                <p><?php echo substr($organization->history, 0, 95) . '...'; ?> </p>
                                <button onclick="<?php echo "modalSelect('" . substr($organization->history, 0, 667) . "','" . "Historia" . "')"; ?>" type="button" class="btn btn-main" data-toggle="modal" data-target="#myModal">Leer más</button>
                            </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="feature_content">
                                <i class="fa fa-users "></i>
                                <h5>Comisión</h5>
                                <p><?php echo substr($organization->comission, 0, 90) . "..."; ?> </p>
                                <button onclick="<?php echo "modalSelect('" . substr($organization->comission, 0, 800) . "','" . "Comisión" . "')"; ?>" type="button" class="btn btn-main" data-toggle="modal" data-target="#myModal">Leer más</button>
                            </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <!-- <button class="btn btn-main"> Read More</button> -->
                    </div>
                </div>  <!-- Row End -->
            </div>  <!-- Container End -->
        </section>
        <!-- About Us Area End -->
        <!-- Modal for more information in about us-->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">#</h4>
                    </div>
                    <div class="modal-body">
                        <p class="modal-message">#</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- Portfolio works Start -->

        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature_header text-center">
                            <?php
                            $planBusiness = new PlanBusiness();
                            $resultName = $planBusiness->getNamePlan();
                            echo '<h3 class="feature_title">' . $resultName . '</h3>';
                            ?>                            
                            <h4 class="feature_sub">
                                <?php
                                $resultInformation = $planBusiness->getInformationPlan();
                                echo '<p class="text-justify">' . $resultInformation . '</p>';
                                ?> </h4>
                            <div class="divider "></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->
                </div>
            </div>

            <div id="isotope-filter" class="skew3 text-center">
                <a data-filter="*"  href="#" class=" ">Todos</a>
                <a data-filter=".Ietapa"  href="#" class="">I Etapa</a>
                <a data-filter=".IIetapa" href="#"  class="">II Etapa</a>               
            </div>
            <div class="clearfix"></div>
            <div class="text-center ">
                <ul class="portfolio-wrap" id="portfolio_items">
                    <?php
                    $programBusiness = new ProgramBusiness();
                    $resultProgramI = $programBusiness->getInformationProgramI();
                    foreach ($resultProgramI as $currentProgramI) {
                        ?>                        
                        <li class="col-md-3 col-xs-12 col-sm-6 single-portfolio Ietapa ">
                            <figure>
                                <img src="Images/pejibaye.jpg" alt="" class="img-responsive"/>                            
                                <figcaption>
                                    <p class="links">                 
                                        <button onclick=" <?php echo "modalSelect( '" . $currentProgramI->description . "','" . $currentProgramI->name . "' )"; ?>" type="button" class="btn btn-main" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-link"></i></button>                                        
                                    </p>
                                    <p style="color: #ffffff;"> <?php echo $currentProgramI->name; ?> </p>                                    
                                </figcaption>
                            </figure>    
                        </li>
                    <?php
                    }
                    $resultProgramII = $programBusiness->getInformationProgramII();
                    foreach ($resultProgramII as $currentProgramII) {
                        ?>                   
                        <li class="col-md-3 col-xs-12 col-sm-6 single-portfolio IIetapa ">
                            <figure>
                                <img src="Images/pejibaye.jpg" alt="" class="img-responsive"/>                            
                                <figcaption>
                                    <p class="links">                 
                                        <button onclick=" <?php echo "modalSelect( '" . $currentProgramII->description . "','" . $currentProgramII->name . "' )"; ?>" type="button" class="btn btn-main" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-link"></i></button>                                        
                                    </p>
                                    <p style="color: #ffffff;"><?php echo $currentProgramII->name; ?> </p>                                    
                                </figcaption>
                            </figure>    
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div> <!-- Container Full End -->
        </section>  <!-- Portfolio Section End -->
        <div class="clearfix"></div>
        <!-- Counter End -->
        <div class="clearfix"></div>
        <section id="video-fact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="landing-video">
                            <div class="video-embed wow fadeIn" data-wow-duration="1s">
                                <!-- Change the url -->
                                <iframe src="https://player.vimeo.com/video/183091597?title=0&amp;byline=0&amp;portrait=0&amp;color=8aba56" width="350" height="281" allowfullscreen></iframe>      
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="video-text">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading p2 active" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Heading One
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body p3">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default ">
                                    <div class="panel-heading  p2" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Heading Two
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body p3">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default ">
                                    <div class="panel-heading p2" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Heading Three
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body p3">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div><!-- row End -->
            </div>
        </section>
        <!-- Team MEmber Start -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title">Our <b>Team Members</b></h3>
                            <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
                            <div class="divider"></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->

                    <div id="owl-demo" class="owl-carousel owl-theme team-items">
                        <div class="item text-center">
                            <div class="single-member">
                                <div class="overlay-hover">
                                    <img src="Style/images/team/pic6.jpg" alt="" class="img-responsive">
                                    <div class="overlay-effect">
                                        <ul class="social list-inline">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href=""><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dignissimos, maxime ea excepturi veritatis itaque. </p>
                                    </div>
                                </div>
                                <h3>John Abraham</h3>
                                <h5>Chief Designer</h5>
                            </div>
                        </div>  <!-- item wrapper end -->
                        <div class="item text-center">
                            <div class="single-member">
                                <div class="overlay-hover">
                                    <img src="Style/images/team/pic1.jpg" alt="" class="img-responsive">
                                    <div class="overlay-effect">
                                        <ul class="social list-inline">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href=""><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dignissimos, maxime ea excepturi veritatis itaque. </p>
                                    </div>
                                </div>
                                <h3>John Abraham</h3>
                                <h5>Chief Designer</h5>
                            </div>
                        </div>  <!-- item wrapper end -->
                        <div class="item text-center">
                            <div class="single-member">
                                <div class="overlay-hover">
                                    <img src="Style/images/team/pic2.jpg" alt="" class="img-responsive">
                                    <div class="overlay-effect">
                                        <ul class="social list-inline">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href=""><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dignissimos, maxime ea excepturi veritatis itaque. </p>
                                    </div>
                                </div>
                                <h3>John Abraham</h3>
                                <h5>Chief Designer</h5>
                            </div>
                        </div>  <!-- item wrapper end -->
                        <div class="item text-center">
                            <div class="single-member">
                                <div class="overlay-hover">
                                    <img src="Style/images/team/pic5.jpg" alt="" class="img-responsive">
                                    <div class="overlay-effect">
                                        <ul class="social list-inline">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href=""><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dignissimos, maxime ea excepturi veritatis itaque. </p>
                                    </div>
                                </div>
                                <h3>John Abraham</h3>
                                <h5>Chief Designer</h5>
                            </div>
                        </div>  <!-- item wrapper end -->
                        <div class="item text-center">
                            <div class="single-member">
                                <div class="overlay-hover">
                                    <img src="Style/images/team/pic4.jpg" alt="" class="img-responsive">
                                    <div class="overlay-effect">
                                        <ul class="social list-inline">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href=""><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dignissimos, maxime ea excepturi veritatis itaque. </p>
                                    </div>
                                </div>
                                <h3>John Abraham</h3>
                                <h5>Chief Designer</h5>
                            </div>
                        </div>  <!-- item wrapper end -->
                    </div>
                </div>
            </div> <!-- Conatiner Team end -->
        </section>  <!-- Section TEam End -->

        <!-- Our Team Members End -->
        <div class="clearfix"></div>

        <!-- bLOG Start -->
        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title">Nuestros Productos</h3>
                            <h4 class="feature_sub"></h4>
                            <div class="divider"></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->
                </div>
                <div class="row">
                    <div class="blog-timeline">
                        <div id="owl-blog" class="owl-carousel owl-theme">
                            <?php
                            $productBusiness = new ProductBusiness();
                            $products = $productBusiness->getAllProducts();
                            foreach ($products as $currentProduct) {
                                ?>
                                <div class="item ">
                                    <div class="single_blog">
                                        <div class="post_img text-center">
                                        <img src=" <?php echo './Images/' . $currentProduct->pathImage; ?> " alt="" class="img-responsive">
                                        </div>
                                        <center><h4>  <?php echo $currentProduct->name; ?> </h4></center>
                                        <p class="text-justify"> <?php echo substr($currentProduct->description, 0, 200) . "..."; ?> </p>
                                        <center><button onclick="<?php echo "modalSelect('" . substr($currentProduct->description, 0, 667) . "','" . $currentProduct->name . "')"; ?>" type="button" class="btn btn-main" data-toggle="modal" data-target="#myModal">Leer más</button></center>
                                        <a href="<?php echo 'Presentation/ViewProductRecipes.php?productId=' .
                                        $currentProduct->idProduct; ?>">
                                            <center><button type="button" class="btn btn-main">Ver recetas</button></center>
                                        </a>
                                    </div>
                                </div>;
                                <?php
                            }
                            ?>
                        </div>
                    </div> <!-- blog Timeline End -->
                </div>
            </div>
        </section>
        <!-- bLOG End -->

        <!-- Conatct Area Start-->

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title"><b>Estamos para servir</b></h3>
                            <h4 class="feature_sub" style="margin-left: 15%">Para cualquier consulta escríbenos, nos gustaría seber de tí y de tus opiniones sobre APROASUR</h4>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="contact_full">
                    	<form name="frmContacto" method="post" action="smtp.php">
	                        <div class="col-md-6 left">
	                            <div class="left_contact">
	                                
	                                    <div class="form-level">
	                                        <input name="name" placeholder="Name" id="name"  value="" type="text" class="input-block">
	                                        <span class="form-icon fa fa-user"></span>
	                                    </div>
	                                    <div class="form-level">
	                                        <input name="email" placeholder="Email" id="mail" class="input-block" value="" type="email">
	                                        <span class="form-icon fa fa-envelope-o"></span>
	                                    </div>
	                                    <div class="form-level">
	                                        <input name="telephone" placeholder="Phone" id="phone" class="input-block" value="" type="text">
	                                        <span class="form-icon fa fa-phone"></span>
	                                    </div>
	                                
	                            </div>
	                        </div>

	                        <div class="col-md-6 right">
	                            <div class="form-level">
	                                <textarea name="comments" id="messege"  rows="5" class="textarea-block" placeholder="message"></textarea>
	                                <span class="form-icon fa fa-pencil"></span>
	                            </div>
	                        </div>
	                        <div class="col-md-12 text-center">
	                        	<input type="submit" value="Enviar" class="btn btn-main featured">
	                            
	                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div id="g-map" class="no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="map" id="map"></div>
                </div>
            </div>
        </div>
        <!-- Footer Area Start -->

        <div class="footer_b">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer_bottom">
                            <p class="text-block"> &copy;  <span>Copyright reserved to APROASUR</span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer_mid pull-right">
                            <ul class="social-contact list-inline">
                                <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-rss"></i></a></li>
                                <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer Area End -->



    <!-- Back To Top Button -->
    <!--  <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
             <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
         </div> -->
    <div id="back-top">
        <a href="#slider_part" class="scroll" data-scroll>
            <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
        </a>
    </div>
    <!-- End Back To Top Button -->
    <!-- Javascript Files
        ================================================== -->
    <!-- initialize jQuery Library -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="Style/js/jquery.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="Style/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="Style/js/owl.carousel.min.js"></script>
    <!-- Isotope -->
    <script src="Style/js/jquery.isotope.js"></script>
    <!-- Pretty Photo -->
    <script type="text/javascript" src="Style/js/jquery.prettyPhoto.js"></script>
    <!-- SmoothScroll -->
    <script type="text/javascript" src="Style/js/smooth-scroll.js"></script>
    <!-- Image Fancybox -->
    <script type="text/javascript" src="Style/js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Counter  -->
    <script type="text/javascript" src="Style/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="Style/js/waypoints.min.js"></script>
    <script type="text/javascript" src="Style/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="Style/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="Style/js/jquery.easing.1.3.js"></script>
    <!-- PrettyPhoto -->
    <script src="Style/js/jquery.singlePageNav.js"></script>
    <!-- Wow Animation -->
    <script type="js/javascript" src="Style/js/wow.min.js"></script>
    <!-- Google Map  Source -->
    <script type="text/javascript" src="Style/js/gmaps.js"></script>
    <!-- Custom js -->
    <script src="Style/js/custom.js"></script>
    <script>
//function to update the information modal.
function modalSelect(modalMessage, modalTitle) {
    document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
    document.getElementsByClassName("modal-message")[0].textContent = modalMessage;
}
;
    </script>
    <script>
        var map;
        map = new GMaps({
            div: '#map',
            lat: 9.809679,
            lng: -83.703649,
            scrollwheel: false,
            panControl: false,
            zoomControl: false,
        });

        map.addMarker({
            lat: 9.809679,
            lng: -83.703649,
            title: 'Themeturn',
            infoWindow: {
                content: '<p> ThemeTurn, Dhanmondhi 27</p>'
            },
            icon: "Style/images/map1.png"
        });
    </script>
</body>
</html>
