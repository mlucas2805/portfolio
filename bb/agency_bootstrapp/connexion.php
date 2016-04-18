<?php
session_start();
include('entete.php');
include('includes/connect_db.php');
?>

<script>
    function control()
    {
        var email = document.getElementById('login');
        if(email.value == '')
        {
            alert('Attention le champ email doit être renseigné !');
            email.focus();
            return false;
        }
        return true;
    }
</script>
<?php
if(!isset($_POST['login']))
{
?>
<!-- Header avec background-->
<header>
    <div class="container">
        <div class="intro-text">

        </div>
    </div>
</header>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <div class="main">

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-1">

                            <h1 class="intro-heading animation fadeInDown">Connectez vous</h1>
                            <hr>
                            <h2 class="intro-lead-in animation fadeInUp">Accédez au site grâce à votre e-mail</h2>

                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="connexion" role="form" class="form-horizontal" method="POST" accept-charset="utf-8" onsubmit="return control();">
                                <div class="form-group">
                                    <div class="col-md-8"><input name="login" placeholder="Entrer votre email" class="form-control" type="text" id="login"/></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-0 col-md-8"><input class="btn btn-success btn btn-success" type="submit" value="Connexion"/></div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php }
    else
    {
        $login = $_POST['login'];

        //echo 'indentifiant = '.$login;
        /* 	on va se connecter à la base de données et vérifier que les variables correspondent à un utilisateur enregistré	base de données = bebe, la table user_tbl */

        $sql ="SELECT id_users, name_users, email_users	FROM users WHERE email_users='".$login."'";
        //echo $sql;
        //$req = $bdd->query($sql);
        $req = $bdd->prepare($sql);
        $req->execute() or die(print_r($bdd->errorInfo()));
        //$req->execute() or die(print_r('impossible de se connecter'));
        //echo '<!-- remplissage à partir de la base de données -->';
        while($ligne = $req->fetch(pdo::FETCH_OBJ))
        {
            $idUsers = $ligne->id_user;
            $name = $ligne->name_users;
            $email = $ligne->email_users;

            $_SESSION['id']        = $idUsers;
            $_SESSION['nom']       = $name;
            $_SESSION['email']     = $email;

        }

        if(isset($_SESSION['email']))
        {
            var_dump($email);
            //echo $_SESSION['prenom'].', vous etes connecté';
            header('location: index.php?message=1727'); //attention 1727-> connexion
        }
        else //if(!isset($_SESSION['email']))
        {
            header('location: connexion.php?message=1727'); //attention 1727-> connexion
        }
    }

    include('pied.php');
    ?>

