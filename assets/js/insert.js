function visitRegisterInsert(type) {
    var form_serial = $("#visit-register-form").serialize();
    var register_user = 1;
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&register_user=' + register_user,
        success: function (data) {
            if (type == 1) {
                $("#visit-register-form")[0].reset();
            } else {
                getVisit(type);
            }
        }
    });
}

function patientHistory(id) {
    var personal_no = $("#personal_no").val();
    var form_serial = $("#patient_history").serialize();
    var patient_history = id;
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&patient_history=' + patient_history,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 404) {
                //alert(res.message);
                Swal.fire({
                    title: 'შეტყობინება',
                    icon: 'info',
                    html: res.message,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    confirmButtonText:
                        '<i class="fa fa-times"></i> დახურვა',
                    confirmButtonAriaLabel: 'Thumbs up, great!',
                    cancelButtonText:
                        '',
                    cancelButtonAriaLabel: 'Thumbs down'
                })
            } else {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    getVisitRegiter(1, 1);
                    insertUser(personal_no);
                    $("#main-load-div").css("display", "none");

                }, 500);

            }



        }
    });
}

function insertAbuse(id) {

    var edit_id = $("#edit_id").val();
    if (edit_id) {
        updateAbuse(edit_id);
        return;
    }
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    var form_serial = $("#abuse-form").serialize();
    var insert_abuse = "insert_abuse";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_abuse=' + insert_abuse + '&visit_id=' + visit_id,
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

function insertAntropometry(id) {
    var edit_id = $("#antropometry_id").val();
    if (edit_id) {
        updateAntropometry(edit_id);
        return;
    }
    var form_serial = $("#antropometry-form").serialize();
    var insert_antropometry = "insert_antropometry";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_antropometry=' + insert_antropometry + '&visit_id=' + visit_id,
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

function insertAware(id) {
    var edit_id = $("#aware_id").val();
    if (edit_id) {
        updateAware(edit_id);
        return;
    }
    var form_serial = $("#aware-form").serialize();
    var insert_aware = "insert_aware";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_aware=' + insert_aware + '&visit_id=' + visit_id,
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

function insertBlood(id) {
    var edit_id = $("#blood_id").val();
    if (edit_id) {
        updateBlood(edit_id);
        return;
    }
    var form_serial = $("#blood-form").serialize();
    var insert_blood = "insert_blood";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_blood=' + insert_blood + '&visit_id=' + visit_id,
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
function insertEat(id) {
    var edit_id = $("#eat_id").val();
    if (edit_id) {
        updateEat(edit_id);
        return;
    }
    var form_serial = $("#eat-form").serialize();
    var insert_eat = "insert_eat";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_eat=' + insert_eat + '&visit_id=' + visit_id,
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
function InsertPis(id) {
    var edit_id = $("#pis_id").val();
    if (edit_id) {
        updatePis(edit_id);
        return;
    }
    var form_serial = $("#pis-form").serialize();
    var insert_pis = "insert_pis";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_pis=' + insert_pis + '&visit_id=' + visit_id,
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

function InsertNervousSystem(id) {
    var edit_id = $("#nervous_system_id").val();
    if (edit_id) {
        updateNervousSystem(edit_id);
        return;
    }
    var form_serial = $("#nervous-system-form").serialize();
    var insert_nervous_system = "insert_nervous_system";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_nervous_system=' + insert_nervous_system + '&visit_id=' + visit_id,
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

function InsertVision(id) {
    var edit_id = $("#vision_id").val();
    if (edit_id) {
        updateVision(edit_id);
        return;
    }
    var form_serial = $("#vision-form").serialize();
    var insert_vision = "insert_vision";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_vision=' + insert_vision + '&visit_id=' + visit_id,
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

function InsertVisionNew(id) {
    var edit_id = $("#vision_id").val();
    if (edit_id) {
        updateVision(edit_id);
        // return;
    }
    var IDs = new Array();
    var form_serial = $("#vision-form").serialize();
    var insert_vision = "insert_vision";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        async: false,
        url: "core/backend/routes/routes.php",
        dataType: 'html',
        data: form_serial + '&insert_vision=' + insert_vision + '&visit_id=' + visit_id,
        success: function (data) {
            console.log(data);
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                var lastid = res.last_id;
                IDs.push(lastid);

            }


        }

    });
    $("#vision_id").val(IDs)
    return IDs;
}

function InsertCrystal(id) {
    var crystal_id = $("#crystal_id").val();
    if (crystal_id) {
        updateCrystal(crystal_id);
        return;
    }
    var sight_id = $("#vision_id").val();
    if (!sight_id) {
        sight_id = InsertVisionNew(id);
        getCrystal(sight_id);
    }
    var form_serial = $("#crystal-form").serialize();
    var insert_crystal = "insert_crystal";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_crystal=' + insert_crystal + '&sight_id=' + sight_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#primary").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#crystal-table").DataTable().ajax.reload();
            }

        }
    });

}

function InsertSclera(id) {
    var sclera_id = $("#sclera_id").val();
    if (sclera_id) {
        updateSclera(sclera_id);
        return;
    }
    var sight_id = $("#vision_id").val();
    if (!sight_id) {
        sight_id = InsertVisionNew(id);
        getSclera(sight_id);
    }
    var form_serial = $("#sclera-form").serialize();
    var insert_sclera = "insert_sclera";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_sclera=' + insert_sclera + '&sight_id=' + sight_id,
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

function InsertBadura(id) {
    var badura_id = $("#badura_id").val();
    if (badura_id) {
        updateBadura(badura_id);
        return;
    }
    var sight_id = $("#vision_id").val();
    if (!sight_id) {
        sight_id = InsertVisionNew(id);
        getBadura(sight_id);
    }
    var form_serial = $("#badura-form").serialize();
    var insert_badura = "insert_badura";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_badura=' + insert_badura + '&sight_id=' + sight_id,
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

function InsertBody(id) {
    var body_id = $("#mbody_id").val();
    if (body_id) {
        updateMbody(body_id);
        return;
    }
    var sight_id = $("#vision_id").val();
    if (!sight_id) {
        sight_id = InsertVisionNew(id);
        getBody(sight_id);
    }

    var form_serial = $("#body-form").serialize();
    var insert_body = "insert_body";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_body=' + insert_body + '&sight_id=' + sight_id,
        success: function (data) {
            var res = JSON.parse(data);

            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')

                $("#body-table").DataTable().ajax.reload();
            }
        }
    });
}
function InsertReflex(id) {
    var edit_id = $("#reflex_id").val();
    if (edit_id) {
        updateReflex(edit_id);
        return;
    }
    var form_serial = $("#reflex-form").serialize();
    var insert_reflex = "insert_reflex";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_reflex=' + insert_reflex + '&visit_id=' + visit_id,
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
function InsertBreathe(id) {
    var edit_id = $("#breathe_id").val();
    if (edit_id) {
        updateBreathe(edit_id);
        return;
    }
    var form_serial = $("#breathe-form").serialize();
    var insert_breathe = "insert_breathe";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_breathe=' + insert_breathe + '&visit_id=' + visit_id,
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

function insertSkin(id) {
    var edit_id = $("#skin_id").val();
    if (edit_id) {
        updateSkin(edit_id);
        return;
    }
    var form_serial = $("#skin-form").serialize();
    var insert_skin = "insert_skin";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_skin=' + insert_skin + '&visit_id=' + visit_id,
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



function InsertParameters(id) {
    var edit_id = $("#paramemters_id").val();
    if (edit_id) {
        updateParameters(edit_id);
        return false;
    } else {
        var form_serial = $("#parameters-form").serialize();
        var insert_parameters = "insert_parameters";
        var visit_id = $("#abuse-tab-link").attr("data-visit-id");
        $.ajax({
            type: "POST",
            url: "core/backend/routes/routes.php",
            data: form_serial + '&insert_parameters=' + insert_parameters + '&visit_id=' + visit_id,
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

}

function InsertLimphatic(id) {
    var edit_id = $("#limphatic_id").val();
    if (edit_id) {
        updateLimphatic(edit_id);
        return;
    }
    var form_serial = $("#limphatic-form").serialize();
    var insert_limphatic = "insert_limphatic";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_limphatic=' + insert_limphatic + '&visit_id=' + visit_id,
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

function InsertDeath(id) {
    var edit_id = $("#death_id").val();
    if (edit_id) {
        updateDeath(edit_id);
        return;
    }
    var form_serial = $("#death-form").serialize();
    var insert_death = "insert_death";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_death=' + insert_death + '&visit_id=' + visit_id,
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
function InsertDriven(id) {
    var edit_id = $("#driven_id").val();
    if (edit_id) {

        updateDriven(edit_id);
        return;
    }
    var form_serial = $("#driven-form").serialize();
    var insert_driven = "insert_driven";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_driven=' + insert_driven + '&visit_id=' + visit_id,
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

function InsertEndocrine(id) {
    var edit_id = $("#endocrine_id").val();
    if (edit_id) {
        updateEndocrine(edit_id);
        return;
    }
    var form_serial = $("#endocrine-form").serialize();
    var insert_endocrine = "insert_endocrine";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_endocrine=' + insert_endocrine + '&visit_id=' + visit_id,
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

function InsertNose(id) {
    var edit_id = $("#nose_id").val();
    var images2 = $("#images").val();
    if (edit_id) {
        updateNose(edit_id);
        return;
    }
    var form_serial = $("#nose-form").serialize();
    var insert_nose = "insert_nose";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_nose=' + insert_nose + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (images2) {
                var image_data = $('.images');
                var form_data = new FormData();
                form_data.append('id', res.id);
                let imageArray = [];
                for (let i = 0; i < image_data.length; i++) {
                    form_data.append(`images[${i}]`, image_data[i].files[0]);
                }
                form_data.append('action', 1);
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


function InsertMounth(id) {
    var edit_id = $("#mounth_id").val();
    if (edit_id) {
        updateMounth(edit_id);
        return;
    }
    var form_serial = $("#mounth-form").serialize();
    var insert_mounth = "insert_mounth";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_mounth=' + insert_mounth + '&visit_id=' + visit_id,
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

function InsertMounthNew(id) {

    var edit_id = $("#mounth_id").val();
    if (edit_id) {
        updateMounth(edit_id);
        //return;
    }
    var IDs = new Array();
    var form_serial = $("#mounth-form").serialize();
    var insert_mounth = "insert_mounth";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        async: false,
        url: "core/backend/routes/routes.php",
        dataType: 'html',
        data: form_serial + '&insert_mounth=' + insert_mounth + '&visit_id=' + visit_id,
        success: function (data) {
            console.log(data);
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                var lastid = res.last_id;
                IDs.push(lastid);

            }


        }

    });
    $("#mounth_id").val(IDs);
    return IDs;
}


function InsertTeeth(id) {
    var mounth_id = $("#mounth_id").val();
    var teeth_id = $("#teeth_id").val();
    if (teeth_id) {
        updateTeeth(teeth_id);
        return;
    }
    //var mounth_id = $("#mounth_id").val();
    if (!mounth_id) {
        mounth_id = InsertMounthNew(id);
        getTeethTable(mounth_id);
    }
    var form_serial = $("#teeth-form").serialize();
    var insert_teeth = "insert_teeth";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_teeth=' + insert_teeth + '&mounth_id=' + mounth_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                //$("#primary").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#teeth-table").DataTable().ajax.reload();
            }

        }
    });

}


function InsertCure() {
    var images2 = $("#images").val();
    var edit_id = $("#cure_id").val();
    if (edit_id) {
        updateCure(edit_id);
        return;
    }
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    var form_serial = $("#cure-form").serialize();
    var insert_cure = "insert_cure";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_cure=' + insert_cure + '&visit_id=' + visit_id,
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
            }


        }
    });


}

function InsertCureNew(id) {
    var edit_id = $("#cure_id").val();
    if (edit_id) {
        updateCure(edit_id);
        // return;
    }
    var IDs = new Array();
    var form_serial = $("#cure-form").serialize();
    var insert_cure = "insert_cure";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        async: false,
        url: "core/backend/routes/routes.php",
        dataType: 'html',
        data: form_serial + '&insert_cure=' + insert_cure + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                var lastid = res.id;
                IDs.push(lastid);

            }
        }

    });
    $("#cure_id").val(IDs)
    return IDs;
}


