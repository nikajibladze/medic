function updateAbuse(id) {
    var form_serial = $("#abuse-form").serialize();
    var update_abuse = "update_abuse";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_abuse=' + update_abuse,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}


function updateParameters(id) {
    var form_serial = $("#parameters-form").serialize();
    var update_parameters = "update_parameters";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_parameters=' + update_parameters,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateLimphatic(id) {
    var form_serial = $("#limphatic-form").serialize();
    var update_limphatic = "update_limphatic";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_limphatic=' + update_limphatic,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateDeath(id) {
    var form_serial = $("#death-form").serialize();
    var update_death = "update_death";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_death=' + update_death,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateDriven(id) {
    var form_serial = $("#driven-form").serialize();
    var update_driven = "update_driven";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_driven=' + update_driven,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateAntropometry(id) {
    var form_serial = $("#antropometry-form").serialize();
    var update_antropometry = "update_antropometry";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_antropometry=' + update_antropometry,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateSkin(id) {
    var form_serial = $("#skin-form").serialize();
    var update_skin = "update_skin";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_skin=' + update_skin,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateEndocrine(id) {
    var form_serial = $("#endocrine-form").serialize();
    var update_endocrine = "update_endocrine";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_endocrine=' + update_endocrine,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}


function updateBreathe(id) {
    var form_serial = $("#breathe-form").serialize();
    var update_breathe = "update_breathe";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_breathe=' + update_breathe,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateBlood(id) {
    var form_serial = $("#blood-form").serialize();
    var update_blood = "update_blood";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_blood=' + update_blood,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateEat(id) {
    var form_serial = $("#eat-form").serialize();
    var update_eat = "update_eat";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_eat=' + update_eat,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updatePis(id) {
    var form_serial = $("#pis-form").serialize();
    var update_pis = "update_pis";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_pis=' + update_pis,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateAware(id) {
    var form_serial = $("#aware-form").serialize();
    var update_aware = "update_aware";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_aware=' + update_aware,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateNervousSystem(id) {
    var form_serial = $("#nervous-system-form").serialize();
    var update_nervous_system = "update_nervous_system";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_nervous_system=' + update_nervous_system,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}
function updateReflex(id) {
    var form_serial = $("#reflex-form").serialize();
    var update_reflex = "update_reflex";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_reflex=' + update_reflex,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateNose(id) {
    var images2 = $("#images").val();
    var form_serial = $("#nose-form").serialize();
    var update_nose = "update_nose";
    var nose_id = $("#nose_id").val();
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_nose=' + update_nose,
        success: function (data) {
            var res = JSON.parse(data);
            if (images2) {
                var image_data = $('.images');
                //console.log(image_data);
                var form_data = new FormData();
                form_data.append('id', nose_id);
                let imageArray = [];
                for (let i = 0; i < image_data.length; i++) {
                    // imageArray.push(image_data[i].files[0]);
                    form_data.append(`images[${i}]`, image_data[i].files[0]);
                }
                // console.log(imageArray);
                //console.log(imageArray);
                form_data.append('action', 1);
                console.log(form_data);
                noseFile(form_data);

            }
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateVision(id) {
    var form_serial = $("#vision-form").serialize();
    var update_vision = "update_vision";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_vision=' + update_vision,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateCrystal(id) {
    var form_serial = $("#crystal-form").serialize();
    var update_crystal = "update_crystal";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_crystal=' + update_crystal,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#primary").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#crystal-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateSclera(id) {
    var form_serial = $("#sclera-form").serialize();
    var update_sclera = "update_sclera";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_sclera=' + update_sclera,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#sclera-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#sclera-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateMbody(id) {
    var form_serial = $("#body-form").serialize();
    var update_mbody = "update_mbody";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_mbody=' + update_mbody,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#mbody-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#body-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateBadura(id) {
    var form_serial = $("#badura-form").serialize();
    var update_badura = "update_badura";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_badura=' + update_badura,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#badura-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#badura-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateMounth(id) {
    var form_serial = $("#mounth-form").serialize();
    var update_mounth = "update_mounth";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_mounth=' + update_mounth,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#badura-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#badura-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateTeeth(id) {
    var form_serial = $("#teeth-form").serialize();
    var update_teeth = "update_teeth";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_teeth=' + update_teeth,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#teeth-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#teeth-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateCure(id) {
    var images2 = $("#images").val();
    var form_serial = $("#cure-form").serialize();
    var update_cure = "update_cure";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_cure=' + update_cure,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                if (images2) {
                    var image_data = $('.images');
                    var form_data = new FormData();
                    form_data.append('id', res.id);
                    form_data.append('test', 112);
                    let imageArray = [];
                    for (let i = 0; i < image_data.length; i++) {
                        // imageArray.push(image_data[i].files[0]);
                        form_data.append(`images[${i}]`, image_data[i].files[0]);
                    }
                    form_data.append('action', 1);
                    form_data.append('cure', 1);
                    noseFile(form_data);
                }
                Swal.fire(res.message, '', 'success')
                //$("#teeth-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateProcedureCode(id) {
    var form_serial = $("#add-procedure-form").serialize();
    var update_procedure_code = "update_procedure_code";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_procedure_code=' + update_procedure_code,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#cure-procedure-code-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#procedure-code-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateCureMeet(id) {
    var form_serial = $("#add-meet-form").serialize();
    var update_cure_meet = "update_cure_meet";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_cure_meet=' + update_cure_meet,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#cure-meet-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#cure-meet-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateExamination(id) {
    var form_serial = $("#add-examination-form").serialize();
    var update_examination = "update_examination";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_examination=' + update_examination,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#clinic-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#clinical-examination-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateLabTests(id) {
    var form_serial = $("#lab-tests-form").serialize();
    var update_lab_tests = "update_lab_tests";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_lab_tests=' + update_lab_tests,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#lab-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#laboratory-tests-table").DataTable().ajax.reload();
            }
        }
    });
}



