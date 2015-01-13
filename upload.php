<?php

if( file_put_contents('/tmp/a.jpg', base64_decode(substr($_REQUEST['file'],23))) ){
    echo 'upload success';
}


