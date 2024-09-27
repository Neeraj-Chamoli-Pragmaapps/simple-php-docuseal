<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Builder</title>
        <script src="https://cdn.docuseal.co/js/builder.js"></script>
    </head>
    <body>
        <?php
        require_once '../vendor/autoload.php';
        use Firebase\JWT\JWT;

        $payload = [
            'user_email' => 'abhinavm@gmail.com',
            'integration_email' => 'neeraj.chamoli@pragmaapps.com',
            'name' => 'Integration W-9 Test Form',
            'document_urls' => [],
        ];

        $apiToken = 'NQRMrfRxedoPgCcVXU2a6tLXhX6iiqy442d74Vs6W4N';
        $token = JWT::encode($payload, $apiToken, 'HS256');
        ?>
        <docuseal-builder data-token="<?php echo $token; ?>"></docuseal-builder>
    </body>
</html>
