<?php if ( ! defined('ABSPATH') ) {
	exit;
}

/**
 * !! IMPORTANT !!
 *
 * Do not edit this file!
 * To create a new template, simply create a folder in your current theme folder called 'sliced'.
 * You can then copy this file into the 'sliced' folder and edit that copy.
 * This will ensure that your template files are not overwritten if/when you update the Sliced Invoices plugin.
 *
 */

do_action( 'sliced_before_invoice_display' ); ?><!doctype html>
<html <?php language_attributes(); ?>>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title><?php wp_title() ?></title>
	" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">

	<?php do_action('sliced_head'); ?>
	<?php do_action('sliced_invoice_head'); ?>

</head>

<?php do_action( 'sliced_invoice_before_body' ); ?>

<body class="body sliced-invoice">

<?php do_action( 'sliced_invoice_after_body' ); ?>

	<div class="container sliced-wrap">

	<?php if ( $watermark = sliced_get_invoice_watermark() ) : ?>
		<div class="watermark no-print"><p><?php echo esc_html( $watermark ) ?></p></div>
	<?php endif; ?>

		<!-- ///// Start PDF header -->
		<htmlpageheader name="sliced-pdf-header">

			<div class="row sliced-header">
				<div class="col-xs-12 col-sm-6 sliced-business">
					<?php sliced_display_business(); ?>
				</div>

				<div class="col-xs-12 col-sm-6 sliced-title">
					<h2><?php echo esc_html( sliced_get_invoice_label() ); ?></h2>
				</div>
			</div><!-- END row -->

		</htmlpageheader>
		<!-- End PDF header ///// -->


		<div class="row sliced-upper">
			<div class="col-xs-12 col-sm-6 sliced-from-address sliced-address-from">
				<?php sliced_display_from_address(); ?>
			</div>

			<div class="col-xs-12 col-sm-5 sliced-details">
				<?php sliced_display_invoice_details(); ?>
			</div>
		</div><!-- END row -->


		<div class="row sliced-middle">
			<div class="col-xs-12 col-sm-6 sliced-to-address sliced-address-to">
				<?php sliced_display_to_address(); ?>
			</div>
		</div><!-- END row -->


		<?php if ( sliced_get_invoice_description() ) : ?>

			<div class="row sliced-lower">
				<div class="col-sm-12 sliced-description">
					<?php echo wpautop( sliced_get_invoice_description() ); ?>
				</div>
			</div><!-- END row -->

		<?php endif; ?>


		<div class="row sliced-items">
			<div class="col-sm-12 sliced-line-items">
				<div class="table-responsive">
					<?php sliced_display_line_items(); ?>
				</div>
			</div>
		</div>
		<div class="row sliced-items">
			<div class="col-xs-12 col-sm-5 sliced-totals">
				<?php sliced_display_invoice_totals(); ?>
			</div>
		</div><!-- END row -->

		<?php if( sliced_is_payment_method( 'generic' ) || sliced_is_payment_method( 'bank' ) ) : ?>
		<div class="row sliced-payments">
			<div class="col-sm-12">
				<?php if( sliced_is_payment_method( 'generic' ) ) : ?>
					<div class="generic"><?php echo wpautop( sliced_get_business_generic_payment() ); ?></div>
				<?php endif; ?>
				<?php if( sliced_is_payment_method( 'bank' ) ) : ?>
					<div class="bank"><?php echo wpautop( sliced_get_business_bank() ); ?></div>
				<?php endif; ?>
			</div>
		</div><!-- END row -->
		<?php endif; ?>
		
		<div class="row sliced-footer">
			<div class="col-sm-12">
				<div class="terms-text"><?php echo wpautop( sliced_get_invoice_terms() ); ?></div>
			</div>
		</div><!-- END row -->

		<!-- ///// Start PDF footer -->
		<htmlpagefooter name="sliced-pdf-footer">

			<div class="row sliced-footer">
				<div class="col-sm-12">
					<div class="footer-text"><?php echo sliced_get_invoice_footer(); ?></div>
					<div class="print-only"><?php _e( 'Page ', 'sliced-invoices') ?> {PAGENO}/{nbpg}</div>
				</div>
			</div><!-- END row -->

		</htmlpagefooter>
		<!-- End PDF footer ///// -->


	</div> <!-- END sliced-wrap2 -->

<?php do_action( 'sliced_invoice_footer' ); ?>
<?php do_action( 'sliced_template_footer' ); ?>
</body>

</html>
