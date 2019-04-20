    <div id="container">
           <h2>Liste des devinettes</h2>

            <?php foreach($devinettes as $devinette):?>
                <div class="question">
                    <h3><?= $devinette->getName() ?></h3>
                    <?= $devinette->getQuestion() ?>
                    <hr/>
                    <button style="">
                        <a href="<?= HOST ?>/create/post-<?= $devinette->getId() ?>">
                            modifier
                        </a>
                        <form action="<?= HOST ?>/delete/post-<?= $devinette->getId() ?>" method="post">
                          <input type="hidden" name="id" value="<?= $devinette->getId() ?>">
                          <button type="submit">effacer</button>
                        </form>
                    </button>
                    <button class="deleteButton" style="display:none;">
                    </button>
                    <button class="showAnswer">
                        Voir la réponse
                    </button>
                    <div class="divAnswer">
                        <?= $devinette->getAnswer() ?>
                    </div>
                </div>
            <?php endforeach;?>

    </div>
