<?php
    require_once('../../../wp-load.php' );
    global $wpdb;
    $cp_data = $wpdb->get_results("SELECT * FROM wp_cp_display WHERE id='1'");
    echo json_encode($cp_data);
?>