function InsertProcedureCode(id) {
    var procedure_id = $("#procedure_id").val();
    if (procedure_id) {
        updateProcedureCode(procedure_id);
        return;
    }
    var patient_cure__id = $("#cure_id").val();
    if (!patient_cure__id) {
        patient_cure__id = InsertCureNew(id);
        getProcedureCode(patient_cure__id);
    }
    var form_serial = $("#add-procedure-form").serialize();
    var insert_procedure_code = "insert_procedure_code";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_procedure_code=' + insert_procedure_code + '&patient_cure__id=' + patient_cure__id,
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

function InsertCureMeet(id) {
    var meet_id = $("#meet_id").val();
    if (meet_id) {
        updateCureMeet(meet_id);
        return;
    }
    var patient_cure_id = $("#cure_id").val();
    if (!patient_cure_id) {
        patient_cure_id = InsertCureNew(id);
        getCureMeet(patient_cure_id);
    }
    var form_serial = $("#add-meet-form").serialize();
    var insert_cure_meet = "insert_cure_meet";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_cure_meet=' + insert_cure_meet + '&patient_cure_id=' + patient_cure_id,
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


function InsertClinicalLabNew(id) {

    var IDs = new Array();
    var form_serial = $("#clinical-lab-form").serialize();
    var insert_clinical_lab = "insert_clinical_lab";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        async: false,
        url: "core/backend/routes/routes.php",
        dataType: 'html',
        data: form_serial + '&insert_clinical_lab=' + insert_clinical_lab + '&visit_id=' + visit_id,
        success: function (data) {
            //console.log(data);
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                var lastid = res.last_id;
                IDs.push(lastid);
            }
        }
    });
    $("#clinic_lab_id").val(IDs);
    return IDs;
}


