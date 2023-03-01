<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/webisme_db.php');
session_start();
error_reporting(0);
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}

//add service
if (isset($_POST['add_service'])) {
    $img_cover = $_FILES['img_cover'];
    $content = $_POST['content'];
    $status = "on";

    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img_cover['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "uploads/upload_service/" . $fileNew1;

    try {
        if (in_array($fileActExt1, $allow)) {
            if ($img_cover['size'] > 0 && $img_cover['error'] == 0) {
                if (move_uploaded_file($img_cover['tmp_name'], $filePath1)) {
                    $add_ser = $conn->prepare("INSERT INTO service(img_cover, content, status) VALUES(:img_cover, :content, :status)");
                    $add_ser->bindParam(":img_cover", $fileNew1);
                    $add_ser->bindParam(":content", $content);
                    $add_ser->bindParam(":status", $status);
                    $add_ser->execute();
                }
            }
        }

        if ($add_ser) {
            echo "<script>
                            $(document).ready(function() {
                                Swal.fire({
                                    text: 'เพิ่มข้อมูลสำเร็จ',
                                    icon: 'success',
                                    timer: 10000,
                                    showConfirmButton: false
                                });
                            })
                            </script>";
            echo "<meta http-equiv='refresh' content='1.5;url=service'>";
        } else {
            echo "<script>
                            $(document).ready(function() {
                                Swal.fire({
                                    text: 'มีบางอย่างผิดพลาด!!!',
                                    icon: 'error',
                                    timer: 10000,
                                    showConfirmButton: false
                                });
                            })
                            </script>";
            echo "<meta http-equiv='refresh' content='1.5;url=service'>";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


//edit service 

if (isset($_GET['service_id'])) {
    $service = $_GET['service_id'];

    $stmt = $conn->prepare("SELECT * FROM service WHERE id_service = :id_service");
    $stmt->bindParam(":id_service", $service);
    $stmt->execute();
    $row_service = $stmt->fetch(PDO::FETCH_ASSOC);
}


if (isset($_POST['edit_service'])) {
    $id_service = $_POST['id_service'];
    $img_cover = $_FILES['img_cover'];
    $content = $_POST['content'];
    $status = "on";


    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img_cover['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "uploads/upload_service/" . $fileNew1;

    if (in_array($fileActExt1, $allow)) {
        if ($img_cover['size'] > 0 && $img_cover['error'] == 0) {
            if (move_uploaded_file($img_cover['tmp_name'], $filePath1)) {
                $edit_ser = $conn->prepare("UPDATE service SET img_cover = :img_cover, content = :content, status = :status WHERE id_service = :id");
                $edit_ser->bindParam(":img_cover", $fileNew1);
                $edit_ser->bindParam(":content", $content);
                $edit_ser->bindParam(":status", $status);
                $edit_ser->bindParam(":id", $id_service);
                $edit_ser->execute();

                if ($edit_ser) {
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'แก้ไขข้อมูลสำเร็จ',
                            icon: 'success',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
                    echo "<meta http-equiv='refresh' content='1.5;url=service'>";
                } else {
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            text: 'มีบางอย่างผิดพลาด!!!',
                            icon: 'error',
                            timer: 10000,
                            showConfirmButton: false
                        });
                    })
                    </script>";
                    echo "<meta http-equiv='refresh' content='1.5;url=service'>";
                }
            }
        }
    } else {
        $edit_ser = $conn->prepare("UPDATE service SET content = :content, status = :status WHERE id_service = :id");
        $edit_ser->bindParam(":content", $content);
        $edit_ser->bindParam(":status", $status);
        $edit_ser->bindParam(":id", $id_service);
        $edit_ser->execute();
    }

    if ($edit_ser) {
        echo "<script>
            $(document).ready(function() {
                Swal.fire({
                    text: 'แก้ไขข้อมูลสำเร็จ',
                    icon: 'success',
                    timer: 10000,
                    showConfirmButton: false
                });
            })
            </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=service'>";
    } else {
        echo "<script>
            $(document).ready(function() {
                Swal.fire({
                    text: 'มีบางอย่างผิดพลาด!!!',
                    icon: 'error',
                    timer: 10000,
                    showConfirmButton: false
                });
            })
            </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=service'>";
    }
}


//change status
if (isset($_POST['change-status'])) {
    $check = $_POST['check'];
    $service = $_POST['id_service'];

    $stmt = $conn->prepare("UPDATE service SET status = :status WHERE id_service =  :id_service");
    $stmt->bindParam(":status", $check);
    $stmt->bindParam(":id_service", $service);
    $stmt->execute();

    if ($stmt) {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'เปลี่ยนสถานะเสร็จสิ้น',
                icon: 'success',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=service'>";
    } else {
        echo "<script>alert('มีบางอย่างผิดพลาด!!!')</script>";
        echo "<meta http-equiv='refresh' content='1.5;url=service'>";
    }
}


//delete service all
if (isset($_POST['delete_all'])) {
    if (count((array)$_POST['ids']) > 0) {
        $all = implode(",", $_POST['ids']);

        $del_service = $conn->prepare("DELETE FROM service WHERE id_service in ($all)");
        $del_service->execute();

        if ($del_service) {
            echo "<script>
            $(document).ready(function() {
                Swal.fire({
                    text: 'ลบข้อมูลสำเร็จ',
                    icon: 'success',
                    timer: 10000,
                    showConfirmButton: false
                });
            })
            </script>";
            echo "<meta http-equiv='refresh' content='1.6;url=service'>";
        } else {
            echo "<script>alert('มีบางอย่างผิดพลาด!!!')</script>";
            echo "<meta http-equiv='refresh' content='1.5;url=service'>";
        }
    } else {
        echo "<script>
        $(document).ready(function() {
            Swal.fire({
                text: 'กรุณาเลือกรายการที่ต้องการลบ',
                icon: 'warning',
                timer: 10000,
                showConfirmButton: false
            });
        })
        </script>";
        echo "<meta http-equiv='refresh' content='1.6;url=service'>";
    }
}



$page = $_GET['page'];
$service_count = $conn->prepare("SELECT * FROM service");
$service_count->execute();
$count_service = $service_count->fetchAll();

$rows = 10;
if ($page == "") {
    $page = 1;
}

$total_data = count($count_service);
$total_page = ceil($total_data / $rows);
$start = ($page - 1) * $rows;

$service = $conn->prepare("SELECT * FROM service LIMIT $start,10");
$service->execute();
$row_service = $service->fetchAll();




// query content
$content = $conn->prepare("SELECT * FROM content");
$content->execute();
$row_content = $content->fetch(PDO::FETCH_ASSOC);

// edit content
if (isset($_POST['save_content'])) {
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $content3 = $_POST['content3'];
    $content4 = $_POST['content4'];
    $content5 = $_POST['content5'];
    $content6 = $_POST['content6'];


    $update_content = $conn->prepare("UPDATE content SET content1 = :content1, content2 = :content2, content3 = :content3, content4 = :content4, content5 = :content5, content6 = :content6");
    $update_content->bindParam(":content1", $content1);
    $update_content->bindParam(":content2", $content2);
    $update_content->bindParam(":content3", $content3);
    $update_content->bindParam(":content4", $content4);
    $update_content->bindParam(":content5", $content5);
    $update_content->bindParam(":content6", $content6);
    $update_content->execute();

    if ($update_content) {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'แก้ไขข้อมูลสำเร็จ',
                        icon: 'success',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=service'>";
    } else {
        echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        text: 'มีบางอย่างผิดพลาด',
                        icon: 'error',
                        timer: 10000,
                        showConfirmButton: false
                    });
                })
                </script>";
        echo "<meta http-equiv='refresh' content='1.5;url=service'>";
    }
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เว็บร้านค้าออนไลน์สำเร็จรูป เว็บพร้อมใช้</title>

    <link rel="stylesheet" href="assets/css/main/app.css?v<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="assets/css/shared/iconly.css">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time();  ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>

