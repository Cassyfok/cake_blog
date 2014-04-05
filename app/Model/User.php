<?php
//app/Model/User.php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
//observer
class User extends AppModel {
	
	 public $validate = array(
		'name' =>array(
			'Please enter your name.'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your name.'
			)
		),
        'username' => array(
            'required' => array(
                'rule' => array('isUnique'),
                'message' => 'Username has been taken'
            )
        ),
		
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please enter your password'
            ),
			'match passwords'=>array(
			'rule'=>'matchPasswords',
			'message'=>'Your passwords do not match'
			)
		),
		'password_confirmation' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Confirmation password is require'
            )
        ),
	
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author','customer')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
	
	// creating a method matchPassword our custom validation is going to receive an argument and that argument is going to 
	// receive the $data which is pass from our validation field, the argument the $data is going to containing the date in the value of the filed that we want to validate 
	// in this case the argument $date, using if we validate the $data password to be equal than the confirmation field if the passwords match we have to return true otherwise we have to return false and display
	// message (your passwords do not match
	
	public function matchPasswords($data){
			if($data['password']== $this->data['User']['password_confirmation']){
			return true;
			}
			$this->invalidate('password_confirmation', 'Your passwords do not match');
			return false;
	}
	
	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new SimplePasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
	}
	
	public $hasMany = array('Post' => array('className' => 'Post'));

	public function afterSave($created, $options = array()) {
        if ($created) {
            $event = new CakeEvent('Model.User.created', $this, array(
                'id' => $this->id,
                'data' => $this->data[$this->alias]
            ));
            $this->getEventManager()->dispatch($event);
        }
    }
}


?>