function InsertExamination(id) {
    var examination_id = $("#examination_id").val();
    if (examination_id) {
        updateExamination(examination_id);
        return;
    }
    var main_id = $("#clinic_lab_id").val();
    if (!main_id) {
        main_id = InsertClinicalLabNew(id);
        getExamination();

    }
    var form_serial = $("#add-examination-form").serialize();
    var insert_examination = "insert_examination";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_examination=' + insert_examination + '&main_id=' + main_id,
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

function InsertLabTests(id) {
    var lab_tests_id = $("#lab_tests_id").val();
    if (lab_tests_id) {
        updateLabTests(lab_tests_id);
        return;
    }
    var main_id = $("#clinic_lab_id").val();
    if (!main_id) {
        main_id = InsertClinicalLabNew(id);
        getLabTests();

    }
    var form_serial = $("#lab-tests-form").serialize();
    var insert_lab_tests = "insert_lab_tests";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_lab_tests=' + insert_lab_tests + '&main_id=' + main_id,
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

function InsertDoctorRecord(id) {
    var edit_id = $("#doctor_record_id").val();
    if (edit_id) {
        updateDoctorRecord(edit_id);
        return;
    }
    var form_serial = $("#doctor-record-form").serialize();
    var insert_doctor_record = "insert_doctor_record";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_doctor_record=' + insert_doctor_record + '&visit_id=' + visit_id,
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


function InsertPsychology(id) {
    var edit_id = $("#psychology_id").val();
    var images2 = $(".psychology_file").val();
    if (edit_id) {
        updatePsychology(edit_id);
        return;
    }
    var form_serial = $("#psychology-examination-form").serialize();
    var insert_psychology_examination = "insert_psychology_examination";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_psychology_examination=' + insert_psychology_examination + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
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
                $("#add-doctor-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#doctor-duty-table").DataTable().ajax.reload();
            }

        }
    });

}




