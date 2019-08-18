<?php
/**
 * Counter shortcode template
 */
?>
<div class="qodef-countdown" id="countdown<?php echo esc_html($id); ?>" data-year="<?php echo esc_attr($year);?>" data-month="<?php echo esc_attr($month);?>" data-day="<?php echo esc_attr($day);?>" data-hour="<?php echo esc_attr($hour);?>" data-minute="<?php echo esc_attr($minute);?>" data-timezone="<?php echo get_option('gmt_offset'); ?>" data-month-label="<?php echo esc_html($month_label); ?>" data-sin-month-label="<?php echo esc_html($singular_month_label); ?>" data-day-label="<?php echo esc_html($day_label); ?>" data-sin-day-label="<?php echo esc_html($singular_day_label); ?>" data-hour-label="<?php echo esc_html($hour_label); ?>" data-sin-hour-label="<?php echo esc_html($singular_hour_label); ?>" data-minute-label="<?php echo esc_html($minute_label); ?>" data-sin-minute-label="<?php echo esc_html($singular_minute_label); ?>" data-second-label="<?php echo esc_html($second_label); ?>" data-sin-second-label="<?php echo esc_html($singular_second_label); ?>" data-digit-size="<?php echo esc_html($digit_font_size); ?>"  data-digit-color="<?php echo esc_html($digit_color); ?>" data-label-size="<?php echo esc_html($label_font_size); ?>" data-label-color="<?php echo esc_html($label_color); ?>" data-vertical-separator-color="<?php echo esc_html($vertical_separator_color); ?>"></div>