<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title><?=$title;?></title>
    <!--    favicon-->
    <link rel="icon" href="<?=base_url('assets/img/icons/favicon.ico');?>" type="image/ico">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?=base_url('assets/vendors/jquery-ui/jquery-ui.css');?>" rel="stylesheet" />
    <link href="<?=base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?=base_url('assets/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
    <link href="<?=base_url('assets/vendors/line-awesome/css/line-awesome.min.css');?>" rel="stylesheet" />
    <link href="<?=base_url('assets/vendors/themify-icons/css/themify-icons.css');?>" rel="stylesheet" />

    <link href="<?=base_url('assets/vendors/jquery-confirm/jquery-confirm.min.css');?>" rel="stylesheet" />

    <!-- PLUGINS STYLES-->
    <link href="<?=base_url('assets/vendors/dataTables/datatables.min.css');?>" rel="stylesheet" />
    <link href="<?=base_url('assets/vendors/dataTables/jquery.dataTables.min.css');?>" rel="stylesheet" />
    <!--    DATATABLES SCROLL-->
    <link href="<?=base_url('assets/vendors/dataTables/scroller.dataTables.min.css');?>" rel="stylesheet" />

    <link href="<?=base_url('assets/vendors/toastr/toastr.min.css');?>" rel="stylesheet" type="text/css" />

    <!--    CUSTOMIZE FOR DATATABLES-->
    <link href="<?=base_url('assets/css/custom.datatables.css');?>" rel="stylesheet" />

    <!-- THEME STYLES-->
    <link href="<?=base_url('assets/css/main.min.css');?>" rel="stylesheet" />
    <link href="<?=base_url('assets/css/ro2.css');?>" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    
    <!-- CORE PLUGINS-->
    <script src="<?=base_url('assets/vendors/popper.js/dist/umd/popper.min.js');?>"></script>
    
    <script src="<?=base_url('assets/vendors/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/vendors/jquery/dist/jquery2-1-4.min.js');?>"></script>
    <script src="<?=base_url('assets/vendors/jquery-ui/jquery-ui.js');?>"></script>
    <script src="<?=base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('assets/vendors/metisMenu/dist/metisMenu.min.js');?>"></script>
    <script src="<?=base_url('assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
    <script src="<?=base_url('assets/vendors/jquery-validation/dist/jquery.validate.min.js');?>"></script>
    <script src="<?=base_url('assets/vendors/jquery-confirm/jquery-confirm.min.js');?>"></script>

    <script src="<?=base_url('assets/vendors/moment/min/moment.min.js');?>"></script>
    
    <script src="<?=base_url('assets/js/contextmenu.js');?>"></script>

    <link href="<?=base_url('assets/vendors/datetimepicker/jquery-ui-timepicker-addon.css');?>" rel="stylesheet" />
    <script src="<?=base_url('assets/vendors/datetimepicker/jquery-ui-timepicker-addon.js');?>"></script>

    <!--    custom for eblling js-->
    <script src="<?=base_url('assets/js/ro2.js');?>"></script>
    <script src="<?=base_url('assets/js/datatables.ext.js');?>"></script>
    
    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?=base_url('assets/vendors/dataTables/datatables.min.js');?>"></script>

    <!--    TABLES SCROLL-->
    <script src="<?=base_url('assets/vendors/dataTables/dataTables.scroller.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/vendors/dataTables/extensions/key_table.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/vendors/dataTables/extensions/mindmup-editabletable.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/vendors/dataTables/extensions/numeric-input-example.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/vendors/dataTables/extensions/autofill.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/vendors/dataTables/extensions/scroller.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/vendors/dataTables/extensions/select.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/vendors/dataTables/extensions/buttons.min.js');?>"></script>

    <!-- Toastr js -->
    <script src="<?=base_url('assets/vendors/toastr/toastr.min.js');?>"></script>

    <!-- Loader -->


    <!-- Shorten text
    <script type="text/javascript" src="jquery.shorten.1.0.js"></script> -->
    
    <!--
    <link href="<?=base_url('assets/css/demo.css');?>" rel="stylesheet" />
    <link href="<?=base_url('assets/css/normalize.css');?>" rel="stylesheet" />
    <link href="<?=base_url('assets/css/component1.css');?>" rel="stylesheet" />
    -->

     <!-- Socket -->
    <script src="<?=base_url('/sockets/node_modules/socket.io-client/dist/socket.io.js');?>"></script>

    <script type="text/javascript">
        var socket = io.connect('https://demororo.cehsoft.com/');
    </script>

    <style>
        .no-pointer{
            pointer-events: none;
        }

        input[type="text"]:focus{
            background-color: #f6fcff;
        }
        .top-bar{
            position: fixed;
            background-color: #207b99;
            height: 4vw;
            margin: 0;
            display: flex;
        }
        .mainContent{
            position: fixed;
            margin-top: 60px;
            display: flex;
            color: black!important;
        }
        .col-4 label{
            color: white;
        }
        .label1{
            transform: rotate(260deg) skew(0deg);
            font-size: 1.5rem;
            color: white;
        }
        .label2{
            transform: rotate(220deg) skew(0deg);
            font-size: 1.5rem;
            color: white;
        }
        .label3{
            transform: rotate(180deg) skew(0deg);
            font-size: 1.5rem;
            color: white;
            text-align: center;
        }
        .label4{
            transform: rotate(140deg) skew(0deg);
            font-size: 1.5rem;
            color: white;
            text-align: center;
        }
        .label5{
            transform: rotate(100deg) skew(0deg);
            font-size: 1.5rem;
            color: white;
            text-align: center;
        }
        /**/
        #contenttable{
            border-collapse: separate;
            border-spacing: 3px!important;
            table-layout: fixed; 
        }

        #shortenContenttable{
            border-collapse: separate;
            border-spacing: 10px!important; 
        }
        #contenttable td.cellCanBeChoosen,
        #shortenContenttable td.cellCanBeChoosen{
            border: 1.25px solid #207b99;
            /*border-radius: 10px;*/
            height: 50px;
            min-width: 125px!important;
            background-color: #ffffff;
        }
        .noBorder{
            border: none!important;
        }
        #overflowTable{
            overflow: scroll;
            height: 570px;
        }
        #overflowShortenTable{
            overflow: scroll;
            height: 500px;
        }
        input::placeholder { 
            font-style: italic;
            color: white;
            padding-left: 5px;
            padding-bottom: 2px;
            font-size: 1.2vw;
            margin-bottom: 0.5vw
        }
        select, optgroup{
            font-size: 1.25vw;
        }
        .my-group .form-control{
            width:50%;
        }
        table { page-break-inside:auto }
        tr    { page-break-inside:avoid; page-break-after:auto }
        [class^="ti-"], [class*=" ti-"] {
            font-size: 1.25vw;
        }
    </style>
