<?php
get_header();
?>
<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-1-of-2">
                <h1 class="heading-tertiary heading-main"><?php the_title() ?></h1>
                <?php the_content() ?>
            </div>
        </div>
    </div>
</main>
<?php

get_footer();