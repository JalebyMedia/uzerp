<?php
 
/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/
class WHTransferCollection extends DataObjectCollection {
	
	protected $version='$Revision: 1.3 $';
	
	public $field;
		
	function __construct($do='WHTransfer', $tablename='wh_transfers_overview') {
		parent::__construct($do, $tablename);
					
	}
		
}
?>