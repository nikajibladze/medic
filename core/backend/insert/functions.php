<?php
function insertRegister()
{
    $db = getDB();
    $name = $_POST["name"] ? $_POST["name"] : null;
    $lastname = $_POST["lastname"] ? $_POST["lastname"] : null;
    $visit_number = strtotime("now");
    $register_date = $_POST["register_date"] ? $_POST["register_date"] : null;
    $doctor = $_POST["doctor"] ? $_POST["doctor"] : null;
    $personal = $_POST["personal"] ? $_POST["personal"] : null;
    $condition_type = $_POST["condition_type"] ? $_POST["condition_type"] : null;
    $history_id = $_POST["history_id"] ? $_POST["history_id"] : null;
    $statement = $db->prepare("INSERT INTO med_visits(
      first_name,
      last_name,
      personal_no,
      history_number,
      reg_date,
      doctor_id,
      condition_type,
      history_id )
        VALUES
        (:name,
        :lastname,
        :personal,
        :visit_number,
        :register_date,
        :doctor,
        :condition_type,
        :history_id

     )");
    $statement->execute(array(
        "name" => $name,
        "lastname" => $lastname,
        "personal" => $personal,
        "visit_number" => $visit_number,
        "register_date" => $register_date,
        "doctor" => $doctor,
        "condition_type" => $condition_type,
        "history_id" => $history_id,
    ));
}

function patientHistory()
{
    $db = getDB();
    $response = array();
    $first_name = $_POST["first_name"] ? $_POST["first_name"] : null;
    $last_name = $_POST["last_name"] ? $_POST["last_name"] : null;
    $personal_no = $_POST["personal_no"] ? $_POST["personal_no"] : null;
    $birth_date = $_POST["birth_date"] ? $_POST["birth_date"] : null;
    $gender = $_POST["gender"] ? $_POST["gender"] : null;
    $blood_group = $_POST["blood_group"] ? $_POST["blood_group"] : null;
    $rhesus = $_POST["rhesus"] ? $_POST["rhesus"] : null;
    if (!$personal_no) {
        $response = array("status" => 404, "message" => "პირადი ნომერი სავალდებულოა");
        echo json_encode($response);
        return false;
    }
    if (strlen($personal_no) != 11) {
        $response = array("status" => 404, "message" => "პირადი ნომერი უნდა შეიცავდეს 11 ციფრს");
        echo json_encode($response);
        return false;
    }
    if (!$first_name) {
        $response = array("status" => 404, "message" => "სახელი სავალდებულოა");
        echo json_encode($response);
        return false;
    }

    if (!$last_name) {
        $response = array("status" => 404, "message" => "გვარი სავალდებულოა");
        echo json_encode($response);
        return false;
    }
    $statement = $db->prepare("INSERT INTO patient_history(
      first_name,
      last_name,
      personal_no,
      birth_date,
      gender,
      blood_group,
      rhesus )
        VALUES
        (:first_name,
        :last_name,
        :personal_no,
        :birth_date,
        :gender,
        :blood_group,
        :rhesus

     )");
    $statement->execute(array(
        "first_name" => $first_name,
        "last_name" => $last_name,
        "personal_no" => $personal_no,
        "birth_date" => $birth_date,
        "gender" => $gender,
        "blood_group" => $blood_group,
        "rhesus" => $rhesus,
    ));

    $response = array("status" => 200, "message" => "ახალი ისტორია დამატებულია");
    echo json_encode($response);
}

function insertAbuse()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_abuse"]);
    unset($_POST["edit_id"]);
    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();

    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_abuse_anamnesis ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა " . $_POST["abuse_text"]);
    echo json_encode($response);

}
function insertAntropometry()
{
    $response = array();
    //print_r($_POST);
    $db = getDB();
    unset($_POST["insert_antropometry"]);
    unset($_POST["edit_id"]);
    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();

    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_anthropometry ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);

}
function insertAware()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_aware"]);
    unset($_POST["edit_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_awareness ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();
    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა");
    echo json_encode($response);

}

function insertBlood()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_blood"]);
    unset($_POST["edit_id"]);
    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();
    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_blood_circulation_system ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();
    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);

}
function insertEat()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_eat"]);
    unset($_POST["edit_id"]);
    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();
    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_digestive_system ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);

}
function insertPis()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_pis"]);
    unset($_POST["edit_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_genital_system ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);

}
function insertNervousSystem()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_nervous_system"]);
    unset($_POST["edit_id"]);
    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();
    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_nervous_system ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);

}
function insertVision()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_vision"]);
    unset($_POST["edit_id"]);
    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();
    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_organ_sight ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();
    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "last_id" => $last_id);
    echo json_encode($response);

}

