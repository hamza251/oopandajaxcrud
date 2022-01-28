<!-- Add New -->
<html>
    <title>

    </title>
    <head>

    </head>
    
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Member</h4></center>
                    </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="addForm">
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="firstname"  id="firstname" >
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="lastname"  id="lastname"  >
						</div>
					</div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="addbutton" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" disabled></span> Save</a>
				</form>
                </div>
 
            </div>
        </div>
    </div>
    <!-- Edit -->
    <div class="modal fade" id="editmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="editForm">
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="efirstname" id="efirstname">
						</div>
					</div>
					<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="elastname" id="elastname">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" disabled id="editbutton" class="btn btn-warning"><span class="glyphicon glyphicon-check" ></span> Update</a>
				</form>
                </div>
 
            </div>
        </div>
    </div>
    <!-- Delete -->
    <div class="modal fade" id="delmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h5><center>Firstname: <strong><span id="dfirstname"></span></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="delbutton" class="btn btn-danger"><span class="glyphicon glyphicon-trash" ></span> Delete</button>
                </div>
                </div>
        </div>
    </div>
    <body>
</html>