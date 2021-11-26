function noseFile(formdata) {
    $.ajax({
        type: "POST",
        cache: false,
        url: "core/upload.php",
        data: formdata,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
        }
    });
}

function getFile(id) {

    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_nose_file": "get_nose_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeNoseFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    // $("#test123").prepend("<div class='col-12' id='parent-attached-file" + counter + "'> <div class='form-group'> <label>მიმაგრებული ფაილი</label> <a href='core/download.php?file='" + value.file_storage_name + "'&filename='" + value.file_original_name + "'id='file-download-id' target='_blank'>" + value.file_original_name + '.' + ext2[1] + "</a> <span class='fa fa-times file-times' id='attached-file" + counter + "' onclick='removeNoseFile(this.id)'></span></div> </div>");
                    $("#files-table").css("display", "table");
                    // $("#file-download-id").attr('href', 'core/download.php?file=' + value.file_storage_name + '&filename=' + value.file_original_name);
                    // $("#file-download-id").text(value.file_original_name + '.' + ext2[1]);
                    counter++;
                }



            });

        }
    });
}

function getCureFile(id) {

    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_cure_file": "get_cure_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#file-table-cure").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeCureFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    // $("#test123").prepend("<div class='col-12' id='parent-attached-file" + counter + "'> <div class='form-group'> <label>მიმაგრებული ფაილი</label> <a href='core/download.php?file='" + value.file_storage_name + "'&filename='" + value.file_original_name + "'id='file-download-id' target='_blank'>" + value.file_original_name + '.' + ext2[1] + "</a> <span class='fa fa-times file-times' id='attached-file" + counter + "' onclick='removeNoseFile(this.id)'></span></div> </div>");
                    $("#files-table-cure").css("display", "table");
                    // $("#file-download-id").attr('href', 'core/download.php?file=' + value.file_storage_name + '&filename=' + value.file_original_name);
                    // $("#file-download-id").text(value.file_original_name + '.' + ext2[1]);
                    counter++;
                }



            });

        }
    });
}


function getPsyFile(id) {

    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_psy_file": "get_psy_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#psy-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removePsyFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    $("#files-table-cure").css("display", "table");
                    counter++;
                }



            });

        }
    });
}


function getOperationsFile(id) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_operations_file": "get_operations_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#operations-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeOperationsFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    // $("#test123").prepend("<div class='col-12' id='parent-attached-file" + counter + "'> <div class='form-group'> <label>მიმაგრებული ფაილი</label> <a href='core/download.php?file='" + value.file_storage_name + "'&filename='" + value.file_original_name + "'id='file-download-id' target='_blank'>" + value.file_original_name + '.' + ext2[1] + "</a> <span class='fa fa-times file-times' id='attached-file" + counter + "' onclick='removeNoseFile(this.id)'></span></div> </div>");
                    $("#files-table-cure").css("display", "table");
                    // $("#file-download-id").attr('href', 'core/download.php?file=' + value.file_storage_name + '&filename=' + value.file_original_name);
                    // $("#file-download-id").text(value.file_original_name + '.' + ext2[1]);
                    counter++;
                }



            });

        }
    });
}


function getImmunizationFile(id) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_immunization_file": "get_immunization_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#immunization-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeImmunizationFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    // $("#test123").prepend("<div class='col-12' id='parent-attached-file" + counter + "'> <div class='form-group'> <label>მიმაგრებული ფაილი</label> <a href='core/download.php?file='" + value.file_storage_name + "'&filename='" + value.file_original_name + "'id='file-download-id' target='_blank'>" + value.file_original_name + '.' + ext2[1] + "</a> <span class='fa fa-times file-times' id='attached-file" + counter + "' onclick='removeNoseFile(this.id)'></span></div> </div>");
                    $("#files-table-cure").css("display", "table");
                    // $("#file-download-id").attr('href', 'core/download.php?file=' + value.file_storage_name + '&filename=' + value.file_original_name);
                    // $("#file-download-id").text(value.file_original_name + '.' + ext2[1]);
                    counter++;
                }



            });

        }
    });
}


function getMedicationsFile(id) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_medications_file": "get_medications_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#medications-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeMedicationsFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    $("#files-table-cure").css("display", "table");
                    counter++;
                }



            });

        }
    });
}



function getDeseaseFile(id) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_desease_file": "get_desease_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#desease-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeDeseaseFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    $("#files-table-cure").css("display", "table");
                    counter++;
                }
            });

        }
    });
}


function getCommissionFirstFile(id, file_type) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_commission_file": "get_commission_file",
            "file_type": file_type
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#commissionfirst-file-table").append(`
                    <tr id="commissionfirst-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id-${counter}' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeDeseaseFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    //$("#files-table-cure").css("display", "table");
                    counter++;
                }
            });

        }
    });
}


function noseFile(formdata) {
    $.ajax({
        type: "POST",
        cache: false,
        url: "core/upload.php",
        data: formdata,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
        }
    });
}

function getFile(id) {

    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_nose_file": "get_nose_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeNoseFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    // $("#test123").prepend("<div class='col-12' id='parent-attached-file" + counter + "'> <div class='form-group'> <label>მიმაგრებული ფაილი</label> <a href='core/download.php?file='" + value.file_storage_name + "'&filename='" + value.file_original_name + "'id='file-download-id' target='_blank'>" + value.file_original_name + '.' + ext2[1] + "</a> <span class='fa fa-times file-times' id='attached-file" + counter + "' onclick='removeNoseFile(this.id)'></span></div> </div>");
                    $("#files-table").css("display", "table");
                    // $("#file-download-id").attr('href', 'core/download.php?file=' + value.file_storage_name + '&filename=' + value.file_original_name);
                    // $("#file-download-id").text(value.file_original_name + '.' + ext2[1]);
                    counter++;
                }



            });

        }
    });
}

