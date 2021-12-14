<!--
<?php
$sql = "SELECT * FROM standard_tb WHERE standard_id = " . $_REQUEST["standard_id"];
$query = sqlsrv_query($conn, $sql);
$xx = sqlsrv_fetch_array($query);

?>
<section class="items-grid section custom-padding">
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">แก้ไขเอกสารที่ยื่นขอ มอก.</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                    <form method="post">
                        <script>
                            function add_row() {
                                var table = document.getElementById("myTable");
                                count_rows = table.getElementsByTagName("tr").length;

                                var row = table.insertRow(count_rows);
                                var cell1 = row.insertCell(0);
                                var cell2 = row.insertCell(1);
                                var cell3 = row.insertCell(2);
                                var cell4 = row.insertCell(3);
                                var cell5 = row.insertCell(4);
                                var cell6 = row.insertCell(5);
                                var cell7 = row.insertCell(6);
                                var cell8 = row.insertCell(7);
                                var cell9 = row.insertCell(8);
                                var cell10 = row.insertCell(9);
                                var cell11 = row.insertCell(10);
                                var cell12 = row.insertCell(11);
                                <?php $i = 2; ?>

                                cell1.innerHTML = "<p " + count_rows + " '><?= $i++ ?></p>";
                                cell2.innerHTML = "<input type='text' name='standard_meet'" + count_rows + " value>";
                                cell3.innerHTML = "<input type='text' name='standard_number'" + count_rows + " value>";
                                cell4.innerHTML = "<input type='text' name='txtB'" + count_rows + " value>";
                                cell5.innerHTML = "<input type='text' name='txtB'" + count_rows + " value>";
                                cell6.innerHTML = "<textarea type='text' name='standard_detail'" + count_rows + " value></textarea>";
                                cell7.innerHTML = "<input type='text' name='txtB'" + count_rows + " value>";
                                cell8.innerHTML = "<input type='text' name='standard_mandatory'" + count_rows + " value>";
                                cell9.innerHTML = "<input type='text' name='txtB'" + count_rows + " value>";
                                cell10.innerHTML = "<input type='text' name='standard_tracking'" + count_rows + " value>";
                                cell11.innerHTML = "<input type='text' name='standard_note'" + count_rows + " value>";
                                cell12.innerHTML = "<input type='file' name='txtB'" + count_rows + " value>";
                                //$i++;
                            }


                            function del_row() {
                                var table = document.getElementById("myTable");
                                count_rows = table.getElementsByTagName("tr").length;
                                document.getElementById("myTable").deleteRow(count_rows - 1);
                            }
                        </script>
                </div>
            </div>
        </div>
    </div>

    <div class="container card-regis">
        <div class="container  font">
            <form method="post" action="status_save.php">
                <div class="mb-3">
                    <label> วาระจากที่ประชุม สมอ. </label>
                    <input type="text" name="standard_meet" class="form-control" autocomplete="off" value="<?php echo $xx["standard_meet"] ?>">
                </div>
                <div class="f-red mb-3">
                    <label> เลขที่ มอก.* </label>
                    <input type="text" name="standard_number" class="form-control" autocomplete="off" required value="<?php echo $xx["standard_number"] ?>">
                </div>

                <div class="f-red mb-3">
                    <label> ประเภทผลิตภัณฑ์* </label> 
                    <div class="grid">
                        <div><input type="checkbox" id="vehicle2" name="vehicle2" value=""> <label for="vehicle2">ประเภทผลิตภัณฑ์ 1</label></div>
                        <div><input type="checkbox" id="vehicle2" name="vehicle2" value=""> <label for="vehicle2">ประเภทผลิตภัณฑ์ 2</label></div>
                        <div><input type="checkbox" id="vehicle2" name="vehicle2" value=""> <label for="vehicle2">ประเภทผลิตภัณฑ์ 3</label></div>
                        <div><input type="checkbox" id="vehicle2" name="vehicle2" value=""> <label for="vehicle2">ประเภทผลิตภัณฑ์ 4</label></div>
                        <div><input type="checkbox" id="vehicle2" name="vehicle2" value=""> <label for="vehicle2">ประเภทผลิตภัณฑ์ 5</label></div>
                        <div><input type="checkbox" id="vehicle2" name="vehicle2" value=""> <label for="vehicle2">ประเภทผลิตภัณฑ์ 6</label></div>
                        <div><input type="checkbox" id="vehicle2" name="vehicle2" value=""> <label for="vehicle2">ประเภทผลิตภัณฑ์ 7</label></div>
                        <div><input type="checkbox" id="vehicle2" name="vehicle2" value=""> <label for="vehicle2">ประเภทผลิตภัณฑ์ 8</label></div>
                    </div>

                </div>


                <div class="mb-3">
                    <div class="input-group">
                        <label class="input-group-text"> กลุ่มผลิตภัณฑ์ </label>

                        <a id="btndelete3" class="input_add btn btn-outline-success  ">+</a>
                        <a id="btnadd3" class="input_del btn btn-outline-danger  ">-</a>
                    </div>
                    <input type="text" name="group_name[]" class="form-control group_name" id="group_name" value="<?php echo $xx["group_name"] ?>">
                </div>
                <div class="mb-3">
                    <label> ชื่อมาตรฐาน </label>
                    <input type="text" name="standard_detail" class="form-control" autocomplete="off" value="<?php echo $xx["standard_detail"] ?>">
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <label class="input-group-text"> หน่วยงานที่ทดสอบได้ </label>

                        <a id="btndelete2" class="input_add btn btn-outline-success  ">+</a>
                        <a id="btnadd2" class="input_del btn btn-outline-danger  ">-</a>
                    </div>
                    <input type="text" name="agency_name[]" class="form-control agency_name" id="agency_name" value="<?php echo $xx["agency_name"] ?>">
                </div>
                <div class="mb-3">
                    <label> มาตรฐานบังคับ </label>
                    <input type="text" name="standard_mandatory" class="form-control" autocomplete="off" value="<?php echo $xx["standard_mandatory"] ?>">
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <label class="input-group-text"> หน่วยงานที่ขอ </label>

                        <a id="btndelete1" class="input_add btn btn-outline-success  ">+</a>
                        <a id="btnadd1" class="input_del btn btn-outline-danger  ">-</a>
                    </div>

                    <input type="text" name="department_name[]" class="form-control department_name" id="department_name" value="<?php echo $xx["department_name"] ?>">
                </div>
                <div class="mb-3">
                    <label> หมายเหตุเลข tracking </label>
                    <input type="text" name="standard_tacking" class="form-control" autocomplete="off" value="<?php echo $xx["standard_tacking"] ?>">
                </div>

                <div class="mb-3">
                    <label> หมายเหตุ </label>
                    <input type="text" name="standard_note" class="form-control" autocomplete="off" value="<?php echo $xx["standard_note"] ?>">
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <label class="input-group-text"> ไฟล์แนบ </label>

                        <a id="btndelete4" class="input_add btn btn-outline-success  ">+</a>
                        <a id="btnadd4" class="input_del btn btn-outline-danger  ">-</a>
                    </div>
                    <input type="file" id="filename" name="filename" class="form-control filename" value="<?php echo $xx["filename"] ?>">

                </div>

        </div>
        <hr>
        <!-- <div class="mb-3">
                        <div class="input-group ">
                            <label class="input-group-text">1. วัตถุประสงค์ </label>
                            <a id="btndeleteob" class="input_add btn btn-outline-info  ">+</a>
                            <a id="btnaddob" class="input_del btn btn-outline-danger  ">-</a>
                        </div>
                         <input type="text" name="QP_ob_details[]" class="form-control QP_ob_details" id="QP_ob_details"> 
                    </div> -->


        <center>
            <div class="bt">
                <!-- <input type="checkbox" name="chkColor1" value="Red">กรุณายอมรับและเงื่อนไขสำหรับการสมัครสมาชิก -->

                <!-- <button type="submit" class="btn btn-danger">รับรหัส otp</button> -->
                <button type="submit" class="btn btn-primary bt mg-t-bt">บันทึก</button>
            </div>
        </center>
        </form>
    </div>
    </div>
    <!-- <a href=""><img src="https://www2.tistr.or.th/tistrservices/training/images/logo2.png" class="logo"></a> -->


