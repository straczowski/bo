
<?php                  
    $categories = get_categories( array(
      'orderby' => 'name',
      'order'   => 'ASC'
    ) );
?>    

<?php foreach ( $categories as $category){ ?>
  <!-- section -->
  <section id="<?php echo  $category->slug ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <h1><?php echo  $category->name ?></h1>
        </div>
      </div>

      <div class="row">
      <?php
      var_dump($category);
        $args = array(
            'posts_per_page'   => -1,
            'category'         => $category->cat_ID,
            'orderby'          => 'name',
            'order'            => 'ASC'
        );
        $posts = get_posts($args); #var_dump($posts);
        foreach( $posts as $post ){
          ?>

          <div class="col-lg-4 col-sm-6">
            <?php echo $post->post_title ?>
          </div>

      <?php } ?>
      </div>
    </div>
  </section>
  <!-- /section -->

<?php } ?><?php #Category Loop ?>