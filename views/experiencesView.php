<?php
include("../tools/header.php");
include("../tools/menu.php");
?>
<style>
  h4 {
    color: rgb(51, 12, 73);
  }

  ul.timeline {
    list-style-type: none;
    position: relative;
  }

  ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
  }

  ul.timeline>li {
    margin: 20px 0;
    padding-left: 20px;
  }

  ul.timeline>li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
  }
</style>


<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1>Expériences</h1>
      <ul class="timeline">
        <li>
          <p class="text-left">
            <!-- <a class="float"> -->
              <h4 class="text-left">2019</h4>
            <!-- </a> -->
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              PROGRAMMATION INFORMATIQUE
            </a>
          </p>

          <div class="collapse" id="collapseExample1">
            <div class="card card-body">
              <p class="experience">
                <h4>Développés à l'ENI ECOLE INFORMATIQUE</h4><br>
                Développement d'un site d'enchères sous JAVA EE et SQL Server
                Analyse, conception et développement d'un site d'organisation
                d’événements d'entreprises avec JAVA EE et SQL server/ PHP et MySQL
              </p>
            </div>
          </div>
        </li>
        <li>
          <p>
          <p class="text-left">
              <h4 class="text-left">2018</h4>
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
              BILAN DE COMPETENCES
            </a>
            <div class="collapse" id="collapseExample2">
              <div class="card card-body">
                <p class="experience">
                  <h4>Méthode ORIENT'ACTION - Vannes</h4><br>
                  Réflexion Personnelles et Professionnelles
                  Orientation vers les métiers de l'informatique : développeur/codeur
                </p>
              </div>
            </div>
        <li>
          <p>
            <a class="text-left">
              <h4 class="text-left">2004 à 2018</h4>
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
              CONSEILLER REFERENT ELEVAGE
            </a>
            <div class="collapse" id="collapseExample3">
              <div class="card card-body">
                <p class="experience">
                  <h4>Bretagne Conseil Elevage Ouest
                    3
                  </h4><br>
                  Accompagnement des clients (technique et économique)
                  Assistance DSI (maintenance de l'outil informatique et participation
                  aux phases test des applications)
                </p>
              </div>
            </div>


            <?php
            include("../tools/footer.php");
            ?>