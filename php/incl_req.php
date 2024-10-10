<?php
// Using include (Warning if file1.php is missing, but script continues)
include 'file1.php';
echo "This will execute even if file1.php is missing.";

// Using require (Fatal error if file2.php is missing, stopping the script)
require 'greet.php';
echo "This will not execute if file2.php is missing.";
?>
