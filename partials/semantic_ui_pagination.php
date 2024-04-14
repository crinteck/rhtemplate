<?php $pager->setSurroundCount(5) ?>
<div class="ui pagination menu">
    <?php if ($pager->hasPreviousPage()) : ?>
        <a class="item" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
            <span aria-hidden="true"><?= lang('Pager.first') ?></span>
        </a>
        <a class="item" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
            <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
        </a>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <a class="<?= $link['active'] ? 'active item' : 'item' ?>" href="<?= $link['uri'] ?>">
            <?= $link['title'] ?>
        </a>
    <?php endforeach ?>

    <?php if ($pager->hasNextPage()) : ?>
        <a class="item" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
            <span aria-hidden="true"><?= lang('Pager.next') ?></span>
        </a>
        <a class="item" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
            <span aria-hidden="true"><?= lang('Pager.last') ?></span>
        </a>
    <?php endif ?>
</div>