<?php
 
/** 
 *	(c) 2017 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/
class MFResourceCollection extends DataObjectCollection {
	
	public $field;
		
	function __construct($do='MFResource') {
		parent::__construct($do);
			
	}

}
?>