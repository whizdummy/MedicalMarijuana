@extends('maintenance')
@section('article')
	<article class="white main z-depth-1">
		<div class="row indigo darken-2" style="margin-left: -30px; border-top-right-radius: 10px;">
				<div class="col s6">
					<h4 class="thin white-text">Items Maintenance</h4>
				</div>
				<div class="col s6 right">
					<a class="right waves-effect waves-light modal-trigger btn-floating btn-large red darken-2 left white-text tooltipped" 
					href="#create" style="position: relative; top: 40px; right: 1%;" 
					data-tooltip="Create"><i class="material-icons">add</i></a>
				</div>
			</div>	
		<div class="container" style="margin-left: -30px;">
		<br>
				<table id="example" class="display" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>Item ID</th>
				                <th>Type</th>
				                <th>Name</th>
				                <th>Generic Name</th>
				                <th>Details</th>
				                <th>Price</th>
				               	<th>Unit of Measurement</th>
				                <th>Actions</th>
				            </tr>
				        </thead>
				        	
				    </table>
				</div>

				<script type="text/javascript">
					$(document).ready(function() {
					    $('#example').DataTable( {
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
				<!-- Create Item Modal -->
				   <div id="create" class="modal modal-fixed-footer">
				    <form class="col s12 form" method="post" id="createEmpForm" action="createEmployee" enctype="multipart/form-data">
				      <div class="modal-content" style="padding-bottom: 0px !important;">
				        <!-- <div class="container"> -->
				      <div class="wrapper">
				        <div class="input-field col s12">
				              <h4 class="grey-text text-darken-1 center	">Add Item</h4>
				        </div>
				              <div class="aside aside1 z-depth-0">
				              <!-- first -->
				                <div class="row">
				                  <div class="input-field col s12">
				                       <img name="image" id="employeeimg" class="circle" style="width: 200px; height: 200px;" src="{!! asset('img/jerald.jpg') !!}" alt=""/>
				                   </div>
				                   <div class="input-field col s12">
				                       <div class="file-field input-field">
				                             <div class="btn">
				                               <span>Upload</span>
				                               <input type="file" id="fileUpload">
				                             </div>
				                             <div class="file-path-wrapper">
				                               <input class="file-path validate" type="text">
				                             </div>
				                           </div>
				                   </div>
				                </div>
				              </div>
				              <!-- END ASIDE 1 -->


				                <div class="aside aside2 z-depth-0">
				                <!-- second -->
				                  <div class="row">
				                    <div class="col s12" style="margin-bottom: 5px;">
				                         <label class="red-text left">(*) Indicates required field</label>
				                    </div>

				                    <div class="row">
				                    	<div class="input-field col s6">
				                        <select class="browser-default" id="itemCategorySelect" name="strItemCategoryDesc" required>
				                            <option disabled selected>Choose Category</option>
				                            @foreach($itemCategoryList as $itemCategory)
												<option value="{!! $itemCategory->strItemCategoryDesc !!}">{!! $itemCategory->strItemCategoryDesc !!}</option>
				                            @endforeach
				                        </select>
				                        <label for="itemCategory" class="active">Item Category<span class="red-text">*</span></label>
				                    </div>
				                    <div class="col s6">
				                    	<a href="#addCategory" class="modal-trigger green"><i class="material-icons">add</i></a>
				                    </div>
				                    </div>
				                    
				                    <div class="row">
				                    	<div class="input-field col s6">
				                        <select class="browser-default" id="genericName" name="intGenericNameId" required>
				                            <option disabled selected>Choose Generic name</option>
				                            @foreach($genericList as $generic)
				                            	<option value="{!! $generic->intGenericNameId !!}">{!! $generic->strGenericName !!}</option>
				                            @endforeach
				                        </select>
				                        <label for="genericName" class="active">Generic Name<span class="red-text">*</span></label>
				                    </div>
				                    <div class="col s6">
				                    	<a href="#addGeneric" class="modal-trigger green"><i class="material-icons">add</i></a>
				                    </div>
				                    </div>
				                    
				                      
				                    <div class="input-field col s12">
				                        <input name="strItemName" placeholder="Ex: Aquino" id="itemName" type="text" class="validate tooltipped specialname" required data-position="bottom" data-delay="30" data-tooltip="Ex: Aquino( At least 2 or more characters )" pattern="^[a-zA-Z\-'`\s]{2,}$" minlength="2">
				                        <label for="itemName" class="active">Drug Name<span class="red-text"><b>*</b></span></label>
				                    </div>
				         			 <div class="input-field col s12">
				                        <input name="dblPrice" placeholder="Ex: Aquino" id="drugPrice" type="number" class="validate tooltipped specialname" required data-position="bottom" data-delay="30" data-tooltip="Ex: Aquino( At least 2 or more characters )" pattern="^[a-zA-Z\-'`\s]{2,}$" minlength="2">
				                        <label for="drugPrice" class="active">Price<span class="red-text"><b>*</b></span></label>
				                    </div>
				                </div>
				              </div>
				              <!-- END ASIDE 2 -->

				            </div>
				        </div>
				      <div class="modal-footer">
				          <button type="reset" value="Reset" class=" modal-action modal-close waves-effect waves-purple transparent btn-flat">CANCEL</button>
				          <button class="waves-effect waves-light indigo darken-3 white-text btn-flat" type="submit" value="Submit">CREATE</button>
				      </div>
				      </form>
				</div>

				<!-- Update Fee Modal -->
				   <div id="create" class="modal modal-fixed-footer">
				    <form class="col s12 form" method="post" id="createEmpForm" action="createEmployee" enctype="multipart/form-data">
				      <div class="modal-content" style="padding-bottom: 0px !important;">
				        <!-- <div class="container"> -->
				      <div class="wrapper">
				        <div class="input-field col s12">
				              <h4 class="grey-text text-darken-1 center	">Update Item</h4>
				        </div>
				              <div class="aside aside1 z-depth-0">
				              <!-- first -->
				                <div class="row">
				                  <div class="input-field col s12">
				                       <img name="image" id="employeeimg" class="circle" style="width: 200px; height: 200px;" src="{!! asset('img/jerald.jpg') !!}" alt=""/>
				                   </div>
				                   <div class="input-field col s12">
				                       <div class="file-field input-field">
				                             <div class="btn">
				                               <span>Upload</span>
				                               <input type="file" id="fileUpload">
				                             </div>
				                             <div class="file-path-wrapper">
				                               <input class="file-path validate" type="text">
				                             </div>
				                           </div>
				                   </div>
				                </div>
				              </div>
				              <!-- END ASIDE 1 -->


				               
				                <div class="aside aside2 z-depth-0">
				                <!-- second -->
				                  <div class="row">
				                    <div class="col s12" style="margin-bottom: 5px;">
				                         <label class="red-text left">(*) Indicates required field</label>
				                    </div>

				                    <div class="row">
				                    	<div class="input-field col s6">
				                        <select class="browser-default" id="itemCategory" name="selectedJob" required>
				                            <option disabled selected>Choose Category</option>
				                            <option value="{"></option>
				                        </select>
				                        <label for="itemCategory" class="active">Item Category<span class="red-text">*</span></label>
				                    </div>
				                    <div class="col s6">
				                    	<a href="#addCategory" class="modal-trigger green"><i class="material-icons">add</i></a>
				                    </div>
				                    </div>
				                    
				                    <div class="row">
				                    	<div class="input-field col s6">
				                        <select class="browser-default" id="genericName" name="selectedJob" required>
				                            <option disabled selected>Choose Category</option>
				                            <option value=""></option>
				                        </select>
				                        <label for="genericName" class="active">Generic Name<span class="red-text">*</span></label>
				                    </div>
				                    <div class="col s6">
				                    	<a href="#addGeneric" class="modal-trigger green"><i class="material-icons">add</i></a>
				                    </div>
				                    </div>
				                    
				                      
				                    <div class="input-field col s12">
				                        <input name="" placeholder="Ex: Aquino" id="drugName" type="text" class="validate tooltipped specialname" required data-position="bottom" data-delay="30" data-tooltip="Ex: Aquino( At least 2 or more characters )" pattern="^[a-zA-Z\-'`\s]{2,}$" minlength="2">
				                        <label for="drugName" class="active">Drug Name<span class="red-text"><b>*</b></span></label>
				                    </div>
				         			 <div class="input-field col s12">
				                        <input name="" placeholder="Ex: Aquino" id="drugPrice" type="number" class="validate tooltipped specialname" required data-position="bottom" data-delay="30" data-tooltip="Ex: Aquino( At least 2 or more characters )" pattern="^[a-zA-Z\-'`\s]{2,}$" minlength="2">
				                        <label for="drugPrice" class="active">Price<span class="red-text"><b>*</b></span></label>
				                    </div>
				                </div>
				              </div>
				              <!-- END ASIDE 2 -->
				        </div>
				      <div class="modal-footer">
				          <button type="reset" value="Reset" class=" modal-action modal-close waves-effect waves-purple transparent btn-flat">CANCEL</button>
				          <button class="waves-effect waves-light indigo darken-3 white-text btn-flat" type="submit" value="Submit">CREATE</button>
				      </div>
				      </form>
				</div>
		</div>
	</article>

<!-- add option -->
   <div id="addCategory" class="modal" style="margin-top: 30px;">
     <form id="createItemCategoryForm" action="{!! url('item-category') !!}" method="POST">
       <div class="modal-content">
         <h4>Add Item Category</h4>
         <div class="row">
           <div class="col s12">
             <div class="input-field col s8 offset-s2">
               <select id="addItemCategorySelect" class="browser-default" size="10">
               		@foreach($itemCategoryList as $itemCategory)
						<option value="{!! $itemCategory->strItemCategoryDesc !!}">{!! $itemCategory->strItemCategoryDesc !!}</option>
               		@endforeach
               </select>
             </div>
             <div class="input-field col s8 offset-s2" style="margin-top: 20px;">
               <input type="text" class="validate tooltipped specialoption" placeholder="Ex: Medicine" id="strItemCategory" name="strItemCategoryDesc" data-position="bottom" data-delay="30" data-tooltip="Ex: Cashier<br/>( At least 5 or more characters )" pattern="^[A-Za-z-\s]{5,}$">
               <label for="strItemCategory" class="active">Item Category</label>
             </div>
             <div class="input-field col s8 offset-s2 center">
               <button type="submit" value="Submit" id="createAddPosition" class="waves-effect waves-light purple darken-3 btn-flat white-text">SAVE</button>
             </div>
           </div>
         </div>
       </div>
     </form>
   </div>

   <!-- add option -->
   <div id="addGeneric" class="modal" style="margin-top: 30px;">
     <form id="createGenericForm" action="generic" method="POST">
       <div class="modal-content">
         <h4>Add New Generic Name</h4>
         <div class="row">
           <div class="col s12">
             <div class="input-field col s8 offset-s2">
               <select id="selectGeneric" class="browser-default" size="10">
                    @foreach($genericList as $generic)
						<option value="{!! $generic->intGenericId !!}">{!! $generic->strGenericName !!}</option>
                    @endforeach
               </select>
             </div>
             <div class="input-field col s8 offset-s2" style="margin-top: 20px;">
               <input type="text" class="validate tooltipped specialoption" placeholder="Ex: Cashier" id="strGenericName" name="strGenericName" data-position="bottom" data-delay="30" data-tooltip="Ex: Cashier<br/>( At least 5 or more characters )" pattern="^[A-Za-z-\s]{5,}$">
               <label for="strGenericName" class="active">Generic Name</label>
             </div>
             <div class="input-field col s8 offset-s2 center">
               <button type="submit" value="Submit" id="createGeneric" class="waves-effect waves-light purple darken-3 btn-flat white-text">SAVE</button>
             </div>
           </div>
         </div>
       </div>
     </form>
   </div>

<script type="text/javascript">
	function readURL(input) {

	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#employeeimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$("#fileUpload").change(function(){
	    readURL(this);
	});

	$('#createItemCategoryForm').on('submit', function(event) {
		event.preventDefault();
		$.ajax({
				url: "item-category",
				type: "POST",
				data: {
					strItemCategoryDesc: document.getElementById('strItemCategory').value
				},
				success: function(data) {
					$('#itemCategorySelect').html('');
					var dropDown = $('#itemCategorySelect');
					$.each(data, function(i, itemCategory){
						dropDown.append(
					        $('<option></option>').val(itemCategory.strItemCategoryDesc).html(itemCategory.strItemCategoryDesc)
					    );
					});
					$('#itemCategorySelect').html('');
					var itemCategorySelect = $('#itemCategorySelect');
					$.each(data, function(i, itemCategory){
						itemCategorySelect.append(
					        $('<option></option>').val(itemCategory.strItemCategoryDesc).html(itemCategory.strItemCategoryDesc)
					    );
					});
					$('#strItemCategory').val('');
					$('#addCategory').closeModal();
				},
				error: function(xhr) {
					alert('error');
					console.log(xhr);
				}
			});
	});

	$('#createGenericForm').on('submit', function(event) {
		event.preventDefault();
		$.ajax({
				url: "generic",
				type: "POST",
				data: {
					strGenericName: document.getElementById('strGenericName').value
				},
				success: function(data) {
					$('#selectGeneric').html('');
					var dropDown = $('#selectGeneric');
					$.each(data, function(i, generic){
						dropDown.append(
					        $('<option></option>').val(generic.intGenericNameId).html(generic.strGenericName)
					    );
					});
					$('#genericName').html('');
					var itemCategorySelect = $('#genericName');
					$.each(data, function(i, generic){
						itemCategorySelect.append(
					        $('<option></option>').val(generic.intGenericNameId).html(generic.strGenericName)
					    );
					});
					$('#strGenericName').val('');
					$('#addGeneric').closeModal();
				},
				error: function(xhr) {
					alert('error');
					console.log(xhr);
				}
			});
	});

</script>
 
@endsection