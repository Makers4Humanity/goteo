<?php

$sponsors = $this->model_static('Sponsor', 'getList', 'goteo');

?>

<div class="section sponsors" >
        <h2 class="title text-center">
            <?= $this->text('home-sponsors-title') ?>
        </h2>

        <ul class="img-list list-inline text-center">
        <?php if($sponsors): ?>
            <?php foreach ($sponsors as $sponsor) : ?>
                <li>
                    <a href="<?php echo $sponsor->url ?>">
                        <img alt="<?= $sponsor->name ?>" src="<?php echo $sponsor->image->getLink(226, 130, true) ?>" />
                    </a>
                </li>
            <?php endforeach ?>
        <?php endif ?>
        </ul>
        <div class="action">
                <a href="/contact" class="btn btn-pink"><?= $this->text('home-sponsors-action') ?> </a>
        </div>
</div>
