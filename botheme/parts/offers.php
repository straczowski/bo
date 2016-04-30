
<?php                  
    $categories = get_categories( array(
      'orderby' => 'name',
      'order'   => 'ASC'
    ) );
?>    

<?php foreach ( $categories as $category){ ?>
  <!-- section -->
  <section class="contract-section" id="<?php echo  $category->slug ?>">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1><?php echo  $category->name ?></h1>
        </div>
      </div>

      <div class="row">
      <?php

        $args = array(
            'posts_per_page'   => -1,
            'category'         => $category->cat_ID,
            'orderby'          => 'name',
            'order'            => 'ASC'
        );
        $posts = get_posts($args); #var_dump($posts);
          ?>
        <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
          <div class="col-lg-6 col-sm-12">
            <h3><?php the_title(); ?></h3>
            <?php the_content() ?>
          </div>
        <?php endforeach;  wp_reset_postdata();?>
      </div>
    </div>
  </section>
  <!-- /section -->

<?php } ?><?php #Category Loop ?>