<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arcadia est un zoo dans la fôret de Brocéliande en bretagne venez découvrir nos habitats et leurs animaux">
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
                            <li><a class="dropdown-item" href="/addAnimal/viewCat">Nos amis les chat</a></li>
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
    <div class="container">
        <!-- Texte principal -->
        <h3>&copy; 2025 Les Pattes vers l'Avenir. Tous droits réservés.</h3>

        <!-- Liens CGU, RGPD, Mentions légales -->
        <div class="legal-links mt-4">
            <a href="/cgu" class="legal-link">CGU</a>
            <span>|</span>
            <a href="/rgpd" class="legal-link">RGPD</a>
            <span>|</span>
            <a href="/mentions-legales" class="legal-link">Mentions légales</a>
        </div>
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