<link href="<?=base_url('assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css');?>" rel="stylesheet" />
<body style="background-color: #f2f4f8;">
    <div class="col-12 top-bar">
        <div class="col-2">
            <label  class="col-form-label" style="color: white; font-weight: bold; vertical-align: middle; font-size: 1.75vw; width: 100%; margin-top: 0.4vw" id="mainTittle">GIÁM SÁT BÃI
            </label>          
        </div>
        <div class="left-btn-group col-2" style="text-align: center;">
            <button style="font-size: 1.25rem; font-family: Times New Roman; border-radius: 10px; height: 2.25vw; width: 80%; border: white solid 1px; color: white; background-color: #207b99; margin-top: 1vw;" id="chooseBlock">
                <p style="font-size: 1.15vw; font-style: italic;">Chọn block...</p>
            </button>            

            <input id="Tier" hidden>
            <input id="StockRef" hidden>
            <input id="FinishDate" hidden>
        </div>
        <div class="col-4">
            <div class="row form-group">
                <div class="col-2" style="text-align: center; padding-top: 0.4rem; height: 4vw; border-left: white solid 2px; color: white; font-weight: bold;" id='TC'>
                    <p style="font-size: 1vw;">TẤT CẢ</p>
                </div>
                <div class="col-2" style="text-align: center; padding-top: 0.4rem; height: 4vw; border-left: white solid 2px; color: white; font-weight: bold" id='NT'><p style="font-size: 1vw; text-align: center;">NHẬP TÀU</p></div>
                <div class="col-2" style="text-align: center; padding-top: 0.4rem; height: 4vw; border-left: white solid 2px; color: white; font-weight: bold" id='XT'><p style="font-size: 1vw">XUẤT TÀU</p></div>
                <div class="col-2" style="text-align: center; padding-top: 0.4rem; height: 4vw; border-left: white solid 2px; color: white; font-weight: bold" id='HB'><p style="font-size: 1vw">HẠ BÃI</p></div>
                <div class="col-2" style="text-align: center; padding-top: 0.4rem; height: 4vw; border-left: white solid 2px; border-right: white solid 2px; color: white; font-weight: bold" id='XB'>
                    <p style="font-size: 1vw">XUẤT BÃI</p>
                </div>
            </div>
        </div>
        <div class="right-btn-group col-4" id='controlButtonDiv'>
            <div class="row form-group">
                <div class="col-8">
                    <div id="searchGroupBox">
                        <div class="input-group" style="margin-top: 0.65rem; width: 100%;">
                            <select style="height: 2vw; width: 30%; border-top-left-radius: 5px; border-bottom-left-radius: 5px; border: white solid 1px; color: white; background-color: #207b99;">
                                <optgroup>
                                    <option>SỐ VIN</p></option>
                                    <option>SỐ MÁY</option>
                                </optgroup>
                            </select>
                            <input type="text" placeholder="Tìm kiếm..." style="height: 2vw; background-color: #207b99; border: white solid 1px; color: white; width: 50%;">
                            <button style="width: 20%; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: white solid 1px; color: white; background-color: #207b99; height: 2vw;">
                                <p style="font-size: 1.15vw; font-style: italic;">Tìm</p>
                                <!--<span class="ti-search"></span>-->
                            </button>
                        </div>
                    </div>
                    <div id="cancelJob">
                        <button style="font-size: 1vw; font-family: Times New Roman; border-radius: 10px; height: 2vw; width: 70%; border: white solid 1px; color: white; background-color: #207b99; margin-top: 0.75rem" id="cancelJobButton"><i>Hủy công việc</i></button>
                    </div>
                </div>
                <div class="col-4" style="text-align: center;">
                    <label id="CapacityInUsed" class="col-form-label" style="font-size: 1vw;"></label>
                </div>
            </div>
        </div>   
    </div>
    <div class="col-12 mainContent" id="content">
        <div class="col-2" style="background-color: #ffffff; border-right: #f2f4f8 solid 5px;" >
            <div class="row">
                <label id="shortenContenttableCounting" style="margin-left: auto; margin-right: 5px; margin-top: 5px; font-size: 1.2vw"></label>
            </div> 
            <div class="row">
                <div class="input-group-icon input-group-icon-right">
                    <span class="input-icon input-icon-right">
                        <i class="ti-search"></i>
                    </span>
                    <input class="form-control" type="text" placeholder="Tìm kiếm..." style="max-height: 25px!important; margin-bottom: 10px; margin-top: 5px;">
                </div>
            </div>            
            <div id="overflowShortenTable" class="row">
                <table id="shortenContenttable" class="testing"cellspacing="0" style="width: 100%; margin: 0px;">
                    <tbody id="shortenContenttableContent">
                    </tbody>                        
                </table>
            </div>
        </div>
        <div class="col-10" style="background-color: #ffffff;" >
            <div class="row ibox-footer border-top-0">
                <div id="overflowTable" style="width: 100%">
                    <table id="contenttable" cellspacing="0" style="margin: 0px;">
                        <tbody id="contenttableContent">
                        </tbody>                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Choose Block modal-->
<div class="modal fade" id="choose-block-modal" tabindex="-1" role="dialog" aria-labelledby="groups-modalLabel-1" aria-hidden="true" data-whatever="id" style="padding-left: auto; padding-right: auto; margin-top: 3%">
    <div class="modal-dialog" role="document" style="max-width: 256px!important;">
        <div class="modal-content" style="border-radius: 10px!important;">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="groups-modalLabel-1">Chọn block</h5>
            </div>
            <div class="modal-body" style="padding: 5px 15px 5px 15px">
                <div class="col-12 mt-3">
                    <?php if(count($blockList) > 0) { ?> 
                        <?php $i = 1; ?>
                        <?php foreach($blockList as $item){  ?> 
                            <div class="row form-group">
                                <label class="radio radio-success" style="margin-top: auto; margin-bottom: auto">
                                    <?php if ($i == 1){ ?>
                                        <input type="radio" checked name="Block" value="<?=$item['Block']?>">
                                    <?php }else{ ?>
                                        <input type="radio" name="Block"  value="<?=$item['Block']?>">
                                    <?php } ?>
                                    <span class="input-span mr-2 ml-3" style="margin-top: 1px;"></span>
                                    <span style="color: black" class="ml-3"><?= $item['Block'] ?></span>
                                </label>
                            </div>      
                            <?php $i++; ?>
                        <?php } ?>
                    <?php } ?>    
                </div>
            </div>
            <div class="modal-footer">
                <div  style="margin: 0 auto!important;">
                    <button class="btn btn-sm btn-rounded btn-gradient-blue btn-labeled btn-labeled-left btn-icon" id="apply-block" data-dismiss="modal">
                        <span class="btn-label"><i class="ti-check"></i></span>Xác nhận</button>
                    <button class="btn btn-sm btn-rounded btn-gradient-peach btn-labeled btn-labeled-left btn-icon" data-dismiss="modal">
                        <span class="btn-label"><i class="ti-close"></i></span>Đóng</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Log out modal-->
<div class="modal fade" id="log-out-modal" tabindex="-1" role="dialog" aria-labelledby="groups-modalLabel-2" aria-hidden="true" data-whatever="id" style="padding-left: auto; padding-right: auto; margin-top: 3%">
    <div class="modal-dialog" role="document" style="max-width: 256px!important;">
        <div class="modal-content" style="border-radius: 10px!important;">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="groups-modalLabel-2">GIÁM SÁT BÃI</h5>
            </div>
            <div class="modal-footer">
                <div  style="margin: 0 auto!important;">
                    <button class="btn btn-sm btn-rounded btn-gradient-peach btn-labeled btn-labeled-left btn-icon" id="btn-log-out">
                        <span class="btn-label"><i class="la la-sign-out"></i></span>Đăng xuất</button>
                    <button class="btn btn-sm btn-rounded btn-gradient-blue btn-labeled btn-labeled-left btn-icon" data-dismiss="modal">
                        <span class="btn-label"><i class="la la-mail-reply"></i></span>Trở về</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!--
<button class="cn-button" id="cn-button">+</button>
<div class="cn-wrapper" id="cn-wrapper">
    <ul>
        <li title="Xuất bãi"><a href="#"><label class='label1'>Xuất bãi</label></a></li>
        <li title="Hạ bãi"><a href="#"><label class='label2'>Hạ<br> bãi</label></a></li>
        <li title="Xuất tàu"><a href="#"><label class='label3'>Xuất<br> tàu</label></a></a></li>
        <li title="Nhập tàu"><a href="#"><label class='label4'>Nhập<br> tàu</label></a></li>
        <li title="Tất cả"><a href="#"><label class='label5'>Tất cả</label></a></li>
    </ul>
</div>
<div id="cn-overlay" class="cn-overlay"></div>
-->

