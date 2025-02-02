<?php
    $title = "Accueil";
    $css = "acceuil";
?>
<div class="landing-page">
    <div class="pattedechats1">
        <img src="/assets/img/pattedechats1.svg" alt="patte de chat">
    </div>
    <h2 class="text-center title">“Un foyer pour chaque patte, un avenir pour chaque coeur”</h2>
    <div class="w-100 d-flex justify-content-center align-items-center">
        <img class="imageprésentation" src="/assets/img/imageprésentation.svg" alt="photo d'un chien avec une pancarte d'adoptions">
    </div>
    <div class="logo">
        <img src="/assets/img/logo.svg" alt="logo">
        <p class="p-logo">“Les pattes vers l’avenir”</p>
    </div>
    
</div>

<div class="bg-gray mt-5">
    <div class="container py-5">
        <h1 class="text-center title mb-3">Bienvenue au Refuge “<span>Les Pattes vers l'Avenir</span>”</h1>
        <p class="text-center present">Un endroit empreint d’amour, de dévouement et de compassion, où chaque animal trouve un abri, une voix, et une chance de croire à nouveau en l’avenir.<br><br>

    Fondé le 16 septembre 2023, notre refuge est né d’un profond engagement envers ceux qui, souvent oubliés ou maltraités, méritent pourtant le plus beau des destins.<br><br>

    Nichés dans le Sud de la France, au cœur d’une douce plaine boisée, nous avons à cœur d’offrir bien plus qu’un refuge. Nous proposons un havre de paix, un lieu où chaque chien et chaque chat peut guérir de ses blessures, qu’elles soient visibles ou invisibles. Ici, ils ne sont pas de simples pensionnaires : ce sont des êtres précieux, uniques, qui méritent amour, respect et tendresse.<br><br>

    Aujourd’hui, 24 chiens et 18 chats partagent notre quotidien. Chacun d’eux porte une histoire parfois douloureuse, mais aussi un immense potentiel de résilience. Notre rôle est de leur offrir des soins attentionnés, des moments de joie et des caresses réconfortantes, pour les aider à retrouver leur dignité et leur confiance. Chaque regard plein d’espoir, chaque progrès, nous rappelle pourquoi nous faisons ce que nous faisons.<br><br>

    Mais notre mission ne s’arrête pas là. Nous rêvons de voir chacun d’eux trouver une famille aimante qui saura les accueillir, les chérir et leur offrir le foyer qu’ils méritent tant. En attendant ce jour, nous sommes là, avec tout notre cœur, pour être leur soutien, leur refuge, et leur avenir.<br><br>

    Rejoignez-nous dans cette belle aventure. Ensemble, nous pouvons transformer les larmes en sourires et offrir à ces âmes innocentes une vie remplie d’amour.</p>
    </div>
</div>

<div>
    <div class="w-100 fresque"></div>
    <div class="container d-flex justify-content-center align-items-center gap-5 flex-wrap py-5">
        <div>
            <img class="veto" src="/assets/img/veto.svg" alt="vétérinaire">
        </div>
        <div class="text">
            <h2 class="text-center mb-5">Un Refuge Porté par des Cœurs Dévoués !</h2>
            <p class="text-center">
                Au Refuge <span>“Les Pattes vers l'Avenir”</span>, nous devons tout à notre formidable équipe de bénévoles et à notre vétérinaire dévoué.<br><br>

                Leur engagement sans faille et leur passion pour le bien-être animal sont la force qui anime chaque jour notre refuge.<br><br>

                Grâce à leurs soins attentifs, à leur énergie et à leur amour, nos pensionnaires retrouvent peu à peu confiance et sérénité. Ils sont les artisans de chaque petite victoire, et sans eux, rien de tout cela ne serait possible.<br><br>

                Un immense merci à ces cœurs généreux qui donnent tant pour offrir un avenir meilleur à nos compagnons à quatre pattes.
            </p>
        </div>
    </div>
    <div class="w-100 fresque2"></div>
</div>

<div id="carouselExample" class="carousel slide bg-gray py-5">
  <div class="carousel-inner container">
    <?php foreach($avis as $key => $value): ?>
        <?php if($value->validated === true) : ?>
        <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <img src="<?= $value->image ?>" class="d-block w-25" alt="image du commentaire">
                <div class="w-50 p-5 bg-white text-center">
                    <p><?= $value->message ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

    <?php if(isset($_SESSION['id'])): ?>
        <div class="d-flex justify-content-center mt-5">
            <button class="btn btn-secondary" id="toggleFormButton">Ajouter un avis</button>
        </div>
        <div class="container mt-4">
            <form action="/main/addAvis/<?= $_SESSION['id'] ?>" method="post" class="d-none" enctype="multipart/form-data" id="formAvis">
                <div class="mb-3">
                    <label for="message" class="form-label">Votre avis</label>
                    <textarea name="message" id="message" class="form-control" rows="5" placeholder="Rédigez votre avis ici..."></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Votre photo</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                </div>
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-secondary">Envoyer</button>
                </div>
                <div id="error-message" class="alert alert-danger" role="alert"></div>
                <div id="success-message" class="alert alert-success" role="alert"></div>
            </form>
        </div>
    <?php endif; ?>
</div>

<?php
$scripts = 'formAvis';