function updateDoctorRecord(id) {
    var form_serial = $("#doctor-record-form").serialize();
    var update_doctor_record = "update_doctor_record";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_doctor_record=' + update_doctor_record,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#add-doctor-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#doctor-duty-table").DataTable().ajax.reload();
            }
        }
    });
}



function updatePsychology(id) {
    var images2 = $("#images").val();
    var images2 = $(".psychology_file").val();
    var form_serial = $("#psychology-examination-form").serialize();
    var update_psychological = "update_psychological";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_psychological=' + update_psychological,
        success: function (data) {
            var res = JSON.parse(data);
            if (images2) {
                var image_data = $('.psychology_file');
                var form_data = new FormData();
                form_data.append('id', res.id);
                let imageArray = [];
                for (let i = 0; i < image_data.length; i++) {
                    form_data.append(`psychology_file[${i}]`, image_data[i].files[0]);
                }
                form_data.append('action', 1);
                form_data.append('psychology_file', 1);
                noseFile(form_data);
            }
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
            }
        }
    });
}

function updateOperations(id) {
    var form_serial = $("#operations-form").serialize();
    var update_operations = "update_operations";
    var images2 = $(".operations_file").val();
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_operations=' + update_operations,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                if (images2) {
                    var image_data = $('.operations_file');
                    var form_data = new FormData();
                    form_data.append('id', res.id);
                    let imageArray = [];
                    for (let i = 0; i < image_data.length; i++) {
                        form_data.append(`operations_file[${i}]`, image_data[i].files[0]);
                    }
                    form_data.append('action', 1);
                    form_data.append('operations_file', 1);
                    noseFile(form_data);
                }

                //$("#add-doctor-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                //$("#doctor-duty-table").DataTable().ajax.reload();
            }
        }
    });
}


