<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');
	
	public function index() {
		//finding all the records in the Post table & handing the response to the index.ctp//
        $this->set('posts', $this->Post->find('all'));
    }

	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }
	//this function will allow us to add to the posts database//
	public function add() {
		//checking if this is a HTTP post request//
        if ($this->request->is('post')) {
			//initializing the Post Model//
            $this->Post->create();
			//handing the request object data to be saved by the Post Model//
            if ($this->Post->save($this->request->data)) {
				//flashing a success message//
                $this->Session->setFlash(__('Your post has been saved.'));
				//redirecting to the Posts index action//
                return $this->redirect(array('action' => 'index'));
            }
			//flashing a message saying we weren't able to do it//
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }
	
	//function will allow us to edit an existing post//
		public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Post->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }
	
	//to check if is a post request or put request//
    if ($this->request->is(array('post', 'put'))) {
        $this->Post->id = $id;
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }
	
    if (!$this->request->data) {
        $this->request->data = $post;
    }
}
	
	//send id to the posts that need to be deleted//
	public function delete($id) {
		//if is HTTP get request don't allow//
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		//if the post is been deleted//
		if ($this->Post->delete($id)) {
			$this->Session->setFlash(
				__('The post with id: %s has been deleted.', h($id))
			);
			return $this->redirect(array('action' => 'index'));
		}
	}

}
?>









