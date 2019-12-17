<?php
include("../tools/header.php");
include("../tools/menu.php");
?>

<style>
  .maisAussi {
    color: rgb(51, 12, 73);
    font-family: 'Ruda', sans-serif;
    text-align: center;
  }

  p.maisAussi {
    color: rgb(51, 12, 73);
    font-family: 'Ruda', sans-serif;
    text-align: center;
  }
</style>
<body class="bodymaisAussi">

<div class="text-center">
  <p class="maisAussi">
  <br>
  <h1>Educateur Football jeune (bénévole)</h1>
    <h4> AVENIR DE THEIX FOOTBALL CLUB | 2018</h4><br>
   
  </p>

  <div id="myCarousel" class="carousel slide border col-2 offset-5" style="background: grey" data-ride="carousel">
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
    </div>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>

<?php
include("../tools/footer.php");
?>