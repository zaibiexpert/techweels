 <form id="inspection_form" class="px-md-2 make_pdf">
     <input type="hidden" name="update_inspection_id" value="<?php echo $update_inspection_id; ?>" />
     <div class="mb-4 row">
         <h3 class="mb-5">PRELIMINARY INFORMATION</h3>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="username">Client Name</label>
                 <input type="text" id="client_name" name="username" class="form-control" value="<?php echo $previous_username; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="vehicle_name">Vehicle Make</label>
                 <input type="text" id="vehicle_name" name="vehicle_name" class="form-control" value="<?php echo $previous_vehicle_name; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="email">Email</label>
                 <input type="text" id="email" name="email" class="form-control" value="<?php echo $previous_email; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="phone">Phone</label>
                 <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $previous_phone; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="city">Inspection Location</label>
                 <input type="text" id="city" name="city" class="form-control" value="<?php echo $previous_city; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="date">Inspection Date</label>
                 <input type="date" id="date" name="date" class="form-control" value="<?php echo $previous_date; ?>" />
             </div>
         </div>
     </div>

     <div class="mb-4 row">
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="vehicle_model">Vehicle Model</label>
                 <input type="text" id="vehicle_model" name="vehicle_model" class="form-control" value="<?php echo $previous_vehicle_model; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="vehicle_variant">Vehicle Variant</label>
                 <input type="text" id="vehicle_variant" name="vehicle_variant" class="form-control" value="<?php echo $previous_vehicle_variant; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="model_year">Model Year</label>
                 <input type="text" id="model_year" name="model_year" class="form-control" value="<?php echo $previous_model_year; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="transmission">Transmission</label>
                 <input type="text" id="transmission" name="transmission" class="form-control" value="<?php echo $previous_transmission; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="engine_capacity">Engine Capacity</label>
                 <input type="text" id="engine_capacity" name="engine_capacity" class="form-control" value="<?php echo $previous_engine_capacity; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="fuel_type">Fuel Type</label>
                 <input type="text" id="fuel_type" name="fuel_type" class="form-control" value="<?php echo $previous_fuel_type; ?>" />
             </div>
         </div>
     </div>

     <div class="mb-4 row">
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="body_color">Body Color</label>
                 <input type="text" id="body_color" name="body_color" class="form-control" value="<?php echo $previous_body_color; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="mileage">Mileage</label>
                 <input type="text" id="mileage" name="mileage" class="form-control" value="<?php echo $previous_mileage; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="registration_number">Registration
                     Number</label>
                 <input type="text" id="registration_number" name="registration_number" class="form-control" value="<?php echo $previous_registration_number; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="registered_city">Registered City</label>
                 <input type="text" id="registered_city" name="registered_city" class="form-control" value="<?php echo $previous_registered_city; ?>" />
             </div>
         </div>
         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="chassis_number">Chassis Number</label>
                 <input type="text" id="chassis_number" name="chassis_number" class="form-control" value="<?php echo $previous_chassis_number; ?>" />
             </div>
         </div>

         <div class="col-lg-2 md-6">
             <div class="">
                 <label class="form-label" for="engine_number">Engine Number</label>
                 <input type="text" id="engine_number" name="engine_number" class="form-control" value="<?php echo $previous_engine_number; ?>" />
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14 mt-3 mb-0">Car Front Image</label>
             <div class="card-body">
                 <div id="car_front_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

     </div>

     <div class='row mb-4 mt-5'>
         <div class='col-lg-12 col-sm-12'>
             <h3 class='text-uppercase'>Accidental Checklist</h3>
         </div>
     </div>

     <div class='row'>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Engine Room Firewall</label> <br />
             <select id="engine_Room" class="form-control" name="engineRoom">
                 <option value="Non Accidented" <?php echo ($previous_engineRoom === 'No Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_engineRoom === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Front Underbody</label> <br />
             <select id="front_Under_body" class="form-control" name="frontUnderbody">
                 <option value="Non Accidented" <?php echo ($previous_frontUnderbody === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_frontUnderbody === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>

             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Radiator Core Support</label> <br />
             <select id="radiator_Core_Support" class="form-control" name="radiatorCoreSupport">
                 <option value="Non Accidented" <?php echo ($previous_radiatorCoreSupport === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_radiatorCoreSupport === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Left Front Rail</label> <br />
             <select id="left_Front_Rail" class="form-control" name="leftFrontRail">
                 <option value="Non Accidented" <?php echo ($previous_leftFrontRail === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_leftFrontRail === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Left Strut Tower</label> <br />
             <select id="left_Strut_Tower" class="form-control" name="leftStrutTower">
                 <option value="Non Accidented" <?php echo ($previous_leftStrutTower === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_leftStrutTower === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>

             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Right Front Rail</label> <br />
             <select id="right_Front_Rail" class="form-control" name="rightFrontRail">
                 <option value="Non Accidented" <?php echo ($previous_rightFrontRail === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_rightFrontRail === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Right Strut Tower</label> <br />
             <select id="right_Strut_Tower" class="form-control" name="rightStrutTower">
                 <option value="Non Accidented" <?php echo ($previous_rightStrutTower === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_rightStrutTower === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>
             </select>
         </div>




         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Right A Pillar</label> <br />
             <select id="right_A_pillar" class="form-control" name="rightApillar">
                 <option value="Non Accidented" <?php echo ($previous_rightApillar === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_rightApillar === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>

             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Right B Pillar</label> <br />
             <select id="right_B_pillar" class="form-control" name="rightBpillar">
                 <option value="Non Accidented" <?php echo ($previous_rightBpillar === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_rightBpillar === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>

             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Right C Pillar</label> <br />
             <select id="right_C_pillar" class="form-control" name="rightCpillar">
                 <option value="Non Accidented" <?php echo ($previous_rightCpillar === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_rightCpillar === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Right D Pillar</label> <br />
             <select id="right_D_pillar" class="form-control" name="rightDpillar">
                 <option value="Non Accidented" <?php echo ($previous_rightDpillar === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_rightDpillar === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>

             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Rear Underbody</label> <br />
             <select id="rear_Under_body" class="form-control" name="rearUnderbody">
                 <option value="Non Accidented" <?php echo ($previous_rearUnderbody === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_rearUnderbody === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Boot Floor</label> <br />
             <select id="boot_Floor" class="form-control" name="bootFloor">
                 <option value="Non Accidented" <?php echo ($previous_bootFloor === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_bootFloor === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>

             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Left B Pillar</label> <br />
             <select id="left_B_pillar" class="form-control" name="leftBpillar">
                 <option value="Non Accidented" <?php echo ($previous_leftBpillar === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_leftBpillar === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Left C Pillar</label> <br />
             <select id="left_C_pillar" class="form-control" name="leftCpillar">
                 <option value="Non Accidented" <?php echo ($previous_leftCpillar === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_leftCpillar === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>

             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Left D Pillar</label> <br />
             <select id="left_D_pillar" class="form-control" name="leftDpillar">
                 <option value="Non Accidented" <?php echo ($previous_leftDpillar === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_leftDpillar === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>


             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Left A Pillar</label> <br />
             <select id="left_A_pillar" class="form-control" name="leftApillar">
                 <option value="Non Accidented" <?php echo ($previous_leftApillar === 'Non Accidented') ? 'selected' : ''; ?>>
                     No Accidented</option>
                 <option value="Accidented" <?php echo ($previous_leftApillar === 'Accidented') ? 'selected' : ''; ?>>
                     Accidented</option>
             </select>
         </div>

         <div class="row mt-3">
             <div class="col-lg-3">
                 <label class="fs-14">ACCIDENTAL CHECKLIST Images</label>
                 <div class="card-body">
                     <div id="accidental_images_picker" class="row"></div>
                     <div id="preview-container"></div>
                 </div>
             </div>
         </div>
     </div>

     <div class='row'>
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>Mechanical Functions</h3>
         </div>
     </div>
     <div class='row'>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Engine Oil Leakage</label> <br />
             <select id="engine_oil_leakage" class="form-control" name="engine_oil_leakage">
                 <option value="No" <?php echo ($previous_engine_oil_leakage === 'No') ? 'selected' : ''; ?>>No
                 </option>
                 <option value="Yes" <?php echo ($previous_engine_oil_leakage === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Transmission Oil Leakage</label> <br />
             <select id="transmission_Oil_Leakage" class="form-control" name="transmissionOilLeakage">
                 <option value="No" <?php echo ($previous_transmissionOilLeakage === 'No') ? 'selected' : ''; ?>>
                     No</option>
                 <option value="Yes" <?php echo ($previous_transmissionOilLeakage === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Brake Oil Leakage</label> <br />
             <select id="brake_Oil_Leakage" class="form-control" name="brakeOilLeakage">
                 <option value="No" <?php echo ($previous_brakeOilLeakage === 'No') ? 'selected' : ''; ?>>
                     No</option>
                 <option value="Yes" <?php echo ($previous_brakeOilLeakage === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Radiator</label> <br />
             <select id="radiator" class="form-control" name="radiator">
                 <option value="Normal" <?php echo ($previous_radiator === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Good" <?php echo ($previous_radiator === 'Not Good') ? 'selected' : ''; ?>>
                     Not Good</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Suction Fan</label> <br />
             <select id="suction_Fan" class="form-control" name="suctionFan">
                 <option value="Normal" <?php echo ($previous_suctionFan === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Good" <?php echo ($previous_suctionFan === 'Not Good') ? 'selected' : ''; ?>>
                     Not Good</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Exhaust Sound</label> <br />
             <select id="exhaust_Sound" class="form-control" name="exhaustSound">
                 <option value="Normal" <?php echo ($previous_exhaustSound === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Good" <?php echo ($previous_exhaustSound === 'Not Good') ? 'selected' : ''; ?>>
                     Not Good</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Engine Blow</label> <br />
             <select id="engine_Blow" class="form-control" name="engineBlow">
                 <option value="Not Present" <?php echo ($previous_engineBlow === 'Not Present') ? 'selected' : ''; ?>>
                     Not Present</option>
                 <option value="No" <?php echo ($previous_engineBlow === 'No') ? 'selected' : ''; ?>>No
                 </option>
                 <option value="Yes" <?php echo ($previous_engineBlow === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Engine Noisy</label> <br />
             <select id="engine_Noisy" class="form-control" name="engineNoisy">
                 <option value="No" <?php echo ($previous_engineNoisy === 'No') ? 'selected' : ''; ?>>No
                 </option>
                 <option value="Yes" <?php echo ($previous_engineNoisy === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
                 <option value="Not Present" <?php echo ($previous_engineNoisy === 'Not Present') ? 'selected' : ''; ?>>
                     Not Present</option>
                 <option value="Normal Sound" <?php echo ($previous_engineNoisy === 'Normal Sound') ? 'selected' : ''; ?>>
                     Normal Sound</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Engine Vibrations</label> <br />
             <select id="engine_Vibration" class="form-control" name="engineVibration">
                 <option value="No" <?php echo ($previous_engineVibration === 'No') ? 'selected' : ''; ?>>
                     No</option>
                 <option value="Yes" <?php echo ($previous_engineVibration === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
                 <option value="Normal Sound" <?php echo ($previous_engineVibration === 'Normal Sound') ? 'selected' : ''; ?>>
                     Normal Sound</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Engine Smoke</label> <br />
             <select id="engine_Smoke" class="form-control" name="engineSmoke">
                 <option value="No" <?php echo ($previous_engineSmoke === 'No') ? 'selected' : ''; ?>>No
                 </option>
                 <option value="Yes" <?php echo ($previous_engineSmoke === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Engine Smoke Color</label> <br />
             <select id="engine_Smoke_Color" class="form-control" name="engineSmokeColor">
                 <option value="N/A" <?php echo ($previous_engineSmokeColor === 'N/A') ? 'selected' : ''; ?>>
                     N/A</option>
                 <option value="No" <?php echo ($previous_engineSmokeColor === 'No') ? 'selected' : ''; ?>>
                     No</option>
                 <option value="Yes" <?php echo ($previous_engineSmokeColor === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Coolant Leakage</label> <br />
             <select id="coolant_Leakage" class="form-control" name="coolantLeakage">
                 <option value="No" <?php echo ($previous_coolantLeakage === 'No') ? 'selected' : ''; ?>>
                     No</option>
                 <option value="Yes" <?php echo ($previous_coolantLeakage === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Gear Transmission</label> <br />
             <select id="gear_Transmission" class="form-control" name="gearTransmission">
                 <option value="Smooth" <?php echo ($previous_gearTransmission === 'Smooth') ? 'selected' : ''; ?>>
                     Smooth</option>
                 <option value="Not Good" <?php echo ($previous_gearTransmission === 'Not Good') ? 'selected' : ''; ?>>
                     Not Good</option>
             </select>
         </div>
     </div>

     <div class="row mt-3">
         <div class="col-lg-3">
             <label class="fs-14">MECHANICAL FUNCTIONS Images</label>
             <div class="card-body">
                 <div id="mechanical_img_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
     </div>

     <div class='row'>
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>A/C & Heater Operation</h3>
         </div>
     </div>
     <div class='row'>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>A/C Installed</label> <br />
             <select id="ac_Installed" class="form-control" name="acInstalled">
                 <option value="Yes" <?php echo ($previous_acInstalled === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
                 <option value="No" <?php echo ($previous_acInstalled === 'No') ? 'selected' : ''; ?>>No
                 </option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>A/C Fan</label> <br />
             <select id="ac_Fan" class="form-control" name="acFan">
                 <option value="Working" <?php echo ($previous_acFan === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_acFan === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Blower Throw</label> <br />
             <select id="blower_Throw" class="form-control" name="blowerThrow">
                 <option value="Normal" <?php echo ($previous_blowerThrow === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Working" <?php echo ($previous_blowerThrow === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>A/C Cooling</label> <br />
             <select id="ac_Cooling" class="form-control" name="acCooling">
                 <option value="Normal" <?php echo ($previous_acCooling === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Working" <?php echo ($previous_acCooling === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Heater</label> <br />
             <select id="heater" class="form-control" name="heater">
                 <option value="Working" <?php echo ($previous_heater === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_heater === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

     </div>
     <div class="row mt-3">
         <div class="col-lg-3">
             <label class="fs-14">A/C & HEATER OPERATION Images</label>
             <div class="card-body">
                 <div id="ac_heater_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
     </div>


     <div class='row'>
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>Interior</h3>
         </div>
     </div>
     <div class='row'>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="floorMats" class="mb-4 pb-1">Floor Mats</label> <br />
             <select class="form-control" id="floor_Mats" name="floorMats">
                 <option value="Working" <?php echo ($previous_floorMats === 'Working') ? 'selected' : ''; ?>>
                     Good</option>
                 <option value="Not Working" <?php echo ($previous_floorMats === 'Not Working') ? 'selected' : ''; ?>>
                     Not Good</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="keyButtons" class="mb-4 pb-1">Panel Buttons</label> <br />
             <select class="form-control" id="panel_Buttons" name="keyButtons">
                 <option value="Working" <?php echo ($previous_keyButtons === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_keyButtons === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="centralLocking" class="mb-4 pb-1">Central Locking</label> <br />
             <select class="form-control" id="central_Locking" name="centralLocking">
                 <option value="Working" <?php echo ($previous_centralLocking === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_centralLocking === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="windowsType" class="mb-4 pb-1">Windows Type</label> <br />
             <select class="form-control" id="windows_Type" name="windowsType">
                 <option value="Manual" <?php echo ($previous_windowsType === 'Manual') ? 'selected' : ''; ?>>
                     Manual</option>
                 <option value="Automatic" <?php echo ($previous_windowsType === 'Automatic') ? 'selected' : ''; ?>>
                     Automatic</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="windowSafetylockButton">Window Safety Lock Button</label> <br />
             <select class="form-control" id="window_Safety_lock_Button" name="windowSafetylockButton">
                 <option value="Working" <?php echo ($previous_windowSafetylockButton === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_windowSafetylockButton === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="frontDriverwindow" class="mb-4 pb-1"> Driver Side Window</label>
             <br />
             <select class="form-control" id="Driver_side_window" name="frontDriverwindow">
                 <option value="Working" <?php echo ($previous_frontDriverwindow === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_frontDriverwindow === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rearDriversideWindow" class="mb-4 pb-1">Front right door Window</label> <br />

             <select class="form-control" id="front_right_door_Window" name="rearDriversideWindow">
                 <option value="Working" <?php echo ($previous_rearDriversideWindow === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_rearDriversideWindow === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rearPassengersideWindow">Rear Right door Window</label>
             <br />
             <select class="form-control" id="rear_right_door_Window" name="rearPassengersideWindow">
                 <option value="Working" <?php echo ($previous_rearPassengersideWindow === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_rearPassengersideWindow === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rearPassengersideWindow">Front Right seat belt</label> <br />
             <select class="form-control" id="Front_Right_seat_belt" name="front_right_seat_belt">
                 <option value="Working" <?php echo ($previous_front_right_seat_belt === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_rearPassengersideWindow === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rearPassengersideWindow">Rear Right seat belt</label> <br />
             <select class="form-control" id="rear_right_seat_belt" name="rear_right_seat_belt">
                 <option value="Working" <?php echo ($previous_rear_right_seat_belt === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_rearPassengersideWindow === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="seatsCondition">Seats Condition</label> <br />
             <select class="form-control" id="seats_Condition" name="seatsCondition">
                 <option value="Clean" <?php echo ($previous_seatsCondition === 'Clean') ? 'selected' : ''; ?>>
                     Clean</option>
                 <option value="Bad" <?php echo ($previous_seatsCondition === 'Bad') ? 'selected' : ''; ?>>
                     Bad</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="seatsType">Seats Type</label> <br />
             <select class="form-control" id="seats_Type" name="seatsType">
                 <option value="Fabric" <?php echo ($previous_seatsType === 'Fabric') ? 'selected' : ''; ?>>
                     Fabric</option>
                 <option value="Other" <?php echo ($previous_seatsType === 'Other') ? 'selected' : ''; ?>>
                     Other</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="clutchPedal">Clutch Pedal</label> <br />
             <select class="form-control" id="clutch_Pedal" name="clutchPedal">
                 <option value="Normal" <?php echo ($previous_clutchPedal === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Working" <?php echo ($previous_clutchPedal === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="steering_Wheel_wear_Tear">Steering Wheel Wear And Tear</label>
             <br />
             <select class="form-control" id="steering_Wheel_wear_Tear" name="steeringWheelwearTear">
                 <option value="Damaged" <?php echo ($previous_steeringWheelwearTear === 'damaged') ? 'selected' : ''; ?>>
                     Damaged</option>
                 <option value="faded" <?php echo ($previous_steeringWheelwearTear === 'faded') ? 'selected' : ''; ?>>
                     Faded</option>
                 <option value="replaced" <?php echo ($previous_steeringWheelwearTear === 'replaced') ? 'selected' : ''; ?>>
                     Replaced</option>
                 <option value="good" <?php echo ($previous_steeringWheelwearTear === 'good') ? 'selected' : ''; ?>>
                     Good</option>
             </select>

         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="steeringWheelbutton">Steering Wheel Buttons</label> <br />
             <select class="form-control" id="steering_Wheel_button" name="steeringWheelbutton">
                 <option value="Working" <?php echo ($previous_steeringWheelbutton === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_steeringWheelbutton === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="lightLeverswitch">Lights Lever/ Switch</label> <br />
             <select class="form-control" id="light_Lever_switch" name="lightLeverswitch">
                 <option value="Working" <?php echo ($previous_lightLeverswitch === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_lightLeverswitch === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="dashboard">Dashboard</label> <br />
             <select class="form-control" id="dashboard" name="dashboard">
                 <option value="Damaged" <?php echo ($previous_dashboard === 'damaged') ? 'selected' : ''; ?>>
                     Damaged</option>
                 <option value="faded" <?php echo ($previous_dashboard === 'faded') ? 'selected' : ''; ?>>
                     Faded</option>
                 <option value="replaced" <?php echo ($previous_dashboard === 'replaced') ? 'selected' : ''; ?>>
                     Replaced</option>
                 <option value="good" <?php echo ($previous_dashboard === 'good') ? 'selected' : ''; ?>>
                     Good</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="dashControlbuttons">Dash Control Buttons</label> <br />
             <select class="form-control" id="dash_Control_buttons" name="dashControlbuttons">
                 <option value="Working" <?php echo ($previous_dashControlbuttons === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_dashControlbuttons === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="interiorLights">Interior Lights</label> <br />
             <select class="form-control" id="interior_Lights" name="interiorLights">
                 <option value="Working" <?php echo ($previous_interiorLights === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_interiorLights === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="deFogger">De-fogger</label> <br />
             <select class="form-control" id="de_Fogger" name="deFogger">
                 <option value="Working" <?php echo ($previous_deFogger === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_deFogger === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="hazardLights">Hazard Lights</label> <br />
             <select class="form-control" id="hazard_Lights" name="hazardLights">
                 <option value="Working" <?php echo ($previous_hazardLights === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_hazardLights === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="multimedia">Multimedia</label> <br />
             <select class="form-control" id="multimedia" name="multimedia">
                 <option value="Working" <?php echo ($previous_multimedia === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_multimedia === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rearCamera">Rear Camera</label> <br />
             <select class="form-control" id="rear_Camera" name="rearCamera">
                 <option value="Working" <?php echo ($previous_rearCamera === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_rearCamera === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="frontViewcamera">Front View Camera</label> <br />
             <select class="form-control" id="front_View_camera" name="frontViewcamera">
                 <option value="Working" <?php echo ($previous_frontViewcamera === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_frontViewcamera === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="trunkReleaselever">Trunk Release Lever</label> <br />
             <select class="form-control" id="trunk_Release_lever" name="trunkReleaselever">
                 <option value="Working" <?php echo ($previous_trunkReleaselever === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_trunkReleaselever === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="fuelcapReleaseLever" class="mb-4 pb-1">Fuel Cap Release
                 Lever</label> <br />
             <select class="form-control" id="fuel_cap_Release_Lever" name="fuelcapReleaseLever">
                 <option value="Working" <?php echo ($previous_fuelcapReleaseLever === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_fuelcapReleaseLever === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="bonnetReleaselever" class="mb-4 pb-1">Bonnet Release
                 Lever</label> <br />
             <select class="form-control" id="bonnet_Release_lever" name="bonnetReleaselever">
                 <option value="Working" <?php echo ($previous_bonnetReleaselever === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_bonnetReleaselever === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="sideViewmirrorAdjustment">Side-view Mirror Adjustment</label>
             <br />
             <select class="form-control" id="side_View_mirror_Adjustment" name="sideViewmirrorAdjustment">
                 <option value="Working" <?php echo ($previous_sideViewmirrorAdjustment === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_sideViewmirrorAdjustment === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="leftSideviewMirror" class="mb-4 pb-1">Left Side-view
                 Mirror</label> <br />
             <select class="form-control" id="left_Side_view_Mirror" name="leftSideviewMirror">
                 <option value="Normal" <?php echo ($previous_leftSideviewMirror === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Working" <?php echo ($previous_leftSideviewMirror === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rightSideviewMirror" class="mb-4 pb-1">Right Side-view
                 Mirror</label> <br />
             <select class="form-control" id="right_Side_view_Mirror" name="rightSideviewMirror">
                 <option value="Normal" <?php echo ($previous_rightSideviewMirror === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Working" <?php echo ($previous_rightSideviewMirror === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="retractingSideviewMirrors">Retracting Side-view Mirrors</label>
             <br />
             <select class="form-control" id="retracting_Side_view_Mirrors" name="retractingSideviewMirrors">
                 <option value="Normal" <?php echo ($previous_retractingSideviewMirrors === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Working" <?php echo ($previous_retractingSideviewMirrors === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>

             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="acGrills">A/C Grills</label> <br />
             <select class="form-control" id="ac_Grills" name="acGrills">
                 <option value="Normal" <?php echo ($previous_acGrills === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Working" <?php echo ($previous_acGrills === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>

             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="acceleratorPedal">Accelerator Pedal</label> <br />
             <select class="form-control" id="accelerator_Pedal" name="acceleratorPedal">
                 <option value="Normal" <?php echo ($previous_acceleratorPedal === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Working" <?php echo ($previous_acceleratorPedal === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>

             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="breakPedal">Brake Pedal</label> <br />
             <select class="form-control" id="break_Pedal" name="breakPedal">
                 <option value="Normal" <?php echo ($previous_breakPedal === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Not Working" <?php echo ($previous_breakPedal === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>




         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="driverSeatbelt" class="mb-4 pb-1">Driver Seatbelt</label> <br />
             <select class="form-control" id="driver_Seat_belt" name="driverSeatbelt">
                 <option value="Working" <?php echo ($previous_driverSeatbelt === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_driverSeatbelt === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="passengerSeatbelt" class="mb-4 pb-1">Passenger Seatbelt</label>
             <br />
             <select class="form-control" id="passenger_Seat_belt" name="passengerSeatbelt">
                 <option value="Working" <?php echo ($previous_passengerSeatbelt === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_passengerSeatbelt === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>



         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="frontPassengerwindow" class="mb-4 pb-1">Front Passenger
                 Window</label> <br />
             <select class="form-control" id="front_Passenger_window" name="frontPassengerwindow">
                 <option value="Working" <?php echo ($previous_frontPassengerwindow === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_frontPassengerwindow === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>





         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="trunkSeal" class="mb-4 pb-1">Trunk Seal Original</label> <br />
             <select class="form-control" id="trunk_Seal" name="trunkSeal">
                 <option value="Original" <?php echo ($previous_trunkSeal === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_trunkSeal === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>
     </div>


     <div class="row mt-3">
         <div class="col-lg-3">
             <label class="fs-14">INTERIOR Images</label>
             <div class="card-body">
                 <div id="interior_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
     </div>



     <div class='row'>
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>Electronic Function</h3>
         </div>
     </div>
     <div class='row'>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="battery">Battery</label> <br />
             <select class="form-control" id="battery" name="battery">
                 <option value="Strong" <?php echo ($previous_battery === 'Strong') ? 'selected' : ''; ?>>
                     Strong</option>
                 <option value="Weak" <?php echo ($previous_battery === 'Weak') ? 'selected' : ''; ?>>Weak
                 </option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="horn">Horn</label> <br />
             <select class="form-control" id="horn" name="horn">
                 <option value="Working" <?php echo ($previous_horn === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_horn === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rightHeadlightOperation">Right Headlight Operation</label>
             <br />
             <select class="form-control" id="right_Head_light_Operation" name="rightHeadlightOperation">
                 <option value="Working" <?php echo ($previous_rightHeadlightOperation === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_rightHeadlightOperation === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rightHeadlightCondition">Right Headlight Condition</label>
             <br />
             <select class="form-control" id="right_Head_light_Condition" name="rightHeadlightCondition">
                 <option value="Normal" <?php echo ($previous_rightHeadlightCondition === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Faded & Scratched" <?php echo ($previous_rightHeadlightCondition === 'Faded & Scratched') ? 'selected' : ''; ?>>
                     Faded & Scratched</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rightHeadlight">Right Headlight</label> <br />
             <select class="form-control" id="right_Head_light" name="rightHeadlight">
                 <option value="Original" <?php echo ($previous_rightHeadlight === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_rightHeadlight === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="leftHeadlightOperation">Left Headlight Operation</label> <br />
             <select class="form-control" id="left_Head_light_Operation" name="leftHeadlightOperation">
                 <option value="Working" <?php echo ($previous_leftHeadlightOperation === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_leftHeadlightOperation === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="leftHeadlightCondition">Left Headlight Condition</label> <br />
             <select class="form-control" id="left_Head_light_Condition" name="leftHeadlightCondition">
                 <option value="Normal" <?php echo ($previous_leftHeadlightCondition === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Faded & Scratched" <?php echo ($previous_leftHeadlightCondition === 'Faded & Scratched') ? 'selected' : ''; ?>>
                     Faded & Scratched</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="leftHeadlight">Left Headlight</label> <br />
             <select class="form-control" id="left_Head_light" name="leftHeadlight">
                 <option value="Original" <?php echo ($previous_leftHeadlight === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_leftHeadlight === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="foglightsOperation">Foglights Operation</label> <br />
             <select class="form-control" id="fog_lights_Operation" name="foglightsOperation">
                 <option value="Normal" <?php echo ($previous_foglightsOperation === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Faded & Scratched" <?php echo ($previous_foglightsOperation === 'Faded & Scratched') ? 'selected' : ''; ?>>
                     Faded & Scratched</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="leftTaillightsOperation">Left Tail Lights Operation</label>
             <br />
             <select class="form-control" id="left_Tail_lights_Operation" name="leftTaillightsOperation">
                 <option value="Working" <?php echo ($previous_leftTaillightsOperation === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_leftTaillightsOperation === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="leftTaillightsCondition">Left Tail Lights Condition</label>
             <br />
             <select class="form-control" id="left_Tail_lights_Condition" name="leftTaillightsCondition">
                 <option value="Normal" <?php echo ($previous_leftTaillightsCondition === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Faded & Scratched" <?php echo ($previous_leftTaillightsCondition === 'Faded & Scratched') ? 'selected' : ''; ?>>
                     Faded & Scratched</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="leftTaillights">Left Tail Lights</label> <br />
             <select class="form-control" id="left_Tail_lights" name="leftTaillights">
                 <option value="Original" <?php echo ($previous_leftTaillights === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_leftTaillights === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rightTaillightsOperation">Right Tail Lights Operation</label>
             <br />
             <select class="form-control" id="right_Tail_lights_Operation" name="rightTaillightsOperation">
                 <option value="Working" <?php echo ($previous_rightTaillightsOperation === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_rightTaillightsOperation === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rightTaillightsCondition">Right Tail Lights Condition</label>
             <br />
             <select class="form-control" id="right_Tail_lights_Condition" name="rightTaillightsCondition">
                 <option value="Normal" <?php echo ($previous_rightTaillightsCondition === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Faded & Scratched" <?php echo ($previous_rightTaillightsCondition === 'Faded & Scratched') ? 'selected' : ''; ?>>
                     Faded & Scratched</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rightTaillights">Right Tail Lights</label> <br />
             <select class="form-control" id="right_Tail_lights" name="rightTaillights">
                 <option value="Original" <?php echo ($previous_rightTaillights === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_rightTaillights === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="windshieldWipers">Windshield Wipers</label> <br />
             <select class="form-control" id="wind_shield_Wipers" name="windshieldWipers">
                 <option value="Working" <?php echo ($previous_windshieldWipers === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="Not Working" <?php echo ($previous_windshieldWipers === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="airbags">Airbags</label> <br />
             <select class="form-control" id="air_bags" name="airbags">
                 <option value="Not Present" <?php echo ($previous_airbags === 'Not Present') ? 'selected' : ''; ?>>
                     Not Present</option>
                 <option value="Present" <?php echo ($previous_airbags === 'Present') ? 'selected' : ''; ?>>
                     Present</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="checkLights">Check Lights</label> <br />
             <select class="form-control" id="check_Lights" name="checkLights">
                 <option value="Off" <?php echo ($previous_checkLights === 'Off') ? 'selected' : ''; ?>>
                     Off</option>
                 <option value="On" <?php echo ($previous_checkLights === 'On') ? 'selected' : ''; ?>>On
                 </option>
             </select>
         </div>
     </div>
     <div class="row mt-3">
         <div class="col-lg-3">
             <label class="fs-14">ELECTRONIC FUNCTION Images</label>
             <div class="card-body">
                 <div id="electronic_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
     </div>


     <div class='row'>
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>Suspension Function</h3>
         </div>
     </div>
     <div class='row'>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Steering Assembly Play</label> <br />
             <select class="form-control" id="steering_Assembly_play" name="steeringAssemblyplay">
                 <option value="Yes" <?php echo ($prev_steeringAssemblyplay === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
                 <option value="no" <?php echo ($prev_steeringAssemblyplay === 'no') ? 'selected' : ''; ?>>
                     No</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Axle Boots</label> <br />
             <select class="form-control" id="axle_Boots" name="axleBoots">
                 <option value="Normal" <?php echo ($prev_axleBoots === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Damaged" <?php echo ($prev_axleBoots === 'Damaged') ? 'selected' : ''; ?>>
                     Damaged</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Right Ball Joint</label> <br />
             <select class="form-control" id="right_Ball_joint" name="rightBalljoint">
                 <option value="Normal" <?php echo ($prev_rightBalljoint === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_rightBalljoint === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Left Ball Joint</label> <br />
             <select class="form-control" id="left_Ball_joint" name="leftBalljoint">
                 <option value="Normal" <?php echo ($prev_leftBalljoint === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_leftBalljoint === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Tie Rod End</label> <br />
             <select class="form-control" id="tie_Rod_end" name="tieRodend">
                 <option value="Normal" <?php echo ($prev_tieRodend === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_tieRodend === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Right Boot</label> <br />
             <select class="form-control" id="right_Boot" name="rightBoot">
                 <option value="Normal" <?php echo ($prev_rightBoot === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_rightBoot === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Left Boot</label> <br />
             <select class="form-control" id="left_Boot" name="leftBoot">
                 <option value="Normal" <?php echo ($prev_leftBoot === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_leftBoot === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Right Bush</label> <br />
             <select class="form-control" id="right_Bush" name="rightBush">
                 <option value="Normal" <?php echo ($prev_rightBush === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_rightBush === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Left Bush</label> <br />
             <select class="form-control" id="left_Bush" name="leftBush">
                 <option value="Normal" <?php echo ($prev_leftBush === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_leftBush === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="">Rear Right Shock Absorber</label> <br />
             <select class="form-control" id="rear_Right_shock_Absorder" name="rearRightshockAbsorder">
                 <option value="Normal" <?php echo ($prev_rearRightshockAbsorder === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_rearRightshockAbsorder === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Left Shock Absorber</label> <br />
             <select class="form-control" id="rear_Left_shock_Absorder" name="rearLeftshockAbsorder">
                 <option value="Normal" <?php echo ($prev_rearLeftshockAbsorder === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_rearLeftshockAbsorder === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Front Right Shock Absorber</label> <br />
             <select class="form-control" id="front_Right_shock_Absorder" name="frontRightshockAbsorder">
                 <option value="Normal" <?php echo ($prev_frontRightshockAbsorder === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_frontRightshockAbsorder === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Front Left Shock Absorber</label> <br />
             <select class="form-control" id="front_Left_Shock_Absorder" name="frontLeftShockAbsorder">
                 <option value="Normal" <?php echo ($prev_frontLeftShockAbsorder === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Require" <?php echo ($prev_frontLeftShockAbsorder === 'Service Require') ? 'selected' : ''; ?>>
                     Service Require</option>
             </select>
         </div>
     </div>
     <div class="row mt-3">
         <div class="col-lg-3">
             <label class="fs-14">SUSPENSION FUNCTION Images</label>
             <div class="card-body">
                 <div id="suspension_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
     </div>


     <div class='row'>
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>Exterior Body</h3>
         </div>
     </div>
     <div class='row'>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="bonnetSeal" class="mb-4 pb-1">Bonnet Seal</label> <br />
             <select class="form-control" id="bonnet_Seal" name="bonnetSeal">
                 <option value="Original" <?php echo ($previous_bonnetSeal === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_bonnetSeal === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Bonnet</label> <br />
             <select class="form-control" id="bonnet" name="bonnet">
                 <option value="T" <?php echo ($prev_bonnet === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_bonnet === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_bonnet === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_bonnet === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_bonnet === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_bonnet === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_bonnet === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_bonnet === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_bonnet === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_bonnet === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_bonnet === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_bonnet === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_bonnet === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_bonnet === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_bonnet === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_bonnet === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_bonnet === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_bonnet === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_bonnet === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Bonnet Images</label>
             <div class="card-body">
                 <div id="bonnet_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Front Right Fender</label> <br />
             <select class="form-control" id="front_right_fender" name="frontDriverfender">
                 <option value="T" <?php echo ($prev_frontDriverfender === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_frontDriverfender === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_frontDriverfender === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_frontDriverfender === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_frontDriverfender === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_frontDriverfender === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_frontDriverfender === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_frontDriverfender === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_frontDriverfender === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_frontDriverfender === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_frontDriverfender === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_frontDriverfender === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_frontDriverfender === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_frontDriverfender === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_frontDriverfender === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_frontDriverfender === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_frontDriverfender === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_frontDriverfender === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_frontDriverfender === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Front Driver Fender Images</label>
             <div class="card-body">
                 <div id="frontDriverfender_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Front Right Door</label> <br />
             <select class="form-control" id="front_right_door" name="frontDriverdoor">
                 <option value="T" <?php echo ($prev_frontDriverdoor === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_frontDriverdoor === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_frontDriverdoor === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_frontDriverdoor === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_frontDriverdoor === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_frontDriverdoor === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_frontDriverdoor === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_frontDriverdoor === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_frontDriverdoor === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_frontDriverdoor === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_frontDriverdoor === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_frontDriverdoor === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_frontDriverdoor === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_frontDriverdoor === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_frontDriverdoor === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_frontDriverdoor === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_frontDriverdoor === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_frontDriverdoor === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_frontDriverdoor === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Front Driver Door images</label>
             <div class="card-body">
                 <div id="frontDriverdoor_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="frontDriverdoorSeal" class="mb-4 pb-1">Front Right Door Seal</label> <br />

             <select class="form-control" id="front_Driver_door_Seal" name="frontDriverdoorSeal">
                 <option value="Original" <?php echo ($previous_frontDriverdoorSeal === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_frontDriverdoorSeal === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Right Door</label> <br />
             <select class="form-control" id="rear_right_door" name="rearDriverdoor">
                 <option value="T" <?php echo ($prev_rearDriverdoor === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_rearDriverdoor === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_rearDriverdoor === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_rearDriverdoor === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_rearDriverdoor === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_rearDriverdoor === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_rearDriverdoor === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_rearDriverdoor === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_rearDriverdoor === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_rearDriverdoor === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_rearDriverdoor === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_rearDriverdoor === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_rearDriverdoor === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_rearDriverdoor === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_rearDriverdoor === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_rearDriverdoor === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_rearDriverdoor === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_rearDriverdoor === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_rearDriverdoor === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Rear Right Door images</label>
             <div class="card-body">
                 <div id="rearRightdoor_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>


         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rearDriversideDoorSeal" class="mb-4 pb-1">Rear Right Side Door
                 Seal</label> <br />
             <select class="form-control" id="rear_right_Door_Seal" name="rearDriversideDoorSeal">
                 <option value="Original" <?php echo ($previous_rearDriversideDoorSeal === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_rearDriversideDoorSeal === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="frontPassengerDoorSeal" class="mb-4 pb-1">Front Passenger Door Seal</label> <br />

             <select class="form-control" id="front_Passenger_Door_Seal" name="frontPassengerDoorSeal">
                 <option value="Original" <?php echo ($previous_frontPassengerDoorSeal === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_frontPassengerDoorSeal === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rearPassengersideDoorSeal" class="mb-4 pb-1">Rear Passenger Door
                 Seal</label> <br />
             <select class="form-control" id="rear_Passenger_side_Door_Seal" name="rearPassengersideDoorSeal">
                 <option value="Original" <?php echo ($previous_rearPassengersideDoorSeal === 'Original') ? 'selected' : ''; ?>>
                     Original</option>
                 <option value="Not Original" <?php echo ($previous_rearPassengersideDoorSeal === 'Not Original') ? 'selected' : ''; ?>>
                     Not Original</option>
             </select>
         </div>




         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Trunk Lock</label> <br />
             <select class="form-control" id="trunk_Lock" name="trunkLock">
                 <option value="Working" <?php echo ($prev_trunkLock === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="not Working" <?php echo ($prev_trunkLock === 'Not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
             <label class="fs-14 mb-0 mt-3">Trunk Lock Images</label>
             <div class="card-body">
                 <div id="trunkLock_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>




         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Front Wind Screen</label> <br />
             <select class="form-control" id="front_Wind_shield" name="frontWindshield">
                 <option value="T" <?php echo ($prev_frontWindshield === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="T" <?php echo ($prev_frontWindshield === 'T') ? 'selected' : ''; ?>>Total
                     Geniun</option>
                 <option value="B" <?php echo ($prev_frontWindshield === 'P') ? 'selected' : ''; ?>>
                     Broken</option>
                 <option value="R" <?php echo ($prev_frontWindshield === 'R') ? 'selected' : ''; ?>>
                     Replaced</option>
                 <option value="C" <?php echo ($prev_frontWindshield === 'C') ? 'selected' : ''; ?>>
                     Chipped</option>
             </select>
             <label class="fs-14 mb-0 mt-3">Front Wind Screen</label>
             <div class="card-body">
                 <div id="frontWindshield_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Front Passenger Fender</label> <br />
             <select class="form-control" id="front_Passenger_fender" name="frontPassengerfender">
                 <option value="T" <?php echo ($prev_frontPassengerfender === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_frontPassengerfender === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_frontPassengerfender === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_frontPassengerfender === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_frontPassengerfender === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_frontPassengerfender === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_frontPassengerfender === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_frontPassengerfender === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_frontPassengerfender === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_frontPassengerfender === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_frontPassengerfender === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_frontPassengerfender === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_frontPassengerfender === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_frontPassengerfender === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_frontPassengerfender === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_frontPassengerfender === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_frontPassengerfender === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_frontPassengerfender === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_frontPassengerfender === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Front Passenger Fender Images</label>
             <div class="card-body">
                 <div id="frontPassengerfender_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Front Passenger Door</label> <br />
             <select class="form-control" id="front_Passenger_door" name="frontPassengerdoor">
                 <option value="T" <?php echo ($prev_frontPassengerdoor === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_frontPassengerdoor === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_frontPassengerdoor === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_frontPassengerdoor === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_frontPassengerdoor === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_frontPassengerdoor === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_frontPassengerdoor === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_frontPassengerdoor === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_frontPassengerdoor === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_frontPassengerdoor === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_frontPassengerdoor === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_frontPassengerdoor === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_frontPassengerdoor === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_frontPassengerdoor === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_frontPassengerdoor === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_frontPassengerdoor === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_frontPassengerdoor === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_frontPassengerdoor === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_frontPassengerdoor === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Front Passenger Door Images</label>
             <div class="card-body">
                 <div id="frontPassengerdoor_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Passenger Door</label> <br />
             <select class="form-control" id="rear_Passenger_door" name="rearPassengerdoor">
                 <option value="T" <?php echo ($prev_rearPassengerdoor === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_rearPassengerdoor === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_rearPassengerdoor === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_rearPassengerdoor === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_rearPassengerdoor === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_rearPassengerdoor === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_rearPassengerdoor === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_rearPassengerdoor === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_rearPassengerdoor === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_rearPassengerdoor === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_rearPassengerdoor === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_rearPassengerdoor === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_rearPassengerdoor === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_rearPassengerdoor === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_rearPassengerdoor === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_rearPassengerdoor === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_rearPassengerdoor === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_rearPassengerdoor === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_rearPassengerdoor === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Rear Passenger Door Images</label>
             <div class="card-body">
                 <div id="rearPassengerdoor_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Passenger Fender</label> <br />
             <select class="form-control" id="rear_Passenger_fender" name="rearPassengerfender">
                 <option value="T" <?php echo ($prev_rearPassengerfender === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_rearPassengerfender === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_rearPassengerfender === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_rearPassengerfender === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_rearPassengerfender === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_rearPassengerfender === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_rearPassengerfender === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_rearPassengerfender === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_rearPassengerfender === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_rearPassengerfender === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_rearPassengerfender === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_rearPassengerfender === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_rearPassengerfender === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_rearPassengerfender === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_rearPassengerfender === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_rearPassengerfender === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_rearPassengerfender === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_rearPassengerfender === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_rearPassengerfender === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Rear Passenger Fender images</label>
             <div class="card-body">
                 <div id="rearPassengerfender_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Trunk</label> <br />
             <select class="form-control" id="trunk" name="trunk">
                 <option value="T" <?php echo ($prev_trunk === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_trunk === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_trunk === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_trunk === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_trunk === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_trunk === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_trunk === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_trunk === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_trunk === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_trunk === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_trunk === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_trunk === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_trunk === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_trunk === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_trunk === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_trunk === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_trunk === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_trunk === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_trunk === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Trunk images</label>
             <div class="card-body">
                 <div id="trunk_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Screen</label> <br />
             <select class="form-control" id="rear_screen" name="rearWinshield">
                 <option value="T" <?php echo ($prev_rearWinshield === 'T') ? 'selected' : ''; ?>>Total
                     Geniun</option>
                 <option value="B" <?php echo ($prev_rearWinshield === 'P') ? 'selected' : ''; ?>>
                     Broken</option>
                 <option value="R" <?php echo ($prev_rearWinshield === 'R') ? 'selected' : ''; ?>>
                     Replaced</option>
                 <option value="C" <?php echo ($prev_rearWinshield === 'C') ? 'selected' : ''; ?>>
                     Chipped</option>
             </select>
             <label class="fs-14 mb-0 mt-3">Rear Screen images</label>
             <div class="card-body">
                 <div id="rearWindshield_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Driver Fender</label> <br />
             <select class="form-control" id="rear_Driver_fender" name="rearDriverfender">
                 <option value="T" <?php echo ($prev_rearDriverfender === 'T') ? 'selected' : ''; ?>>T
                 </option>
                 <option value="T" <?php echo ($prev_rearDriverfender === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_rearDriverfender === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_rearDriverfender === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_rearDriverfender === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_rearDriverfender === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_rearDriverfender === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_rearDriverfender === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_rearDriverfender === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_rearDriverfender === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_rearDriverfender === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_rearDriverfender === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_rearDriverfender === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_rearDriverfender === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_rearDriverfender === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_rearDriverfender === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_rearDriverfender === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_rearDriverfender === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_rearDriverfender === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_rearDriverfender === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Rear Driver Fender images</label>
             <div class="card-body">
                 <div id="rearDriverfender_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>





         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Roof</label> <br />
             <select class="form-control" id="roof" name="roof">
                 <option value="T" <?php echo ($prev_roof === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_roof === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_roof === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_roof === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_roof === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_roof === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_roof === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_roof === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_roof === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_roof === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_roof === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_roof === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_roof === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_roof === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_roof === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_roof === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_roof === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_roof === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_roof === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Roof images</label>
             <div class="card-body">
                 <div id="roof_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Panels</label> <br />
             <select class="form-control" id="panels" name="panels">
                 <option value="T" <?php echo ($prev_panels === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_panels === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_panels === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_panels === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_panels === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_panels === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_panels === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_panels === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_panels === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_panels === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_panels === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_panels === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_panels === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_panels === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_panels === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_panels === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_panels === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_panels === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_panels === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Panels images</label>
             <div class="card-body">
                 <div id="panels_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Driver A Pillar</label> <br />
             <select class="form-control" id="driver_A_pillar" name="driverApillar">
                 <option value="T" <?php echo ($prev_driverApillar === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_driverApillar === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_driverApillar === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_driverApillar === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_driverApillar === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_driverApillar === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_driverApillar === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_driverApillar === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_driverApillar === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_driverApillar === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_driverApillar === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_driverApillar === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_driverApillar === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_driverApillar === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_driverApillar === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_driverApillar === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_driverApillar === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_driverApillar === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_driverApillar === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Driver A Pillar images</label>
             <div class="card-body">
                 <div id="driverApillar_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Driver B Pillar</label> <br />
             <select class="form-control" id="driver_B_pillar" name="driverBpillar">
                 <option value="T" <?php echo ($prev_driverBpillar === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_driverBpillar === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_driverBpillar === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_driverBpillar === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_driverBpillar === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_driverBpillar === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_driverBpillar === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_driverBpillar === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_driverBpillar === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_driverBpillar === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_driverBpillar === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_driverBpillar === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_driverBpillar === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_driverBpillar === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_driverBpillar === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_driverBpillar === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_driverBpillar === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_driverBpillar === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_driverBpillar === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Driver B Pillar images</label>
             <div class="card-body">
                 <div id="driverBpillar_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Driver C Pillar</label> <br />
             <select class="form-control" id="driver_C_pillar" name="driverCpillar">
                 <option value="T" <?php echo ($prev_driverCpillar === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_driverCpillar === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_driverCpillar === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_driverCpillar === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_driverCpillar === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_driverCpillar === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_driverCpillar === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_driverCpillar === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_driverCpillar === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_driverCpillar === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_driverCpillar === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_driverCpillar === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_driverCpillar === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_driverCpillar === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_driverCpillar === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_driverCpillar === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_driverCpillar === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_driverCpillar === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_driverCpillar === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Driver C Pillar images</label>
             <div class="card-body">
                 <div id="driverCpillar_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Driver D Pillar</label> <br />
             <select class="form-control" id="driver_D_pillar" name="driverDpillar">
                 <option value="T" <?php echo ($prev_driverDpillar === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_driverDpillar === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_driverDpillar === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_driverDpillar === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_driverDpillar === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_driverDpillar === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_driverDpillar === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_driverDpillar === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_driverDpillar === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_driverDpillar === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_driverDpillar === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_driverDpillar === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_driverDpillar === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_driverDpillar === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_driverDpillar === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_driverDpillar === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_driverDpillar === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_driverDpillar === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_driverDpillar === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Driver D Pillar images</label>
             <div class="card-body">
                 <div id="driverDpillar_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Passenger A Pillar</label> <br />
             <select class="form-control" id="passenger_A_pillar" name="passengerApillar">
                 <option value="T" <?php echo ($prev_passengerApillar === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_passengerApillar === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_passengerApillar === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_passengerApillar === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_passengerApillar === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_passengerApillar === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_passengerApillar === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_passengerApillar === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_passengerApillar === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_passengerApillar === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_passengerApillar === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_passengerApillar === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_passengerApillar === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_passengerApillar === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_passengerApillar === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_passengerApillar === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_passengerApillar === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_passengerApillar === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_passengerApillar === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Passenger A Pillar images</label>
             <div class="card-body">
                 <div id="passengerApillar_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Passenger B Pillar</label> <br />
             <select class="form-control" id="passenger_B_pillar" name="passengerBpillar">
                 <option value="T" <?php echo ($prev_passengerBpillar === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_passengerBpillar === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_passengerBpillar === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_passengerBpillar === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_passengerBpillar === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_passengerBpillar === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_passengerBpillar === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_passengerBpillar === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_passengerBpillar === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_passengerBpillar === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_passengerBpillar === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_passengerBpillar === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_passengerBpillar === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_passengerBpillar === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_passengerBpillar === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_passengerBpillar === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_passengerBpillar === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_passengerBpillar === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_passengerBpillar === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Passenger B Pillar images</label>
             <div class="card-body">
                 <div id="passengerBpillar_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Passenger C Pillar</label> <br />
             <select class="form-control" id="passenger_C_pillar" name="passengerCpillar">

                 <option value="T" <?php echo ($prev_passengerCpillar === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_passengerCpillar === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_passengerCpillar === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_passengerCpillar === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_passengerCpillar === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_passengerCpillar === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_passengerCpillar === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_passengerCpillar === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_passengerCpillar === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_passengerCpillar === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_passengerCpillar === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_passengerCpillar === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_passengerCpillar === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_passengerCpillar === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_passengerCpillar === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_passengerCpillar === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_passengerCpillar === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_passengerCpillar === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_passengerCpillar === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Passenger C Pillar images</label>
             <div class="card-body">
                 <div id="passengerCpillar_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Passenger D Pillar</label> <br />
             <select class="form-control" id="passenger_D_pillar" name="passengerDpillar">

                 <option value="T" <?php echo ($prev_passengerDpillar === 'T') ? 'selected' : ''; ?>>T</option>
                 <option value="F" <?php echo ($prev_passengerDpillar === 'F') ? 'selected' : ''; ?>>F</option>
                 <option value="P" <?php echo ($prev_passengerDpillar === 'P') ? 'selected' : ''; ?>>P</option>
                 <option value="A1" <?php echo ($prev_passengerDpillar === 'A1') ? 'selected' : ''; ?>>A1</option>
                 <option value="A2" <?php echo ($prev_passengerDpillar === 'A2') ? 'selected' : ''; ?>>A2</option>
                 <option value="E1" <?php echo ($prev_passengerDpillar === 'E1') ? 'selected' : ''; ?>>E1</option>
                 <option value="E2" <?php echo ($prev_passengerDpillar === 'E2') ? 'selected' : ''; ?>>E2</option>
                 <option value="LS" <?php echo ($prev_passengerDpillar === 'LS') ? 'selected' : ''; ?>>LS</option>
                 <option value="W" <?php echo ($prev_passengerDpillar === 'W') ? 'selected' : ''; ?>>W</option>
                 <option value="G1" <?php echo ($prev_passengerDpillar === 'G1') ? 'selected' : ''; ?>>G1</option>
                 <option value="G2" <?php echo ($prev_passengerDpillar === 'G2') ? 'selected' : ''; ?>>G2</option>
                 <option value="G3" <?php echo ($prev_passengerDpillar === 'G3') ? 'selected' : ''; ?>>G3</option>
                 <option value="G4" <?php echo ($prev_passengerDpillar === 'G4') ? 'selected' : ''; ?>>G4</option>
                 <option value="B" <?php echo ($prev_passengerDpillar === 'B') ? 'selected' : ''; ?>>B</option>
                 <option value="H" <?php echo ($prev_passengerDpillar === 'H') ? 'selected' : ''; ?>>H</option>
                 <option value="PP" <?php echo ($prev_passengerDpillar === 'PP') ? 'selected' : ''; ?>>PP</option>
                 <option value="C" <?php echo ($prev_passengerDpillar === 'C') ? 'selected' : ''; ?>>C</option>
                 <option value="XL" <?php echo ($prev_passengerDpillar === 'XL') ? 'selected' : ''; ?>>XL</option>
                 <option value="PL" <?php echo ($prev_passengerDpillar === 'PL') ? 'selected' : ''; ?>>PL</option>

             </select>
             <label class="fs-14 mb-0 mt-3">Passenger D Pillar images</label>
             <div class="card-body">
                 <div id="passengerDpillar_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
     </div>

     <div class='row'>
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>Tyres</h3>
         </div>
     </div>
     <div class='row'>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Front Driver Tyre Condition</label> <br />
             <select class="form-control" name="frontDrivertyreCondition" id="front_Driver_tyre_Condition">
                 <option value="Good" <?php echo ($previous_frontDrivertyreCondition === 'Good') ? 'selected' : ''; ?>>
                     Good</option>
                 <option value="Normal" <?php echo ($previous_frontDrivertyreCondition === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="not Good" <?php echo ($previous_frontDrivertyreCondition === 'not Good') ? 'selected' : ''; ?>>
                     Not Good</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Rear Passenger Tyre Condition</label> <br />
             <select name="rearPassengertyreCondition" class="form-control" id="rear_Passenger_tyre_Condition">
                 <option value="Good" <?php echo ($previous_rearPassengertyreCondition === 'Good') ? 'selected' : ''; ?>>
                     Good</option>
                 <option value="Normal" <?php echo ($previous_rearPassengertyreCondition === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="not Good" <?php echo ($previous_rearPassengertyreCondition === 'not Good') ? 'selected' : ''; ?>>
                     Not Good</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Front Passenger Tyre Brand </label> <br />
             <input type="text" class="form-control" name="frontPassengertyreBrand" value="<?php echo $previous_frontPassengertyreBrand; ?>" id="front_Passenger_tyre_Brand" />
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Front Passenger Tyre Size</label> <br />
             <input type="text" class="form-control" name="frontPassengertyreSize" value="<?php echo $previous_frontPassengertyreSize; ?>" id="front_Passenger_tyre_Size" />
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Front Passenger Tyre Condition</label> <br />
             <select class="form-control" name="frontPassengertyreCondition" id="front_Passenger_tyre_Condition">
                 <option value="Good" <?php echo ($previous_frontPassengertyreCondition === 'Good') ? 'selected' : ''; ?>>
                     Good</option>
                 <option value="Normal" <?php echo ($previous_frontPassengertyreCondition === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="not Good" <?php echo ($previous_frontPassengertyreCondition === 'not Good') ? 'selected' : ''; ?>>
                     Not Good</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Front Driver Tyre Brand</label> <br />
             <input type="text" class="form-control" name="frontDrivertyreBrand" value="<?php echo $previous_frontDrivertyreBrand; ?>" id="front_Driver_tyre_Brand" />
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Front Driver Tyre Size</label> <br />
             <input type="text" class="form-control" name="frontDrivertyreSize" value="<?php echo $previous_frontDrivertyreSize; ?>" id="front_Driver_tyre_Size" />
         </div>


         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Rear Passenger Tyre Brand</label> <br />
             <input type="text" name="rearPassengertyreBrand" value="<?php echo $previous_rearPassengertyreBrand; ?>" class="form-control" id="rear_Passenger_tyre_Brand" />
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Passenger Tyre Size</label> <br />
             <input type="text" class="form-control" value="<?php echo $previous_rearPassengerTyresize; ?>" name="rearPassengerTyresize" id="rear_Passenger_Tyre_size" />
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Driver Tyre Brand</label> <br />
             <input type="text" class="form-control" value="<?php echo $previous_rearDriverTyrebrand; ?>" name="rearDriverTyrebrand" id="rear_Driver_Tyre_brand" />
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Driver Tyre Size</label> <br />
             <input type="text" class="form-control" value="<?php echo $previous_rearDrivertyreSize; ?>" name="rearDrivertyreSize" id="rear_Driver_tyre_Size" />
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="mb-4 pb-1">Rear Driver Tyre Condition</label> <br />
             <select class="form-control" name="rearDrivertyreCondition" id="rear_Driver_tyre_Condition">
                 <option value="Good">Good</option>
                 <option value="Normal">Normal</option>
                 <option value="not Good">Not Good</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label>Alloy Rims</label> <br />
             <select class="form-control" name="alloyRims" id="alloy_Rims">
                 <option value="Yes" <?php echo ($previous_alloyRims === 'Yes') ? 'selected' : ''; ?>>Yes
                 </option>
                 <option value="no" <?php echo ($previous_alloyRims === 'no') ? 'selected' : ''; ?>>No
                 </option>
             </select>
         </div>

     </div>

     <div class="row mt-3">
         <div class="col-lg-3">
             <label class="fs-14">Tyres Images</label>
             <div class="card-body">
                 <div id="tyre_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
     </div>

     <div class='row'>
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>Accessories</h3>
         </div>
     </div>
     <div class='row'>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="spareWheel">Spare Wheel</label> <br />
             <select class="form-control" id="spare_Wheel" name="spareWheel">
                 <option value="Present" <?php echo ($prev_spareWheel === 'Present') ? 'selected' : ''; ?>>
                     Present</option>
                 <option value="Not Present" <?php echo ($prev_spareWheel === 'Not Present') ? 'selected' : ''; ?>>
                     Not Present</option>
                 <option value="N/A" <?php echo ($prev_spareWheel === 'N/A') ? 'selected' : ''; ?>>N/A
                 </option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="toolKit">Tool Kit</label> <br />
             <select class="form-control" id="tool_Kit" name="toolKit">
                 <option value="Present" <?php echo ($prev_toolKit === 'Present') ? 'selected' : ''; ?>>
                     Present</option>
                 <option value="Not Present" <?php echo ($prev_toolKit === 'Not Present') ? 'selected' : ''; ?>>
                     Not Present</option>
                 <option value="N/A" <?php echo ($prev_toolKit === 'N/A') ? 'selected' : ''; ?>>N/A
                 </option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="jack">Jack</label> <br />
             <select class="form-control" id="jack" name="jack">
                 <option value="Present" <?php echo ($prev_jack === 'Present') ? 'selected' : ''; ?>>Present
                 </option>
                 <option value="Not Present" <?php echo ($prev_jack === 'Not Present') ? 'selected' : ''; ?>>Not
                     Present</option>
                 <option value="N/A" <?php echo ($prev_jack === 'N/A') ? 'selected' : ''; ?>>N/A</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="punctureRepairkit">Puncture Repair Kit</label> <br />
             <select class="form-control" id="puncture_Repair_kit" name="punctureRepairkit">
                 <option value="Present" <?php echo ($prev_punctureRepairkit === 'Present') ? 'selected' : ''; ?>>
                     Present</option>
                 <option value="Not Present" <?php echo ($prev_punctureRepairkit === 'Not Present') ? 'selected' : ''; ?>>
                     Not Present</option>
                 <option value="N/A" <?php echo ($prev_punctureRepairkit === 'N/A') ? 'selected' : ''; ?>>
                     N/A</option>
             </select>
         </div>
     </div>

     <div class="row mt-3">
         <div class="col-lg-3">
             <label class="fs-14">ACCESSORIES Images</label>
             <div class="card-body">
                 <div id="accessories_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
     </div>

     <div class='row'>
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>Test Drive</h3>
         </div>
     </div>
     <div class='row'>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="speedmeterInformation">Speedometer</label>
             <br />
             <select class="form-control" id="speedometer" name="speedmeterInformation">
                 <option value="Working" <?php echo ($prev_speedmeterInformation === 'Working') ? 'selected' : ''; ?>>
                     Working</option>
                 <option value="not Working" <?php echo ($prev_speedmeterInformation === 'not Working') ? 'selected' : ''; ?>>
                     Not Working</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="frontSuspensionNoise">Front Suspension Noise</label> <br />
             <select class="form-control" id="front_Suspension_Noise" name="frontSuspensionNoise">
                 <option value="No" <?php echo ($prev_frontSuspensionNoise === 'No') ? 'selected' : ''; ?>>
                     No</option>
                 <option value="Yes" <?php echo ($prev_frontSuspensionNoise === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="rearSuspensionNoise">Rear Suspension Noise</label> <br />
             <select class="form-control" id="rear_Suspension_Noise" name="rearSuspensionNoise">
                 <option value="No" <?php echo ($prev_rearSuspensionNoise === 'No') ? 'selected' : ''; ?>>
                     No</option>
                 <option value="Yes" <?php echo ($prev_rearSuspensionNoise === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="enginePick">Engine Pick</label> <br />
             <select class="form-control" id="engine_Pick" name="enginePick">
                 <option value="Normal" <?php echo ($prev_enginePick === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Required" <?php echo ($prev_enginePick === 'Service Required') ? 'selected' : ''; ?>>
                     Service Required</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="gearShifting">Gear Shifting</label> <br />
             <select class="form-control" id="gear_Shifting" name="gearShifting">
                 <option value="Smooth" <?php echo ($prev_gearShifting === 'Smooth') ? 'selected' : ''; ?>>
                     Smooth</option>
                 <option value="Normal" <?php echo ($prev_gearShifting === 'Normal') ? 'selected' : ''; ?>>
                     Normal</option>
                 <option value="Service Required" <?php echo ($prev_gearShifting === 'Service Required') ? 'selected' : ''; ?>>
                     Service Required</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="differentialNoise">Differential Noise</label> <br />
             <select class="form-control" id="differential_Noise" name="differentialNoise">
                 <option value="No" <?php echo ($prev_differentialNoise === 'No') ? 'selected' : ''; ?>>
                     No</option>
                 <option value="Yes" <?php echo ($prev_differentialNoise === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="driveShaftnoise">Drive Shaft Noise</label> <br />
             <select class="form-control" id="drive_Shaft_noise" name="driveShaftnoise">
                 <option value="no" <?php echo ($prev_driveShaftnoise === 'no') ? 'selected' : ''; ?>>No
                 </option>
                 <option value="Yes" <?php echo ($prev_driveShaftnoise === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="absActuation">ABS Actuation</label> <br />
             <select class="form-control" id="abs_Actuation" name="absActuation">
                 <option value="Timely Response" <?php echo ($prev_absActuation === 'Timely Response') ? 'selected' : ''; ?>>
                     Timely Response</option>
                 <option value="Service Required" <?php echo ($prev_absActuation === 'Service Required') ? 'selected' : ''; ?>>
                     Service Required</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="brakePedaloperation">Brake Pedal Operation</label> <br />
             <select class="form-control" id="brake_Pedal_operation" name="brakePedaloperation">
                 <option value="Timely Response" <?php echo ($prev_brakePedaloperation === 'Timely Response') ? 'selected' : ''; ?>>
                     Timely Response</option>
                 <option value="Service Required" <?php echo ($prev_brakePedaloperation === 'Service Required') ? 'selected' : ''; ?>>
                     Service Required</option>
             </select>
         </div>

         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="steeringFunction">Steering Function</label> <br />
             <select class="form-control" id="steering_Function" name="steeringFunction">
                 <option value="No" <?php echo ($prev_steeringFunction === 'No') ? 'selected' : ''; ?>>
                     No</option>
                 <option value="Yes" <?php echo ($prev_steeringFunction === 'Yes') ? 'selected' : ''; ?>>
                     Yes</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label for="steeringWheelalignment">Steering Wheel Alignment</label> <br />
             <select class="form-control" id="steering_Wheel_alignment" name="steeringWheelalignment">
                 <option value="Center" <?php echo ($prev_steeringWheelalignment === 'Center') ? 'selected' : ''; ?>>
                     Center</option>
                 <option value="not Center" <?php echo ($prev_steeringWheelalignment === 'not Center') ? 'selected' : ''; ?>>
                     Not Center</option>
             </select>
         </div>


     </div>

     <!-- Car Images -->
     <div class="row mt-3">
         <div class='col-lg-12 col-sm-12 my-4'>
             <h3 class='text-uppercase'>Car Images</h3>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Front Headlight</label>
             <div class="card-body">
                 <div id="front_headlight_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Back Light</label>
             <div class="card-body">
                 <div id="back_lights_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Engine Room</label>
             <div class="card-body">
                 <div id="engine_room_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Stud Tower Right</label>
             <div class="card-body">
                 <div id="stud_tower_right_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Stud Tower Left</label>
             <div class="card-body">
                 <div id="stud_tower_left_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Front Right</label>
             <div class="card-body">
                 <div id="front_right_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Front Left</label>
             <div class="card-body">
                 <div id="front_left_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Right</label>
             <div class="card-body">
                 <div id="right_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Left</label>
             <div class="card-body">
                 <div id="left_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Back Right</label>
             <div class="card-body">
                 <div id="back_right_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Back</label>
             <div class="card-body">
                 <div id="back_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Back Left</label>
             <div class="card-body">
                 <div id="back_left_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Interior Back</label>
             <div class="card-body">
                 <div id="interior_back_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Back Under-Carriage</label>
             <div class="card-body">
                 <div id="back_undercarriage_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Front Under-Carriage</label>
             <div class="card-body">
                 <div id="front_undercarriage_images_picker" class="row"></div>
                 <div id="preview-container"></div>
             </div>
         </div>
     </div>

     <div class="mb-4 mt-4 row">
         <div class="col-lg-6 md-12">
             <div class="form-group">
                 <label for="client_msg">Additional Notes from Client*</label>
                 <textarea class="form-control" id="client_msg" name="message" rows="6"><?php echo trim($previous_message); ?></textarea>

             </div>
         </div>
         <div class="col-lg-6 md-12">
             <div class="form-group">
                 <label for="client_msg">Additional Notes from Admin*</label>
                 <textarea class="form-control" id="admin_msg" name="admin_message" rows="6"> <?php echo trim($prev_adminMessage); ?> </textarea>


             </div>

         </div>
     </div>

     <div class="mb-4 mt-4 row">
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Front Bumper</label>
             <select class="form-control" multiple id="getFrontBumper">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Bonnet</label>
             <select class="form-control" multiple id="getBonnet">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Right Fender</label>
             <select class="form-control" multiple id="getRightFender">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Front Right Door</label>
             <select class="form-control" multiple id="getFrontrightDoor">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Back Right Door</label>
             <select class="form-control" multiple id="getBackrightDoor">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Right Quater panel </label>
             <select class="form-control" multiple id="getRightQuaterpanel">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Right A piller</label>
             <select class="form-control" multiple id="getRightApiller">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
     </div>

     <div class="mb-4 mt-4 row">
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Right B piller</label>
             <select class="form-control" multiple id="getRightBpiller">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Right C piller</label>
             <select class="form-control" multiple id="getRightCpiller">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Roof</label>
             <select class="form-control" multiple id="getRoof">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Trunk</label>
             <select class="form-control" multiple id="getTrunk">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Back Bumper </label>
             <select class="form-control" multiple id="getBackbumper">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Left Quater panel</label>
             <select class="form-control" multiple id="getLeftQuaterpanel">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
     </div>


     <div class="mb-4 mt-4 row">
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Back Left Door</label>
             <select class="form-control" multiple id="getBackLeftDoor">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Front Left Door </label>
             <select class="form-control" multiple id="getFrontLeftDoor">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Front Left Fender</label>
             <select class="form-control" multiple id="getFrontLeftFender">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Left A piller</label>
             <select class="form-control" multiple id="getLeftApiller">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Left B piller </label>
             <select class="form-control" multiple id="getLeftBpiller">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
         <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
             <label class="fs-14">Left C piller</label>
             <select class="form-control" multiple id="getLeftCpiller">
                 <option value="T">T</option>
                 <option value="F">F</option>
                 <option value="P">P</option>
                 <option value="A1">A1</option>
                 <option value="A2">A2</option>
                 <option value="E1">E1</option>
                 <option value="E2">E2</option>
                 <option value="LS">LS</option>
                 <option value="W">W</option>
                 <option value="G1">G1</option>
                 <option value="G2">G2</option>
                 <option value="G3">G3</option>
                 <option value="G4">G4</option>
                 <option value="B">B</option>
                 <option value="H">H</option>
                 <option value="PP">PP</option>
                 <option value="C">C</option>
                 <option value="XL">XL</option>
                 <option value="PL">PL</option>
             </select>
         </div>
     </div>

     <div class="mb-4 row">
         <div class="col-lg-6 col-md-6 col-6">
             <div class="text-left">
                 <input type="submit" value="Update" name="" class="btn btn-success pl-2 pr-2" />
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-6">
             <div class="text-right">
                 <input type="button" class="btn btn-primary" value="Download" id="download_btn" />
             </div>
         </div>
     </div>
     <div class="hidden-div" id="divToCapture">
         <div class="table-container" id="myTable">
             <table>
                 <thead>
                     <tr>
                         <th>Sr #</th>
                         <th>Part Name</th>
                         <th>Condition</th>
                     </tr>
                 </thead>
                 <tbody id="tableBody">
                     <!-- Table body content will be dynamically generated using JavaScript -->
                 </tbody>
             </table>
         </div>
     </div>

 </form>