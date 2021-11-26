function getContent(id) {
    $(".nav-item").removeClass("active");
    $("#" + id).addClass("active");
}
function getHistory(id) {
    getContent(id);
    $.ajax({
        type: "POST",
        url: "pages/history.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $("#main-load-div").css("display", "none");
                $("#bottom-content").html(data);
                historySearchTab(id);

                $('#history_table').dataTable().fnDestroy();
                $('#history_table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "post",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/history.php"
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "id" },
                        { "data": "reg_date" },
                        { "data": "history_number" },
                        { "data": "personal_no" },
                        { "data": "first_name" },
                        { "data": "last_name" },
                        { "data": "doctor_id" },
                        { "data": "doctor_structure" },
                        { "data": "condition" },
                        { "data": "action" }
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "(  _MAX_ ჩანაწერიდან)",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });
            }, 500);





        }
    });






}
function historySearchTab(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/history/search.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#top-content").html(data);

        }
    });

}
function getVisit(id) {
    getContent(id);
    $.ajax({
        type: "POST",
        url: "pages/components/visit/visit-top.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#top-content").html(data);
            getVisitTable(id);
            datepicker();
        }
    });
}
function mainTable() {
    $('#visits_table').dataTable().fnDestroy();
    $('#visits_table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "post",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/visits.php"
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "id" },
            { "data": "reg_date" },
            { "data": "history_number" },
            { "data": "personal_no" },
            { "data": "first_name" },
            { "data": "last_name" },
            { "data": "doctor_id" },
            { "data": "doctor_structure" },
            { "data": "condition" },
            { "data": "action" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#visits_table tbody').on('dblclick', 'tr', function () {
        var table = $('#visits_table').DataTable();
        var data = table.row(this).data();
        VisitUserInfoTop(data.id, data.id);

    });

    $('#visits_table tbody').on('click', 'tr', function () {
        var table = $('#visits_table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}

function getVisitTable(id) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/visit-bottom.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#main-load-div").css("display", "block");
            $("#bottom-content").html(data);
            setTimeout(function () {
                mainTable();
                $("#main-load-div").css("display", "none");
            }, 500);




        }
    });



}
function getVisitRegiter(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/visit-register.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#bottom-content").html(data);
            datepicker();
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editVisit(id);
                    $("#visit-register-btn").html("რედაქტირება <i class='fa fa-edit' aria-hidden='true'></i>");
                    $("#form-section").html("ვიზიტის რედაქტირება  <i class='fa fa-edit' aria-hidden='true'></i>");
                }, 500);
            } else {
                doctors();
                visitConditions(id);
            }
        }
    });
}

function VisitRegisterCheck(id, event) {


    var personal_length = $("#" + id).val().length;
    var personal_id = $("#" + id).val()
    if (personal_length == 11) {
        $.ajax({
            type: "POST",
            url: "core/check-personal.php",
            data: {
                "personal_id": personal_id
            },
            success: function (data) {
                if (data == 0) {
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        Swal.fire({
                            title: 'შეტყობინება',
                            icon: 'info',
                            html:
                                'ასეთი მომხმარებელი არ არის რეგისტრირებული',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText:
                                '<i class="fa fa-user-plus"></i> ახალი ისტორიის გახსნა',
                            confirmButtonAriaLabel: 'Thumbs up, great!',
                            cancelButtonText:
                                '',
                            cancelButtonAriaLabel: 'Thumbs down'
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                VisitRegister(personal_id);
                            } else if (result.isDenied) {
                            }
                        })
                        $("#firstname").val("");
                        $("#lastname").val("");
                    }, 500);


                    return false;
                } else {
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        insertUser(personal_id);
                    }, 500);


                }
            }
        });
    }

}

function VisitRegister(id) {
    var personal_id = $("#personal_id").val();
    $.ajax({
        type: "POST",
        url: "pages/components/visit/visit-user-register.php",
        data: {
            "id": id,
            "personal_id": personal_id
        },
        success: function (data) {
            $("#bottom-content").html(data);
            datepicker();
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $("#main-load-div").css("display", "none");
                rhesusTypes();
                bloodGrups();
                $("#personal_no").val(personal_id);
            }, 500);

        }
    });

}

function prevent(event) {
    event.preventDefault();
}

function VisitUserInfoTop(id, history_id) {

    getContent(id);
    $.ajax({
        type: "POST",
        url: "pages/components/visit/visit-user-info-top.php",
        async: 'false',
        data: {
            "id": id
        },
        success: function (data) {

            $("#top-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $("#main-load-div").css("display", "none");
                VisitUserInfoBottom(id);
                getVisitPersonal(id);
            }, 500);
            $("#personal-tab-link").attr("data-visit-id", history_id);
            $("#objective-tab-link").attr("data-visit-id", history_id);
            $("#abuse-tab-link").attr("data-visit-id", history_id);
            $("#clinic-lab-id").attr("data-visit-id", history_id);
            $("#diagnose-tab-link").attr("data-visit-id", history_id);
            $("#reabilitation-tab-link").attr("data-visit-id", history_id);
            $("#cure-tab-link").attr("data-visit-id", history_id);
            $("#medications-tab-link").attr("data-visit-id", history_id);
            $("#immunization-tab-link").attr("data-visit-id", history_id);
            $("#psychology-tab-link").attr("data-visit-id", history_id);
            $("#operations-tab-link").attr("data-visit-id", history_id);
            $("#doctor-tab-link").attr("data-visit-id", history_id);




            //$("#user_id").val(id);

        }
    });

}

function VisitUserInfoBottom(id) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/visit-user-info-bottom.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#bottom-content").html(data);

        }
    });

}

function getVisitPersonal(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/visit-personal.php",
        async: "false",
        data: {
            "id": id
        },
        success: function (data) {
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $("#personal-tab-content").html(data);
                $(".datepicker").datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd',
                    todayHighlight: true,
                    language: 'ka'
                });
                $(".select2").select2({
                    placeholder: "არჩევა",
                    allowClear: true
                });
                getUserInfoData(id);
                $("#main-load-div").css("display", "none");
            }, 500);

        }
    });
}

function getVisitAbuse(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/visit-abuse.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#abuse-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#abuse-table').dataTable().fnDestroy();
                $('#abuse-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "GET",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/abuse.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });


                $('#abuse-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#abuse-table').DataTable();
                    var data = table.row(this).data();
                    addAbuse(data.id, 2);

                });

                $('#abuse-table tbody').on('click', 'tr', function () {
                    var table = $('#abuse-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);


        }
    });
}
function getVisitObjective(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/visit-objective.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#objective-tab-content").html(data);
            getAntropometry(id);
        }
    });
}

function getAntropometry(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/antropometry.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#antropometry-tab-content").html(data);

            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#antropometry-table').dataTable().fnDestroy();
                $('#antropometry-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "get",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/antropometry.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "weight" },
                        { "data": "height" },
                        { "data": "abdominal_circumference" },
                        { "data": "reg_name" },
                        { "data": "structure" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });


                $('#antropometry-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#antropometry-table').DataTable();
                    var data = table.row(this).data();

                    addAntropometry(data.id, 2);

                });

                $('#antropometry-table tbody').on('click', 'tr', function () {
                    var table = $('#antropometry-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);

        }
    });
}

