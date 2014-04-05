<?php
App::uses('CakeEventListener', 'Event');
App::uses('CakeEmail', 'Network/Email');
App::uses('Security', 'Utility');
class UserListener implements CakeEventListener {
    
    public function implementedEvents() {
       return array(
        'Model.User.created' => 'sendActivationEmail'
    );
    }
	
	public function sendActivationEmail(CakeEvent $event) {
    $this->User = ClassRegistry::init('User');
    
    $activationKey = Security::generateAuthKey();
    
    $this->User->id = $event->data['id'];
    $this->User->set(array(
        'active' => false,
        'activation_key' => $activationKey
    ));
    $this->User->save();
    
    $email = new CakeEmail();
    $email->from(array(
        'noreply@example.com' => 'Your Site'
    ));
    $email->to($event->data['user']['email']);
    $email->subject('Activate your account');
    $email->template('new_user');
    $email->viewVars(array(
        'firstName' => $event->data['user']['first_name'],
        'activationKey' => $activationKey
    ));
    $email->emailFormat('text');
    $email->send();
}
}