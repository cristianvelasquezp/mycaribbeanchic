<?php
get_header();
$hero = get_field('background_image');
?>
    <section class="hero hero--full hero--sections" style="background-image: linear-gradient(to right bottom,rgba(133, 117, 77, .7), rgba(119, 102, 66, .7)), url(<?php echo $hero['sizes']['page_banner'] ?>)">
        <div class="container">
            <div class="row">
                <div class="text-box">
                    <h1 class="heading-primary heading--hero"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();