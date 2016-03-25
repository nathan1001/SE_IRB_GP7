<?php
include_once("../projectUsers2.php");

class projectUsers2Test extends PHPUnit_Framework_TestCase
{
    public function testgetUsers()
    {
    	$username = "ebenezer.dzobo";
	
        $obj=new projectUsers2();
		
        $this->assertEquals(true, 
		$obj->getUsers(
			$username				//username
			));
			
		$this->assertEquals(true,$obj->query("select USERCODE,USERNAME,FIRSTNAME,LASTNAME,PERMISSION,users.USERGROUP_ID,STATUS,PERMISSION+0 as NPERMISSION,STATUS+0 as NSTATUS from users left join usergroups on users.USERGROUP_ID=usergroups.USERGROUP_ID where USERNAME='$username'"));
		//count the number of fields
		$this->assertCount(9,$obj->fetch());
    }

     public function testsearchUsers()
    {
    	$username = "ebenezer.dzobo";
	
        $obj=new projectUsers2();
		
        $this->assertEquals(true, 
		$obj->searchUsers(
			$username				//username
			));
			
		$this->assertEquals(true,$obj->query("select * from users where username='$username'"));
		//count the number of fields
		$this->assertCount(8,$obj->fetch());
    }

	
}