<?php

/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/

class EmployeeCollection extends DataObjectCollection
{
	
	protected $version = '$Revision: 1.8 $';
	
	public $field;
		
	function __construct($do = 'Employee', $tablename = 'employeeoverview')
	{
		parent::__construct($do, $tablename);

		$this->identifierField='employee';
	}

}

// End of EmployeeCollection
