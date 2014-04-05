<?php
class Post extends AppModel {

	public function isOwnedBy($post, $user) {
		return $this->field('id', array('id' => $post,
							'user_id' => $user)) === $post;
	}
	
	public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
	
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id')
	);
}
?>