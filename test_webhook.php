<?php

// Function to encrypt a message
function encrypt_message($key, $iv, $data) {
    // Encrypt the plaintext data
    $ciphertext = openssl_encrypt($data, 'aes-128-cbc', $key, OPENSSL_RAW_DATA, $iv);

    // Return the base64 encoded ciphertext
    return base64_encode($ciphertext);
}

// Function to calculate checksum
function calculate_checksum($data) {
    return base64_encode(hash('sha256', $data, true));
}

// Sample data to be encrypted
$data = json_encode([
    'payer_name' => 'Abba',
    'agency_name' => 'GIRS',
    'subhead' => 'PAYE',
    'amount' => 1000,
    'transaction_ref' => 'EDX123456',
    'date' => '2024-07-03',
    'account_no' => '1234567890',
    'account_name' => 'John Doe Account',
    'description' => 'Remita transaction'
]);

// Constants for AES-128 encryption
$today = date("Y-m-d");
$baseKey = "Dygegh34gvREgdkbf36g";
$baseIv = "0DH4qRuAx1CIvdE8YSDe";

// Derive the key and IV
$key = substr($baseKey . $today, -16);  // AES-128 requires a 16-byte key
$iv = substr($baseIv, -16);   // AES block size is 16 bytes

// Encrypt the data
$ciphertext = encrypt_message($key, $iv, $data);

// Calculate checksum
$checksum = calculate_checksum($data);

echo "Ciphertext: " . $ciphertext . "\n";
echo "Checksum: " . $checksum . "\n";
