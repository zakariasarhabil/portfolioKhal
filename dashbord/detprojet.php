<?php include 'nav.php' ?>
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">projet</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Single Star /-->
<?php 
    include 'conectiondata.php';
    $s = $_GET['projet'];
    $c = $lang['nomprojet'];
    $m = $lang['descriptionprojet'];
    $rep = $add->query("SELECT imgprojet, $c , $m  FROM projets WHERE id = $s" );
        while($x = $rep->fetch()){
            echo"<section class='property-single nav-arrow-b'>";
            echo"<div class='container'>";
            echo"<div class='row'>";
            echo"<div class='col-sm-12'>";
            echo"<div id='property-single-carousel' class='owl-carousel owl-arrow gallery-property'>";
            echo"<div class='carousel-item-b'>";
            echo"<img src='img/$x[0]' alt=''>";
            echo"</div>";
            echo"<div class='carousel-item-b'>";
            echo"<img src='img/$x[0]' alt=''>";
            echo"</div>";
            echo"<div class='carousel-item-b'>";
            echo"<img src='img/$x[0]' alt=''>";
            echo"</div>";
            echo"</div>";
            echo"<div class='row justify-content-between'>";
            echo"<div>";
            echo"<div class='row'>";
            echo"<div class='col-sm-12'>";
            echo"<div class='title-box-d'>";
            echo"<h3 class='title-d'>$x[1]</h3>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"<div class='property-description'>";
            echo"<p class=''>$x[2]</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo"</section>";
        }
?>
<!--/ Property Single End /-->
<?php include 'footer.php' ?>