

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
    				<tbody>
    				

        					<tr>
    						<td>BADMINTON MEN</td>
    						<td></td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>VOLLEYBALL WOMEN</td>
    						<td></td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>BADMINTON MEN</td>
    						<td></td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td></td>
    						<td></td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>Mulay Nasmon</td>
    						<td>1</td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>test</td>
    						<td>2</td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>Test</td>
    						<td>3</td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>Volleyball Women</td>
    						<td>6</td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>yuiyi</td>
    						<td>8</td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>Sample Game</td>
    						<td>8</td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>Basketball Men</td>
    						<td>12</td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>test</td>
    						<td>23</td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    				    					<tr>
    						<td>assfsdf</td>
    						<td>23</td>
    						<td><center><a class = "btn btn-warning update_mem_id btop" data-toggle = "modal" data-target = "#update_modal" name = ""><span class = "glyphicon glyphicon-edit"></span> Update</a> | <a class = "btn btn-danger del_mem_id" name = "" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
    					</tr>
    					
    				</tbody>
    			</table>
    		</div>
    	</div>
     
    <!-- Modal -->
    <div class="modal fade" id="del_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
    		<center><h4 class = "text-danger">Are you sure you want to delete this record?</h4></center>
          </div>
          <div class="modal-footer">
            <button type = "button" class="btn btn-warning" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> No</button>
            <button type = "button" class="btn btn-danger del_mem"><span class = "glyphicon glyphicon-trash"></span> Yes</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
    		<div class = "modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    			<h3 class = "text-success modal-title">Update Member</h3>
    		</div>
    		<form method = "POST" action = "update_mem_query.php">
    		<div class="modal-body update">
     
          </div>
          <div class="modal-footer">
            <button class="btn btn-warning" name = "update"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
          </div>
    	  </form>
        </div>
      </div>
    </div>
    </body>
    	<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type = "text/javascript">
    	$(document).ready(function(){
     
    		//Delete
    		$('.del_mem_id').on('click', function(){
    			'$game_id' = $(this).attr('name');
    			$('.del_mem').on('click', function(){
    				window.location = "delete_mem.php?game_id=" + '$game_id';
    			});
    		});
     
    		//Update
    		$('.update_mem_id').on('click', function(){
    			'$game_id' = $(this).attr('name');
    			$('.update').load('mem_data.php?game_id=' + '$game_id');
    		});
    	});
    </script>
    </html>