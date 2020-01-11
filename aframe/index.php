<?php

$contents = file_exists(__DIR__.'/test.log') ? file_get_contents(__DIR__.'/test.log') : '';
file_put_contents(__DIR__.'/test.log', $contents."\n".$_GET['message']);
