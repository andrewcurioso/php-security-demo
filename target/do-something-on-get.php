<?php

file_put_contents('do-something.log', $_GET['message'] . "<br>", FILE_APPEND);

echo file_get_contents('do-something.log');
