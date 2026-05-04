<?php
class MartnPlugin {
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        add_action('wp','count_post_views');
        add_shortcode('martn_post_views', array($this, 'post_views_shortcode'));
        add_shortcode('martn_post_meta', array($this, 'post_meta_shortcode'));
        add_shortcode('martn_category_badge', array($this, 'category_badge_shortcode'));
        add_shortcode('martn_reading_time', array($this, 'reading_time_shortcode'));
    }

    public function enqueue_styles() {
        wp_enqueue_style('martn-theme', get_stylesheet_directory_uri() . '/assets/css/martn-theme.css');
    }

    public function count_post_views($post_id) {
        if (is_single() && !isset($_COOKIE['martn_viewed_' . $post_id])) {
            $current_views = get_post_meta($post_id, '_martn_views', true);
            $current_views = empty($current_views) ? 0 : $current_views;
            update_post_meta($post_id, '_martn_views', $current_views + 1);
            setcookie('martn_viewed_' . $post_id, 'true', time() + 43200, '/'); // 12 hours
        }
    }

    public function post_views_shortcode() {
        return get_post_meta(get_the_ID(), '_martn_views', true);
    }

    public function post_meta_shortcode() {
        // Implementation
    }

    public function category_badge_shortcode() {
        // Implementation
    }

    public function reading_time_shortcode() {
        // Implementation
    }
}
new MartnPlugin();
?>