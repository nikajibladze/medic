<?php if (isset($_POST["id"])) {
    $id = $_POST["id"];

} else {
    http_response_code(404);
    header('location:http://medical.ge/404.php');
    die;
}?>
<div class="tab-content px-1">
							<div class="tab-pane in active" id="personal-tab-content" aria-labelledby="active-tab1" role="tabpanel">

							</div>
							<div class="tab-pane" id="abuse-tab-content" aria-labelledby="link-tab1" role="tabpanel">

							</div>
							<div class="tab-pane" id="objective-tab-content" aria-labelledby="dropdownOpt1-tab1" role="tabpanel">

                        </div>
							<div class="tab-pane" id="clinic-lab-tab-content" aria-labelledby="dropdownOpt2-tab1" role="tabpanel">

							</div>
							<div class="tab-pane" id="diagnose-tab-content" aria-labelledby="linkOpt-tab1" role="tabpanel">

							</div>

							<div class="tab-pane" id="reabilitation-tab-content" aria-labelledby="linkOpt-tab1" role="tabpanel">

							</div>

							<div class="tab-pane" id="cure-tab-content" aria-labelledby="linkOpt-tab1" role="tabpanel">

							</div>
							<div class="tab-pane" id="medications-tab-content" aria-labelledby="linkOpt-tab1" role="tabpanel">

							</div>
							<div class="tab-pane" id="immunization-tab-content" aria-labelledby="linkOpt-tab1" role="tabpanel">

								</div>

								<div class="tab-pane" id="psychology-tab-content" aria-labelledby="linkOpt-tab1" role="tabpanel">

								</div>
								<div class="tab-pane" id="operations-tab-content" aria-labelledby="linkOpt-tab1" role="tabpanel">

								</div>

								<div class="tab-pane" id="doctor-tab-content" aria-labelledby="linkOpt-tab1" role="tabpanel">

								</div>


						</div>
