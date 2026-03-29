<?php
/**
 * Title: Dr. Medgyesi Hero Section
 * Slug: twentytwentyfive/drmedgyesi-hero
 * Categories: twentytwentyfive_page
 * Description: Full hero section with heading, bullet points, buttons and doctor image.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#fdfbf8"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fdfbf8;padding-top:80px;padding-bottom:80px;padding-left:20px;padding-right:20px">

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":"64px"}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="gap:64px">

		<!-- LEFT COLUMN: Text content -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">

			<!-- Award badge -->
			<!-- wp:group {"style":{"border":{"radius":"100px"},"color":{"background":"#f4f0ea"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"16px","right":"16px"},"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group has-background" style="background-color:#f4f0ea;border-radius:100px;padding:8px 16px;margin-bottom:24px;display:inline-flex;width:fit-content">
				<!-- wp:paragraph {"style":{"color":{"text":"#b1976d"},"typography":{"fontSize":"12px","fontWeight":"700","letterSpacing":"1.5px","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#b1976d;font-size:12px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin:0">⭐ 25+ év szakmai tapasztalat</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 -->
			<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"700","lineHeight":"1.1","fontSize":"clamp(2.5rem, 5vw, 3.75rem)","fontFamily":"Lora, Georgia, serif"},"color":{"text":"#111827"},"spacing":{"margin":{"top":"0","bottom":"24px"}}}} -->
			<h1 class="wp-block-heading" style="font-family:Lora,Georgia,serif;color:#111827;font-weight:700;line-height:1.1;font-size:clamp(2.5rem,5vw,3.75rem);margin-top:0;margin-bottom:24px">Visszanyerheti <em style="color:#b1976d">egészségét</em> és életminőségét.</h1>
			<!-- /wp:heading -->

			<!-- Intro text -->
			<!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"1.125rem","lineHeight":"1.7","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"32px"}}}} -->
			<p style="color:#6b7280;font-size:1.125rem;line-height:1.7;font-weight:500;margin-top:0;margin-bottom:32px">Dr. Medgyesi integrált orvosi megközelítéssel segít visszanyerni vitalitását, kezelve a problémák gyökerét, nem csupán a tüneteket.</p>
			<!-- /wp:paragraph -->

			<!-- Checklist -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"12px","margin":{"bottom":"40px"}}}} -->
			<div class="wp-block-group" style="margin-bottom:40px;gap:12px">
				<!-- wp:paragraph {"style":{"color":{"text":"#111827"},"typography":{"fontWeight":"500","fontSize":"1rem"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#111827;font-weight:500;font-size:1rem;margin:0">✅ Személyre szabott kezelési terv 90 napon belül</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"#111827"},"typography":{"fontWeight":"500","fontSize":"1rem"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#111827;font-weight:500;font-size:1rem;margin:0">✅ Holisztikus megközelítés – test, anyagcsere, életmód</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"#111827"},"typography":{"fontWeight":"500","fontSize":"1rem"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#111827;font-weight:500;font-size:1rem;margin:0">✅ 1000+ sikeres és dokumentált eset</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Buttons -->
			<!-- wp:buttons {"style":{"spacing":{"blockGap":"16px","margin":{"bottom":"40px"}}}} -->
			<div class="wp-block-buttons" style="gap:16px;margin-bottom:40px">
				<!-- wp:button {"style":{"color":{"background":"#b1976d","text":"#ffffff"},"border":{"radius":"12px"},"typography":{"fontWeight":"700","fontSize":"1.125rem"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"32px","right":"32px"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background has-text-color wp-element-button" href="#" style="background-color:#b1976d;color:#ffffff;border-radius:12px;font-weight:700;font-size:1.125rem;padding:16px 32px">Konzultáció Foglalása →</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"12px","width":"2px","color":"#e5e7eb"},"typography":{"fontWeight":"700","fontSize":"1.125rem","color":"#111827"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"32px","right":"32px"}}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#kiertekeles" style="border-radius:12px;border:2px solid #e5e7eb;font-weight:700;font-size:1.125rem;color:#111827;padding:16px 32px;background:transparent">Egészségügyi Értékelés</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- Star rating -->
			<!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"0.9rem"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="color:#6b7280;font-size:0.9rem;margin:0"><span style="color:#b1976d">★★★★★</span> <strong style="color:#111827">4.9/5</strong> átlag értékelés (250+ vélemény)</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- RIGHT COLUMN: Image with quote overlay -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">

			<!-- wp:cover {"url":"https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=80&w=800","dimRatio":0,"minHeight":600,"contentPosition":"bottom center","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
			<div class="wp-block-cover" style="border-radius:24px;min-height:600px">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
				<img class="wp-block-cover__image-background" src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=80&w=800" alt="Dr. Medgyesi orvos" style="object-fit:cover;object-position:50% 50%"/>
				<div class="wp-block-cover__inner-container">

					<!-- Quote overlay card -->
					<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.96)"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"24px","right":"24px"},"margin":{"bottom":"0"}},"border":{"radius":"16px"}}} -->
					<div class="wp-block-group has-background" style="background-color:rgba(255,255,255,0.96);padding:20px 24px;border-radius:16px">
						<!-- wp:paragraph {"style":{"color":{"text":"#b1976d"},"typography":{"fontSize":"2.5rem","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"4px"}}}} -->
						<p style="color:#b1976d;font-size:2.5rem;line-height:1;margin:0 0 4px 0;opacity:0.5">"</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#111827"},"typography":{"fontFamily":"Lora, Georgia, serif","fontWeight":"700","fontSize":"1.1rem","lineHeight":"1.4"},"spacing":{"margin":{"top":"0","bottom":"10px"}}}} -->
						<p style="font-family:Lora,Georgia,serif;color:#111827;font-weight:700;font-size:1.1rem;line-height:1.4;margin:0 0 10px 0">Az egészség nem csak a betegség hiánya. Az egészség teljes vitalitás.</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"typography":{"fontWeight":"700","fontSize":"0.7rem","letterSpacing":"1.5px","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
						<p style="color:#6b7280;font-weight:700;font-size:0.7rem;letter-spacing:1.5px;text-transform:uppercase;margin:0">— Dr. Medgyesi János</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

				</div>
			</div>
			<!-- /wp:cover -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
