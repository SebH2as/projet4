<?php $title = 'Profil'; ?>

    <section id="content">
        <h1>Vous pouvez changer ici votre pseudo et votre mot de passe</h1>
        <h3><em>Votre mot de passe doit avoir un nombre de caractère compris entre 8 et 50.</em></h3>
        <h3><em>Il doit comporter au moins une minuscule, une majuscule, un caractère spécial et un chiffre.</em></h3>
        <form id="formProfil" action="index.php?action=reset" method="post">
            <input type="hidden" name="csrf" value="<?php echo $token ?>">
            <h3>pseudo</h3>
            <input title="pseudo" class="champ" type="text" name="pseudo" id="pseudo" placeholder="" size="25"/>
            <label id="labelPseudo" for="pseudo"></label>
            <h3>Ancien mot de passe</h3>
            <input title="passOld" type="password" name="passOld" class="password" placeholder="" size="50"/>
            <label id="labelPass" for="pass"></label>
            <h3>Nouveau de mot de passe</h3>
            <input title="pass" type="password" name="pass" class="password" placeholder="" size="50"/>
            <label id="labelPass" for="pass"></label>
            <h3>Ressaisissez le nouveau mot de passe</h3>
            <input title="pass2" type="password" name="pass2" class="password" placeholder="" size="50"/>
            <label id="labelPass2" for="pass2"><?php if(isset($error)) echo $error ?></label>
            <input type="submit" name="reset" class="boutonVert" value="Valider">
        </form>
    </section>

