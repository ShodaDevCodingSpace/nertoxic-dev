<?php 
#
#  _   _ _____ ____ _____ _____  _____ ____ 
# | \ | | ____|  _ \_   _/ _ \ \/ /_ _/ ___|
# |  \| |  _| | |_) || || | | \  / | | |    
# | |\  | |___|  _ < | || |_| /  \ | | |___ 
# |_| \_|_____|_| \_\|_| \___/_/\_\___\____|
#
#

try {
    include 'nic/out/error_public_path.html'; 
} catch (Exception $e) {
    print_r("There was a fatal error while loading the error page. Please contact the system administrator to fix the routing.");
}
?>