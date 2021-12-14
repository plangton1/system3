<?php
$agency_id = (isset($_GET['agency_id'])) ? $_GET['agency_id'] : '';
$agency_name = (isset($_GET['agency_name'])) ? $_GET['agency_name'] : '';
if (isset($_POST) && !empty($_POST)) {
    $agency_id = $_POST['agency_id'];
    $agency_name = $_POST['agency_name'];
    $sql = "INSERT INTO agency_tb VALUES (?,?) ";
    $params = array($agency_id, $agency_name);
    if (sqlsrv_query($conn, $sql, $params)) {
        $alert = '<script type="text/javascript">';
        $alert .= 'alert("เพิ่มข้อมูลหน่วยงานสำเร็จ !!");';
        $alert .= 'window.location.href = "?page=add_agency";';
        $alert .= '</script>';
        echo $alert;
        exit();;
    } else {
        echo "Error: " . $sql0 . "<br>" . sqlsrv_errors($conn);
    }
    sqlsrv_close($conn);
}
?>
<form method="post" action="">
    <section class="items-grid section custom-padding">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">เพิ่มข้อมูลพื้นฐาน</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container card-regis font">
            <form method="post" action="">
                <h3 class="font">เพิ่มข้อมูลหน่วยงานที่ทดสอบได้</h3>
                <hr>
                <br>
                <div class="">
                    <div>
                        <label> หมายเลขหน่วยงาน </label>
                        <input type="text" name="agency_id" class="form-control" autocomplete="off">
                        <label> ชื่อหน่วยงานที่ทดสอบได้ </label>
                        <input type="text" name="agency_name" class="form-control" autocomplete="off">
                    </div>
                </div>
                <hr>
                <center>
                    <div class="bt">
                        <!-- <input type="checkbox" name="chkColor1" value="Red">กรุณายอมรับและเงื่อนไขสำหรับการสมัครสมาชิก -->
                        <!-- <button type="submit" class="btn btn-danger">รับรหัส otp</button> -->
                        <button type="submit" class="btn btn-info bt">เพิ่มข้อมูล</button>
                    </div>
                </center>

        </div>
    </section>
</form>