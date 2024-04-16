<?php
echo "hi";
require __DIR__ . '/vendor/autoload.php';

use PragmaRX\Google2FAQRCode\Google2FA;
    
$google2fa = new Google2FA();
    
$secretKey = $google2fa->generateSecretKey();
$companyName='Ankit';
$companyEmail='ankit.singh@convesio.com';

$inlineUrl = $google2fa->getQRCodeInline(
    $companyName,
    $companyEmail,
    $secretKey
);


?>

<img src="<?=$inlineUrl?>">