function getParameters(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/parameters.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#parameters-tab-content").html(data);
            $('#parameters-table').dataTable().fnDestroy();
            $('#parameters-table').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "scrollX": false,
                "serverMethod": "get",
                "autoWidth": false,
                "lengthMenu": [10, 20, 30, 40],
                "deferRender": true,
                "searching": false,
                "ajax": {
                    "url": "core/data/parameters.php?visit_id=" + visit_id
                },
                "order": [[0, "desc"]],
                "columns": [
                    { "data": "reg_date" },
                    { "data": "system_pressure" },
                    { "data": "diast_pressure" },
                    { "data": "temperature" },
                    { "data": "respiratory_rate" },
                    { "data": "reg_name" },
                    { "data": "position" },
                    { "data": "structure" }
                ],
                "language": {
                    "lengthMenu": "",
                    "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                    "zeroRecords": "ინფორმაცია არ არის",
                    "info": " ",
                    "infoEmpty": "",
                    "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                    "infoFiltered": "",
                    "search": "ძებნა:",
                    "paginate": {
                        "first": "პირველი",
                        "last": "ბოლო",
                        "next": "შემდეგი",
                        "previous": "უკან"
                    }
                }
            });


            $('#parameters-table tbody').on('dblclick', 'tr', function () {
                var table = $('#parameters-table').DataTable();
                var data = table.row(this).data();

                addParameters(data.id, 2);

            });

            $('#parameters-table tbody').on('click', 'tr', function () {
                var table = $('#parameters-table').DataTable();
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
        }
    });
}

function getHearth(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/hearth.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#hearth-tab-content").html(data);

            $('#hearth-table').dataTable().fnDestroy();
            $('#hearth-table').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "scrollX": false,
                "serverMethod": "get",
                "autoWidth": false,
                "lengthMenu": [10, 20, 30, 40],
                "deferRender": true,
                "searching": false,
                "ajax": {
                    "url": "core/data/hearth.php?visit_id=" + visit_id
                },
                "order": [[0, "desc"]],
                "columns": [
                    { "data": "reg_date" },
                    { "data": "reg_name" },
                    { "data": "position" },
                    { "data": "structure" },
                    { "data": "record" },
                ],
                "language": {
                    "lengthMenu": "",
                    "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                    "zeroRecords": "ინფორმაცია არ არის",
                    "info": " ",
                    "infoEmpty": "",
                    "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                    "infoFiltered": "",
                    "search": "ძებნა:",
                    "paginate": {
                        "first": "პირველი",
                        "last": "ბოლო",
                        "next": "შემდეგი",
                        "previous": "უკან"
                    }
                }
            });


            $('#hearth-table tbody').on('dblclick', 'tr', function () {
                var table = $('#hearth-table').DataTable();
                var data = table.row(this).data();

                addHearth(data.id, data.type, 2);

            });

            $('#hearth-table tbody').on('click', 'tr', function () {
                var table = $('#hearth-table').DataTable();
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
        }
    });
}

function getStomach(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/stomach.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#stomach-tab-content").html(data);

            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#stomach-table').dataTable().fnDestroy();
                $('#stomach-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "get",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/stomach.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                        { "data": "record" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });
                $('#stomach-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#stomach-table').DataTable();
                    var data = table.row(this).data();
                    addStomach(data.id, data.type, 2);
                });

                $('#stomach-table tbody').on('click', 'tr', function () {
                    var table = $('#stomach-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);

        }
    });
}

function getNervous(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/nervous.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#nervous-tab-content").html(data);

            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#nervous-table').dataTable().fnDestroy();
                $('#nervous-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "get",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/nervous.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                        { "data": "record" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });
                $('#nervous-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#nervous-table').DataTable();
                    var data = table.row(this).data();
                    addNervous(data.id, data.type, 2);
                });

                $('#nervous-table tbody').on('click', 'tr', function () {
                    var table = $('#nervous-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);

        }
    });
}

function getHead(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/head.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#head-tab-content").html(data);

            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#head-table').dataTable().fnDestroy();
                $('#head-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "get",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/head.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                        { "data": "record" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });
                $('#head-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#head-table').DataTable();
                    var data = table.row(this).data();
                    addHead(data.id, data.type, 2);
                });

                $('#head-table tbody').on('click', 'tr', function () {
                    var table = $('#head-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);

        }
    });
}

function getSkin(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "GET",
        url: "pages/components/visit/tabs/objective-tabs/skin.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#skin-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#skin-table').dataTable().fnDestroy();
                $('#skin-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "get",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/skin.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });
                $('#skin-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#skin-table').DataTable();
                    var data = table.row(this).data();

                    addSkin(data.id, 2);

                });

                $('#skin-table tbody').on('click', 'tr', function () {
                    var table = $('#skin-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);
        }
    });
}

function getDriven(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/driven.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#driven-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#driven-table').dataTable().fnDestroy();
                $('#driven-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "get",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/driven.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });
                $('#driven-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#driven-table').DataTable();
                    var data = table.row(this).data();
                    addDriven(data.id, 2);

                });

                $('#driven-table tbody').on('click', 'tr', function () {
                    var table = $('#skin-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);
        }
    });
}

function getLimphatic(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/limphatic.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#limphatic-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#limphatic-table').dataTable().fnDestroy();
                $('#limphatic-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "get",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/limphatic.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });
                $('#limphatic-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#limphatic-table').DataTable();
                    var data = table.row(this).data();

                    addLimphatic(data.id, 2);

                });

                $('#limphatic-table tbody').on('click', 'tr', function () {
                    var table = $('#limphatic-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);
        }
    });
}


function getEndocrine(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/endocrine.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#endocrine-tab-content").html(data);


            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#endocrine-table').dataTable().fnDestroy();
                $('#endocrine-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "get",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/endocrine.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });
                $('#endocrine-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#endocrine-table').DataTable();
                    var data = table.row(this).data();

                    addEndocrine(data.id, 2);

                });

                $('#endocrine-table tbody').on('click', 'tr', function () {
                    var table = $('#endocrine-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);
        }
    });
}

function getDeath(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/death.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#death-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#death-table').dataTable().fnDestroy();
                $('#death-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "get",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/death.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });
                $('#death-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#death-table').DataTable();
                    var data = table.row(this).data();

                    addDeath(data.id, 2);

                });

                $('#death-table tbody').on('click', 'tr', function () {
                    var table = $('#death-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);
        }
    });
}

function addAbuse(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/abuse/add-abuse.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#abuse-tab-content").html(data);
            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editAbuse(id);
                }, 500);

            }
        }
    });
}

function backToAbuse(id) {
    getVisitAbuse(this.id);
}

function addAntropometry(id, action) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-antropometry.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#antropometry-tab-content").html(data);

            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editAntropometry(id);
                }, 500);

            }

        }
    });

}

function addParameters(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-parameters.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#parameters-tab-content").html(data)
            if (action == 2) {
                editParameters(id);
            }
        }
    });
}

function addHearth(id, type, action) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-hearth.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#hearth-tab-content").html(data);
            if (action == 2) {
                if (type == 2) {
                    $("#blood-tab-link").parent().remove();
                    $("#breathe-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editBreathe(id);
                    }, 500);
                } else if (type == 1) {
                    $("#breathe-tab-link").parent().remove();
                    addBlood(id);

                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editBlood(id);
                    }, 500);
                }
            } else {
                $("#blood-tab-link").click();

            }

        }
    });
}

function addBlood(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-blood.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#blood-tab-content").html(data)
        }
    });
}

function addBreathe(id) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-breathe.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#breathe-tab-content").html(data)
        }
    });
}
function addStomach(id, type, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-stomach.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#stomach-tab-content").html(data);
            if (action == 2) {
                if (type == 1) {
                    $("#pis-tab-link").parent().remove();
                    $("#eat-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editEat(id);
                    }, 500);
                } else if (type == 2) {
                    $("#eat-tab-link").parent().remove();
                    $("#pis-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editPis(id);
                    }, 500);
                }
            } else {
                addEat(id, 1);
            }
        }
    });
}

function addEat(id, action) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-eat.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#eat-tab-content").html(data)
            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editEat(id);
                }, 500);
            }
        }
    });
}

