
    <?php get_header();?>
    <div class="container">
        <div class="jumbotron text-center mt-5">
                    <h1>Welcom home page</h1>
                    <?php if(is_active_sidebar('showcase')):?>
                    <?php dynamic_sidebar('showcase');?>
                <?php endif ;?>
                    
        </div>

        <div class="content_page">
            <?php if(have_posts()):?>
                    <?php while(have_posts()):?>
                        <?php the_post();?>
                        <?php if($post->post_parent > 0):?>
                        <?php
                            $args = array(
                                'title_li' =>'',
                                'child_of' =>idparent(),
                            );
                            wp_list_pages($args);
                        ?>
                    <?php endif ;?>
                        
                    <?php endwhile ;?>
                <?php endif ;?>
                <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                <?php the_content()?> 
    </div>
    <div class="row ">
    <div class="col-12 col-md-4">
             <?php if(is_active_sidebar('box1')):?>
                <?php dynamic_sidebar('box1');?>
            <?php endif ;?>
       </div>     
       <div class="col-12 col-md-4">
            <h5 >Our team</h5>
            <p>Responsibility</p>
            <p>Team work</p>
            <p>Helpfull</p>
            <p>Smile and happy</p>
            
             <?php if(is_active_sidebar('box2')):?>
                <?php dynamic_sidebar('box2');?>
            <?php endif ;?>
       </div>                
       <div class="col-12 col-md-4">
            <h5 >Recent Post </h5>
            <?php if(is_active_sidebar('box3')):?>
                <?php dynamic_sidebar('box3');?>
            <?php endif ;?>   
       </div>                  
    </div>                  
</div>
<?php get_footer();?>
 