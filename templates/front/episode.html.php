<?php $title = $episode->title; ?>

    <section>
    
        <h1 id="titre">Billet simple pour l'Alaska</h1>
        <h3>Episode n°<?= $episode->chapterNumber ?></h3>
        <h3>Publié <?= $episode->date ?></h3>
        <div class="backNext<?php if($totalpages < 2) echo 'Hidden'?>">
            <a href="index.php?action=episodePage&amp;currentpage=<?= $currentpage - 1?>&amp;#titre" class="<?php if($currentpage === 1) echo 'hidden'?>"><div class="left"></div>Episode précédent</a>
            <span class="currentPage"><?='Episode ' . $currentpage . '/' . $totalpages?></span>
            <a href="index.php?action=episodePage&amp;currentpage=<?= $currentpage + 1?>&amp;#titre" class="<?php if($currentpage === $totalpages ) echo 'hidden' ?>">Episode suivant<div class="right"></div></a>
        </div>
        <h2><?= $episode->title ?></h2>
        
        <div id="chapitre"><?= $episode->content ?></div>
        
        <div class="backNext<?php if($totalpages < 2) echo 'Hidden'?>">
            <a href="index.php?action=episodePage&amp;currentpage=<?= $currentpage - 1?>&amp;#titre" class="<?php if($currentpage === 1) echo 'hidden'?>"><div class="left"></div>Episode précédent</a>
            <span class="currentPage"><?='Episode ' . $currentpage . '/' . $totalpages?></span>
            <a href="index.php?action=episodePage&amp;currentpage=<?= $currentpage + 1?>&amp;#titre" class="<?php if($currentpage === $totalpages ) echo 'hidden' ?>">Episode suivant<div class="right"></div></a>
        </div>
    </section>
    <section class="comments">
        <h2 id="headCom">Commentaires</h2>

        <?php foreach($comments as $com): ?>
        <div class="comment">
            <span><?= $com->commentDate ?></span><span>par <b><?= htmlspecialchars($com->author) ?></b></span>
            <p class="content"><?= htmlspecialchars($com->comment) ?></p>
            <a href="index.php?action=report&amp;id=<?= $com->id ?>&amp;rp=<?= $com->report ?>&amp;postid=<?= $com->post_id ?>" type="submit" class="<?php if(($com->report) < 24) {echo 'reporting';} else {echo 'reported';}?>"><?php if(($com->report) > 0 && ($com->report)< 24) {echo 'Signalé ',  $com->report, ' fois';} if(($com->report) > 23) {echo 'Maximum de signalements atteint';} if(($com->report) < 1) {echo 'Signaler';}?></a>
        </div>
        <?php endforeach; ?>

        <form id="makeComment" action="index.php?action=addComment&amp;currentpage<?= $currentpage ?>&amp;nb=<?= $episode->chapterNumber ?>&amp;id=<?= $episode->post_id ?>" method="post">
            <h2>Laissez moi un commentaire</h2>
            <input title="author" class="champ" type="text" name="author" id="author" placeholder=" Votre pseudo" size="15"/>
            <label id="labelAuthor" for="author"><?php echo $error ?></label>
            <p>Votre commentaire</p>
            <textarea title="comment" name="comment" id="comment" cols="40" rows="5"></textarea>
            <label id="labelComment" for="comment"></label>
            <input type="submit" class="bouton" value="envoyer">
        </form>
    </section>


    