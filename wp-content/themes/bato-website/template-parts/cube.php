<?php
    $sides = [
        'back',
        'top',
        'bottom',
        'left',
        'right',
        'front',
    ];
?>

<div class="block-cube-small">
    <div class="fallback-stage"></div>
    <div class="container">
        <div class="stage">
            <a class="cube" href="<?php echo home_url('contact') ?>">
                <?php foreach($sides as $s) : ?>
                    <span class="<?php echo $s ?>"><span class="text-only"><?php _e('START A PROJECT', 'theme'); ?></span></span>
                <?php endforeach ?>
            </a>
        </div>
    </div>
</div>