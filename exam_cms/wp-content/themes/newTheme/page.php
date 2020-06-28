
<?php get_header();?>
    <div class = "container">
        <div class="page">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()): ?>
                <?php the_post();?>
                <?php
                    $args = array(
                            'title_li' =>'',
                            'child_of' =>idparent(),
                        );
                        wp_list_pages($args);
                ?>
                <?php if(has_post_thumbnail()):?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif;?>
            <?php endwhile; ?>
       <?php endif?>
    </div>
    <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
    <?php the_content()?> 
    </div>
    <?php get_footer();?>