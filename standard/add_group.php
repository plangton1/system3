<?php
if (isset($_POST) && !empty($_POST)) {
    $group_id = $_POST['group_id'];
    $group_name = $_POST['group_name'];
}
$sql = "SELECT * FROM group_tb ";
$query = sqlsrv_query($conn, $sql);
?>
<form method="post" action="">
    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">ข้อมูลกลุ่มผลิตภัณฑ์</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="container  tab-content font">
            <div id="home" class="container-fluid tab-pane active m-2">
                <a href="?page=add_insert_group" class="btn btn-success bt mg-t-bt b-add">เพิ่มข้อมูล</a>
                <table class="table table-bordered table-responsive-xl  pt-5" style="width: 100%;" id="tableall">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">หมายเลขdกลุ่ม</th>
                            <th scope="col" class="text-center">ชือกลุ่ม</th>
                            <th scope="col" class="text-center">การจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { ?>
                            <tr class="text-center">
                                <td class="align-middle"><?= $data['group_id'] ?></td>
                                <td class="align-middle"><?= $data['group_name'] ?></td>
                                <td class="align-middle">
                                    <div class="mb-4">
                                        <a href="?page=<?= $_GET['page'] ?>&function=update&group_id=<?= $data['group_id'] ?>" class="btn btn-sm btn-warning">แก้ไข</a>

                                        <a href="?page=<?= $_GET['page'] ?>&function=delete&group_id=<?= $data['group_id'] ?>" onclick="return confirm('คุณต้องการลบประเภทนี้ : <?= $data['group_name'] ?> หรือไม่ ??')" class="btn btn-sm btn-danger">ลบ</a>
                                </td>

            </div>
            </tr>
        <?php } ?>
        </tbody>
        </table>
        <a href="?page=add_insert_group" class="btn btn-success bt mg-t-bt b-add">เพิ่มข้อมูล</a>
        </div>
        </div>
        </div>
</form>
</section>