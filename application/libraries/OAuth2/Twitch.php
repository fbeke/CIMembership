<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'libraries/OAuth2/OAuth2_Abstract.php');

class Twitch extends OAuth2_Abstract
{

    public function __construct() {
        parent::__construct();
        $this->_scope = "user_read";
    }

    public function setProvider($data) {

        $this->_provider = new Depotwarehouse\OAuth2\Client\Twitch\Provider\Twitch([
            'clientId'          => $data->client_id,
            'clientSecret'      => $data->client_secret,
            'redirectUri'       => base_url() .'auth/oauth2/verify/Twitch'
        ]);

    }
}