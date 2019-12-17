<?php
include("../tools/header.php");
include("../tools/menu.php");
?>

<body class="bodyformations">


    <div class="container">
        <h1>Formations</h1>

        <div class="card-columns">
            <div class="card bg-info">
                <div class="card-body text-center">
                    <IMG src="../tools/images/logo_ENI.svg" alt="ENI" title="ENI :Ecole Informatique de Nantes" /><br>
                    <p class="card-text">FORMATION DEVELOPPEUR WEB & WEB MOBILE
                        ENI - NANTES (44) <br> AVRIL à NOVEMBRE 2019</p>
                </div>
            </div>
            <div class="card bg-warning">
                <div class="card-body text-center">
                    <IMG src="../tools/images/cfta.jpg" alt="ENI" title="CFTA : Centre de Formation Technicien Agricole" /><br>
                    <p class="card-text">BTS ACSE AGRICOLE ANALYSE ET GESTION
                        CFTA - MONTFORT SUR MEU (35) <br>2000 - 2002</p>
                </div>
            </div>
        </div>
    </div>
    <div class=" centrerloadCv">
        <span> <a href="../tools/images/CvLC.pdf"></span>
        <button type="button" class="btn btn-light" onclick="alert('télécharger le cv')">TELECHARGER CV</button></span>
    </div>
</body>


<?php
include("../tools/footer.php");
?>