<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Les Pattes vers l'Avenir est une association de protection animale qui propose des adoptions de chiens et chats, une pension pour animaux et des missions de bénévolat.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    <link href="/assets/css/default.css" rel="stylesheet">
    <?php if(isset($css)): ?>
    <link href="/assets/css/<?= $css ?>.css" rel="stylesheet">
    <?php endif; ?>
    <?php if(isset($style)): ?>
    <link href="/assets/css/<?= $style ?>.css" rel="stylesheet">
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/ammo.js/builds/ammo.wasm.js"></script>
    <title><?php if(isset($title)){echo $title;}?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg border-bottom border-gray">
        <div class="navtop container-fluid">
            <!-- Logo -->
            <a class="d-block logo-nav" href="/">
                <img src="/assets/img/logo.svg" alt="LOGO" class="mx-5">
            </a>

            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar content -->
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav w-100 d-flex justify-content-between">
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="entreesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Adoptez-nous !
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="entreesDropdown">
                            <li><a class="dropdown-item" href="/addAnimal/viewDog">Nos amis les chiens</a></li>
                            <li><a class="dropdown-item" href="/addAnimal/viewCat">Nos amis les chats</a></li>
                            <li><a class="dropdown-item" href="/addAnimal/viewChiot">Nos amis les chiots</a></li>
                            <li><a class="dropdown-item" href="/addAnimal/viewChatton">Nos amis les chattons</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pension">La pension</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/benevolat">Bénévolat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/soutenire">Soutenez-nous !</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <!-- Authenticated user links -->
                    <?php if(isset($_SESSION['id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/log/logout" onclick="return confirm('Êtes-vous sûr de vouloir vous déconnecter ?');">Déconnexion</a>
                    </li>
                    <?php else: ?>
                    <!-- Guest links -->
                    <li class="nav-item">
                        <a class="nav-link" href="/log">Connexion</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?= $contenu ?>
    </main>

    
    <footer class="footer-gaming text-center py-4 border-top border-gray">
        <!-- Modal -->
        <div class="modal fade" id="legalModal" tabindex="-1" aria-labelledby="legalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title tb" id="legalModalLabel">Informations légales</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Navigation avec onglets -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="cgu-tab" data-bs-toggle="tab" data-bs-target="#cgu" type="button" role="tab" aria-controls="cgu" aria-selected="true">
                                    CGU
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mentions-tab" data-bs-toggle="tab" data-bs-target="#mentions" type="button" role="tab" aria-controls="mentions" aria-selected="false">
                                    Mentions Légales
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="rgpd-tab" data-bs-toggle="tab" data-bs-target="#rgpd" type="button" role="tab" aria-controls="rgpd" aria-selected="false">
                                    RGPD
                                </button>
                            </li>
                        </ul>
    
                        <!-- Contenu des onglets -->
                        <div class="tab-content mt-3" id="myTabContent">
                            <!-- CGU -->
                            <div class="tab-pane fade show active tb" id="cgu" role="tabpanel" aria-labelledby="cgu-tab">
                                <h6 class="tb">Conditions Générales d'Utilisation</h6>
                                <p class="tb">
                                    Bienvenue sur notre site ! En utilisant ce site, vous acceptez les conditions suivantes :
                                </p>
                                <ul>
                                    <li class="tb">Vous vous engagez à utiliser le site de manière respectueuse, sans tenter de le perturber, de l'endommager ou d'y porter préjudice (tentatives de piratage, diffusion de contenu nuisible, etc.).
                                        Tout propos injurieux, discriminatoire ou diffamatoire est strictement interdit.</li>
                                    <li class="tb">La publication de contenus protégés par des droits d'auteur sans autorisation est interdite.
                                        Les photos ou textes contenant des propos inappropriés, violents ou à caractère pornographique sont strictement prohibés.</li>
                                    <li class="tb">Chaque utilisateur est responsable du contenu qu’il publie. En cas de non-respect des règles, votre contenu pourra être supprimé sans préavis.
                                        En cas de violation grave ou répétée, votre compte pourra être supprimé définitivement.</li>
                                    <li class="tb">Vous êtes invité à commenter de manière constructive et bienveillante.
                                        Les attaques personnelles, spam ou toute tentative de harcèlement envers le personnelle ne seront pas tolérées.</li>
                                    <li class="tb">Votre compte est personnel. Le partage de vos identifiants avec des tiers est fortement déconseillé.</li>
                                    <li class="tb">Toute infraction aux règles énoncées ci-dessus pourra entraîner :
                                        La suppression du contenu en infraction.
                                        Une suspension permanente du compte.
                                        Des actions légales en cas de préjudice grave causé au site ou aux personnelle.</li>
                                    <li class="tb">Les présentes règles sont susceptibles d’évoluer. Vous serez informé des modifications et invité à les accepter pour continuer à utiliser le site.
                                        Merci de respecter ces règles et de contribuer à faire de ce site une communauté agréable et atentionner autour des animaux !</li>
                                </ul>
                                <p class="tb">Merci de respecter ces règles pour garantir une expérience agréable à tous.</p>
                            </div>
    
                            <!-- Mentions légales -->
                            <div class="tab-pane fade" id="mentions" role="tabpanel" aria-labelledby="mentions-tab">
                                <h6 class="tb">Mentions Légales</h6>
                                <p class="tb">
                                    <strong>Nom du site :</strong>Les Pattes vers l'Avenir<br>
                                    <strong>Propriétaire :</strong>Y.V.<br>
                                    <strong>Adresse :</strong> Adresse du proprio<br>
                                    <strong>Contact :</strong> contact@pattesverslAvenir.com<br>
                                    <strong>Hébergeur :</strong> Héroku
                                </p>
                            </div> 
    
                            <!-- RGPD -->
                            <div class="tab-pane fade" id="rgpd" role="tabpanel" aria-labelledby="rgpd-tab">
                                <h6 class="tb">Règlement Général sur la Protection des Données (RGPD)</h6>
                                <p class="tb">
                                    Nous respectons votre vie privée. Les données collectées sur ce site (exemple : formulaire de contact) sont utilisées uniquement pour répondre à vos demandes ou améliorer nos services.
                                </p>
                                <p class="tb">
                                    <strong>Données collectées :</strong> Nom, prénom, email.<br>
                                    <strong>Finalité :</strong> Répondre aux demandes des utilisateurs.<br>
                                    <strong>Durée de conservation :</strong> 1 an après la dernière interaction.
                                </p>
                                <p class="tb">
                                    Vous pouvez exercer vos droits (accès, rectification, suppression) en nous contactant à l'adresse suivante : contact@pattesverslAvenir.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <!-- Texte principal -->
        <div>
            <h3>&copy; 2025 Les Pattes vers l'Avenir. Tous droits réservés.</h3>
        </div>
        <!-- Lien pour ouvrir la modal -->
        <a class="tw" href="#" data-bs-toggle="modal" data-bs-target="#legalModal">Voir les CGU, Mentions légales et RGPD</a>
    </div>
</footer>

    <?php if(isset($script)): ?>
    <script src="/assets/js/<?= $script ?>.js"></script>
    <?php endif; ?>
    <?php if(isset($scripts)): ?>
    <script src="/assets/js/<?= $scripts ?>.js"></script>
    <?php endif; ?>
    <script src="/assets/js/fetchPost.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
