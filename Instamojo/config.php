<?php

    $email = 'mailtobsudheer@gmail.com'; //To Sent to a notify email whenever a user complete a payment.
    $api_key = 'd43873b4b0536f3182de822ff04ad044';
    $api_secret = '2c9eeea72915914270e8aec3c3a335d3';
    $api_salt = '98962a88e6b74f41a8f051ca9f3a4640';
    $webhook_url = 'http://sudheerinfo.com/webhook.php';
    $redirect_url = 'http://sudheerinfo.com/thanks.php';
    $mode = "test"; //You can change it to live by jest replacing it by 'live'

    if($mode == 'live'){
        $mode = 'www';
    }else{
        $mode = 'test';
    }
    
?>
