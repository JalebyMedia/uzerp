<?php

/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/

class PersonNoteCollection extends DataObjectCollection
{

	protected $version = '$Revision: 1.5 $';
	
	function __construct($do = 'PersonNote', $tablename = 'person_notesoverview')
	{
		parent::__construct($do, $tablename);

	}
}	

// End of PersonNoteCollection
