<?php
$title = 'Inscription';
$css = 'login';
?>

<section class="text-center d-flex justify-content-center align-items-center login">
    <div class="container p-4 col-12 col-md-8 col-lg-4 bg-gray">
        <h2>Inscription</h2>
        <form method="POST" class="p-3" id="loginForm" action="/register/register">
            <div class="form-group">
                <label for="firstname">prenom:</label>
                <input type="text" name="firstname" id="firstname" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <label for="name">nom :</label>
                <input type="text" name="name" id="name" class="form-control mb-3">
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" class="form-control mb-3" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmation du mot de passe :</label>
                <input type="Password" name="confirmPassword" id="confirmPassword" class="form-control mb-3" required>
            </div>
            <div class="formLogin">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <button type="submit" id="submit" class="btn border w-50">Inscription</button> 
            </div>
        </form>
        <div class="my-3" id="error-message"></div>
    </div>    
</section>