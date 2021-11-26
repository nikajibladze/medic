<?php
function updateParameters()
{
    $response = array();
    $db = getDB();
    //echo json_encode($_POST);
    //return false;
    try {
        unset($_POST["update_parameters"]);
        $id = $_POST["edit_id"];
        $post = $_POST;
        unset($post["edit_id"]);
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        //echo implode(",", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        // echo json_encode($update_array);

        $insert = "UPDATE  patient_vital_options SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }
}

function updateLimphatic()
{
    $response = array();
    $db = getDB();
    //echo json_encode($_POST);
    //return false;
    try {
        unset($_POST["update_limphatic"]);
        $id = $_POST["edit_id"];
        $post = $_POST;
        unset($post["edit_id"]);
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        //echo implode(",", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        // echo json_encode($update_array);

        $insert = "UPDATE  patient_lymphatic_system SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }
}

function updateDeath()
{
    $response = array();
    $db = getDB();
    //echo json_encode($_POST);
    //return false;
    try {
        unset($_POST["update_death"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        //echo implode(",", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        // echo json_encode($update_array);

        $insert = "UPDATE  patient_death SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }
}

function updateDriven()
{
    $response = array();
    $db = getDB();
    //echo json_encode($_POST);
    //return false;
    try {
        unset($_POST["update_driven"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        //echo implode(",", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        // echo json_encode($update_array);

        $insert = "UPDATE  patient_musculoskeletal_system SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }
}

function updateAbuse()
{
    $response = array();
    $db = getDB();
    //echo json_encode($_POST);
    //return false;
    try {
        unset($_POST["update_abuse"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        //echo implode(",", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        // echo json_encode($update_array);

        $insert = "UPDATE  patient_abuse_anamnesis SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }
}

function updateAntropometry()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_antropometry"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_anthropometry SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateSkin()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_skin"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_skin SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateEndocrine()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_endocrine"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_endocrine_system SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateBreathe()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_breathe"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_respiratory_system SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateBlood()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_blood"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_blood_circulation_system SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateEat()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_eat"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_digestive_system SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updatePis()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_pis"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_genital_system SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateAware()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_aware"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_awareness SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateNervousSystem()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_nervous_system"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_nervous_system SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateReflex()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_reflex"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_reflex_attemps SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateNose()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_nose"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_throat_ear_nose SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateVision()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_vision"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_organ_sight SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateCrystal()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_crystal"]);
        $id = $_POST["crystal_id"];
        unset($_POST["crystal_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_organ_sight_broli SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateSclera()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_sclera"]);
        $id = $_POST["sclera_id"];
        unset($_POST["sclera_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_organ_sight_sclera SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateMbody()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_mbody"]);
        $id = $_POST["mbody_id"];
        unset($_POST["mbody_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_organ_sight_vitreous_body SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateBadura()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_badura"]);
        $id = $_POST["badura_id"];
        unset($_POST["badura_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_organ_sight_retina SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateMounth()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_mounth"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_mouth SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateTeeth()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_teeth"]);
        $id = $_POST["edit_id"];
        unset($_POST["edit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_mouth_teeth SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ");
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateCure()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_cure"]);
        $id = $_POST["cure_id"];
        unset($_POST["cure_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_cure SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateProcedureCode()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_procedure_code"]);
        $id = $_POST["procedure_id"];
        unset($_POST["procedure_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_cure_procedure_code SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateCureMeet()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_cure_meet"]);
        $id = $_POST["meet_id"];
        unset($_POST["meet_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_cure_meeting SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateExamination()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_examination"]);
        $id = $_POST["examination_id"];
        unset($_POST["examination_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_clinical_examination SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateLabTests()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_lab_tests"]);
        $id = $_POST["lab_tests_id"];
        unset($_POST["lab_tests_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_laboratory_tests SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateDoctorRecord()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_doctor_record"]);
        $id = $_POST["doctor_record_id"];
        unset($_POST["doctor_record_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_doctor_record_duty SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updatePsychological()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_psychological"]);
        $id = $_POST["psychology_id"];
        unset($_POST["psychology_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_psychological_examination SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateOperations()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_operations"]);
        $id = $_POST["operations_id"];
        unset($_POST["operations_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_operations SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateImmunization()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_immunization"]);
        $id = $_POST["immunization_id"];
        unset($_POST["immunization_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_immunization SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateMedications()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_medications"]);
        $id = $_POST["medications_id"];
        unset($_POST["medications_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_medications SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateMedicationsModal()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_medications_modal"]);
        $id = $_POST["medications_modal_id"];
        unset($_POST["medications_modal_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_medications_meds SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateMedicationCard()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_medication_card"]);
        $id = $_POST["medication_card_id"];
        unset($_POST["medication_card_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_medical_card SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateReabilitationPlan()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_reabilitation_plan"]);
        $id = $_POST["reabilitation_plan_id"];
        unset($_POST["reabilitation_plan_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_rehabilitation_plan SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateReabilitationDaily()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_reabilitation_daily"]);
        $id = $_POST["reabilitation_records_id"];
        unset($_POST["reabilitation_records_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_daily_final_records SET $fields_update WHERE  id=$id";
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

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateReabilitationOcupation()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_reabilitation_ocupation"]);
        $id = $_POST["ocupation_id"];
        unset($_POST["ocupation_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_occupational_therapy SET $fields_update WHERE  id=$id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateOcupationRight()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_ocupation_right"]);
        $id = $_POST["id"];
        unset($_POST["id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_occupational_therapy_table_right SET $fields_update WHERE  occupational_therapy_id=$id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateOcupationLeft()
{

    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_ocupation_left"]);
        $id = $_POST["id"];
        unset($_POST["id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_occupational_therapy_table_left SET $fields_update WHERE  occupational_therapy_id=$id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updatePhysicalTherapy()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_phsycical_therapy"]);
        $id = $_POST["physical_therapy_id"];
        unset($_POST["physical_therapy_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_physical_therapy SET $fields_update WHERE  id=$id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updatePhysicalTable()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_physical_table"]);
        $id = $_POST["physical_therapy_id"];
        unset($_POST["physical_therapy_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_physical_therapy_table SET $fields_update WHERE  physical_therapy_id=$id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateDeseaseMain()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_desease_main"]);
        $id = $_POST["desease_main_id"];
        unset($_POST["desease_main_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_disease_diagnosis_info SET $fields_update WHERE  id=$id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateDiagnoseType()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_diagnose_type"]);
        $id = $_POST["diagnose_type_id"];
        unset($_POST["diagnose_type_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_disease_diagnosis_info_types SET $fields_update WHERE  id=$id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateDiagnoseRecipient()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_diagnose_recipient"]);
        $id = $_POST["diagnose_recipient_id"];
        $info_id = $_POST["info_id"];
        unset($_POST["info_id"]);
        unset($_POST["diagnose_recipient_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_disease_diagnosis_info_recipient SET $fields_update WHERE  id=$id and info_id=$info_id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateDiagnoseMeet()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_diagnose_meet"]);
        $id = $_POST["diagnose_meet_id"];
        $info_id = $_POST["info_id"];
        unset($_POST["info_id"]);
        unset($_POST["diagnose_meet_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_disease_diagnosis_info_appeal SET $fields_update WHERE  id=$id and info_id=$info_id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateImportant()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_important"]);
        $id = $_POST["important_id"];
        $information_id = $_POST["information_id"];
        unset($_POST["information_id"]);
        unset($_POST["important_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_important_medical_information_child SET $fields_update WHERE  id=$id and information_id=$information_id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateDiagnoseHealth()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_diagnose_health"]);
        $id = $_POST["diagnose_health_id"];
        $diagnose_record_id = $_POST["diagnose_record_id"];
        unset($_POST["diagnose_record_id"]);
        unset($_POST["diagnose_health_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_records_health_condition SET $fields_update WHERE  id=$id and records_id=$diagnose_record_id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateDiagnoseDestination()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_diagnose_destination"]);
        $id = $_POST["consultation_id"];
        $diagnose_record_id = $_POST["diagnose_record_id"];
        unset($_POST["diagnose_record_id"]);
        unset($_POST["consultation_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_records_consultation_destination SET $fields_update WHERE  id=$id and records_id=$diagnose_record_id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}

function updateCommission()
{
    $response = array();
    $db = getDB();
    try {
        unset($_POST["update_commission"]);
        $id = $_POST["commission_id"];
        $visit_id = $_POST["visit_id"];
        unset($_POST["commission_id"]);
        unset($_POST["visit_id"]);
        $post = $_POST;
        $n = array_keys($post);
        $this_new_arr = array();
        $fields = implode(", ", $n);
        $values = ":" . implode(", :", $n);
        $update_array = array();

        foreach ($n as $item) {
            $update_array[] = $item . "=:" . $item;
        }
        $fields_update = implode(", ", $update_array);

        $insert = "UPDATE  patient_military_medical_commission SET $fields_update WHERE  id=$id and visit_id=$visit_id";
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
        //$last_id = $db->lastInsertId();

        $response = array("status" => 200, "message" => "მონაცემები წარმატებით დარედაქტირდა ", "id" => $id);
        echo json_encode($response);
    } catch (Exception $e) {
        $response = array("status" => 400, "message" => "მოხდა შეცდომა", "error_name" => $e->getMessage());
        echo json_encode($response);

    }

}
