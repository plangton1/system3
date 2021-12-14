<?php include('insert_sql2.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funda Of Web IT</title>
  </head>
<body>
  <br>
  <br>
  <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">

                        <form action="" method="POST">
                         
                        <div class="form-group mb-2">
                    <label for="">วาระจากที่ประชุม สมอ. </label>
                    <input type="text" name="standard_meet" class="form-control">
                </div>

                <div class="form-group mb-2 f-red">
                    <label for="">เลขที่ มอก.*</label>
                    <input type="text" name="standard_number" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="">ชื่อมาตรฐาน</label>
                    <input type="text" name="standard_detail" class="form-control">
                </div>

                <div class="form-group mb-2">
                            <div class="form-group mb-2">
                                <label for="">มาตรฐานบังคับ</label>
                                <input type="text" name="standard_mandatory" class="form-control">
                            </div>
                </div>

                <div class="form-group mb-2">
                    <label for="">หมายเลข tracking</label>
                    <input type="text" name="standard_tacking" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="">หมายเหตุ</label>
                    <input type="text" name="standard_note" class="form-control">
                </div>



                <div class="form-group mb-2">
                    <label for="">ไฟล์แนบ</label>
                    <input type="file" name="file" class="form-control">
                </div>
                                    
                <!-- หลายฟอร์ม -->
                <a href="javascript:void(0)" class="add-more-form float-end btn btn-success">เพิ่มกลุ่มผลิตภัณฑ์</a>
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">กลุ่มผลิตภัณฑ์</label>
                                            <input type="text" name="group_name[]" class="form-control" required placeholder="กรอกกลุ่มผลิตภัณฑ์">
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
                                            <input type="text" name="agency_name[]" class="form-control" required placeholder="กรอกหน่วยงานที่ต้องการทดสอบ">
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>

                            <div class="paste-new-forms1"></div>
                  <!--  -->

                     <!-- หลายฟอร์ม -->
                     <a href="javascript:void(0)" class="add-more-form2 float-end btn btn-success">เพิ่มหน่วยงานขอ</a>
                            <div class="main-form2 mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">หน่วยงานที่ขอ</label>
                                            <input type="text" name="department_name[]" class="form-control" required placeholder="กรอกหน่วยงานที่ขอ">
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>

                            <div class="paste-new-forms2"></div>
                  <!--  -->
                            <button type="submit" name="save_multiple_data" class="btn btn-primary">บันทึกข้อมูล</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('insert_2_script.php'); ?>

</body>
</html>