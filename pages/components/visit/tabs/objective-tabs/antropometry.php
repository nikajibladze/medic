<?php if (isset($_POST["id"])) {
    $id = $_POST["id"];

} else {
    http_response_code(404);
    header('location:http://medical.ge/404.php');
    die;
}?>
<br>
<button type="button" id="add-antropometry" onclick="addAntropometry(this.id)"
    class="btn btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-plus"></i> ჩანაწერის დამატება</button>


<table class="table table-striped table-bordered" id="antropometry-table">
    <thead>
        <tr>
            <th>შექმნის თარიღი</th>
            <th>წონა (კგ)</th>
            <th>სიმაღლე (სმ)</th>
            <th>მუცლის გარშემოწერილობა(სმ)</th>
            <th>ექიმი</th>
            <th>სტრუქტურული ერთეული</th>

        </tr>
    </thead>
    <tbody>



    </tbody>
</table>