function insertCrystal()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_crystal"]);
    unset($_POST["crystal_id"]);
    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();
    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_organ_sight_broli ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);
}

function insertBadura()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_badura"]);
    unset($_POST["badura_id"]);

    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();
    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_organ_sight_retina ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();
    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);
}

function insertSclera()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_sclera"]);
    unset($_POST["sclera_id"]);
    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();
    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_organ_sight_sclera ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();
    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);
}

function insertBody()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_body"]);
    unset($_POST["mbody_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_organ_sight_vitreous_body ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();
    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);
}

function insertReflex()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_reflex"]);
    unset($_POST["edit_id"]);
    $post = $_POST;
    $n = array_keys($post);
    //$count = array_search($offsetKey, $n);
    //$first_table = array_slice($post, 0, $count + 12, true);
    $this_new_arr = array();
    //$keys = array_keys($first_table);
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_reflex_attemps ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $last_id = $db->lastInsertId();
    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
    echo json_encode($response);
}

function insertBreathe()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_breathe"]);
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_respiratory_system ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertSkin()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_skin"]);
        unset($_POST["edit_id"]);

        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_skin ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertParameters()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_parameters"]);
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_vital_options ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertLimphatic()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_limphatic"]);
        unset($_POST["edit_id"]);

        //unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_lymphatic_system ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertDeath()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_death"]);
        unset($_POST["edit_id"]);
        //unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_death ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertDriven()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_driven"]);
        unset($_POST["edit_id"]);

        //unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_musculoskeletal_system ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertEndocrine()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_endocrine"]);
        unset($_POST["edit_id"]);
        //unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_endocrine_system ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertNose()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_nose"]);
        unset($_POST["edit_id"]);
        //unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_throat_ear_nose ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertMounth()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_mounth"]);
        unset($_POST["edit_id"]);
        //unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_mouth ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "last_id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertTeeth()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["insert_teeth"]);
        unset($_POST["edit_id"]);
        //unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        //$count = array_search($offsetKey, $n);
        //$first_table = array_slice($post, 0, $count + 12, true);
        $this_new_arr = array();
        //$keys = array_keys($first_table);
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $insert = "INSERT INTO patient_mouth_teeth ($fields) VALUES ($values)";
        $query = $db->prepare($insert);
        foreach ($post as $key => &$value) {
            switch (gettype($value)) {
                case 'integer':
                case 'double':
                    $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_INT);
                    break;
                default:
                    $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
            }
        }
        $query->execute();
        $id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function insertCure()
{
    $response = array();
    $db = getDB();

    unset($_POST["insert_cure"]);
    unset($_POST["cure_id"]);
    // unset($_POST["visit_id"]);
    // print_r($_POST);
    // return;
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_cure ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertProcedureCode()
{
    $response = array();
    $db = getDB();

    unset($_POST["insert_procedure_code"]);
    unset($_POST["cure_id"]);
    unset($_POST["procedure_id"]);
    // unset($_POST["visit_id"]);
    // print_r($_POST);
    // return;
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_cure_procedure_code ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertCureMeet()
{
    $response = array();
    $db = getDB();

    unset($_POST["insert_cure_meet"]);
    unset($_POST["meet_id"]);
    // unset($_POST["procedure_id"]);
    // unset($_POST["visit_id"]);
    // print_r($_POST);
    // return;
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_cure_meeting ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertClinicalLab()
{
    $response = array();
    $db = getDB();

    unset($_POST["insert_clinical_lab"]);
    unset($_POST["clinic_lab_id"]);
    // unset($_POST["procedure_id"]);
    // unset($_POST["visit_id"]);
    // print_r($_POST);
    // return;
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_clinical_examination_main ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "last_id" => $id);
    echo json_encode($response);

}

function insertExamination()
{
    $response = array();
    $db = getDB();

    unset($_POST["insert_examination"]);
    unset($_POST["examination_id"]);
    // unset($_POST["procedure_id"]);
    // unset($_POST["visit_id"]);
    // print_r($_POST);
    // return;
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_clinical_examination ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertLabTests()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_lab_tests"]);
    unset($_POST["lab_tests_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_laboratory_tests ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertDoctorRecord()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_doctor_record"]);
    unset($_POST["doctor_record_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_doctor_record_duty ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertPsychology()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_psychology_examination"]);
    unset($_POST["psychology_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_psychological_examination ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertOperations()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_operations"]);
    unset($_POST["operations_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_operations ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertImmunization()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_immunization"]);
    unset($_POST["immunization_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_immunization ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertMedications()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_medications"]);
    unset($_POST["medications_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_medications ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertMedicationMeds()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_medications_modal"]);
    unset($_POST["medications_modal_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_medications_meds ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertMedicationCard()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_medication_card"]);
    unset($_POST["medication_card_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_medical_card ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertReabilitationPlan()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_reabilitation_plan"]);
    unset($_POST["reabilitation_plan_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_rehabilitation_plan ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertReabilitationRecords()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_reabilitation_records"]);
    unset($_POST["reabilitation_records_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_daily_final_records ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertReabilitationDailyModal()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_reabilitation_daily_modal"]);
    unset($_POST["daily_records_modal_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_daily_final_records_list ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertReabilitationOcupation()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_ocupation"]);
    unset($_POST["ocupation_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_occupational_therapy ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertOcupationRight()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_ocupation_right"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_occupational_therapy_table_right ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertOcupationLeft()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_ocupation_left"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_occupational_therapy_table_left ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertPhisicalTherapy()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_phsycical_therapy"]);
    unset($_POST["physical_therapy_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_physical_therapy ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertPhisicalTable()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_phsycical_table"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_physical_therapy_table ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertRehabilitationCard()
{
    $response = array();
    $db = getDB();
    unset($_POST["insert_reabilitaiton"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_rehabilitation_card ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertDeseaseMain()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_desease_main"]);
    unset($_POST["desease_main_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_disease_diagnosis_info ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertDiagnoseType()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_diagnose_type"]);
    unset($_POST["diagnose_type_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_disease_diagnosis_info_types ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertDiagnoseRecipient()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_diagnose_recipient"]);
    unset($_POST["diagnose_recipient_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_disease_diagnosis_info_recipient ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertDiagnoseMeet()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_diagnose_meet"]);
    unset($_POST["diagnose_meet_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_disease_diagnosis_info_appeal ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertImportantMain()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_important_main"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_important_medical_information ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertImportant()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_important"]);
    unset($_POST["important_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_important_medical_information_child ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertDiagnoseRecords()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_diagnose_records"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_records ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertDiagnoseHealth()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_diagnose_health"]);
    unset($_POST["diagnose_health_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_records_health_condition ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertDiagnoseDestination()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_diagnose_destination"]);
    unset($_POST["consultation_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_records_consultation_destination ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}

function insertCommission()
{

    $response = array();
    $db = getDB();
    unset($_POST["insert_commission"]);
    unset($_POST["commission_id"]);
    $post = $_POST;
    $n = array_keys($post);
    $this_new_arr = array();
    $fields = implode(", ", $n);
    $values = ":" . implode(", :", $n);
    $insert = "INSERT INTO patient_military_medical_commission ($fields) VALUES ($values)";
    $query = $db->prepare($insert);
    foreach ($post as $key => &$value) {
        switch (gettype($value)) {
            case 'integer':
            case 'double':
                $query->bindParam(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
                break;
            default:
                $query->bindValue(':' . $key, $value != '' ? $value : null, PDO::PARAM_STR);
        }
    }
    $query->execute();
    $id = $db->lastInsertId();

    $response = array("status" => 200, "message" => "მონაცემები წარმატებით დაემატა ", "id" => $id);
    echo json_encode($response);

}
