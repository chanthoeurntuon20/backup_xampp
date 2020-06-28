<?php if(have_posts()):?>
<div class="archive-post">
    <?php while(have_posts()):the_post();?>
    <h4>
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
    </h4>
    <p><?php the_author();?></p>
    <p><?php the_content();?></p>
<?php endwhile;?>
</div>
<?php else:echo "No post found"; ?>
<?php endif;?>