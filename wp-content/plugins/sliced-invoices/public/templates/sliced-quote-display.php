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

// buffer php outout between consecutive calls and optionally store it to a file:

// function buffer( $toFilePath=0, $appendToFile=0 ){
//     $status = ob_get_status ();  
//     if($status['level']===1) return ob_start(); //start the buffer
//     $res = ob_get_contents();
//     ob_end_clean(); 
//     if($toFilePath) file_put_contents($toFilePath, $res, ($appendToFile ? FILE_APPEND : null));
//     return $res;
// }

// buffer(); //start the buffer

do_action( 'sliced_before_quote_display' ); ?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title() ?></title> 
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">
<!--- sliced_head2 -->
	
		<!-- <?php do_action('sliced_head'); ?>  -->

<!--- sliced_invoice_head -->
		<?php do_action('sliced_invoice_head'); ?> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" crossorigin="anonymous">

<style> 
/*------- Font Family Starts -------*/
@font-face { font-family: "Century-gothic"; src: url("https://acc.petraarmoredvehicles.com/wp-content/themes/twentytwenty/fonts/century-gothic.ttf"); }
/*
@font-face { font-family: "NotoSans-Light"; src: url("https://acc.petraarmoredvehicles.com/wp-content/themes/twentytwenty/fonts/NotoSans-Light.ttf"); }
@font-face { font-family: "NotoSans-Regular"; src: url("https://acc.petraarmoredvehicles.com/wp-content/themes/twentytwenty/fonts/NotoSans-Regular.ttf"); }
@font-face { font-family: "NotoSans-Medium"; src: url("https://acc.petraarmoredvehicles.com/wp-content/themes/twentytwenty/fonts/NotoSans-Medium.ttf"); }
@font-face { font-family: "NotoSans-SemiBold"; src: url("https://acc.petraarmoredvehicles.com/wp-content/themes/twentytwenty/fonts/NotoSans-SemiBold.ttf"); }
@font-face { font-family: "NotoSans-Bold"; src: url("https://acc.petraarmoredvehicles.com/wp-content/themes/twentytwenty/fonts/NotoSans-Bold.ttf"); }
@font-face { font-family: "NotoSans-Black"; src: url("https://acc.petraarmoredvehicles.com/wp-content/themes/twentytwenty/fonts/NotoSans-Black.ttf"); }
*/

/*------- Font Family Ends -------*/

/*------- Reset CSS Starts ------

html { -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; }
ul,
h1,
h2,
h3,
h4,
p { margin: 0; padding: 0; }
li { list-style: none; }
a,
a:hover,
a:focus { text-decoration: none; transition: 0.5s linear; -webkit-transition: 0.5s linear; -moz-transition: 0.5s linear; -ms-transition: 0.5s linear; -o-transition: 0.5s linear; }

------- Reset CSS Ends -------*/

/*------- Common CSS Starts -------*/

.text-center, .text-center td{
	text-align: center!important;
}


.img-auto { margin: 0 auto; }
.flex-align-center { -ms-align-items: center; align-items: center; display: -webkit-flex; display: -moz-flex; display: -ms-flex; display: -o-flex; display: flex; }

/*------- Common CSS Ends -------*/
.no-padding{padding: 0!important;}
.ptb10{padding-top:10px; padding-bottom: 10px;}
.full-width{width: 100%;}
.text-right{text-align: right; padding-right: 10px;}

table {
/*border-spacing: 0;*/
/*border:0;*/
}
th{white-space: nowrap;}
th, td{
	vertical-align: top;
	text-align: left;
}


table>tbody>tr>td, table>tbody>tr>th, table>tfoot>tr>td, table>tfoot>tr>th, table>thead>tr>td, table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    /*border-top: 1px solid #ddd;*/
}

table {
    border-collapse: collapse; 
}