function InsertOperations(id) {
    var edit_id = $("#operations_id").val();
    var images2 = $(".operations_file").val();
    if (edit_id) {
        updateOperations(edit_id);
        return;
    }
    var form_serial = $("#operations-form").serialize();
    var insert_operations = "insert_operations";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_operations=' + insert_operations + '&visit_id=' + visit_id,
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



function InsertImmunization(id) {
    var edit_id = $("#immunization_id").val();
    var images2 = $(".immunization_file").val();
    if (edit_id) {
        updateImmunization(edit_id);
        return;
    }
    var form_serial = $("#immunization-form").serialize();
    var insert_immunization = "insert_immunization";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_immunization=' + insert_immunization + '&visit_id=' + visit_id,
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


function InsertMedications(id) {
    var edit_id = $("#medications_id").val();
    var images2 = $(".medications_file").val();
    if (edit_id) {
        updateMedications(edit_id);
        return;
    }
    var form_serial = $("#medications-form").serialize();
    var insert_medications = "insert_medications";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_medications=' + insert_medications + '&visit_id=' + visit_id,
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

function InsertMedicationsNew(id) {
    var IDs = new Array();
    var form_serial = $("#medications-form").serialize();
    var insert_medications = "insert_medications";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        async: false,
        url: "core/backend/routes/routes.php",
        dataType: 'html',
        data: form_serial + '&insert_medications=' + insert_medications + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                var lastid = res.id;
                IDs.push(lastid);

            }
        }
    });
    $("#medications_id").val(IDs)
    return IDs;
}