function addPis(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-pis.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#pis-tab-content").html(data);

            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editPis(id);
                }, 500);

            }
        }
    });
}

function addNervous(id, type, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-nervous.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#nervous-tab-content").html(data);

            if (action == 2) {
                if (type == 1) {
                    $("#nervous-system-tab-link").parent().remove();
                    $("#reflex-tab-link").parent().remove();
                    addAware(id, action);
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        //editEat(id);
                    }, 500);
                } else if (type == 2) {
                    $("#aware-tab-link").parent().remove();
                    $("#reflex-tab-link").parent().remove();
                    $("#nervous-system-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editNervousSystem(id);
                    }, 500);
                }
                else if (type == 3) {
                    $("#aware-tab-link").parent().remove();
                    $("#nervous-system-tab-link").parent().remove();
                    $("#reflex-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editReflex(id);
                    }, 500);
                }
            } else {
                addAware(id, 1);
            }
        }
    });
}

function addAware(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-aware.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#aware-tab-content").html(data)

            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editAware(id);
                }, 500);

            }
        }
    });
}

function addNervousSystem(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-nervous-system.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#nervous-system-tab-content").html(data)
        }
    });
}

function addReflex(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-reflex.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reflex-tab-content").html(data)
        }
    });
}

function addHead(id, type, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-head.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#head-tab-content").html(data);

            if (action == 2) {
                if (type == 1) {
                    $("#nose-system-tab-link").parent().remove();
                    $("#mounth-tab-link").parent().remove();
                    addVision(id, action);
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editVision(id);

                    }, 500);
                } else if (type == 2) {
                    $("#vision-tab-link").parent().remove();
                    $("#mounth-tab-link").parent().remove();
                    $("#nose-system-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editNose(id);
                    }, 500);
                }
                else if (type == 3) {
                    $("#vision-tab-link").parent().remove();
                    $("#nose-system-tab-link").parent().remove();
                    $("#mounth-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    $("#main-load-div").css("display", "none");
                    editMounth(id);

                    setTimeout(function () {

                        // $("#main-load-div").css("display", "none");
                        // editMounth(id);
                    }, 500);
                }
            } else {
                addVision(id, 1);
            }




            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editVision(id);
                }, 500);

            }
        }
    });


}

function addVision(id, action) {
    if ($("#vision_id").val()) {
        var sight_id = $("#vision_id").val();
    } else {
        var sight_id = '';
    }


    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-vision.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#vision-tab-content").html(data);
            getCrystal(id)
            getSclera(id);
            getBody(id);
            getBadura(id);
        }
    });
}

function crystalModalAdd(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/modals/add-crystal.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#crystal-add-modal-body").html(data);
        }
    });
}

function scleraModalAdd(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/modals/add-sclera.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#sclera-add-modal-body").html(data);
        }
    });
}


function mbodyModalAdd(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/modals/add-body.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#mbody-add-modal-body").html(data);
        }
    });
}

function baduraModalAdd(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/modals/add-badura.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#badura-add-modal-body").html(data);
        }
    });
}

function addNose(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-nose.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#nose-tab-content").html(data);

        }
    });
}

function addMounth(id) {
    $.ajax({
        type: "POST",
        async: "false",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-mounth.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#mounth-tab-content").html(data);
            setTimeout(function () {
                getTeethTable(id);
            }, 500);



        }
    });
}


function addTeeth(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/modals/add-teeth.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#teeth-add-modal-body").html(data);

        }
    });
}

function addSkin(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-skin.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#skin-tab-content").html(data);
            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editSkin(id);
                }, 500);

            }
        }
    });
}

function addDriven(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-driven.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#driven-tab-content").html(data);
            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editDriven(id);
                }, 500);
            }
        }
    });
}

function addLimphatic(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-limphatic.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#limphatic-tab-content").html(data);
            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editLimphatic(id);
                }, 500);

            }
        }
    });
}

function addEndocrine(id, action) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-endocrine.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#endocrine-tab-content").html(data);
            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editEndocrine(id);
                }, 500);

            }
        }
    });
}

function addDeath(id, action) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/objective-tabs/tabs-data/add-death.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#death-tab-content").html(data);
            datepicker();
            if (action == 2) {
                $("#main-load-div").css("display", "block");
                setTimeout(function () {
                    $("#main-load-div").css("display", "none");
                    editDeath(id);

                }, 500);
                datepicker();
            }
        }
    });
}

function getClinicLab(id) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/clinic-lab/clinic-lab.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#clinic-lab-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $("#main-load-div").css("display", "none");
                getClinicalLabTable();

            }, 200);

        }
    });
}

function addClinicLab(id, action) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/clinic-lab/tabs-data/add-clinic-lab.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#clinic-lab-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            if (action == 2) {
                editClinicLab(id);
            }
            setTimeout(function () {
                $("#main-load-div").css("display", "none");
                getExamination();
                getLabTests();
            }, 200);



        }
    });
}

function addClinic(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/clinic-lab/tabs-data/modals/add-clinic.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#clinic-add-modal-body").html(data);
            if (action == 1) {
                ExaminationProcedures('id');
            }
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            datepicker();

        }
    });
}


function addLab(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/clinic-lab/tabs-data/modals/add-lab.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#lab-add-modal-body").html(data);

            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            datepicker();
        }
    });
}

function getDiagnose(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                DeseaseDiagnoseTable(id);
                $("#main-load-div").css("display", "none");
                editMedicalCard(id);
            }, 200);
        }
    });
}

function addDiagnose(id, type, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/add-diagnose.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-tab-content").html(data);
            if (action == 2) {


                if (type == 1) {
                    $("#diagnose-record-tab-link").parent().remove();
                    $("#diagnose-military-tab-link").parent().remove();
                    $("#military-info-tab-link").parent().remove();

                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        addDiagnoseMain(id, action);

                    }, 500);
                } else if (type == 2) {
                    $("#diagnose-main-info-id").parent().remove();

                    $("#diagnose-military-tab-link").parent().remove();
                    $("#military-info-tab-link").parent().remove();
                    $("#diagnose-record-tab-link").addClass("active");
                    $("#diagnose-record-tab-content").addClass("active");

                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        addDiagnoseRecord(id, action);
                        $("#main-load-div").css("display", "none");

                    }, 500);

                }
                else if (type == 3) {
                    $("#diagnose-main-info-id").parent().remove();
                    $("#diagnose-record-tab-link").parent().remove();
                    $("#military-info-tab-link").parent().remove();
                    $("#diagnose-military-tab-link").addClass("active");
                    $("#diagnose-military-tab-content").addClass("active");
                    $("#reabilitation-plan-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        addDiagnoseMilitary(id, action)
                    }, 500);
                }

                else if (type == 4) {
                    $("#diagnose-main-info-id").parent().remove();
                    $("#diagnose-record-tab-link").parent().remove();
                    $("#diagnose-military-tab-link").parent().remove();
                    $("#military-info-tab-link").addClass("active");
                    $("#diagnose-medical-tab-content").addClass("active");

                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        addDiagnoseMedical(id, action);
                        $("#main-load-div").css("display", "none");

                    }, 500);

                }
            } else {

                addDiagnoseMain(id, 1);
            }



        }
    });
}

function addDiagnoseMain(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/main.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-main-info-tab-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            datepicker();
            DiagnoseTypeTable(id);
            DiagnoseRecipient(id);
            DiagnoseMeet(id);
            if (action == 2) {
                editDiagnoseMain(id);
            }
        }
    });
}

function addDiagnoseType(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/modals/diagnose-type.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-type-modal-body").html(data);

            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });

            datepicker();
            if (action == 1) {
                DiagnosisDesease(id);
            }

        }
    });
}

