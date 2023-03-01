<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once('config/webisme_db.php');
session_start();
// error_reporting(0);
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index'>";
}

// query slide text1
$slide_text1 = $conn->prepare("SELECT * FROM slide_text1");
$slide_text1->execute();
$row_slide_text1 = $slide_text1->fetch(PDO::FETCH_ASSOC);

// edit slide text1
if (isset($_POST['save_slide_text1'])) {
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $content3 = $_POST['content3'];
    $content4 = $_POST['content4'];
    $content5 = $_POST['content5'];
    $img_slide1 = $_FILES['img_slide1'];

    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img_slide1['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "uploads/upload_slide/" . $fileNew1;

    if (in_array($fileActExt1, $allow)) {
        if ($img_slide1['size'] > 0 && $img_slide1['error'] == 0) {
            if (move_uploaded_file($img_slide1['tmp_name'], $filePath1)) {
                $update_slide_text1 = $conn->prepare("UPDATE slide_text1 SET content1 = :content1, content2 = :content2, content3 = :content3, content4 = :content4, content5 = :content5, img_slide1 = :img_slide1");
                $update_slide_text1->bindParam(":content1", $content1);
                $update_slide_text1->bindParam(":content2", $content2);
                $update_slide_text1->bindParam(":content3", $content3);
                $update_slide_text1->bindParam(":content4", $content4);
                $update_slide_text1->bindParam(":content5", $content5);
                $update_slide_text1->bindParam(":img_slide1", $fileNew1);
                $update_slide_text1->execute();

                if ($update_slide_text1) {
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
                    echo "<meta http-equiv='refresh' content='1.5;url=home'>";
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
                    echo "<meta http-equiv='refresh' content='1.5;url=home'>";
                }
            }
        }
    } else {

        $update_slide_text1 = $conn->prepare("UPDATE slide_text1 SET content1 = :content1, content2 = :content2, content3 = :content3, content4 = :content4, content5 = :content5");
        $update_slide_text1->bindParam(":content1", $content1);
        $update_slide_text1->bindParam(":content2", $content2);
        $update_slide_text1->bindParam(":content3", $content3);
        $update_slide_text1->bindParam(":content4", $content4);
        $update_slide_text1->bindParam(":content5", $content5);
        $update_slide_text1->execute();


        if ($update_slide_text1) {
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
            echo "<meta http-equiv='refresh' content='1.5;url=home'>";
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
            echo "<meta http-equiv='refresh' content='1.5;url=home'>";
        }
    }
}



// query slide text2
$slide_text2 = $conn->prepare("SELECT * FROM slide_text2");
$slide_text2->execute();
$row_slide_text2 = $slide_text2->fetch(PDO::FETCH_ASSOC);

// edit slide text2
if (isset($_POST['save_slide_text2'])) {
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $content3 = $_POST['content3'];
    $content4 = $_POST['content4'];
    $img_slide2 = $_FILES['img_slide2'];

    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img_slide2['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "uploads/upload_slide/" . $fileNew1;

    if (in_array($fileActExt1, $allow)) {
        if ($img_slide2['size'] > 0 && $img_slide2['error'] == 0) {
            if (move_uploaded_file($img_slide2['tmp_name'], $filePath1)) {
                $update_slide_text2 = $conn->prepare("UPDATE slide_text2 SET content1 = :content1, content2 = :content2, content3 = :content3, content4 = :content4, img_slide2 = :img_slide2");
                $update_slide_text2->bindParam(":content1", $content1);
                $update_slide_text2->bindParam(":content2", $content2);
                $update_slide_text2->bindParam(":content3", $content3);
                $update_slide_text2->bindParam(":content4", $content4);
                $update_slide_text2->bindParam(":img_slide2", $fileNew1);
                $update_slide_text2->execute();

                if ($update_slide_text2) {
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
                    echo "<meta http-equiv='refresh' content='1.5;url=home'>";
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
                    echo "<meta http-equiv='refresh' content='1.5;url=home'>";
                }
            }
        }
    } else {

        $update_slide_text2 = $conn->prepare("UPDATE slide_text2 SET content1 = :content1, content2 = :content2, content3 = :content3, content4 = :content4");
        $update_slide_text2->bindParam(":content1", $content1);
        $update_slide_text2->bindParam(":content2", $content2);
        $update_slide_text2->bindParam(":content3", $content3);
        $update_slide_text2->bindParam(":content4", $content4);
        $update_slide_text2->execute();


        if ($update_slide_text2) {
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
            echo "<meta http-equiv='refresh' content='1.5;url=home'>";
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
            echo "<meta http-equiv='refresh' content='1.5;url=home'>";
        }
    }
}




// query slide text3
$slide_text3 = $conn->prepare("SELECT * FROM slide_text3");
$slide_text3->execute();
$row_slide_text3 = $slide_text3->fetch(PDO::FETCH_ASSOC);

// edit slide text3
if (isset($_POST['save_slide_text3'])) {
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $content3 = $_POST['content3'];
    $content4 = $_POST['content4'];
    $img_slide3 = $_FILES['img_slide3'];

    $allow = array('jpg', 'jpeg', 'png', 'webp');
    $extention1 = explode(".", $img_slide3['name']); //เเยกชื่อกับนามสกุลไฟล์
    $fileActExt1 = strtolower(end($extention1)); //แปลงนามสกุลไฟล์เป็นพิมพ์เล็ก
    $fileNew1 = rand() . "." . "webp";
    $filePath1 = "uploads/upload_slide/" . $fileNew1;

    if (in_array($fileActExt1, $allow)) {
        if ($img_slide3['size'] > 0 && $img_slide3['error'] == 0) {
            if (move_uploaded_file($img_slide3['tmp_name'], $filePath1)) {
                $update_slide_text3 = $conn->prepare("UPDATE slide_text3 SET content1 = :content1, content2 = :content2, content3 = :content3, content4 = :content4, img_slide3 = :img_slide3");
                $update_slide_text3->bindParam(":content1", $content1);
                $update_slide_text3->bindParam(":content2", $content2);
                $update_slide_text3->bindParam(":content3", $content3);
                $update_slide_text3->bindParam(":content4", $content4);
                $update_slide_text3->bindParam(":img_slide3", $fileNew1);
                $update_slide_text3->execute();

                if ($update_slide_text3) {
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
                    echo "<meta http-equiv='refresh' content='1.5;url=home'>";
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
                    echo "<meta http-equiv='refresh' content='1.5;url=home'>";
                }
            }
        }
    } else {

        $update_slide_text3 = $conn->prepare("UPDATE slide_text3 SET content1 = :content1, content2 = :content2, content3 = :content3, content4 = :content4");
        $update_slide_text3->bindParam(":content1", $content1);
        $update_slide_text3->bindParam(":content2", $content2);
        $update_slide_text3->bindParam(":content3", $content3);
        $update_slide_text3->bindParam(":content4", $content4);
        $update_slide_text3->execute();


        if ($update_slide_text3) {
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
            echo "<meta http-equiv='refresh' content='1.5;url=home'>";
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
            echo "<meta http-equiv='refresh' content='1.5;url=home'>";
        }
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
            <!-- ข้อความสไลด์ -->
            <div class="page-heading">
                <h3>เนื้อหาสไลด์ที่ 1</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <h4 class="card-title">เนื้อหาที่ 1</h4>
                            <textarea name="content1"><?php echo $row_slide_text1['content1'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 2</h4>
                            <textarea name="content2"><?php echo $row_slide_text1['content2'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 3</h4>
                            <textarea name="content3"><?php echo $row_slide_text1['content3'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 4</h4>
                            <textarea name="content4"><?php echo $row_slide_text1['content4'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 5</h4>
                            <textarea name="content5"><?php echo $row_slide_text1['content5'] ?></textarea>
                            <br>
                            <h4 class="card-title">รูปภาพสไลด์</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="<?php echo  $row_slide_text1['id']; ?>">
                                    <input type="file" name="img_slide1" id="imgInput" class="form-control">

                                </div>
                                <div class="col-md-6">
                                    <div id="gallery d-flex justify-content-center align-item-center">
                                        <img width="80%" id="previewImg" src="uploads/upload_slide/<?php echo $row_slide_text1['img_slide1'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn" name="save_slide_text1" type="submit" style="background-color: #218C00; color: #fff;">บันทึก</button>
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

            <div class="page-heading">
                <h3>เนื้อหาสไลด์ที่ 2</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <h4 class="card-title">เนื้อหาที่ 1</h4>
                            <textarea name="content1"><?php echo $row_slide_text2['content1'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 2</h4>
                            <textarea name="content2"><?php echo $row_slide_text2['content2'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 3</h4>
                            <textarea name="content3"><?php echo $row_slide_text2['content3'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 4</h4>
                            <textarea name="content4"><?php echo $row_slide_text2['content4'] ?></textarea>
                            <br>
                            <h4 class="card-title">รูปภาพสไลด์</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="<?php echo  $row_slide_text2['id']; ?>">
                                    <input type="file" name="img_slide2" id="imgInput2" class="form-control">

                                </div>
                                <div class="col-md-6">
                                    <div id="gallery d-flex justify-content-center align-item-center">
                                        <img width="80%" id="previewImg2" src="uploads/upload_slide/<?php echo $row_slide_text2['img_slide2'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn" name="save_slide_text2" type="submit" style="background-color: #218C00; color: #fff;">บันทึก</button>
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



            <div class="page-heading">
                <h3>เนื้อหาสไลด์ที่ 3</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <h4 class="card-title">เนื้อหาที่ 1</h4>
                            <textarea name="content1"><?php echo $row_slide_text3['content1'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 2</h4>
                            <textarea name="content2"><?php echo $row_slide_text3['content2'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 3</h4>
                            <textarea name="content3"><?php echo $row_slide_text3['content3'] ?></textarea>
                            <br>
                            <h4 class="card-title">เนื้อหาที่ 4</h4>
                            <textarea name="content4"><?php echo $row_slide_text3['content4'] ?></textarea>
                            <br>
                            <h4 class="card-title">รูปภาพสไลด์</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="<?php echo  $row_slide_text3['id']; ?>">
                                    <input type="file" name="img_slide3" id="imgInput3" class="form-control">

                                </div>
                                <div class="col-md-6">
                                    <div id="gallery d-flex justify-content-center align-item-center">
                                        <img width="80%" id="previewImg3" src="uploads/upload_slide/<?php echo $row_slide_text3['img_slide3'] ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="mt-3">
                                <button class="btn" name="save_slide_text3" type="submit" style="background-color: #218C00; color: #fff;">บันทึก</button>
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


            <script>
                let imgInput1 = document.getElementById('imgInput');
                let previewImg = document.getElementById('previewImg');
                let imgInput_edit = document.getElementById('imgInput1');
                let previewImg_edit = document.getElementById('previewImg1');

                imgInput1.onchange = evt => {
                    const [file] = imgInput1.files;
                    if (file) {
                        previewImg.src = URL.createObjectURL(file);
                    }
                }
                imgInput_edit.onchange = evt => {
                    const [file] = imgInput_edit.files;
                    if (file) {
                        previewImg_edit.src = URL.createObjectURL(file);
                    }
                }
            </script>

            <script>
                let imgInput2 = document.getElementById('imgInput2');
                let previewImg2 = document.getElementById('previewImg2');
                let imgInput_edit2 = document.getElementById('imgInput2');
                let previewImg_edit2 = document.getElementById('previewImg2');

                imgInput2.onchange = evt => {
                    const [file] = imgInput2.files;
                    if (file) {
                        previewImg2.src = URL.createObjectURL(file);
                    }
                }
                imgInput_edit2.onchange = evt => {
                    const [file] = imgInput_edit2.files;
                    if (file) {
                        previewImg_edit2.src = URL.createObjectURL(file);
                    }
                }
            </script>

            <script>
                let imgInput3 = document.getElementById('imgInput3');
                let previewImg3 = document.getElementById('previewImg3');
                let imgInput_edit3 = document.getElementById('imgInput3');
                let previewImg_edit3 = document.getElementById('previewImg3');

                imgInput3.onchange = evt => {
                    const [file] = imgInput3.files;
                    if (file) {
                        previewImg3.src = URL.createObjectURL(file);
                    }
                }
                imgInput_edit3.onchange = evt => {
                    const [file] = imgInput_edit3.files;
                    if (file) {
                        previewImg_edit3.src = URL.createObjectURL(file);
                    }
                }
            </script>




            <script src="assets/js/bootstrap.js"></script>
            <script src="assets/js/app.js"></script>



</body>

</html>