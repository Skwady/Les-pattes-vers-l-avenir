<?php 
$title = 'Adoptions en cours'; 
?>

<section class="container">
    <div class="text-center my-5">
        <h1>Adoptions en cours</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>Nom complet</th>
                    <th>Raison d'adoption</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($adopting as $adopt): ?>
                    <tr>
                        <td><?= $adopt->fullName; ?></td>
                        <td><?= $adopt->adoptingReason; ?></td>
                        <td>
                            <a href="/admin/view/<?= $adopt->id; ?>" 
                               class="btn btn-primary btn-sm"
                               title="Voir la demande">
                                Voir la demande
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