function addDiagnoseMeet(id, newtype) {
    var type;
    if (newtype == 0) {
        if ($("#transferred_civilian_clinic:checked").val() == 1) {
            type = 1;
        } else {
            type = 2;
        }
    } else {
        type = newtype;
    }
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/modals/diagnose-meet.php",
        data: {
            "id": id,
            "type": type
        },
        success: function (data) {
            $("#diagnose-meet-modal-body").html(data);

            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            datepicker();
            if (newtype == 0) {
                if (type == 1) {
                    DiagnosisDoctor(0, 'civilian_addressee_doctor');
                }
                if (type == 2) {
                    DiagnosisDoctor(0, 'addressee_doctor_meet');
                }
            }
        }
    });
}



function addDiagnoseMessage(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/modals/diagnose-message.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-message-modal-body").html(data);
            datepicker();
        }
    });
}

function addDiagnoseRecord(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/records.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-record-tab-content").html(data);
            DiagnoseHealthTable(id);
            DiagnoseDestinationTable(id);
            if (id != "diagnose-record-tab-link") {
                $("#diagnose_record_id").val(id);
            }

        }
    });
}

function addDiagnoseHealth(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/modals/diagnose-health.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-health-modal-body").html(data);
            datepicker();
        }
    });
}

function addDiagnoseConsult(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/modals/diagnose-consult.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-consult-modal-body").html(data);
            datepicker();
        }
    });
}

function addDiagnoseMilitary(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/military.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-military-tab-content").html(data);
            datepicker();
            if (action == 2) {
                editCommission(id, action);
            }

        }
    });
}


function addDiagnoseMedical(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/medical.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-medical-tab-content").html(data);
            ImportantTable(id);
            if (action == 2) {
                $("#information_id").val(id);
            }


        }
    });
}

function addMedicalDiagnose(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/diagnose/diagnose-tabs/tabs-data/modals/diagnose-medical.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#diagnose-medical-modal-body").html(data);
            datepicker();
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });

            if (action == 1) {
                DiagnosisDoctor(0, "doctor_id");
            }
        }
    });
}

function getReabilitation(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/reabilitation/reabilitation.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reabilitation-tab-content").html(data);
            reabilitationTable(id);
        }
    });
}

function addReabilitation(id, type, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/reabilitation/tabs-data/add-reabilitation.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reabilitation-tab-content").html(data);


            if (action == 2) {
                if (type == 1) {
                    $("#reabilitation-therapy-tab-link").parent().remove();
                    $("#reabilitation-plan-tab-link").parent().remove();
                    $("#reabilitation-records-tab-link").parent().remove();
                    $("#reabilitation-ocupation-tab-link").parent().remove();
                    $("#reabilitation-reabilitation-tab-link").parent().remove();
                    getReabilitationCard(id);
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editMedicalCard(id);

                    }, 500);
                } else if (type == 2) {
                    $("#reabilitation-main-info-id").parent().remove();
                    $("#reabilitation-records-tab-link").parent().remove();
                    $("#reabilitation-ocupation-tab-link").parent().remove();
                    $("#reabilitation-reabilitation-tab-link").parent().remove();
                    $("#reabilitation-plan-tab-link").parent().remove();
                    $("#reabilitation-therapy-tab-link").addClass("active");
                    $("#reabilitation-therapy-tab-content").addClass("active");
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        getReabilitationTherapy(id, action);
                        $("#main-load-div").css("display", "none");

                    }, 500);
                }
                else if (type == 3) {
                    $("#reabilitation-main-info-id").parent().remove();
                    $("#reabilitation-therapy-tab-link").parent().remove();
                    $("#reabilitation-records-tab-link").parent().remove();
                    $("#reabilitation-ocupation-tab-link").parent().remove();
                    $("#reabilitation-reabilitation-tab-link").parent().remove();
                    $("#reabilitation-plan-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        editReabilitationPlan(id);
                    }, 500);
                }

                else if (type == 4) {
                    $("#reabilitation-main-info-id").parent().remove();
                    $("#reabilitation-therapy-tab-link").parent().remove();
                    $("#reabilitation-plan-tab-link").parent().remove();
                    $("#reabilitation-ocupation-tab-link").parent().remove();
                    $("#reabilitation-reabilitation-tab-link").parent().remove();
                    $("#reabilitation-records-tab-link").addClass("active");
                    $("#reabilitation-records-tab-content").addClass("active");
                    //$("#reabilitation-records-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        getReabilitationRecords(id, action);
                    }, 500);
                    //reabilitationDailyList(id);
                }

                else if (type == 5) {
                    $("#reabilitation-main-info-id").parent().remove();
                    $("#reabilitation-therapy-tab-link").parent().remove();
                    $("#reabilitation-records-tab-link").parent().remove();
                    $("#reabilitation-reabilitation-tab-link").parent().remove();
                    $("#reabilitation-plan-tab-link").parent().remove();
                    $("#reabilitation-ocupation-tab-link").addClass("active");
                    $("#reabilitation-ocupation-tab-content").addClass("active");
                    //$("#reabilitation-ocupation-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        getReabilitationOcupation(id, action);
                    }, 500);
                }

                else if (type == 6) {
                    $("#reabilitation-main-info-id").parent().remove();
                    $("#reabilitation-therapy-tab-link").parent().remove();
                    $("#reabilitation-records-tab-link").parent().remove();
                    $("#reabilitation-ocupation-tab-link").parent().remove();
                    $("#reabilitation-plan-tab-link").parent().remove();
                    $("#reabilitation-reabilitation-tab-link").click();
                    $("#main-load-div").css("display", "block");
                    setTimeout(function () {
                        $("#main-load-div").css("display", "none");
                        getReabilitationReabilitation(id, action);
                    }, 500);
                }
            } else {
                getReabilitationCard(id);
            }



        }
    });
}



function getReabilitationCard(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/reabilitation/tabs-data/card.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reabilitation-card-tab-content").html(data);

        }
    });
}

function getReabilitationTherapy(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/reabilitation/tabs-data/therapy.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reabilitation-therapy-tab-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            if (action == 2) {
                editPhysicalTherapy(id);
                editPhysicalTherapyTable(id, action);
            }
        }
    });
}

function getRate() {
    $("#therapy-modal").modal("show");
}

function getReabilitationPlan(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/reabilitation/tabs-data/plan.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reabilitation-plan-tab-content").html(data);

        }
    });
}

function getReabilitationRecords(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/reabilitation/tabs-data/records.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reabilitation-records-tab-content").html(data);
            if (action == 2) {
                $("#main-load-div").css("display", "block");
                editReabilitationRecords(id);
                $("#main-load-div").css("display", "none");
            }
            setTimeout(function () {
                reabilitationDailyList(id);
            }, 200);
        }
    });
}


function addReabilitationDaily(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/reabilitation/tabs-data/modals/daily.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reabilitation-daily-modal-body").html(data);

            datepicker();
        }
    });

}


function getReabilitationOcupation(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/reabilitation/tabs-data/ocupation.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reabilitation-ocupation-tab-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            if (action == 2) {
                editOcupation(id, action);
                editOcupationRight(id, action);
                editOcupationLeft(id, action);
            }

        }
    });
}

function getReabilitationReabilitation(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/reabilitation/tabs-data/reabilitation.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#reabilitation-reabilitation-tab-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            datepicker();
            if (action == 2) {
                editReabilitationCard(id, action);
            }
        }

    });
}

function getCure(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/cure/cure.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#cure-tab-content").html(data);

            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                getCureTable();
            }, 200);
            $("#main-load-div").css("display", "none");

        }
    });
}

function addCure(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/cure/tabs-data/add-cure.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#cure-tab-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            datepicker();
            if (action == 2) {
                editCure(id);
            }
            setTimeout(function () {
                getProcedureCode();
                getCureMeet();
            }, 200);


        }
    });
}

