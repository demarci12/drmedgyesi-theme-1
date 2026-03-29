<?php
/**
 * Title: Header
 * Slug: twentytwentyfive/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Dr. Medgyesi site header with contact top bar and navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 */
?>
<!-- wp:group {"align":"full","className":"drm-header","tagName":"header","layout":{"type":"default"},"style":{"color":{"background":"#ffffff"}}} -->
<header class="wp-block-group alignfull drm-header" style="background-color:#ffffff">

	<!-- Top contact bar -->
	<!-- wp:group {"align":"full","style":{"color":{"background":"#b1976d","text":"#ffffff"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background has-text-color" style="background-color:#b1976d;color:#ffffff;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"16px"}}} -->
		<div class="wp-block-group">

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"24px"}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"500"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#ffffff;font-size:14px;font-weight:500;margin:0">📞 <a href="tel:+3612345678" style="color:#ffffff;text-decoration:none;font-weight:500">+36 1 234 5678</a></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"500"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#ffffff;font-size:14px;font-weight:500;margin:0">✉ <a href="mailto:info@drmedgyesi.hu" style="color:#ffffff;text-decoration:none;font-weight:500">info@drmedgyesi.hu</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"500"},"color":{"text":"rgba(255,255,255,0.9)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="color:rgba(255,255,255,0.9);font-size:14px;font-weight:500;margin:0">Hétfő – Péntek: 8:00 – 18:00</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Main navigation bar -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:16px;padding-bottom:16px;padding-left:20px;padding-right:20px">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">

			<!-- Logo -->
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"style":{"spacing":{"blockGap":"2px"}}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700","fontSize":"22px","fontFamily":"Lora, Georgia, serif"},"color":{"text":"#b1976d"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
				<!-- wp:site-tagline {"style":{"typography":{"fontSize":"11px","letterSpacing":"2px","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"#6b7280"},"spacing":{"margin":{"top":"2px","bottom":"0"}}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- Navigation -->
			<!-- wp:navigation {"overlayMenu":"mobile","style":{"typography":{"fontWeight":"600","fontSize":"15px"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
				<!-- wp:navigation-link {"label":"Scorecard","url":"#kiertekeles","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Eredmények","url":"#eredmenyek","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Rólam","url":"#rolam","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"⏰ Limitált Ajánlat","url":"#ajanlat","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->

			<!-- CTA Button -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#111827","text":"#ffffff"},"border":{"radius":"8px"},"typography":{"fontSize":"13px","fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"20px","right":"20px"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background has-text-color wp-element-button" style="background-color:#111827;color:#ffffff;border-radius:8px;font-size:13px;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:12px 20px">Időpont Foglalás</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
