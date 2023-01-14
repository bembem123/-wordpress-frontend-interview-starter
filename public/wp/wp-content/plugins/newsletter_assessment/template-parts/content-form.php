<?php
    require_once( ABSPATH . 'wp-load.php' );
    global $wpdb;
    $table_name = $wpdb->prefix . 'newsletter_assessment';



    $newsletter_data = $wpdb->get_results("SELECT * FROM $table_name"); 
?>

<div style="position:relative;overflow:hidden;width:50vw;height:50vh;margin:auto;box-shadow:0 0px 5px 0px #33333361;border-radius:10px;padding:30px;margin-top:2rem;">
    <div>

    <table style="display: table;border-collapse: collapse;width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>FULLNAME</th>
                <th>EMAIL</th>
                <th>DATE SIGNUP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($newsletter_data as $data){ ?>
                <tr>
                    <td style="padding:5px"><?php echo $data->id ?></td>
                    <td style="padding:5px"><?php echo $data->name; ?></td>
                    <td style="padding:5px"><?php echo $data->email; ?></td>
                    <td style="padding:5px"><?php echo $data->date; ?></td>
                </tr>
            <?php } ?>
            <?php if(count($newsletter_data) < 0){ ?>
                <td colspan="4" style="text-align:center">NO DATA</td>
            <?php } ?>    
        </tbody>
    </table>
 </p></div></div>