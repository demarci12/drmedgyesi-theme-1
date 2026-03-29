<?php
/**
 * Title: Dr. Medgyesi Health Scorecard Section
 * Slug: twentytwentyfive/drmedgyesi-scorecard
 * Categories: twentytwentyfive_page
 * Description: Health scorecard section with 4 score cards and email capture.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"drm-scorecard-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"96px","bottom":"96px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
<section id="kiertekeles" class="wp-block-group alignfull drm-scorecard-section has-background" style="background-color:#ffffff;padding-top:96px;padding-bottom:96px;padding-left:20px;padding-right:20px">

	<!-- Section heading -->
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
	<div class="wp-block-group" style="margin-bottom:64px">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"Lora, Georgia, serif","fontWeight":"700","fontSize":"clamp(2rem, 4vw, 3rem)","lineHeight":"1.2"},"color":{"text":"#111827"},"spacing":{"margin":{"top":"0","bottom":"20px"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-family:Lora,Georgia,serif;color:#111827;font-weight:700;font-size:clamp(2rem,4vw,3rem);line-height:1.2;margin-top:0;margin-bottom:20px">Tudja pontosan, hogy áll az <em style="color:#b1976d">egészsége?</em></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"1.125rem","fontWeight":"500","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-text-align-center" style="color:#6b7280;font-size:1.125rem;font-weight:500;line-height:1.6;margin:0">Ingyenes Egészségügyi Scorecard™. Mérje fel állapotát 3 perc alatt tudományosan megalapozott módszertanunkkal, és tudja meg, mely területeken érdemes javítania.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Score cards: 4 columns -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"24px","margin":{"bottom":"64px"}}}} -->
	<div class="wp-block-columns alignwide" style="gap:24px;margin-bottom:64px">

		<!-- Card 1: Heart Health -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#fdfbf8"},"border":{"radius":"24px","color":"#f3f4f6","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"className":"drm-score-card"} -->
			<div class="wp-block-group has-background drm-score-card" style="background-color:#fdfbf8;border-radius:24px;border:1px solid #f3f4f6;padding:32px">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"top":"0","bottom":"16px"}}}} -->
				<p style="font-size:2.5rem;margin:0 0 16px 0">❤️</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#111827"},"spacing":{"margin":{"top":"0","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading" style="color:#111827;font-weight:700;font-size:1.125rem;margin:0 0 8px 0">Szív Egészség</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#b91c1c"},"typography":{"fontFamily":"Lora, Georgia, serif","fontWeight":"700","fontSize":"1.75rem"},"spacing":{"margin":{"top":"0","bottom":"12px"},"padding":{"bottom":"12px"}},"border":{"bottom":{"color":"#e5e7eb","width":"1px","style":"solid"}}}} -->
				<p style="font-family:Lora,Georgia,serif;color:#b91c1c;font-weight:700;font-size:1.75rem;margin:0 0 12px 0;padding-bottom:12px;border-bottom:1px solid #e5e7eb">8.5/10</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"0.875rem","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#6b7280;font-size:0.875rem;line-height:1.6;margin:0">Kardiovaszkuláris rendszer és vérnyomás értékelése.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Card 2: Mental Health -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#fdfbf8"},"border":{"radius":"24px","color":"#f3f4f6","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"className":"drm-score-card"} -->
			<div class="wp-block-group has-background drm-score-card" style="background-color:#fdfbf8;border-radius:24px;border:1px solid #f3f4f6;padding:32px">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"top":"0","bottom":"16px"}}}} -->
				<p style="font-size:2.5rem;margin:0 0 16px 0">🧠</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#111827"},"spacing":{"margin":{"top":"0","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading" style="color:#111827;font-weight:700;font-size:1.125rem;margin:0 0 8px 0">Mentális Jólét</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#111827"},"typography":{"fontFamily":"Lora, Georgia, serif","fontWeight":"700","fontSize":"1.75rem"},"spacing":{"margin":{"top":"0","bottom":"12px"},"padding":{"bottom":"12px"}},"border":{"bottom":{"color":"#e5e7eb","width":"1px","style":"solid"}}}} -->
				<p style="font-family:Lora,Georgia,serif;color:#111827;font-weight:700;font-size:1.75rem;margin:0 0 12px 0;padding-bottom:12px;border-bottom:1px solid #e5e7eb">7.2/10</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"0.875rem","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#6b7280;font-size:0.875rem;line-height:1.6;margin:0">Kognitív funkciók, stressz szint és alvásminőség.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Card 3: Physical Fitness -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#fdfbf8"},"border":{"radius":"24px","color":"#f3f4f6","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"className":"drm-score-card"} -->
			<div class="wp-block-group has-background drm-score-card" style="background-color:#fdfbf8;border-radius:24px;border:1px solid #f3f4f6;padding:32px">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"top":"0","bottom":"16px"}}}} -->
				<p style="font-size:2.5rem;margin:0 0 16px 0">⚡</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#111827"},"spacing":{"margin":{"top":"0","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading" style="color:#111827;font-weight:700;font-size:1.125rem;margin:0 0 8px 0">Fizikai Kondíció</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#059669"},"typography":{"fontFamily":"Lora, Georgia, serif","fontWeight":"700","fontSize":"1.75rem"},"spacing":{"margin":{"top":"0","bottom":"12px"},"padding":{"bottom":"12px"}},"border":{"bottom":{"color":"#e5e7eb","width":"1px","style":"solid"}}}} -->
				<p style="font-family:Lora,Georgia,serif;color:#059669;font-weight:700;font-size:1.75rem;margin:0 0 12px 0;padding-bottom:12px;border-bottom:1px solid #e5e7eb">6.8/10</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"0.875rem","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#6b7280;font-size:0.875rem;line-height:1.6;margin:0">Erőnlét, állóképesség és ízületi mobilitás mérése.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Card 4: Energy -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#fdfbf8"},"border":{"radius":"24px","color":"#f3f4f6","width":"1px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"className":"drm-score-card"} -->
			<div class="wp-block-group has-background drm-score-card" style="background-color:#fdfbf8;border-radius:24px;border:1px solid #f3f4f6;padding:32px">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"top":"0","bottom":"16px"}}}} -->
				<p style="font-size:2.5rem;margin:0 0 16px 0">🔋</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem"},"color":{"text":"#111827"},"spacing":{"margin":{"top":"0","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading" style="color:#111827;font-weight:700;font-size:1.125rem;margin:0 0 8px 0">Energia Szint</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#b1976d"},"typography":{"fontFamily":"Lora, Georgia, serif","fontWeight":"700","fontSize":"1.75rem"},"spacing":{"margin":{"top":"0","bottom":"12px"},"padding":{"bottom":"12px"}},"border":{"bottom":{"color":"#e5e7eb","width":"1px","style":"solid"}}}} -->
				<p style="font-family:Lora,Georgia,serif;color:#b1976d;font-weight:700;font-size:1.75rem;margin:0 0 12px 0;padding-bottom:12px;border-bottom:1px solid #e5e7eb">7.5/10</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"0.875rem","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="color:#6b7280;font-size:0.875rem;line-height:1.6;margin:0">Anyagcsere stabilitás, vitalitás és helyreállítás.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- Email capture CTA (dark card) -->
	<!-- wp:group {"align":"wide","style":{"color":{"background":"#111827"},"border":{"radius":"40px"},"spacing":{"padding":{"top":"64px","bottom":"64px","left":"64px","right":"64px"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
	<div class="wp-block-group alignwide has-background" style="background-color:#111827;border-radius:40px;padding:64px">

		<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontFamily":"Lora, Georgia, serif","fontWeight":"700","fontSize":"clamp(1.5rem, 3vw, 2.25rem)"},"color":{"text":"#ffffff"},"spacing":{"margin":{"top":"0","bottom":"16px"}}}} -->
		<h3 class="wp-block-heading has-text-align-center" style="font-family:Lora,Georgia,serif;color:#ffffff;font-weight:700;font-size:clamp(1.5rem,3vw,2.25rem);margin-top:0;margin-bottom:16px">Töltse le INGYENES Egészség Scorecard-ját</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#9ca3af"},"typography":{"fontSize":"1.125rem","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"40px"}}}} -->
		<p class="has-text-align-center" style="color:#9ca3af;font-size:1.125rem;line-height:1.6;margin-top:0;margin-bottom:40px">Értékelje egészségét 12 kulcsfontosságú területen. Azonnal megkapja a személyre szabott PDF jelentést és az akciótervet.</p>
		<!-- /wp:paragraph -->

		<!-- Email form - replace with your preferred form plugin shortcode -->
		<!-- wp:html -->
		<div style="display:flex;gap:12px;max-width:560px;margin:0 auto 24px auto;flex-wrap:wrap">
			<input type="email" placeholder="Az Ön email címe" style="flex:1;min-width:200px;padding:16px 20px;border-radius:10px;border:2px solid transparent;font-size:1rem;outline:none;font-family:Inter,sans-serif"/>
			<button type="submit" style="background:#b1976d;color:#fff;border:none;padding:16px 24px;border-radius:10px;font-weight:700;font-size:1rem;cursor:pointer;font-family:Inter,sans-serif;white-space:nowrap">Kérem a kiértékelést →</button>
		</div>
		<!-- /wp:html -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"0.8rem"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="has-text-align-center" style="color:#6b7280;font-size:0.8rem;margin:0">🔒 Az adatai biztonságban vannak. Nem osztjuk meg harmadik féllel.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
