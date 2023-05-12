<?php 
if(!empty($args['force'])) {
    $blocks = get_field('blocks', 'force');
} elseif (!empty($args['fields'])) {
    $blocks = $args['fields']['blocks']; 
} elseif (is_category() || is_tax()) {
    $blocks = get_field('blocks', get_queried_object()); 
} elseif (isset($post)) {
    $blocks = get_field('blocks', $post->ID); 
}

?>

<?php if (!empty($blocks)): ?>
    <?php 
        foreach($blocks as $block) {
            $blockname = str_replace("_", "-", $block['acf_fc_layout']);
            get_template_part(
                'sections/' . $blockname, 
                NULL, 
                ['fields' => $block, 'section' => $blockname,]
            ); 
        }
    ?>
<?php elseif(empty($args['force'])): ?>
    <section class="page-content">
        <div class="page-content__wrapper wrapper">
            <?php the_content(); ?>
        </div>
    </section>
<?php endif ?>
