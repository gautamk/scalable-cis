<?php 

class TicketsController extends AppController{
	public $components = array('RequestHandler');
	public $helpers = array( "html", "form");
	public function beforeRender() {
        $this->viewClass = 'Theme';
        $this->theme = 'Bootstrap';
    }
    public $name = 'Tickets';
    public function index(){
    	
    }

    public function data_index(){
    	$params = array(
			'fields' => array('subject', 'body'),
			//'fields' => array('Post.title', ),
			//'conditions' => array('title' => 'hehe'),
			//'conditions' => array('hoge' => array('$gt' => '10', '$lt' => '34')),
			//'order' => array('title' => 1, 'body' => 1),
			'order' => array('_id' => -1),
			'limit' => 35,
			'page' => 1,
		);
		$results = $this->Ticket->find('all', $params);
		$this->set(compact('results'));
    }

    public function add() {
		if (!empty($this->data)) {

			$this->Ticket->create();
			if ($this->Ticket->save($this->data)) {
				$this->flash(__('Ticket saved.', true), array('action' => 'index'));
			} else {
			}
		}
	}
}