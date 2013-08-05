<?php
class indexcontroller extends ControllerAction
{
	public function init()
	{
	}
	public function indexAction()
	{
	
		$this->loadView("index");
		$this->render("oo", "ii");
		$this->display();
		
		$this->includeSqlFile("sql");
		
		$jj=new sqll();
		$jj->checklogin();
		
	}
}
