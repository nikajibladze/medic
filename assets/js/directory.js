function rhesusTypes() {

    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "rhesus_types": "rhesus_types"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, rhesus) {
                if (rhesus.id >= 1) {
                    $("#rhesus_types").append("<option value=" + rhesus.id + ">" + rhesus.rhesus_types + "</option>");
                }
            })

        }
    });
}

function bloodGrups() {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "blood_groops": "blood_groops"
        },
        dataType: "html",
        success: function (data) {

            var objects = JSON.parse(data);

            $.each(objects, function (key, blood) {
                $("#blood_groops").append("<option value=" + blood.id + ">" + blood.blood_groups + "</option>");

            })

        }
    });
}

function doctors(id) {

    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "doctors_list": "doctors_list"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, doctor) {
                if (doctor.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#doctors").append("<option value=" + doctor.id + " " + selected + ">" + doctor.first_name + " " + doctor.last_name + "</option>");

            })

        }
    });
}

function visitConditions(id) {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "visit_condition": "visit_condition"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, condition) {
                if (condition.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#conditions").append("<option value=" + condition.id + " " + selected + ">" + condition.condition + "</option>");

            })

        }
    });
}

function ExaminationProcedures(id) {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "examination_procedures": "examination_procedures"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, condition) {
                if (condition.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#procedure_clinical").append("<option value=" + condition.id + " " + selected + ">" + condition.procedure_name + "</option>");

            })

        }
    });
}



function PsyDiagnoses(id) {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "psy_diagnoses": "psy_diagnoses"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, condition) {
                if (condition.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#diagnosis_id").append("<option value=" + condition.id + " " + selected + ">" + condition.diagnosis_type + "</option>");

            })

        }
    });
}

function operationsSpeciality(id) {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "get_specialty": "get_specialty"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, condition) {
                if (condition.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#specialty").append("<option value=" + condition.id + " " + selected + ">" + condition.specialty_types + "</option>");

            })

        }
    });
}


function getVaccines(id) {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "get_vaccines": "get_vaccines"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, condition) {
                if (condition.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#vaccine").append("<option value=" + condition.id + " " + selected + ">" + condition.vaccine_type + "</option>");

            })

        }
    });
}


function getIndications(id) {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "get_indications": "get_indications"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, condition) {
                if (condition.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#indication").append("<option value=" + condition.id + " " + selected + ">" + condition.indications + "</option>");

            })

        }
    });
}

function getMedProducts(id) {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "get_med_products": "get_med_products"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, condition) {
                if (condition.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#product_id").append("<option value=" + condition.id + " " + selected + ">" + condition.products + "</option>");

            })

        }
    });
}

function DiagnosisDesease(id) {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "get_diagnosis_disease": "get_diagnosis_disease"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, condition) {
                if (condition.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#diagnos_disease_id").append("<option value=" + condition.id + " " + selected + ">" + condition.disease_type + "</option>");

            })

        }
    });
}

function DiagnosisDoctor(id, type) {
    $.ajax({
        type: "POST",
        url: "core/data/directory/directories.php",
        data: {
            "get_doctors": "get_doctors"
        },
        dataType: "html",
        success: function (data) {
            var objects = JSON.parse(data);
            $.each(objects, function (key, condition) {
                if (condition.id == id) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#" + type).append("<option value=" + condition.id + " " + selected + ">" + condition.name + "</option>");
            })
        }
    });
}