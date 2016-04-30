<?php
/*
Template Name: Text Layout
*/
?>

<?php get_header(); ?>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php the_title() ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
<?php get_footer(); ?>