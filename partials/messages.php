<?php if (!empty($errors)) : ?>
    <div class="ui error message">
        <i class="close icon"></i>
        <div class="header">
            Erreurs
        </div>
        <ul class="list">
            <?php foreach ($errors as $err) : ?>
                <li><?php echo $err; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (!empty($success)) : ?>
    <div class="ui success message">
        <i class="close icon"></i>
        <div class="header">
            Message
        </div>
        <ul class="list">
            <?php foreach ($success as $suc) : ?>
                <li><?php echo $suc; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')) : ?>
    <div class="ui error message">
        <i class="close icon"></i>
        <div class="header">
            Erreur
        </div>
        <ul class="list">
            <li><?php echo session()->getFlashdata('error'); ?></li>
        </ul>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')) : ?>
    <div class="ui success message">
        <i class="close icon"></i>
        <div class="header">
            Message
        </div>
        <ul class="list">
            <?php if (is_iterable(session()->getFlashdata('success'))) : ?>
                <?php foreach (session()->getFlashdata('success') as $err) : ?>
                    <li><?php echo $err; ?></li>
                <?php endforeach; ?>
            <?php else : ?>
                <li><?php echo session()->getFlashdata('success'); ?></li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('errors')) : ?>
    <div class="ui error message">
        <i class="close icon"></i>
        <div class="header">
            Erreurs
        </div>
        <ul class="list">
            <?php if (is_iterable(session()->getFlashdata('errors'))) : ?>
                <?php foreach (session()->getFlashdata('errors') as $err) : ?>
                    <li><?php echo $err; ?></li>
                <?php endforeach; ?>
            <?php else : ?>
                <li><?php echo session()->getFlashdata('errors'); ?></li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>