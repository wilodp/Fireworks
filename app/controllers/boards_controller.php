<?php

class BoardsController extends AppController{

	public $name = 'Boards';

	function index(){
		$data = null;
		if(!empty($this->data)){
			$data = $this->Board->find('all',array('conditions'=>array('Board.id'=>$this->data['Board']['id'])));
		}else{
			$data = $this->Board->find('all');
		}
		$this->set('data',$data);
	}

	function addRecord(){
		if(!empty($this->data)){
			$this->Board->save($this->data);
		}
		$this->redirect('.');
	}

}