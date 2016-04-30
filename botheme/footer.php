			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="impressum">
          <a href="<?php echo get_permalink( get_page_by_title( 'Impressum' ) ) ?>">Impressum</a>
        </div>
        <div class="datenschutz">
          <a href="<?php echo get_permalink( get_page_by_title( 'Datenschutz' ) ) ?>">Datenschutz</a>
        </div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>


		<?php wp_footer(); ?>

	</body>
</html>