function insertMedicationsModal(id) {
    var medications_modal_id = $("#medications_modal_id").val();
    if (medications_modal_id) {
        updateMedicationsModal(medications_modal_id);
        return;
    }
    var medications_id = $("#medications_id").val();
    if (!medications_id) {
        medications_id = InsertMedicationsNew(id);
        getMedicationMedsTable();
    }
    var form_serial = $("#add-medications-modal-form").serialize();
    var insert_medications_modal = "insert_medications_modal";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_medications_modal=' + insert_medications_modal + '&medications_id=' + medications_id,
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


function insertMedicationCard(id) {
    var edit_id = $("#medication_card_id").val();
    if (edit_id) {
        updateMedicationCard(edit_id);
        return;
    }
    var form_serial = $("#medication-card-form").serialize();
    var insert_medication_card = "insert_medication_card";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_medication_card=' + insert_medication_card + '&visit_id=' + visit_id,
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

function insertReabilitationPlan(id) {
    var edit_id = $("#reabilitation_plan_id").val();
    if (edit_id) {
        updateReabilitationPlan(edit_id);
        return;
    }
    var form_serial = $("#reabilitation-plan-form").serialize();
    var insert_reabilitation_plan = "insert_reabilitation_plan";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_reabilitation_plan=' + insert_reabilitation_plan + '&visit_id=' + visit_id,
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


function InsertReabilitationRecords(id) {
    var edit_id = $("#reabilitation_records_id").val();
    if (edit_id) {
        updateReabilitationRecords(edit_id);
        return;
    }
    var form_serial = $("#reabilitation-records-form").serialize();
    var insert_reabilitation_records = "insert_reabilitation_records";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_reabilitation_records=' + insert_reabilitation_records + '&visit_id=' + visit_id,
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


function InsertReabilitationRecordsNew(id) {
    var IDs = new Array();
    var form_serial = $("#reabilitation-records-form").serialize();
    var insert_reabilitation_records = "insert_reabilitation_records";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        async: false,
        url: "core/backend/routes/routes.php",
        dataType: 'html',
        data: form_serial + '&insert_reabilitation_records=' + insert_reabilitation_records + '&visit_id=' + visit_id,
        success: function (data) {
            console.log(data);
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                var lastid = res.id;
                IDs.push(lastid);

            }


        }

    });
    $("#reabilitation_records_id").val(IDs)
    return IDs;
}

function insertReabilitaitonDailyModal(id) {
    var daily_records_modal_id = $("#daily_records_modal_id").val();
    if (daily_records_modal_id) {
        ReabilitaitonDailyModal(daily_records_modal_id);
        return;
    }
    var daily_final_records_id = $("#reabilitation_records_id").val();
    if (!daily_final_records_id) {
        daily_final_records_id = InsertReabilitationRecordsNew(id);
        reabilitationDailyList();
    }
    var form_serial = $("#daily-records-modal-form").serialize();
    var insert_reabilitation_daily_modal = "insert_reabilitation_daily_modal";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_reabilitation_daily_modal=' + insert_reabilitation_daily_modal + '&daily_final_records_id=' + daily_final_records_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#reabilitation-daily-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#reabilitation-records-table").DataTable().ajax.reload();
            }

        }
    });
}


