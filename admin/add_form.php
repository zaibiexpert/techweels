<form id="inspection_form" class="px-md-2 make_pdf">
    <div class="mb-4 row">
        <h3 class="mb-5">PRELIMINARY INFORMATION</h3>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Client Name</label>
                <input type="text" id="client_name" name="username" class="form-control" placeholder="Enter First Name" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Vehicle Make</label>
                <input type="text" id="vehicle_name" name="vehicle_name" placeholder="Enter Last Name" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Email</label>
                <input type="text" id="email" placeholder="Enter Email" name="email" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Phone</label>
                <input type="text" id="phone" placeholder="Enter Phone" name="phone" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Inspection Location</label>
                <input type="text" id="city" placeholder="Enter City" name="city" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Inspection Date</label>
                <input type="date" id="date" name="date" class="form-control" />
            </div>
        </div>
    </div>

    <div class="mb-4 row">
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Vehicle Model</label>
                <input type="text" id="vehicle_model" placeholder="Enter Vehicle Model" name="vehicle_model" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Vehicle Variant</label>
                <input type="text" id="vehicle_variant" placeholder="Enter Vehicle Variant" name="vehicle_variant" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Model Year</label>
                <input type="text" id="model_year" placeholder="Enter Model Year" name="model_year" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Transmission</label>
                <input type="text" id="transmission" placeholder="Enter Transmission" name="transmission" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Engine Capacity</label>
                <input type="text" id="engine_capacity" placeholder="Enter Engine Capacity" name="engine_capacity" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Fuel Type</label>
                <input type="text" id="fuel_type" placeholder="Enter Fuel Type" name="fuel_type" class="form-control" />
            </div>
        </div>
    </div>

    <div class="mb-4 row">
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Body Color</label>
                <input type="text" id="body_color" placeholder="Enter Body Color" name="body_color" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Mileage</label>
                <input type="text" id="mileage" placeholder="Enter Mileage" name="mileage" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Registration Number</label>
                <input type="text" id="registration_number" placeholder="Enter Registration Number" name="registration_number" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Registered City</label>
                <input type="text" id="registered_city" placeholder="Enter Registered City" name="registered_city" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Chassis Number</label>
                <input type="text" id="chassis_number" placeholder="Enter Chassis Number" name="chassis_number" class="form-control" />
            </div>
        </div>
        <div class="col-lg-2 md-6">
            <div class="">
                <label class="form-label" for="form3Example1q">Engine Number</label>
                <input type="text" id="engine_number" placeholder="Enter Engine Number" name="engine_number" class="form-control" />
            </div>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14 mb-0 mt-3">Car Front Image</label>
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
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Front Underbody</label> <br />
            <select id="front_under_body" class="form-control" name="frontUnderbody">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Radiator Core Support</label> <br />
            <select id="radiator_core_support" class="form-control" name="radiatorCoreSupport">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Left Front Rail</label> <br />
            <select id="left_Front_Rail" class="form-control" name="leftFrontRail">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Left Strut Tower</label> <br />
            <select id="left_Strut_Tower" class="form-control" name="leftStrutTower">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Right Front Rail</label> <br />
            <select id="right_Front_Rail" class="form-control" name="rightFrontRail">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Right Strut Tower</label> <br />
            <select id="right_Strut_Tower" class="form-control" name="rightStrutTower">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Right A Pillar</label> <br />
            <select id="right_a_pillar" class="form-control" name="rightApillar">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Right B Pillar</label> <br />
            <select id="right_b_pillar" class="form-control" name="rightBpillar">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Right C Pillar</label> <br />
            <select id="right_c_pillar" class="form-control" name="rightCpillar">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Right D Pillar</label> <br />
            <select id="right_d_pillar" class="form-control" name="rightDpillar">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Rear Underbody</label> <br />
            <select id="rear_under_body" class="form-control" name="rearUnderbody">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Boot Floor</label> <br />
            <select id="boot_floor" class="form-control" name="bootFloor">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Left B Pillar</label> <br />
            <select id="left_b_pillar" class="form-control" name="leftBpillar">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Left C Pillar</label> <br />
            <select id="left_c_pillar" class="form-control" name="leftCpillar">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Left D Pillar</label> <br />
            <select id="left_d_pillar" class="form-control" name="leftDpillar">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Left A Pillar</label> <br />
            <select id="left_a_pillar" class="form-control" name="leftApillar">
                <option value="Non Accidented">Non Accidented</option>
                <option value="Accidented">Accidented</option>
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
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Transmission Oil Leakage</label> <br />
            <select id="transmission_Oil_Leakage" class="form-control" name="transmissionOilLeakage">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Brake Oil Leakage</label> <br />
            <select id="brake_Oil_Leakage" class="form-control" name="brakeOilLeakage">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Radiator</label> <br />
            <select id="radiator" class="form-control" name="radiator">
                <option value="Normal">Normal</option>
                <option value="Not Good">Not Good</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Suction Fan</label> <br />
            <select id="suction_Fan" class="form-control" name="suctionFan">
                <option value="Normal">Normal</option>
                <option value="Not Good">Not Good</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Exhaust Sound</label> <br />
            <select id="exhaust_Sound" class="form-control" name="exhaustSound">
                <option value="Normal">Normal</option>
                <option value="Not Good">Not Good</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Engine Blow</label> <br />
            <select id="engine_Blow" class="form-control" name="engineBlow">
                <option value="Not Present">Not Present</option>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Engine Noisy</label> <br />
            <select id="engine_Noisy" class="form-control" name="engineNoisy">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
                <option value="Not Present">Not Present</option>
                <option value="Normal Sound">Normal Sound</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Engine Vibrations</label> <br />
            <select id="engine_Vibration" class="form-control" name="engineVibration">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
                <option value="Normal Sound">Normal Sound</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Engine Smoke</label> <br />
            <select id="engine_Smoke" class="form-control" name="engineSmoke">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Engine Smoke Color</label> <br />
            <select id="engine_Smoke_Color" class="form-control" name="engineSmokeColor">
                <option value="N/A">N/A</option>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Coolant Leakage</label> <br />
            <select id="coolant_Leakage" class="form-control" name="coolantLeakage">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Gear Transmission</label> <br />
            <select id="gear_Transmission" class="form-control" name="gearTransmission">
                <option value="Smooth">Smooth</option>
                <option value="Not Good">Not Good</option>
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
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>A/C Fan</label> <br />
            <select id="ac_Fan" class="form-control" name="acFan">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Blower Throw</label> <br />
            <select id="blower_Throw" class="form-control" name="blowerThrow">
                <option value="Normal">Normal</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>A/C Cooling</label> <br />
            <select id="ac_Cooling" class="form-control" name="acCooling">
                <option value="Normal">Normal</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Heater</label> <br />
            <select id="heater" class="form-control" name="heater">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
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
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="keyButtons" class="mb-4 pb-1">Panel Buttons</label> <br />
            <select class="form-control" id="panel_Buttons" name="keyButtons">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="centralLocking" class="mb-4 pb-1">Central Locking</label> <br />
            <select class="form-control" id="central_Locking" name="centralLocking">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="windowsType" class="mb-4 pb-1">Windows Type</label> <br />
            <select class="form-control" id="windows_Type" name="windowsType">
                <option value="Manual">Manual</option>
                <option value="Automatic">Automatic</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="windowSafetylockButton">Window Safety Lock Button</label> <br />
            <select class="form-control" id="window_Safety_lock_Button" name="windowSafetylockButton">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="frontDriverwindow" class="mb-4 pb-1"> Driver Side Window</label> <br />
            <select class="form-control" id="Driver_side_window" name="frontDriverwindow">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rearDriversideWindow" class="mb-4 pb-1">Front right door window</label> <br />
            <select class="form-control" id="front_right_door_Window" name="rearDriversideWindow">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rearPassengersideWindow">Rear Right Door Window</label> <br />
            <select class="form-control" id="rear_right_door_Window" name="rearPassengersideWindow">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rearPassengersideWindow">Front Right seat belt</label> <br />
            <select class="form-control" id="Front_Right_seat_belt" name="front_right_seat_belt">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rearPassengersideWindow">Rear Right seat belt</label> <br />
            <select class="form-control" id="rear_right_seat_belt" name="rear_right_seat_belt">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="seatsCondition">Seats Condition</label> <br />
            <select class="form-control" id="seats_Condition" name="seatsCondition">
                <option value="Clean">Clean</option>
                <option value="Bad">Bad</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="seatsType">Seats Type</label> <br />
            <select class="form-control" id="seats_Type" name="seatsType">
                <option value="Fabric">Fabric</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="steeringWheelwearTear">Steering Wheel Wear And Tear</label> <br />
            <select class="form-control" id="steering_Wheel_wear_Tear" name="steeringWheelwearTear">
                <option value="damaged">Damaged</option>
                <option value="faded">Faded</option>
                <option value="replaced">Replaced </option>
                <option value="good">Good</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="steeringWheelbutton">Steering Wheel Buttons</label> <br />
            <select class="form-control" id="steering_Wheel_button" name="steeringWheelbutton">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="lightLeverswitch">Lights Lever/ Switch</label> <br />
            <select class="form-control" id="light_Lever_switch" name="lightLeverswitch">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="dashboard">Dashboard</label> <br />
            <select class="form-control" id="dashboard" name="dashboard">
                <option value="damaged">Damaged</option>
                <option value="faded">Faded</option>
                <option value="replaced">Replaced </option>
                <option value="good">Good</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="dashControlbuttons">Dash Control Buttons</label> <br />
            <select class="form-control" id="dash_Control_buttons" name="dashControlbuttons">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="interiorLights">Interior Lights</label> <br />
            <select class="form-control" id="interior_Lights" name="interiorLights">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="deFogger">De-fogger</label> <br />
            <select class="form-control" id="de_Fogger" name="deFogger">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="hazardLights">Hazard Lights</label> <br />
            <select class="form-control" id="hazard_Lights" name="hazardLights">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="multimedia">Multimedia</label> <br />
            <select class="form-control" id="multimedia" name="multimedia">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rearCamera">Rear Camera</label> <br />
            <select class="form-control" id="rear_Camera" name="rearCamera">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="frontViewcamera">Front View Camera</label> <br />
            <select class="form-control" id="front_View_camera" name="frontViewcamera">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="trunkReleaselever">Trunk Release Lever</label> <br />
            <select class="form-control" id="trunk_Release_lever" name="trunkReleaselever">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="fuelcapReleaseLever" class="mb-4 pb-1">Fuel Cap Release Lever</label> <br />
            <select class="form-control" id="fuel_cap_Release_Lever" name="fuelcapReleaseLever">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="bonnetReleaselever" class="mb-4 pb-1">Bonnet Release Lever</label> <br />
            <select class="form-control" id="bonnet_Release_lever" name="bonnetReleaselever">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="sideViewmirrorAdjustment">Side-view Mirror Adjustment</label> <br />
            <select class="form-control" id="side_View_mirror_Adjustment" name="sideViewmirrorAdjustment">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="leftSideviewMirror" class="mb-4 pb-1">Left Side-view Mirror</label> <br />
            <select class="form-control" id="left_Side_view_Mirror" name="leftSideviewMirror">
                <option value="Normal">Normal</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rightSideviewMirror" class="mb-4 pb-1">Right Side-view Mirror</label> <br />
            <select class="form-control" id="right_Side_view_Mirror" name="rightSideviewMirror">
                <option value="Normal">Normal</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="retractingSideviewMirrors">Retracting Side-view Mirrors</label> <br />
            <select class="form-control" id="retracting_Side_view_Mirrors" name="retractingSideviewMirrors">
                <option value="Normal">Normal</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="acGrills">A/C Grills</label> <br />
            <select class="form-control" id="ac_Grills" name="acGrills">
                <option value="Normal">Normal</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="acceleratorPedal">Accelerator Pedal</label> <br />
            <select class="form-control" id="accelerator_Pedal" name="acceleratorPedal">
                <option value="Normal">Normal</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="breakPedal">Brake Pedal</label> <br />
            <select class="form-control" id="break_Pedal" name="breakPedal">
                <option value="Normal">Normal</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="clutchPedal">Clutch Pedal</label> <br />
            <select class="form-control" id="clutch_Pedal" name="clutchPedal">
                <option value="Normal">Normal</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>


        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="driverSeatbelt" class="mb-4 pb-1">Driver Seatbelt</label> <br />
            <select class="form-control" id="driver_Seat_belt" name="driverSeatbelt">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="passengerSeatbelt" class="mb-4 pb-1">Passenger Seatbelt</label> <br />
            <select class="form-control" id="passenger_Seat_belt" name="passengerSeatbelt">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>





        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="frontPassengerwindow" class="mb-4 pb-1">Front Passenger Window</label> <br />
            <select class="form-control" id="front_Passenger_window" name="frontPassengerwindow">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
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
                <option value="Strong">Strong</option>
                <option value="Weak">Weak</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="horn">Horn</label> <br />
            <select class="form-control" id="horn" name="horn">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rightHeadlightOperation">Right Headlight Operation</label> <br />
            <select class="form-control" id="right_Head_light_Operation" name="rightHeadlightOperation">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rightHeadlightCondition">Right Headlight Condition</label> <br />
            <select class="form-control" id="right_Head_light_Condition" name="rightHeadlightCondition">
                <option value="Normal">Normal</option>
                <option value="Faded & Scratched">Faded & Scratched</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rightHeadlight">Right Headlight</label> <br />
            <select class="form-control" id="right_Head_light" name="rightHeadlight">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="leftHeadlightOperation">Left Headlight Operation</label> <br />
            <select class="form-control" id="left_Head_light_Operation" name="leftHeadlightOperation">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="leftHeadlightCondition">Left Headlight Condition</label> <br />
            <select class="form-control" id="left_Head_light_Condition" name="leftHeadlightCondition">
                <option value="Normal">Normal</option>
                <option value="Faded & Scratched">Faded & Scratched</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="leftHeadlight">Left Headlight</label> <br />
            <select class="form-control" id="left_Head_light" name="leftHeadlight">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="foglightsOperation">Foglights Operation</label> <br />
            <select class="form-control" id="fog_lights_Operation" name="foglightsOperation">
                <option value="Normal">Normal</option>
                <option value="Faded & Scratched">Faded & Scratched</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="leftTaillightsOperation">Left Tail Lights Operation</label> <br />
            <select class="form-control" id="left_Tail_lights_Operation" name="leftTaillightsOperation">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="leftTaillightsCondition">Left Tail Lights Condition</label> <br />
            <select class="form-control" id="left_Tail_lights_Condition" name="leftTaillightsCondition">
                <option value="Normal">Normal</option>
                <option value="Faded & Scratched">Faded & Scratched</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="leftTaillights">Left Tail Lights</label> <br />
            <select class="form-control" id="left_Tail_lights" name="leftTaillights">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rightTaillightsOperation">Right Tail Lights Operation</label> <br />
            <select class="form-control" id="right_Tail_lights_Operation" name="rightTaillightsOperation">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rightTaillightsCondition">Right Tail Lights Condition</label> <br />
            <select class="form-control" id="right_Tail_lights_Condition" name="rightTaillightsCondition">
                <option value="Normal">Normal</option>
                <option value="Faded & Scratched">Faded & Scratched</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rightTaillights">Right Tail Lights</label> <br />
            <select class="form-control" id="right_Tail_lights" name="rightTaillights">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="windshieldWipers">Windshield Wipers</label> <br />
            <select class="form-control" id="windshield_Wipers" name="windshieldWipers">
                <option value="Working">Working</option>
                <option value="Not Working">Not Working</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="airbags">Airbags</label> <br />
            <select class="form-control" id="airbags" name="airbags">
                <option value="Not Present">Not Present</option>
                <option value="Present">Present</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="checkLights">Check Lights</label> <br />
            <select class="form-control" id="checkLights" name="checkLights">
                <option value="Off">Off</option>
                <option value="On">On</option>
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
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Axle Boots</label> <br />
            <select class="form-control" id="axle_Boots" name="axleBoots">
                <option value="Normal">Normal</option>
                <option value="Damaged">Damaged</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Right Ball Joint</label> <br />
            <select class="form-control" id="right_Ball_joint" name="rightBalljoint">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Left Ball Joint</label> <br />
            <select class="form-control" id="left_Ball_joint" name="leftBalljoint">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Tie Rod End</label> <br />
            <select class="form-control" id="tie_Rod_end" name="tieRodend">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Right Boot</label> <br />
            <select class="form-control" id="right_Boot" name="rightBoot">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Left Boot</label> <br />
            <select class="form-control" id="left_Boot" name="leftBoot">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Right Bush</label> <br />
            <select class="form-control" id="right_Bush" name="rightBush">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Left Bush</label> <br />
            <select class="form-control" id="left_Bush" name="leftBush">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Rear Right Shock Absorber</label> <br />
            <select class="form-control" id="rear_Right_shock_Absorder" name="rearRightshockAbsorder">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Rear Left Shock Absorber</label> <br />
            <select class="form-control" id="rear_Left_shock_Absorder" name="rearLeftshockAbsorder">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Front Right Shock Absorber</label> <br />
            <select class="form-control" id="front_Right_shock_Absorder" name="frontRightshockAbsorder">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Front Left Shock Absorber</label> <br />
            <select class="form-control" id="front_Left_Shock_Absorder" name="frontLeftShockAbsorder">
                <option value="Normal">Normal</option>
                <option value="Service Require">Service Require</option>
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
            <label class="mb-4 pb-1">Bonnet</label> <br />
            <select class="form-control" id="bonnet" name="bonnet">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Bonnet Images</label>
            <div class="card-body">
                <div id="bonnet_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="bonnet_Seal" class="mb-4 pb-1">Bonnet Seal</label> <br />
            <select class="form-control" id="bonnetSeal" name="bonnetSeal">
                <option value="Original">Original</option>
                <option value="not Original">Not Original</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Front Right Fender</label> <br />
            <select class="form-control" id="front_right_fender" name="frontDriverfender">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-0 mt-3">Front Right Fender Images</label>
            <div class="card-body">
                <div id="frontDriverfender_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Front Right Door</label> <br />
            <select class="form-control" id="front_right_door" name="frontDriverdoor">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-0 mt-3">Front Right Door images</label>
            <div class="card-body">
                <div id="frontDriverdoor_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="frontDriverdoorSeal" class="mb-4 pb-1">Front Right Door Seal</label> <br />
            <select class="form-control" id="front_Driver_door_Seal" name="frontDriverdoorSeal">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Rear Right Door</label> <br />
            <select class="form-control" id="rear_right_door" name="rearDriverdoor">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Rear Right Door images</label>
            <div class="card-body">
                <div id="rearDriverdoor_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rear_Driver_side_Door_Seal" class="mb-4 pb-1">Rear Right Door Seal</label> <br />
            <select class="form-control" id="rear_right_Door_Seal" name="rearDriversideDoorSeal">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Trunk</label> <br />
            <select class="form-control" id="trunk" name="trunk">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Trunk images</label>
            <div class="card-body">
                <div id="trunk_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="trunk_Seal" class="mb-4 pb-1">Trunk Seal Original</label> <br />
            <select class="form-control" id="trunk_Seal" name="trunkSeal">
                <option value="Original">Original</option>
                <option value="not Original">Not Original</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Trunk Lock</label> <br />
            <select class="form-control" id="trunk_Lock" name="trunkLock">
                <option value="Working">Working</option>
                <option value="not Working">Not Working</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Trunk Lock Images</label>
            <div class="card-body">
                <div id="trunkLock_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>


        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Front Wind Screen</label> <br />
            <select class="form-control" id="front_Wind_shield" name="frontWindshield">
                <option value="T">Total Geniun</option>
                <option value="B">Broken </option>
                <option value="R">Replaced </option>
                <option value="C">Chipped</option>
            </select>
            <label class="fs-14 mb-0 mt-3">Front Wind Screen Images</label>
            <div class="card-body">
                <div id="frontWindshield_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Front Passenger Fender</label> <br />
            <select class="form-control" id="front_Passenger_fender" name="frontPassengerfender">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
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
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
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
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
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
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-0 mt-3">Rear Passenger Fender images</label>
            <div class="card-body">
                <div id="rearPassengerfender_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>



        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Rear Screen</label> <br />
            <select class="form-control" id="rear_screen" name="rearWinshield">
                <option value="T">Total Geniun</option>
                <option value="B">Broken </option>
                <option value="R">Replaced </option>
                <option value="C">Chipped</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Rear Screen images</label>
            <div class="card-body">
                <div id="rearWindshield_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Rear Driver Fender</label> <br />
            <select class="form-control" id="rear_Driver_fender" name="rearDriverfender">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
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
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Roof images</label>
            <div class="card-body">
                <div id="roof_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Panels</label> <br />
            <select class="form-control" id="panels" name="panels">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Panels images</label>
            <div class="card-body">
                <div id="panels_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Driver A Pillar</label> <br />
            <select class="form-control" id="driver_A_pillar" name="driverApillar">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Driver A Pillar images</label>
            <div class="card-body">
                <div id="driverApillar_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Driver B Pillar</label> <br />
            <select class="form-control" id="driver_B_pillar" name="driverBpillar">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Driver B Pillar images</label>
            <div class="card-body">
                <div id="driverBpillar_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Driver C Pillar</label> <br />
            <select class="form-control" id="driver_C_pillar" name="driverCpillar">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Driver C Pillar images</label>
            <div class="card-body">
                <div id="driverCpillar_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Driver D Pillar</label> <br />
            <select class="form-control" id="driver_D_pillar" name="driverDpillar">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-4 mt-3">Driver D Pillar images</label>
            <div class="card-body">
                <div id="driverDpillar_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Passenger A Pillar</label> <br />
            <select class="form-control" id="passenger_A_pillar" name="passengerApillar">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
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
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
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
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
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
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="N/A">N/A</option>
            </select>
            <label class="fs-14 mb-0 mt-3">Passenger D Pillar images</label>
            <div class="card-body">
                <div id="passengerDpillar_images_picker" class="row"></div>
                <div id="preview-container"></div>
            </div>
        </div>




        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="front_Passenger_Door_Seal" class="mb-4 pb-1">Front Passenger Door Seal</label> <br />
            <select class="form-control" id="front_Passenger_Door_Seal" name="frontPassengerDoorSeal">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rearPassengersideDoorSeal" class="mb-4 pb-1">rear Passenger Door Seal</label> <br />
            <select class="form-control" id="rear_Passenger_side_Door_Seal" name="rearPassengersideDoorSeal">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="frontDriverdoorSeal" class="mb-4 pb-1">Front Driver Door Seal</label> <br />
            <select class="form-control" id="front_Driver_door_Seal" name="frontDriverdoorSeal">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="front_Passenger_Door_Seal" class="mb-4 pb-1">Front Passenger Door Seal</label> <br />
            <select class="form-control" id="front_Passenger_Door_Seal" name="frontPassengerDoorSeal">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rearPassengersideDoorSeal" class="mb-4 pb-1">rear Passenger Door Seal</label> <br />
            <select class="form-control" id="rear_Passenger_side_Door_Seal" name="rearPassengersideDoorSeal">
                <option value="Original">Original</option>
                <option value="Not Original">Not Original</option>
            </select>
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
            <select class="form-control" name="front_Driver_tyre_Condition">
                <option value="Good">Good</option>
                <option value="Normal">Normal</option>
                <option value="not Good">Not Good</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Rear Passenger Tyre Condition</label> <br />
            <select name="rear_Passenger_tyre_Condition" class="form-control">
                <option value="Good">Good</option>
                <option value="Normal">Normal</option>
                <option value="not Good">Not Good</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Front Passenger Tyre Brand </label> <br />
            <input type="text" class="form-control" name="front_Passenger_tyre_Brand" />
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Front Passenger Tyre Size</label> <br />
            <input type="text" class="form-control" name="front_Passenger_tyre_Size" />
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Front Passenger Tyre Condition</label> <br />
            <select class="form-control" name="front_Passenger_tyre_Condition">
                <option value="Good">Good</option>
                <option value="Normal">Normal</option>
                <option value="not Good">Not Good</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Front Driver Tyre Brand</label> <br />
            <input type="text" class="form-control" name="front_Driver_tyre_Brand" />
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Front Driver Tyre Size</label> <br />
            <input type="text" class="form-control" name="front_Driver_tyre_Size" />
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Rear Passenger Tyre Brand</label> <br />
            <input type="text" name="rear_Passenger_tyre_Brand" class="form-control" />
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Rear Passenger Tyre Size</label> <br />
            <input type="text" class="form-control" name="rear_Passenger_Tyre_size" />
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Rear Driver Tyre Brand</label> <br />
            <input type="text" class="form-control" name="rear_Driver_Tyre_brand" />
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Rear Driver Tyre Size</label> <br />
            <input type="text" class="form-control" name="rear_Driver_tyre_Size" />
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="mb-4 pb-1">Rear Driver Tyre Condition</label> <br />
            <select class="form-control" name="rear_Driver_tyre_Condition">
                <option value="Good">Good</option>
                <option value="Normal">Normal</option>
                <option value="not Good">Not Good</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label>Alloy Rims</label> <br />
            <select class="form-control" name="alloy_Rims">
                <option value="yes">Yes</option>
                <option value="no">No</option>
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
                <option value="Present">Present</option>
                <option value="Not Present">Not Present</option>
                <option value="N/A">N/A</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="toolKit">Tool Kit</label> <br />
            <select class="form-control" id="tool_Kit" name="toolKit">
                <option value="Present">Present</option>
                <option value="Not Present">Not Present</option>
                <option value="N/A">N/A</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="jack">Jack</label> <br />
            <select class="form-control" id="jack" name="jack">
                <option value="Present">Present</option>
                <option value="Not Present">Not Present</option>
                <option value="N/A">N/A</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="punctureRepairkit">Puncture Repair Kit</label> <br />
            <select class="form-control" id="punctureRepairkit" name="puncture_Repair_kit">
                <option value="Present">Present</option>
                <option value="Not Present">Not Present</option>
                <option value="N/A">N/A</option>
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
            <label for="speedmeterInformation">Speedometer</label> <br />
            <select class="form-control" id="speedometer" name="speedmeterInformation">
                <option value="Working">Working</option>
                <option value="not Working">Not Working</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="frontSuspensionNoise">Front Suspension Noise</label> <br />
            <select class="form-control" id="front_Suspension_Noise" name="frontSuspensionNoise">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="rearSuspensionNoise">Rear Suspension Noise</label> <br />
            <select class="form-control" id="rear_Suspension_Noise" name="rearSuspensionNoise">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="enginePick">Engine Pick</label> <br />
            <select class="form-control" id="engine_Pick" name="enginePick">
                <option value="Normal">Normal</option>
                <option value="Service Required">Service Required</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="gearShifting">Gear Shifting</label> <br />
            <select class="form-control" id="gear_Shifting" name="gearShifting">
                <option value="Smooth">Smooth</option>
                <option value="Normal">Normal</option>
                <option value="Service Required">Service Required</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="differentialNoise">Differential Noise</label> <br />
            <select class="form-control" id="differential_Noise" name="differentialNoise">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="driveShaftnoise">Drive Shaft Noise</label> <br />
            <select class="form-control" id="drive_Shaft_noise" name="driveShaftnoise">
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="absActuation">ABS Actuation</label> <br />
            <select class="form-control" id="abs_Actuation" name="absActuation">
                <option value="Timely Response">Timely Response</option>
                <option value="Service Required">Service Required</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="brakePedaloperation">Brake Pedal Operation</label> <br />
            <select class="form-control" id="brake_Pedal_operation" name="brakePedaloperation">
                <option value="Timely Response">Timely Response</option>
                <option value="Service Required">Service Required</option>
            </select>
        </div>

        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="steeringFunction">Steering Function</label> <br />
            <select class="form-control" id="steering_Function" name="steeringFunction">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label for="steeringWheelalignment">Steering Wheel Alignment</label> <br />
            <select class="form-control" id="steering_Wheel_alignment" name="steeringWheelalignment">
                <option value="Center">Center</option>
                <option value="not Center">Not Center</option>
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
                <textarea class="form-control" id="client_msg" name="message" rows="6"></textarea>
            </div>
        </div>
        <div class="col-lg-6 md-12">
            <div class="form-group">
                <label for="client_msg">Additional Notes from Admin*</label>
                <textarea class="form-control" id="admin_msg" name="admin_message" rows="6"></textarea>
            </div>
        </div>
    </div>

    <div class="mb-4 mt-4 row">
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Front Bumper</label>
            <select class="form-control" multiple id="getFrontBumper">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Bonnet</label>
            <select class="form-control" multiple id="getBonnet">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Right Fender</label>
            <select class="form-control" multiple id="getRightFender">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Front Right Door</label>
            <select class="form-control" multiple id="getFrontrightDoor">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Back Right Door</label>
            <select class="form-control" multiple id="getBackrightDoor">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Right Quater panel </label>
            <select class="form-control" multiple id="getRightQuaterpanel">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Right A piller</label>
            <select class="form-control" multiple id="getRightApiller">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
    </div>

    <div class="mb-4 mt-4 row">
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Right B piller</label>
            <select class="form-control" multiple id="getRightBpiller">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Right C piller</label>
            <select class="form-control" multiple id="getRightCpiller">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Roof</label>
            <select class="form-control" multiple id="getRoof">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Trunk</label>
            <select class="form-control" multiple id="getTrunk">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Back Bumper </label>
            <select class="form-control" multiple id="getBackbumper">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Left Quater panel</label>
            <select class="form-control" multiple id="getLeftQuaterpanel">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
    </div>


    <div class="mb-4 mt-4 row">
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Back Left Door</label>
            <select class="form-control" multiple id="getBackLeftDoor">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Front Left Door </label>
            <select class="form-control" multiple id="getFrontLeftDoor">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Front Left Fender</label>
            <select class="form-control" multiple id="getFrontLeftFender">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Left A piller</label>
            <select class="form-control" multiple id="getLeftApiller">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Left B piller </label>
            <select class="form-control" multiple id="getLeftBpiller">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
        <div class='col-lg-2 col-md-4 col-sm-4 mb-3'>
            <label class="fs-14">Left C piller</label>
            <select class="form-control" multiple id="getLeftCpiller">
                <option value="T">T</option>
                <option value="P">P</option>
                <option value="W">Q</option>
                <option value="W1">W1</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="E1">E1</option>
                <option value="E2">E2</option>
                <option value="B">B</option>
                <option value="G">G</option>
                <option value="C">C</option>
                <option value="R">R</option>
            </select>
        </div>
    </div>


    <div class="mb-4 row">
        <div class="col-lg-6 col-md-6">
            <div class="text-left">
                <input type="submit" value="Save" name="" class="btn btn-success pl-2 pr-2" />
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
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