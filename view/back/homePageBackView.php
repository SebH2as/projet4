<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/styleBack.css" />
    <title>accueil-backoffice</title>
</head>
<body>
    <header>
        <h2>Billet simple pour l'Alaska</h2>
        <h2>Interface administrateur</h2>
        <h2>Jean Forteroche</h2>
    </header>
    <div id="main">
        <nav>
            <a class="btn active" href="index.php?action=admConnect">Episodes</a>
            <a class="btn" href="index.php?action=createEpisode">Nouvel épisode</a>
            <a class="btn" href="index.php?action=profil">Profil</a>
            <a class="btn" href="index.php?action=disconnection">Déconnection</a>
        </nav>
        <section id="content">
            <h1>Liste des épisodes</h1>
            <h3>(pages: <a href="episode.html" class="page onPage">1</a><a href="episode.html" class="page">2</a><a href="episode.html" class="page">3</a>)</h3>
            <div class="table">
                <div class="rowsTitle">
                    <div class="cell-title"><h4>Numéro</h4></div>
                    <div class="cell-title"><h4>Date</h4></div>
                    <div class="cell-title"><h4>Statut</h4></div>
                    <div class="cell-title"><h4>Commentaires</h4></div>
                    <div class="cell-title"><h4>Signalements</h4></div>
                </div>

            <?php foreach($tablesJoin as $episode): ?>
                <a class="rows" href="index.php?action=modifyEpisode&amp;nb=<?= $episode->chapterNumber ?>">
                    <div class="cell"><?= $episode->chapterNumber ?></div>
                    <div class="cell"><?= $episode->creationDate ?></div>
                    <div class="cell"><?php if(($episode->stat) == 1) echo 'publié'?><?php if(($episode->stat) == 0) echo 'archivé'?></div>
                    <div class="cell"><?= $episode->commentsNb ?></div>
                    <div class="cell"><?php if(($episode->reported) == 1) echo 'Oui'?><?php if(($episode->reported) == NULL) echo 'Non'?></div>
            <?php endforeach; ?>
                </a>
            </div>
            <a href="index.php?action=createEpisode" class="bouton">Créer un nouvel épisode</a>
        </section>
    </div>
    
</body>
</html>