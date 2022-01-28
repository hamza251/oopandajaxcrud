
$(document).ready(function(){
	showTable();

	
 
	//add
	$('#add').click(function(){
		$('#addnew').modal('show');
		$('#addForm')[0].reset();
	});
$('#firstname' ).keypress(function(e){
var regex = new RegExp("^[a-zA-Z]+$");
var str = String.fromCharCode(!e.charcode ? e.which : e.charcode);
if (regex.test(str)){
	return true;
}else{
e.preventDefault();
$('.error').show();
$('.error').text("please enter alphabets");
return false;
}
});
$('#lastname' ).keypress(function(e){
	var regex = new RegExp("^[a-zA-Z]+$");
	var str = String.fromCharCode(!e.charcode ? e.which : e.charcode);
	if (regex.test(str)){
		return true;
	}else{
	e.preventDefault();
	$('.error').show();
	$('.error').text("please enter alphabets");
	return false;
	}
	});
	$(document).ready(function(){

	}
	)


 
	$('#addbutton').click(function(){
		$this = $(this);
		var first = $('#firstname').val();
        var last = $('#lastname').val();
		if(first!=='' && last!=='' ){
			$this.attr('disabled','true');
			var addForm = $('#addForm').serialize();
		
			$.ajax({
				type: 'POST',
				url: 'add.php',
				data: addForm,
				success:function(){
					$(this).removeAttr('disabled');

					$('#addnew').modal('hide');
					$('#addForm')[0].reset();
					showTable();
					$('#alert').slideDown();
                    $('#alerttext').text('Member Added Successfully').show("slow").delay(5000).hide("slow");
						
					}
			});
		}else{
			alert ("input both fields");
			
		}
		
 
	});





	//
	//edit
	$(document).on('click', '.edit', function(){
		var memid = $(this).data('id');
		var first = $('#first'+memid).text();
		var last = $('#last'+memid).text();
		$('#editmem').modal('show');
		$('#efirstname').val(first);
		$('#elastname').val(last);
		$('#editbutton').val(memid);
		$('#efirstname' ).keypress(function(e){
			var regex = new RegExp("^[a-zA-Z]+$");
			var str = String.fromCharCode(!e.charcode ? e.which : e.charcode);
			if (regex.test(str)){
				return true;
			}else{
			e.preventDefault();
			$('.error').show();
			$('.error').text("please enter alphabets");
			return false;
			}
			});
			$('#elastname' ).keypress(function(e){
				var regex = new RegExp("^[a-zA-Z]+$");
				var str = String.fromCharCode(!e.charcode ? e.which : e.charcode);
				if (regex.test(str)){
					return true;
				}else{
				e.preventDefault();
				$('.error').show();
				$('.error').text("please enter alphabets");
				return false;
				}
				});
		document.getElementById("editbutton").disabled=true;
$(document).ready(function () {
	$('#efirstname' || '#elastname').on("change",function (){
		var text = $(this).val();
		if(text.length > 0){
			document.getElementById("editbutton").disabled = false;
		}
		else {
			document.getElementById("editbutton").disabled = true;
		}
	});
	
});


	});
	
    $('#editbutton').click(function(){
		var memid = $(this).val();
		var editForm = $('#editForm').serialize();
		$.ajax({
			type: 'POST',
			url: 'edit.php',
			data: editForm + "&memid="+memid,
			success:function(){
				$('#editmem').modal('hide');
				$('#editForm')[0].reset();
				showTable();
				$('#alert').slideDown();
				$('#alerttext').text('Member Updated Successfully').show("slow").delay(5000).hide("slow");
				
				
				
			
				
			}
		});
	});
	//
	//delete
    $(document).on('click', '.delete', function(){
		var memid = $(this).data('id');
		var first = $('#first'+memid).text();
		$('#delmem').modal('show');
		$('#dfirstname').text(first);
		$('#delbutton').val(memid);
	});
 
	$('#delbutton').click(function(){
		var memid = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'delete.php',
			data: {
				memid: memid,
			},
			success:function(){
				$('#delmem').modal('hide');
				showTable();
				$('#alert').slideDown();
                $('#alerttext').text('Member Deleted Successfully').show("slow").delay(5000).hide("slow");
				
				

				
				
			}
		});
	});
 
});

function showTable(){
	$.ajax({
		type: 'POST',
		url: 'fetch.php',
		data: {
			fetch: 1
		},
		success:function(data){
			$('#table').html(data);
		}
	});
}


	
