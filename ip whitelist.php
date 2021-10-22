<?php 
$whitelist = array('ips', 'ips');
if (in_array(sha1($_SERVER['REMOTE_ADDR']),$whitelist)) {
    echo 'Successfully authorized, Continue';
    echo '<p>' . $unit1 . "</p>\n";
file_put_contents('sec.log', print_r($whitelist, true));
} else {
    echo 'You are not authorized here';
  echo '<p>' . $unit1 . "</p>\n";
    echo "Hashed IP Address: ", sha1($_SERVER['REMOTE_ADDR']);
    exit;
} 
?>
