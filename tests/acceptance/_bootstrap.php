<?php
// Here you can initialize variables that will be available to your tests
function test_login($I)
{
     // if snapshot exists - skipping login
     if ($I->loadSessionSnapshot('login')) return;
     // logging in
     $I->wantTo('sign in'); 
     $I->amOnPage('/');
//$token = $I->grabTextFrom('ci_csrf_token');
//$token =  $I->grabValueFrom('input[name=ci_csrf_token]');

    $I->fillField('login', 'xxxxx');
    $I->fillField('password', 'xxxxx');
    $I->click('Sign In');
    $I->see('Dashboard');
     // saving snapshot
    $I->saveSessionSnapshot('login');
}