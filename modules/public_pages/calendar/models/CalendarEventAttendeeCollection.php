<?php
 
/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/
class CalendarEventAttendeeCollection extends DataObjectCollection {
	
		public $field;
		
		function __construct($do='CalendarEventAttendee') {
			parent::__construct($do);
			
		}
	
		
		
}
?>
