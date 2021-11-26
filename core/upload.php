<?php
require_once 'config.php';
$db = getDB();

if (isset($_POST["commission_second"])) {
    if ($_POST["commission_second"] == 1) {
        $file_type = $_POST["file_type"];
        for ($i = 0; $i < count($_FILES["commissionsecond_file"]['name']); $i++) {

            if (isset($_FILES["commissionsecond_file"]["name"][$i]) && $_FILES["commissionsecond_file"]["name"][$i] != '') {
                $id = $_POST["id"];
                $image_name = $_FILES["commissionsecond_file"]["name"][$i];
                $array = explode(".", $image_name);
                $extension = end($array);
                $temporary_name = $_FILES["commissionsecond_file"]["tmp_name"][$i];
                $allowed_extension = array("jpg", "png", "pdf", "xlx", "xlsx", "txt", "doc", "docx", "zip", "rar", "ppt", "pptx", "PPT", "PPTX", "JPG", "XLX", "DOC", "DOCX", "VSD", "vsd");
                if (!in_array($extension, $allowed_extension)) {
                    $error .= '<p>Invalid File</p>';
                } else {
                    $images = rand() . '.' . $extension;
                    $folder = rand(1, 100);
                    $real_name = $array[0];

                    move_uploaded_file($temporary_name, '../uploads/' . $folder . '/' . $images);

                }

                if ($_POST["action"]) {

                    $statement = $db->prepare("INSERT INTO patient_military_medical_commission_files (
            file_original_name,
            file_storage_name,
            medical_commission_id,
            file_type)
              VALUES
              (:file_original_name,
              :file_storage_name,
              :medical_commission_id,
              :file_type
           )");
                    $statement->execute(array(
                        "file_original_name" => $real_name,
                        "file_storage_name" => 'uploads/' . $folder . '/' . $images,
                        "medical_commission_id" => $id,
                        "file_type" => $file_type,
                    ));

                }

            }

        }
        return;
    }
}

if (isset($_POST["commission"])) {
    if ($_POST["commission"] == 1) {
        $file_type = $_POST["file_type"];
        for ($i = 0; $i < count($_FILES["commissionfirst_file"]['name']); $i++) {

            if (isset($_FILES["commissionfirst_file"]["name"][$i]) && $_FILES["commissionfirst_file"]["name"][$i] != '') {
                $id = $_POST["id"];
                $image_name = $_FILES["commissionfirst_file"]["name"][$i];
                $array = explode(".", $image_name);
                $extension = end($array);
                $temporary_name = $_FILES["commissionfirst_file"]["tmp_name"][$i];
                $allowed_extension = array("jpg", "png", "pdf", "xlx", "xlsx", "txt", "doc", "docx", "zip", "rar", "ppt", "pptx", "PPT", "PPTX", "JPG", "XLX", "DOC", "DOCX", "VSD", "vsd");
                if (!in_array($extension, $allowed_extension)) {
                    $error .= '<p>Invalid File</p>';
                } else {
                    $images = rand() . '.' . $extension;
                    $folder = rand(1, 100);
                    $real_name = $array[0];

                    move_uploaded_file($temporary_name, '../uploads/' . $folder . '/' . $images);

                }

                if ($_POST["action"]) {

                    $statement = $db->prepare("INSERT INTO patient_military_medical_commission_files (
            file_original_name,
            file_storage_name,
            medical_commission_id,
            file_type)
              VALUES
              (:file_original_name,
              :file_storage_name,
              :medical_commission_id,
              :file_type
           )");
                    $statement->execute(array(
                        "file_original_name" => $real_name,
                        "file_storage_name" => 'uploads/' . $folder . '/' . $images,
                        "medical_commission_id" => $id,
                        "file_type" => $file_type,
                    ));

                }

            }

        }
        return;
    }
}

if (isset($_POST["desease"])) {
    if ($_POST["desease"] == 1) {
        for ($i = 0; $i < count($_FILES["desease_file"]['name']); $i++) {

            if (isset($_FILES["desease_file"]["name"][$i]) && $_FILES["desease_file"]["name"][$i] != '') {
                $id = $_POST["id"];
                $image_name = $_FILES["desease_file"]["name"][$i];
                $array = explode(".", $image_name);
                $extension = end($array);
                $temporary_name = $_FILES["desease_file"]["tmp_name"][$i];
                $allowed_extension = array("jpg", "png", "pdf", "xlx", "xlsx", "txt", "doc", "docx", "zip", "rar", "ppt", "pptx", "PPT", "PPTX", "JPG", "XLX", "DOC", "DOCX", "VSD", "vsd");
                if (!in_array($extension, $allowed_extension)) {
                    $error .= '<p>Invalid File</p>';
                } else {
                    $images = rand() . '.' . $extension;
                    $folder = rand(1, 100);
                    $real_name = $array[0];

                    move_uploaded_file($temporary_name, '../uploads/' . $folder . '/' . $images);

                }

                if ($_POST["action"]) {

                    $statement = $db->prepare("INSERT INTO patient_disease_diagnosis_info_files (
            file_original_name,
            file_storage_name,
            info_id)
              VALUES
              (:file_original_name,
              :file_storage_name,
              :info_id
           )");
                    $statement->execute(array(
                        "file_original_name" => $real_name,
                        "file_storage_name" => 'uploads/' . $folder . '/' . $images,
                        "info_id" => $id,
                    ));

                }

            }

        }
        return;
    }
}

