<!DOCTYPE html>
    <html lang = "en">
    	<head>
    		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
    				<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    		<title>OOP PHP CRUD Operation</title>
			<style>
				.btop{
					border-top: 2px solid dodgerblue;
				}
			</style>
    	</head>
    <body>
    
    	<div class = "row">	
    		<div class = "col-md-3">
				Sample1
    		</div>
    		<div class = "col-md-6 well">
    			<h3 class = "text-success">OOP PHP CRUD Operation Using MySQLi - Part 2</h3>
    			<hr style = "border-top:1px dotted #000;"/>
    			<form method  = "POST" class = "form-inline" action = "create.php">
    				<div class = "form-group">
    					<label>Description:</label>
    					<input type  = "text" id = "description" name = "description" class = "form-control" required = "required"/>
    				</div>
    				<div class = "form-group">
    					<label>No. of Player:</label>
    					<input type  = "number" id = "num_player" name = "num_player" class = "form-control" required = "required"/>
    				</div>
    				<div class = "form-group">
    					<button name = "save" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
    				</div>
    			</form>
    			<br />
    			<table class = "table table-bordered alert-warning table-hover">
    				<thead>
    					<th>Description</th>
    					<th>Num Player</th>
    					<th>Action</th>
    				</thead>
					