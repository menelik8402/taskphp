<?php 
   
   class GoogleAuth{

        protected $client;

        public function __construct(Google_Client $google_Client=null)
        {
            $this->client=$google_Client;
            if($this->client )
            {
                $this->client->setClientId('793638097839-fjquqt8ug62lrbj78knm7htiqrc8vsoe.apps.googleusercontent.com');
                $this->client->setClientSecret('F4uKGh0PPT5ceIT8M_xxXr3_') ;
                $this->client->setRedirectUri('https://localhost/Task/redirect/index.php');
                $this->client->setScopes('email');
            }
        }

   }

?>