<!doctype html>
<html lang="en">
<?php
  include "../head.php" ;  
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
                <li class="nav-item">
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
                <li class="nav-item dropdown active">
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
                    <a class="nav-link" href="/gallery/">Gallery</a>
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
    
    
<!--I added the py-5 padding so that the heading would be prominent and easy to read and not be too busy. I made the entire section into a container so that the Bootstrap CSS would added the paddings and alignement. Then I made the cards into rows with the 12 columns and since I wanted 3 cards on each row, I gave each card 4 of the columns. I also wanted the pictures to be on top, then have an intorduction for the picutres (their business or influencer names) and where they are from. I added their Instagram accounts in the stretched link (they can click the entire card to be forwarded) so that visitors/readers can explore more by themselves. I also added my own custom style CSS -->
<section class="py-5">
    <div class="container">
        <!--
        <h5 class="m-5">News Articles We Have been featured in</h5>

        <div class="row">
            <div class="col-12 col-md-4 insta" >
                <div class="card">
                    <img class="card-img-top" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/stars/hanna.jpg" alt="Hanna and her daughet">
                    <div class="card-body">
                        <h5 class="card-title">Hanna - A La Table</h5>
                        <p class="card-text">Hanna is absolutely amazing, she lives in Montreal, QC, Canada. She is also a mother of 3, including a set of twins.</p>
                        <a href="https://www.instagram.com/alatable.ca/" class="btn btn-success stretched-link">click here</a>
                    </div>

                </div>
            </div>

          
            
            <div class="col-12 col-md-4 insta" >
                <div class="card">
                    <img class="card-img-top" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/107816164_303142270810787_3578618777712388320_n.jpg" alt="meg with her salami rose">
                    <div class="card-body">
                        <h5 class="card-title">ainttooproudtomeg</h5>
                        <p class="card-text">Meg does not have a grazing business, but is indeed an Insta star through and through! She lives in Los Angeles, CA. </p>
                        <a href="https://www.instagram.com/ainttooproudtomeg/" class="btn btn-danger stretched-link">click here</a>
                    </div>
                    
                </div>
            </div>
            
             <div class="col-12 col-md-4 insta" >
                <div class="card">
                    <img class="card-img-top" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/stars/sonny.jpg" alt="sonnylovescharlie">
                    <div class="card-body">
                        <h5 class="card-title">Sonnylovescharlie</h5>
                        <p class="card-text">Sonny and Charlie are her dogs. She likes to stay anonymous and is a true Insta star. She lives in Australia. </p>
                        <a href="https://www.instagram.com/sonny_loves_charlie/" class="btn btn-secondary stretched-link">click here</a>
                    </div>
                </div>
            </div>
            
            
              <div class="col-12 col-md-4 insta" >
                <div class="card">
                    <img class="card-img-top" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/stars/larissa1.jpg" alt="Larissa with her twins">
                    <div class="card-body">
                        <h5 class="card-title">grazegourmetplatter</h5>
                        <p class="card-text">Larissa is my our FAVOURITE grazer on instagram for a reason! She is insanely talented and so inspiring. Her tables, boxes are so stunning that it would stop you in your tracks! She is also a mother of twins. She lives in Australia. </p>
                        <a href="https://www.instagram.com/grazegourmetplatterco/" class="btn btn-danger stretched-link">click here</a>
                    </div>
                    
                </div>
            </div>
            
           
            <div class="col-12 col-md-4 insta" >
                <div class="card">
                    <img class="card-img-top" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/stars/anna.jpg" alt="Anna with her board">
                    <div class="card-body">
                        <h5 class="card-title">Anna - Nibble and Graze </h5>
                        <p class="card-text">Anna does amazing grazes; workshops, tables, boxes and platters. She has also jumped on the bandwagon of grazing numbers/letters. Go and check her out and see what we mean. She does a beautiful job and lives in Australia. </p>
                        <a href="https://www.instagram.com/nibbleandgraze/" class="btn btn-warning stretched-link">click here</a>
                    </div>
                </div>
            </div>
            
             <div class="col-12 col-md-4 insta" >
                <div class="card">
                    <img class="card-img-top" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/stars/suzanne.jpg" alt="jarcuterie by Suzanne">
                    <div class="card-body">
                        <h5 class="card-title">Suzanne - Noble Graze</h5>
                        <p class="card-text">Suzanne has mastered the new trend of jarcuterie and conerona. This trend started when the pandemic hit and everyone needed to minimize food touching as much as possible. She lives in Fayetteville, AR, USA. </p>
                        <a href="https://www.instagram.com/noblegraze/" class="btn btn-success stretched-link">click here</a>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 insta" >
                <div class="card">
                    <img class="card-img-top" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/stars/luckygraze.jpg" alt="Lucky graze with their table">
                    <div class="card-body">
                        <h5 class="card-title">Lucky Graze</h5>
                        <p class="card-text">Lucky Graze belongs to a grazing business belonging to 2 sisters who create incredible spreads and boxes. They cater to the many stars in Los Angeles, CA, USA and have been featured on Bravo TV. </p>
                        <a href="https://www.instagram.com/luckygraze/" class="btn btn-danger stretched-link">click here</a>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 insta" >
                <div class="card">
                    <img class="card-img-top" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/stars/yovita.jpg" alt="Beautiful Burnch board">
                    <div class="card-body">
                        <h5 class="card-title">Plattermeupcolorado</h5>
                        <p class="card-text">Yovita lives in Arvada, CO, USA. She has her signature grazing platters with fruit/food roses. She makes the most beautiful platters and you can spend hours on her page. she is also the queen of brunch boards.</p>
                        <a href="https://www.instagram.com/plattermeupcolorado/" class="btn btn-warning stretched-link">click here</a>
                    </div>
                </div>
            </div>
            
           

            <div class="col-12 col-md-4 insta" >
                <div class="card">
                    <img class="card-img-top" src="https://ellykonjkav.github.io/WebDevFPResources/resources/images/stars/sandy.jpg" alt="Sandy with her giant pancake board">
                    <div class="card-body">
                        <h5 class="card-title">Reluctantentainer</h5>
                        <p class="card-text">Sandy is an Insta star who doesn's have a business and her signature is this extra large board with different themes. Her boards are jaw dropping and we can imagine being her guest. </p>
                        <a href="https://www.instagram.com/reluctantentertainer/" class="btn btn-primary stretched-link">click here</a>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
