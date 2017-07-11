<?php
require("header.php");
 $con_obj=new dbcon();   // create object for database connection class
    $connect_ref=$con_obj->connect(); // call the member function of database connection (dbcon) class
    $projectname=json_decode($_POST['myData'])->name;
	    $clientname=json_decode($_POST['myData'])->customer;
    $sql="select * from `template` where `projectname`=? and `clientname`=?";
	$response=array();
    if($stmt = $connect_ref -> prepare($sql)) {
	
        $stmt -> bind_param('ss',$projectname,$clientname);
        $stmt -> execute();
		$stmt->bind_result($projectname,$clientname,$clientplace,$designername,$designerplace,$salutation,$subject,$descripation,$complementary,$designername1,$feecalculated,$service,$execute,$AccountHoldersName,$BranchName,$AccountNumber,$IFSCCode,$BankName,$SWIFTCode,$Name,$position,$contents,$phonenumber);
		$stmt->fetch();
		$response['projectname']=$projectname;
		$response['clientname']=$clientname;
		$response['clientplace']=$clientplace;
		$response['designername']=$designername;
		$response['designerplace']=$designerplace;
		$response['salutation']=$salutation;
		$response['subject']=$subject;
		$response['descripation']=$descripation;
		$response['complementary']=$complementary;
		$response['designername1']=$designername1;
		$response['feecalculated']=$feecalculated;
		$response['service']=$service;
		$response['execute']=$execute;
		$response['AccountHoldersName']=$AccountHoldersName;
		$response['BranchName']=$BranchName;
		$response['AccountNumber']=$AccountNumber;
		$response['IFSCCode']=$IFSCCode;
		$response['BankName']=$BankName;
		$response['SWIFTCode']=$SWIFTCode;
		$response['Name']=$Name;
		$response['position']=$position;
		$response['contents']=$contents;
		$response['phonenumber']=$phonenumber;
        $stmt -> close();
		
    }
	
	echo json_encode($response);
	?>