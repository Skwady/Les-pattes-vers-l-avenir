<?php 
$title = 'Liste des utilisateurs'; 
?>

<section class="container">
    <div class="text-center my-5">
        <h1>Liste des utilisateurs</h1>
    </div>
    <section class="mb-5">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Vérification</th>
                        <th>Rôle</th>
                        <th>Date de création</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user->name); ?></td>
                            <td><?= htmlspecialchars($user->firstname); ?></td>
                            <td><?= htmlspecialchars($user->email); ?></td>
                            <td><?= ($user->isVerified === 1) ? 'ok' : 'Non vérifié'; ?></td>
                            <td><?= ($user->idRole === 1) ? 'Admin' : 'Utilisateur'; ?></td>
                            <td><?= date('j/m/Y', strtotime($user->createdAt)); ?></td>
                            <td>
                                <button 
                                    class="btn btn-danger btn-sm delete-user" 
                                    data-user-id="<?= $user->id; ?>"
                                    title="Supprimer cet utilisateur">
                                    Supprimer
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</section>

<?php
$script = "deleteUsers";
?>
