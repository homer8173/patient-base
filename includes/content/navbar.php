<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= $start_url ?>">Accueil</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if($u->user_group == 1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="createpatho/">Créer une pathologie</a></li>
                        <li class="divider"></li>
                        <li><a href="patient/">Liste des praticiens</a></li>
                        <li><a href="advice/">Informer un praticien</a></li>
                        <li class="divider"></li>
                        <li><a href="addpraticient/">Cr&eacute;er un praticien</a></li>
                        <li><a href="delpraticient/">Supprimer un patient</a></li>
                    </ul>
                </li> 
                <?php } if($u->user_group == 2 || $u->user_group == 1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient&egrave;le <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="patient/">Liste des patients</a></li>
                        <li><a href="advice/">Informer un patient</a></li>
                        <li class="divider"></li>
                        <li><a href="addpatient/">Cr&eacute;er un patient</a></li>
                        <li><a href="delpatient/">Supprimer un patient</a></li>
                    </ul>
                </li>                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collaborer <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="dialogue/">Informer un confr&egrave;re</a></li>
                        <li class="divider"></li>
                        <li><a href="share/">Partager un patient</a></li>
                        <li><a href="transfer/">Transferer un patient</a></li>
                    </ul>
                </li>    
                <?php } if( $u->user_group > 1) { ?>    
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Outils <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a onclick="$(document).toggleFullScreen();">Plein écran</a></li>
                        <li class="divider"></li>
                        <li><a href="export/">Exporter</a></li>
                        <li><a href="import/">Importer</a></li>
                        <li class="divider"></li>
                        <li><a href="export/">Sauvegarder localement</a></li>
                        <li><a href="restore/">Restaurer</a></li>
                    </ul>
                </li><?php } ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php if (!isset($u)) { ?>
                        <a href="login/" class="btn btn-default">Se connecter</a> 
                    <?php } else { ?>
                        <p class="navbar-text">Bienvenue <a href="account/" class="navbar-link"><?= $u->username ?></a></p>
                    </li>
                    <li>
                        <a href="messages/">Message <span class="badge">0</span></a>
                    </li>
                    <li>
                        <a href="disconnect/" class="btn btn-default">Se d&eacute;connecter</a> 
                    <?php } ?>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>