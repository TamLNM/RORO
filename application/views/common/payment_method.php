<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
	<div class="col-xl-12">
		<div class="ibox collapsible-box">
			<div class="ibox-head">
				<div class="ibox-title">HÌNH THỨC THANH TOÁN</div>
				<div class="button-bar-group">
					<button id="addrow" class="btn btn-outline-success btn-sm mr-1" title="Thêm dòng mới">
						<span class="btn-icon"><i class="fa fa-plus"></i>Thêm dòng</span>
					</button>
					<button id="save" class="btn btn-outline-primary btn-sm mr-1" data-loading-text="<i class='la la-spinner spinner'></i>Lưu dữ liệu" title="Lưu dữ liệu">
						<span class="btn-icon"><i class="fa fa-save"></i>Lưu</span>
					</button>
					<button id="delete" class="btn btn-outline-danger btn-sm mr-1" data-loading-text="<i class='la la-spinner spinner'></i>Xóa dữ liệu" title="Xóa những dòng đang chọn">
						<span class="btn-icon"><i class="fa fa-trash"></i>Xóa dòng</span>
					</button>
				</div>
			</div>
			<div class="row ibox-body">
				<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
					<table id="contenttable" class="table table-striped display nowrap" cellspacing="0" style="width: 99.8%">
						<thead>
						<tr>
							<th style="width: 20px">STT</th>
							<th style="max-width: 150px">Mã hình thức</th>
							<th>Tên hình thức</th>
							<th>Mô tả</th>
							<th class="editor-accType" style="max-width: 100px">Loại</th>
						</tr>
						</thead>
						<tbody>
							<?php if(count($payment_method) > 0) {$i = 1; ?>
								<?php foreach($payment_method as $item) {  ?>
									<tr id="<?=$item['ACC_CD'];?>">
										<td><?=$i;?></td>
										<td><?=$item['ACC_CD'];?></td>
										<td><?=$item['ACC_NO'];?></td>
										<td><?=$item['ACC_NAME']?></td>
										<td><?=($item['ACC_TYPE'] == 'CAS' ? 'Thu Ngay' : 'Thu Sau')?></td>
									</tr>
									<?php $i++; }  ?>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<select id="accType" style="display: none">
	<option value="CAS">Thu ngay</option>
	<option value="CRE">Thu sau</option>
</select>

<!-- Add more row modal --> 
<div class="modal fade" id="add-row-modal" tabindex="-1" role="dialog" aria-labelledby="groups-modalLabel-1" aria-hidden="true" data-whatever="id" style="padding-left: 14%; top: 200px">
	<div class="modal-dialog" role="document" style="width: 300px!important">
		<div class="modal-content" style="border-radius: 4px">
			<div class="modal-body">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row form-group">
						<label class="col-md-4 col-sm-4 col-xs-4 col-form-label" style="text-align: right; margin-right: 5px">Số dòng</label>
						<input id="rowsNumeric" class="col-md-6 col-sm-6 col-xs-6 form-control form-control-sm border-e" placeholder="Số dòng" type="number" value="1" min="0">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div  style="margin: 0 auto!important;">
					<button class="btn btn-sm btn-rounded btn-gradient-blue btn-labeled btn-labeled-left btn-icon" id="apply-add-row" data-dismiss="modal">
						<span class="btn-label"><i class="ti-check"></i></span>Xác nhận</button>
					<button class="btn btn-sm btn-rounded btn-gradient-peach btn-labeled btn-labeled-left btn-icon" data-dismiss="modal">
						<span class="btn-label"><i class="ti-close"></i></span>Đóng</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		var _columns = ["STT" ,"ACC_CD", "ACC_NO", "ACC_NAME", "ACC_TYPE"];
		var tbl = $('#contenttable');

		var dataTbl = tbl.newDataTable({
			scrollY: '55vh',
			columnDefs: [
				{ type: "num", className: 'text-center', targets: _columns.indexOf('STT') }
			],
			order: [[ _columns.indexOf('STT'), 'asc' ]],
			paging: false,
            keys:true,
            autoFill: {
                focus: 'focus'
            },
            select: true,
            rowReorder: false,
            arrayColumns: _columns
		});

		tbl.editableTableWidget({editor: $('#accType, #editor-input')});

        var numCount = 0;
		/* Add new row event */
		$('#addrow').on('click', function(){
			$('#add-row-modal').modal("show");
		});

		var sumNumRows = 0;
		$("#apply-add-row").on("click", function(){
			numRows = parseInt($('#rowsNumeric').val()); // Numeric of new rows user added
			sumNumRows += numRows;
			if (numRows == 1){
				tbl.newRow();
				rowsExist = $("#contenttable").DataTable().rows().nodes().length;
				for (i = 0; i < rowsExist; i++){
					cell = tbl.find("tbody tr:eq(" + i + ") td:eq("+ _columns.indexOf("STT") +")");
					tbl.DataTable().cell(cell).data(i+1).draw(false);
				}
			}
			else{
				numRowsExist = $("#contenttable").DataTable().rows().nodes().length;
				numRowHasAddNewClass = 0;
				index = 1;
				for (i = numRowsExist - 1; i >= 0 ; i--){
					var crRow = tbl.find("tbody tr:eq("+i+")");
					if(crRow.hasClass("addnew"))
						numRowHasAddNewClass++;
					else{
						cell = tbl.find("tbody tr:eq(" + i + ") td:eq("+ _columns.indexOf("STT") +")");
						tbl.DataTable().cell(cell).data(sumNumRows + index).draw(false);
						index++;
					}
				}
				tbl.newMoreRows(numRows, numRowHasAddNewClass);
			}
		});

		$("#add-row-modal").bind('keypress', function(e) {
       		if(e.which == 13){
	       		numRows = parseInt($('#rowsNumeric').val()); // Numeric of new rows user added
	        	sumNumRows += numRows;
	        	if (numRows == 1){
	        		tbl.newRow();
	        		rowsExist = $("#contenttable").DataTable().rows().nodes().length;
					for (i = 0; i < rowsExist; i++){
						cell = tbl.find("tbody tr:eq(" + i + ") td:eq("+ _columns.indexOf("STT") +")");
						tbl.DataTable().cell(cell).data(i+1).draw(false);
					}
				}
				else{
					numRowsExist = $("#contenttable").DataTable().rows().nodes().length;
					numRowHasAddNewClass = 0;
					index = 1;
					for (i = numRowsExist - 1; i >= 0 ; i--){
						var crRow = tbl.find("tbody tr:eq("+i+")");
						if(crRow.hasClass("addnew"))
							numRowHasAddNewClass++;
						else{
							cell = tbl.find("tbody tr:eq(" + i + ") td:eq("+ _columns.indexOf("STT") +")");
				        	tbl.DataTable().cell(cell).data(sumNumRows + index).draw(false);
				        	index++;
						}
					}
					tbl.newMoreRows(numRows, numRowHasAddNewClass);
				}
				$("#add-row-modal").modal("hide");
			}
       	});

       	/* Prevent press '-' */
       	$("#rowsNumeric").keydown(function(event) {
		  	if (event.which == 189) {
		    	event.preventDefault();
		   	}
		});

        $('#save').on('click', function(){
            if(tbl.DataTable().rows( '.addnew, .editing' ).data().toArray().length == 0){
            	$('.toast').remove();
            	toastr["info"]("Không có dữ liệu thay đổi!");
            }else{
            	$.confirm({
		            title: 'Thông báo!',
		            type: 'orange',
		            icon: 'fa fa-warning',
		            content: 'Tất cả các thay đổi sẽ được lưu lại!\nTiếp tục?',
		            buttons: {
		                ok: {
		                    text: 'Xác nhận lưu',
		                    btnClass: 'btn-warning',
		                    keys: ['Enter'],
		                    action: function(){
		                    	$('#save').button('loading');
		                        saveData();
		                    }
		                },
		                cancel: {
		                    text: 'Hủy bỏ',
		                    btnClass: 'btn-default',
		                    keys: ['ESC']
		                }
		            }
		        });
            }
        });

        $('#delete').on('click', function(){
            if(tbl.getSelectedRows().length == 0){
            	$('.toast').remove();
            	toastr["info"]("Vui lòng chọn các dòng dữ liệu để xóa!");
            }else{
            	tbl.confirmDelete(function(selectedData){
            		postDel(selectedData);
            	});
            }
        });

        // binding change event table row
        $('#contenttable tbody').on('change', 'td:eq('+_columns.indexOf('ACC_CD')+')', function() {
        	var rowId = dataTbl.cell($(this)).data();
        	$(this).parent('tr').attr('id', rowId);
        });

        //save functions
        function saveData(){
			var newData = tbl.getAddNewData();

			if(newData.length > 0){
				var fnew = {
					'action': 'add',
					'data': newData
				};
				postSave(fnew);
			}

			var editData = tbl.getEditData();

			if(editData.length > 0){
				var fedit = {
					'action': 'edit',
					'data': editData
				};
				postSave(fedit);
			}
		}

		function postSave(formData){
			$.ajax({
                url: "<?=site_url(md5('Common') . '/' . md5('cmPaymentMethod'));?>",
                dataType: 'json',
                data: formData,
                type: 'POST',
                success: function (data) {
                	$('#save').button('reset');
                    if(data.deny) {
                        toastr["error"](data.deny);
                        return;
                    }

                    if(formData.action == 'edit'){
                    	toastr["success"]("Cập nhật thành công!");
                    	tbl.DataTable().rows( '.editing' ).nodes().to$().removeClass("editing");
                    }

                    if(formData.action == 'add'){
                    	toastr["success"]("Thêm mới thành công!");
                    	tbl.DataTable().rows( '.addnew' ).nodes().to$().removeClass("addnew");
                    	tbl.updateSTT(_columns.indexOf("STT"));
                    }
                },
                error: function(err){
                	toastr["error"]("Error!");
                	$('#save').button('reset');
                	console.log(err);
                }
            });
		}

		function postDel(data){
			var delAccs = data.map(p=>p[_columns.indexOf("ACC_CD")]);
			$('#delete').button('loading');
			var fdel = {
					'action': 'delete',
					'data': delAccs
				};

			$.ajax({
	            url: "<?=site_url(md5('Common') . '/' . md5('cmPaymentMethod'));?>",
	            dataType: 'json',
	            data: fdel,
	            type: 'POST',
	            success: function (data) {
	            	$('#delete').button('reset');
	            	var delSuccess;
	                if(data.error && data.error.length > 0){
	                	for (var i = 0; i < data.error.length; i++) {
	                		toastr["error"](data.error[i]);
	                	}
	                }

	                if(data.success && data.success.length > 0){
	                	for (var i = 0; i < data.success.length; i++) {
	                		delSuccess = data.success[i].split(':');
	                		delSuccess = delSuccess[1];
	                		tbl.DataTable().rows('#' + delSuccess).remove().draw(false);
	                		tbl.updateSTT(_columns.indexOf("STT"));
	                		toastr["success"](data.success[i]);
	                	}
	                }
	            },
	            error: function(err){
	            	toastr["error"]("Error!");
	            	$('#delete').button('reset');
	            	console.log(err);
	            }
	        });
		}
	});
</script>
<script type="text/javascript">

</script>