function addProcedureCode(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/cure/tabs-data/modals/code.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#cure-procedure-code-modal-body").html(data);

            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });

            datepicker();
        }
    });
}

function addCureMeet(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/cure/tabs-data/modals/meet.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#cure-meet-modal-body").html(data);

            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });

            datepicker();
        }
    });
}


function getMedications(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/medications/medications.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#medications-tab-content").html(data);
            getMedicationsTable();

        }
    });
}

function addMedications(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/medications/tabs-data/add-medications.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#medications-tab-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });

            datepicker();

            if (action == 1) {
                getIndications(id);
            }
            if (action == 2) {
                editMedications(id, action);
            }
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $("#main-load-div").css("display", "none");
                getMedicationMedsTable();
            }, 300);


        }

    });
}

function addMedicationsModal(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/medications/tabs-data/modals/medications.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#add-medications-modal-body").html(data);

            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });

            datepicker();
            if (action == 1) {
                getMedProducts(id);
            }

        }
    });
}

function getImmunization(id) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/immunization/immunization.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#immunization-tab-content").html(data);
            getImmunizationTable();

        }
    });
}

function addImmunization(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/immunization/tabs-data/add-immunization.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#immunization-tab-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            datepicker();
            if (action == 1) {
                getVaccines(id);
            }
            if (action == 2) {
                editImmunization(id, action);
            }
        }
    });
}

function getPsychology(id) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/psychology/psychology.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#psychology-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $("#main-load-div").css("display", "none");
                getPsychologicalTable();
            }, 300);



        }
    });
}

function addPsychology(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/psychology/tabs-data/add-psychology.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#psychology-tab-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            datepicker();
            if (action == 1) {
                PsyDiagnoses('list');
            }
            if (action == 2) {
                editPsychology(id, action);
            }
        }
    });
}

function getOperations(id, action) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/operations/operations.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#operations-tab-content").html(data);

            getOperationsTable();
        }
    });
}

function addOperations(id, action) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/operations/tabs-data/add-operations.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#operations-tab-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });

            datepicker();
            if (action == 1) {
                operationsSpeciality(id);
            }
            if (action == 2) {
                editOperations(id, action);
            }
        }
    });
}

function getDoctorRecord(id) {

    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/doctor/doctor.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#doctor-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $("#main-load-div").css("display", "none");
                getDoctorRecordTable();
            }, 500);

        }
    });

}

function addDoctorRecord(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/doctor/modal/doctor.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#add-doctor-modal-body").html(data);

        }
    });
}


function getRequire(id) {
    getContent(id);
    $.ajax({
        type: "POST",
        url: "pages/components/require/require.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#top-content").html("<h1>იმუნიზაცია - მოთხოვნები</h1>");
            $("#bottom-content").html(data);

        }
    });
}

function addRequire(id) {
    $.ajax({
        type: "POST",
        url: "pages/components/require/data/add-require.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#top-content").html("<h1>მოთხოვნა / შექმნა</h1>");
            $("#bottom-content").html(data);
            $(".select2").select2({
                placeholder: "არჩევა",
                allowClear: true
            });
            datepicker();
        }
    });
}

function getFinishedImmunization(id) {
    getContent(id);
    $.ajax({
        type: "POST",
        url: "pages/components/immunization/finished.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#top-content").html("<h1>იმუნიზაცია - დასრულებული იმუნიზაცია</h1>");
            $("#bottom-content").html(data);

        }
    });
}

function getLabRequire(id) {
    getContent(id);
    $.ajax({
        type: "POST",
        url: "pages/components/lab/require.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#top-content").html("<h1>ლაბორატორია - მოთხოვნები</h1>");
            $("#bottom-content").html(data);

        }
    });
}

function getLabFinished(id) {
    getContent(id);
    $.ajax({
        type: "POST",
        url: "pages/components/lab/lab.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#top-content").html("<h1>ლაბორატორია -  დასრულებული ლაბორატორიული ტესტი</h1>");
            $("#bottom-content").html(data);


        }
    });
}

function getProcedureRequire(id) {
    getContent(id);
    $.ajax({
        type: "POST",
        url: "pages/components/procedure/require.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#top-content").html("<h1>პროცედურები - მოთხოვნები</h1>");
            $("#bottom-content").html(data);

        }
    });
}

function getProcedureFinished(id) {
    getContent(id);
    $.ajax({
        type: "POST",
        url: "pages/components/procedure/finished.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#top-content").html("<h1>პროცედურები -  დასრულებული</h1>");
            $("#bottom-content").html(data);

        }
    });
}