</head>

<body style="font-family: 'Kanit', sans-serif;">
    <div id="app">
        <?php include('sidebar.php'); ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>บริการ</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">บริการ</h4>
                        <script>
                            tinymce.init({
                                selector: 'textarea',
                                plugins: 'autolink  code  image  lists table   wordcount',
                                toolbar: ' blocks fontfamily fontsize code | bold italic underline strikethrough |  image table  mergetags | addcomment showcomments  | align lineheight | checklist numlist bullist indent outdent | removeformat',
                                images_upload_url: 'upload.php',
                                branding: false,
                                promotion: false,
                                height: 300
                            });
                        </script>

                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mt-4">
                                <div class="mt-2" style="display: flex; justify-content: flex-end;">
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addservice" style="background-color: #218C00; color: #FFFFFF; margin-right: 5px;">เพิ่มบริการ</button>
                                    <button type="submit" class="btn" onclick="return confirm('ต้องการลบบริการทั้งหมดใช่หรือไม่?');" name="delete_all" style="background-color: #af0910; color: #FFFFFF;">ลบทั้งหมด</button>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="table">
                                        <thead>
                                            <tr align="center">
                                                <th scope="col"><input type="checkbox" class="form-check-input checkbox-select" id="select_all"></th>
                                                <th scope="col">รูปภาพ</th>
                                                <th scope="col">เนื้อหา</th>
                                                <th scope="col">สถานะ</th>
                                                <th scope="col">จัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach (array_reverse($row_service) as $row_service) { ?>
                                                <tr align="center">
                                                    <td> <input type="checkbox" class="form-check-input checkbox checkbox-select" name="ids[]" value=<?php echo $row_service['id_service'] ?>></td>
                                                    <td width="20%"> <img width="60%" src="uploads/upload_service/<?php echo $row_service['img_cover']; ?>" alt=""></td>
                                                    <td align="center" width="35%"><?php echo $row_service['content']; ?></td>
                                                    <td> <a type="input" class="btn" <?php if ($row_service['status'] == "on") {
                                                                                            echo " style='background-color: #218C00; color: #FFF;'";
                                                                                        } else {
                                                                                            echo " style='background-color: #af0910 ;color: #FFF;'";
                                                                                        } ?> data-bs-toggle="modal" href="#status<?php echo $row_service['id_service'] ?>" id="setting"><i class="bi bi-gear"></i></a></td>
                                                    <td>
                                                        <a type="input" class="btn" data-bs-toggle="modal" href="#editservice<?php echo $row_service['id_service'] ?>" style="background-color:#ffc107; color: #FFFFFF;"><i class="bi bi-pencil-square"></i></a>
                                                        <button class="btn" onclick="return confirm('ต้องการลบบริการนี้ใช่หรือไม่?');" name="delete_all" style="background-color:#af0910; color: #FFFFFF;"><i class="bi bi-trash"></i></button>
                                                    </td>
                                                </tr>

                                                <!-- Modal Status -->
                                                <div class="modal fade" id="status<?php echo $row_service['id_service'] ?>" data-bs-backdrop="static" aria-hidden="true">
                                                    <div class="modal-dialog  modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">จัดการสถานะการมองเห็น</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-check form-switch">
                                                                    <form method="post">
                                                                        <div class="switch-box">
                                                                            <span>OFF</span>
                                                                            <input type="hidden" name="id_service" value="<?php echo $row_service['id_service']; ?>">
                                                                            <input class="form-check-input" id="switch-check" name="check" type="checkbox" <?php if ($row_service['status'] == "on") {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } else {
                                                                                                                                                                echo "";
                                                                                                                                                            } ?>>
                                                                            <span>ON</span>
                                                                        </div>
                                                                        <div class="box-btn">
                                                                            <button name="change-status" class="btn" style="background-color: #218C00; color: #fff;" type="submit">บันทึก</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Edit service  -->
                                                <div class="modal fade" id="editservice<?php echo $row_service['id_service'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">แก้ไขข้อมูลบริการ</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" enctype="multipart/form-data">
                                                                    <h6>รูปภาพ</h6>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="hidden" name="id_service" value="<?php echo $row_service['id_service']; ?>">
                                                                            <input type="file" name="img_cover" id="imgInput" class="form-control">

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div id="gallery d-flex justify-content-center align-item-center">
                                                                                <img width="50%" id="previewImg" src="uploads/upload_service/<?php echo $row_service['img_cover'] ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12 mt-2">
                                                                            <h6>เนื้อหา</Det>
                                                                            </h6>
                                                                            <textarea name="content"><?php echo $row_service['content'] ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <button class="btn" name="edit_service" type="submit" style="background-color: #218C00; color: #fff;">บันทึก</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            <?php  }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>



                                <ul class="pagination justify-content-center mt-5">
                                    <li <?php if ($page == 1) {
                                            echo "class='page-item disabled'";
                                        }  ?>>
                                        <a class="page-link" href="service?page=<?php echo $page - 1 ?>" tabindex="-1" aria-disabled="true"><span class="material-icons"></span>ก่อนหน้า</a>
                                    </li>

                                    <?php
                                    for ($i = 1; $i <= $total_page; $i++) { ?>
                                        <li <?php if ($page == $i) {
                                                echo "class='page-item active'";
                                            } ?>><a class="page-link" href="service?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                    <?php   }
                                    ?>


                                    <li <?php if ($page == $total_page) {
                                            echo "class='page-item disabled'";
                                        } ?>>
                                        <a class="page-link" href="service?page=<?php echo $page + 1 ?>">ถัดไป <span class="material-icons"></span></a>
                                    </li>
                                </ul>
                            </div>

                        </form>


                    </div>

                    <!-- Modal Add service  -->
                    <div class="modal fade" id="addservice" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">เพิ่มบริการ</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data">

                                        <h6>รูปภาพ</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="file" name="img_cover" id="imgInput_add" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <div id="gallery d-flex justify-content-center align-item-center">
                                                    <img width="60%" id="previewImg_add">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 mt-2">
                                                <h6>เนื้อหา</h6>
                                                <textarea name="content"></textarea>
                                            </div>

                                        </div>
                                        <div class="mt-3">
                                            <button class="btn" name="add_service" type="submit" style="background-color: #218C00; color: #fff;">บันทึก</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </section>


            <div class="page-heading">
                <h3>เนื้อหา</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <h4 class="card-title">เนื้อหาที่ 1</h4>
                            <textarea name="content1"><?php echo $row_content['content1'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 2</h4>
                            <textarea name="content2"><?php echo $row_content['content2'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 3</h4>
                            <textarea name="content3"><?php echo $row_content['content3'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 4</h4>
                            <textarea name="content4"><?php echo $row_content['content4'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 5</h4>
                            <textarea name="content5"><?php echo $row_content['content5'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 6</h4>
                            <textarea name="content6"><?php echo $row_content['content6'] ?></textarea>

                            <div class="mt-3">
                                <button class="btn" name="save_content" type="submit" style="background-color: #218C00; color: #fff;">บันทึก</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    tinymce.init({
                        selector: 'textarea',
                        plugins: 'autolink  code  image  lists table   wordcount',
                        toolbar: ' blocks fontfamily fontsize code | bold italic underline strikethrough |  image table  mergetags | addcomment showcomments  | align lineheight | checklist numlist bullist indent outdent | removeformat',
                        images_upload_url: 'upload.php',
                        branding: false,
                        promotion: false,
                        height: 250
                    });
                </script>
            </section>
            <?php include('footer.php'); ?>
        </div>
    </div>
    <script>
        function preview_image_add() {
            var total_file = document.getElementById("imgInput3").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#gallery_add').append("<div class='box-edit-img'>  <span class='del-edit-img'></span>  <img class='previewImg' id='edit-img' src='" + URL.createObjectURL(event.target.files[i]) + "'> </div>");
            }
        }
    </script>

    <script>
        function preview_image() {
            var total_file = document.getElementById("imgInput4").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#gallery').append("<div class='box-edit-img'>  <span class='del-edit-img'></span>  <img class='previewImg' id='edit-img' src='" + URL.createObjectURL(event.target.files[i]) + "'> </div>");
            }
        }
    </script>
    <script>
        let imgInput1 = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');
        let imgInput2 = document.getElementById('imgInput_add');
        let previewImg2 = document.getElementById('previewImg_add');

        imgInput1.onchange = evt => {
            const [file] = imgInput1.files;
            if (file) {
                previewImg.src = URL.createObjectURL(file);
            }
        }
        imgInput2.onchange = evt => {
            const [file] = imgInput2.files;
            if (file) {
                previewImg2.src = URL.createObjectURL(file);
            }
        }
    </script>

    <script>
        //for checkbox
        $(document).ready(function() {
            $('#select_all').on('click', function() {
                if (this.checked) {
                    $('.checkbox').each(function() {
                        this.checked = true;
                    })
                } else {
                    $('.checkbox').each(function() {
                        this.checked = false;
                    })
                }
            })
            $('.checkbox').on('click', function() {
                if ($('.checkbox:checked').length == $('.checkbox').length) {
                    $('#select_all').prop('checked', true);
                } else {
                    $('#select_all').prop('checked', false);
                }
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#reset2').click(function() {
                $('#imgInput').val(null);
                $('.previewImg').attr("src", "");
                $('.previewImg').addClass('none');
                $('.box-edit-img').addClass('none');
            });
            $('#reset1').click(function() {
                $('#imgInput-cover').val(null);
                $('#previewImg-cover').attr("src", "");
                // $('.previewImg').addClass('none');
                // $('.box-edit-img').addClass('none');
            });
            $('#imgout').click(function() {
                $('#imgInput').val(null);
            });

        });
    </script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>



</body>

</html>