if (isset($_POST["medications_file"])) {
    if ($_POST["medications_file"] == 1) {
        for ($i = 0; $i < count($_FILES["medications_file"]['name']); $i++) {

            if (isset($_FILES["medications_file"]["name"][$i]) && $_FILES["medications_file"]["name"][$i] != '') {
                $id = $_POST["id"];
                $image_name = $_FILES["medications_file"]["name"][$i];
                $array = explode(".", $image_name);
                $extension = end($array);
                $temporary_name = $_FILES["medications_file"]["tmp_name"][$i];
                $allowed_extension = array("jpg", "png", "pdf", "xlx", "xlsx", "txt", "doc", "docx", "zip", "rar", "ppt", "pptx", "PPT", "PPTX", "JPG", "XLX", "DOC", "DOCX", "VSD", "vsd");
                if (!in_array($extension, $allowed_extension)) {
                    $error .= '<p>Invalid File</p>';
                } else {
                    $images = rand() . '.' . $extension;
                    $folder = rand(1, 100);
                    $real_name = $array[0];

                    move_uploaded_file($temporary_name, '../uploads/' . $folder . '/' . $images);

                }

                if ($_POST["action"]) {

                    $statement = $db->prepare("INSERT INTO patient_medications_files (
            file_original_name,
            file_storage_name,
            medications_id)
              VALUES
              (:file_original_name,
              :file_storage_name,
              :medications_id
           )");
                    $statement->execute(array(
                        "file_original_name" => $real_name,
                        "file_storage_name" => 'uploads/' . $folder . '/' . $images,
                        "medications_id" => $id,
                    ));

                }

            }

        }
        return;
    }
}

if (isset($_POST["immunization_file"])) {
    if ($_POST["immunization_file"] == 1) {
        for ($i = 0; $i < count($_FILES["immunization_file"]['name']); $i++) {

            if (isset($_FILES["immunization_file"]["name"][$i]) && $_FILES["immunization_file"]["name"][$i] != '') {
                $id = $_POST["id"];
                $image_name = $_FILES["immunization_file"]["name"][$i];
                $array = explode(".", $image_name);
                $extension = end($array);
                $temporary_name = $_FILES["immunization_file"]["tmp_name"][$i];
                $allowed_extension = array("jpg", "png", "pdf", "xlx", "xlsx", "txt", "doc", "docx", "zip", "rar", "ppt", "pptx", "PPT", "PPTX", "JPG", "XLX", "DOC", "DOCX", "VSD", "vsd");
                if (!in_array($extension, $allowed_extension)) {
                    $error .= '<p>Invalid File</p>';
                } else {
                    $images = rand() . '.' . $extension;
                    $folder = rand(1, 100);
                    $real_name = $array[0];

                    move_uploaded_file($temporary_name, '../uploads/' . $folder . '/' . $images);

                }

                if ($_POST["action"]) {

                    $statement = $db->prepare("INSERT INTO patient_immunization_files (
            file_original_name,
            file_storage_name,
            immunization_id)
              VALUES
              (:file_original_name,
              :file_storage_name,
              :immunization_id
           )");
                    $statement->execute(array(
                        "file_original_name" => $real_name,
                        "file_storage_name" => 'uploads/' . $folder . '/' . $images,
                        "immunization_id" => $id,
                    ));

                }

            }

        }
        return;
    }
}

if (isset($_POST["operations_file"])) {
    if ($_POST["operations_file"] == 1) {
        for ($i = 0; $i < count($_FILES["operations_file"]['name']); $i++) {

            if (isset($_FILES["operations_file"]["name"][$i]) && $_FILES["operations_file"]["name"][$i] != '') {
                $id = $_POST["id"];
                $image_name = $_FILES["operations_file"]["name"][$i];
                $array = explode(".", $image_name);
                $extension = end($array);
                $temporary_name = $_FILES["operations_file"]["tmp_name"][$i];
                $allowed_extension = array("jpg", "png", "pdf", "xlx", "xlsx", "txt", "doc", "docx", "zip", "rar", "ppt", "pptx", "PPT", "PPTX", "JPG", "XLX", "DOC", "DOCX", "VSD", "vsd");
                if (!in_array($extension, $allowed_extension)) {
                    $error .= '<p>Invalid File</p>';
                } else {
                    $images = rand() . '.' . $extension;
                    $folder = rand(1, 100);
                    $real_name = $array[0];

                    move_uploaded_file($temporary_name, '../uploads/' . $folder . '/' . $images);

                }

                if ($_POST["action"]) {

                    $statement = $db->prepare("INSERT INTO patient_operations_files (
            file_original_name,
            file_storage_name,
            operations_id)
              VALUES
              (:file_original_name,
              :file_storage_name,
              :operations_id
           )");
                    $statement->execute(array(
                        "file_original_name" => $real_name,
                        "file_storage_name" => 'uploads/' . $folder . '/' . $images,
                        "operations_id" => $id,
                    ));

                }

            }

        }
        return;
    }
}