<script type="text/javascript">
    $(document).ready(function () {
        var blockList = {},
            CHEList   = {},
            tbl       = $("#contenttable"),
            tblShorten = $("#shortenContenttable"),
            posInUsed = 0,
            capacity  = 0,
            shortenPosInUsed = 0,
            shortenCapacity = 0;

        <?php if(isset($blockList) && count($blockList) >= 0){?>
            blockList = <?= json_encode($blockList);?>;
        <?php } ?>

        <?php if(isset($CHEList) && count($CHEList) >= 0){?>
            CHEList = <?= json_encode($CHEList);?>;
        <?php } ?>

        for (i = 0; i < CHEList.length; i++){
            if (CHEList[i]['JobStatus'] == "KT"){
                shortenCapacity++;
            }
        }

        $("#content").hide();
        $("#chooseBlock").on('click', function(){
            $("#choose-block-modal").modal('show');
        });
        $("#TC").css({'color': 'yellow'});

        $("#TC, #NT, #XT, #HB, #XB").on('click', function(){
            $("#NT, #XT, #HB, #XB, #TC").css({'color': 'white'});
            $('#' + this.id).css({'color': 'yellow'});
        });

        $("#mainTittle").on('click', function(){
            $("#log-out-modal").modal('show');
        });

        $("#btn-log-out").on('click', function(){
            window.location.href = "<?=site_url(md5('user') . '/' . md5('logout'));?>";
        });

        $("#apply-block").on('click', function(){
            $("#content").show();

            var Block = $('input[type=radio][name=Block]:checked').val(),
                Bay   = blockList.filter( p => p.Block == Block).map( x => x.MaxBay )[0],
                Row   = blockList.filter( p => p.Block == Block).map( x => x.MaxRow )[0],
                Tier  = blockList.filter( p => p.Block == Block).map( x => x.MaxTier )[0],
                src   = '<?php $check = true; ?><tr><td class="noBorder"  style="text-align: center; font-weight: bold;"></td>',
                planList = [];

            capacity = Bay * Row;

            $("#chooseBlock").text(Block);
            $("#chooseBlock").css(
                {'background-color': 'white', 'color': 'black', 'font-weight': 'bold', 'font-size': '1.25vw',}
            );
            $("#Tier").val(Tier);
            $("#CapacityInUsed").html('<b>ĐÃ SỬ DỤNG <br>' + posInUsed +'/' + capacity + '</b>');
            $("#shortenContenttableCounting").html('<i>Số lượng: ' + shortenCapacity + '</i>');

            for (i = 0; i < Bay; i++){
                src +=  '<td  class="noBorder" style="text-align: center; height: 15px!important;">';
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

                if ((i + 1) % 3 == 0){
                    src += '<td class="noBorder" style="text-align: center; color: red; max-width: 25px!important;">'
                }
                else{
                    src += '<td class="noBorder" style="text-align: center; max-width: 25px!important;">'
                }
                var temp = parseInt(i) + 1;
                if (temp < 10){
                    src +=  (/*Block +*/ '0' + temp);
                }
                else{
                    src +=  /*Block +*/ temp;
                }
                src += "</td>";

                
                for (j = 0; j < Bay; j++){
                    var id = (parseInt(i) + 1) + "_" + (parseInt(j) + 1);
                    src += '<td class="cellSize cellCanBeChoosen" id="' + id +'" style="text-align: center; font-size: 10px;">'
                    /*
                        src += '<p style="background-color: #207b99; height: 20px; width: 101%; margin: 0; text-align: center; color: white"><b>MNCAXXMAWAKK70318</b></p>';
                        src += '<div class="col-12">';
                            src += '<div class="row">';
                                src += '<div class="col-6">'
                                    src += '<div class="row" style="padding-left: 5px;">HONDA</div>';
                                    src += '<div class="row" style="padding-left: 5px;">KEY1</div>';
                                src+='</div>';                        
                                src += '<div class="col-3">'
                                    src += '<div class="row">SUV</div>';
                                    src += '<div class="row">818</div>';
                                src+='</div>';
                                src += '<div class="col-3">'
                                    src += '<div class="row">RED</div>';
                                src+='</div>';
                            src+='</div>';
                        src+='</div>';
                    */
                    src +='</td>'
                }

                src += '</tr><tr>';

                var neededColspan =  parseInt(Bay) + 1;
                src += '<th class="cellSize noBorder" colspan="' + neededColspan + '"</th></tr>';
            }

            $("#contenttableContent").empty();
            $("#contenttableContent").append(src);

            /* Add source to shorten table */
            /*
            src = '';
            for (i = 0; i < Row; i++){
                for (j = 0; j < Bay; j++){
                    src +=  '<tr>';
                    var id = 'shorten_' + (parseInt(i) + 1) + "_" + (parseInt(j) + 1);
                    src += '<td class="cellSize cellCanBeChoosen" id="' + id +'" style="text-align: center; font-size: 10px;">'
                        src += '<p style="background-color: #207b99; height: 20px; width: 100%; margin: 0; text-align: center; color: white">MNCAXXMAWAKK70318</p>';
                        src += '<div class="col-12">';
                            src += '<div class="row">';
                                src += '<div class="col-6">'
                                    src += '<div class="row" style="padding-left: 5px;">HONDA</div>';
                                    src += '<div class="row" style="padding-left: 5px;">KEY1</div>';
                                src+='</div>';                        
                                src += '<div class="col-3">'
                                    src += '<div class="row">SUV</div>';
                                    src += '<div class="row">818</div>';
                                src+='</div>';
                                src += '<div class="col-3">'
                                    src += '<div class="row">RED</div>';
                                src+='</div>';
                            src+='</div>';
                        src+='</div>';
                    src +='</td>';
                    src += '</tr>';
                }
                

                src += '<tr>';

                var neededColspan =  parseInt(Bay) + 1;
                src += '<th class="cellSize noBorder" colspan="' + neededColspan + '"</th></tr>';
            }
            */

            tbl.blockUI();
            tblShorten.blockUI();

            var formData = {
                'action': 'view',
                'child_action': 'updateCHEList',
            };

            $.ajax({
                url: "<?=site_url(md5('che'));?>",
                dataType: 'json',
                data: formData,
                type: 'POST',
                success: function (data) {
                    if(data.deny) {
                        toastr["error"](data.deny);
                        return;
                    }

                    tbl.unblock();
                    tblShorten.unblock();
                    
                    CHEList = data.list;
                    $('#shortenContenttable').unblock();
                    $('#contenttable').unblock();

                    var src = '';
                        hiddenList = [],
                        IsGOTransferedNumeric = 0;

                    for (i = 0; i < CHEList.length; i++){
                        if (CHEList[i]['IsGOTransfered'] == 0 && CHEList[i]['Block'] == $("#chooseBlock").text()){          
                            var Block = CHEList[i]['Block'],
                                Bay   = CHEList[i]['Bay'],
                                Row   = CHEList[i]['Row'],
                                Tier  = CHEList[i]['Tier'],
                                VINNo = CHEList[i]['VINNo'],
                                JobTypeID = CHEList[i]['JobTypeID'],
                                currentDate = getDateTimeFormatString(new Date()),
                                date = CHEList[i]['StartDate'],
                                dateNumeric = substractTwoDateYMD(date, currentDate),
                                id = 'shorten_' + i;

                            src +=  '<tr>';
                                src += '<td class="cellSize cellCanBeChoosen" id="' + id +'" style="text-align: center; font-size: 10px;">'
                                    src += '<p style="background-color: '

                                    switch(JobTypeID){
                                        case "DF":
                                            src += '#207b99';
                                            break;
                                        case "GO":
                                            src += '#f39C12';
                                            break;
                                        default:
                                            break;
                                    }

                                    src += '; height: 20px; width: 100%; margin: 0; text-align: center; color: white" id="VIN_' + Row + '_' + Bay + '">' + VINNo + '</p>';
                                    src += '<div class="col-12">';
                                        src += '<div class="row">';
                                            src += '<div class="col-6">'
                                                src += '<div class="row" style="padding-left: 5px;">HÃNG XE</div>';
                                                src += '<div class="row" style="padding-left: 5px;">';
                                                    src += Block;
                                                    src += '-';
                                                    if (Bay < 10){
                                                        src += '0';
                                                    }
                                                    src += Bay

                                                    src += '-';
                                                    if (Row < 10){
                                                        src += '0';
                                                    }
                                                    src += Row;
                                                    src += '-';
                                                    src += Tier;
                                                src += '</div>';
                                            src +='</div>';                        
                                            src += '<div class="col-3">';
                                                src += '<div class="row">MÀU</div>';
                                            src +='</div>';
                                            src += '<div class="col-3">';
                                                src += '<div class="row">';
                                                src += dateNumeric;
                                                src += ' ngày </div>';
                                            src +='</div>';
                                        src += '</div>';
                                    src += '</div>';
                                src +='</td>';
                            src += '</tr>';    

                            if (CHEList[i]['JobStatus'] == 'HT'){
                                hiddenList.push(id);

                                var finishSrc   = '',
                                    finishID    = '#' + Row + "_" + Bay;

                                finishSrc += '<p style="background-color: #207b99; height: 20px; width: 100%; margin: 0; text-align: center; color: white" id="VIN_' + Row + '_' + Bay + '">' + VINNo + '</p>';
                                finishSrc += '<div class="col-12">';
                                    finishSrc += '<div class="row">';
                                        finishSrc += '<div class="col-6">'
                                            finishSrc += '<div class="row" style="padding-left: 5px;">HÃNG XE</div>';
                                            finishSrc += '<div class="row" style="padding-left: 5px;">';
                                                finishSrc += Block;
                                                finishSrc += '-';
                                                if (Bay < 10){
                                                    finishSrc += '0';
                                                }
                                                finishSrc += Bay

                                                finishSrc += '-';
                                                if (Row < 10){
                                                    finishSrc += '0';
                                                }
                                                finishSrc += Row;
                                                finishSrc += '-';
                                                finishSrc += Tier;
                                            finishSrc += '</div>';
                                        finishSrc +='</div>';                        
                                        finishSrc += '<div class="col-3">';
                                            finishSrc += '<div class="row">MÀU</div>';
                                        finishSrc +='</div>';
                                        finishSrc += '<div class="col-3">';
                                            finishSrc += '<div class="row">';
                                            finishSrc += dateNumeric;
                                            finishSrc += ' ngày </div>';
                                        finishSrc +='</div>';
                                    finishSrc += '</div>';
                                finishSrc += '</div>';

                                $(finishID).empty();
                                $(finishID).append(finishSrc);
                            }
                        }
                        else{
                            IsGOTransferedNumeric++;
                        }
                    }

                    $("#shortenContenttableContent").empty();
                    $("#shortenContenttableContent").append(src);


                    for (k = 0; k < hiddenList.length; k++){
                        $('#' + hiddenList[k]).hide();
                    }
                    posInUsed += hiddenList.length;

                    var tempNumeric = CHEList.length - hiddenList.length - IsGOTransferedNumeric;
                    shortenCapacity = tempNumeric;
                    $("#shortenContenttableCounting").html('<i>Số lượng: ' + tempNumeric + '</i>');
                    $("#CapacityInUsed").html('<b>ĐÃ SỬ DỤNG <br>' + posInUsed +'/' + capacity + '</b>');
                },
                error: function(err){
                    console.log(err);
                    return;
                },
            });         
        });
        
        var choosenSource = [], 
            shortenChooseCellID = [], 
            contenttableID = [], 
            eventBef, 
            shortenInsertedCellID = [],
            posShortenInsertedCellID = [],
            befIDList = [];
            VINNoChoosen = [];

        $(document).on("click", "#shortenContenttable td",  function(e){
            var tempContenttableID = '',
                isDeselect = false;

            if (shortenChooseCellID.length > 0){
                $('#' + shortenChooseCellID[shortenChooseCellID.length - 1]).css({'border-color': '#207b99'});
                tempContenttableID = contenttableID[contenttableID.length - 1];

                var checkSource = document.getElementById(tempContenttableID.substring(1, tempContenttableID.length)).innerHTML;

                if (checkSource == '<button class="btn btn-success btn-sm btn-icon-only btn-circle btn-lg btn-air"><i class="la la-check"></i></button>'){
                    $(tempContenttableID).empty();
                }

                $(contenttableID[contenttableID.length - 1]).css({'border-color': '#207b99'});

                shortenChooseCellID.splice(-1,1);
                contenttableID.splice(-1,1);
            }

            var id = '';
            for (i = 0; i < e['originalEvent']['path'].length; i++){
                var temp = e['originalEvent']['path'][i];
                if (temp.id != '' && temp.localName == 'td'){
                    id  = temp.id;

                    shortenChooseCellID.push(id);
                    choosenSource.push(document.getElementById(id).innerHTML);
                    

                    if (befIDList.length == 0){
                        $('#' + id).css({'border-color': 'red'});
                        befIDList.push(id);
                    }
                    else{
                        if (befIDList[befIDList.length - 1] == id){
                            /* When deselect cell */
                            befIDList.splice(-1,1);
                            isDeselect = true;
                        }
                        else{
                            $('#' + id).css({'border-color': 'red'});
                            befIDList.push(id);
                        }
                    }
                }
            }

            var index = id.substring(8, id.length),
                suggestSrc = '<button class="btn btn-success btn-sm btn-icon-only btn-circle btn-lg btn-air"><i class="la la-check"></i></button>';
            contenttableID.push('#' + CHEList[index]['Row'] + '_' + CHEList[index]['Bay']);
            
            if ($(contenttableID[contenttableID.length - 1]).html() == ''){ // Cell is empty code
                $(contenttableID[contenttableID.length - 1]).empty();
                $(contenttableID[contenttableID.length - 1]).append(suggestSrc);
            }
            else{ // Select when cell is not empty  
                $(contenttableID[contenttableID.length - 1]).css({'border-color': '#f39c12'});
            }
            

            if (isDeselect){
                if ($(tempContenttableID).html() == '<button class="btn btn-success btn-sm btn-icon-only btn-circle btn-lg btn-air"><i class="la la-check"></i></button>'){
                    $(tempContenttableID).empty();
                }
                else{
                    $(tempContenttableID).css({'border-color': '#207b99'});
                }
            }

            $("#overflowTable").scrollLeft(125 * parseInt(CHEList[index]['Bay'] - 1));
            $("#overflowTable").scrollTop(50 * parseInt(CHEList[index]['Row'] - 1));
        });

        $("#cancelJob").hide();
        var posID = [],
            isBeingNavigated = 0,
            transformSrc = [],
            waitingContenttableCell = [],
            befCellHTML = [],
            transformVINNo = [];
        $(document).on("click", "#contenttable td",  function(e){
            var id          = '#' + e['target'].id,
                src         = '',
                classList   = e['target'].className;

            if (classList == 'cellSize cellCanBeChoosen' || classList == 'la la-check' || classList == 'btn btn-success btn-sm btn-icon-only btn-circle btn-lg btn-air'){
                if (choosenSource.length > 0){
                    if (classList == 'la la-check'|| classList == 'btn btn-success btn-sm btn-icon-only btn-circle btn-lg btn-air')
                    {
                        for (i = 0; i < e['originalEvent']['path'].length; i++){
                            var temp = e['originalEvent']['path'][i];
                            if (temp.id != '' && temp.localName == 'td'){
                                id = '#' + temp.id;   
                            }
                        }
                    }

                    /* Set source for cell */
                    if (choosenSource.length > 0)
                    {
                        src = choosenSource[choosenSource.length - 1];
                        choosenSource.splice(-1,1);
                    }

                    $('#' + shortenChooseCellID[shortenChooseCellID.length - 1]).hide();
                    $('#' + shortenChooseCellID[shortenChooseCellID.length - 1]).css({'border-spacing': '0'});
                    $('#' + shortenChooseCellID[shortenChooseCellID.length - 1]).css({'border-color': '#207b99'});

                    /* Delete label suggestion */
                    $(contenttableID[contenttableID.length - 1]).empty();

                    /* Append source for cell */   
                    if (src != ''){
                        var headerText = src.substring(0, src.indexOf('</div><div class="row" style="padding-left: 5px;">')),
                            /* middle text */
                            tempData = src.substring(src.indexOf('</div><div class="row" style="padding-left: 5px;">'),parseInt(src.indexOf('</div><div class="row" style="padding-left: 5px;">')) + 62), 
                            footerText = src.substring(parseInt(src.indexOf('</div><div class="row" style="padding-left: 5px;">')) + 62, src.length),
                            srcBay = parseInt(tempData.substring(54,56)),
                            srcRow = parseInt(tempData.substring(57,59)),
                            mainSrc = src;

                        shortenInsertedCellID.push(shortenChooseCellID[shortenChooseCellID.length - 1]);
                        posShortenInsertedCellID.push(id);

                        /* Update Job Status is HT */
                        var Row = id.substring(1, id.indexOf('_')),
                            Bay = id.substring(parseInt(id.indexOf('_')) + 1, id.length),
                            VINId = '#VIN_' + contenttableID[contenttableID.length - 1].substring(1, contenttableID[contenttableID.length - 1].length),
                            VINNo = $(VINId).text(),
                            finishDate = getDateTimeFormatString(new Date()),
                            formData = {
                                'action': 'add',
                                'child_action': 'updateYardJobStatus',
                                'Row': Row,
                                'Bay': Bay,
                                'VINNo': VINNo,
                                'JobStatus': 'HT',
                                'FinishDate': finishDate,
                            };

                        $("#FinishDate").val(finishDate);
                        if (Bay == srcBay && Row == srcRow){
                            $(id).empty();             
                            $(id).append(mainSrc);

                            /* No need to update pos available */
                            var updatePosForm = {
                                    'action': 'edit',
                                    'child_action': 'updatePositionStatus',
                                    'row':   Bay,
                                    'bay':   Bay,
                                    'value': 0,
                                };

                            $.ajax({
                                url: "<?=site_url(md5('che'));?>",
                                dataType: 'json',
                                data: updatePosForm,
                                type: 'POST',
                                success: function (data) {
                                    if(data.deny) {
                                        toastr["error"](data.deny);
                                        return;
                                    }

                                    /* Do nothing */
                                },
                                error: function(err){
                                    console.log(err);
                                    return;
                                },
                            });            
                        }
                        else{
                            var middleText = tempData.substring(0, 53);

                            if (Bay < 10){
                                middleText += '0';
                            }
                            middleText += (Bay + '-');                          

                            if (Row < 10){
                                middleText += '0';
                            }
                            middleText += (Row + '-'); 

                            middleText += tempData.substring(tempData.length - 3, tempData.length);

                            $(id).empty();             
                            $(id).append(headerText + middleText + footerText);

                            /* Update pos available */
                            var updatePosForm = {
                                'action': 'edit',
                                'child_action': 'updatePositionStatus',
                                'row':   srcRow,
                                'bay':   srcBay,
                            };

                            $.ajax({
                                url: "<?=site_url(md5('che'));?>",
                                dataType: 'json',
                                data: updatePosForm,
                                type: 'POST',
                                success: function (data) {
                                    if(data.deny) {
                                        toastr["error"](data.deny);
                                        return;
                                    }

                                    var updateForm = {
                                        'action': 'edit',
                                        'child_action': 'updatePositionStatus',
                                        'row':   srcRow,
                                        'bay':   srcBay,
                                    };

                                    $.ajax({
                                        url: "<?=site_url(md5('che'));?>",
                                        dataType: 'json',
                                        data: updateForm,
                                        type: 'POST',
                                        success: function (data) {
                                            if(data.deny) {
                                                toastr["error"](data.deny);
                                                return;
                                            }
                                        },
                                        error: function(err){
                                            console.log(err);
                                            return;
                                        }
                                    });  
                                },
                                error: function(err){
                                    console.log(err);
                                    return;
                                }
                            });  
                        }
                        
                        /* Update for StockRef value input */
                        for (i1 = 0; i1 < CHEList.length; i1++){
                            if (CHEList[i1]['VINNo'] == VINNo){
                                $("#StockRef").val(CHEList[i1]['StockRef']);
                                i1 = CHEList.length;
                            }
                        }

                        $.ajax({
                            url: "<?=site_url(md5('che'));?>",
                            dataType: 'json',
                            data: formData,
                            type: 'POST',
                            success: function (data) {
                                if(data.deny) {
                                    toastr["error"](data.deny);
                                    return;
                                }

                                shortenCapacity--;
                                $("#shortenContenttableCounting").html('<i>Số lượng: ' + shortenCapacity + '</i>');

                                 /* Update pos in used */
                                posInUsed++;
                                $("#CapacityInUsed").html('<b>ĐÃ SỬ DỤNG <br>' + posInUsed +'/' + capacity + '</b>');

                                toastr['success']("Thêm công việc thành công");

                                var CHEReload = [{
                                    'type': 'reload',
                                    'data': '',
                                    'CapacityInUsed': $('#CapacityInUsed').html(),
                                    'shortenContenttableCounting': $('#shortenContenttableCounting').html(),
                                }];

                                socket.emit('CHEReload', JSON.stringify(CHEReload));   
                                return;
                            },
                            error: function(err){
                                console.log(err);
                                return;
                            }
                        });  

                        var updateStockData = [{
                            'rowguid': $("#StockRef").val(),
                            'VINNo': VINNo,
                            'VMStatus': 'S',
                            'Block': $("#chooseBlock").text(),
                            'Bay': Bay,
                            'Row': Row,
                            'Tier': $("#Tier").val(),
                            'DateIn': $("#FinishDate").val(),
                        }],
                        updateStockFormData = {
                            'action': 'edit',
                            'child_action': 'updateStockData',
                            'data': updateStockData,

                        };

                        $.ajax({
                            url: "<?=site_url(md5('che'));?>",
                            dataType: 'json',
                            data: updateStockFormData,
                            type: 'POST',
                            success: function (data) {
                                if(data.deny) {
                                    toastr["error"](data.deny);
                                    return;
                                }

                                /* Socket real-time */
                                socket.emit('updateStockFromYard', JSON.stringify(updateStockData));

                                toastr['success']("Cập nhật vị trí Biến động bãi thành công!");
                            },
                            error: function (err){
                                console.log(err);
                                return;
                            },
                        });
                    }
                }
                else{
                    if (transformSrc.length > 0){
                        var tempSrc = (transformSrc[transformSrc.length - 1]),
                            headerText = tempSrc.substring(0, tempSrc.indexOf('</div><div class="row" style="padding-left: 5px;">')),
                            tempData = tempSrc.substring(tempSrc.indexOf('</div><div class="row" style="padding-left: 5px;">'),parseInt(tempSrc.indexOf('</div><div class="row" style="padding-left: 5px;">')) + 62), 
                            footerText = tempSrc.substring(parseInt(tempSrc.indexOf('</div><div class="row" style="padding-left: 5px;">')) + 62, tempSrc.length),
                            srcBay = parseInt(tempData.substring(54,56)),
                            srcRow = parseInt(tempData.substring(57,59)),
                            middleText = '',
                            deletePos = posID[posID.length - 1];


                        $(posID[posID.length - 1]).empty();
                        $(posID[posID.length - 1]).css({'border-color': '#207b99'});
                        
                        var Row = id.substring(1, id.indexOf('_')),
                            Bay = id.substring(parseInt(id.indexOf('_')) + 1, id.length),
                            tempTransformSrc = transformSrc[transformSrc.length - 1].substring(transformSrc[transformSrc.length - 1].indexOf('id="VIN_'), transformSrc[transformSrc.length - 1].indexOf('</p>'));

                        /* Set value for middleText */
                        middleText = tempData.substring(0, 53);

                        if (Bay < 10){
                            middleText += '0';
                        }
                        middleText += (Bay + '-'); 

                        if (Row < 10){
                            middleText += '0';
                        }
                        middleText += (Row + '-');                                    

                        middleText += tempData.substring(tempData.length - 3, tempData.length);

                        /* Set cell content transform */
                        $(id).append(headerText + middleText + footerText);


                        tempTransformSrc = tempTransformSrc.substring(parseInt(tempTransformSrc.indexOf('="')) + 2, tempTransformSrc.indexOf('">'));

                        var VINNo = $('#' + tempTransformSrc).text(),
                            formData = {
                                'action': 'add',
                                'child_action': 'transformYardJob',
                                'VINNo': VINNo,
                                'Bay': Bay,
                                'Row': Row,
                            };

                        if (posShortenInsertedCellID.length > 0){
                            posShortenInsertedCellID.splice(-1, 1);
                        }
                        posShortenInsertedCellID.push(id);
                        transformSrc.splice(-1,1);
                        posID.splice(-1,1);

                        $.ajax({
                            url: "<?=site_url(md5('che'));?>",
                            dataType: 'json',
                            data: formData,
                            type: 'POST',
                            success: function (data) {
                                if(data.deny) {
                                    toastr["error"](data.deny);
                                    return;
                                }

                                $("#cancelJob").hide();
                                $("#searchGroupBox").show(); 
                                toastr['success']("Đảo chuyển thành công!");

                                /* Update position */
                                var updatePosForm = {
                                    'action': 'edit',
                                    'child_action': 'updatePositionStatus',
                                    'row':   srcRow,
                                    'bay':   srcBay,
                                    'value': 1,
                                };

                                $.ajax({
                                    url: "<?=site_url(md5('che'));?>",
                                    dataType: 'json',
                                    data: updatePosForm,
                                    type: 'POST',
                                    success: function (data) {
                                        if(data.deny) {
                                            toastr["error"](data.deny);
                                            return;
                                        }

                                        var updateForm = {
                                            'action': 'edit',
                                            'child_action': 'updatePositionStatus',
                                            'row':   parseInt(Row),
                                            'bay':   parseInt(Bay),
                                            'value': 0,
                                        };
                                        $.ajax({
                                            url: "<?=site_url(md5('che'));?>",
                                            dataType: 'json',
                                            data: updateForm,
                                            type: 'POST',
                                            success: function (data) {
                                                if(data.deny) {
                                                    toastr["error"](data.deny);
                                                    return;
                                                }
                                            },
                                            error: function(err){
                                                console.log(err);
                                                return;
                                            }
                                        });  
                                    },
                                    error: function(err){
                                        console.log(err);
                                        return;
                                    }
                                });

                                /* Update for StockRef value input */
                                for (i1 = 0; i1 < CHEList.length; i1++){
                                    if (CHEList[i1]['VINNo'] == VINNo){
                                        $("#StockRef").val(CHEList[i1]['StockRef']);
                                        i1 = CHEList.length;
                                    }
                                }

                                var finishDate = getDateTimeFormatString(new Date());
                                $("#FinishDate").val(finishDate);

                                var updateStockData = [{
                                        'rowguid': $("#StockRef").val(),
                                        'VINNo': VINNo,
                                        'VMStatus': 'S',
                                        'Block': $("#chooseBlock").text(),
                                        'Bay': Bay,
                                        'Row': Row,
                                        'Tier': $("#Tier").val(),
                                        'DateIn': $("#FinishDate").val(),
                                    }],
                                    updateStockFormData = {
                                        'action': 'edit',
                                        'child_action': 'updateStockData',
                                        'data': updateStockData,

                                    };

                                $.ajax({
                                    url: "<?=site_url(md5('che'));?>",
                                    dataType: 'json',
                                    data: updateStockFormData,
                                    type: 'POST',
                                    success: function (data) {
                                        if(data.deny) {
                                            toastr["error"](data.deny);
                                            return;
                                        }
                                        
                                        /* Socket real-time */
                                        socket.emit('updateStockFromYard', JSON.stringify(updateStockData));
                                        
                                        toastr['success']("Cập nhật vị trí Biến động bãi thành công!");
                                    },
                                    error: function (err){
                                        console.log(err);
                                        return;
                                    },
                                });

                                var deleteData = [{
                                    'type': 'transform',
                                    'data': deletePos,
                                    'CapacityInUsed': '',
                                    'shortenContenttableCounting': '',
                                }];

                                socket.emit('CHEReload', JSON.stringify(deleteData));
                                return;
                            },
                            error: function(err){
                                console.log(err);
                                return;
                            }
                        });                        
                    }
                }                
            }
            else{
                for (i = 0; i < e['originalEvent']['path'].length; i++){
                    var temp = e['originalEvent']['path'][i];
                    if (temp.id != '' && temp.localName == 'td'){
                        if (posID.length == 0){
                            if ($('#' + temp.id).css('border-color') == 'rgb(243, 156, 18)'){
                                /* Click a cell in shorten contenttable to a cell of contenttable -> disappeared */
                                var VINId = '#VIN_' + temp.id,
                                    VINNo = $(VINId).text(),
                                    formData = {
                                        'action': 'edit',
                                        'child_action': 'updateGOTransfer',
                                        'VINNo': VINNo,
                                    },
                                    StockRef = '';

                                for (k = 0; k < CHEList.length; k++){
                                    if (CHEList[k]['VINNo'] == VINNo){
                                        StockRef = CHEList[k]['StockRef'];
                                        k = CHEList.length;
                                    }
                                }

                                $.ajax({
                                    url: "<?=site_url(md5('che'));?>",
                                    dataType: 'json',
                                    data: formData,
                                    type: 'POST',
                                    success: function (data) {
                                        if(data.deny) {
                                            toastr["error"](data.deny);
                                            return;
                                        }

                                        var text1 = $("#shortenContenttableCounting").text(),
                                            text2 = $("#CapacityInUsed").text();

                                        text1 = parseInt(text1.substring(parseInt(text1.indexOf(": ")) + 2, text1.length)) - 1;
                                        text2 = parseInt(text2.substring(parseInt(text2.indexOf('G ')) + 2, text2.indexOf('/'))) - 1;

                                        $("#shortenContenttableCounting").html('<i>Số lượng: ' + text1 + '</i>');
                                        $("#CapacityInUsed").html('<b>ĐÃ SỬ DỤNG <br>' + text2 +'/' + capacity + '</b>');
                                    },
                                    error: function (err){
                                        console.log(err);
                                        return;
                                    },
                                });   

                                var updateStockForm = {
                                        'action': 'edit',
                                        'child_action': 'updateStockStatus',
                                        'StockRef': StockRef,
                                        'VMStatus': 'O',
                                    };
 
                                $.ajax({
                                    url: "<?=site_url(md5('che'));?>",
                                    dataType: 'json',
                                    data: updateStockForm,
                                    type: 'POST',
                                    success: function (data) {
                                        if(data.deny) {
                                            toastr["error"](data.deny);
                                            return;
                                        }

                                        toastr['success']("Cập nhật trạng thái Biến động bãi thành công!");
                                    },
                                    error: function (err){
                                        console.log(err);
                                        return;
                                    },
                                });   

                                var updateYardForm = {
                                        'action': 'edit',
                                        'child_action': 'updateYardData',
                                        'VINNo': VINNo,
                                        'JobTypeID': 'GO',
                                        'JobStatus': 'HT',
                                        'FinishDate': getDateTimeFormatString(new Date()),
                                    };

                                $.ajax({
                                    url: "<?=site_url(md5('che'));?>",
                                    dataType: 'json',
                                    data: updateYardForm,
                                    type: 'POST',
                                    success: function (data) {
                                        if(data.deny) {
                                            toastr["error"](data.deny);
                                            return;
                                        }
                                    },
                                    error: function (err){
                                        console.log(err);
                                        return;
                                    },
                                });   

                                $('#' + temp.id).css({'border-color': '#207b99'});
                                $('#' + temp.id).html('');
                                $('#' + shortenChooseCellID[shortenChooseCellID.length - 1]).hide();
                                shortenChooseCellID.splice(-1,1);

                                /* Socket to GATE JOB */
                                socket.emit('updateGateOutByYard', 1);
                            }
                            else{
                                $("#cancelJob").show();
                                $("#searchGroupBox").hide();

                                if (choosenSource.length == 0){
                                    posID.push('#' + temp.id);
                                    $(posID[posID.length - 1]).css({'border-color': 'red'});   
                                    transformSrc.push(document.getElementById(temp.id).innerHTML);

                                    if (befCellHTML.length > 0){
                                        befCellHTML.splice(-1,1);
                                    }
                                    befCellHTML.push($('#' + temp.id)[0]['innerHTML']);
                                }
                            }    
                        }
                        else{
                            $("#cancelJob").show();
                            $("#searchGroupBox").hide();

                            if (posID.length > 0){
                                if ($(posID[posID.length - 1]).css('border-color') == 'rgb(255, 0, 0)'){
                                    if (($('#' + temp.id)[0]['innerHTML'] != '')
                                        && ($('#' + temp.id)[0]['innerHTML'] != befCellHTML[befCellHTML.length - 1])){
                                        toastr['error']('Vị trí đã tồn tại công việc!');
                                    }

                                    $(posID[posID.length - 1]).css({'border-color': '#207b99'});    
                                    posID.splice(-1,1);
                                    transformSrc.splice(-1,1);
                                    $("#cancelJob").hide();
                                    $("#searchGroupBox").show();                            
                                }
                                else{
                                    /* Do nothing */
                                }
                            }   
                        }
                        i = e['originalEvent']['path'].length;
                    }
                }
            }
        });

        $("#cancelJob").on('click', function(){
            $("#cancelJob").hide();
            $("#searchGroupBox").show();
            if (posID.length > 0){
                /* Update Job Status is KT */
                var tempPosID = posID[posID.length - 1],
                    deletePos = tempPosID,
                    tempCancelSrc = document.getElementById(tempPosID.substring(1, tempPosID.length)).innerHTML;

                tempCancelSrc = tempCancelSrc.substring(tempCancelSrc.indexOf('id="VIN_'), tempCancelSrc.indexOf('</p>'));
                tempCancelSrc = tempCancelSrc.substring(parseInt(tempCancelSrc.indexOf('="')) + 2, tempCancelSrc.indexOf('">'));


                var VINNo = $('#' + tempCancelSrc).text(),
                    formData = {
                        'action': 'add',
                        'child_action': 'updateYardJobStatus',
                        'VINNo': VINNo,
                        'JobStatus': 'KT',
                        'FinishDate': '',

                    };

                /* Reshow cell in shortenTable */
                if (shortenInsertedCellID.length > 0){
                    for (k = 0; k < posShortenInsertedCellID.length; k++){
                        if (posShortenInsertedCellID[k] == posID[posID.length - 1]){
                            $('#' + (shortenInsertedCellID[k])).show();
                            shortenInsertedCellID.splice(k, 1);
                            posShortenInsertedCellID.splice(k, 1);
                        }
                    }
                }
                else{
                    /* In case user delete after refresh browers */
                    for (k = 0; k < CHEList.length; k++){
                        if (CHEList[k]['VINNo'] == VINNo){
                            $('#shorten_' + k).show();
                        }
                    }
                }

                $(tempPosID).css({'border-color': '#207b99'});    
                $(tempPosID).empty();       
                posID.splice(-1,1);
                transformSrc.splice(-1,1);

                /* Update position available */

                var row = tempPosID.substring(1, tempPosID.indexOf('_')),
                    bay = tempPosID.substring(parseInt(tempPosID.indexOf('_')) + 1, tempPosID.length), 
                    updatePosForm = {
                        'action': 'edit',
                        'child_action': 'updatePositionStatus',
                        'row':   row,
                        'bay':   bay,
                        'value': 1,
                    };

                $.ajax({
                    url: "<?=site_url(md5('che'));?>",
                    dataType: 'json',
                    data: updatePosForm,
                    type: 'POST',
                    success: function (data) {
                        if(data.deny) {
                            toastr["error"](data.deny);
                            return;
                        }

                        /* Do nothing */
                    },
                    error: function(err){
                        console.log(err);
                        return;
                    },
                });                    

                /* Update pos in used */
                posInUsed--;
                $("#CapacityInUsed").html('<b>ĐÃ SỬ DỤNG <br>' + posInUsed +'/' + capacity + '</b>');
               

                $.ajax({
                    url: "<?=site_url(md5('che'));?>",
                    dataType: 'json',
                    data: formData,
                    type: 'POST',
                    success: function (data) {
                        if(data.deny) {
                            toastr["error"](data.deny);
                            return;
                        }

                        shortenCapacity++;
                        $("#shortenContenttableCounting").html('<i>Số lượng: ' + shortenCapacity + '</i>');

                        var deleteData = [{
                            'type': 'cancel',
                            'data': deletePos,
                            'CapacityInUsed': $("#CapacityInUsed").html(),
                            'shortenContenttableCounting': $("#shortenContenttableCounting").html(),
                        }];

                        toastr['success']("Hủy công việc thành công");
                        socket.emit('CHEReload', JSON.stringify(deleteData));   

                        return;
                    },
                    error: function(err){
                        console.log(err);
                        return;
                    }
                });
            }
        });

        function substractTwoDateYMD(d1, d2){
            var dateNumeric = 0,
                year1   = parseInt(d1.substring(0,4)),
                year2   = parseInt(d2.substring(0,4)),
                month1  = parseInt(d1.substring(5,7)),
                month2  = parseInt(d2.substring(5,7)),
                day1    = parseInt(d1.substring(8,10)),
                day2    = parseInt(d2.substring(8, 10));

            if (year1 != year2){
                for (k1 = month1; k1 <= 12; k1++){
                    switch(k1){
                        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                            dateNumeric += 31;
                            break;
                        case 2:
                            if ((year1%400==0) || (year1%4==0 && year1%100!=0)){
                                dateNumeric += 29;
                            }
                            else{
                                dateNumeric += 28;
                            }
                            break;
                        default:
                            dateNumeric += 30;
                            break;
                    }
                }

                for (k1 = year1 + 1; k1 < year2; k1++){
                    for (k2 = 1; k2 <= 12; k2++){
                        switch(k2){
                            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                                dateNumeric += 31;
                                break;
                            case 2:
                                if ((k1%400==0) || (k1%4==0 && k1%100!=0)){
                                    dateNumeric += 29;
                                }
                                else{
                                    dateNumeric += 28;
                                }
                                break;
                            default:
                                dateNumeric += 30;
                                break;
                        }
                    }
                }

                for (k1 = 1; k1 <= month2; k1++){
                    switch(k1){
                        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                            dateNumeric += 31;
                            break;
                        case 2:
                            if ((year2%400==0) || (year2%4==0 && year2%100!=0)){
                                dateNumeric += 29;
                            }
                            else{
                                dateNumeric += 28;
                            }
                            break;
                        default:
                            dateNumeric += 30;
                            break;
                    }
                }    
            }
            else{
                if (month1 < month2){
                    dateNumeric += (31 - day1 + 1);
                    for (k1 = month1 + 1; k1 <= month2 - 1; k1++){
                        switch(k1){
                            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                                dateNumeric += 31;
                                break;
                            case 2:
                                if ((year1%400==0) || (year1%4==0 && year1%100!=0)){
                                    dateNumeric += 29;
                                }
                                else{
                                    dateNumeric += 28;
                                }
                                break;
                            default:
                                dateNumeric += 30;
                                break;
                        }
                    }
                    dateNumeric += day2;
                }
                else{
                    if (month1 == month2){
                        dateNumeric += (day2 - day1 + 1);
                    }

                }
            }

            return dateNumeric;
        }

        function getDateTimeFormatString(d){
            year    = d.getFullYear();
            month   = d.getMonth() + 1;
            day     = d.getDate();
            hour    = d.getHours(),
            min     = d.getMinutes(),
            sec     = d.getSeconds(),
            fillMonth = '',
            fillDay   = '',
            fillHour  = '',
            fillMin   = '',
            fillSec   = '';
            
            if (month < 10)
                fillMonth = '0';
            if (day < 10)
                fillDay = '0';
            if (hour < 10)
                fillHour = '0';
            if (min < 10)
                fillMin = '0';
            if (sec < 10)
                fillSec = '0';

            return (year + '-' + fillMonth + month + '-' + fillDay + day + " " + fillHour + hour + ':' + fillMin + min + ':' + fillSec + sec);
        }

        socket.on('TransferFromQuayJob', function(data){
            /* Update CHE List */
            $("#shortenContenttable").blockUI();
            $("#contenttable").blockUI();

            var formData = {
                'action': 'view',
                'child_action': 'updateCHEList',
            };

            $.ajax({
                url: "<?=site_url(md5('che'));?>",
                dataType: 'json',
                data: formData,
                type: 'POST',
                success: function (data) {
                    if(data.deny) {
                        toastr["error"](data.deny);
                        return;
                    }

                    CHEList = data.list;
                    $('#shortenContenttable').unblock();
                    $('#contenttable').unblock();

                    var src = '';
                        hiddenList = [],
                        IsGOTransferedNumeric = 0;;

                    for (i = 0; i < CHEList.length; i++){
                        if (CHEList[i]['IsGOTransfered'] == 0){          
                            var Block = CHEList[i]['Block'],
                                Bay   = CHEList[i]['Bay'],
                                Row   = CHEList[i]['Row'],
                                Tier  = CHEList[i]['Tier'],
                                VINNo = CHEList[i]['VINNo'],
                                JobTypeID = CHEList[i]['JobTypeID'],
                                currentDate = getDateTimeFormatString(new Date()),
                                date = CHEList[i]['StartDate'],
                                dateNumeric = substractTwoDateYMD(date, currentDate),
                                id = 'shorten_' + i;

                            src +=  '<tr>';
                                src += '<td class="cellSize cellCanBeChoosen" id="' + id +'" style="text-align: center; font-size: 10px;">'
                                    src += '<p style="background-color: '

                                    switch(JobTypeID){
                                        case "DF":
                                            src += '#207b99';
                                            break;
                                        case "GO":
                                            src += '#f39C12';
                                            break;
                                        default:
                                            break;
                                    }

                                    src += '; height: 20px; width: 100%; margin: 0; text-align: center; color: white" id="VIN_' + Row + '_' + Bay + '">' + VINNo + '</p>';
                                    src += '<div class="col-12">';
                                        src += '<div class="row">';
                                            src += '<div class="col-6">'
                                                src += '<div class="row" style="padding-left: 5px;">HÃNG XE</div>';
                                                src += '<div class="row" style="padding-left: 5px;">';
                                                    src += Block;
                                                    src += '-';
                                                    if (Bay < 10){
                                                        src += '0';
                                                    }
                                                    src += Bay

                                                    src += '-';
                                                    if (Row < 10){
                                                        src += '0';
                                                    }
                                                    src += Row;
                                                    src += '-';
                                                    src += Tier;
                                                src += '</div>';
                                            src +='</div>';                        
                                            src += '<div class="col-3">';
                                                src += '<div class="row">MÀU</div>';
                                            src +='</div>';
                                            src += '<div class="col-3">';
                                                src += '<div class="row">';
                                                src += dateNumeric;
                                                src += ' ngày </div>';
                                            src +='</div>';
                                        src += '</div>';
                                    src += '</div>';
                                src +='</td>';
                            src += '</tr>';

                            if (CHEList[i]['JobStatus'] == 'HT'){
                                hiddenList.push(id);

                                var finishSrc   = '',
                                    finishID    = '#' + Row + "_" + Bay;

                                finishSrc += '<p style="background-color: #207b99; height: 20px; width: 100%; margin: 0; text-align: center; color: white" id="VIN_' + Row + '_' + Bay + '">' + VINNo + '</p>';
                                finishSrc += '<div class="col-12">';
                                    finishSrc += '<div class="row">';
                                        finishSrc += '<div class="col-6">'
                                            finishSrc += '<div class="row" style="padding-left: 5px;">HÃNG XE</div>';
                                            finishSrc += '<div class="row" style="padding-left: 5px;">';
                                                finishSrc += Block;
                                                finishSrc += '-';
                                                if (Bay < 10){
                                                    finishSrc += '0';
                                                }
                                                finishSrc += Bay

                                                finishSrc += '-';
                                                if (Row < 10){
                                                    finishSrc += '0';
                                                }
                                                finishSrc += Row;
                                                finishSrc += '-';
                                                finishSrc += Tier;
                                            finishSrc += '</div>';
                                        finishSrc +='</div>';                        
                                        finishSrc += '<div class="col-3">';
                                            finishSrc += '<div class="row">MÀU</div>';
                                        finishSrc +='</div>';
                                        finishSrc += '<div class="col-3">';
                                            finishSrc += '<div class="row">';
                                            finishSrc += dateNumeric;
                                            finishSrc += ' ngày </div>';
                                        finishSrc +='</div>';
                                    finishSrc += '</div>';
                                finishSrc += '</div>';

                                $(finishID).empty();
                                $(finishID).append(finishSrc);
                            }
                        }
                        else{
                            IsGOTransferedNumeric++;
                        }
                    }

                    $("#shortenContenttableContent").empty();
                    $("#shortenContenttableContent").append(src);


                    for (k = 0; k < hiddenList.length; k++){
                        $('#' + hiddenList[k]).hide();
                    }
                    posInUsed += hiddenList.length;

                    var tempNumeric = CHEList.length - hiddenList.length - IsGOTransferedNumeric;
                    shortenCapacity = tempNumeric;
                    $("#shortenContenttableCounting").html('<i>Số lượng: ' + tempNumeric + '</i>');
                    $("#CapacityInUsed").html('<b>ĐÃ SỬ DỤNG <br>' + posInUsed +'/' + capacity + '</b>');
                },
                error: function(err){
                    console.log(err);
                    return;
                },
            });         
        });

        socket.on('CHEReload', function(data){
            /* Update CHE List */
            data = JSON.parse(data);

            $("#shortenContenttable").blockUI();
            $("#contenttable").blockUI();

            if (data[0]['type'] != 'CHEReload'){
                $(data[0]['data']).empty();
            }

            if (data[0]['type'] != 'transform'){ // != Đảo chuyển
                $("#CapacityInUsed").html(data[0]['CapacityInUsed']);
                $("#shortenContenttableCounting").html(data[0]['shortenContenttableCounting']);
            }

            var formData = {
                'action': 'view',
                'child_action': 'updateCHEList',
            };

            $.ajax({
                url: "<?=site_url(md5('che'));?>",
                dataType: 'json',
                data: formData,
                type: 'POST',
                success: function (data) {
                    if(data.deny) {
                        toastr["error"](data.deny);
                        return;
                    }

                    CHEList = data.list;
                    $('#shortenContenttable').unblock();
                    $('#contenttable').unblock();

                    var src = '';
                        hiddenList = [];

                    for (i = 0; i < CHEList.length; i++){
                        if (CHEList[i]['IsGOTransfered'] == 0){          
                            var Block = CHEList[i]['Block'],
                                Bay   = CHEList[i]['Bay'],
                                Row   = CHEList[i]['Row'],
                                Tier  = CHEList[i]['Tier'],
                                VINNo = CHEList[i]['VINNo'],
                                JobTypeID = CHEList[i]['JobTypeID'],
                                currentDate = getDateTimeFormatString(new Date()),
                                date = CHEList[i]['StartDate'],
                                dateNumeric = substractTwoDateYMD(date, currentDate),
                                id = 'shorten_' + i;

                            src +=  '<tr>';
                                src += '<td class="cellSize cellCanBeChoosen" id="' + id +'" style="text-align: center; font-size: 10px;">'
                                    src += '<p style="background-color: '

                                    switch(JobTypeID){
                                        case "DF":
                                            src += '#207b99';
                                            break;
                                        case "GO":
                                            src += '#f39C12';
                                            break;
                                        default:
                                            break;
                                    }

                                    src += '; height: 20px; width: 100%; margin: 0; text-align: center; color: white" id="VIN_' + Row + '_' + Bay + '">' + VINNo + '</p>';
                                    src += '<div class="col-12">';
                                        src += '<div class="row">';
                                            src += '<div class="col-6">'
                                                src += '<div class="row" style="padding-left: 5px;">HÃNG XE</div>';
                                                src += '<div class="row" style="padding-left: 5px;">';
                                                    src += Block;
                                                    src += '-';
                                                    if (Bay < 10){
                                                        src += '0';
                                                    }
                                                    src += Bay

                                                    src += '-';
                                                    if (Row < 10){
                                                        src += '0';
                                                    }
                                                    src += Row;
                                                    src += '-';
                                                    src += Tier;
                                                src += '</div>';
                                            src +='</div>';                        
                                            src += '<div class="col-3">';
                                                src += '<div class="row">MÀU</div>';
                                            src +='</div>';
                                            src += '<div class="col-3">';
                                                src += '<div class="row">';
                                                src += dateNumeric;
                                                src += ' ngày </div>';
                                            src +='</div>';
                                        src += '</div>';
                                    src += '</div>';
                                src +='</td>';
                            src += '</tr>';    

                            if (CHEList[i]['JobStatus'] == 'HT'){
                                hiddenList.push(id);

                                var finishSrc   = '',
                                    finishID    = '#' + Row + "_" + Bay;

                                finishSrc += '<p style="background-color: #207b99; height: 20px; width: 100%; margin: 0; text-align: center; color: white" id="VIN_' + Row + '_' + Bay + '">' + VINNo + '</p>';
                                finishSrc += '<div class="col-12">';
                                    finishSrc += '<div class="row">';
                                        finishSrc += '<div class="col-6">'
                                            finishSrc += '<div class="row" style="padding-left: 5px;">HÃNG XE</div>';
                                            finishSrc += '<div class="row" style="padding-left: 5px;">';
                                                finishSrc += Block;
                                                finishSrc += '-';
                                                if (Bay < 10){
                                                    finishSrc += '0';
                                                }
                                                finishSrc += Bay

                                                finishSrc += '-';
                                                if (Row < 10){
                                                    finishSrc += '0';
                                                }
                                                finishSrc += Row;
                                                finishSrc += '-';
                                                finishSrc += Tier;
                                            finishSrc += '</div>';
                                        finishSrc +='</div>';                        
                                        finishSrc += '<div class="col-3">';
                                            finishSrc += '<div class="row">MÀU</div>';
                                        finishSrc +='</div>';
                                        finishSrc += '<div class="col-3">';
                                            finishSrc += '<div class="row">';
                                            finishSrc += dateNumeric;
                                            finishSrc += ' ngày </div>';
                                        finishSrc +='</div>';
                                    finishSrc += '</div>';
                                finishSrc += '</div>';

                                $(finishID).empty();
                                $(finishID).append(finishSrc);
                            }
                        }
                    }

                    $("#shortenContenttableContent").empty();
                    $("#shortenContenttableContent").append(src);


                    for (k = 0; k < hiddenList.length; k++){
                        $('#' + hiddenList[k]).hide();
                    }
                },
                error: function(err){
                    console.log(err);
                    return;
                },
            });  
        });
    });
</script>
<!--
<script src="<?=base_url('assets/js/demo1.js');?>"></script>
<script src="<?=base_url('assets/js/polyfills.js');?>"></script>
<script src="<?=base_url('assets/js/modernizr-2.6.2.min.js');?>"></script>
-->
<script src="<?=base_url('assets/vendors/loaders/blockui.min.js');?>"></script>
<script src="<?=base_url('assets/vendors/loaders/progressbar.min.js');?>"></script>