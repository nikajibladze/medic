		     <!-- users edit media object start -->
		     <div class="media mb-2 animate__animated animate__fadeIn">
		         <a class="mr-2" href="#" onclick="prevent(event)">
		             <img src="app-assets/images/portrait/small/avatar-s-27.png" alt="users avatar"
		                 class="users-avatar-shadow rounded-circle" height="64" width="64">
		         </a>
		         <div class="media-body">
		             <h4 class="media-heading">პიროვნების სამედიცინო ვიზიტები</h4>
		             <div class="col-12 px-0 d-flex">
		                 <a href="#" onclick="prevent(event)" id="top-name" class="btn btn-sm btn-primary mr-25">სახელი
		                     გვარი</a>
		                 <a href="#" onclick="prevent(event)" class="btn btn-sm btn-secondary" id="visit_number"> </a>&nbsp;
		                 <div onclick="getHistory(this.id)" class="btn btn-sm btn-warning mr-25" id="history-id">ისტორია
		                 </div>

		             </div>


		         </div>
		     </div>
		     <!-- users edit media object ends -->
		     <!-- users edit account form start -->
		     <form novalidate="">
		         <div class="row animate__animated animate__fadeIn">
		             <div class="col-4">
		                 <div class="form-group">
		                     <div class="controls">
		                         <label>ისტორიის ნომერი</label>
		                         <input type="text" class="form-control" placeholder="ისტორიის ნომერი" value="" required=""
		                             data-validation-required-message="This username field is required">
		                         <div class="help-block"></div>
		                     </div>
		                 </div>
		             </div>

		             <div class="col-4">
		                 <div class="form-group">
		                     <div class="controls">
		                         <label>სამედიცინო ვიზიტის ნომერი</label>
		                         <input type="text" class="form-control" id="visit_id" placeholder="სამედიცინო ვიზიტის ნომერი"
		                             value="" required="" data-validation-required-message="This username field is required">
		                         <div class="help-block"></div>
		                     </div>
		                 </div>
		             </div>

		             <div class="col-4">
		                 <div class="form-group">
		                     <div class="controls">
		                         <label>მკურნალი ექიმი</label>
		                         <input type="text" class="form-control" placeholder="მკურნალი ექიმი" value="" required="">
		                         <div class="help-block"></div>
		                     </div>
		                 </div>
		             </div>

		             <div class="col-4">
		                 <div class="form-group">
		                     <label>მორიგე ექიმი</label>
		                     <select class="form-control select2" name="doctor_new[]" multiple="multiple">
		                         <option>ექიმი 1</option>
		                         <option>ექიმი 2</option>
		                         <option>ექიმი 3</option>
		                     </select>
		                 </div>
		             </div>

		             <div class="col-4">
		                 <div class="form-group">
		                     <label>ექიმი სპეციალისტი</label>
		                     <select class="form-control select2" multiple="multiple">
		                         <option>ექიმი 1</option>
		                         <option>ექიმი 2</option>
		                         <option>ექიმი 3</option>
		                     </select>
		                 </div>
		             </div>

		             <div class="col-4">
		                 <div class="form-group ">
		                     <label>ექიმზე გადამისამართება</label>
		                     <select class="form-control select2">
		                         <option>ექიმი 1</option>
		                         <option>ექიმი 2</option>
		                         <option>ექიმი 3</option>
		                     </select>
		                 </div>
		             </div>

		             <div class="col-4">
		                 <div class="form-group">
		                     <label>სტატუსი</label>
		                     <select class="form-control">
		                         <option value=""></option>
		                         <option value="1">აქტიური</option>
		                         <option value="2">დასრულებული</option>

		                     </select>
		                 </div>
		             </div>

		             <div class="col-12">
		                 <h4 class="form-section"><i class="fa fa-user"></i> პირადი მონაცემები</h4>
		             </div>






		             <div class="col-4">
		                 <div class="form-group">
		                     <div class="controls">
		                         <label>პირადი ნომერი</label>
		                         <input type="number" class="form-control" placeholder="პირადი ნომერი" id="personal_id"
		                             onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;" value=""
		                             required="" data-validation-required-message="This username field is required">
		                         <div class="help-block"></div>
		                     </div>
		                 </div>
		             </div>


		             <div class="col-4">
		                 <div class="form-group">
		                     <div class="controls">
		                         <label>სახელი</label>
		                         <input type="text" class="form-control" placeholder="სახელი" id="firstname" value="">
		                         <div class="help-block"></div>
		                     </div>
		                 </div>
		             </div>
		             <div class="col-4">
		                 <div class="form-group">
		                     <div class="controls">
		                         <label>გვარი</label>
		                         <input type="text" class="form-control" placeholder="გვარი" id="lastname" value="">
		                         <div class="help-block"></div>
		                     </div>
		                 </div>
		             </div>

		             <div class="col-4">
		                 <div class="form-group">
		                     <div class="controls">
		                         <label>დაბადების თარიღი</label>
		                         <input type="text" class="form-control datepicker" id="personal_birth_date" name="birth_date" placeholder="დაბადების თარიღი" value="">
		                         <div class="help-block"></div>
		                     </div>
		                 </div>
		             </div>

		             <div class="col-4">
		                 <div class="form-group">
		                     <label>სისხლის ჯგუფი</label>
		                     <select class="form-control select2" id="blood_groops">
		                         <option value="">სისხლის ჯგუფი</option>

		                     </select>
		                 </div>
		             </div>


		             <div class="col-4">
		                 <div class="form-group">
		                     <div class="controls">
		                         <label>დაზღვევა</label>
		                         <input type="text" class="form-control" placeholder="დაზღვევა" value="">
		                         <div class="help-block"></div>
		                     </div>
		                 </div>
		             </div>




		             <div class="col-4">
		                 <div class="form-group">
		                     <label>სქესი</label>
		                     <select class="form-control" name="gender" id="personal_gender">
		                         <option value=""></option>
		                         <option value="1">მამრობითი</option>
		                         <option value="2">მდედრობითი</option>

		                     </select>
		                 </div>
		             </div>



		             <div class="col-4">
		                 <div class="form-group">
		                     <label>რეზუსი</label>
		                     <select class="form-control" id="personal_rhesus" name="rhesus">
		                         <option value=""></option>
		                         <option value="1">რეზუსი 1</option>
		                         <option value="2">რეზუსი 2</option>

		                     </select>
		                 </div>
		             </div>


		             <div class="col-4">
		                 <div class="form-group">
		                     <div class="controls">
		                         <label>პოლისის ნომერი</label>
		                         <input type="text" class="form-control" placeholder="პოლისის ნომერი" value="" required=""
		                             data-validation-required-message="This name field is required">
		                         <div class="help-block"></div>
		                     </div>
		                 </div>
		             </div>



		             <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
		                 <button type="button" onclick="updateVisit(this.id)" id="update-visit"
		                     class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"><i class="fa fa-edit"
		                         aria-hidden="true"></i> შენახვა</button>
		                 <button type="button" class="btn btn-light" id="cancel-visit-info" onclick="getVisit(this.id)"><i
		                         class="fa fa-ban" aria-hidden="true"></i> გაუქმება</button>
		             </div>
		         </div>
		     </form>


		     <script>

		     </script>
