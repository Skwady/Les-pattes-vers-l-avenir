<form action="/adopting/index/<?= $_SESSION['id'] ?>" method="POST" id="adoption-form" class="container my-5 bg-gray p-5">
  <h2 class="text-center mb-4">Demande d'adoption pour <?=$animal->name ?></h2>

  <!-- Section des informations personnelles -->
  <fieldset class="border p-4 mb-4">
    <legend class="w-auto px-2">Informations personnelles</legend>

    <div class="mb-3">
      <label for="fullName" class="form-label">Nom complet :</label>
      <input type="text" id="fullName" name="fullName" class="form-control" placeholder="Votre nom et prénom" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email :</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Numéro de téléphone :</label>
      <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre numéro de téléphone" required>
    </div>
  </fieldset>

  <!-- Section sur l'environnement du foyer -->
  <fieldset class="border p-4 mb-4">
    <legend class="w-auto px-2">Votre foyer</legend>

    <div class="mb-3">
      <label for="address" class="form-label">Adresse complète :</label>
      <textarea id="address" name="address" class="form-control" rows="2" placeholder="Votre adresse" required></textarea>
    </div>

    <div class="mb-3">
      <label for="housingType" class="form-label">Type de logement :</label>
      <select id="housingType" name="housingType" class="form-select" required>
        <option value="" disabled selected>Choisissez...</option>
        <option value="house">Maison</option>
        <option value="apartment">Appartement</option>
        <option value="other">Autre</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="garden" class="form-label">Avez-vous un jardin ou un espace extérieur ?</label>
      <select id="garden" name="garden" class="form-select" required>
        <option value="" disabled selected>Choisissez...</option>
        <option value="yes">Oui</option>
        <option value="no">Non</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="otherPets" class="form-label">Avez-vous déjà d'autres animaux ?</label>
      <select id="otherPets" name="otherPets" class="form-select" required>
        <option value="" disabled selected>Choisissez...</option>
        <option value="yes">Oui</option>
        <option value="no">Non</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="petsDetails" class="form-label">Si oui, précisez le type et le nombre :</label>
      <textarea id="petsDetails" name="petsDetails" class="form-control" rows="2" placeholder="Par exemple : 1 chien, 2 chats"></textarea>
    </div>
  </fieldset>

  <!-- Section sur la motivation -->
  <fieldset class="border p-4 mb-4">
    <legend class="w-auto px-2">Votre motivation</legend>

    <div class="mb-3">
      <label for="adoptingReason" class="form-label">Pourquoi souhaitez-vous adopter cet animal ?</label>
      <textarea id="adoptingReason" name="adoptingReason" class="form-control" rows="3" placeholder="Expliquez vos motivations" required></textarea>
    </div>

    <div class="mb-3">
      <label for="experience" class="form-label">Avez-vous déjà adopté un animal auparavant ?</label>
      <select id="experience" name="experience" class="form-select" required>
        <option value="" disabled selected>Choisissez...</option>
        <option value="yes">Oui</option>
        <option value="no">Non</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="availability" class="form-label">Combien de temps pouvez-vous consacrer quotidiennement à cet animal ?</label>
      <input type="text" id="availability" name="availability" class="form-control" placeholder="Exemple : 3 heures par jour" required>
    </div>
  </fieldset>

  <!-- Bouton d'envoi -->
  <div class="text-center">
    <button type="submit" class="btn border bg-white">Envoyer ma demande</button>
  </div>
  <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
  <div class="mt-3">
      <div id="error-message" class="alert alert-danger" role="alert"></div>
      <div id="success-message" class="alert alert-success" role="alert"></div>
  </div>
</form>
