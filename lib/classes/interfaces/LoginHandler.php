<?php
 
/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/
interface LoginHandler {
	public function __construct(AuthenticationGateway $gateway);
	public function doLogin();

}
?>
