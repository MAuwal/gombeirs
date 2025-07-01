<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Log;

class EncryptionService
{
    public function verifyChecksum($data, $checksumCypherText)
    {
        // Calculate the SHA-256 checksum of the decrypted data
        $calculatedChecksum = hash('sha256', $data, true); // Ensure binary output

         Log::info('Calculated Checksum: ' . base64_encode($calculatedChecksum));

        // Compare the calculated checksum with the provided checksum
        if ($calculatedChecksum !== base64_decode($checksumCypherText)) {
            throw new Exception('Checksum verification failed');
        }
    }

    public function decryptMessage($ciphertextBase64)
    {
        // Constants for AES-128 decryption
        $today = date("Y-m-d");
        $baseKey = "Dygegh34gvREgdkbf36g";
        $baseIv = "0DH4qRuAx1CIvdE8YSDe";

        // Derive the key and IV
        $key = substr($baseKey . $today, -16);  // AES-128 requires a 16-byte key
        $iv = substr($baseIv, -16);   // AES block size is 16 bytes

        Log::info('Decryption Key: ' . $key);
        Log::info('Decryption IV: ' . $iv);

        // Decode the base64 encoded ciphertext
        $ciphertext = base64_decode($ciphertextBase64);

        // Validate the ciphertext
        if ($ciphertext === false) {
             Log::error('Decryption failed: ' . $error);
            throw new Exception('Invalid base64 encoded ciphertext');
        }

        // Decrypt the ciphertext
        $decryptedData = openssl_decrypt($ciphertext, 'aes-128-cbc', $key, OPENSSL_RAW_DATA, $iv);

        if ($decryptedData === false) {
            throw new Exception('Decryption failed');
        }

        return $decryptedData;
    }
}