<?php
 
/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/
class ResourcetypeCollection extends DataObjectCollection {
	
	public $field;

	function __construct($do='resourcetype') {
		parent::__construct($do);
	}
	
}
?>