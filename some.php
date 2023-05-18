<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try {
    $uploadOk = 1;
    echo $_FILES["image"]["name"];
    if (!$_FILES["image"]["name"] == "") {
        $target_dir = "img/games/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        // if ($_FILES["image"]["size"] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    if (!isset($_GET["gameId"])) {
        $sql = "insert into games (`name`,`desc`,`image`,`mode`,`players`,`restriction`,`duration`) values('" . $_POST['name'] . "','" . $_POST['desc'] . "','" . htmlspecialchars(basename($_FILES["image"]["name"])) . "','" . $_POST['mode'] . "','" . $_POST['players'] . "','" . $_POST['restriction'] . "','" . $_POST['duration'] . "');";
    } else {
        if (!$_FILES["image"]["name"] == "" && $uploadOk = 1) {
            $sql = "update games set `name`='" . $_POST['name'] . "', `desc`='" . $_POST['desc'] . "', `image`='" .
                htmlspecialchars(basename($_FILES["image"]["name"])) . "', `mode`='" . $_POST['mode'] . "', `players`='" . $_POST['players'] . "', `restriction`='" .
                $_POST['restriction'] . "', `duration`='" . $_POST['duration'] . "' where id=" . $_GET["gameId"] . ";";
        } else {
            $sql = "update games set `name`='" . $_POST['name'] . "', `desc`='" . $_POST['desc'] ."', `mode`='" . $_POST['mode'] . "', `players`='" . $_POST['players'] . "', `restriction`='" .
                $_POST['restriction'] . "', `duration`='" . $_POST['duration'] . "' where id=" . $_GET["gameId"] . ";";
                echo $sql;
            }
    }
    // echo $sql;
    // $sql = "insert into games (name,desc,image,mode,players,restriction,duration)
    // values(".$_POST['name'].",".$_POST['desc'].",".$_POST['image'].",".$_POST['mode'].","
    // .$_POST['players'].",".$_POST['restriction'].",".$_POST['duration'].") ON DUPLICATE KEY UPDATE    
    // name=".$_POST['name'].", desc=".$_POST['desc'].", image=".$_POST['image'].", mode=".$_POST['mode'].
    // ", players=".$_POST['players'].", restriction=".$_POST['restriction'].", duration=".$_POST['duration'].";";
    $result = $conn->query($sql);

    header("Location: http://localhost:3000/admin.php");
    die();
} catch (Exception $e) {
    echo "Ошибка добавления:" . $e;
}
$conn->close();
?>