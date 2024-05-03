<?php get_header();
while (have_posts()) {
    the_post();
    pageBanner();
?>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo site_url('/program'); ?>"><i class="fa fa-home" aria-hidden="true"></i>All program</a> <span class="metabox__main"> <?php the_title() ?></span>
            </p>
        </div>
        <div class="generic-content">
            <?php the_field('main_body_content') ?>

        </div>

        <?php
        $relatedProfessor = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type'      => 'professor',
            'orderby'        => 'title',
            'order'          => 'ASC',
            'meta_query'    => array(
                array(
                    'key'     => 'related_programs',
                    'compare' => 'LIKE',
                    'value'   =>  '"' . get_the_ID() . '"',

                )
            )
        ));

        if ($relatedProfessor->have_posts()) {
            echo "<hr class=' section-break'> ";
            echo "<h2 class='headline headline--medium'> " . get_the_title() . " Professors</h2>";
            echo "<ul class='professor-cards'> ";
            while ($relatedProfessor->have_posts()) {
                $relatedProfessor->the_post(); ?>
                <li class="professor-card__list-item">
                    <a class="professor-card" href="<?php echo the_permalink() ?>">
                        <img class="professor-card__image" src="<?php the_post_thumbnail_url('professorLandscape') ?>" alt="">
                        <span class="professor-card__name"><?php the_title(); ?></span>
                    </a>
                </li>

        <?php }
            wp_reset_postdata();
            echo "</ul> ";
        }


        $today = date('Ymd');
        $homePageEvents = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type'      => 'event',
            'meta_key'       => 'event_date',
            'orderby'        => 'mata_value_num',
            'order'          => 'ASC',
            'meta_query'    => array(
                array(
                    'key'     => 'event_date',
                    'compare' => '>=',
                    'value'   => $today,
                    'type'    => 'numeric',
                ),
                array(
                    'key'     => 'related_programs',
                    'compare' => 'LIKE',
                    'value'   =>  '"' . get_the_ID() . '"',

                )
            )
        ));

        if ($homePageEvents->have_posts()) {
            echo "<hr class=' section-break'> ";
            echo "<h2 class='headline headline--medium'>Upcoming " . get_the_title() . " Events..</h2>";
            while ($homePageEvents->have_posts()) {
                $homePageEvents->the_post();
                get_template_part('template-parts/content-event');
            }
            wp_reset_postdata();
        }

        ?>

    </div>
<?php }
get_footer(); ?>