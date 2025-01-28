<?php $title = "Validation des avis"; ?>

<div class="container my-5">
    <h1 class="text-center">Validation des avis</h1>

    <?php if (empty($avis)): ?>
        <p class="text-muted text-center">Aucun avis en attente de validation.</p>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th>Utilisateur</th>
                    <th>Message</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($avis as $a): ?>
                    <tr class="text-center">
                        <?php foreach ($users as $user): ?>
                            <?php if ($a['userId'] == $user->id): ?>
                                <td><?= htmlspecialchars($user->firstname . ' ' . $user->name); ?></td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <td class="text-start"><?= htmlspecialchars($a['message']); ?></td>
                        <td>
                            <?php if (!empty($a['image'])): ?>
                                <img src="<?= htmlspecialchars($a['image']); ?>" width="50">
                            <?php endif; ?>
                        </td>
                        <td><?= date('d/m/Y H:i', $a['createdAt']->toDateTime()->getTimestamp()); ?></td>
                        <td>
                            <button class="btn btn-success validate-btn" data-id="<?= $a['_id']; ?>">✔ Valider</button>
                            <button class="btn btn-danger delete-btn" data-id="<?= $a['_id']; ?>">X Supprimer</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<div class="container my-5">
    <h1 class="text-center">Gestion des avis</h1>

    <?php if (empty($allAvis)): ?>
        <p class="text-muted text-center">Aucun avis en attente de validation.</p>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th>Utilisateur</th>
                    <th>Message</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allAvis as $avi): ?>
                    <tr class="text-center">
                        <?php foreach ($users as $user): ?>
                            <?php if ($avi['userId'] == $user->id): ?>
                                <td><?= htmlspecialchars($user->firstname . ' ' . $user->name); ?></td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <td class="w-50 text-start"><?= htmlspecialchars($avi['message']); ?></td>
                        <td>
                            <?php if (!empty($avi['image'])): ?>
                                <img src="<?= htmlspecialchars($avi['image']); ?>" width="100">
                            <?php endif; ?>
                        </td>
                        <td><?= date('d/m/Y H:i', $avi['createdAt']->toDateTime()->getTimestamp()); ?></td>
                        <td>
                            <button class="btn delete-btn" data-id="<?= $avi['_id']; ?>">❌</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php
$script = "avis";
