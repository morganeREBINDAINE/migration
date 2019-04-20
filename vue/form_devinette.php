<div id="container">
    <h2>Ajouter une devinette</h2>

    <form action="<?= HOST ?>/ajout" method="post">

        <?php if(!empty($devinette->getId())):?>
            <input type="hidden" name="id" value="<?= $devinette->getId() ?>"/>
        <?php endif;?>

        Titre : <input type="text" name="name" value="<?= $devinette->getName() ?>"/><br/>
        Question : <textarea name="question" ><?= $devinette->getQuestion() ?></textarea><br/>
        Answer : <textarea name="answer"><?= $devinette->getAnswer() ?></textarea><br/>
        <input type="submit" value="ajouter"/>
    </form>

</div>