</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script>
    $(document).ready(function() {
        var ob = 0;

        $("#btnadd1").click(function() { //ตรวจสอบการคลิกปุ่ม
            var len = $(".department_name").length //นับจำนวนที่มีการประการ class='QP_ob_details'
            if (len != 1) { //ตรวจว่าไม่เท่ากับ1แถวไหม
                ob--; //ลดค่าตัวแปรลง1
                $(".department_name:last").remove(); //ลบคลาส  อันสุดท้าย
            }
        });

        $("#btndelete1").click(function() { //ตรวจสอบการคลิกปุ่ม
            ob++; //เพิ่มค่าค่าตัวแปรลง1
            $(".department_name:last").after('<input type="text" name="department_name[]" class="form-control department_name" id="department_name">'); //เพิมช่องกรอก หลังจาก คลาส fname อันสุดท้าย
        });

        $("#btnadd2").click(function() { //ตรวจสอบการคลิกปุ่ม
            var len = $(".agency_name").length //นับจำนวนที่มีการประการ class='QP_ob_details'
            if (len != 1) { //ตรวจว่าไม่เท่ากับ1แถวไหม
                ob--; //ลดค่าตัวแปรลง1
                $(".agency_name:last").remove(); //ลบคลาส  อันสุดท้าย
            }
        });

        $("#btndelete2").click(function() { //ตรวจสอบการคลิกปุ่ม
            ob++; //เพิ่มค่าค่าตัวแปรลง1
            $(".agency_name:last").after('<input type="text" name="agency_name[]" class="form-control agency_name" id="agency_name">'); //เพิมช่องกรอก หลังจาก คลาส fname อันสุดท้าย
        });

        $("#btnadd3").click(function() { //ตรวจสอบการคลิกปุ่ม
            var len = $(".group_name").length //นับจำนวนที่มีการประการ class='QP_ob_details'
            if (len != 1) { //ตรวจว่าไม่เท่ากับ1แถวไหม
                ob--; //ลดค่าตัวแปรลง1
                $(".group_name:last").remove(); //ลบคลาส  อันสุดท้าย
            }
        });

        $("#btndelete3").click(function() { //ตรวจสอบการคลิกปุ่ม
            ob++; //เพิ่มค่าค่าตัวแปรลง1
            $(".group_name:last").after('<input type="text" name="group_name[]" class="form-control group_name" id="group_name">'); //เพิมช่องกรอก หลังจาก คลาส fname อันสุดท้าย
        });

        $("#btnadd4").click(function() { //ตรวจสอบการคลิกปุ่ม
            var len = $(".filename").length //นับจำนวนที่มีการประการ class='QP_ob_details'
            if (len != 1) { //ตรวจว่าไม่เท่ากับ1แถวไหม
                ob--; //ลดค่าตัวแปรลง1
                $(".filename:last").remove(); //ลบคลาส  อันสุดท้าย
            }
        });

        $("#btndelete4").click(function() { //ตรวจสอบการคลิกปุ่ม
            ob++; //เพิ่มค่าค่าตัวแปรลง1
            $(".filename:last").after('<input type="file" id="filename" name="filename" class="form-control filename">'); //เพิมช่องกรอก หลังจาก คลาส fname อันสุดท้าย
        });
    });
