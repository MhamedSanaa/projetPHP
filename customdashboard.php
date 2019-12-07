<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script src="js/bootstrap.min.js" ></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Ordering Site</title>
</head>
<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><h4>Food Ordering Site</h4></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#about">Menu <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="acccustom.php">account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#conc">Contact-Us </a>
                    </li>
                  </ul>
                </div>
              </nav>
</section>
<section id="c3">
  <div class="container">
 <div class="row">
   <div class="col-sm-3">
   </div>
   <div id="pop" class="col-sm-6">
    <div>
      <h1>All the food you need, delivered now</h1><br>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Adresse" >
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Find Food</button>
        </div>    
      </div>
    </div>
    <div id="triangle"></div>
  </div>
     <div class="col-sm-3">

       </div>
 </div>
</div>
</section>
<section id="c4">
    <div class="container">
      <h1>How it works</h1>
      <div class="row">
          <div class="col-sm">
         <img src="1.svg">
         <h3 >Set delivery location</h3>
         <p >Select the location where you want us to deliver</p>
      </div>
      <div class="col-sm">
          <img src="2.svg">
          <h3 >Choose the product</h3>
          <p >Browse shops that deliver near you</p>
       </div>
       <div class="col-sm">
          <img src="3.svg">
          <h3 >Receive it at your doorstep</h3>
          <p >Your order will be delivered to you in no time</p>
       </div>
      </div>
    </div>
    </section>
      <section id="c4" background-iamge="7.png">
        <div class="container"></div>
        </section>
        <section id="conc">
          <div class="container">
            <div class="row justify-content-center">
               <div class="col-7">
            <h1 class="h1-white">20% OFF on your first order by subscribing to our newsletters!</h1>
           <p>Don't miss out on our great offers & Receive deals from all our top vendors via e-mail</p>
           <select class="form-control">
             <option>Tunisia</option>
             <option>Germany</option>
             <option>Denmark</option>
           </select>
           <input class="form-control" type="text" placeholder="Enter E-mail">
           <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
          </div>
            </div>
        </div>
        </section>

        <section id="c4">
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <img class="pub" src="4.png">
                  </div>
                  <div class="col-sm">
                    <img class="pub" src="5.png">
                  </div>
                  <div class="col-sm">
                    <img class="pub" src="6.png">
                  </div>
                </div>
              </div>
            </section>






        <section id="footer">
            <div class="container text-center">
                <p>ISET Bizerte</p>
         </div>
        </section>
        <script src="js/smooth-scroll.js"></script>
<script>
var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script>
$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    </script>
</body>
</html>