function InsertOcupation(id) {
    var edit_id = $("#ocupation_id").val();
    if (edit_id) {
        updateReabilitationOcupation(edit_id);
        return;
    }
    var form_serial = $("#reabilitation-ocupation-form").serialize();
    var insert_ocupation = "insert_ocupation";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_ocupation=' + insert_ocupation + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
                InsertOcupationRight(res.id);
                InsertOcupationLeft(res.id);
            }
        }
    });

}

function InsertOcupationRight(id) {
    var occupational_therapy_id = id;
    var form_serial = $("#ocupation-left-form").serialize();
    var insert_ocupation_right = "insert_ocupation_right";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_ocupation_right=' + insert_ocupation_right + '&occupational_therapy_id=' + occupational_therapy_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                // Swal.fire(res.message, '', 'success')
            }
        }
    });

}

function InsertOcupationLeft(id) {
    var occupational_therapy_id = id;
    // if (edit_id) {
    //     updateReabilitationOcupation(edit_id);
    //     return;
    // }
    var form_serial = $("#ocupation-left-form").serialize();
    var insert_ocupation_left = "insert_ocupation_left";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_ocupation_left=' + insert_ocupation_left + '&occupational_therapy_id=' + occupational_therapy_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                // Swal.fire(res.message, '', 'success')
            }
        }
    });

}


function InsertPhysicalTherapy(id) {
    var edit_id = $("#physical_therapy_id").val();
    if (edit_id) {
        updatePhysicalTherapy(edit_id);
        return;
    }
    var form_serial = $("#physical-therapy-form").serialize();
    var insert_phsycical_therapy = "insert_phsycical_therapy ";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_phsycical_therapy=' + insert_phsycical_therapy + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                Swal.fire(res.message, '', 'success')
                InsertPhysicalTherapyTable(res.id);
            }
        }
    });

}

function InsertPhysicalTherapyTable(id) {
    var form_serial = $("#physical-therapy-form-table").serialize();
    var insert_phsycical_table = "insert_phsycical_table ";

    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_phsycical_table=' + insert_phsycical_table + '&physical_therapy_id=' + id,
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


function InsertReabilitation(id) {
    var edit_id = $("#rehabilitation_id").val();
    if (edit_id) {
        updateReabilitaitonCard(edit_id);
        return;
    }
    var form_serial = $("#rehabilitation-card-form").serialize();
    var insert_reabilitaiton = "insert_reabilitaiton ";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_reabilitaiton=' + insert_reabilitaiton + '&visit_id=' + visit_id,
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

function insertDeseaseMain(id) {
    var edit_id = $("#desease_main_id").val();
    var images2 = $(".desease_file").val();
    if (edit_id) {
        updateDeseaseMain(edit_id);
        return;
    }
    var form_serial = $("#desease-main-form").serialize();
    var insert_desease_main = "insert_desease_main";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_desease_main=' + insert_desease_main + '&visit_id=' + visit_id,
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
                Swal.fire(res.message, '', 'success')


            }

        }
    });

}


