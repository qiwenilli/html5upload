<?php

$fdata = base64_decode(substr($_REQUEST['file'],23));

file_put_contents($_FILES['Filedata']['tmp_name'], $fdata);
$_FILES['Filedata']['size'] = strlen($fdata);

if( is_uploaded_file($_FILES['Filedata']['tmp_name']) ){
    move_uploaded_file($_FILES['Filedata']['tmp_name'], '/tmp/a.jpg');
}



