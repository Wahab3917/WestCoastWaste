<?php
/**
 * Template Name: Template Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<!-- <div class="page-header-container">
  <div class="container">
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
  </div>
</div> -->

<div class="wrapper template-contact-us" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

      <div class="col-lg-12">
        <div class="iframe-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12797.404998169544!2d-119.7509026!3d36.6900965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e043622b3c03657!2sWest%20Coast%20Waste!5e0!3m2!1sen!2s!4v1605042572235!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- <div class="iframe-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12797.404998169544!2d-119.7509026!3d36.6900965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e043622b3c03657!2sWest%20Coast%20Waste!5e0!3m2!1sen!2s!4v1605042572235!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="iframe-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12797.404998169544!2d-119.7509026!3d36.6900965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e043622b3c03657!2sWest%20Coast%20Waste!5e0!3m2!1sen!2s!4v1605042572235!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div> -->
      </div>


		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();

