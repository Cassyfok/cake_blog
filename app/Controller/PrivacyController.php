<?php
class PrivacyController extends AppController {	
	
    public $helpers = array('Html', 'Form', 'Text');
	public $components = array('Session');
	
	
	
	public function index() {
		//finding all the records in the Post table & handing the response to the index.ctp//
        $this->set('privacies', $this->Privacy->find('all'));
	}
	
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}	

	public function view($id = null) {
        $this->set('privacies', $privacy);
    }
	

		
		
	
	

}
?>