<?php
    include 'conectiondata.php';
    $c = $lang['lemot'];
    $rep = $add->query("SELECT img , $c , nom  FROM motpresident ORDER BY id" );
    while($x = $rep->fetch()){
        echo"<div class='col-sm-12 col-md-6'>";
        echo"<div class='testimonial-img'>";
        echo"<img src='img/$x[0]' alt='' class='img-fluid'>";
        echo"</div>";
        echo"</div>";
        echo"<div class='col-sm-12 col-md-6'>";
        echo"<div class='testimonial-ico'>";
        echo"<span class='ion-ios-quote'></span>";
        echo"</div>";
        echo"<div class='testimonials-content'>";
        echo"<p class='testimonial-text'>$x[1]</p>";
        echo"</div>";
        echo"<div class='testimonial-author-box'>";
        echo"<img src='img/$x[0]' alt='' class='testimonial-avatar'>";
        echo"<h5 class='testimonial-author'>$x[2]</h5>";
        echo"</div>";
        echo"</div>";
    }

?>