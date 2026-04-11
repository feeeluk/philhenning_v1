<?php

	// start php session
	session_start();

	// set the default time to avoid stupid error on local machine - I should probably figure out how to change the setting on my Apache server
	date_default_timezone_set('Europe/London');

	//if it matches the live environment then set variables to server paths	
	if($_SERVER['SERVER_NAME']==="philhenningv1.pdhtechnology.com")
		{
			// set server access variables 
			$hostname = "db5020158035.hosting-data.io"; 
			$username = "dbu4441129"; 
			$password = "ionCcyh68@c3145327os"; 
			$databaseName = "dbs15515737";
			$site = "https://philhenningv1.pdhtechnology.com/";
			$siteTitle = "Philhenning";
			$logo = "assets/images/logo.png";
		}

	//if it matches the live environment then set variables to server paths	
	elseif($_SERVER['SERVER_NAME']==="test-philhenningv1.pdhtechnology.com")
		{
			// set server access variables 
			$hostname = "db5020158035.hosting-data.io"; 
			$username = "dbu4441129"; 
			$password = "ionCcyh68@c3145327os"; 
			$databaseName = "dbs15515737";
			$site = "https://test-philhenningv1.pdhtechnology.com/";
			$siteTitle = "LIVE TEST";
			$logo = "assets/images/logo_live_test.png";
		}
	//detect the server name - if it matches the local testing environment then set variables to local paths
	else if($_SERVER['SERVER_NAME']==="philhenningv1.test")
		{
			// set server access variables 
			$hostname = "localhost"; 
			$username = "phil"; 
			$password = "Ccyh68@c3145327"; 
			$databaseName = "philhenningv1";
			$site = "http://philhenningv1.test/";
			$siteTitle = "LOCAL TEST";
			$logo = "assets/images/logo_local_test.png";
		}

	// create a variable that stores the mysql_connection details, and connects to the database
	$connection = mysqli_connect($hostname, $username, $password, $databaseName) or die ("Unable to connect.".mysqli_connect_error());

    switch($site)
    {
        case "http://philhenningv1.test/":
        
        // $testingLink = "http://philhenningv1.test/";
        $portal = "http://commercialsalesportal.test/";
        $snowCompare = "http://snowcompare.test/";
        $snowCompareShop = "http://snowcompareshop.test/";
        $university = "http://philhennnigv1.test/university/";
        $treedata = "http://treedatav1.test/";
        $pointsAcademy = "http://pointsacademy.test/";
        $philhenning = "http://philhenningv1.test/";
        break;

        case "https://philhenningv1.pdhtechnology.com/":
    
        // $testingLink = "http://philhenningv1.test/";
        $portal = "https://commercialsalesportal.pdhtechnology.com/";
        $snowCompare = "https://snowcompare.pdhtechnology.com/";
        $snowCompareShop = "https://snowcompareshop.pdhtechnology.com/";
        $university = "https://philhennnigv1.pdhtechnology.com/university/";
        $treedata = "https://treedatav1.pdhtechnology.com/";
        $pointsAcademy = "https://pointsacademy.pdhtechnology.com/";
        $philhenning = "https://philhenningv1.pdhtechnology.com/";
        break;

		case "https://test-philhenningv1.pdhtechnology.com/":
    
        // $testingLink = "http://philhenningv1.test/";
        $portal = "https://commercialsalesportal.pdhtechnology.com/";
        $snowCompare = "https://snowcompare.pdhtechnology.com/";
        $snowCompareShop = "https://snowcompareshop.pdhtechnology.com/";
        $university = "https://philhennnigv1.pdhtechnology.com/university/";
        $treedata = "https://treedatav1.pdhtechnology.com/";
        $pointsAcademy = "https://pointsacademy.pdhtechnology.com/";
        $philhenning = "https://philhenningv1.pdhtechnology.com/";
        break;
    }

?>