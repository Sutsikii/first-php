<?php
    $contents = file_get_contents('/home/sutsiki/scripts/deploy-php.sh');
    echo shell_exec($contents);