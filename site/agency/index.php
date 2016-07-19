<?php
//session_start();
include('entete.php');
include('SocialMedia.php');
?>
<!-- Header avec background-->
<header>
    <div class="container" id="top">
        <div class="row intro-text">
            <section id="intro">
                <h2 class="intro-heading animation fadeInDown">Marie<span class="name">Lu-K</span></h2>
                <hr class="small">
                <h3 class="intro-lead-in animation fadeInUp">Front-end & UI DEVELOPER</h3>
            </section>
            <a href="#portfolio" class="page-scroll btn btn-xl">Suivez moi...</a>
        </div>
    </div>
</header>

<!-- Camille & Marie Section
<section id="services">
</section>-->

<?php
include('portfolio.php');

include('about-list.php');
include('contact.php');
include('pied.php');
?>