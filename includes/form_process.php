<?php
require '../vendor/autoload.php';
require 'config.php';

try {
    $email = $_POST['email'];
    echo $email;

    $client = new Google_Client();
    $client->setApplicationName('Lamur');
    $client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    $client->setAuthConfig(__DIR__ . '/credentials.json');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = GOOGLE_SHEET_ID;
    $range = 'Sheet1';

    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();

    $valueRange = new Google_Service_Sheets_ValueRange();
    $valueRange->setValues(["values" => [$email, date("F j, Y, g:i a", time())]]);

    $params = ['valueInputOption' => 'RAW'];
    $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $params);

    header("Location: " . SITE_BASE_PATH );

} catch (Exception $exception) {
    echo 'Something went wrong in adding record to google sheets <br>' . $exception;
}
