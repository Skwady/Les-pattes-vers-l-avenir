<?php
$title = "Devenir bénévole";
$css = "benevolat";
?>

<div class="container-fluid px-0">
  <video 
    autoplay 
    loop 
    muted 
    playsinline 
    class="d-none d-md-block">
    <source src="/assets/video/benevolat.mp4" type="video/mp4">
    Votre navigateur ne supporte pas la balise video.
  </video>
</div>

<div class="container my-5">
    <h1 class="text-center mb-5">Vous souhaitez devenir bénévole au refuge "<span class="text-danger fst-italic">Les Pattes vers l'Avenir</span> " ? </h1>
    <h4 class="text-center">Vous trouverez ici toutes les informations nécessaires pour devenir bénévole</h4>
</div>

<div class="bg-gray py-5">
    <div class="container">
        <h2 class="text-center mb-5">Deux types de bénévolats s’offrent à vous :</h2>
        <div class="d-flex justify-content-around align-item-center flex-wrap">
            <div class="d-flex flex-column gap-3">
                <img src="/assets/img/pexels-leon-aschemann-734730704-20449895.svg" alt="image de chien qui joue a la bale">
                <button type="button" class="fw-bold fst-italic" data-bs-toggle="modal" data-bs-target="#volunteerFieldModal">Sur le terrain</button>
            </div>
            <div class="d-flex flex-column gap-3">
                <img src="/assets/img/pexels-ekaterina-bolovtsova-5264020.svg" alt="image de petite fille qui joue avec son chat">
                <button type="button" class="fw-bold fst-italic" data-bs-toggle="modal" data-bs-target="#volunteerModal">Au refuge</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="volunteerModal" tabindex="-1" aria-labelledby="volunteerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="volunteerModalLabel">Être bénévole dans un refuge pour chiens et chats</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>C’est offrir son temps, son énergie et son amour pour améliorer le quotidien des animaux en attente d’un foyer. Voici les missions principales que vous serez amené(e) à réaliser au sein du refuge, sans intervention sur le terrain :</p>

        <h6>1. Soins et bien-être des animaux :</h6>
        <ul>
          <li>Nettoyer les espaces de vie (cages, boxes, litières, etc.) pour garantir leur hygiène et leur confort.</li>
          <li>Fournir de la nourriture et de l’eau fraîche, en respectant les besoins spécifiques de chaque animal.</li>
          <li>Brosser et toiletter les animaux pour leur offrir un moment de bien-être.</li>
          <li>Jouer et interagir avec eux pour stimuler leur sociabilité et réduire leur stress.</li>
        </ul>

        <h6>2. Sociabilisation et réconfort :</h6>
        <ul>
          <li>Apporter de l’affection et de la compagnie aux animaux, notamment à ceux qui sont timides ou traumatisés.</li>
          <li>Participer à des séances de jeux pour stimuler les chiens et les chats.</li>
          <li>Observer leur comportement pour signaler d’éventuels problèmes de santé ou de stress aux responsables du refuge.</li>
        </ul>

        <h6>3. Aide à l’organisation quotidienne :</h6>
        <ul>
          <li>Réapprovisionner les stocks (nourriture, produits d’hygiène, jouets, etc.).</li>
          <li>Ranger et organiser les espaces communs pour maintenir un environnement accueillant.</li>
          <li>Préparer les espaces pour les visites des adoptants potentiels.</li>
        </ul>

        <h6>4. Participation aux démarches administratives :</h6>
        <ul>
          <li>Aider à tenir des registres précis des animaux (arrivées, soins prodigués, suivis).</li>
          <li>Répondre aux questions des visiteurs ou guider les adoptants potentiels lors de leurs rencontres avec les animaux.</li>
        </ul>

        <h6>5. Soutien moral et ambiance positive :</h6>
        <ul>
          <li>Collaborer avec l’équipe pour maintenir un esprit solidaire et bienveillant.</li>
          <li>Encourager les visiteurs à s’investir eux aussi en tant que bénévoles ou à soutenir le refuge.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="volunteerFieldModal" tabindex="-1" aria-labelledby="volunteerFieldModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="volunteerFieldModalLabel">Être bénévole sur le terrain pour un refuge de chiens et de chats</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>C’est jouer un rôle essentiel en dehors du refuge pour soutenir les animaux, sensibiliser le public et participer activement à leur bien-être. Voici les missions principales que vous serez amené(e) à réaliser sur le terrain, en dehors des murs du refuge :</p>

        <h6>1. Participation aux événements de sensibilisation et d'adoption :</h6>
        <ul>
          <li>Représenter le refuge lors d’événements publics (marchés, foires, journées portes ouvertes, etc.).</li>
          <li>Présenter les animaux à adopter et répondre aux questions des potentiels adoptants.</li>
          <li>Sensibiliser le public sur la cause animale, les enjeux de l’adoption et les actions du refuge.</li>
        </ul>

        <h6>2. Collectes de fonds et de dons :</h6>
        <ul>
          <li>Organiser et participer à des collectes de nourriture, de jouets ou de matériel (litières, couvertures, etc.) dans des magasins partenaires ou lors d’événements.</li>
          <li>Encourager les dons financiers en expliquant l’importance des ressources pour le fonctionnement du refuge.</li>
          <li>Distribuer des flyers ou des supports informatifs pour promouvoir le refuge et ses besoins.</li>
        </ul>

        <h6>3. Sauvetages et transports :</h6>
        <ul>
          <li>Accompagner les équipes du refuge lors de sauvetages d’animaux en détresse (avec l’autorisation et la formation nécessaires).</li>
          <li>Assurer le transport des animaux vers des vétérinaires, des familles d’accueil ou des adoptants.</li>
          <li>Réaliser des livraisons de matériel ou de nourriture pour des missions spécifiques.</li>
        </ul>

        <h6>4. Visites à domicile des potentiels adoptants :</h6>
        <ul>
          <li><strong>Évaluer le domicile :</strong> Vérifier que le logement est suffisamment spacieux et sécurisé (absence de dangers pour l’animal, espace extérieur sécurisé si nécessaire).</li>
          <li><strong>Observer les conditions de vie :</strong> Échanger avec les adoptants sur leur style de vie, leur disponibilité, et leur capacité à répondre aux besoins spécifiques de l’animal.</li>
          <li><strong>Conseiller les adoptants :</strong> Fournir des recommandations pour aménager leur domicile en faveur du bien-être de l’animal (choix des espaces de repos, accès à l’extérieur, etc.).</li>
          <li><strong>Rapporter les observations :</strong> Rédiger un compte-rendu détaillé pour le refuge, qui décidera si l’adoption peut être validée.</li>
        </ul>

        <h6>5. Actions de sensibilisation locale :</h6>
        <ul>
          <li>Distribuer des brochures et sensibiliser sur les bonnes pratiques de soin animalier (stérilisation, vaccinations, etc.).</li>
          <li>Informer sur les responsabilités d’un propriétaire d’animal de compagnie.</li>
          <li>Travailler avec des écoles ou des associations pour organiser des ateliers pédagogiques sur la protection animale.</li>
        </ul>

        <h6>6. Surveillance et aide aux animaux errants :</h6>
        <ul>
          <li>Repérer et signaler les animaux errants nécessitant des soins ou un placement au refuge.</li>
          <li>Fournir de la nourriture ou de l’eau dans les zones identifiées, en respectant les consignes du refuge.</li>
          <li>Aider à localiser les propriétaires d’animaux perdus grâce aux outils de communication du refuge.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="container my-5 text-center">
    <h4 class="mb-5 fst-italic">Votre rôle est précieux Que vous soyez là pour chouchouter nos pensionnaires au refuge ou pour aider sur le terrain, chaque action compte. Ensemble, nous construisons un avenir pour les chiens et chats du refuge. Parce que seul, on va plus vite, mais ensemble, on va plus loin. Si vous souhaitez des informations supplémentaires, contactez-nous directement au 07.49.00.00.00. 
    Rejoignez-nous et devenez acteur de cette belle mission !</h4>
    <div class="d-flex justify-content-around align-item-center flex-wrap">
        <img src="/assets/img/pexels-blue-bird-7210455.svg" alt="image de femme qui joue avec son chien">
        <img src="/assets/img/pexels-blue-bird-7210698.svg" alt="main d'une femme et patte de chien">
        <img src="/assets/img/pexels-cottonbro-6568956.svg" alt="image d'une femme et son chien">
    </div>
</div>