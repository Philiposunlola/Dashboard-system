<?php

    include 'conn.php';

    
    $sql = "SELECT * FROM population";
    $result = $conn->query($sql);

    $totalEarnings = 0;
    $totalWithdrawal = 0;
    $totalUsers = $result->num_rows;

    while ($row = $result->fetch_assoc()) {
        $totalEarnings += $row['total_earnings'];
        $totalWithdrawal += $row['total_withdrawal = 0;'];
    }

    $earningsByCountry = [];
    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
        $country = $row['country'];
        if (!isset($earningsByCountry[$country])) {
            $earningsByCountry[$country] = 0;
        }
        $earningsByCountry[$country] += $row['total_earnings'];
    }

    $currencies = [];
    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
        $currency = $row['currency'];
        if (!in_array($currency, $currencies)) {
            $currencies[] = $currency;
        }
    }

    $conn->close();
?>