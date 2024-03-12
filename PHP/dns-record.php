<?php

$dns_status = checkdnsrr('labs.umarfarooq.cloud', 'A');
if($dns_status){
    echo ($dns_status);
} else {
    echo "fail";
}