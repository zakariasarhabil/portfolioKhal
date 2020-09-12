<?php
    include 'conectiondata.php';
    $c = $lang['nomprojet'];
    $rep = $add->query("SELECT id,imgprojet, $c  FROM projets ORDER BY id  DESC LIMIT 3" );
        while($x = $rep->fetch()){
            $s=$x[0];
            echo"<form action='detprojet.php' method='GET'>";
            echo"<div class='carousel-item-b'>";
            echo"<div class='card-box-a card-shadow'>";
            echo"<div  class='img-box-a'>";
            echo"<img style='width:100%; height:300px;' src='img/$x[1]' alt='' class='img-a img-fluid'>";
            echo"</div>";
            echo"<div class='card-overlay'>";
            echo"<div class='card-overlay-a-content'>";
            echo"<div class='card-header-a'>";
            echo"<h2 class='card-title-a'>
                $x[2] 
                </h2>";
            echo"</div>";
            echo"<div class='card-body-a'>";
            echo"<input type='hidden' name='projet' value='$s'>";
            echo"<input  type='submit' class='btn btn-success ' value='show more'>
                <span class='ion-ios-arrow-forward'></span>
                </a>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</form>";
        }
?>