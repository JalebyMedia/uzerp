<?php  
 
/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/
class BLKOrderForm {

	protected $version='$Revision: 1.10 $';
	protected $controller;

	function __construct(&$_this) {
		// we're not extending an object, so let's get the callee model (printController) in to access it's methods
		$this->controller=$_this;
	}
	
	function buildReport($args) { // $MFWorkorders, $data, $bulk=true) {
		
		// specify default args
		$default_args=array(
			'bulk'	=>	TRUE
		);
		
		// build args from merged args + defaults
		$args=array_merge($default_args,$args);
		
		// make sure required items have been set		
		if(!isset($args['model']) || !isset($args['data'])) { return FALSE; }
		
		// set a few vars
		$MFWorkorders=$args['model'];
		$data=$args['data'];
		$bulk=$args['bulk'];
		$dynamic_limit = 40; // must be even
		$pages=1;
		$extra=array();
												
		// get product code
		$stitem=new STItem();
		$stitem->load($MFWorkorders->stitem_id);
		$extra['item_code']=$stitem->item_code;
		
		// construct the lines
		$row_count=$dynamic_limit/2;
		
		/*
		 * $p = page
		 * $r = row
		 */
		for($p=0;$p<$pages;$p++) {
			$start_value=($dynamic_limit*$p)+1;
			for($r=0;$r<$row_count;$r++) {
				$extra['pages'][$p]['page'][$r]['line']=array('field1'=>'',
															  'field2'=>''
															  );
			}
		}
		
		// construct filler xml to prevent repeating xsl
		$dummy_tables=array('table_1'=>6);
		foreach($dummy_tables as $table => $rows) {
			for($i=0;$i<$rows;$i++) {
				$extra[$table][]['line']='';
			}
		}
		
		// generate the XML, include the extras array too
		$xml=$this->controller->generateXML(array('model'=>$MFWorkorders,'extra'=>$extra));
		
		// build a basic list of options
		$options=array(
			'report'	=> 'MF_BLKOrderForm',
			'xmlSource'	=> $xml
		);
		
		if(isset($args['merge_file_name'])) {
			$options['merge_file_name']=$args['merge_file_name'];
		}
		
		return json_decode($this->controller->generate_output($data,$options));
		
	}
}
?>