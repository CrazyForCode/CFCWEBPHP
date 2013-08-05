<?php
class sqll extends ModelsAction{
	public function __construct()
	{
		
		$this->MysqlStart();
		
		$this->connectSafeByConfig();
		
	}
	
	/***
	 * ����½
	*/
	public function checklogin()
	{
		
		$this->getsql()->connectsqlSafeExec("SET NAMES UTF8");
		$sql="INSERT INTO PAGE (PageTitle) VALUES ('fff')";
		$this->getsql()->connectsqlSafePrepare($sql);
		//$this->getsql()->connectsqlSafeBindParam(":username", $username);
		$smt=$this->getsql()->connectsqlSafeExecute();
		
		//if (md5($password)==$smt[0]["password"])
			//return $smt[0]["adminkey"]; else return false;
	}
	
	/**
	 * *����һƪ����
	 * @param unknown $PageTitle
	 * @param unknown $PageTag
	 * @param unknown $PageDate
	 * @param unknown $PageContent
	 * @param unknown $PagePreview
	 * @param unknown $PageDiscuss
	 * @param unknown $UserID
	 */
	public function addPage($PageTitle,$PageTag,$PageDate,$PageContent,$PagePreview,$PageDiscuss,$UserID){
		$this->getsql()->connectsqlSafeExec("SET NAMES UTF8");
		$sql="INSERT INTO PAGE (PageTitle,PageTag,PageDate,PageContent,PagePreview,PageDiscuss,UserID) VALUES (:PageTitle,:PageTag,:PageDate,:PageContent,:PagePreview,:PageDiscuss,:UserID)";
		$this->getsql()->connectsqlSafePrepare($sql);
		$this->getsql()->connectsqlSafeBindParam(":PageTitle", $PageTitle);
		$this->getsql()->connectsqlSafeBindParam(":PageTag", $PageTag);
		$this->getsql()->connectsqlSafeBindParam(":PageDate", $PageDate);
		$this->getsql()->connectsqlSafeBindParam(":PageContent", $PageContent);
		$this->getsql()->connectsqlSafeBindParam(":PagePreview", $PagePreview);
		$this->getsql()->connectsqlSafeBindParam(":PageDiscuss", $PageDiscuss);
		$this->getsql()->connectsqlSafeBindParam(":UserID", $UserID);
		$smt=$this->getsql()->connectsqlSafeExecute();
	}
	
	/**
	 * ����һ���û�
	 * @param unknown $PageTitle
	 * @param unknown $PageTag
	 * @param unknown $PageDate
	 * @param unknown $PageContent
	 * @param unknown $PagePreview
	 * @param unknown $PageDiscuss
	 * @param unknown $UserID
	 */
	
	public function addUser($UserName,$UserEnglishName,$UserPasswd,$UserInterests,$UserSkill,$UserRemarks,$UserEmail,$UserWebSite){
		$this->getsql()->connectsqlSafeExec("SET NAMES UTF8");
		$sql="INSERT INTO USERS (UserName,UserEnglishName,UserPasswd,UserInterests,UserSkill,UserRemarks,UserEmail,UserWebSite) VALUES (:UserName,:UserEnglishName,:UserPasswd,:UserInterests,:UserSkill,:UserRemarks,:UserEmail,:UserWebSite)";
		$this->getsql()->connectsqlSafePrepare($sql);
		$this->getsql()->connectsqlSafeBindParam(":UserName", $UserName);
		$this->getsql()->connectsqlSafeBindParam(":UserEnglishName", $UserEnglishName);
		$this->getsql()->connectsqlSafeBindParam(":UserPasswd", $UserPasswd);
		$this->getsql()->connectsqlSafeBindParam(":UserInterests", $UserInterests);
		$this->getsql()->connectsqlSafeBindParam(":UserSkill", $UserSkill);
		$this->getsql()->connectsqlSafeBindParam(":UserRemarks", $UserRemarks);
		$this->getsql()->connectsqlSafeBindParam(":UserEmail", $UserEmail);
		$this->getsql()->connectsqlSafeBindParam(":UserWebSite", $UserWebSite);
		$smt=$this->getsql()->connectsqlSafeExecute();
	}
	
	/*
	 *ɾ��һƪ���� 
	 */
	
