<!doctype html>
<html lang="en">
<?php 
include "head.php" ;
?>
<body>
<header class="container-fluid"> 
    <div class="header-firstnav">
    <nav class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand" href="/"><img class="rounded img-fluid d-none d-sm-block" src="/resources/pictures/header.png" height="100" alt="Chaos logo"><!-- Image to show on screens from small to extra large -->
        <img class="d-sm-none" src="/chaos-buzz.jpg"><!-- Image to show on extra small screen (mobile portrait) --></a>
    </nav>
        </div>
</header>
    
<div class="header-secondnav sticky-top container-fluid">    

    <nav class="navbar navbar-expand-md col-sm navbar-dark" style="background-color: #5faff5; border-radius:15px">
         
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about/">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/people/">People</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/publications/">Publications</a>
                </li> 
<!--dropdown-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        News
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/awards/">Awards/Grants</a>
                        <a class="dropdown-item" href="/updates/">Lab Updates</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/news/">Featured in News</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gallery/">Lab Pics</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/report/report.html"></a>
                </li>
            </ul>   
    </div>
  </nav>
</div>

<section>
    <div class="container-fluid col-md-10" style="background: #FFEFBA; border-radius:50px; /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFEFBA, #FFFFFF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFEFBA, #FFFFFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

">
<!--        Intro to Lab-->
        <h5 class="m-1">About our lab</h5>

        <div class="row">
            <!-- div class="col-12 col-lg-6">
                <img class="d-block w-100" height="100%" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/gallery/characuterie/IMG-20190203-WA0042.jpg" alt="My picture with grazing board">
            </div-->
	    <div class="rounded ml-5 col">

	<iframe width=400 height=400 src="/beating.html" title="W3Schools Free Online Web Tutorials">
	</iframe>

	    </div>
            <div class="mr-5 col" style='border-radius:50px;'>
                <p class="lead">Welcome to <b><i>CHAOS Lab</i></b>. we use a combined approach of theory, simulation, and experiments to investigate complex systems.</p>
                
                <p class="lead"><b><i>Experiments in complex systems:</i></b> Cardiac dynamics using micro-electrodes and optical mapping, active media (swarms and murmuration), chemical reactions, table top experiments.</p>
                
                <p class="lead"><b><i>Mathematical modeling of complex systems:</i></b> Development and analysis of mathematical models that describe generic or detailed dynamics of excitable and oscillatory media.</p>
                
                <p class="lead"><b><i>High performance computing:</i></b> Development and implementation of novel algorithms to solve partial differential equations in two- and three-dimensional regular and irregular domains and parallel computing using GPUs.</p>
            </div> 
        </div>
    </div>
</section>

    
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class=" mx-auto d-block" src="/resources/pictures/carousel/breakup.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class=" mx-auto d-block" src="/resources/pictures/carousel/breakup.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class=" mx-auto d-block" src="/resources/pictures/carousel/breakup.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="mx-auto d-block" src="/resources/pictures/carousel/Screen%20Shot%202020-10-10%20at%204.59.10%20PM.png" alt="fourth slide">
            </div>
            <div class="carousel-item">
                <img class="mx-auto d-block"  src="/resources/pictures/carousel/Screen%20Shot%202020-10-10%20at%204.59.41%20PM.png" alt="Fifth slide">
            </div>
            <div class="carousel-item">
                <img class="mx-auto d-block" src="/resources/pictures/carousel/Screen%20Shot%202020-10-10%20at%205.00.13%20PM.png" alt="sixth slide">
            </div>
        </div>
        <a class="carousel-control-prev" style="filter: invert(100%)"
           href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" style="filter: invert(100%)" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    
    </section>
    
    
    
    
<!--    The footer -->

<footer id="sticky-footer" class="mt-1">
    <div class="footer">
        CHAOS LAB - Georgia Tech Howey Physics. All rights reserved. 2020
    </div>
</footer>
    
<!--    I have added all the vendors, downloaded in the /resources/vendors folder. However, since cdn files use cache and will help to use the best server available and to piggyback on any existing cached libraries used by other websites (which is most websites),then I knew it would help my pages load faster. -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <style>
        .carousel-inner img
        {
            max-width: 400px;
            max-height: 400px;
        }
        
        #sticky-footer 
        {
            flex-shrink: none;
        }
    
    </style>
    
</body>
</html>
