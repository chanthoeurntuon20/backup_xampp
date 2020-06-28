
<?php get_header();?>
    <div class = "container">
        <div class = "row">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()): ?>
            <!-- array in post (it appear the last post) -->
            <?php the_post();?>
            <h3><a href="<?php the_permalink();?>" class = "mt-4"><?php the_title();?></a></h3>
            <br>
            
            <?php the_content();?>  
            <?php comments_template() ?>
        <?php endwhile; ?>
        <?php else:?>
    <?php echo "the post no found, so please post your information!";
    endif;
    ?>
        </div>
    </div>
    <?php get_footer();?>