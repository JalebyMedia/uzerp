<?php

/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/

class CompanyTypeCollection extends DataObjectCollection
{

	protected $version = '$Revision: 1.5 $';
	
	function __construct($do = 'CompanyType')
	{
		parent::__construct($do);
	}

}

// End of CompanyTypeCollection
