<?php
 
/** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/

class HasrolesController extends Controller {

	protected $_templateobject;

	public function __construct($module=null,$action=null) {
		parent::__construct($module, $action);
		$this->_templateobject = new HasRole();
		$this->uses($this->_templateobject);
	
		

	}

	public function index(){
		global $smarty;
		
		$s_data=array();
		
// Set context from calling module
		if (isset($this->_data['username'])) {
			$s_data['username'] = $this->_data['username'];
		}
		if (isset($this->_data['roleid'])) {
			$s_data['roleid'] = $this->_data['roleid'];
		}
		
		$this->setSearch('AdminSearch', 'HasRole', $s_data);
		
		parent::index(new HasRoleCollection($this->_templateobject));
		
	}

	public function delete(){
		$flash = Flash::Instance();
		parent::delete('HasRole');
		sendTo('HasRoles','index',array('admin'));
	}
	
	public function view()
	{
		$id = $this->_data['id'];
		global $smarty;
		$this->view->set('clickaction', 'viewuser');
		$collection = new HasRoleCollection($this->_templateobject);
		$sh = new SearchHandler($collection);
		$sh->extract();
		$sh->addConstraint(new Constraint('roleid','=', $id));
		$collection->load($sh);
		$this->view->set(strtolower($collection->getModelName()).'s',$collection);
		$this->view->set('num_pages',$collection->num_pages);
		$this->view->set('cur_page',$collection->cur_page);
	}

	public function save() {
	$flash=Flash::Instance();
	if(parent::save('HasRole'))
			sendTo('HasRoles','index', array('admin'));
	else {
			$this->_new();
			$this->_templateName=$this->getTemplateName('new');
		}

	}
}
?>
