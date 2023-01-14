<?php

    include('../../../wp-load.php');

    global $wpdb;
    $table = $wpdb->prefix.'newsletter_assessment';
    $data = array('email' => $_POST['email'], 'name' => $_POST['name']);
    $wpdb->insert($table,$data);

    setcookie('newsletter_status', '1', time() + (86400 * 30), "/");

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>