function updateImmunization(id) {
    var form_serial = $("#immunization-form").serialize();
    var update_immunization = "update_immunization";
    var images2 = $(".immunization_file").val();
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_immunization=' + update_immunization,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                if (images2) {
                    var image_data = $('.immunization_file');
                    var form_data = new FormData();
                    form_data.append('id', res.id);
                    let imageArray = [];
                    for (let i = 0; i < image_data.length; i++) {
                        form_data.append(`immunization_file[${i}]`, image_data[i].files[0]);
                    }
                    form_data.append('action', 1);
                    form_data.append('immunization_file', 1);
                    noseFile(form_data);
                }

                //$("#add-doctor-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                //$("#doctor-duty-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateMedications(id) {
    var form_serial = $("#medications-form").serialize();
    var update_medications = "update_medications";
    var images2 = $(".medications_file").val();
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_medications=' + update_medications,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                if (images2) {
                    var image_data = $('.medications_file');
                    var form_data = new FormData();
                    form_data.append('id', res.id);
                    let imageArray = [];
                    for (let i = 0; i < image_data.length; i++) {
                        form_data.append(`medications_file[${i}]`, image_data[i].files[0]);
                    }
                    form_data.append('action', 1);
                    form_data.append('medications_file', 1);
                    noseFile(form_data);
                }

                //$("#add-doctor-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                //$("#doctor-duty-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateMedicationsModal(id) {
    var form_serial = $("#add-medications-modal-form").serialize();
    var update_medications_modal = "update_medications_modal";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_medications_modal=' + update_medications_modal,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#add-medications-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#medications-meds-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateMedicationCard() {
    var form_serial = $("#medication-card-form").serialize();
    var update_medication_card = "update_medication_card";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_medication_card=' + update_medication_card,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                //$("#add-medications-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                //$("#medications-meds-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateReabilitationPlan() {
    var form_serial = $("#reabilitation-plan-form").serialize();
    var update_reabilitation_plan = "update_reabilitation_plan";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_reabilitation_plan=' + update_reabilitation_plan,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                //$("#add-medications-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                //$("#medications-meds-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateReabilitationRecords() {
    var form_serial = $("#reabilitation-records-form").serialize();
    var update_reabilitation_daily = "update_reabilitation_daily";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_reabilitation_daily=' + update_reabilitation_daily,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                //$("#add-medications-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                //$("#medications-meds-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateReabilitationOcupation() {
    var form_serial = $("#reabilitation-ocupation-form").serialize();
    var update_reabilitation_ocupation = "update_reabilitation_ocupation";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_reabilitation_ocupation=' + update_reabilitation_ocupation,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                //$("#add-medications-modal").modal("hide");
                Swal.fire(res.message, '', 'success');

                setTimeout(function () {
                    updateOcupationRight(res.id);
                    updateOcupationLeft(res.id);
                }, 500);

                //$("#medications-meds-table").DataTable().ajax.reload();
            }
        }
    });
}


function updateOcupationRight(id) {
    var form_serial = $("#ocupation-right-form").serialize();
    var update_ocupation_right = "update_ocupation_right";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_ocupation_right=' + update_ocupation_right + '&id=' + id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                //$("#add-medications-modal").modal("hide");
                //Swal.fire(res.message, '', 'success')
                //$("#medications-meds-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateOcupationLeft(id) {
    var form_serial = $("#ocupation-left-form").serialize();
    var update_ocupation_left = "update_ocupation_left";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_ocupation_left=' + update_ocupation_left + '&id=' + id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                //$("#add-medications-modal").modal("hide");
                //Swal.fire(res.message, '', 'success')
                //$("#medications-meds-table").DataTable().ajax.reload();
            }
        }
    });
}

function updatePhysicalTherapy() {
    var form_serial = $("#physical-therapy-form").serialize();
    var update_phsycical_therapy = "update_phsycical_therapy";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_phsycical_therapy=' + update_phsycical_therapy,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                //$("#add-medications-modal").modal("hide");
                updatePhysicalTherapyTable(res.id);
                Swal.fire(res.message, '', 'success');
                //$("#medications-meds-table").DataTable().ajax.reload();
            }
        }
    });
}

function updatePhysicalTherapyTable(id) {
    var form_serial = $("#physical-therapy-form-table").serialize();
    var update_physical_table = "update_physical_table";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_physical_table=' + update_physical_table + '&physical_therapy_id=' + id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {

            }
        }
    });
}

function updateDeseaseMain(id) {
    var form_serial = $("#desease-main-form").serialize();
    var images2 = $(".desease_file").val();
    var update_desease_main = "update_desease_main";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_desease_main=' + update_desease_main,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                if (images2) {
                    var image_data = $('.desease_file');
                    var form_data = new FormData();
                    form_data.append('id', res.id);
                    let imageArray = [];
                    for (let i = 0; i < image_data.length; i++) {
                        form_data.append(`desease_file[${i}]`, image_data[i].files[0]);
                    }
                    form_data.append('action', 1);
                    form_data.append('desease', 1);
                    noseFile(form_data);
                }
                Swal.fire("?????????????????????????????? ????????????????????????????????????????????????", '', 'success')
            }
        }
    });
}

