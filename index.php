<?php
// Indexed array for users' data usage
$dataUsage = [30, 70, 120]; // User 1: 30GB, User 2: 70GB, User 3: 120GB

// Function to calculate the bill for each user
function calculateBill($dataUsed) {
    $bill = 0.0;
    
    if ($dataUsed <= 50) {
        // If data used is 50GB or less
        $bill = $dataUsed * 10;
    } elseif ($dataUsed <= 100) {
        // If data used is between 51GB and 100GB
        $bill = (50 * 10) + (($dataUsed - 50) * 8);
    } else {
        // If data used is above 100GB
        $bill = (50 * 10) + (50 * 8) + (($dataUsed - 100) * 5);
    }
    
    return $bill;
}

// Iterate over users' data and calculate their bills
foreach ($dataUsage as $index => $data) {
    $bill = calculateBill($data);
    echo "User " . ($index + 1) . " (Data Usage: " . $data . "GB) - Total Bill: $" . number_format($bill, 2) . "\n";
}
?>