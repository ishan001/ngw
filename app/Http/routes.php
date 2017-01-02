<?php

$app->get('/', function () {
    return view('home');
});


$app->post('form-submit', [
    'as' => 'form-submit',
    'uses' => 'Controller@submitForm'
]);
$app->post('call-us-submit', [
    'as' => 'call-us-submit',
    'uses' => 'Controller@callSubmitForm'
]);
