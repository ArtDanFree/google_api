<?php

use App\Model;

require_once __DIR__ . '/autoload.php';

if (!empty($_POST)) {
    return Model::create();
} else {
    $data = Model::findAll();
    if (!empty($data)) {
        Api::unloadGoogle($data);
        return header('Location:https://docs.google.com/spreadsheets/d/1NwCz-6k2X84EqqBGBcX9vzubA533NK-FhV0QvwgQu94/edit#gid=0');
    }
}
