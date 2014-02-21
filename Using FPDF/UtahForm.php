<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Utah Plant Pest Diagnostic Lab</title>
<link href="Styles/css/flat-ui.css" type="text/css" rel="stylesheet">	
<link href="Styles/css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="Styles/css/demo.css" type="text/css" rel="stylesheet">

</head>

<body>
<?php
	$Name = $_POST[Name];
	$Address1 = $_POST[Address1];
	$Address2 = $_POST[Address2];
	$City = $_POST[City];
	$State = $_POST[herolist];
	$Zip = $_POST[Zip];
	$Cell = $_POST[Cell];
	$EMail = $_POST[Email];
	$PlantCommonName = $_POST[PlantCommonName];
	$PlantScientificName = $_POST[PlantScientificName];
	$PlantAge = $_POST[PlantAge];
	$PlantSize = $_POST[PlantSize];
	$Details = $_POST[Details];
?>	
	
	
	<div class="container">
	<form action="UtahForm.php" method="post">
	<div class="demo-headline" style="background-color:#B9E3FD">
    	<img src="Images/header-logo.jpg" alt="logo" class="col-sm-3">
       <h1 class=>  Utah Plant Pest Diagnostic Lab </h1>
       <p> Utah Plant Pest Diagnostic Lab, Department of Biology, 5305 Old Hill Rd, Logan, UT </p>
    </div>
    <br>
    <h3 class="demo-panel-title"> SUBMITTER INFORMATION </h3>
    <div class="row">
    	<div class="col-sm-12">
        	<div class="form-group">
				<p><?php echo "Name : $Name"; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	<div class="form-group">
				<p><?php echo "Address Line 1 : $Address1"; ?></p>
            </div>
        </div>
        <div class="col-sm-6">
        	<div class="form-group">
				<p><?php echo "Address Line 2 : $Address2"; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	<div class="form-group">
				<p><?php echo " City : $City"; ?></p>
            </div>
        </div>
        <div class="col-sm-3">
        	<div class="form-group">
				<p><?php echo " State : $State"; ?></p>
            </div>
        </div>
        <div class="col-sm-3">
        	<div class="form-group">
				<p><?php echo " Zip : $Zip"; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	<div class="form-group">
				<p><?php echo " Cell : $Cell"; ?></p>
            </div>
        </div>
        <div class="col-sm-6">
        	<div class="form-group">
				<p><?php echo " E-Mail : $EMail"; ?></p>
            </div>
        </div>
    </div>
    
    
    <h3 class="demo-panel-title"> COLLECTOR INFORMATION </h3>
    <div class="row">
    	<div class="col-sm-12">
        	<div class="form-group">
				<p><?php echo " PlantCommonName : $PlantCommonName"; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        	<div class="form-group">
				<p><?php echo " PlantScientificName : $PlantScientificName"; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-3">
        	<div class="form-group">
				<p><?php echo " PlantAge : $PlantAge"; ?></p>
            </div>
        </div>
        <div class="col-sm-3">
        	<div class="form-group">
				<p><?php echo " PlantSize : $PlantSize"; ?></p>
            </div>
        </div>
        <div class="col-sm-4">
        	<h4> Condition Worsening? </h4>
        </div>
        <div class="col-sm-1">
        	<label class="radio checked">
            	<span class="icons">
                <span class="first-icon fui-radio-unchecked"></span>
                <span class="second-icon fui-radio-checked"></span>
                </span>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" data-toggle="radio" checked="">
            	Yes
            </label>
        </div>
        <div class="col-sm-1">
        	<label class="radio unchecked">
            	<span class="icons">
                <span class="first-icon fui-radio-unchecked"></span>
                <span class="second-icon fui-radio-checked"></span>
                </span>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" data-toggle="radio" checked="">
            	No
            </label>
        </div>
    </div>
    
    <h3 class="demo-panel-title"> PLANT SYMPTOM(S) DESCRIPTION </h3>
	<div class="row">
    	<div class="col-sm-12">
        	<div class="form-group">
            	<h5> Describe in detail what is wrong with the plant and what parts are affected </h5>
				<p><?php echo " Details : $Details"; ?></p>
			</div>
        </div>
    </div>
    <h3 class="demo-panel-title"> PEST SYMPTOM(S) IMAGES </h3>
	<div class="row">
    	<div class="col-sm-12">
        	<div class="form-group">
            	<h5>If possible, please provide photos of affected plant(s). A range of photos from landscape-level shots to close-ups are ideal. Including photos can aid diagnostics. </h5>
                
			</div>
        </div>
        <div class="col-sm-10">
        	<div class="form-group">

            </div>
        </div>
        <div class="col-xs-2">
          <a href="#" class="btn btn-block btn-primary">Attach</a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">

    </div>

    
    
    
    
    
    
    
    
    
    
    
    
    
	</div>
	
</body>
</html>