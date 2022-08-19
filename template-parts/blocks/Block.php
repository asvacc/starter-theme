<?php 
    extract($fields);
?>
<section class="block <?= $classes ?>">
    <?php include(get_theme_file_path("/template-parts/blocks/{$slug}.php")); ?>
</section>