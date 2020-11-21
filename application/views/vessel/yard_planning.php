<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style type="text/css">
	td {
		border: 1px solid rgba(0, 0, 0, .3);
	  	border-collapse: collapse;
	  	background-color: #ffffff;
	  	border-radius: 4px;
	  	border-spacing: 2px;
	}

	.noBorder{
		border: none!important;
	}

	.cellSize{
		min-width: 35px!important;
		min-height: 10px!important;
		max-height: 10px!important;
	}

	/*
	#feedback { font-size: 1.4em; }
	#contenttable .ui-selecting { background: #FECA40; }
	*/

	td.selecting {
	    background-color: rgba(0, 0, 0, .3);
	}
</style>

<div class="row" style="font-size: 13px;">
	<div class="col-xl-12">
		<div class="ibox collapsible-box">
			<i class="la la-angle-double-up dock-right"></i>
			<div class="ibox-head">
				<div class="ibox-title">KẾ HOẠCH BÃI</div>
				<div class="button-bar-group mr-3">			
					<button id="search" class="btn btn-outline-warning btn-sm btn-loading mr-1" 
											data-loading-text="<i class='la la-spinner spinner'></i>Nạp dữ liệu"
										 	title="Nạp dữ liệu">
						<span class="btn-icon"><i class="ti-search"></i>Nạp dữ liệu</span>
					</button>				

					<button id="report" class="btn btn-outline-success btn-sm mr-1" title="Thống kê">
						<span class="btn-icon"><i class="la la-file-text"></i>Thống kê</span>
					</button>

					<button id="save" class="btn btn-outline-primary btn-sm mr-1"
										data-loading-text="<i class='la la-spinner spinner'></i>Lưu dữ liệu"
										title="Lưu dữ liệu">
						<span class="btn-icon"><i class="fa fa-save"></i>Lưu</span>
					</button>
				</div>
			</div>
			<div class="ibox-body pt-0 pb-0 bg-f9 border-e">
				<div class="row ibox mb-0 border-e pb-1 pt-3">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="row">
									<input id="VoyageKey" class="form-control form-control-sm" type="text" hidden>
									<input id="VesselID" class="form-control form-control-sm" type="text" hidden>

									<label class="ml-3" style="width: 3.5rem; margin-top: 0.4rem">Tàu</label>		
									<input id="VesselInfo" placeholder="Tên tàu | Chuyến nhập | Chuyến xuất" style="border-radius: 5px; margin-left: 1rem; padding-left: 7.5px; border-color: rgba(0, 0, 0, .1); border-width: 1px; height: 2rem; width: 19rem" type="text">

									<!-- -->
									<button id="chooseVessel" class="btn btn-success btn-icon-only btn-circle btn-sm btn-air ml-2" style="height: 1.65rem; width: 1.65rem" title="Chọn tàu">
										<i class="ti-plus"></i>
									</button>

									<button id="nochooseVessel" class="btn btn-danger btn-icon-only btn-circle btn-sm btn-air ml-2" style="height: 1.65rem; width: 1.65rem" title="Bỏ chọn">
										<i class="ti-close"></i>
									</button>
								</div>
								<div class="row mt-1">
									<label class="ml-3" style="width: 3.5rem; margin-top: 0.25rem">Hãng xe</label>
									<select id="BrandID" name="BrandID" style="border-radius: 5px; margin-left: 1rem; padding-left: 7.5px; border-color: rgba(0, 0, 0, .1); border-width: 1px; height: 2rem; width: 9rem;">
										<?php if(count($carBrandList) > 0){?>
											<option value='*'>Tất cả</option>
											<?php foreach($carBrandList as $item) {  ?>
												<option value="<?=$item['BrandID']?>"><?=$item['BrandName'];?></option>
											<?php } ?>
										<?php } ?>
									</select>

									<label class="ml-3" style="width: 3.25rem; margin-top: 0.25rem">Loại xe</label>
									<select id="CarTypeID" name="CarTypeID" style="border-radius: 5px; margin-left: 1rem; padding-left: 7.5px; border-color: rgba(0, 0, 0, .1); border-width: 1px; height: 2rem; width: 9rem;">
										<option value='*'>Tất cả</option>
									</select>						
								</div>		
								<div class="row mt-1">
									<label class="ml-3" style="width: 3.5rem; margin-top: 0.4rem">Block</label>		
									<select id="Block" name="Block" style="border-radius: 5px; margin-left: 1rem; padding-left: 7.5px; border-color: rgba(0, 0, 0, .1); border-width: 1px; height: 2rem; width: 9rem;">
										<?php if(count($blockList) > 0){?>
											<option value="noChoose"><i>Chọn block</i></option>
											<?php foreach($blockList as $item) {  ?>
												<option><?=$item['Block'];?></option>
											<?php } ?>
										<?php } ?>
									</select>

									<input id="color" type="color" hidden>
								</div>							
							</div>								
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
								<div class="row">
									<label class="ml-3" style="width: 9.5rem; margin-top: 0.4rem">Số vận đơn/ booking</label>		
									<select id="BillOfLadingORBookingNo" name="BillOfLadingORBookingNo" placeholder="Số vận đơn/ booking" style="border-radius: 5px; margin-left: 1rem; padding-left: 7.5px; border-color: rgba(0, 0, 0, .1); border-width: 1px; height: 2rem; width: 14.5rem;">
										<?php if(count($BLORBookingList) > 0){?>
											<option value='*'>Tất cả</option>
											<!--
											<?php foreach($BLORBookingList as $item) {  ?>
												<option>
													<?php
														if ($item['BillOfLading']){
															echo($item['BillOfLading']);
														}
														else{
															echo($item['BookingNo']);												
														}
													?>
												</option>
											<?php } ?>
											-->
										<?php } ?>
									</select>	
								</div>
								<div class="row mt-1">
									<div class="ml-3 mt-2">
										<label class="mt-1 radio radio-info">
			                                <input type="radio" checked name="ClassID" class="css-checkbox" value="1" />
			                                <span class="input-span"></span>Nhập tàu
			                            </label>	
										<label class="mt-1 ml-1 radio radio-info">
			                                <input type="radio" name="ClassID" class="css-checkbox" value="2" />
			                             	<span class="input-span"></span>Xuất tàu
			                            </label>

			                            <label class="mt-1 ml-3 radio radio-warning">
			                                <input type="radio" name="IsLocalForeign" class="css-checkbox" value="1" />
			                                <span class="input-span"></span><span style="margin-left: 0;">Hàng nội</span>
			                            </label>	
										<label class="mt-1 ml-1 radio radio-warning">
			                                <input type="radio" checked name="IsLocalForeign" class="css-checkbox" value="2" />
			                                <span class="input-span"></span>Hàng ngoại
			                        	</label>
			                        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row ibox-footer border-top-0">
				<div style="overflow: auto; max-height: 600px;">
					<table id="contenttable" class="testing" cellspacing="0" style="width: 100%; margin: 0px;">
						<tbody id="contenttableContent">
							<!--
							<?php if(count($blockList) > 0){?>
								<?php foreach($blockList as $item) {  ?>
									<?php $check = true; ?>

									<tr> 
										<td colspan="2" class="noBorder"></td>
										<?php for($j = 0; $j < $item['Bay']; $j++){ ?>
											<td  class="noBorder cellSize" style="text-align: center;">
												<?php
													if ($j + 1 < 10){
														echo ('0'. ($j + 1));
													}
													else{
														echo ($j + 1);
													}
												?>		
											</td>
										<?php } ?>
									</tr>

									<?php for($i = 0; $i < $item['Row']; $i++){ ?>
										<tr>
										<?php if ($check) { ?>
											<th rowspan="<?=$item['Row']?>" class="noBorder" style="text-align: center; background-color: #ffffff"><?=$item['Block']?></td>
										<?php }
										$check = false; ?>

										<td class="noBorder cellSize" style="text-align: center;">
											<?php
												if ($i + 1 < 10){
													echo ('0'.($i + 1));
												}
												else{
													echo $i + 1;
												}
											?>		
										</td>

										<?php for($j = 0; $j < $item['Bay']; $j++){ ?>
											<td class="cellSize cellCanBeChoosen ui-widget-content" style="text-align: center"></td>
										<?php } ?>
										</tr>
									<?php } ?>									

									<tr>
										<th class="noBorder" colspan="<?=($item['Bay'] + 1)?>"></th>
									</tr>
								<?php } ?>
							<?php } ?>
						-->
						</tbody>						
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Vessel modal-->
<div class="modal fade" id="vessel-modal" tabindex="-1" role="dialog" aria-labelledby="groups-modalLabel-2" aria-hidden="true" data-whatever="id" style="padding-left: auto; padding-right: auto; padding-top: 4%">
	<div class="modal-dialog" role="document" style="min-width: 1250px!important">
		<div class="modal-content" style="border-radius: 4px">
			<div class="modal-header">
				<h5 class="modal-title text-primary" id="groups-modalLabel-2">DANH MỤC TÀU</h5>
			</div>
			<div class="modal-body">
				<table id="tblVessel" class="table table-striped display nowrap" cellspacing="0" style="width: 99.5%">
					<thead>
						<tr style="width: 100%">
							<th col-name="STT">STT</th>
							<th col-name="VoyageKey">VoyageKey</th>
							<th col-name="VesselID">Mã tàu</th>
							<th col-name="VesselName">Tên tàu</th>
							<th col-name="InboundVoyage">Chuyến nhập</th>
							<th col-name="OutboundVoyage">Chuyến xuất</th>
						</tr>
					</thead>
					<tbody>
						<?php if(count($vesselList) > 0){?>
							<?php $i = 1; ?>
							<?php foreach($vesselList as $item) {  ?>
								<tr>
									<td col-name="STT"><?=$i?></td>
									<td col-name="VoyageKey"><?=$item['VoyageKey']?></td>
									<td col-name="VesselID"><?=$item['VesselID']?></td>
									<td col-name="VesselName"><?=$item['VesselName']?></td>
									<td col-name="InboundVoyage"><?=$item['InboundVoyage']?></td>
									<td col-name="OutboundVoyage"><?=$item['OutboundVoyage']?></td>
								</tr>
								<?php $i++; ?>
							<?php } ?>							
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<div  style="margin: 0 auto!important;">
					<button class="btn btn-sm btn-rounded btn-gradient-blue btn-labeled btn-labeled-left btn-icon" id="apply-vessel" data-dismiss="modal">
						<span class="btn-label"><i class="ti-check"></i></span>Xác nhận</button>
					<button class="btn btn-sm btn-rounded btn-gradient-peach btn-labeled btn-labeled-left btn-icon" data-dismiss="modal">
						<span class="btn-label"><i class="ti-close"></i></span>Đóng</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Report modal-->
<div class="modal fade" id="report-modal" tabindex="-1" role="dialog" aria-labelledby="groups-modalLabel-3" aria-hidden="true" data-whatever="id" style="padding-left: auto; padding-right: auto; padding-top: 4%">
	<div class="modal-dialog" role="document" style="min-width: 1250px!important">
		<div class="modal-content" style="border-radius: 4px">
			<div class="modal-header">
				<h5 class="modal-title text-primary" id="groups-modalLabel-3"></h5>
			</div>
			<div class="modal-body">
				<table id="tblReport" class="table table-striped display nowrap" cellspacing="0" style="width: 99.5%">
					<thead>
						<tr style="width: 100%">
							<th col-name="STT" class="editor-cancel">STT</th>
							<th col-name="PlanSequence">Sequence</th>
							<th col-name="Color" class="editor-cancel">Màu</th>
							<th col-name="VesselInfo" class="editor-cancel">Tàu | Chuyến nhập | Chuyến xuất</th>
							<th col-name="BillOfLadingORBookingNo" class="editor-cancel">Số vận đơn/ booking</th>
							<!--
							<th col-name="BillOfLading">Số vận đơn</th>
							<th col-name="BookingNo">Số booking</th>							
							-->
							<th col-name="Bay" class="editor-cancel">Bay</th>
							<th col-name="Row" class="editor-cancel">Row</th>
							<th col-name="RowNumeric" class="editor-cancel">Số lượng</th>
							<th col-name="ColorValue" class="editor-cancel"></th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<div  style="margin: 0 auto!important;">
					<button class="btn btn-sm btn-rounded btn-gradient-blue btn-labeled btn-labeled-left btn-icon" id="saveReport">
						<span class="btn-label"><i class="ti-check"></i></span>Lưu
					</button>
					<button class="btn btn-sm btn-rounded btn-gradient-peach btn-labeled btn-labeled-left btn-icon" data-dismiss="modal">
						<span class="btn-label"><i class="ti-close"></i></span>Đóng</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		var _vesselColumns	= ["STT", "VoyageKey", "VesselID", "VesselName", "InboundVoyage", "OutboundVoyage"],
			_reportColumns 	= ["STT", "PlanSequence", "Color", "VesselInfo", "BillOfLadingORBookingNo", /*"BillOfLading", "BookingNo", */ "Bay", "Row", "RowNumeric", "ColorValue"],
			tbl 			= $("#contenttable"),
			tblVessel		= $("#tblVessel"),
			tblReport		= $("#tblReport"),
			parentMenuList 	= {},
			vesselList		= {},
			blockList 		= {},
			carTypeList 	= {},
			BLORBookingList = {},
			rowArr 			= [], 
			colArr 			= [],
			colorAndSeqList = [],
			beforeColor		= '',
			sequence 		= 1,
			ColorWithSeq 	= [],
			BLORBookingWithSeq = [],
			ClassListWithSeq = [],
			VoyageKeyWithSeq = [],
			ClassIDWithSeq  = [],
			SeqList 		= [],
			CarBrandWithSeq = [],
			CarTypeWithSeq  = [],
			IsLocalForeignWithSeq = [],
			vesselModal 	= $("#vessel-modal"),
			reportModal 	= $("#report-modal");

		/* Initial customer table */
		tblVessel.newDataTable({
			scrollY: '30vh',
			columnDefs: [
				{ type: "num", className: "text-center", targets: _vesselColumns.indexOf('STT')},		
				{ className: "text-center", targets: _vesselColumns.getIndexs(["VesselName", "InboundVoyage", "OutboundVoyage",])},
				{ className: "hiden-input", targets: _vesselColumns.getIndexs(["VoyageKey", "VesselID"])},
			],
			order: [[ _vesselColumns.indexOf('STT'), 'asc' ]],
			paging: false,
            keys:true,
            autoFill: {
                focus: 'focus'
            },
            select: {
            	style: 'single',
            	info: false,
            },
            rowReorder: false,
            arrayColumns: _vesselColumns,
		});

		/* Initial report table */
		tblReport.newDataTable({
			scrollY: '30vh',
			columnDefs: [
				{ type: "num", className: "text-center", targets: _reportColumns.indexOf('STT')},		
				{ className: "text-center", targets: _reportColumns.getIndexs(["Color", "VesselInfo", "BillOfLadingORBookingNo", /*"BillOfLading", "BookingNo",*/ "PlanSequence", "Bay", "Row", "RowNumeric"])},
				{ className: "hiden-input", targets: _reportColumns.getIndexs(["ColorValue"])},
			],
			order: [[ _reportColumns.indexOf('STT'), 'asc' ]],
			paging: false,
            keys:true,
            autoFill: {
                focus: 'focus'
            },
            select: {
            	style: 'single',
            	info: false,
            },
            rowReorder: false,
            arrayColumns: _reportColumns,
		});

        tblReport.editableTableWidget({editor: $("#status, #httt, #editor-input")});


		<?php if(isset($vesselList) && count($vesselList) >= 0){?>
			vesselList = <?=json_encode($vesselList);?>;
		<?php } ?>

		<?php if(isset($BLORBookingList) && count($BLORBookingList) >= 0){?>
			BLORBookingList = <?=json_encode($BLORBookingList);?>;
		<?php } ?>

		<?php if(isset($blockList) && count($blockList) >= 0){?>
			blockList = <?=json_encode($blockList);?>;
		<?php } ?>

		<?php if(isset($colorAndSeqList) && count($colorAndSeqList) >= 0){?>
			colorAndSeqList = <?=json_encode($colorAndSeqList);?>;
		<?php } ?>

		<?php if(isset($carTypeList) && count($carTypeList) >= 0){?>
			carTypeList = <?=json_encode($carTypeList);?>;
		<?php } ?>

		<?php if(isset($parentMenuList) && count($parentMenuList) >= 0){?>
			parentMenuList = <?=json_encode($parentMenuList);?>;
		<?php } ?>

		for (i = 0; i < parentMenuList.length; i++){
			if (parentMenuList[i]['MenuAct'] == 'Vessel'){
				$('#' + parentMenuList[i]['MenuAct']).addClass('active');
			}
			else{
				$('#' + parentMenuList[i]['MenuAct']).removeClass();
			}
		}

		vesselModal.on('shown.bs.modal', function(e){
			$($.fn.dataTable.tables(true)).DataTable().columns.adjust();
		});

		reportModal.on('shown.bs.modal', function(e){
			$($.fn.dataTable.tables(true)).DataTable().columns.adjust();
		});

		$("#chooseVessel").on('click', function(){
			vesselModal.modal('show');
		});

		$("#nochooseVessel").on('click', function(){
			$("#VesselID").val("");
			$("#VesselInfo").val("");
			$('#BillOfLadingORBookingNo option[value="*"]').attr('selected','selected');
       		$('#BrandID option[value="*"]').attr('selected','selected');
       		$('#CarTypeID option[value="*"]').attr('selected','selected');
		});		

		//tblVessel.find("tbody tr").on("dblclick", function(){ 
		$(document).on("dblclick", "#tblVessel tbody tr",  function(){
       		var vesselData 		= tblVessel.getSelectedRows().data().toArray()[0],
       			VoyageKey		= vesselData[_vesselColumns.indexOf("VoyageKey")],
       			VesselID		= vesselData[_vesselColumns.indexOf("VesselID")],
       			VesselName 		= vesselData[_vesselColumns.indexOf("VesselName")],
       			InboundVoyage 	= vesselData[_vesselColumns.indexOf("InboundVoyage")],
       			OutboundVoyage  = vesselData[_vesselColumns.indexOf("OutboundVoyage")];

       		$("#VoyageKey").val(VoyageKey);
       		$("#VesselID").val(VesselID);
       		$("#VesselInfo").val(VesselName + " | " + InboundVoyage + " | " + OutboundVoyage);
       		$('#BillOfLadingORBookingNo option[value="*"]').attr('selected','selected');
       		$('#BrandID option[value="*"]').attr('selected','selected');
       		$('#CarTypeID option[value="*"]').attr('selected','selected');

       		var formData = {
					'action': 'view',
					'child_action': 'loadBLORBookingNo',
					'VoyageKey': VoyageKey,
				};
			

			$.ajax({
                url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
                dataType: 'json',
                data: formData,
                type: 'POST',
                success: function (data) {               	
                    if (data.list.length > 0){
                    	$('#BillOfLadingORBookingNo').empty();
                    	$('#BillOfLadingORBookingNo').append('<option value="*">Tất cả</option>');
                    	if ($('input[type=radio][name=ClassID]:checked').val() == 1){
                    		for (i = 0; i < data.list.length; i++){
                    			if (data.list[i]['ClassID'] == '1'){
                    				$('#BillOfLadingORBookingNo').append('<option>' + data.list[i]['BillOfLading'] +'</option>');
                    			}	
                    		}
                    	}
                    	else{
                    		for (i = 0; i < data.list.length; i++){
                    			if (data.list[i]['ClassID'] == '2'){
                    				$('#BillOfLadingORBookingNo').append('<option>' + data.list[i]['BookingNo'] +'</option>');
                    			}	
                    		}
                    	}
                    }
                },
                error: function(err){
                	toastr["error"]("Error!");
                	console.log(err);
                }
            });	

       		vesselModal.modal('hide');
       	});

       	$("#apply-vessel").on('click', function(){
       		var vesselData 		= tblVessel.getSelectedRows().data().toArray()[0],
       			VoyageKey		= vesselData[_vesselColumns.indexOf("VoyageKey")],
       			VesselID		= vesselData[_vesselColumns.indexOf("VesselID")],
       			VesselName 		= vesselData[_vesselColumns.indexOf("VesselName")],
       			InboundVoyage 	= vesselData[_vesselColumns.indexOf("InboundVoyage")],
       			OutboundVoyage  = vesselData[_vesselColumns.indexOf("OutboundVoyage")];

       		$("#VoyageKey").val(VoyageKey);
       		$("#VesselID").val(VesselID);
       		$("#VesselInfo").val(VesselName + " | " + InboundVoyage + " | " + OutboundVoyage);
       		$('#BillOfLadingORBookingNo option[value="*"]').attr('selected','selected');
       		$('#BrandID option[value="*"]').attr('selected','selected');
       		$('#CarTypeID option[value="*"]').attr('selected','selected');

       		var formData = {
					'action': 'view',
					'child_action': 'loadBLORBookingNo',
					'VoyageKey': VoyageKey,
				};
			

			$.ajax({
                url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
                dataType: 'json',
                data: formData,
                type: 'POST',
                success: function (data) {               	
                    if (data.list.length > 0){
                    	$('#BillOfLadingORBookingNo').empty();
                    	$('#BillOfLadingORBookingNo').append('<option value="*">Tất cả</option>');
                    	if ($('input[type=radio][name=ClassID]:checked').val() == 1){
                    		for (i = 0; i < data.list.length; i++){
                    			if (data.list[i]['ClassID'] == '1'){
                    				$('#BillOfLadingORBookingNo').append('<option>' + data.list[i]['BillOfLading'] +'</option>');
                    			}	
                    		}
                    	}
                    	else{
                    		for (i = 0; i < data.list.length; i++){
                    			if (data.list[i]['ClassID'] == '2'){
                    				$('#BillOfLadingORBookingNo').append('<option>' + data.list[i]['BookingNo'] +'</option>');
                    			}	
                    		}
                    	}c
                    }
                },
                error: function(err){
                	toastr["error"]("Error!");
                	console.log(err);
                }
            });	
       	});

       	$('#contenttable .cellCanBeChoosen').on('click', function(){
       	});

       	var selectable = null;
	    $("#Block").on('change', function(){
	    	$("#Block option[value='noChoose']").remove();
	    	sequence = 1;
	    	for (i = 0; i < colorAndSeqList.length; i++){
				if (parseInt(sequence) - 1 < colorAndSeqList[i]['PlanSequence']){
					sequence = parseInt(colorAndSeqList[i]['PlanSequence']) + 1; // Find max sequence
				}
			}

	    	var Block = this.value,
	    		Bay   = blockList.filter( p => p.Block == this.value).map( x => x.MaxBay )[0],
	    		Row   = blockList.filter( p => p.Block == this.value).map( x => x.MaxRow )[0],
				src   = '<?php $check = true; ?><tr><td colspan="2" class="noBorder"></td>',
				planList = [];

			for (i = 0; i < Bay; i++){
				src +=  '<td  class="noBorder cellSize" style="text-align: center;">';
				var temp = parseInt(i) + 1;
				if (temp < 10){
					src +=  ('0' + temp);
				}
				else{
					src +=  temp;
				}
				src +=  '</td>';
			}
			src += '</tr>';

			for (i = 0; i < Row; i++){
				src +=  '<tr>';

				if (i == 0){
					var temp = parseInt(Row) * 2;
					src += '<th rowspan="' + temp + '" class="noBorder" style="vertical-align: text-top; text-align: center; background-color: #ffffff">';
					src += Block +'</th>';
				}

				src += '<td class="noBorder cellSize" style="text-align: center;">'
				var temp = parseInt(i) + 1;
				if (temp < 10){
					src +=  ('0' + temp);
				}
				else{
					src +=  temp;
				}
				src += "</td>";

				
				for (j = 0; j < Bay; j++){
					var id = (parseInt(i) + 1) + "_" + (parseInt(j) + 1);
					src += '<td class="cellSize cellCanBeChoosen ui-widget-content" id="' + id +'" style="text-align: center"></td>'
				}

				src += '</tr><tr>';

				var neededColspan =  parseInt(Bay) + 1;
				src += '<th class="noBorder" colspan="' + neededColspan + '"</th></tr>';
			}

			if(selectable !== null) {
				$("#contenttable").selectable("destroy");
			}
			$("#contenttableContent").empty();
			$("#contenttableContent").append(src);

			var formData = {
					'action': 'view',
					'Block': Block,
				};
			

			$.ajax({
                url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
                dataType: 'json',
                data: formData,
                type: 'POST',
                success: function (data) {                	
                    if (data.list.length > 0){
                    	planList = data.list;
                    }

                   	for (i = 0; i < planList.length; i++){
                   		var id = '#' + planList[i]['Row'] + '_' + planList[i]['Bay'];
                  		$(id).css({'backgroundColor': planList[i]['Color']});
                  		$(id).addClass("selected");					
                   	}
                },
                error: function(err){
                	toastr["error"]("Error!");
                	console.log(err);
                }
            });	

   			var isRightClick = false,
				isMouseDown = false,
				startRowIndex = null,
				startCellIndex = null;

			function selectTo(cell) {
			    var row = cell.parent(),    
			    	cellIndex = cell.index(),
			    	rowIndex = row.index();

			    var rowStart, rowEnd, cellStart, cellEnd;

			    if (rowIndex < startRowIndex) {
			        rowStart = rowIndex;
			        rowEnd = startRowIndex;
			    } else {
			        rowStart = startRowIndex;
			        rowEnd = rowIndex;
			    }
			    
			    if (cellIndex < startCellIndex) {
			        cellStart = cellIndex;
			        cellEnd = startCellIndex;
			    } else {
			        cellStart = startCellIndex;
			        cellEnd = cellIndex;
			    }

				for (i = (parseInt(rowStart) + 1)/2 ; i <= ((parseInt(rowEnd) + 1)/2); i++){
					for (j = cellStart; j <= cellEnd; j++){
						var id = '#' + i + '_' + j;
						$(id).addClass("selected");
						$(id).addClass("selecting");
					}
				}
			}

			tbl.find("td").mousedown(function (e) {
				var classList 			= e['target']['className'],
					indexOfClassSearch 	= classList.indexOf('cellCanBeChoosen'); 

				if (indexOfClassSearch == -1){
					return;
				}

				if (e.which == 3){
					isRightClick = true;
				}

			    isMouseDown = true;
			    var cell = $(this);

			    //table.find(".selected").removeClass("selected"); // Deselect everything

			    if (e.shiftKey) {
			        selectTo(cell);                
			    } 
			    else {
			        cell.addClass("selected");
			        cell.addClass("selecting");
			        startRowIndex = cell.parent().index();
			        if (startRowIndex == 1){
			        	startCellIndex = parseInt(cell.index()) - 1;
			        }
			        else{
			        	startCellIndex = cell.index();
			        }
			    }

			    e.preventDefault();
			    return false; // Prevent text selection

			})
			.mouseover(function (e){ 
				var classList 			= e['target']['className'],
					indexOfClassSearch 	= classList.indexOf('cellCanBeChoosen'); 

				if (indexOfClassSearch == -1){
					return;
				}

			    if (!isMouseDown){
			    	return;
			    }
				//table.find(".selected").removeClass("selected");
				
				selectTo($(this));
			})
			.bind("selectstart", function () {
			    return false;
			});

			tbl/*.find("td .cellCanBeChoosen")*/.mouseup(function (e) {
				var classList 			= e['target']['className'],
					indexOfClassSearch 	= classList.indexOf('cellCanBeChoosen'); 

				if (indexOfClassSearch == -1){
					return;
				}

			    isMouseDown = false;

			    if (!isRightClick){
			    	$("#color").val('');
			    	$("#color").trigger('click');
			    }
			    else{
			    	resetCell();
			    }
			    isRightClick = false;
			});
			

			/*
			selectable = $("#contenttable").selectable({
				filter: 'td.ui-widget-content',
				autoRefresh: false,
				draggable: false,
				resizable: false,
				selected : function(event, ui) {
					var id 	= $(ui.selected).context["id"],
						row = id.substr(0, id.indexOf('_')),
						col = id.substr(parseInt(id.indexOf('_')) + 1, id.length);

					rowArr.push(row);
					colArr.push(col);

					/* Set customer's choosing color for cell 
				},
				stop: function(){
					$("#color").trigger('click');			
				},
			});*/
	    });

		$("#color").on('change', function(eve){
			var color = $("#color").val();
			//$('#contenttable .ui-selected').css({'background': color, 'color': 'white'});
			tbl.find('.selected.selecting').css({'background': color, 'color': 'white'});
			tbl.find('.selected.selecting').addClass('beChanging');
			tbl.find('.selected.selecting.deleting').removeClass('deleting');
			tbl.find('.selected.selecting').removeClass('selecting');

			/* Set sequence */
			if (beforeColor != color){				
				var tempSeq = -1, increaseSeq = false;
				for (i = 0; i < colorAndSeqList.length; i++){
					if (color == colorAndSeqList[i]['Color']){
						console.log(color + " | " + colorAndSeqList[i]['Color']);
						tempSeq =  colorAndSeqList[i]['PlanSequence'];
					}
				}
				if (tempSeq == -1){
					tempSeq = sequence;
					increaseSeq = true;
				}

				SeqList.push(tempSeq);
				ColorWithSeq.push(color);
				BLORBookingWithSeq.push($('#BillOfLadingORBookingNo').val());
				VoyageKeyWithSeq.push($('#VoyageKey').val() ? $('#VoyageKey').val() : '');
				ClassListWithSeq.push($('input[type=radio][name=ClassID]:checked').val());
				IsLocalForeignWithSeq.push($('input[type=radio][name=IsLocalForeign]:checked').val());
				CarBrandWithSeq.push($("#BrandID").val());
				CarTypeWithSeq.push($("#CarTypeID").val());

				colorAndSeqList.push({'Color': color, 'PlanSequence': sequence});

				if (increaseSeq){
					sequence++;
				}
			}
			beforeColor = color;
		});

		function resetCell(){
			tbl.find('.selected.selecting').css({'background': '', 'color': ''});
			tbl.find('.selected.selecting').addClass('deleting');
			tbl.find('.selected.selecting').removeClass('selecting');
			//tbl.find('.selected').removeClass('selected');
		}
	
		$("#save").on('click', function(){
			tbl.find('.selected.deleting').removeClass('selected');

			var data = tbl.find('.selected.beChanging');
			for (i = 0; i < data.length; i++){
				var id 	= data[i]['id'],
					row = id.substr(0, id.indexOf('_')),
					col = id.substr(parseInt(id.indexOf('_')) + 1, id.length);

					rowArr.push(row);
					colArr.push(col);
			}

			/* Prepare data for save - delete more one*/
			for (i = rowArr.length - 1; i >= 0 ; i--){
				for (j = i - 1;  j >= 0; j--){
					if (rowArr[i] == rowArr[j] && colArr[i] == colArr[j]){
						rowArr.splice(i, 1);
						colArr.splice(i, 1);
						j = 0;
					}
				}				
			}

			var saveData 		= [], 
				planSaveData 	= [],
				Block  			= $("#Block").val(),
				Tier   			= blockList.filter( p => p.Block == Block).map( x => x.MaxTier )[0],
				YardID 			= blockList.filter( p => p.Block == Block).map( x => x.YardID )[0];
				/*
				ClassID 		= $('input[type=radio][name=ClassID]:checked').val(),
				IsLocalForeign 	= $('input[type=radio][name=IsLocalForeign]:checked').val();
				*/

			for (i = 0; i < rowArr.length; i++){
				var Color = rgb2hex($("#" + rowArr[i] + "_" + colArr[i]).css('backgroundColor')),
					seq   = -1,
					VoyageKey,
					CheckClassID,
					CheckIsLocalForeign,
					CheckCarBrand,
					CheckCarType;
				/*
					objData = {
						'YardID': YardID,
						'Block': Block,
						'Row': rowArr[i],
						'Bay': colArr[i],
						'Tier': Tier,
					};*/

				/*
				if (BillOfLadingORBookingNo == '*'){
					saveData.push(objData);
				}
				*/

				for (j = 0; j < ColorWithSeq.length; j++){
					if (ColorWithSeq[j] == Color){
						CheckSeq = SeqList[j];
						BillOfLadingORBookingNo = BLORBookingWithSeq[j];
						CheckVoyageKey = VoyageKeyWithSeq[j];
						CheckClassID = ClassListWithSeq[j];
						CheckIsLocalForeign = IsLocalForeignWithSeq[j];
						CheckCarBrand = CarBrandWithSeq[j];
						CheckCarType = CarTypeWithSeq[j];
						j = ColorWithSeq.length;
					}
				}
				seq++;
				if (Color != "#ffffff"){
					if (BillOfLadingORBookingNo != '*'){
						if (CheckClassID == '1'){
							var objPlanData = {
								'YardID': YardID,
								'VoyageKey': CheckVoyageKey,
								'Block': Block,
								'Row': rowArr[i],
								'Bay': colArr[i],
								'Tier': Tier,
								'Color': Color,
								'KeyNo': '',
								'BillOfLading': BillOfLadingORBookingNo,
								'BookingNo': '',
								'ClassID': CheckClassID,
								'IsLocalForeign': CheckIsLocalForeign,
								'PlanSequence': CheckSeq,
								'BrandID': CheckCarBrand,
								'CarTypeID': CheckCarType,
							};
							planSaveData.push(objPlanData);
						}
						else{
							var objPlanData = {
								'YardID': YardID,
								'VoyageKey': CheckVoyageKey,							
								'Block': Block,
								'Row': rowArr[i],
								'Bay': colArr[i],
								'Tier': Tier,
								'Color': Color,
								'KeyNo': '',
								'BillOfLading': '',
								'BookingNo': BillOfLadingORBookingNo,
								'ClassID': CheckClassID,
								'IsLocalForeign': CheckIsLocalForeign,
								'PlanSequence': CheckSeq,
								'BrandID': CheckCarBrand,
								'CarTypeID': CheckCarType,
							};
							planSaveData.push(objPlanData);
						}
					}
					else{
						var objPlanData = {
							'YardID': YardID,
							'VoyageKey': CheckVoyageKey,							
							'Block': Block,
							'Row': rowArr[i],
							'Bay': colArr[i],
							'Tier': Tier,
							'Color': Color,
							'KeyNo': '',
							'BillOfLading': '*',
							'BookingNo': '*',
							'ClassID': CheckClassID,
							'IsLocalForeign': CheckIsLocalForeign,
							'PlanSequence': CheckSeq,
							'BrandID': CheckCarBrand,
							'CarTypeID': CheckCarType,
						};
						planSaveData.push(objPlanData);

						/*
						for (j = 0; j < BLORBookingList.length; j++){
							if (BLORBookingList[j]['ClassID'] == ClassID){
								var objPlanData = {
									'YardID': YardID,
									'VoyageKey': VoyageKey ? VoyageKey : '',
									'Block': Block,
									'Row': rowArr[i],
									'Bay': colArr[i],
									'Tier': Tier,
									'Color': Color,
									'KeyNo': '',
									'BillOfLading': BLORBookingList[j]['BillOfLading'] ? BLORBookingList[j]['BillOfLading'] : '',
									'BookingNo': BLORBookingList[j]['BookingNo'] ? BLORBookingList[j]['BookingNo'] : '',
									'ClassID': ClassID,
									'IsLocalForeign': IsLocalForeign,
								};
								planSaveData.push(objPlanData);
							}
						}
						*/
					}		
				}
			}

			/*
			if (saveData.length > 0){
				var formData = {
					'action': 'add',
					'child_action': 'saveBlockDetail',
					'data': saveData,
				};

				$.ajax({
	                url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
	                dataType: 'json',
	                data: formData,
	                type: 'POST',
	                success: function (data) {                	
	                    if(data.deny) {
	                        toastr["error"](data.deny);
	                        return;
	                    }
	                    if(formData.action == 'add'){
	                    	toastr["success"]("Cập nhật thành công!");
	                    	return;
	                    }
	                },
	                error: function(err){
	                	toastr["error"]("Error!");
	                	console.log(err);
	                }
	            });	
			}
			*/

			if (planSaveData.length > 0){
				var formData = {
					'action': 'add',
					'child_action': 'savePlan',
					'data': planSaveData,
				};

				$.ajax({
	                url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
	                dataType: 'json',
	                data: formData,
	                type: 'POST',
	                success: function (data) {                	
	                    if(data.deny) {
	                        toastr["error"](data.deny);
	                        return;
	                    }
	                    if(formData.action == 'add'){
	                    	toastr["success"]("Cập nhật thành công!");

	                    	var loadingColorAndSeqFormData = {
								'action': 'view',
								'child_action': 'loadColorAndSeqList',
							};

							$.ajax({
								url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
							    dataType: 'json',
							    data: loadingColorAndSeqFormData,
							    type: 'POST',
							    success: function (data) {                	
							        if(data.deny) {
							            toastr["error"](data.deny);
							            return;
							        }
									colorAndSeqList = data.list;
							        return;
							    },
							    error: function(err){
							    	toastr["error"]("Error!");
							    	console.log(err);
							    }
							});	
	                    	return;
	                    }
						tbl.find('.beChanging').removeClass('beChanging');
	                },
	                error: function(err){
	                	toastr["error"]("Error!");
	                	console.log(err);
	                }
	            });	
			}	

			/* Get data to delete*/		
			var data = tbl.find('.deleting'),
				deleteRowArr = [],
				deleteColArr = [];

			if (data.length > 0){
				for (i = 0; i < data.length; i++){
					var id 	= data[i]['id'],
						row = id.substr(0, id.indexOf('_')),
						col = id.substr(parseInt(id.indexOf('_')) + 1, id.length);

						deleteRowArr.push(row);
						deleteColArr.push(col);
				}

				var /*deleteData = [],*/ deletePlanData = [];
				for (i = 0; i < deleteRowArr.length; i++){
					var Block  	= $("#Block").val(),
						Tier   	= blockList.filter( p => p.Block == Block).map( x => x.MaxTier )[0],
						YardID 	= blockList.filter( p => p.Block == Block).map( x => x.YardID )[0],
						Color 	= rgb2hex($("#" + deleteRowArr[i] + "_" + deleteColArr[i]).css('backgroundColor')),
						/*BillOfLadingORBookingNo = $("#BillOfLadingORBookingNo").val(),
						ClassID = $('input[type=radio][name=ClassID]:checked').val(),
						IsLocalForeign = $('input[type=radio][name=IsLocalForeign]:checked').val(),*/
						VoyageKey = $("#VoyageKey").val();/*,
						objData = {
							'YardID': YardID,
							'Block': Block,
							'Row': deleteRowArr[i],
							'Bay': deleteColArr[i],
							'Tier': Tier,
						};

					deleteData.push(objData);
					*/
					
					var objPlanData = {
						'YardID': YardID,
						'Block': Block,
						'Row': deleteRowArr[i],
						'Bay': deleteColArr[i],
						'Tier': Tier,
					};
					deletePlanData.push(objPlanData);

					// if (BillOfLadingORBookingNo != '*'){
					// 	if (ClassID == 1){
					// 		var objPlanData = {
					// 			'YardID': YardID,
					// 			'Block': Block,
					// 			'Row': deleteRowArr[i],
					// 			'Bay': deleteColArr[i],
					// 			'Tier': Tier,
					// 			/*
					// 			'BillOfLading': BillOfLadingORBookingNo,
					// 			'BookingNo': '',
					// 			'ClassID': ClassID,
					// 			'IsLocalForeign': IsLocalForeign,
					// 			*/
					// 		};
					// 		deletePlanData.push(objPlanData);
					// 	}
					// 	else if (ClassID == 2){
					// 		var objPlanData = {
					// 			'YardID': YardID,
					// 			'Block': Block,
					// 			'Row': deleteRowArr[i],
					// 			'Bay': deleteColArr[i],
					// 			'Tier': Tier,
					// 			/*
					// 			'BillOfLading': '',
					// 			'BookingNo': BillOfLadingORBookingNo,
					// 			'ClassID': ClassID,
					// 			'IsLocalForeign': IsLocalForeign,
					// 			*/
					// 		};
					// 		deletePlanData.push(objPlanData);
					// 	}
					// }
					// else{
					// 	var objPlanData = {
					// 		'YardID': YardID,
					// 		'Block': Block,
					// 		'Row': deleteRowArr[i],
					// 		'Bay': deleteColArr[i],
					// 		'Tier': Tier,
					// 		/*
					// 		'BillOfLading': '*',
					// 		'BookingNo': '*',
					// 		'ClassID': ClassID,
					// 		'IsLocalForeign': IsLocalForeign,
					// 		*/
					// 	};
					// 	deletePlanData.push(objPlanData);
					// 	/*
					// 	for (j = 0; j < BLORBookingList.length; j++){
					// 		if (BLORBookingList[j]['ClassID'] == ClassID){
					// 			var objPlanData = {
					// 				'Block': Block,
					// 				'Row': rowArr[i],
					// 				'Bay': colArr[i],
					// 				'Tier': Tier,
					// 				'BillOfLading': BLORBookingList[j]['BillOfLading'] ? BLORBookingList[j]['BillOfLading'] : '',
					// 				'BookingNo': BLORBookingList[j]['BookingNo'] ? BLORBookingList[j]['BookingNo'] : '',
					// 			};
					// 			deletePlanData.push(objPlanData);
					// 		}
					// 	}
					// 	*/
					// }			
				}

				/*
				if (deleteData.length > 0){
					var formData = {
						'action': 'delete',
						'child_action': 'deleteBlockDetails',
						'data': deleteData,
					};

					$.ajax({
		                url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
		                dataType: 'json',
		                data: formData,
		                type: 'POST',
		                success: function (data) {                	
		                    if(data.deny) {
		                        toastr["error"](data.deny);
		                        return;
		                    }
	   	                	toastr["success"]("Cập nhật thành công!");
	                    	return;
		                },
		                error: function(err){
		                	toastr["error"]("Error!");
		                	console.log(err);
		                }
		            });	
				}
				*/

				if (deletePlanData.length > 0){
					var formData = {
						'action': 'delete',
						'data': deletePlanData,
					};

					$.ajax({
			            url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
			            dataType: 'json',
			            data: formData,
			            type: 'POST',
			            success: function (data) {                	
			                if(data.deny) {
			                    toastr["error"](data.deny);
			                    return;
			                }
		                	toastr["success"]("Cập nhật thành công!");

		                	var loadingColorAndSeqFormData = {
								'action': 'view',
								'child_action': 'loadColorAndSeqList',
							};

							$.ajax({
								url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
							    dataType: 'json',
							    data: loadingColorAndSeqFormData,
							    type: 'POST',
							    success: function (data) {                	
							        if(data.deny) {
							            toastr["error"](data.deny);
							            return;
							        }
									colorAndSeqList = data.list;
							        return;
							    },
							    error: function(err){
							    	toastr["error"]("Error!");
							    	console.log(err);
							    }
							});	

		                	tbl.find('.deleting').addClass('selected');
							tbl.find('.deleting').removeClass('deleting');
			                return;
			            },
			            error: function(err){
			            	tbl.find('.deleting').addClass('selected');
							tbl.find('.deleting').removeClass('deleting');
			            	toastr["error"]("Error!");
			            	console.log(err);
			            }
			        });	

					/*
					if (BillOfLadingORBookingNo	== '*'){
						var formData = {
							'action': 'delete',
							'child_action': 'deletePlanWithOutBLORBookingNo',
							'data': deleteData,
						};

						$.ajax({
			                url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
			                dataType: 'json',
			                data: formData,
			                type: 'POST',
			                success: function (data) {                	
			                    if(data.deny) {
			                        toastr["error"](data.deny);
			                        return;
			                    }
		                    	toastr["success"]("Cập nhật thành công!");
			                    return;
			                },
			                error: function(err){
			                	toastr["error"]("Error!");
			                	console.log(err);
			                }
			            });	
					}
					else{
						var formData = {
							'action': 'delete',
							'child_action': 'deletePlanWithBLORBookingNo',
							'data': deleteData,
						};

						$.ajax({
			                url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
			                dataType: 'json',
			                data: formData,
			                type: 'POST',
			                success: function (data) {                	
			                    if(data.deny) {
			                        toastr["error"](data.deny);
			                        return;
			                    }
			                    if(formData.action == 'add'){
			                    	toastr["success"]("Cập nhật thành công!");
			                    	return;
			                    }
			                },
			                error: function(err){
			                	toastr["error"]("Error!");
			                	console.log(err);
			                }
			            });	
					}
					*/
				}							
			}
		});	

		var hexDigits = new Array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 

		/* Function to convert rgb color to hex format */
		function hex(x) {
			return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
		}

		function rgb2hex(rgb) {
			rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
			return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
		}

		$("#search").on('click', function(){
			$("#Block").trigger('change');
			sequence = 1;
		});

		$("#report").on('click', function(){
			reportModal.modal('hide');
			if ($("#Block").val() == 'noChoose'){
				toastr['error']("Vui lòng chọn Block!");
				return;
			}

			$("#groups-modalLabel-3").text('THỐNG KÊ KẾ HOẠCH BÃI (Block: ' + $("#Block").val() + ')');

			var formData = {
					'action': 'view',
					'Block': $("#Block").val(),
				};
			tblReport.waitingLoad();

			$.ajax({
                url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
                dataType: 'json',
                data: formData,
                type: 'POST',
                success: function (data) {                	
                    if (data.list.length > 0){
		                var i = 0, 
		                	rows = [], 
		                	index = 1;

		                while (i < data.list.length){
		                	var sameBayIndex = parseInt(i) + 1, 
		                		rowStr = '[', 
		                		rowNumeric,
		                		VesselInfo = '', 
		                		objData = {}, 
		                		r = [];

		                	for (j = 0; j < vesselList.length; j++){
	                  			var vesselData = vesselList[j];
	                  			if (data.list[i]['VoyageKey'] == vesselData['VoyageKey']){
	                  				VesselInfo = vesselData['VesselName'] + " | " + vesselData['InboundVoyage'] + " | " + vesselData['OutboundVoyage'];
	                  			}
	                  		}
	                  		
		                	if (sameBayIndex < data.list.length){
		                		while ((sameBayIndex < data.list.length) && (data.list[sameBayIndex]['Bay'] == data.list[parseInt(sameBayIndex) - 1]['Bay'])
		                			&& (data.list[sameBayIndex]['PlanSequence'] == data.list[parseInt(sameBayIndex) - 1]['PlanSequence'])){
			                		sameBayIndex++;
			                	}
			                	if (sameBayIndex - 1 > i){
			                		for (j = i; j <= sameBayIndex - 2; j++){
				            			rowStr += (getAlwaysTwoNumber(data.list[j]['Row']) + '|');
				            		}             	
			                		rowStr += getAlwaysTwoNumber(data.list[sameBayIndex - 1]['Row']) + ']';			                		
			                		rowNumeric = sameBayIndex - i;

			                		objData = {
			                			'PlanSequence': data.list[i]['PlanSequence'],
			                			'Color':  data.list[i]['Color'],
			                			'VesselInfo': VesselInfo,
			                			'BillOfLading': data.list[i]['BillOfLading'],
			                			'BookingNo': data.list[i]['BookingNo'],
			                			'Bay': '[' + getAlwaysTwoNumber(data.list[i]['Bay']) + ']',
			                			'Row': rowStr,
			                			'RowNumeric': rowNumeric,
			                		};

			                		i = sameBayIndex;
			                	}
			                	else{
			                		rowStr += getAlwaysTwoNumber(data.list[i]['Row']) + ']';
			                		rowNumeric = sameBayIndex - i;

			                		objData = {
			                			'PlanSequence': data.list[i]['PlanSequence'],
			                			'Color':  data.list[i]['Color'],
			                			'VesselInfo': VesselInfo,
			                			'BillOfLading': data.list[i]['BillOfLading'],
			                			'BookingNo': data.list[i]['BookingNo'],
			                			'Bay': '[' + getAlwaysTwoNumber(data.list[i]['Bay']) + ']',
			                			'Row': rowStr,
			                			'RowNumeric': rowNumeric,
			                		};

			                		i++;
			                	}			                	
		                	}
		                	else{
		                		rowStr = '[' + getAlwaysTwoNumber(data.list[i]['Row']) + ']';
		                		rowNumeric = 1;

		                		objData = {
			                		'PlanSequence': data.list[i]['PlanSequence'],
			                		'Color':  data.list[i]['Color'],
			                		'VesselInfo': VesselInfo,
			                		'BillOfLading': data.list[i]['BillOfLading'],
			                		'BookingNo': data.list[i]['BookingNo'],
			                		'Bay': '[' + getAlwaysTwoNumber(data.list[i]['Bay']) + ']',
			                		'Row': rowStr,
			                		'RowNumeric': rowNumeric,
			                	};

		                		i++;
		                	}

		                	/* Load data for report table */
							$.each(_reportColumns, function(idx, colname){
								var val = "";
								switch(colname){
									case "STT": 
										val = index++;
										break;
									case "Color":
										val = '<span style="width: 45px;; height: 15px; border-radius: 10%; background-color: ' + objData[colname] +'; display: inline-block;"></span>';
										break;
									case "ColorValue":
										val = objData['Color'];
										break;
									case "BillOfLadingORBookingNo":
										if (objData['BillOfLading'] == '*' && objData['BookingNo'] == '*'){
											val = '*'
										}
										else{
											if ($("input[type=radio][name=ClassID]:checked").val() == '1'){
												val = objData['BillOfLading'];
											}
											else{
												val = objData['BookingNo'];
											}
										}
										break;
									default:
										val = objData[colname];
										break;	
								}
								r.push(val);
							});	
							rows.push(r);
		                }   
		            }
                 	/*
                    
                   	for (i = 0; i < dataList.length; i++){
                  		var rData = planList[i], r = [], VesselInfo = '';

                  		for (j = 0; j < vesselList.length; j++){
                  			var vesselData = vesselList[j];
                  			if (rData['VoyageKey'] == vesselData['VoyageKey']){
                  				VesselInfo = vesselData['VesselName'] + " | " + vesselData['InboundVoyage'] + " | " + vesselData['OutboundVoyage'];
                  			}
                  		}
					*/
						/* Load data for report table */
					/*	$.each(_reportColumns, function(idx, colname){
							var val = "";
							switch(colname){
								case "STT": 
									val = parseInt(i) + 1; 
									break;
								case "Color":
									//val = '<input style="width: 10px; height: 10px; border-radius: 50%; border-color: none; background-color: ' + rData[colname] +'">';
									val = '<span style="width: 45px;; height: 15px; border-radius: 10%; background-color: ' + rData[colname] +'; display: inline-block;"></span>';
									break;
								case "VesselInfo":
									val = VesselInfo;
									break;
								default:
									val = rData[colname];
									break;	
							}
							r.push(val);
						});
						
						rows.push(r);
                   	}
                   	*/

                   	tblReport.dataTable().fnClearTable();
		        	if(rows.length > 0){
						tblReport.dataTable().fnAddData(rows);
		        	}
                },
                error: function(err){
                	toastr["error"]("Error!");
                	console.log(err);
                }
            });	

			reportModal.modal('show');

		});
		
		$("#BrandID").on('change', function(){
			$('#CarTypeID').empty();
			$('#CarTypeID').append('<option value="*">Tất cả</option>');

			for (i = 0; i < carTypeList.length; i++){
				if (carTypeList[i]['BrandID'] == this.value){
					$('#CarTypeID').append('<option>' + carTypeList[i]['CarTypeID'] +'</option>');
				}
			}
		});

		
		$("#saveReport").on('click', function(){
			var saveData = tblReport.getEditData(),
				formData = [];
			
			if (saveData.length == 0){
				toastr['info']("Không có dữ liệu thay đổi!");
				return;
			}

			for (i = 0; i < saveData.length; i++){
				var objData = {
					'Color': saveData[i]['ColorValue'],
					'PlanSequence': saveData[i]['PlanSequence'],
				};

				formData.push(objData);				
			}

			var fData = {
				'action': 'add',
				'child_action': 'updateSequenceInPlan',
				'data': formData,
			};

			$.ajax({
	            url: "<?=site_url(md5('Vessel') . '/' . md5('vsYardPlanning'));?>",
	            dataType: 'json',
	            data: fData,
	            type: 'POST',
	            success: function (data) {                	
	                if(data.deny) {
	                    toastr["error"](data.deny);
	                    return;
	                }
	                if(fData.action == 'add'){
	                	toastr["success"]("Cập nhật thành công!");
	                }				

	                tblReport.waitingLoad();
	                var tableData = tblReport.getDataByColumns(_reportColumns);
	                for (k = 0; k < formData.length; k++){
		                for (i = 0; i < tableData.length; i++){
		                	if (tableData[i]['ColorValue'] == formData[k]['Color']){
		                		tableData[i]['PlanSequence'] = formData[k]['PlanSequence'];
		                	}
		                }
	                }

	                var rows = [], index = 1;
	                for (i = 0; i < tableData.length; i++){
	                	var r = [];
	                	$.each(_reportColumns, function(idx, colname){
							var val = "";
							switch(colname){
								case "STT": 
									val = index++;
									break;
								default:
									val = tableData[i][colname];
									break;	
							}
							r.push(val);
						});	
						rows.push(r);
		            }   

		            tblReport.dataTable().fnClearTable();
		        	if(rows.length > 0){
						tblReport.dataTable().fnAddData(rows);
		        	}
	            },
	            error: function(err){
	            	toastr["error"]("Error!");
	            	console.log(err);
	            }
	        });	

	        
		});

		function getAlwaysTwoNumber(x){
			if (parseInt(x) < 10){
				return ('0' + x);
			}
			else{
				return x;
			}
		}
	});
</script>
<script src="<?=base_url('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>							