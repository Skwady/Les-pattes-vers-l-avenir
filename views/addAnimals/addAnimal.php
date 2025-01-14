<?php
    $title = "Ajouter un animal";
?>

<div class="container bg-gray p-5 my-5 rounded-5">
    <h2 class="text-center">Ajouter un animal</h2>
    <form action="/addAnimal/addAnimal" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="race" class="form-label">race</label>
            <input type="text" class="form-control" id="race" name="race" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Âge</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image de l'animal</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="idRace" class="form-label">Espece</label>
            <select class="form-control" id="idRace" name="idRace" required>
                <?php foreach ($races as $race): ?>
                    <option value="<?= $race->id ?>"><?= $race->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="idSexe" class="form-label">sexe</label>
            <select class="form-control" id="idSexe" name="idSexe" required>
                <?php foreach ($sexes as $sexe): ?>
                    <option value="<?= $sexe->id ?>"><?= $sexe->type ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="row mb-3 border rounded w-25 mx-1">
            <div>
                <label for="compagny" class="form-label">Compagnie</label>
            </div>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="children" value="1">
                    <label class="form-check-label" for="gridCheck1">Enfant</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck2" name="cat" value="1">
                    <label class="form-check-label" for="gridCheck2">Chat</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck3" name="dog" value="1">
                    <label class="form-check-label" for="gridCheck3">Chien</label>
                </div>
            </div>
        </div>
        <div class="row mb-3 border rounded w-25 mx-1">
            <div>
                <label for="compagny" class="form-label">Medicale</label>
            </div>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck4" name="vaccinated" value="1">
                    <label class="form-check-label" for="gridCheck4">Vacciné(e)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck5" name="neutered" value="1">
                    <label class="form-check-label" for="gridCheck5">castré/stereliser</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck6" name="dewormed" value="1">
                    <label class="form-check-label" for="gridCheck6">vermifugé(e)</label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Histoire/caractère/besoins</label>
            <textarea type="text" class="form-control" id="description" name="description" required></textarea>
        </div>
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <button type="submit" class="btn border bg-white">Ajouter</button>
    </form>
    <div class="error"></div>
</div>