@extends('maintenance')
@section('article')
<article class="white main z-depth-1">
	<div class="row indigo darken-2" style="margin-left: -30px; border-top-right-radius: 10px;">
		<div class="col s6">
			<h4 class="thin white-text">Laboratory</h4>
		</div>
	</div>	
		<input type="hidden" id="lastIdInput" value="{!! $recentId !!}" />
		<div class="container" style="margin-left: -30px;">
		<br>
    	<table id="billTbl" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Doctor</th>
                    <th>Actions</th>
                </tr>
            </thead> 

            <tbody>
            	@foreach($pendingRequests as $pendingRequest)
            	<tr>
            		<td>{!! $pendingRequest->strLastName . ', ' . $pendingRequest->strFirstName . ($pendingRequest->strMiddleName != null ? (' ' . $pendingRequest->strMiddleName) : '') !!}</td>
            		<td>{!! $pendingRequest->strEmployeeLastName . ', ' . $pendingRequest->strEmployeeFirstName . ($pendingRequest->strEmployeeMiddleName != null ? (' ' . $pendingRequest->strEmployeeMiddleName) : '') !!}</td>
            		<td>
            			<a href="#executeExam" class="modal-trigger btn green darken-2">Exam</a>
            		</td>
            	</tr>
            	@endforeach
            </tbody> 	
    </table>
    </div>
	   <div id="executeExam" class="modal modal-fixed-footer" style="width: 1300px !important; height: 1000px !important;">
	    <form class="col s12 form" method="post" id="createEmpForm" action="createEmployee" enctype="multipart/form-data">
	      <div class="modal-content" >
		      <div class="container">
		              <h4 class="grey-text text-darken-1 center	">Execute exam</h4>
		              <a href="#chooseEquipment" class="modal-trigger btn green">Choose Equipment</a>

		                <div class="row">
		                	<h5 class="thin">Examinations</h5>
		                </div>
		                	<div class="divider"></div>
		                	<br>
		                <div class="row container">
		                	<table id="totalExpenses" class="display" cellspacing="0" width="100%">
		                	        <thead>
		                	            <tr>
		                	                <th>Exam Name</th>
		                	                <th>Result</th>
		                	                <th>Remarks</th>
		                	                <th>Action</th>
		                	            </tr>
		                	        </thead>
		                	        	
		                	    </table>
		                </div>
		                <script type="text/javascript">
		                	$(document).ready(function() {
		                	    $('#totalExpenses').DataTable( {
		                	        dom: 'Bfrtip',
		                	        buttons: [
		                	            'copyHtml5',
		                	            'excelHtml5',
		                	            'csvHtml5',
		                	            'pdfHtml5'
		                	        ]
		                	    } );
		                	} );
		                </script>
		      </div>
		  </div>    
	      <div class="modal-footer">
	          <button type="reset" value="Reset" class=" modal-action modal-close waves-effect waves-purple transparent btn-flat">CANCEL</button>
	      </div>
	      </form>
	    </div>

	    <!-- Choose Equipment -->
	    <div id="chooseEquipment" class="modal modal-fixed-footer" style="width: 500px !important; height: 500px !important; border-radius: 10px;">
	    <form class="col s12 form" method="post" id="createEmpForm" action="createEmployee" enctype="multipart/form-data">
	      <div class="modal-content" >
		      <div class="container">
		              <h4 class="grey-text text-darken-1 center	">Choose Equipment</h4>

		                <div class="row">
		                	<h5 class="thin">Equipments</h5>
		                </div>

		                  <div class="input-field col s12">
		                    <select id="chooseEquipment" name="selectedJob" required>
		                        <option disabled selected>Choose Building</option>

		                        <option value="Equipment1">Equipment1</option>

		                    </select>
		                    <label>Equipments</label>
		                </div>
		               
		      </div>
		  </div>    
	      <div class="modal-footer">
	          <button type="reset" value="Reset" class=" modal-action modal-close waves-effect waves-purple transparent btn-flat">CANCEL</button>
	          <button class="waves-effect waves-light indigo darken-3 white-text btn-flat" type="submit" value="Submit">GO</button>
	      </div>
	      </form>
	    </div>

	     <div id="executeExam" class="modal modal-fixed-footer" style="width: 1300px !important; height: 1000px !important;">
	    <form class="col s12 form" method="post" id="createEmpForm" action="createEmployee" enctype="multipart/form-data">
	      <div class="modal-content" >
		      <div class="container">
		              <h4 class="thin  center">Execute exam</h4>
		      </div>
		  </div>    
	      <div class="modal-footer">
	          <button type="reset" value="Reset" class=" modal-action modal-close waves-effect waves-purple transparent btn-flat">CANCEL</button>
	          <button class="waves-effect waves-light indigo darken-3 white-text btn-flat" type="submit" value="Submit">CREATE</button>
	      </div>
	      </form>
	    </div>
	</div>
</article>

<script type="text/javascript">
    	    var tblBill = $('#billTbl').DataTable( {
    	        dom: 'Bfrtip',
    	        buttons: [
    	            'copyHtml5',
    	            'excelHtml5',
    	            'csvHtml5',
    	            'pdfHtml5'
    	        ]
    	    } );

	(function hear(){
	    $.ajax({ 
	    	url: "hear-medical-request/" + document.getElementById('lastIdInput').value, 
	    	type: "GET",
	    	success: function(data){
	        	console.log(data);
	        	if(data[0])
	        	{
	        		tblBill.row.add([
	        			data[2].strLastName + ', ' + data[2].strFirstName + (data[2].strMiddleName != null ? (" " + data[2].strMiddleName) : ""),
	        			data[2].strEmployeeLastName + ', ' + data[2].strEmployeeFirstName + (data[2].strEmployeeMiddleName != null ? (" " + data[2].strEmployeeMiddleName) : ""),
	        			'<a href="#executeExam" class="modal-trigger btn green darken-2">Exam</a>'
	        		]).draw(false);	

	        		document.getElementById('lastIdInput').value = data[1];
	        	}
	    	}, 
	    	error: function(xhr) {
	    		console.log(xhr);
	    	},
	    	dataType: "json", 
	    	complete: hear, 
	    	timeout: 30000 
	    });
	})();
</script>
@endsection