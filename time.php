<?php
// Set the default timezone to Indian Standard Time
date_default_timezone_set('Asia/Kolkata');

// Get current date and time
$currentDateTime = new DateTime();

// Display current date and time in different formats
echo "Date in Y-m-d format: " . $currentDateTime->format('Y-m-d') . "<br>";
echo "Date in d/m/Y format: " . $currentDateTime->format('d/m/Y') . "<br>";
echo "Time in H:i:s format: " . $currentDateTime->format('H:i:s') . "<br>";
echo "Day of the week: " . $currentDateTime->format('l') . "<br>";
echo "Full date and time: " . $currentDateTime->format('Y-m-d H:i:s') . "<br>";
echo "Date and time in more readable format: " . $currentDateTime->format('F j, Y, g:i a') . "<br>";
?>