function getCrystal(id) {

    if (id != 'add-head' && id != 'vision-tab-link') {
        var sight_id = id;
    }
    else {
        var sight_id = '';
    }
    $('#crystal-table').dataTable().fnDestroy();
    $('#crystal-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/crystal.php?sight_id=" + sight_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "broli" },
            { "data": "location" },
            { "data": "transparent" },
            { "data": "place" },
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#crystal-table tbody').on('dblclick', 'tr', function () {
        var table = $('#crystal-table').DataTable();
        var data = table.row(this).data();
        editCrystal(data.id, 2);

    });

    $('#crystal-table tbody').on('click', 'tr', function () {
        var table = $('#crystal-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}

function getSclera(id) {

    if (id != 'add-head' && id != 'vision-tab-link') {
        var sight_id = id;
    }
    else {
        sight_id = '';
    }
    $('#sclera-table').dataTable().fnDestroy();
    $('#sclera-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/sclera.php?sight_id=" + sight_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "sclera_type" },
            { "data": "sclera" },
            { "data": "sclera_text" },
            { "data": "location" },
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#sclera-table tbody').on('dblclick', 'tr', function () {
        var table = $('#sclera-table').DataTable();
        var data = table.row(this).data();
        editSclera(data.id, 2);

    });

    $('#sclera-table tbody').on('click', 'tr', function () {
        var table = $('#sclera-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}
function search() {
    var form_serial = $("#search-form").serialize();
    console.log(form_serial);
}


function getBody(id) {
    if (id != 'add-head' && id != 'vision-tab-link') {
        var sight_id = id;
    }
    else {
        sight_id = '';
    }
    $('#body-table').dataTable().fnDestroy();
    $('#body-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/body.php?sight_id=" + sight_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "vitreous_body" },
            { "data": "vitreous_body_text" },
            { "data": "vitreous_body_location" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#body-table tbody').on('dblclick', 'tr', function () {
        var table = $('#body-table').DataTable();
        var data = table.row(this).data();
        editBody(data.id, 2);

    });

    $('#body-table tbody').on('click', 'tr', function () {
        var table = $('#body-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}

function getBadura(id) {
    if (id != 'add-head' && id != 'vision-tab-link') {
        var sight_id = id;
    }
    else {
        sight_id = '';
    }
    $('#badura-table').dataTable().fnDestroy();
    $('#badura-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/badura.php?sight_id=" + sight_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "retina" },
            { "data": "retina" },
            { "data": "retina_text" },
            { "data": "location" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#badura-table tbody').on('dblclick', 'tr', function () {
        var table = $('#badura-table').DataTable();
        var data = table.row(this).data();
        editBadura(data.id, 2);

    });

    $('#badura-table tbody').on('click', 'tr', function () {
        var table = $('#badura-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}



function getTeethTable(id) {
    var mounth_id = $("#mounth_id").val();
    if (!mounth_id) {
        var mounth_id = '';
    }
    $('#teeth-table').dataTable().fnDestroy();
    $('#teeth-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/teeth.php?mounth_id=" + mounth_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "teeth_number" },
            { "data": "conditon" },
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#teeth-table tbody').on('dblclick', 'tr', function () {
        var table = $('#teeth-table').DataTable();
        var data = table.row(this).data();
        editTeeth(data.id, 2);

    });

    $('#teeth-table tbody').on('click', 'tr', function () {
        var table = $('#teeth-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}

function removeNoseFile(id, file_id, name) {
    Swal.fire({
        title: 'შეტყობინება',
        icon: 'info',
        html:
            'ნამდვილად გსურთ ფაილის წაშლა?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'დიახ',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'არა',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "core/backend/routes/remove.php",
                data: {
                    "id": id,
                    "file_id": file_id,
                    "remove_nose_file": "remove_nose_file"
                },
                success: function (data) {
                    var res = JSON.parse(data);
                    if (res.status == 404) {
                        Swal.fire(res.message, '', 'error')
                    } else {
                        Swal.fire(res.message, '', 'success')
                    }
                }
            });

            $("#parent-" + id).remove();
        } else if (result.isDenied) {

        }
    })

}

function removeCureFile(id, file_id, name) {
    Swal.fire({
        title: 'შეტყობინება',
        icon: 'info',
        html:
            'ნამდვილად გსურთ ფაილის წაშლა?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'დიახ',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'არა',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "core/backend/routes/remove.php",
                data: {
                    "id": id,
                    "file_id": file_id,
                    "remove_cure_file": "remove_cure_file"
                },
                success: function (data) {

                }
            });

            $("#parent-" + id).remove();
        } else if (result.isDenied) {

        }
    })

}

function removeDeseaseFile(id, file_id, name) {
    Swal.fire({
        title: 'შეტყობინება',
        icon: 'info',
        html:
            'ნამდვილად გსურთ ფაილის წაშლა?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'დიახ',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'არა',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "core/backend/routes/remove.php",
                data: {
                    "id": id,
                    "file_id": file_id,
                    "remove_desease_file": "remove_desease_file"
                },
                success: function (data) {
                    var res = JSON.parse(data);
                    if (res.status == 404) {
                        Swal.fire(res.message, '', 'error')
                    } else {
                        Swal.fire(res.message, '', 'success')
                    }
                }
            });

            $("#parent-" + id).remove();
        } else if (result.isDenied) {

        }
    })

}




function removeImmunizationFile(id, file_id, name) {
    Swal.fire({
        title: 'შეტყობინება',
        icon: 'info',
        html:
            'ნამდვილად გსურთ ფაილის წაშლა?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'დიახ',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'არა',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "core/backend/routes/remove.php",
                data: {
                    "id": id,
                    "file_id": file_id,
                    "remove_immunization_file": "remove_immunization_file"
                },
                success: function (data) {
                    Swal.fire('ფაილი წაშლილია!', '', 'success')
                }
            });

            $("#parent-" + id).remove();
        } else if (result.isDenied) {

        }
    })

}


function removePsyFile(id, file_id, name) {
    Swal.fire({
        title: 'შეტყობინება',
        icon: 'info',
        html:
            'ნამდვილად გსურთ ფაილის წაშლა?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'დიახ',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'არა',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "core/backend/routes/remove.php",
                data: {
                    "id": id,
                    "file_id": file_id,
                    "remove_psy_file": "remove_psy_file"
                },
                success: function (data) {
                    Swal.fire('ფაილი წაშლილია!', '', 'success')
                }
            });

            $("#parent-" + id).remove();
        } else if (result.isDenied) {

        }
    })

}

function removeMedicationsFile(id, file_id, name) {
    Swal.fire({
        title: 'შეტყობინება',
        icon: 'info',
        html:
            'ნამდვილად გსურთ ფაილის წაშლა?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'დიახ',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'არა',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "core/backend/routes/remove.php",
                data: {
                    "id": id,
                    "file_id": file_id,
                    "remove_medications_file": "remove_medications_file"
                },
                success: function (data) {
                    Swal.fire('ფაილი წაშლილია!', '', 'success')
                }
            });

            $("#parent-" + id).remove();
        } else if (result.isDenied) {

        }
    })

}

function removeOperationsFile(id, file_id, name) {
    Swal.fire({
        title: 'შეტყობინება',
        icon: 'info',
        html:
            'ნამდვილად გსურთ ფაილის წაშლა?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'დიახ',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'არა',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "core/backend/routes/remove.php",
                data: {
                    "id": id,
                    "file_id": file_id,
                    "remove_operations_file": "remove_operations_file"
                },
                success: function (data) {
                    Swal.fire('ფაილი წაშლილია!', '', 'success')
                }
            });

            $("#parent-" + id).remove();
        } else if (result.isDenied) {

        }
    })

}


function removeCommissionFileFirst(id, file_id) {

    Swal.fire({
        title: 'შეტყობინება',
        icon: 'info',
        html:
            'ნამდვილად გსურთ ფაილის წაშლა?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'დიახ',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'არა',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "core/backend/routes/remove.php",
                data: {
                    "id": id,
                    "file_id": file_id,
                    "remove_commission_first": "remove_commission_first"
                },
                success: function (data) {
                    Swal.fire('ფაილი წაშლილია!', '', 'success')
                }
            });

            $("#commissionfirst-" + id).remove();


        } else if (result.isDenied) {

        }
    })

}


function removeCommissionFileSecond(id, file_id) {

    Swal.fire({
        title: 'შეტყობინება',
        icon: 'info',
        html:
            'ნამდვილად გსურთ ფაილის წაშლა?',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'დიახ',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
            'არა',
        cancelButtonAriaLabel: 'Thumbs down'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "core/backend/routes/remove.php",
                data: {
                    "id": id,
                    "file_id": file_id,
                    "remove_commission_second": "remove_commission_second"
                },
                success: function (data) {
                    Swal.fire('ფაილი წაშლილია!', '', 'success')
                }
            });

            $("#commissionsecond-" + id).remove();


        } else if (result.isDenied) {

        }
    })

}


