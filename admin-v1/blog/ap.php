<?php 

include '../lib/db.php';
$db = new DB();

    $id = md5(uniqid());
    $title = $_POST['title'];
    $date = date('Y-m-d');
    $autor = $_POST['autor'];
    $video = $_POST['video'];
    $category_one = $_POST['category_one'];
    $category_two = $_POST['category_two'];
    $description_small = $_POST['description_small'];
    $description = $_POST['description'];
    $name_photo   = $_FILES['img-data']["name"];
    $size_photo = $_FILES['img-data']['size'];

    $name_photo_1   = $_FILES['img-data-one']["name"];
    $size_photo_1 = $_FILES['img-data-one']['size'];

    $name_photo_2   = $_FILES['img-data-two']["name"];
    $size_photo_2 = $_FILES['img-data-two']['size'];
    
    $photo_move_1 = '';
    $photo_move_2 = '';


    
    if(empty($title) || empty($autor) || empty($name_photo) || empty($category_one) || empty($category_two)|| empty($description_small)|| empty($description)){
        header('Location: ../crear-posts?s=null');
    }else{
        $photo_move = '';
        $fileName = 'post'. time() . basename($name_photo);
        $fileUploaded = "../../img/posts/" . $fileName;
        $extensionFile = strtolower(pathinfo($name_photo, PATHINFO_EXTENSION));
        if ($extensionFile =="jpg" || $extensionFile =="jpeg"){ 
            if($size_photo <= 1000000){
                if(move_uploaded_file($_FILES['img-data']["tmp_name"], $fileUploaded)){
                    $photo_move = $fileName;
                    if(!empty($name_photo_1)){
                        if($size_photo_1 <= 1000000){
                            $fileName_1 = 'extra' . time() . basename($name_photo_1);
                            $fileUploaded_1 = "../../img/posts/" . $fileName_1;
                            $extensionFile_1 = strtolower(pathinfo($name_photo_1, PATHINFO_EXTENSION));
                            if ($extensionFile_1 =="jpg" || $extensionFile_1 =="jpeg"){
                                if(move_uploaded_file($_FILES['img-data-one']["tmp_name"], $fileUploaded_1)){
                                    $photo_move_1 = $fileName_1;
                                }
                            }
                        }else{
                            header('Location: ../crear-posts?s=kb');
                        }
                    }
                    if(!empty($name_photo_2)){
                        if($size_photo_2 <= 1000000){
                            $fileName_2 = 'extra' . time() . basename($name_photo_2);
                            $fileUploaded_2 = "../../img/posts/" . $fileName_2;
                            $extensionFile_2 = strtolower(pathinfo($name_photo_2, PATHINFO_EXTENSION));
                            if ($extensionFile_2 == "jpg" || $extensionFile_2 =="jpeg"){ 
                                if(move_uploaded_file($_FILES['img-data-two']["tmp_name"], $fileUploaded_2)){
                                    $photo_move_2 = $fileName_2;
                                }
                            }
                        }else{
                            header('Location: ../crear-posts?s=kb');
                        }
                    }
                    $add = $db->connect()->prepare('INSERT INTO post (id, titulo, descripción, contenido, imagen, fecha, autor, categoria_1, categoria_2, video_youtube, img_extra_1, img_extra_2) VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l)');
                    $add -> bindParam(':a', $id);
                    $add -> bindParam(':b', $title); 
                    $add -> bindParam(':c', $description_small);
                    $add -> bindParam(':d', $description);
                    $add -> bindParam(':e', $photo_move);
                    $add -> bindParam(':f', $date);
                    $add -> bindParam(':g', $autor);
                    $add -> bindParam(':h', $category_one);
                    $add -> bindParam(':i', $category_two);
                    $add -> bindParam(':j', $video);
                    $add -> bindParam(':k', $photo_move_1);
                    $add -> bindParam(':l', $photo_move_2);
                    $add -> execute();
                    if($add == TRUE){
                        header('Location: ../../es/post?ref='. urlencode($title) .'');
                    }else{
                        header('Location: ../crear-posts?s=false');
                    }
                }else{
                    header('Location: ../crear-posts?s=false');
                }
            }else{
                header('Location: ../crear-posts?s=kb');
            }
        }else{
            header('Location: ../crear-posts?s=false');
        }

    }

?>