function insertDeseaseMainNew(id) {
    var IDs = new Array();
    var form_serial = $("#desease-main-form").serialize();
    var insert_desease_main = "insert_desease_main";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        async: false,
        url: "core/backend/routes/routes.php",
        dataType: 'html',
        data: form_serial + '&insert_desease_main=' + insert_desease_main + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                var lastid = res.id;
                IDs.push(lastid);

            }
        }
    });
    $("#desease_main_id").val(IDs)
    return IDs;
}

function InsertDiagnoseType(id) {
    var diagnose_type_id = $("#diagnose_type_id").val();
    if (diagnose_type_id) {
        updateDiagnoseType(diagnose_type_id);
        return;
    }
    var desease_main_id = $("#desease_main_id").val();
    if (!desease_main_id) {
        desease_main_id = insertDeseaseMainNew(id);
        DiagnoseTypeTable(desease_main_id);
    }
    var form_serial = $("#add-diagnose-type-form").serialize();
    var insert_diagnose_type = "insert_diagnose_type";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_diagnose_type=' + insert_diagnose_type + '&info_id=' + desease_main_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#diagnose-type-modal").modal("hide");
                Swal.fire(res.message, '', 'success')
                $("#diagnose-type-table").DataTable().ajax.reload();
            }

        }
    });

}

function InsertDiagnoseRecipient(id) {
    var diagnose_recipient_id = $("#diagnose_recipient_id").val();
    if (diagnose_recipient_id) {
        updateDiagnoseRecipient(diagnose_recipient_id);
        return;
    }
    var desease_main_id = $("#desease_main_id").val();
    if (!desease_main_id) {
        desease_main_id = insertDeseaseMainNew(id);
        DiagnoseRecipient(desease_main_id);
    }
    var form_serial = $("#diagnosis-recipient-form").serialize();
    var insert_diagnose_recipient = "insert_diagnose_recipient";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_diagnose_recipient=' + insert_diagnose_recipient + '&info_id=' + desease_main_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#diagnose-message-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-recipient-table").DataTable().ajax.reload();
            }

        }
    });

}

function InsertDiagnoseMeet(id) {
    var diagnose_recipient_id = $("#diagnose_recipient_id").val();
    if (diagnose_recipient_id) {
        updateDiagnoseRecipient(diagnose_recipient_id);
        return;
    }
    var desease_main_id = $("#desease_main_id").val();
    if (!desease_main_id) {
        desease_main_id = insertDeseaseMainNew(id);
        DiagnoseRecipient(desease_main_id);
    }
    var form_serial = $("#diagnosis-recipient-form").serialize();
    var insert_diagnose_recipient = "insert_diagnose_recipient";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_diagnose_recipient=' + insert_diagnose_recipient + '&info_id=' + desease_main_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#diagnose-message-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-recipient-table").DataTable().ajax.reload();
            }

        }
    });

}

function InsertDiagnoseMeet(id) {
    var diagnose_meet_id = $("#diagnose_meet_id").val();
    if (diagnose_meet_id) {
        updateDiagnoseMeet(diagnose_meet_id);
        return;
    }
    var desease_main_id = $("#desease_main_id").val();
    if (!desease_main_id) {
        desease_main_id = insertDeseaseMainNew(id);
        DiagnoseRecipient(desease_main_id);
    }
    var form_serial = $("#add-diagnose-meet-form").serialize();
    var insert_diagnose_meet = "insert_diagnose_meet";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_diagnose_meet=' + insert_diagnose_meet + '&info_id=' + desease_main_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#diagnose-meet-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-meet-table").DataTable().ajax.reload();
            }

        }
    });

}


