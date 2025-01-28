<?php
$title = 'Adoptions en cours';
?>

<section class="container d-flex justify-content-center align-items-center my-5">
    <div class="text-center">
        <h1 class="display-4 mb-2">Adoptions en cours</h1>
        <p class="text-muted mb-4">Découvrez les informations des candidats à l'adoption.</p>

        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0"><?= $adopting->name; ?></h5>
            </div>
            <div class="d-flex">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><strong>Nom complet :</strong> <?= $adopting->fullName; ?></li>
                        <li><strong>Email :</strong> <?= $adopting->email; ?></li>
                        <li><strong>Téléphone :</strong> <?= $adopting->phone; ?></li>
                        <li><strong>Adresse :</strong> <?= $adopting->address; ?></li>
                        <li><strong>Type de logement :</strong> <?= $adopting->housingType; ?></li>
                        <li><strong>Jardin :</strong> <?= $adopting->garden ? 'Oui' : 'Non'; ?></li>
                        <li><strong>Autres animaux :</strong> <?= $adopting->otherPets ? 'Oui' : 'Non'; ?></li>
                        <?php if ($adopting->otherPets === 1): ?>
                            <li><strong>Détails des animaux :</strong> <?= $adopting->petsDetail; ?></li>
                        <?php endif; ?>
                        <li><strong>Motif d'adoption :</strong> <?= $adopting->adoptingReason; ?></li>
                        <li><strong>Expérience avec les animaux :</strong> <?= $adopting->experience ? 'Oui' : 'Non';  ?></li>
                        <li><strong>Disponibilité :</strong> <?= $adopting->availability; ?></li>
                        <li><strong>Date de demande :</strong> <?= date('j/m/Y', strtotime($adopting->createdAt)); ?></li>
                    </ul>
                </div>
                <div class="card-body">
                    <img src="<?= $adopting->img ?>" alt="<?= $adopting->name ?>" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
