<?php
$title = "Nos amis les chats";
$css = "adoption";
$compte = 1;
if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin') {  
    echo '<a class="btn border mt-3 mx-5 bg-gray" href="/animal/AddAnimal">Ajouter un animal</a>';
} 
?>

<?php
$counter = 1;
foreach ($animals as $animal) :?>
    <div class="<?= $counter % 2 == 0 ? '' : 'bg-gray'; ?>">
    <?php
    if ($animal->isAdopted == 0) : 
        if ($animal->idSexe == 2) : ?>
            <div class="adoption-card text-center container py-5">
                <p class="text-muted text-end me-5">
                    Nombre de demandes d'adoption :
                    <strong>
                        <?= $adoptionCounts[$animal->id] ?? 0; ?> 
                    </strong>
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-5">
                    <div class="img">
                        <img src="<?= $animal->img ?>" alt="photo du chien à adopter">
                        <div class="d-flex gap-2">
                            <a href="/animal/updateAnimal/<?= $animal->id ?>" class="btn-adopt">modifier</a>
                            <a href="/animal/deleteAnimal/<?= $animal->id ?>" class="btn-adopt">supprimer</a>
                        </div>
                    </div>
                    <div class="w-75">
                        <div class="details w-100">
                            <div class="d-flex justify-content-center align-items-center w-100">
                                <h3 class="fw-bold"><?= $animal->name ?></h3>
                                <img class="sexe" src="/assets/img/femenine.svg" alt="symbole femelle">
                            </div>
                            <p class="fw-bold"><?= $animal->race ?><br>
                                Femelle<br>
                                <?php
                                    $formattedAge = ($animal->age < 12) 
                                        ? "{$animal->age} mois" 
                                        : (intdiv($animal->age, 12) . " an" . (intdiv($animal->age, 12) > 1 ? "s" : ""));

                                    echo "$formattedAge.";
                                ?>
                                <?php if ($animal->neutered === 1) {
                                    echo "Stérilisée /";
                                } ?> <?php if ($animal->dewormed === 1) {
                                    echo "Vermifugée/";
                                } ?> <?php if ($animal->vaccinated === 1) {
                                    echo "Vaccinée";
                                } ?>
                            </p>
                            <p class="fw-bold">
                                <?= nl2br($animal->description) ?>
                            </p>
                        </div>
                        <div class="icon-btn d-flex flex-wrap align-items-center">
                            <div class="icons d-flex gap-5">
                                <div class="icon d-flex align-items-end">
                                    <img src="/assets/img/dog.png" alt="Dog icon">
                                    <?php
                                    if ($animal->dog == 1) {
                                        echo '<img src="/assets/img/V.svg" alt="icon valider">';
                                    } else {
                                        echo '<img src="/assets/img/X.svg" alt="icon refuser">';
                                    }
                                    ?>
                                </div>
                                <div class="icon d-flex align-items-end">
                                    <img src="/assets/img/cat.png" alt="Cat icon">
                                    <?php
                                    if ($animal->cat == 1) {
                                        echo '<img src="/assets/img/V.svg" alt="icon valider">';
                                    } else {
                                        echo '<img src="/assets/img/X.svg" alt="icon refuser">';
                                    }
                                    ?>
                                </div>
                                <div class="icon d-flex align-items-end">
                                    <img src="/assets/img/baby.png" alt="Child icon">
                                    <?php
                                    if ($animal->children == 1) {
                                        echo '<img src="/assets/img/V.svg" alt="icon valider">';
                                    } else {
                                        echo '<img src="/assets/img/X.svg" alt="icon refuser">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <a href="/Adopting/index/<?= $animal->id ?>" class="btn-adopt">Demande d'adoption</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="adoption-card text-center container py-5">
                <p class="text-muted text-end me-5">
                    Nombre de demandes d'adoption :
                    <strong>
                        <?= $adoptionCounts[$animal->id] ?? 0; ?> 
                    </strong>
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-5">
                    <div class="img2">
                        <img src="<?= $animal->img ?>" alt="photo du chien à adopter">
                        <div class="d-flex gap-2">
                            <a href="/animal/updateAnimal/<?= $animal->id ?>" class="btn-adopt2">modifier</a>
                            <a href="/animal/deleteAnimal/<?= $animal->id ?>" class="btn-adopt2">supprimer</a>
                        </div>
                    </div>
                    <div class="w-75">
                        <div class="details2 w-100">
                            <div class="d-flex justify-content-center align-items-center w-100">
                                <h3 class="fw-bold"><?= $animal->name ?></h3>
                                <img class="sexe" src="/assets/img/male.svg" alt="symbole male">
                            </div>
                            <p class="fw-bold"><?= $animal->race ?><br>
                                Mâle<br>
                                <?php
                                    $formattedAge = ($animal->age < 12) 
                                        ? "{$animal->age} mois" 
                                        : (intdiv($animal->age, 12) . " an" . (intdiv($animal->age, 12) > 1 ? "s" : ""));

                                    echo "$formattedAge.";
                                ?>
                                <?php if ($animal->neutered === 1) {
                                    echo "Castré /";
                                } ?> <?php if ($animal->dewormed === 1) {
                                    echo "Vermifugée/";
                                } ?> <?php if ($animal->vaccinated === 1) {
                                echo "Vaccinée";
                                } ?>
                            </p>
                            <p class="fw-bold">
                                <?= nl2br($animal->description) ?>
                            </p>
                        </div>
                        <div class="icon-btn d-flex flex-wrap align-items-center">
                            <div class="icons d-flex gap-5">
                                <div class="icon d-flex align-items-end">
                                    <img src="/assets/img/dog.png" alt="Dog icon">
                                    <?php
                                    if ($animal->dog == 1) {
                                        echo '<img src="/assets/img/V.svg" alt="icon valider">';
                                    } else {
                                        echo '<img src="/assets/img/X.svg" alt="icon refuser">';
                                    }
                                    ?>
                                </div>
                                <div class="icon d-flex align-items-end">
                                    <img src="/assets/img/cat.png" alt="Cat icon">
                                    <?php
                                    if ($animal->cat == 1) {
                                        echo '<img src="/assets/img/V.svg" alt="icon valider">';
                                    } else {
                                        echo '<img src="/assets/img/X.svg" alt="icon refuser">';
                                    }
                                    ?>
                                </div>
                                <div class="icon d-flex align-items-end">
                                    <img src="/assets/img/baby.png" alt="Child icon">
                                    <?php
                                    if ($animal->children == 1) {
                                        echo '<img src="/assets/img/V.svg" alt="icon valider">';
                                    } else {
                                        echo '<img src="/assets/img/X.svg" alt="icon refuser">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <a href="/Adopting/index/<?= $animal->id ?>" class="btn-adopt2">Demande d'adoption</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    </div>
    <?php $counter++; ?>
<?php endforeach; ?>