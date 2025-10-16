<?php
if(isset($_GET['state'])){
    $state = $_GET['state'];
    file_put_contents('relay_state.txt', $state);
    echo "Relay state set to: $state";
} else {
    if(file_exists('relay_state.txt')){
        echo file_get_contents('relay_state.txt');
    } else {
        echo "off";
    }
}
?>
