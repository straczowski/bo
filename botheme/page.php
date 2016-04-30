<?php get_header(); ?>


  <?php $datetime = new DateTime("now"); ?>

  <?php var_dump(strtotime($datetime)) ?>

  <?php get_template_part('parts/header_pic') ?>

	<main role="main">

	<?php get_template_part('parts/offers'); ?>


      <aside class="bg-dark">
        <div class="container text-center">
          <div class="call-to-action">
              <h2>Bei Fragen könnt Ihr mich gerne kontaktieren!</h2>
              <a href="#" class="btn btn-default btn-xl wow tada">Facebook Link</a>
          </div>
        </div>
      </aside>

	</main>

<?php #get_sidebar(); ?>

<?php get_footer(); ?>