if (isset($_POST["psychology_file"])) {
    if ($_POST["psychology_file"] == 1) {
        for ($i = 0; $i < count($_FILES["psychology_file"]['name']); $i++) {

            if (isset($_FILES["psychology_file"]["name"][$i]) && $_FILES["psychology_file"]["name"][$i] != '') {
                $id = $_POST["id"];
                $image_name = $_FILES["psychology_file"]["name"][$i];
                $array = explode(".", $image_name);
                $extension = end($array);
                $temporary_name = $_FILES["psychology_file"]["tmp_name"][$i];
                $allowed_extension = array("jpg", "png", "pdf", "xlx", "xlsx", "txt", "doc", "docx", "zip", "rar", "ppt", "pptx", "PPT", "PPTX", "JPG", "XLX", "DOC", "DOCX", "VSD", "vsd");
                if (!in_array($extension, $allowed_extension)) {
                    $error .= '<p>Invalid File</p>';
                } else {
                    $images = rand() . '.' . $extension;
                    $folder = rand(1, 100);
                    $real_name = $array[0];

                    move_uploaded_file($temporary_name, '../uploads/' . $folder . '/' . $images);

                }

                if ($_POST["action"]) {

                    $statement = $db->prepare("INSERT INTO patient_psychological_examination_files (
            file_original_name,
            file_storage_name,
            examination_id)
              VALUES
              (:file_original_name,
              :file_storage_name,
              :examination_id
           )");
                    $statement->execute(array(
                        "file_original_name" => $real_name,
                        "file_storage_name" => 'uploads/' . $folder . '/' . $images,
                        "examination_id" => $id,
                    ));

                }

            }

        }
        return;
    }
}
if (isset($_POST["cure"])) {
    if ($_POST["cure"] == 1) {
        for ($i = 0; $i < count($_FILES["images"]['name']); $i++) {

            if (isset($_FILES["images"]["name"][$i]) && $_FILES["images"]["name"][$i] != '') {
                $id = $_POST["id"];
                $image_name = $_FILES["images"]["name"][$i];
                $array = explode(".", $image_name);
                $extension = end($array);
                $temporary_name = $_FILES["images"]["tmp_name"][$i];
                $allowed_extension = array("jpg", "png", "pdf", "xlx", "xlsx", "txt", "doc", "docx", "zip", "rar", "ppt", "pptx", "PPT", "PPTX", "JPG", "XLX", "DOC", "DOCX", "VSD", "vsd");
                if (!in_array($extension, $allowed_extension)) {
                    $error .= '<p>Invalid File</p>';
                } else {
                    $images = rand() . '.' . $extension;
                    $folder = rand(1, 100);
                    $real_name = $array[0];

                    move_uploaded_file($temporary_name, '../uploads/' . $folder . '/' . $images);

                }

                if ($_POST["action"]) {

                    $statement = $db->prepare("INSERT INTO patient_cure_files (
            file_original_name,
            file_storage_name,
            cure_id)
              VALUES
              (:file_original_name,
              :file_storage_name,
              :cure_id
           )");
                    $statement->execute(array(
                        "file_original_name" => $real_name,
                        "file_storage_name" => 'uploads/' . $folder . '/' . $images,
                        "cure_id" => $id,
                    ));

                }

            }

        }
        return;
    }
}
for ($i = 0; $i < count($_FILES["images"]['name']); $i++) {

    if (isset($_FILES["images"]["name"][$i]) && $_FILES["images"]["name"][$i] != '') {
        $id = $_POST["id"];
        $image_name = $_FILES["images"]["name"][$i];
        $array = explode(".", $image_name);
        $extension = end($array);
        $temporary_name = $_FILES["images"]["tmp_name"][$i];
        $allowed_extension = array("jpg", "png", "pdf", "xlx", "xlsx", "txt", "doc", "docx", "zip", "rar", "ppt", "pptx", "PPT", "PPTX", "JPG", "XLX", "DOC", "DOCX", "VSD", "vsd");
        if (!in_array($extension, $allowed_extension)) {
            $error .= '<p>Invalid File</p>';
        } else {
            $images = rand() . '.' . $extension;
            $folder = rand(1, 100);
            $real_name = $array[0];

            move_uploaded_file($temporary_name, '../uploads/' . $folder . '/' . $images);

        }

        if ($_POST["action"]) {

            $statement = $db->prepare("INSERT INTO patient_throat_ear_nose_files (
    file_original_name,
    file_storage_name,
    patient_throat_id)
      VALUES
      (:file_original_name,
      :file_storage_name,
      :patient_throat_id
   )");
            $statement->execute(array(
                "file_original_name" => $real_name,
                "file_storage_name" => 'uploads/' . $folder . '/' . $images,
                "patient_throat_id" => $id,
            ));

        }

    }

}
