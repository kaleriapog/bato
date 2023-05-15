<?php if(!empty($args['link']['url'])) : ?>

<?php 
    global $wp;
    $link = $args['link'];
    $current_link = trailingslashit($link['url']);
    $current_url = trailingslashit(home_url($wp->request));
?>

<a 
    class="button-default <?php echo !empty($args['class']) ? $args['class'] : '' ?> <?php echo $current_link == $current_url ? 'current' : '' ?>"
    href="<?php echo $link['url'] ?>" 
    title="<?php echo $link['title'] ?>"
    target="<?php echo $link['target'] ? $link['target'] : '_self' ?>"
    <?php if ($link['target'] == '_blank'): ?> rel="nofollow"<?php endif ?>
>
    <span class="button-default__link"><?php echo $link['title'] ?></span>
</a>

<?php endif ?>