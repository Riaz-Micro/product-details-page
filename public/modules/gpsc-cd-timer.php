<?php

/**
 * Date formate for public.
 *
 * @param String $wpgpsc_date Get the date string.
 * @return String
 */

// Typography Options.
$gpsc_section_title_ff = !empty($gpsc_shortcode_section_title_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_section_title_typo['font-family'] . ';' : '';
$gpsc_section_title_fs = !empty($gpsc_shortcode_section_title_typo['font-size']) ? $gpsc_shortcode_section_title_typo['font-size'] : '34';
$gpsc_section_title_lh = !empty($gpsc_shortcode_section_title_typo['line-height']) ? $gpsc_shortcode_section_title_typo['line-height'] : '40';
$gpsc_section_title_fw = !empty($gpsc_shortcode_section_title_typo['font-weight']) ? $gpsc_shortcode_section_title_typo['font-weight'] : 'bolder';
$gpsc_section_title_ta = !empty($gpsc_shortcode_section_title_typo['text-align']) ? $gpsc_shortcode_section_title_typo['text-align'] : 'center';
$gpsc_section_title_tt = !empty($gpsc_shortcode_section_title_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_section_title_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_section_title_ls = !empty($gpsc_shortcode_section_title_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_section_title_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_name_ff = !empty($gpsc_shortcode_product_name_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_name_typo['font-family'] . ';' : '';
$gpsc_product_name_fs = !empty($gpsc_shortcode_product_name_typo['font-size']) ? $gpsc_shortcode_product_name_typo['font-size'] : '32';
$gpsc_product_name_lh = !empty($gpsc_shortcode_product_name_typo['line-height']) ? $gpsc_shortcode_product_name_typo['line-height'] : '36';
$gpsc_product_name_fw = !empty($gpsc_shortcode_product_name_typo['font-weight']) ? $gpsc_shortcode_product_name_typo['font-weight'] : 'bold';
$gpsc_product_name_ta = !empty($gpsc_shortcode_product_name_typo['text-align']) ? $gpsc_shortcode_product_name_typo['text-align'] : 'center';
$gpsc_product_name_tt = !empty($gpsc_shortcode_product_name_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_name_typo['text-transform'] . ';' : '';
$gpsc_product_name_ls = !empty($gpsc_shortcode_product_name_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_name_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_excerpt_ff = !empty($gpsc_shortcode_product_excerpt_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_excerpt_typo['font-family'] . ';' : '';
$gpsc_product_excerpt_fs = !empty($gpsc_shortcode_product_excerpt_typo['font-size']) ? $gpsc_shortcode_product_excerpt_typo['font-size'] : '18';
$gpsc_product_excerpt_lh = !empty($gpsc_shortcode_product_excerpt_typo['line-height']) ? $gpsc_shortcode_product_excerpt_typo['line-height'] : '28';
$gpsc_product_excerpt_fw = !empty($gpsc_shortcode_product_excerpt_typo['font-weight']) ? $gpsc_shortcode_product_excerpt_typo['font-weight'] : 'normal';
$gpsc_product_excerpt_ta = !empty($gpsc_shortcode_product_excerpt_typo['text-align']) ? $gpsc_shortcode_product_excerpt_typo['text-align'] : 'center';
$gpsc_product_excerpt_tt = !empty($gpsc_shortcode_product_excerpt_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_excerpt_typo['text-transform'] . ';' : '';
$gpsc_product_excerpt_ls = !empty($gpsc_shortcode_product_excerpt_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_excerpt_typo['letter-spacing'] . 'px;' : '';
$gpsc_product_btn_ff = !empty($gpsc_shortcode_product_btn_typo['font-family']) ? 'font-family:' . $gpsc_shortcode_product_btn_typo['font-family'] . ';' : '';
$gpsc_product_btn_fs = !empty($gpsc_shortcode_product_btn_typo['font-size']) ? $gpsc_shortcode_product_btn_typo['font-size'] : '16';
$gpsc_product_btn_lh = !empty($gpsc_shortcode_product_btn_typo['line-height']) ? $gpsc_shortcode_product_btn_typo['line-height'] : '18';
$gpsc_product_btn_fw = !empty($gpsc_shortcode_product_btn_typo['font-weight']) ? $gpsc_shortcode_product_btn_typo['font-weight'] : 'bold';
$gpsc_product_btn_ta = !empty($gpsc_shortcode_product_btn_typo['text-align']) ? $gpsc_shortcode_product_btn_typo['text-align'] : 'center';
$gpsc_product_btn_tt = !empty($gpsc_shortcode_product_btn_typo['text-transform']) ? 'text-transform:' . $gpsc_shortcode_product_btn_typo['text-transform'] . ';' : 'text-transform: capitalize';
$gpsc_product_btn_ls = !empty($gpsc_shortcode_product_btn_typo['letter-spacing']) ? 'letter-spacing:' . $gpsc_shortcode_product_btn_typo['letter-spacing'] . 'px;' : '';

// Getting data.
$wpgpsc_deadline_from = wpgpsc_get_post_meta($post_id, 'wpgpsc-datetime')['from'];
$wpgpsc_deadline_to = wpgpsc_get_post_meta($post_id, 'wpgpsc-datetime')['to'];
$wpgpsc_deadline_end_time = empty(wpgpsc_get_post_meta($post_id, 'wpgpsc-deadline-end-time')) ? '00:00:00' : wpgpsc_get_post_meta($post_id, 'wpgpsc-deadline-end-time') . ':00';
$wpgpsc_only_timer_show = wpgpsc_get_post_meta($post_id, 'wpgpsc_only_timer_show');
$wpgpsc_cdt_before_content = wpgpsc_get_post_meta($post_id, 'wpgpsc-cd-content-before');
$wpgpsc_cd_link_before = wpgpsc_get_post_meta($post_id, 'wpgpsc-cd-link-before');
$wpgpsc_cdt_run_content = wpgpsc_get_post_meta($post_id, 'wpgpsc-cd-content-running');
$wpgpsc_cd_link_running = wpgpsc_get_post_meta($post_id, 'wpgpsc-cd-link-running');
$wpgpsc_cdt_end_content = wpgpsc_get_post_meta($post_id, 'wpgpsc-cd-content-end');
$wpgpsc_cd_link_end = wpgpsc_get_post_meta($post_id, 'wpgpsc-cd-link-end');
$wpgpsc_current_date = current_time('Y-m-d');

// Styling.
echo '<style>
#gpsc-cdtimer-' . esc_attr($post_id) . ' {
    position: relative;
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' ul.wpgpsc-cd-timer {
    display: flex;
    flex-direction: row;
    justify-content: ' . $wpgpsc_content_alignment . ';
    align-items: center;
    gap: 20px;
    margin: 0 !important;
    padding: 0 !important;
    list-style: none;
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cd-timer li {
    background: ' . $wpgpsc_shortcode_color_brand . ';
    margin: 0;
    padding: 0;
    height: 100px;
    width: 100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5px;
    border-radius: 1px;
    border: 1px solid ' . $wpgpsc_shortcode_cd_timer_colors['border'] . ';
    outline: 1px solid ' . $wpgpsc_shortcode_cd_timer_colors['border'] . ';
    outline-offset: 2px;
    ' . $gpsc_product_name_ff . ';
    font-size: ' . $gpsc_product_name_fs . 'px !important;
    line-height: ' . $gpsc_product_name_lh . 'px;
    font-weight: ' . $gpsc_product_name_fw . ';
    text-align: ' . $gpsc_product_name_ta . ';
    ' . $gpsc_product_name_tt . ';
    ' . $gpsc_product_name_ls . ';
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cd-timer li strong {
    font-size: 100%;
    line-height: 100%;
    color: ' . $wpgpsc_shortcode_cd_timer_colors['number'] . ';
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cd-timer li span {
    font-size: 50%;
    line-height: 75%;
    color: ' . $wpgpsc_shortcode_cd_timer_colors['period'] . ';
    font-weight: normal !important;
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cd-timer > b {
    display: flex;
    align-items: center;
    font-size: ' . $gpsc_product_name_fs . 'px !important;
    color: ' . $wpgpsc_shortcode_cd_timer_colors['colon'] . ';
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-countdown-wrapper {
    max-width: 100% !important;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: ' . $wpgpsc_min_height['width'] . 'px;
    position: relative;
    overflow: hidden;
}
img.wpgpsc-countdown-cover-img {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    object-fit: cover;
    object-position: center;
    width: 100%;
    height: 100%;
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' span.wpgpsc-countdown-cover {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
    background: ' . $wpgpsc_shortcode_color_overlay . ';
    opacity: ' . $wpgpsc_slider_bg_overlay . '%;
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-countdown-content {
    position: relative;
    z-index: 2;
    max-width: ' . $wpgpsc_inner_width['width'] . 'px;
    margin: 0 auto;
    padding: 80px 20px;
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cdt-link-wrap {
    display: block;
    text-align: ' . $wpgpsc_content_alignment . ';
    margin-top: 50px;
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' a.wpgpsc-cdt-btn {
    display: inline-block;
    padding: 14px 24px;
    background-color: ' . $wpgpsc_cd_timer_colors_btn['background'] . ';
    border-radius: 4px;
    color: ' . $wpgpsc_cd_timer_colors_btn['text'] . ';
    text-decoration: none !important;
    transition: .3s;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    ' . $gpsc_product_btn_ff . ';
	font-size: ' . $gpsc_product_btn_fs . 'px !important;
	line-height: ' . $gpsc_product_btn_lh . 'px;
	font-weight: ' . $gpsc_product_btn_fw . ';
	text-align: ' . $gpsc_product_btn_ta . ';
	' . $gpsc_product_btn_tt . ';
	' . $gpsc_product_btn_ls . ';
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' a.wpgpsc-cdt-btn:hover {
    background-color: ' . $wpgpsc_shortcode_color_brand . ';
    color: ' . $wpgpsc_cd_timer_colors_btn['txt-hover'] . ';
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cdt-dynamic-content {
    text-align: ' . $wpgpsc_content_alignment . ';
    margin-bottom: 42px;
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cdt-dynamic-content h1,
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cdt-dynamic-content h2,
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cdt-dynamic-content h3,
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cdt-dynamic-content h4,
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cdt-dynamic-content h5,
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cdt-dynamic-content h6 {
    margin-bottom: 10px !important;
    color: ' . $wpgpsc_cd_timer_colors_content['heading'] . ';
    text-shadow: 1px 1px black;
    ' . $gpsc_section_title_ff . ';
	font-size: ' . $gpsc_section_title_fs . 'px;
	line-height: ' . $gpsc_section_title_lh . 'px;
	font-weight: ' . $gpsc_section_title_fw . ';
	text-align: ' . $gpsc_section_title_ta . ';
	' . $gpsc_section_title_tt . ';
	' . $gpsc_section_title_ls . ';
}
#gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-cdt-dynamic-content p {
    color: ' . $wpgpsc_cd_timer_colors_content['subheading'] . ';
    ' . $gpsc_product_excerpt_ff . ';
	font-size: ' . $gpsc_product_excerpt_fs . 'px !important;
	line-height: ' . $gpsc_product_excerpt_lh . 'px;
	font-weight: ' . $gpsc_product_excerpt_fw . ' !important;
	text-align: ' . $gpsc_product_excerpt_ta . ';
	' . $gpsc_product_excerpt_tt . ';
	' . $gpsc_product_excerpt_ls . ';
}
@media (max-width: 640px) {
    ul.wpgpsc-cd-timer {
        flex-wrap: wrap !important;
    }
}';
if (!empty($wpgpsc_shortcode_cd_timer_colors['background'])) {
    echo '.wpgpsc-cd-timer li {
        background: ' . $wpgpsc_shortcode_cd_timer_colors['background'] . ' !important;
    }';
}
if (!empty($wpgpsc_cd_timer_colors_btn['bg-hover'])) {
    echo 'a.wpgpsc-cdt-btn:hover {
        background-color: ' . $wpgpsc_cd_timer_colors_btn['bg-hover'] . ' !important;
    }';
}
if ($wpgpsc_only_timer_show) {
    echo '#gpsc-cdtimer-' . esc_attr($post_id) . '.wpgpsc-countdown-wrapper {
        max-width: fit-content !important;
        min-height: auto;
        margin: 0 !important;
        padding: 10px;
        border-radius: 5px;
        background: transparent;
    }
    #gpsc-cdtimer-' . esc_attr($post_id) . ' .wpgpsc-countdown-content {
        padding: 0 !important;
    }';
}
echo '</style>';

// Show content in conditions.
echo '<div id="gpsc-cdtimer-' . esc_attr($post_id) . '" class="wpgpsc-countdown-wrapper">';
if (!empty($wpgpsc_slider_bg_img_url)) {
    echo '<span aria-hidden="true" class="wpgpsc-countdown-cover"></span>
    <img class="wpgpsc-countdown-cover-img" src="' . esc_url($wpgpsc_slider_bg_img_url) . '" alt="' . esc_attr($wpgpsc_slider_bg_img_alt) . '">';
}
echo '<div class="wpgpsc-countdown-content">';
if (strtotime($wpgpsc_current_date) < strtotime($wpgpsc_deadline_from)) {

    if (!empty($wpgpsc_cdt_before_content) && !$wpgpsc_only_timer_show) {

        echo '<div class="wpgpsc-cdt-dynamic-content">' . wp_kses_post(wpautop($wpgpsc_cdt_before_content)) . '</div>';
    }

    if (array_filter($wpgpsc_cd_link_before) && !$wpgpsc_only_timer_show) {

        echo '<div class="wpgpsc-cdt-link-wrap"><a class="wpgpsc-cdt-btn" href="' . $wpgpsc_cd_link_before['url'] . '" target="' . $wpgpsc_cd_link_before['target'] . '">' . $wpgpsc_cd_link_before['text'] . '</a></div>';
    }
} elseif (strtotime($wpgpsc_current_date) >= strtotime($wpgpsc_deadline_from) && strtotime($wpgpsc_current_date) <= strtotime($wpgpsc_deadline_to)) {

    if (!empty($wpgpsc_cdt_run_content) && !$wpgpsc_only_timer_show) {

        echo '<div class="wpgpsc-cdt-dynamic-content">' . wp_kses_post(wpautop($wpgpsc_cdt_run_content)) . '</div>';
    }

    echo '<ul id="wpgpsc-countdown" class="wpgpsc-countdown wpgpsc-cd-timer" data-endtime="' . esc_html(wpgpsc_date_formate_changer($wpgpsc_deadline_to)) . '"></ul>';

    if (array_filter($wpgpsc_cd_link_running) && !$wpgpsc_only_timer_show) {

        echo '<div class="wpgpsc-cdt-link-wrap"><a class="wpgpsc-cdt-btn" href="' . $wpgpsc_cd_link_running['url'] . '" target="' . $wpgpsc_cd_link_running['target'] . '">' . $wpgpsc_cd_link_running['text'] . '</a></div>';
    }
} else {

    if (!empty($wpgpsc_cdt_end_content) && !$wpgpsc_only_timer_show) {

        echo '<div class="wpgpsc-cdt-dynamic-content">' . wp_kses_post(wpautop($wpgpsc_cdt_end_content)) . '</div>';
    }

    echo '<ul class="wpgpsc-cd-timer">
        <li><strong>0</strong><span>Day</span></li><b>:</b>
        <li><strong>0</strong><span>Hours</span></li><b>:</b>
        <li><strong>0</strong><span>Minutes</span></li><b>:</b>
        <li><strong>0</strong><span>Seconds</span></li>
    </ul>';

    if (array_filter($wpgpsc_cd_link_end) && !$wpgpsc_only_timer_show) {

        echo '<div class="wpgpsc-cdt-link-wrap"><a class="wpgpsc-cdt-btn" href="' . $wpgpsc_cd_link_end['url'] . '" target="' . $wpgpsc_cd_link_end['target'] . '">' . $wpgpsc_cd_link_end['text'] . '</a></div>';
    }
}
echo '</div>
</div>';

// Scripting.
echo '<script type="text/javascript">
var countdowns = document.querySelectorAll(".wpgpsc-countdown");
countdowns.forEach(function(countdown) {
    var wpgpscCountDownDate = new Date(countdown.getAttribute("data-endtime")).getTime();
    var wpgpscCountDown     = setInterval(function() {
        var wpgpscNow      = new Date().getTime();
        var wpgpscDistance = (wpgpscCountDownDate - wpgpscNow);
        if (wpgpscDistance < 0) {
            clearInterval(wpgpscCountDown);
            return;
        }
        var wpgpscDays      = Math.floor(wpgpscDistance / (1000 * 60 * 60 * 24));
        var wpgpscDayTxt    = (wpgpscDays > 1) ? "Days" : "Day";
        var wpgpscHours     = Math.floor((wpgpscDistance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var wpgpscMinutes   = Math.floor((wpgpscDistance % (1000 * 60 * 60)) / (1000 * 60));
        var wpgpscSeconds   = Math.floor((wpgpscDistance % (1000 * 60)) / 1000);
        countdown.innerHTML = "<li><strong>" + wpgpscDays + "</strong><span>" + wpgpscDayTxt + "</span></li><b>:</b><li><strong>" + wpgpscHours + "</strong><span>Hours</span></li><b>:</b><li><strong>" + wpgpscMinutes + "</strong><span>Minutes</span></li><b>:</b><li><strong>" + wpgpscSeconds + "</strong><span>Seconds</span></li>";
    }, 1000);
});
</script>';