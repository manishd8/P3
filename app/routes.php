<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});


Route::get('/RUG', function()
{
	$query = Input::all();
	$BirthDate = "off";
	$Address = "off";
	$Profile = "off";
	$error = "no";
	$NumUser = "0";
	foreach ($query as $key => $value) {
		if($key=="NumUser")
		{
			if(($value>="0" && $value<="99") || $value==""){
				$NumUser = $value;
			}
			else
			{
				$error = "yes";
				break;
			}
		}
		if($key=="BirthDate")
		{
			$BirthDate = $value;
		}
		if($key=="Address")
		{
			$Address = $value;
		}
		if($key=="Profile")
		{
			$Profile = $value;
		}
	}
	
	
	return View::make('RandomUser')
			   ->with('NumUser', $NumUser)
			   ->with('error', $error)
			   ->with('BirthDate', $BirthDate)
			   ->with('Profile', $Profile)
			   ->with('Address', $Address);
});

Route::get('/LIG', function()
{
	$query = Input::get('NumPara');
	$error = "yes";
	if(($query>="0" && $query<="99") || $query==""){
		$error = "no";
	}
	else{
		$query = "0";
	}

	return View::make('Lorem')
			   ->with('NumPara', $query)
			   ->with('error', $error);
});

Route::get('/RPG', function()
{
	$OutputPassword='';
	$caseFlag = 'off';
	$WordArray = file(app_path().'\views\WordFile.txt');
	$WordCnt = 0;
	$SymCnt = 1;
	$numFlag = 'off';
	$symFlag = 'off';

	$query = Input::all();
	foreach ($query as $key => $value) {
		if($key=="WordCount")
		{
			$WordCnt = $value;
		}
		else if ($key=="NumberFlag") {
			$numFlag = $value;
		}
		else if ($key=="SymbolFlag") {
			$symFlag = $value;
		}
		else if ($key=="UpperCaseFlag") {
			$caseFlag = $value;
		}
		else if ($key=="SymbolCount") {
			$SymCnt = $value;
		}
	}

	for($i=0; $i<$WordCnt; ++$i)
	{
		$currRandNum = rand(0,4999);
		$result = $WordArray[$currRandNum];
		if($i==0 && $caseFlag == 'on')
		{
			$firstChar = $result[0];
			$result[0] = chr(ord($firstChar)-32);
		}

		$result = substr($result,0,(strlen($result)-2));
		$OutputPassword .= $result;
		if($i<($WordCnt-1))
			$OutputPassword.='-';
	}


	if($symFlag == 'on')
	{
		for($i=0; $i<$SymCnt; ++$i)
		{
			$symNum = rand(1,32);
			if($symNum<16)
				$OutputPassword.=chr(32+$symNum);
			else if($symNum<23)
				$OutputPassword.=chr(42+$symNum);
			else if($symNum<29)
				$OutputPassword.=chr(68+$symNum);
			else
				$OutputPassword.=chr(94+$symNum);
		}
	}

	if($numFlag=='on')
	{
		$Num = rand(0,9);
		$OutputPassword .= $Num;
	}

	return View::make('RandomPwdGenerator')
			   ->with('numFlag', $numFlag)
			   ->with('SymCnt', $SymCnt)
			   ->with('WordCnt', $WordCnt)
			   ->with('caseFlag', $caseFlag)
			   ->with('symFlag', $symFlag)
			   ->with('OutputPassword', $OutputPassword);
});