</section>
    
    

<!--    Link to different parts of the lab-->
<section class="py-5">
    <div class="container">
        <h5 class="m-5">what we do</h5>

    <div class="row">
            <div class="col-12 mb-4 mb-md-0 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/resources/pictures/Scholarly-Publishing-word-cloud.png">
                    <div class="card-body">
                        <h5 class="card-title">Publications</h5>
                        <p class="card-text">Click to view our publications and see what we are up to!</p>
                        <a href="/publications/" class="btn btn-warning stretched-link">click here</a>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 mb-md-0 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/resources/pictures/Screen%20Shot%202020-10-10%20at%201.57.13%20PM%20copy.png">
                    <div class="card-body">
                        <h5 class="card-title">People</h5>
                        <p class="card-text">Click to see what each person does in our lab and to become familiar with our team! </p>
                        <a href="/people/" class="btn btn-success stretched-link">click here</a>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 mb-md-0 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/resources/pictures/heart_simulation.png">
                    <div class="card-body">
                        <h5 class="card-title">About us</h5>
                        <p class="card-text">Click to see a more detailed view of what our lab is about and what we do!</p>
                        <a href="/about/" class="btn btn-danger stretched-link">click here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<!--
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
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/resources/pictures/carousel/breakup.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"  src="/resources/pictures/carousel/scroll.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/resources/pictures/carousel/Screen%20Shot%202020-10-10%20at%204.58.27%20PM.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/resources/pictures/carousel/Screen%20Shot%202020-10-10%20at%204.59.10%20PM.png" alt="fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/resources/pictures/carousel/Screen%20Shot%202020-10-10%20at%204.59.41%20PM.png" alt="Fifth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/resources/pictures/carousel/Screen%20Shot%202020-10-10%20at%205.00.13%20PM.png" alt="sixth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    
    </section>
-->
    
    
<!--    The footer  -->

<footer id="sticky-footer" class="mt-5">
    <div class="footer">
        CHAOS LAB - Georgia Tech Howey Physics. All rights reserved. 2020
    </div>
</footer>
    
<!--    I have added all the vendors, downloaded in the /resources/vendors folder. However, since cdn files use cache and will help to use the best server available and to piggyback on any existing cached libraries used by other websites (which is most websites),then I knew it would help my pages load faster. -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
        #sticky-footer {
  flex-shrink: none;
}
    
    </style>
    
</body>
</html>
