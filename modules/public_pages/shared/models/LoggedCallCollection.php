<?php
 
/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/
class LoggedCallCollection extends DataObjectCollection {
	
	function __construct($do='LoggedCall', $tablename='loggedcallsoverview') {
		parent::__construct($do, $tablename);

	}
	
}
?>