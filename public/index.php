<?php
#
#  _   _ _____ ____ _____ _____  _____ ____ 
# | \ | | ____|  _ \_   _/ _ \ \/ /_ _/ ___|
# |  \| |  _| | |_) || || | | \  / | | |    
# | |\  | |___|  _ < | || |_| /  \ | | |___ 
# |_| \_|_____|_| \_\|_| \___/_/\_\___\____|
#
# 

# --------------------------------------------------------------------
# Load the Framework
# --------------------------------------------------------------------

try {

error_reporting(E_ALL);
#ini_set('display_errors', 'On');

#error_reporting(E_ALL ^ E_WARNING && E_NOTICE); // Set own error reporting
include_once '../nicLoader.php';

} catch (Exception $e) {
    print_r($e);
}


?>