function InsertImportantNew(id) {
    var IDs = new Array();
    var insert_important_main = "insert_important_main";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        async: false,
        url: "core/backend/routes/routes.php",
        dataType: 'html',
        data: 'insert_important_main=' + insert_important_main + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                var lastid = res.id;
                IDs.push(lastid);

            }
        }

    });
    $("#information_id").val(IDs)
    return IDs;
}

function InsertImportant(id) {
    var important_id = $("#important_id").val();
    if (important_id) {
        updateImportant(important_id);
        return;
    }
    var information_id = $("#information_id").val();
    if (!information_id) {
        information_id = InsertImportantNew(id);
        ImportantTable(information_id);
    }
    var form_serial = $("#important-form").serialize();
    var insert_important = "insert_important";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_important=' + insert_important + '&information_id=' + information_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#diagnose-medical-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#important-table").DataTable().ajax.reload();
            }
        }
    });

}

function InsertDiagnoseRecords(id) {
    var IDs = new Array();
    var insert_diagnose_records = "insert_diagnose_records";
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        async: false,
        url: "core/backend/routes/routes.php",
        dataType: 'html',
        data: 'insert_diagnose_records=' + insert_diagnose_records + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                var lastid = res.id;
                IDs.push(lastid);

            }
        }

    });
    $("#diagnose_record_id").val(IDs)
    return IDs;
}

function InsertDiagnoseHealth(id) {
    var records_id = $("#diagnose_health_id").val();
    if (records_id) {
        updateDiagnoseHealth(records_id);
        return;
    }
    var diagnose_record_id = $("#diagnose_record_id").val();
    if (!diagnose_record_id) {
        diagnose_record_id = InsertDiagnoseRecords(id);
        DiagnoseHealthTable(diagnose_record_id);
    }
    var form_serial = $("#diagnose-records-form").serialize();
    var insert_diagnose_health = "insert_diagnose_health";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_diagnose_health=' + insert_diagnose_health + '&records_id=' + diagnose_record_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#diagnose-health-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-health-table").DataTable().ajax.reload();
            }
        }
    });

}


function InsertDiagnoseDestination(id) {
    var records_id = $("#consultation_id").val();
    if (records_id) {
        updateDiagnoseDestination(records_id);
        return;
    }
    var diagnose_record_id = $("#diagnose_record_id").val();
    if (!diagnose_record_id) {
        diagnose_record_id = InsertDiagnoseRecords(id);
    }
    var form_serial = $("#diagnose-destination-form").serialize();
    var insert_diagnose_destination = "insert_diagnose_destination";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_diagnose_destination=' + insert_diagnose_destination + '&records_id=' + diagnose_record_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
            } else {
                $("#diagnose-consult-modal").modal("hide");
                Swal.fire(res.message, '', 'success');
                $("#diagnose-destination-table").DataTable().ajax.reload();
            }
        }
    });

}


function InsertCommission(id) {
    var images2 = $(".commissionfirst_file").val();
    var images3 = $(".commissionsecond_file").val();
    var commission_id = $("#commission_id").val();
    if (commission_id) {
        updateCommission(commission_id);
        return;
    }
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    var form_serial = $("#diagnose-military-form").serialize();
    var insert_commission = "insert_commission";
    $.ajax({
        type: "POST",
        url: "core/backend/routes/routes.php",
        data: form_serial + '&insert_commission=' + insert_commission + '&visit_id=' + visit_id,
        success: function (data) {
            var res = JSON.parse(data);
            if (res.status == 400) {
                Swal.fire(res.message, '', 'error')
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
                Swal.fire(res.message, '', 'success')
            }


        }
    });


}