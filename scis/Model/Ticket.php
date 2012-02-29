<?php

class Ticket extends AppModel {
	public $primaryKey = '_id';
	//var $useDbConfig = 'mongo';
	 public $useDbConfig = 'mongodb';
	var $mongoSchema = array(
			'subject' => array('type'=>'string'),
			'body'=>array('type'=>'text'),
			'created'=>array('type'=>'datetime'),
			'modified'=>array('type'=>'datetime'),
			);

}