	public function delPage($id){
		$this->getsql()->connectsqlSafeExec("SET NAMESUTF8");
		$sql="DELETE FROM Page WHERE PageID=".$id;
		$smt=$this->getsql()->connectsqlSafeExecute();
		return $smt;
		
	}
	/*
	 * ɾ��һƪ�û�
	 */
	
	
	public function delUser($id){
		$this->getsql()->connectsqlSafeExec("SET NAMESUTF8");
		$sql="DELETE FROM USERS WHERE UserID=".$id;
		$smt=$this->getsql()->connectsqlSafeExecute();
		return $smt;
		
	}
	/*
	 * �޸�����
	 */
	
	public function updataPage($PageTitle,$PageTag,$PageContent,$PagePreview,$UserID){
		$this->getsql()->connectsqlSafeExec("SET NAMES UTF8");
		$sql="UPDATA  PAGE  SET PageTitle=:PageTitle,PageTag=:PageTag,PageContent=:PageContent,PagePreview=:PagePreview,UserID=:UserID";
		$this->getsql()->connectsqlSafePrepare($sql);
		$this->getsql()->connectsqlSafeBindParam(":PageTitle", $PageTitle);
		$this->getsql()->connectsqlSafeBindParam(":PageTag", $PageTag);
		$this->getsql()->connectsqlSafeBindParam(":PageContent", $PageContent);
		$this->getsql()->connectsqlSafeBindParam(":PagePreview", $PagePreview);
	
		$this->getsql()->connectsqlSafeBindParam(":UserID", $UserID);
		$smt=$this->getsql()->connectsqlSafeExecute();
	}
	/*
	 * ����һ���û�����
	 */
	public function updataUser($UserName,$UserEnglishName,$UserPasswd,$UserInterests,$UserSkill,$UserRemarks,$UserEmail,$UserWebSite){
		$this->getsql()->connectsqlSafeExec("SET NAMES UTF8");
		$sql="UPDATA  USERS  SET UserName=:UserName,UserEnglishName=:UserEnglishName,UserPasswd=:UserPasswd,UserInterests=:,UserSkill=:,UserRemarks=:UserRemarks,UserEmail=:UserEmail,UserWebSite=:UserWebSite";
		$this->getsql()->connectsqlSafePrepare($sql);
		$this->getsql()->connectsqlSafeBindParam(":UserName", $UserName);
		$this->getsql()->connectsqlSafeBindParam(":UserEnglishName", $UserEnglishName);
		$this->getsql()->connectsqlSafeBindParam(":UserPasswd", $UserPasswd);
		$this->getsql()->connectsqlSafeBindParam(":UserInterests", $UserInterests);
		$this->getsql()->connectsqlSafeBindParam(":UserSkill", $UserSkill);
		$this->getsql()->connectsqlSafeBindParam(":UserRemarks", $UserRemarks);
		$this->getsql()->connectsqlSafeBindParam(":UserEmail", $UserEmail);
		$this->getsql()->connectsqlSafeBindParam(":UserWebSite", $UserWebSite);
		$smt=$this->getsql()->connectsqlSafeExecute();
	}
	
	/*
	 * �����û�����
	 */
	
	public function UserCount(){
		$this->getsql()->connectsqlSafeExec("SET NAMESUTF8");
		$sql="SELECT *FROM USERS";
		$smt=$this->getsql()->connectsqlSafeExecute();
		return $smt;
	
	}
	/*
	 * ������������
	 */
	
	public function PageCount(){
		$this->getsql()->connectsqlSafeExec("SET NAMESUTF8");
		$sql="SELECT *FROM Page";
		$smt=$this->getsql()->connectsqlSafeExecute();
		return $smt;
		
	}
	
	/*
	 * ���µķ�ҳ
	 */
	public  function selectPage($start,$num){
		$this->getsql()->connectsqlSafeExec("SET NAMESUTF8");
		$sql="SELECT TOP :num *FROM PAGE WHERE id NOT IN (SELECT TOP :num*(:strat-1) id FROM PAGE ORDER BY id) ORDER BY id";
		$this->getsql()->connectsqlSafeBindParam(":num", $num);
		$this->getsql()->connectsqlSafeBindParam(":start", $start);
		
	}
	
	/*
	 * �û��ķ�ҳ
	 */
	
	public  function selectUser($start,$num){
		$this->getsql()->connectsqlSafeExec("SET NAMESUTF8");
		$sql="SELECT TOP :num *FROM USERS WHERE id NOT IN (SELECT TOP :num*(:strat-1) id FROM USERS ORDER BY id) ORDER BY id";
		$this->getsql()->connectsqlSafeBindParam(":num", $num);
		$this->getsql()->connectsqlSafeBindParam(":start", $start);
	
	}
	
	
}