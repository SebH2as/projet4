<?php $title = 'Profil'; ?>

<?php ob_start(); ?>
    <header>
        <h2>Billet simple pour l'Alaska</h2>
        <h2>Interface administrateur</h2>
        <h2>Jean Forteroche</h2>
    </header>
    <div id="main">
        <nav>
            <a class="btn" href="index.php?action=admConnect">Episodes</a>
            <a class="btn" href="index.php?action=createEpisode">Nouvel épisode</a>
            <a class="btn active" href="index.php?action=profil">Profil</a>
            <a class="btn" href="index.php?action=disconnection">Déconnection</a>
        </nav>
        <section id="content">
            <form id="formProfil">
                <h3>pseudo:</h3>
                <input title="pseudo" class="champ" type="text" name="pseudo" id="pseudo" placeholder="Jean Forteroche" size="25"/>
                <label id="labelPseudo" for="pseudo"></label>
                <h3>Changer de mot de passe:</h3>
                <input title="pass" type="password" name="password" class="password" placeholder="" size="15"/>
                <label id="labelPass" for="pass"></label>
                <h3>Saisissez à nouveau le nouveau mot de passe:</h3>
                <input title="pass2" type="password" name="password" class="password" placeholder="" size="15"/>
                <label id="labelPass2" for="pass2"></label>
                <input type="submit" class="boutonVert" value="Valider">
            </form>
        </section>
    </div>
<?php$posts->closeCursor();?>
<?php $content = ob_get_clean(); ?>

<?php require('templates/backend/templateBack.php'); ?>