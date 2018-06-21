<?php
require_once __DIR__ . '/vendor/autoload.php';


use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

class Api
{

    public static function unloadGoogle($data)
    {

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/MyProject.json');

        $client = new Google_Client;

        $client->useApplicationDefaultCredentials();
        $client->setApplicationName("Something to do with my representatives");
        $client->setScopes(['https://www.googleapis.com/auth/drive', 'https://spreadsheets.google.com/feeds']);

        if ($client->isAccessTokenExpired()) {
            $client->refreshTokenWithAssertion();
        }
        $accessToken = $client->fetchAccessTokenWithAssertion()["access_token"];
        ServiceRequestFactory::setInstance(
            new DefaultServiceRequest($accessToken)
        );


        $spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
        $spreadsheetFeed = $spreadsheetService->getSpreadsheetFeed();

        $spreadsheet = $spreadsheetFeed->getByTitle('MyTable');

        $worksheets = $spreadsheet->getWorksheetFeed()->getEntries();
        $worksheet = $worksheets[0];

        $listFeed = $worksheet->getListFeed();

        foreach ($data as $item) {
            $listFeed->insert($item);
        }

    }
}