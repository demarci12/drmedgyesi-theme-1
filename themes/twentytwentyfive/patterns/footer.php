<?php
/**
 * Title: Footer
 * Slug: twentytwentyfive/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dr. Medgyesi footer with 4-column layout.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 */
?>
<!-- wp:group {"align":"full","tagName":"footer","style":{"color":{"background":"#0f172a","text":"#9ca3af"},"spacing":{"padding":{"top":"64px","bottom":"40px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-background has-text-color" style="background-color:#0f172a;color:#9ca3af;padding-top:64px;padding-bottom:40px;padding-left:20px;padding-right:20px">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"48px","margin":{"bottom":"48px"}}}} -->
	<div class="wp-block-columns alignwide" style="gap:48px;margin-bottom:48px">

		<!-- Col 1: Brand -->
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"Lora, Georgia, serif","fontWeight":"700","fontSize":"22px"},"color":{"text":"#b1976d"},"spacing":{"margin":{"top":"0","bottom":"20px"}}}} -->
			<h3 style="font-family:Lora,Georgia,serif;font-weight:700;font-size:22px;color:#b1976d;margin-top:0;margin-bottom:20px">Dr. Medgyesi</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.7"},"color":{"text":"#9ca3af"},"spacing":{"margin":{"top":"0"}}}} -->
			<p style="color:#9ca3af;font-size:14px;line-height:1.7;margin-top:0">Integratív orvoslás és testsúlycsökkentő programok tudományos alapokon, Budapesten.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- Col 2: Navigation -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700","fontSize":"12px","letterSpacing":"2px","textTransform":"uppercase"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"0","bottom":"24px"}}}} -->
			<h4 style="color:#ffffff;font-weight:700;font-size:12px;letter-spacing:2px;text-transform:uppercase;margin-top:0;margin-bottom:24px">Navigáció</h4>
			<!-- /wp:heading -->
			<!-- wp:list {"style":{"typography":{"fontSize":"14px"},"spacing":{"padding":{"left":"0"}}},"className":"drm-footer-list"} -->
			<ul class="drm-footer-list" style="font-size:14px;padding-left:0;list-style:none">
				<!-- wp:list-item -->
				<li><a href="#kiertekeles" style="color:#9ca3af;text-decoration:none">Egészség Scorecard</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#eredmenyek" style="color:#9ca3af;text-decoration:none">Páciens Eredmények</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#ajanlat" style="color:#9ca3af;text-decoration:none">Limitált Ajánlat</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#" style="color:#9ca3af;text-decoration:none">Adatkezelés</a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- Col 3: Contact -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700","fontSize":"12px","letterSpacing":"2px","textTransform":"uppercase"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"0","bottom":"24px"}}}} -->
			<h4 style="color:#ffffff;font-weight:700;font-size:12px;letter-spacing:2px;text-transform:uppercase;margin-top:0;margin-bottom:24px">Kapcsolat</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"2"},"color":{"text":"#9ca3af"},"spacing":{"margin":{"top":"0"}}}} -->
			<p style="color:#9ca3af;font-size:14px;line-height:2;margin-top:0">📍 1123 Budapest, Alkotás u. 1.<br>📞 <a href="tel:+3612345678" style="color:#9ca3af;text-decoration:none">+36 1 234 5678</a><br>✉ <a href="mailto:info@drmedgyesi.hu" style="color:#9ca3af;text-decoration:none">info@drmedgyesi.hu</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- Col 4: Booking -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700","fontSize":"12px","letterSpacing":"2px","textTransform":"uppercase"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"0","bottom":"24px"}}}} -->
			<h4 style="color:#ffffff;font-weight:700;font-size:12px;letter-spacing:2px;text-transform:uppercase;margin-top:0;margin-bottom:24px">Bejelentkezés</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"#9ca3af"},"spacing":{"margin":{"top":"0","bottom":"16px"}}}} -->
			<p style="color:#9ca3af;font-size:12px;margin-top:0;margin-bottom:16px">Foglalja le időpontját online a nap 24 órájában!</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#b1976d","text":"#ffffff"},"border":{"radius":"10px"},"typography":{"fontWeight":"700"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"20px","right":"20px"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background has-text-color wp-element-button" href="#" style="background-color:#b1976d;color:#ffffff;border-radius:10px;font-weight:700;padding:12px 20px">Időpontot foglalok</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- Separator -->
	<!-- wp:separator {"style":{"color":{"background":"#1e293b"}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-background is-style-wide" style="background-color:#1e293b;border-color:#1e293b"/>
	<!-- /wp:separator -->

	<!-- Copyright bar -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"24px","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:24px">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"#6b7280"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p style="color:#6b7280;font-size:12px;margin:0">© 2026 Dr. Medgyesi János – Minden jog fenntartva.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"#6b7280"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p style="color:#6b7280;font-size:12px;margin:0">Orvosi nyilvántartási szám: 123456</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</footer>
<!-- /wp:group -->
