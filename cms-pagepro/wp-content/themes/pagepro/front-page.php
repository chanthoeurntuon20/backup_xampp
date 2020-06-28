<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<div class="image-background" style="background-image: url(<?php echo $url; ?>); background-position: center;">
    <br>
    <?php get_header(); ?>
    <div class="container-fluid">
                <div class="col-sm-12">
                    <h1>Welcome to breaking news</h1>
                    <h5>Latest news today : ព័ត៌មានថ្មីៗថ្ងៃនេះ </h5>
                    <?php
                        if (is_active_sidebar('showcase')) {
                        dynamic_sidebar('showcase');
                    } ?>
                </div>
                <div class="row">
                    <div class="col-12  col-ms-4">
                        <div class="card">
                                <div class="card-header">
                                    <h3>Boox 1</h3>
                                </div>    
                                <div class="card-body">
                                    <?php if (is_active_sidebar('box1')) {
                                        dynamic_sidebar('box1');
                                    } ?>
                                </div>
                        </div>
                    </div>   
                    <div class="col-12  col-ms-4">
                        <div class="card">
                            <div class="card-header">
                                <h3>Boox 2</h3>
                            </div>    
                            <div class="card-body">
                                <?php if (is_active_sidebar('box2')) {
                                dynamic_sidebar('box2');
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-ms-4">
                        <div class="card">
                            <div class="card-header">
                                <h3>Boox 3</h3>
                            </div>    
                            <div class="card-body">
                                <?php if (is_active_sidebar('box3')) {
                                    dynamic_sidebar('box3');
                                } ?>
                        </div>
                    </div>
        </div>
    </div>
                
<?php get_footer(); ?>
</body>
</html>