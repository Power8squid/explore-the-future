<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $configPath = __DIR__ . '/config.php';
    if (!is_readable($configPath)) {
        echo "Formuläret är inte konfigurerat ännu.";
        exit;
    }

    $config = require $configPath;

    if (empty($_POST['g-recaptcha-response'])) {
        echo "reCAPTCHA-svaret saknas.";
        exit;
    }

    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $discord = htmlspecialchars($_POST['discord'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $recaptcha_secret = $config['recaptcha_secret'];
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $min_score = $config['recaptcha_min_score'] ?? 0.5;

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . urlencode($recaptcha_secret) . "&response=" . urlencode($recaptcha_response));
    $response_keys = json_decode($response, true);

    if (intval($response_keys["success"] ?? 0) !== 1 || ($response_keys["score"] ?? 0) < $min_score) {
        echo "reCAPTCHA-verifieringen misslyckades. Försök igen.";
        exit;
    }

    $webhook_url = $config['discord_webhook'];
    $json_data = json_encode([
        "content" => "**Ny intresseanmälan**\nNamn: $name\nE-post: $email\nDiscord: $discord\nMeddelande:\n$message"
    ]);

    $ch = curl_init($webhook_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);

    echo "Tack för din anmälan, $name! Ditt meddelande har skickats till vår Discord-kanal.";
}
