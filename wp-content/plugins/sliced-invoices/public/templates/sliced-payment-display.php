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
ob_start();
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php esc_html_e( sliced_get_business_name() ) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">

	<?php do_action('sliced_head'); ?>
	<?php do_action('sliced_payment_head'); ?>

</head>

<body class="body payment">

    <div class="container sliced-wrap">

        <div class="row sliced-header">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 sliced-business">
                <a target="_blank" href="<?php echo esc_url( sliced_get_business_website() ); ?>">
                    <?php echo sliced_get_business_logo() ? '<img class="logo" src="' . esc_url( sliced_get_business_logo() ) . '">' : '<h1>' . esc_html( sliced_get_business_name() ) . '</h1>' ?>
                </a>
            </div>
        </div><!-- END row -->

        <div class="row sliced-upper">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <?php do_action( 'sliced_do_payment' ); ?>
            </div>
        </div><!-- END row -->

        <div class="row sliced-footer">
            <div class="col-sm-12">
                <div class="footer-text"><?php echo sliced_get_business_footer(); ?></div>
            </div>
        </div><!-- END row -->

    </div>

<?php do_action( 'sliced_payment_footer' ); ?>
</body>

</html>