</script>-->

<?php
$sql = "SELECT * FROM standard_tb WHERE standard_id = " . $_REQUEST["standard_id"];
$query = sqlsrv_query($conn, $sql);
$xx = sqlsrv_fetch_array($query);

?>
<section class="items-grid section custom-padding">
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">แก้ไขเอกสารที่ยื่นขอ มอก.</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                    <div class="mb-3">
                    <label> วาระจากที่ประชุม สมอ. </label>
                    <input type="text" name="standard_meet" class="form-control" autocomplete="off" value="<?php echo $xx["standard_meet"] ?>">
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">

                        <form action="" method="POST">
                         
                        <div class="form-group mb-2">
                    <label for="">วาระจากที่ประชุม สมอ. </label>
                    <input type="text" name="standard_meet" class="form-control" value="<?php echo $xx["standard_meet"] ?>">
                </div>

                <div class="form-group mb-2 f-red">
                    <label for="">เลขที่ มอก.*</label>
                    <input type="text" name="standard_number" class="form-control" required value="<?php echo $xx["standard_number"] ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="">ชื่อมาตรฐาน</label>
                    <input type="text" name="standard_detail" class="form-control" value="<?php echo $xx["standard_detail"] ?>">
                </div>

                <div class="form-group mb-2">
                            <div class="form-group mb-2">
                                <label for="">มาตรฐานบังคับ</label>
                                <input type="text" name="standard_mandatory" class="form-control" value="<?php echo $xx["standard_mandatory"] ?>">
                            </div>
                </div>

                <div class="form-group mb-2">
                    <label for="">หมายเลข tracking</label>
                    <input type="text" name="standard_tacking" class="form-control" value="<?php echo $xx["standard_tacking"] ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="">หมายเหตุ</label>
                    <input type="text" name="standard_note" class="form-control" value="<?php echo $xx["standard_note"] ?>">
                </div>



                <div class="form-group mb-2">
                    <label for="">ไฟล์แนบ</label>
                    <input type="file" name="file" class="form-control" value="<?php echo $xx["file"] ?>">
                </div>
                                    
                <!-- หลายฟอร์ม -->
                <a href="javascript:void(0)" class="add-more-form float-end btn btn-success">เพิ่มกลุ่มผลิตภัณฑ์</a>
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">กลุ่มผลิตภัณฑ์</label>
                                            <input type="text" name="group_name[]" class="form-control" required placeholder="Enter Name" value="<?php echo $xx["group_name"] ?>">
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="paste-new-forms"></div>
                <!--  -->

                  <!-- หลายฟอร์ม -->
                  <a href="javascript:void(0)" class="add-more-form1 float-end btn btn-success">เพิ่มหน่วยงานที่สามาถทดสอบได้</a>
                            <div class="main-form1 mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">หน่วยงานที่สามารถทดสอบได้</label>
                                            <input type="text" name="agency_name[]" class="form-control" required placeholder="Enter Name" value="<?php echo $xx["agency_name"] ?>">
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>

                            <div class="paste-new-forms1"></div>
                  <!--  -->
                            <button type="submit" name="save_multiple_data" class="btn btn-primary">บันทึกข้อมูล</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">กลุ่มผลิตภัณฑ์</label>\
                                            <input type="text" name="group_name[]" class="form-control" required placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });

        $(document).ready(function () {

            $(document).on('click', '.remove-btn1', function () {
                $(this).closest('.main-form1').remove();
            });
            
            $(document).on('click', '.add-more-form1', function () {
                $('.paste-new-forms1').append('<div class="main-form1 mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">หน่วยงานที่สามารถทดสอบได้</label>\
                                            <input type="text" name="agency_name[]" class="form-control" required placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn1 btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>
        <hr>
        <!-- <div class="mb-3">
                        <div class="input-group ">
                            <label class="input-group-text">1. วัตถุประสงค์ </label>
                            <a id="btndeleteob" class="input_add btn btn-outline-info  ">+</a>
                            <a id="btnaddob" class="input_del btn btn-outline-danger  ">-</a>
                        </div>
                         <input type="text" name="QP_ob_details[]" class="form-control QP_ob_details" id="QP_ob_details"> 
                    </div> -->


        <center>
            <div class="bt">
                <!-- <input type="checkbox" name="chkColor1" value="Red">กรุณายอมรับและเงื่อนไขสำหรับการสมัครสมาชิก -->

                <!-- <button type="submit" class="btn btn-danger">รับรหัส otp</button> -->
                <button type="submit" class="btn btn-primary bt mg-t-bt">บันทึก</button>
            </div>
        </center>
        </form>
    </div>
    </div>
    <!-- <a href=""><img src="https://www2.tistr.or.th/tistrservices/training/images/logo2.png" class="logo"></a> -->


</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script>
    $(document).ready(function() {
        var ob = 0;

        $("#btnadd1").click(function() { //ตรวจสอบการคลิกปุ่ม
            var len = $(".department_name").length //นับจำนวนที่มีการประการ class='QP_ob_details'
            if (len != 1) { //ตรวจว่าไม่เท่ากับ1แถวไหม
                ob--; //ลดค่าตัวแปรลง1
                $(".department_name:last").remove(); //ลบคลาส  อันสุดท้าย
            }
        });

        $("#btndelete1").click(function() { //ตรวจสอบการคลิกปุ่ม
            ob++; //เพิ่มค่าค่าตัวแปรลง1
            $(".department_name:last").after('<input type="text" name="department_name[]" class="form-control department_name" id="department_name">'); //เพิมช่องกรอก หลังจาก คลาส fname อันสุดท้าย
        });

        $("#btnadd2").click(function() { //ตรวจสอบการคลิกปุ่ม
            var len = $(".agency_name").length //นับจำนวนที่มีการประการ class='QP_ob_details'
            if (len != 1) { //ตรวจว่าไม่เท่ากับ1แถวไหม
                ob--; //ลดค่าตัวแปรลง1
                $(".agency_name:last").remove(); //ลบคลาส  อันสุดท้าย
            }
        });

        $("#btndelete2").click(function() { //ตรวจสอบการคลิกปุ่ม
            ob++; //เพิ่มค่าค่าตัวแปรลง1
            $(".agency_name:last").after('<input type="text" name="agency_name[]" class="form-control agency_name" id="agency_name">'); //เพิมช่องกรอก หลังจาก คลาส fname อันสุดท้าย
        });

        $("#btnadd3").click(function() { //ตรวจสอบการคลิกปุ่ม
            var len = $(".group_name").length //นับจำนวนที่มีการประการ class='QP_ob_details'
            if (len != 1) { //ตรวจว่าไม่เท่ากับ1แถวไหม
                ob--; //ลดค่าตัวแปรลง1
                $(".group_name:last").remove(); //ลบคลาส  อันสุดท้าย
            }
        });

        $("#btndelete3").click(function() { //ตรวจสอบการคลิกปุ่ม
            ob++; //เพิ่มค่าค่าตัวแปรลง1
            $(".group_name:last").after('<input type="text" name="group_name[]" class="form-control group_name" id="group_name">'); //เพิมช่องกรอก หลังจาก คลาส fname อันสุดท้าย
        });

        $("#btnadd4").click(function() { //ตรวจสอบการคลิกปุ่ม
            var len = $(".filename").length //นับจำนวนที่มีการประการ class='QP_ob_details'
            if (len != 1) { //ตรวจว่าไม่เท่ากับ1แถวไหม
                ob--; //ลดค่าตัวแปรลง1
                $(".filename:last").remove(); //ลบคลาส  อันสุดท้าย
            }
        });

        $("#btndelete4").click(function() { //ตรวจสอบการคลิกปุ่ม
            ob++; //เพิ่มค่าค่าตัวแปรลง1
            $(".filename:last").after('<input type="file" id="filename" name="filename" class="form-control filename">'); //เพิมช่องกรอก หลังจาก คลาส fname อันสุดท้าย
        });
    });
</script>