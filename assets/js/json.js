function getUserInfoData(id) {
    $.ajax({
        type: "POST",
        url: "core/visit/user-info.php",
        async: 'false',
        data: {
            "id": id
        },
        dataType: "JSON",
        success: function (data) {
            $("#top-name").text(data.name + " " + data.lastname);
            $("#personal_id").val(data.personal);
            $("#firstname").val(data.name);
            $("#lastname").val(data.lastname);
            $("#visit_number").text("ვიზიტის ნომერი : " + data.visit_number);
            $("#visit_id").val(data.visit_number);
            $("#personal_gender").val(data.gender);
            $("#personal_rhesus").val(data.gender);
            $('#personal_birth_date').datepicker('update', data.birth_date);


        }
    });
}
function insertUser(personal_id) {
    $.ajax({
        type: "POST",
        url: "core/fill-user.php",
        data: {
            "personal_id": personal_id
        },
        dataType: "html",
        success: function (data) {
            var person = JSON.parse(data);
            $("#firstname").val(person.name);
            $("#lastname").val(person.lastname);
            $('#r').datepicker('update', person.reg_date);
            $('#history_id').val(person.id);
            $("#personal_id").val(personal_id);

        }
    });
}


function editVisit(id) {
    $.ajax({
        type: "POST",
        url: "core/visit/user-info.php",
        async: 'false',
        dataType: "JSON",
        data: {
            "id": id
        },
        success: function (data) {
            doctors(data.doctor_id);
            $("#top-name").text(data.name + " " + data.lastname);
            $("#personal_id").val(data.personal);
            $("#firstname").val(data.name);
            $("#lastname").val(data.lastname);
            $("#visit_number").text("ვიზიტის ნომერი : " + data.visit_number);
            $("#visit_id").val(data.visit_number);
            visitConditions(data.condition_type);
            $('#r').datepicker('update', data.reg_date);


        }
    });
}