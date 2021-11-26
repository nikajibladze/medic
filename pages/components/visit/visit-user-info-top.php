<?php if (isset($_POST["id"])) {
    $id = $_POST["id"];

} else {
    http_response_code(404);
    header('location:http://medical.ge/404.php');
    die;
}?>
<ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="personal-tab-link" onclick="getVisitPersonal(<?=$id?>)" data-toggle="tab"
            data-visit-id="" href="#personal-tab-content" aria-controls="active1" role="tab"
            aria-selected="true">პირადი ინფორმაცია</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="abuse-tab-link" onclick="getVisitAbuse(this.id)" data-toggle="tab"
            href="#abuse-tab-content" data-visit-id="" aria-controls="link1" role="tab"
            aria-selected="false">ჩივილები/ანამნეზი</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="objective-tab-link" data-toggle="tab" onclick="getVisitObjective(this.id)"
            data-visit-id="" href="#objective-tab-content" aria-controls="linkOpt1">ობიექტური მონაცემები</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="clinic-lab-id" onclick="getClinicLab(this.id)" data-toggle="tab" data-visit-id=""
            href="#clinic-lab-tab-content" aria-controls="linkOpt1">კლინიკო-ლაბორატორიული გამოკვლევები</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="diagnose-tab-link" onclick="getDiagnose(this.id)" data-toggle="tab" data-visit-id=""
            href="#diagnose-tab-content" aria-controls="linkOpt1">დაავადება/დიაგნოზი</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="reabilitation-tab-link" onclick="getReabilitation(this.id)" data-visit-id=""
            data-toggle="tab" href="#reabilitation-tab-content" aria-controls="linkOpt1">რეაბილიტაცია</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="cure-tab-link" onclick="getCure(this.id)" data-toggle="tab" data-visit-id=""
            href="#cure-tab-content" aria-controls="linkOpt1">მკურნალობა</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="medications-tab-link" onclick="getMedications(this.id)" data-visit-id=""
            data-toggle="tab" href="#medications-tab-content" aria-controls="linkOpt1">მედიკამენტები</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="immunization-tab-link" onclick="getImmunization(this.id)" data-visit-id=""
            data-toggle="tab" href="#immunization-tab-content" aria-controls="linkOpt1">იმუნიზაცია</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="psychology-tab-link" onclick="getPsychology(this.id)" data-visit-id=""
            data-toggle="tab" href="#psychology-tab-content" aria-controls="linkOpt1">ფსიქოლოგიური შემოწმება</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="operations-tab-link" onclick="getOperations(this.id)" data-visit-id=""
            data-toggle="tab" href="#operations-tab-content" aria-controls="linkOpt1">ოპერაციები</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="doctor-tab-link" onclick="getDoctorRecord(this.id)" data-visit-id="" data-toggle="tab"
            href="#doctor-tab-content" aria-controls="linkOpt1">მორიგე ექიმის ჩანაწერი</a>
    </li>
</ul>
<input type="hidden" id="user_id">