
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Duwood's family</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <!--<li>-->
                <!--<a class="page-scroll" href="#services">Camille & Marie</a>-->
                <!--</li>-->
                <?php
                if(isset($_SESSION['email'])){ // si une session users est ouverte
                    ?>
                <li>
                    <a class="page-scroll" href="#portfolio">Camille & Marie</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Liste de naissance</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">Team</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Envoyer un message</a>
                </li>
                <li>
                        <a href="deconnexion.php" >Déconnexion</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
