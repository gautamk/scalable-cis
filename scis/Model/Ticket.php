<?php

class Post extends AppModel {
	public $primaryKey = '_id';
	//var $useDbConfig = 'mongo';
	
	var $mongoSchema = array(
			'subject' => array('type'=>'string'),
			'body'=>array('type'=>'text'),
			'created'=>array('type'=>'datetime'),
			'modified'=>array('type'=>'datetime'),
			);

}