function getCureTable() {

    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#cure-table').dataTable().fnDestroy();
    $('#cure-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/cure.php?visit_id=" + visit_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "reg_date" },
            { "data": "reg_name" },
            { "data": "position" },
            { "data": "structure" },


        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });

    $('#cure-table tbody').on('dblclick', 'tr', function () {
        var table = $('#cure-table').DataTable();
        var data = table.row(this).data();
        addCure(data.id, 2);

    });

    $('#cure-table tbody').on('click', 'tr', function () {
        var table = $('#cure-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

}

function getProcedureCode() {

    if ($("#cure_id").val()) {
        var cure_id = $("#cure_id").val();
    } else {
        var cure_id = '';

    }
    $('#procedure-code-table').dataTable().fnDestroy();
    $('#procedure-code-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/procedure_code.php?cure_id=" + cure_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "procedure_code" },
            { "data": "procedure_cure" },
            { "data": "comment" },
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });
    $('#procedure-code-table tbody').on('dblclick', 'tr', function () {
        var table = $('#procedure-code-table').DataTable();
        var data = table.row(this).data();
        editProcedureCode(data.id, 2);
    });

    $('#procedure-code-table tbody').on('click', 'tr', function () {
        var table = $('#procedure-code-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}


function getCureMeet() {

    if ($("#cure_id").val()) {
        var cure_id = $("#cure_id").val();
    } else {
        var cure_id = '';

    }
    $('#cure-meet-table').dataTable().fnDestroy();
    $('#cure-meet-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/cure_meet.php?cure_id=" + cure_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "structural_unit" },
            { "data": "specialty" },
            { "data": "addressee_doctor" },
            { "data": "date_meeting" },
            { "data": "condition_meet" },
            { "data": "meeting_information" },
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });
    $('#cure-meet-table tbody').on('dblclick', 'tr', function () {
        var table = $('#cure-meet-table').DataTable();
        var data = table.row(this).data();
        editCureMeet(data.id, 2);
    });

    $('#cure-meet-table tbody').on('click', 'tr', function () {
        var table = $('#cure-meet-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}


function getClinicalLabTable() {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#clinical-lab-table').dataTable().fnDestroy();
    $('#clinical-lab-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "get",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/clinical_lab.php?visit_id=" + visit_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "reg_date" },
            { "data": "reg_name" },
            { "data": "position" },
            { "data": "structure" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#clinical-lab-table tbody').on('dblclick', 'tr', function () {
        var table = $('#clinical-lab-table').DataTable();
        var data = table.row(this).data();
        addClinicLab(data.id, 2);

    });

    $('#clinical-lab-table tbody').on('click', 'tr', function () {
        var table = $('#clinical-lab-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}


function getExamination() {
    if ($("#clinic_lab_id").val()) {
        var main_id = $("#clinic_lab_id").val();
    } else {
        var main_id = '';

    }
    $('#clinical-examination-table').dataTable().fnDestroy();
    $('#clinical-examination-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/examination.php?main_id=" + main_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "procedure_code" },
            { "data": "procedure_clinical" },
            { "data": "demanding_doctor" },
            { "data": "performer_doctor" },
            { "data": "demanding_date" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });
    $('#clinical-examination-table tbody').on('dblclick', 'tr', function () {
        var table = $('#clinical-examination-table').DataTable();
        var data = table.row(this).data();
        editExamination(data.id, 2);
    });

    $('#clinical-examination-table tbody').on('click', 'tr', function () {
        var table = $('#clinical-examination-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}


function getLabTests() {
    if ($("#clinic_lab_id").val()) {
        var main_id = $("#clinic_lab_id").val();
    } else {
        var main_id = '';

    }
    $('#laboratory-tests-table').dataTable().fnDestroy();
    $('#laboratory-tests-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/lab_tests.php?main_id=" + main_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "Test_type" },
            { "data": "Test_code" },
            { "data": "Test_date" },
            { "data": "Cyto" },
            { "data": "reg_name" },
            { "data": "position" },
            { "data": "structure" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });
    $('#laboratory-tests-table tbody').on('dblclick', 'tr', function () {
        var table = $('#laboratory-tests-table').DataTable();
        var data = table.row(this).data();
        editLabTests(data.id, 2);
    });

    $('#laboratory-tests-table tbody').on('click', 'tr', function () {
        var table = $('#laboratory-tests-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}

function getDoctorRecordTable() {

    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#doctor-duty-table').dataTable().fnDestroy();
    $('#doctor-duty-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/record_duty.php?visit_id=" + visit_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "reg_date" },
            { "data": "reg_name" },
            { "data": "position" },
            { "data": "structure" },


        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });

    $('#doctor-duty-table tbody').on('dblclick', 'tr', function () {
        var table = $('#doctor-duty-table').DataTable();
        var data = table.row(this).data();
        editDoctorRecord(data.id, 2);

    });

    $('#doctor-duty-table tbody').on('click', 'tr', function () {
        var table = $('#doctor-duty-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

}


function getPsychologicalTable() {

    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#psychological-table').dataTable().fnDestroy();
    $('#psychological-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/psychological.php?visit_id=" + visit_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "reg_date" },
            { "data": "reg_name" },
            { "data": "position" },
            { "data": "structure" },


        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });

    $('#psychological-table tbody').on('dblclick', 'tr', function () {
        var table = $('#psychological-table ').DataTable();
        var data = table.row(this).data();
        addPsychology(data.id, 2);

    });

    $('#psychological-table tbody').on('click', 'tr', function () {
        var table = $('#psychological-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

}


function getOperationsTable() {

    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#opetaions-table').dataTable().fnDestroy();
    $('#opetaions-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/operations.php?visit_id=" + visit_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "protocol_number" },
            { "data": "card_number" },
            { "data": "operation_complete" },
            { "data": "intraoperative_diagnosis" },
            { "data": "operation_date" },
            { "data": "reg_name" },
            { "data": "position" },
            { "data": "structure" },


        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });

    $('#opetaions-table tbody').on('dblclick', 'tr', function () {
        var table = $('#opetaions-table ').DataTable();
        var data = table.row(this).data();
        addOperations(data.id, 2);

    });

    $('#opetaions-table tbody').on('click', 'tr', function () {
        var table = $('#opetaions-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

}


function getImmunizationTable() {

    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#immunization-table').dataTable().fnDestroy();
    $('#immunization-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/immunization.php?visit_id=" + visit_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "vaccine" },
            { "data": "create_date" },
            { "data": "revaccination" },
            { "data": "contraindications" },
            { "data": "patient_rejection" },
            { "data": "reg_name" },
            { "data": "position" },
            { "data": "structure" },


        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });

    $('#immunization-table tbody').on('dblclick', 'tr', function () {
        var table = $('#immunization-table ').DataTable();
        var data = table.row(this).data();
        addImmunization(data.id, 2);

    });

    $('#immunization-table tbody').on('click', 'tr', function () {
        var table = $('#immunization-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

}


function getMedicationsTable() {

    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#medications-table').dataTable().fnDestroy();
    $('#medications-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/medications.php?visit_id=" + visit_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "reg_date" },
            { "data": "reg_name" },
            { "data": "position" },
            { "data": "structure" },


        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });

    $('#medications-table tbody').on('dblclick', 'tr', function () {
        var table = $('#medications-table ').DataTable();
        var data = table.row(this).data();
        addMedications(data.id, 2);

    });

    $('#medications-table tbody').on('click', 'tr', function () {
        var table = $('#medications-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

}


function getMedicationMedsTable() {
    var medications_id = $("#medications_id").val();
    if (medications_id) {
    }
    else {
        medications_id = '';
    }
    $('#medications-meds-table').dataTable().fnDestroy();
    $('#medications-meds-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/medications_med.php?medications_id=" + medications_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "product_id" },
            { "data": "issuance_type" },
            { "data": "dosage_form" },
            { "data": "units_measurement" },
            { "data": "quantity" },
            { "data": "receipt_form" },

        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#medications-meds-table tbody').on('dblclick', 'tr', function () {
        var table = $('#medications-meds-table').DataTable();
        var data = table.row(this).data();
        EditMedicaitonMeds(data.id, 2);

    });

    $('#medications-meds-table tbody').on('click', 'tr', function () {
        var table = $('#medications-meds-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}


function reabilitationTable(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/visit-abuse.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#abuse-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#reabilitation-table').dataTable().fnDestroy();
                $('#reabilitation-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "GET",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/reabilitation.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                        { "data": "record" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });


                $('#reabilitation-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#reabilitation-table').DataTable();
                    var data = table.row(this).data();
                    addReabilitation(data.id, data.type, 2);

                });

                $('#reabilitation-table tbody').on('click', 'tr', function () {
                    var table = $('#reabilitation-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);


        }
    });
}


function reabilitationDailyList(id) {
    var daily_final_records_id = "";
    if (id != "reabilitation-records-tab-link") {
        daily_final_records_id = id;
    }
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/visit-abuse.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#abuse-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#reabilitation-records-table').dataTable().fnDestroy();
                $('#reabilitation-records-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "GET",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/daily_final_modal.php?daily_final_records_id=" + daily_final_records_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "entry_date" },
                        { "data": "subjective" },
                        { "data": "objective" },
                        { "data": "conducted_procedure" },
                        { "data": "further_plan" },
                        { "data": "exit_plan_date" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });


                $('#reabilitation-records-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#reabilitation-records-table').DataTable();
                    var data = table.row(this).data();
                    editReabilitationDaily(data.id, 2);

                });

                $('#reabilitation-records-table tbody').on('click', 'tr', function () {
                    var table = $('#reabilitation-records-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);


        }
    });
}

function DeseaseDiagnoseTable(id) {
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $.ajax({
        type: "POST",
        url: "pages/components/visit/tabs/visit-abuse.php",
        data: {
            "id": id
        },
        success: function (data) {
            $("#abuse-tab-content").html(data);
            $("#main-load-div").css("display", "block");
            setTimeout(function () {
                $('#disease-diagnosis-table').dataTable().fnDestroy();
                $('#disease-diagnosis-table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": false,
                    "serverMethod": "GET",
                    "autoWidth": false,
                    "lengthMenu": [10, 20, 30, 40],
                    "deferRender": true,
                    "searching": false,
                    "ajax": {
                        "url": "core/data/diagnose.php?visit_id=" + visit_id
                    },
                    "order": [[0, "desc"]],
                    "columns": [
                        { "data": "reg_date" },
                        { "data": "reg_name" },
                        { "data": "position" },
                        { "data": "structure" },
                        { "data": "record" },
                    ],
                    "language": {
                        "lengthMenu": "",
                        "loadingRecords": "მინდინარეობს ჩატვირთვა...",
                        "zeroRecords": "ინფორმაცია არ არის",
                        "info": " ",
                        "infoEmpty": "",
                        "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
                        "infoFiltered": "",
                        "search": "ძებნა:",
                        "paginate": {
                            "first": "პირველი",
                            "last": "ბოლო",
                            "next": "შემდეგი",
                            "previous": "უკან"
                        }
                    }
                });


                $('#disease-diagnosis-table tbody').on('dblclick', 'tr', function () {
                    var table = $('#disease-diagnosis-table').DataTable();
                    var data = table.row(this).data();
                    addDiagnose(data.id, data.type, 2);

                });

                $('#disease-diagnosis-table tbody').on('click', 'tr', function () {
                    var table = $('#disease-diagnosis-table').DataTable();
                    if ($(this).hasClass('selected')) {
                        $(this).removeClass('selected');
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                    }
                });
                $("#main-load-div").css("display", "none");
            }, 500);


        }
    });
}





function DiagnoseTypeTable(id) {

    if (id != 'diagnose-main-info-id' && id != 'diagnose-record-tab-link' && id != 'diagnose-military-tab-link' && id != 'military-info-tab-link' && id != 'add-diagnose-id') {
        var info_id = id;
    }
    else {
        var info_id = '';
    }
    $('#diagnose-type-table').dataTable().fnDestroy();
    $('#diagnose-type-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/diagnose_type.php?info_id=" + info_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "type_of_diagnosis" },
            { "data": "diagnos_disease_id" },
            { "data": "diagnos_code" },
            { "data": "create_date" },
            { "data": "diagnos_type_text" },
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#diagnose-type-table tbody').on('dblclick', 'tr', function () {
        var table = $('#diagnose-type-table').DataTable();
        var data = table.row(this).data();
        editDiagnoseType(data.id, 2);

    });

    $('#diagnose-type-table tbody').on('click', 'tr', function () {
        var table = $('#diagnose-type-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}



function DiagnoseRecipient(id) {

    if (id != 'diagnose-main-info-id' && id != 'diagnose-record-tab-link' && id != 'diagnose-military-tab-link' && id != 'military-info-tab-link' && id != 'add-diagnose-id') {
        var info_id = id;
    }
    else {
        var info_id = '';
    }
    $('#diagnose-recipient-table').dataTable().fnDestroy();
    $('#diagnose-recipient-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/diagnosis_recipient.php?info_id=" + info_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "name_surname" },
            { "data": "structure" },
            { "data": "date" },
            { "data": "additional_information" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#diagnose-recipient-table tbody').on('dblclick', 'tr', function () {
        var table = $('#diagnose-recipient-table').DataTable();
        var data = table.row(this).data();
        editDiagnoseRecipient(data.id, 2);

    });

    $('#diagnose-recipient-table tbody').on('click', 'tr', function () {
        var table = $('#diagnose-recipient-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}


function DiagnoseMeet(id) {

    if (id != 'diagnose-main-info-id' && id != 'diagnose-record-tab-link' && id != 'diagnose-military-tab-link' && id != 'military-info-tab-link' && id != 'add-diagnose-id') {
        var info_id = id;
    }
    else {
        var info_id = '';
    }
    $('#diagnose-meet-table').dataTable().fnDestroy();
    $('#diagnose-meet-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/diagnosis_meet.php?info_id=" + info_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "structure_appeal" },
            { "data": "specialist" },
            { "data": "addressee_doctor" },
            { "data": "condition" },
            { "data": "clinic" },
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#diagnose-meet-table tbody').on('dblclick', 'tr', function () {
        var table = $('#diagnose-meet-table').DataTable();
        var data = table.row(this).data();
        editDiagnoseMeet(data.id, data.type, 2);

    });

    $('#diagnose-meet-table tbody').on('click', 'tr', function () {
        var table = $('#diagnose-meet-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}



function ImportantTable(id) {
    var information_id = "";
    if (id != "military-info-tab-link") {
        information_id = id;
    }
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#important-table').dataTable().fnDestroy();
    $('#important-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/important.php?information_id=" + information_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "information_text" },
            { "data": "information_date" },
            { "data": "doctor_id" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#important-table tbody').on('dblclick', 'tr', function () {
        var table = $('#important-table').DataTable();
        var data = table.row(this).data();
        editImportant(data.id, 2);

    });

    $('#important-table tbody').on('click', 'tr', function () {
        var table = $('#important-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}



function DiagnoseHealthTable(id) {
    var records_id = "";
    if (id != "diagnose-record-tab-link") {
        records_id = id;
    }
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#diagnose-health-table').dataTable().fnDestroy();
    $('#diagnose-health-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/diagnose_health.php?records_id=" + records_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "health_date" },
            { "data": "state_of_health" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#diagnose-health-table tbody').on('dblclick', 'tr', function () {
        var table = $('#diagnose-health-table').DataTable();
        var data = table.row(this).data();
        editDiagnoseHealth(data.id, 2);

    });

    $('#diagnose-health-table tbody').on('click', 'tr', function () {
        var table = $('#diagnose-health-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}


function DiagnoseDestinationTable(id) {
    var records_id = "";
    if (id != "diagnose-record-tab-link") {
        records_id = id;
    }
    var visit_id = $("#abuse-tab-link").attr("data-visit-id");
    $('#diagnose-destination-table').dataTable().fnDestroy();
    $('#diagnose-destination-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": false,
        "serverMethod": "GET",
        "autoWidth": false,
        "lengthMenu": [10, 20, 30, 40],
        "deferRender": true,
        "searching": false,
        "ajax": {
            "url": "core/data/destination.php?records_id=" + records_id
        },
        "order": [[0, "desc"]],
        "columns": [
            { "data": "consultation_date" },
            { "data": "record_text" },
            { "data": "consultation_destination" }
        ],
        "language": {
            "lengthMenu": "",
            "loadingRecords": "მინდინარეობს ჩატვირთვა...",
            "zeroRecords": "ინფორმაცია არ არის",
            "info": " ",
            "infoEmpty": "",
            "loadingRecords": "მიმდინარეობს ჩატვირთვა...",
            "infoFiltered": "",
            "search": "ძებნა:",
            "paginate": {
                "first": "პირველი",
                "last": "ბოლო",
                "next": "შემდეგი",
                "previous": "უკან"
            }
        }
    });


    $('#diagnose-destination-table tbody').on('dblclick', 'tr', function () {
        var table = $('#diagnose-destination-table').DataTable();
        var data = table.row(this).data();
        editDiagnoseDestination(data.id, 2);

    });

    $('#diagnose-destination-table tbody').on('click', 'tr', function () {
        var table = $('#diagnose-destination-table').DataTable();
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}

