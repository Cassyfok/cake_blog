<?php
    class TimeUsersController extends AppController
    {
        public $name = "TimeUsers";
		public $helpers = array('Time');
		
        public function userCleanUp( ){
            // include the time helper
            App::import( 'Helper', 'Time' );
            $time = new TimeHelper();
            $checkTime = $time->gmt( );
            $this->set( 'checkTime',$checkTime );
        }
    }
?>