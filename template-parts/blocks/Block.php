<?php 
    extract($fields);
?> 
<section class="<?= $classes ?>">
    <?php include(get_theme_file_path("/template-parts/blocks/{$slug}.php")); ?>
</section>