function updateDiagnoseType(id) {
    var form_serial = $("#add-diagnose-type-form").serialize();
    var update_diagnose_type = "update_diagnose_type";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_diagnose_type=' + update_diagnose_type + '&id=' + id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error');
            } else {
                $("#diagnose-type-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-type-table").DataTable().ajax.reload();
            }
        }
    });
}


function updateDiagnoseRecipient(id) {
    var form_serial = $("#diagnosis-recipient-form").serialize();
    var update_diagnose_recipient = "update_diagnose_recipient";
    var info_id = $("#desease_main_id").val();
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_diagnose_recipient=' + update_diagnose_recipient + '&info_id=' + info_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error');
            } else {
                $("#diagnose-message-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-recipient-table").DataTable().ajax.reload();
            }
        }
    });
}


function updateDiagnoseMeet(id) {
    var form_serial = $("#add-diagnose-meet-form").serialize();
    var update_diagnose_meet = "update_diagnose_meet";
    var info_id = $("#desease_main_id").val();
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_diagnose_meet=' + update_diagnose_meet + '&info_id=' + info_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error');
            } else {
                $("#diagnose-meet-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-meet-table").DataTable().ajax.reload();
            }
        }
    });
}


function updateImportant(id) {
    var form_serial = $("#important-form").serialize();
    var update_important = "update_important";
    var information_id = $("#information_id").val();
    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_important=' + update_important + '&information_id=' + information_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error');
            } else {
                $("#diagnose-medical-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#important-table").DataTable().ajax.reload();
            }
        }
    });
}


function updateDiagnoseHealth(id) {
    var form_serial = $("#diagnose-records-form").serialize();
    var update_diagnose_health = "update_diagnose_health";
    var diagnose_record_id = $("#diagnose_record_id").val();

    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_diagnose_health=' + update_diagnose_health + '&diagnose_record_id=' + diagnose_record_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error');
            } else {
                $("#diagnose-health-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-health-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateDiagnoseDestination(id) {
    var form_serial = $("#diagnose-destination-form").serialize();
    var update_diagnose_destination = "update_diagnose_destination";
    var diagnose_record_id = $("#diagnose_record_id").val();

    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_diagnose_destination=' + update_diagnose_destination + '&diagnose_record_id=' + diagnose_record_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error');
            } else {
                $("#diagnose-consult-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-destination-table").DataTable().ajax.reload();
            }
        }
    });
}


function updateCommission(id) {
    var images2 = $(".commissionfirst_file").val();
    var images3 = $(".commissionsecond_file").val();
    var form_serial = $("#diagnose-military-form").serialize();
    var update_commission = "update_commission";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");

    $.ajax({
        type: "POST",
        url: "core/backend/routes/update.php",
        data: form_serial + '&update_commission=' + update_commission + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error');
            } else {
                if (images2) {
                    var image_data = $('.commissionfirst_file');
                    var form_data = new FormData();
                    form_data.append('id', res.id);
                    let imageArray = [];
                    for (let i = 0; i < image_data.length; i++) {
                        form_data.append(`commissionfirst_file[${i}]`, image_data[i].files[0]);
                    }
                    form_data.append('action', 1);
                    form_data.append('commission', 1);
                    form_data.append('file_type', 1);
                    noseFile(form_data);
                }
                if (images3) {
                    var image_data = $('.commissionsecond_file');
                    var form_data = new FormData();
                    form_data.append('id', res.id);
                    let imageArray = [];
                    for (let i = 0; i < image_data.length; i++) {
                        form_data.append(`commissionsecond_file[${i}]`, image_data[i].files[0]);
                    }
                    form_data.append('action', 1);
                    form_data.append('commission_second', 1);
                    form_data.append('file_type', 2);
                    noseFile(form_data);
                }
                $("#diagnose-consult-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-destination-table").DataTable().ajax.reload();
            }
        }
    });
}

function updateVisit(id) {
    Swal.fire("?????????????????? ????????????????????????????????????????????????", '', 'success')
}