/*.br-black{border: solid 2px #000;}*/
.bg-white{background-color: #fff; height: 70px;}
.bg-black{background-color: #000; padding-top:5px; padding-bottom: 5px; color: #FFCC28;border:0; height: 10px;}

.bg-black-bar img{width: 354px;}
.bg-black span{color: #fff;}
.bg-black li{display: inline-block;list-style: none;}
.bg-yellow{background-color: #FFCC28; padding-top:5px; padding-bottom: 5px; color: #000;border:0;}
h4.inline{display: inline-block;}
.address{display: inline-block;}
.bg-black h3{color: #FFCC28; text-transform: uppercase; font-weight: 600;}
/*.table th{text-align: center; }*/
table th{white-space: nowrap; font-weight: bold;}
table td{border-top:none!important;}
/*.table td:last-child{background-color: #ccc;}*/
table li{list-style: unset;margin-left: 20px;}
table strong{/* margin-top: 15px; */ display: block;}
/*.br-around td{border: solid 1px #000; white-space: nowrap;}*/
.br-top{border-top:solid 2px #000;}
.yellow-txt{color:#FFCC28;}

.ptb30{padding-top:30px; padding-bottom: 30px;}

table > tbody > tr > .no-line {
    border-top: none;
}

table > thead > tr > .no-line {
    border-bottom: none;
}

table > tbody > tr > .thick-line {
    border-top: 2px solid;
}

.vcentre{
	vertical-align:bottom;
}

#table-main {
  	border: 2px solid black;
  	border-collapse: collapse;
	margin-bottom: 0;

}

td strong {
	font-weight: 600;
}

.vcentre h3 {
	font-size: 32px;
	padding-right: 10px;
	padding-top: 14px;
}
</style>
<style id='template-inline-css' type='text/css'>

	<?php echo apply_filters( 'sliced_invoice_template_custom_css', html_entity_decode( sliced_get_invoice_css() ) ); ?>

</style>
<?php
	$isPdf = (isset( $_GET['create'] ) && $_GET['create'] === 'pdf');
?>
<style type="text/css">
	<?php
		if (!$isPdf) {
echo "
.bg-black-bar{position: relative; background-color: #000; padding-top:5px; padding-bottom: 5px; color: #FFCC28;border:0; }
.logo {
    position: absolute;
    top: 30px;
    height: 100px;
    z-index: 1;
}


";
		} else {
echo"			
.logo {
	position: absolute;
    top: 41px;
    height: 100px;
    z-index: 1;
}
.font-bold { font-weight: bold !important; }
";
		}
	?>
</style>

</head>

<?php do_action( 'sliced_quote_before_body' ); ?>

<body class="body sliced-quote">

<?php do_action( 'sliced_quote_after_body' ); ?>
	<?php 
		if ($isPdf) {			
			echo '<div style="position: fixed; top: 45px; left: 10px; width: 100%;z-index:100;"><img style="height: 160px;" class="img-responsive" src="' . esc_url( sliced_get_business_logo() ) . '"></div>';
			echo '<div style="position: fixed; background-color: #000; height: 120px; top: 100px; left: 1px; width: 99.80%;">&nbsp;</div>';
			echo '<div style="position: fixed; color: wihite; top: 55px; width: 100%; left: 92%; top: 110px; font-size: 150%;"><h3>Invoice</h3></div>';
		}
	?>	

	<!-- Invoice Starts -->
					<table id='table-main' cellpadding="10" class="full-width table">
						<tbody>
							<tr class="bg-white">
								<td colspan="3">
									<?php echo $isPdf ? "<br><br><br><br><br><br><br><br><br><br><br><br>" : "" ?>
								</td>								
							</tr>
							<tr class="bg-black-bar" height="100">
								<td width="33.33%">
									<div class="logo">
										<?php 
											if (!$isPdf) {		
												echo sliced_get_business_logo() ? '<img style="height: 160px;" class="img-responsive" src="' . esc_url( sliced_get_business_logo() ) . '">' : '<h1>' . esc_html( sliced_get_business_name() ) . '</h1>';
											}
										?>
									</div>
								</td>
								<td width="33.33%"> </td>
								<td width="33.33%" style="color: #FFCC28;" class="text-right vcentre">
									<?php 
										if (!$isPdf) {		
											echo "<div style='height: 49px;'>
												<h3>Invoice</h3>
											</div>
											";											
										}
									?>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<table class="full-width">
										<tbody>
											<tr>
												<th>
													<div class='font-bold' style="font-weight: 900 !important;">Customer ID:</div>
												</th>
												<td><?php echo sliced_get_userid(); ?></td>
												<td colspan="3" width="50%"></td>
												<th>Date:<br>Quotation No.:</th>
												<td> <?php sliced_display_invoice_details_date(); ?><br><?php sliced_display_invoice_details_number(); ?></td>
											</tr>

											<tr>
												
												<th>Buyer:</th>
												<td><?php sliced_display_invoice_buyer(); ?></td>
												<td colspan="3" width="50%"></td>
												<th>Contact Us:</th>
												<td>
													<?php echo sliced_get_business_address() ? '<div class="address">' . wpautop( wp_kses_post( sliced_get_business_address() ) ) . '</div>' : ''; ?>
												</td>
												<td></td>

											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									
								</td>
							</tr>
							<tr class="bg-black">
								<td colspan="3">
									<table class="full-width">
									</table>
								</td>
							</tr>

							<tr>
								<td colspan="3" class="no-padding">
									<table class="full-width">
										<tbody>
											<tr class="bg-yellow">
												<th>Sl No</th>
												<th>Description</th>
												<th>Quantity</th>								
												<th>Unit</th>
												<th>Rate in USD</th>
												<th>Total in USD</th>								
											</tr>

											<?php sliced_display_line_items_new(); ?>	

											<!-- Additional option -->
											<?php 
												// $additional = sliced_display_line_items_new(true); 
												// if (!empty($additional)) {
												// 	echo '<tr>
												// 			<td>&nbsp;</td>
												// 			<td colspan="5">
												// 				<strong>Additional Option</strong>
												// 			</td>	
												// 		</tr>'; 
												// 	echo $additional;
												// }
											?>

											<tr>
												<td colspan="4">&nbsp;</td>	
												<td colspan="2">
													<div style=" border-top: 2px solid #000;">
													</div>	
												</td>	
											</tr>

											<tr>
												<td colspan="4">&nbsp;</td>	
												<td style="font-weight: bold;">Total</td>	
												<td style="font-weight: bold;"><?php echo esc_html( sliced_get_quote_total() ); ?></td>	
											</tr>						

											<!-- 
											<tr>
												<td colspan="6">
													<div class="row sliced-footer">
														<div class="col-sm-12">
															<div class="terms-text"><?php echo sliced_get_the_termofshipping(); ?></div>
														</div>
													</div>
												</td>
											</tr>
											-->

											<tr>
												<td colspan="6">
													<div class="row sliced-footer">
														<div class="col-sm-12">
															<div class="terms-text"><?php echo sliced_get_invoice_specification(); ?></div>
														</div>
													</div><!-- END row -->
												</td>	
											</tr>						

											<tr>
												<td colspan="6">
													<?php echo wpautop( sliced_get_invoice_terms() ); ?>
												</td>
											</tr>
											<tr>
												<td colspan="6">
													<?php 
														echo "<img id='img' height='150' src='" . sliced_get_user_signature() . "'>";
													?>
													<table style="display: none; border-color: #fff;" border="0">
														<tbody>												
															<tr>
																<td colspan="5">
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>

											<tr class="bg-black text-center ptb30">
												<td colspan="6" style="text-align: center; color:#fff;">
													<!-- ///// Start PDF footer -->
													<div name="sliced-pdf-footer">

														<div class="row sliced-footer">
															<div class="col-sm-12">
																<div class="footer-text"><?php echo sliced_get_invoice_footer(); ?></div>
															</div>
														</div><!-- END row -->

													</div>
													<!-- End PDF footer ///// -->
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
	<!-- Invoice Ends -->

<?php do_action( 'sliced_quote_footer' ); ?>
<?php do_action( 'sliced_template_footer' ); ?> 
</body>

</html>

<?php
// $log = buffer(ABSPATH . 'mylog.txt',1); //add these lines to a file (optional)

// echo('Heres the latest log:'.$log);
?>