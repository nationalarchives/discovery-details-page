<?php

$page = $_GET['p'];
$delivery_location = 'includes/delivery-options/d';
$file_extension = '.html';

if(isset($page)) {
    switch ($page) {
        case 1:
            include($delivery_location . "1" . $file_extension);
            break;
        case 2:
            include($delivery_location . "2" . $file_extension);
            break;
        case 3:
            include($delivery_location . "3" . $file_extension);
            break;
        case 4:
            include($delivery_location . "4" . $file_extension);
            break;
        case 5:
            include($delivery_location . "5" . $file_extension);
            break;
        case 6:
            include($delivery_location . "6" . $file_extension);
            break;
        case 7:
            include($delivery_location . "7" . $file_extension);
            break;
        case 8:
            include($delivery_location . "8" . $file_extension);
            break;
        case 9:
            include($delivery_location . "9" . $file_extension);
            break;
        default:
            include($delivery_location . "1" . $file_extension);
            break;
    }
}
else {
    include ($delivery_location . "1" . $file_extension);
};

?>