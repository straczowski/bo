
<?php                  
    $categories = get_categories( array(
      'orderby' => 'name',
      'order'   => 'ASC'
    ) );
?>    
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1><?php the_title() ?></h1>
                <hr>
                <?php  while ( have_posts() ) : the_post(); ?>
                    <p><?php the_content() ?></p>
                <?php endwhile; wp_reset_query(); ?>
                
                <a href="#<?php echo $categories[0]->slug ?>" class="btn btn-primary btn-xl page-scroll">Hier entlang</a>
            </div>
        </div>
    </header>