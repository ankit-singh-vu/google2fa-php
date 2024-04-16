<?php
echo "hi";
require __DIR__ . '/vendor/autoload.php';

use PragmaRX\Google2FA\Google2FA;
    
$google2fa = new Google2FA();
    
$secretKey = $google2fa->generateSecretKey();
$companyName='Ankit';
$companyEmail='ankit.singh@convesio.com';

$qrCodeUrl = $google2fa->getQRCodeUrl(
    $companyName,
    $companyEmail,
    $secretKey
);

echo $qrCodeUrl;
/*
otpauth://totp/Ankit:ankit.singh%40convesio.com?secret=LAP3IX3PE3CU3W5W&issuer=Ankit&algorithm=SHA1&digits=6&period=30
*/

$google2fa_url = custom_generate_qrcode_url($companyName,$companyEmail,$secretKey);

function custom_generate_qrcode_url($companyName,$companyEmail,$secretKey){
    $google2fa = (new \PragmaRX\Google2FAQRCode\Google2FA());

    $inlineUrl = $google2fa->getQRCodeInline(
        $companyName,
        $companyEmail,
        $secretKey
    );
    return $inlineUrl;
}
?>

<?php echo $google2fa_url;?>