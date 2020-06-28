<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(have_posts()):?>
        <?php while(have_posts()):?>
            <?php the_post();?>
            <?php 
                    //remove title page
                        $args = array(
                            'title_li'=> '',
                        );
                       //if parent page
                       
                        wp_list_pages($args);
                    ?>
        <?php endwhile?>
    <?php endif?>

</body>
</html>