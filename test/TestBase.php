<?php

require_once('../lib/Prism.php');

class TestBase extends PHPUnit_Framework_TestCase {

    var $client_id  = 'pufy2a7d';
    var $secret     = 'skqovukpk2nmdrljphgj';
    var $url        = 'http://192.168.51.50:8080/api';
    var $oauth_url  = '192.168.51.50:8080/oauth/authorize?client_id=pufy2a7d';
    var $code       = 'y4shnnkzycxmfcq7rk63';

    var $headers = array(
        'X_API_UNITTEST1' => 'A',
        'X_API_UNITTEST2' => 'B'
    );

    var $params = array(
        'param1' =>'C',
        'param2' =>'D',
    );

    function __construct() {

        $url = str_replace('/api', '', $this->url);
        $this->oauth_client = new Prism($url, $this->client_id, $this->secret);

    }

}