function getCureFile(id) {

    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_cure_file": "get_cure_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#file-table-cure").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeCureFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    // $("#test123").prepend("<div class='col-12' id='parent-attached-file" + counter + "'> <div class='form-group'> <label>მიმაგრებული ფაილი</label> <a href='core/download.php?file='" + value.file_storage_name + "'&filename='" + value.file_original_name + "'id='file-download-id' target='_blank'>" + value.file_original_name + '.' + ext2[1] + "</a> <span class='fa fa-times file-times' id='attached-file" + counter + "' onclick='removeNoseFile(this.id)'></span></div> </div>");
                    $("#files-table-cure").css("display", "table");
                    // $("#file-download-id").attr('href', 'core/download.php?file=' + value.file_storage_name + '&filename=' + value.file_original_name);
                    // $("#file-download-id").text(value.file_original_name + '.' + ext2[1]);
                    counter++;
                }



            });

        }
    });
}


function getPsyFile(id) {

    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_psy_file": "get_psy_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#psy-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removePsyFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    $("#files-table-cure").css("display", "table");
                    counter++;
                }



            });

        }
    });
}


function getOperationsFile(id) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_operations_file": "get_operations_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#operations-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeOperationsFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    // $("#test123").prepend("<div class='col-12' id='parent-attached-file" + counter + "'> <div class='form-group'> <label>მიმაგრებული ფაილი</label> <a href='core/download.php?file='" + value.file_storage_name + "'&filename='" + value.file_original_name + "'id='file-download-id' target='_blank'>" + value.file_original_name + '.' + ext2[1] + "</a> <span class='fa fa-times file-times' id='attached-file" + counter + "' onclick='removeNoseFile(this.id)'></span></div> </div>");
                    $("#files-table-cure").css("display", "table");
                    // $("#file-download-id").attr('href', 'core/download.php?file=' + value.file_storage_name + '&filename=' + value.file_original_name);
                    // $("#file-download-id").text(value.file_original_name + '.' + ext2[1]);
                    counter++;
                }



            });

        }
    });
}


function getImmunizationFile(id) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_immunization_file": "get_immunization_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#immunization-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeImmunizationFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    // $("#test123").prepend("<div class='col-12' id='parent-attached-file" + counter + "'> <div class='form-group'> <label>მიმაგრებული ფაილი</label> <a href='core/download.php?file='" + value.file_storage_name + "'&filename='" + value.file_original_name + "'id='file-download-id' target='_blank'>" + value.file_original_name + '.' + ext2[1] + "</a> <span class='fa fa-times file-times' id='attached-file" + counter + "' onclick='removeNoseFile(this.id)'></span></div> </div>");
                    $("#files-table-cure").css("display", "table");
                    // $("#file-download-id").attr('href', 'core/download.php?file=' + value.file_storage_name + '&filename=' + value.file_original_name);
                    // $("#file-download-id").text(value.file_original_name + '.' + ext2[1]);
                    counter++;
                }



            });

        }
    });
}


function getMedicationsFile(id) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_medications_file": "get_medications_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#medications-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeMedicationsFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    $("#files-table-cure").css("display", "table");
                    counter++;
                }



            });

        }
    });
}



function getDeseaseFile(id) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_desease_file": "get_desease_file"
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#desease-file-table").append(`
                    <tr id="parent-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeDeseaseFile(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    $("#files-table-cure").css("display", "table");
                    counter++;
                }
            });

        }
    });
}


function getCommissionFirstFile(id, file_type) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_commission_file": "get_commission_file",
            "file_type": file_type
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#commissionfirst-file-table").append(`
                    <tr id="commissionfirst-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id-${counter}' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeCommissionFileFirst(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    //$("#files-table-cure").css("display", "table");
                    counter++;
                }
            });

        }
    });
}


function getCommissionSecondFile(id, file_type) {
    $.ajax({
        type: "GET",
        url: "core/backend/routes/select.php",
        data: {
            "id": id,
            "get_commission_file": "get_commission_file",
            "file_type": file_type
        },
        dataType: "html",
        success: function (data) {
            var file = JSON.parse(data);
            var counter = 1;
            $.each(file, function (item, value) {
                var name = '';
                if (value.id) {

                    var ext = value.file_storage_name;
                    var ext2 = ext.split('.');
                    name = value.file_original_name + '.' + ext2[1];
                    $("#commissionsecond-file-table").append(`
                    <tr id="commissionsecond-file-tr-${counter}">
                    <td><div class='d-flex'><img src='assets/images/icons/${ext2[1]}.png' class='mr-1'><span>${value.file_original_name}</span></div></td>
                    <td><a href='core/download.php?file=${value.file_storage_name}&filename=${value.file_original_name}' id='file-download-id-${counter}' target='_blank'><i class="fa fa-download" aria-hidden="true"></i> ჩამოტვირთვა</a></td>
                    <td><span class='fa fa-times file-times' id='file-tr-${counter}' onclick='removeCommissionFileSecond(this.id,${value.id})'></span></td>
                    </tr>
                    `);
                    //$("#files-table-cure").css("display", "table");
                    counter++;
                }
            });

        }
    });
}
