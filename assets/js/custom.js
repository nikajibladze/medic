var counter = 1;
$("#shrink-logo").on("click", function () {
    if ($("#checkShrink").hasClass("is-active")) {
        $(".brand-logo").css({
            width: "30px",
            transition: 'all .5s ease'
        });
    } else {
        $(".brand-logo").css({
            width: "91px",
            transition: 'all .5s ease'
        });
    }
});

function glasgoScale(id) {
    var sum = 0;
    $('.price').each(function () {
        sum += Number($(this).val());
    });
    $("#glasgo_count").val(sum);
    $("#hidden_count").val(sum);
    if (sum == 0) {
        $("#glasgo_count").val("");
        $("#hidden_count").val("");
    }
}

function outDocument(id) {
    var value = $("#" + id).val();
    if (value == 2) {
        $("#blank-block").css("display", "contents");

    } else {
        $("#blank-block").css("display", "none");
    }

    if (id == "operations-document") {
        if (value == 2) {
            $("#blank-block-operations").css("display", "contents");

        } else {
            $("#blank-block-operations").css("display", "none");
        }
    }

}

function outDocumentImmunization(id) {
    var value = $("#" + id).val();
    if (value == 2) {
        $("#blank-block-immunization").css("display", "contents");

    } else {
        $("#blank-block-immunization").css("display", "none");
    }



}


function outDocumentDesease(id) {
    var value = $("#" + id).val();
    if (value == 2) {
        $("#blank-block-desease").css("display", "contents");

    } else {
        $("#blank-block-desease").css("display", "none");
    }



}

function confirmFile() {

    if ($("#patient_confirm:checked").val() == 1) {
        $("#patient_confirm_file").css("display", "flex");
    } else {
        $("#patient_confirm_file").css("display", "none");
    }
}

function datepicker() {
    $(".datepicker").datepicker({
        autoclose: true,
        todayBtn: true,
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        language: 'ka'
    });
}
$(document).ready(function () {
    $("#visits").click();

});


function additionalFile(id) {
    $("#" + id).parent().before("<div class='col-12' id='main-file-div-" + counter + "'> <div class='form-group'> <label>მიმაგრებული ფაილი</label> <label id='files" + counter + "' class='file center-block'> <input type='file' id='images' class='images' name='images[]'> <span class='file-custom'></span> </label> </div> </div>");
    counter++;
}

function additionalFilePsychology(id) {
    $("#" + id).parent().before(
        `<div class="col-12"  id='main-file-div-${counter}'>
        <div class="form-group">
        <label for="file"></label>
        <label id="psychology_file${counter}" class="file center-block btn btn-dark btn-sm file-bg">
            <input type="file" class="hidden file-input psychology_file" id="psychology_file" name="psychology_file[]">
            <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
            <span class="file-custom"></span>
        </label>
        <span class="upload-filename"></span>
        </div>	</div>`);
    counter++;
}

function additionalFileOperations(id) {
    $("#" + id).parent().before(
        `<div class="col-12"  id='main-file-div-${counter}'>
        <div class="form-group">
        <label for="file"></label>
        <label id="operations_file${counter}" class="file center-block btn btn-dark btn-sm file-bg">
            <input type="file" class="hidden file-input operations_file" id="operations_file" name="operations_file[]">
            <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
            <span class="file-custom"></span>
        </label>
        <span class="upload-filename"></span>
        </div>	</div>`);
    counter++;
}


function additionalFileImmunization(id) {
    $("#" + id).parent().before(
        `<div class="col-12"  id='main-file-div-${counter}'>
        <div class="form-group">
        <label for="file"></label>
        <label id="immunization_file${counter}" class="file center-block btn btn-dark btn-sm file-bg">
            <input type="file" class="hidden file-input immunization_file" id="operations_file" name="immunization_file[]">
            <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
            <span class="file-custom"></span>
        </label>
        <span class="upload-filename"></span>
        </div>	</div>`);
    counter++;
}

function additionalFileMedications(id) {
    $("#" + id).parent().before(
        `<div class="col-12"  id='main-file-div-${counter}'>
        <div class="form-group">
        <label for="file"></label>
        <label id="medications_file${counter}" class="file center-block btn btn-dark btn-sm file-bg">
            <input type="file" class="hidden file-input medications_file" id="medications_file" name="medications_file[]">
            <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
            <span class="file-custom"></span>
        </label>
        <span class="upload-filename"></span>
        </div>	</div>`);
    counter++;
}

function additionalFileDesease(id) {
    $("#" + id).parent().before(
        `<div class="col-12"  id='main-file-div-${counter}'>
        <div class="form-group">
        <label for="file"></label>
        <label id="desease_file${counter}" class="file center-block btn btn-dark btn-sm file-bg">
            <input type="file" class="hidden file-input desease_file" id="desease_file" name="desease_file[]">
            <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
            <span class="file-custom"></span>
        </label>
        <span class="upload-filename"></span>
        </div>	</div>`);
    counter++;
}

function additionalCommissionFirst(id) {

    $("#safaile").before(
        `<div class="col-12"  id='main-file-div-${counter}'>
        <div class="form-group">
        <label for="file"></label>
        <label id="commissionfirst_file${counter}" class="file center-block btn btn-dark btn-sm file-bg">
            <input type="file" class="hidden file-input commissionfirst_file" id="commissionfirst_file" name="commissionfirst_file[]">
            <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
            <span class="file-custom"></span>
        </label>
        <span class="upload-filename"></span>
        </div>	</div>`);
    counter++;
}

function additionalCommissionSecond(id) {

    $("#safaile2").before(
        `<div class="col-12"  id='main-file-div-${counter}'>
        <div class="form-group">
        <label for="file"></label>
        <label id="commissionsecond_file${counter}" class="file center-block btn btn-dark btn-sm file-bg">
            <input type="file" class="hidden file-input commissionsecond_file" id="commissionsecond_file" name="commissionsecond_file[]">
            <img src="assets/images/icons/upload.png" class="upload-img"> ფაილის მიმაგრება
            <span class="file-custom"></span>
        </label>
        <span class="upload-filename"></span>
        </div>	</div>`);
    counter++;
}

$(document).on('change', '.file-input', function (e) {
    $(this).parent().parent().children('.upload-filename').text(e.target.files[0].name);
})
