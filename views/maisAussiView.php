<?php
include("../tools/header.php");
include("../tools/menu.php");
?>

<style>
.maisAussi{
  color: rgb(51, 12, 73);
  font-family: 'Ruda', sans-serif;
  text-align: center;
}
  p.maisAussi{
  color: rgb(51, 12, 73);
  font-family: 'Ruda', sans-serif;
  text-align: center;
  }
 /* #myCarousel {
    width: 200px;
    height: 200px;
    margin:auto;
  }
  .carousel-indicators li {
     text-indent: 0px;
     text-align: center;
     color: red;
     margin: 0 2px;
     width: 30px;
     height: 30px;
     border: none;
     border-radius: 100%;
     line-height: 30px;
     background-color: #999;
     transition: all 0.25s ease;
}
 .carousel-indicators .active, .hover {
     margin: 0 2px;
     width: 30px;
     height: 30px;
     background-color: #337ab7;
} */


  </style>

     
<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
    
      </div>
       <div class="item">

<?php
    try
    {
      $pdo = new PDO('mysql:host=localhost;dbname=caroussel', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    $req = $pdo->query('SELECT src, nom FROM images');
    
        while($donnees = $req->fetch()){

                }
?>
       
      </div> 
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


 <!-- <p class ="maisAussi"><h4>FORMATION EDUCATEUR FOOTBALL JEUNE (bénévole)</h4><br>
 AVENIR DE THEIX FOOTBALL CLUB | 2018</p>    

<div id="myCarousel" class="carousel slide border" data-ride="carousel">
 
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="../tools/images/kercado.JPG" alt="Leopard">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="../tools/images/team.jpg" class="d-block w-100" alt="Cat">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="../tools/images/logo_ENI.svg" alt="Lion">
       
      </div>
   </div> -->
   <!-- Controls -->
   <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a> -->
<!-- </div> -->




<!-- <div class="carous-ludo">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="../tools/images/kercado.JPG" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../tools/images/team.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../tools/images/logo_ENI.svg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>  -->


<?php
include("../tools/footer.php");
?>