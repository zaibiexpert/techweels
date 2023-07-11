 <!-- Get previous inpection data start-->
                            <?php

                            //preliminary_information
                            if (isset($_REQUEST['update_inspection_id'])) {
                                $update_inspection_id = $_REQUEST['update_inspection_id'];
                                $select_preliminary_information = "select * from preliminary_information where id='$update_inspection_id'";
                                $run_select_preliminary_information = mysqli_query($conn, $select_preliminary_information);
                                while ($get_preliminary_information = mysqli_fetch_array($run_select_preliminary_information)) {
                                    $previous_preliminary_information_id = $get_preliminary_information['id'];
                                    $previous_username = $get_preliminary_information['username'];
                                    $previous_vehicle_name = $get_preliminary_information['vehicle_name'];
                                    $previous_email = $get_preliminary_information['email'];
                                    $previous_phone = $get_preliminary_information['phone'];
                                    $previous_city = $get_preliminary_information['city'];
                                    $previous_date = $get_preliminary_information['date'];
                                    $previous_vehicle_model = $get_preliminary_information['vehicle_model'];
                                    $previous_vehicle_variant = $get_preliminary_information['vehicle_variant'];
                                    $previous_model_year = $get_preliminary_information['model_year'];
                                    $previous_transmission = $get_preliminary_information['transmission'];
                                    $previous_engine_capacity = $get_preliminary_information['engine_capacity'];
                                    $previous_fuel_type = $get_preliminary_information['fuel_type'];
                                    $previous_body_color = $get_preliminary_information['body_color'];
                                    $previous_mileage = $get_preliminary_information['mileage'];
                                    $previous_registration_number = $get_preliminary_information['registration_number'];
                                    $previous_registered_city = $get_preliminary_information['registered_city'];
                                    $previous_chassis_number = $get_preliminary_information['chassis_number'];
                                    $previous_engine_number = $get_preliminary_information['engine_number'];
                                    $previous_message = $get_preliminary_information['message'];
                                }

                                //accidental_checklist
                                $select_accidental_checklist = "select * from accidental_checklist where preliminary_information_id='$update_inspection_id'";
                                $run_select_accidental_checklist = mysqli_query($conn, $select_accidental_checklist);
                                while ($get_accidental_checklist = mysqli_fetch_array($run_select_accidental_checklist)) {
                                    $previous_accidental_checklist_id = $get_accidental_checklist['id'];
                                    $previous_engineRoom = $get_accidental_checklist['engineRoom'];
                                    $previous_rightStrutTower = $get_accidental_checklist['rightStrutTower'];
                                    $previous_leftStrutTower = $get_accidental_checklist['leftStrutTower'];
                                    $previous_rightFrontRail = $get_accidental_checklist['rightFrontRail'];
                                    $previous_leftFrontRail = $get_accidental_checklist['leftFrontRail'];
                                    $previous_radiatorCoreSupport = $get_accidental_checklist['radiatorCoreSupport'];
                                    $previous_rightApillar = $get_accidental_checklist['rightApillar'];
                                    $previous_leftApillar = $get_accidental_checklist['leftApillar'];
                                    $previous_rightBpillar = $get_accidental_checklist['rightBpillar'];
                                    $previous_leftBpillar = $get_accidental_checklist['leftBpillar'];
                                    $previous_rightCpillar = $get_accidental_checklist['rightCpillar'];
                                    $previous_leftCpillar = $get_accidental_checklist['leftCpillar'];
                                    $previous_rightDpillar = $get_accidental_checklist['rightDpillar'];
                                    $previous_leftDpillar = $get_accidental_checklist['leftDpillar'];
                                    $previous_bootFloor = $get_accidental_checklist['bootFloor'];
                                    $previous_frontUnderbody = $get_accidental_checklist['frontUnderbody'];
                                    $previous_rearUnderbody = $get_accidental_checklist['rearUnderbody'];
                                }
                                //accidental_checklist images
                                $select_accidental_images = "select * from accidental_images where accidental_checklist_id='$previous_accidental_checklist_id'";
                                $run_select_accidental_images = mysqli_query($conn, $select_accidental_images);
                                while ($get_accidental_images = mysqli_fetch_array($run_select_accidental_images)) {
                                    $previous_accidental_images_id = $get_accidental_images['id'];
                                    $previous_accidental_image = $get_accidental_images['image'];
                                }

                                // mechanical_function
                                $select_mechanical_function = "select * from mechanical_function where preliminary_information_id='$update_inspection_id'";
                                $run_select_mechanical_function = mysqli_query($conn, $select_mechanical_function);
                                while ($get_mechanical_function = mysqli_fetch_array($run_select_mechanical_function)) {
                                    $previous_mechanical_function_id = $get_mechanical_function['id'];
                                    $previous_gearTransmission = $get_mechanical_function['gearTransmission'];
                                    $previous_suctionFan = $get_mechanical_function['suctionFan'];
                                    $previous_radiator = $get_mechanical_function['radiator'];
                                    $previous_exhaustSound = $get_mechanical_function['exhaustSound'];
                                    $previous_transmissionOilLeakage = $get_mechanical_function['transmissionOilLeakage'];
                                    $previous_brakeOilLeakage = $get_mechanical_function['brakeOilLeakage'];
                                    $previous_coolantLeakage = $get_mechanical_function['coolantLeakage'];
                                    $previous_engineBlow = $get_mechanical_function['engineBlow'];
                                    $previous_engineSmokeColor = $get_mechanical_function['engineSmokeColor'];
                                    $previous_engineSmoke = $get_mechanical_function['engineSmoke'];
                                    $previous_engineVibration = $get_mechanical_function['engineVibration'];
                                    $previous_engineNoisy = $get_mechanical_function['engineNoisy'];
                                    $previous_engine_oil_leakage = $get_mechanical_function['engine_oil_leakage'];

                                    
                                }

                                // mechanical_function images
                                $select_mechanical_images = "select * from mechanical_images where mechanical_function_id='$previous_mechanical_function_id'";
                                $run_select_mechanical_images = mysqli_query($conn, $select_mechanical_images);
                                while ($get_mechanical_images = mysqli_fetch_array($run_select_mechanical_images)) {
                                    $previous_mechanical_images_id = $get_mechanical_images['id'];
                                    $previous_mechanical_image = $get_mechanical_images['image'];
                                }


                                // ac_heater_operation
                                $select_ac_heater_operation = "SELECT * FROM ac_heater_operation WHERE preliminary_information_id='$update_inspection_id'";
                                $run_select_ac_heater_operation = mysqli_query($conn, $select_ac_heater_operation);
                                while ($get_ac_heater_operation = mysqli_fetch_array($run_select_ac_heater_operation)) {
                                    $previous_ac_heater_operation_id = $get_ac_heater_operation['id'];
                                    $previous_acInstalled = $get_ac_heater_operation['acInstalled'];
                                    $previous_acFan = $get_ac_heater_operation['acFan'];
                                    $previous_blowerThrow = $get_ac_heater_operation['blowerThrow'];
                                    $previous_acCooling = $get_ac_heater_operation['acCooling'];
                                    $previous_heater = $get_ac_heater_operation['heater'];
                                }

                                // ac_heater_operation images
                                $select_ac_heater_images = "SELECT * FROM ac_heater_images WHERE ac_heater_operation_id='$previous_ac_heater_operation_id'";
                                $run_select_ac_heater_images = mysqli_query($conn, $select_ac_heater_images);
                                while ($get_ac_heater_images = mysqli_fetch_array($run_select_ac_heater_images)) {
                                    $previous_ac_heater_images_id = $get_ac_heater_images['id'];
                                    $previous_ac_heater_image = $get_ac_heater_images['image'];
                                }

                                //interior
                                $select_interior = "select * from interior where preliminary_information_id='$update_inspection_id'";
                                $run_select_interior = mysqli_query($conn, $select_interior);
                                while ($get_interior = mysqli_fetch_array($run_select_interior)) {
                                    $previous_interior_id = $get_interior['id'];
                                    $previous_trunkSeal = $get_interior['trunkSeal'];
                                    $previous_bonnetSeal = $get_interior['bonnetSeal'];
                                    $previous_rearPassengersideDoorSeal = $get_interior['rearPassengersideDoorSeal'];
                                    $previous_rearDriversideDoorSeal = $get_interior['rearDriversideDoorSeal'];
                                    $previous_frontPassengerDoorSeal = $get_interior['frontPassengerDoorSeal'];
                                    $previous_frontDriverdoorSeal = $get_interior['frontDriverdoorSeal'];
                                    $previous_floorMats = $get_interior['floorMats'];
                                    $previous_keyButtons = $get_interior['keyButtons'];
                                    $previous_centralLocking = $get_interior['centralLocking'];
                                    $previous_windowSafetylockButton = $get_interior['windowSafetylockButton'];
                                    $previous_rearPassengersideWindow = $get_interior['rearPassengersideWindow'];
                                    $previous_front_right_seat_belt = $get_interior['front_right_seat_belt'];
                                    $previous_rear_right_seat_belt = $get_interior['rear_right_seat_belt'];
                                    $previous_rearDriversideWindow = $get_interior['rearDriversideWindow'];
                                    $previous_frontPassengerwindow = $get_interior['frontPassengerwindow'];
                                    $previous_frontDriverwindow = $get_interior['frontDriverwindow'];
                                    $previous_windowsType = $get_interior['windowsType'];
                                    $previous_passengerSeatbelt = $get_interior['passengerSeatbelt'];
                                    $previous_driverSeatbelt = $get_interior['driverSeatbelt'];
                                    $previous_seatsCondition = $get_interior['seatsCondition'];
                                    $previous_seatsType = $get_interior['seatsType'];
                                    $previous_clutchPedal = $get_interior['clutchPedal'];
                                    $previous_breakPedal = $get_interior['breakPedal'];
                                    $previous_acceleratorPedal = $get_interior['acceleratorPedal'];
                                    $previous_acGrills = $get_interior['acGrills'];
                                    $previous_retractingSideviewMirrors = $get_interior['retractingSideviewMirrors'];
                                    $previous_rightSideviewMirror = $get_interior['rightSideviewMirror'];
                                    $previous_leftSideviewMirror = $get_interior['leftSideviewMirror'];
                                    $previous_sideViewmirrorAdjustment = $get_interior['sideViewmirrorAdjustment'];
                                    $previous_bonnetReleaselever = $get_interior['bonnetReleaselever'];
                                    $previous_fuelcapReleaseLever = $get_interior['fuelcapReleaseLever'];
                                    $previous_trunkReleaselever = $get_interior['trunkReleaselever'];
                                    $previous_frontViewcamera = $get_interior['frontViewcamera'];
                                    $previous_rearCamera = $get_interior['rearCamera'];
                                    $previous_multimedia = $get_interior['multimedia'];
                                    $previous_hazardLights = $get_interior['hazardLights'];
                                    $previous_deFogger = $get_interior['deFogger'];
                                    $previous_interiorLights = $get_interior['interiorLights'];
                                    $previous_dashControlbuttons = $get_interior['dashControlbuttons'];
                                    $previous_dashboard = $get_interior['dashboard'];
                                    $previous_lightLeverswitch = $get_interior['lightLeverswitch'];
                                    $previous_steeringWheelbutton = $get_interior['steeringWheelbutton'];
                                    $previous_steeringWheelwearTear = $get_interior['steeringWheelwearTear'];
                                }
                                //interior images
                                $select_interior_images = "select * from interior_images where interior_id='$previous_interior_id'";
                                $run_select_interior_images = mysqli_query($conn, $select_interior_images);
                                while ($get_interior_images = mysqli_fetch_array($run_select_interior_images)) {
                                    $previous_interior_images_id = $get_interior_images['id'];
                                    $previous_interior_image = $get_interior_images['image'];
                                }



                                // tyres
                                $select_tyres = "SELECT * FROM tyres WHERE preliminary_information_id='$update_inspection_id'";
                                $run_select_tyres = mysqli_query($conn, $select_tyres);
                                while ($get_tyres = mysqli_fetch_array($run_select_tyres)) {
                                    $previous_tyres_id = $get_tyres['id'];
                                    $previous_alloyRims = $get_tyres['alloyRims'];
                                    $previous_rearDrivertyreCondition = $get_tyres['rearDrivertyreCondition'];
                                    $previous_rearDrivertyreSize = $get_tyres['rearDrivertyreSize'];
                                    $previous_rearDriverTyrebrand = $get_tyres['rearDriverTyrebrand'];
                                    $previous_rearPassengertyreCondition = $get_tyres['rearPassengertyreCondition'];
                                    $previous_rearPassengerTyresize = $get_tyres['rearPassengerTyresize'];
                                    $previous_rearPassengertyreBrand = $get_tyres['rearPassengertyreBrand'];
                                    $previous_frontDrivertyreCondition = $get_tyres['frontDrivertyreCondition'];
                                    $previous_frontDrivertyreSize = $get_tyres['frontDrivertyreSize'];
                                    $previous_frontDrivertyreBrand = $get_tyres['frontDrivertyreBrand'];
                                    $previous_frontPassengertyreCondition = $get_tyres['frontPassengertyreCondition'];
                                    $previous_frontPassengertyreSize = $get_tyres['frontPassengertyreSize'];
                                    $previous_frontPassengertyreBrand = $get_tyres['frontPassengertyreBrand'];
                                }

                                // tyres images
                                $select_tyres_images = "SELECT * FROM tyre_images WHERE tyres_id='$previous_tyres_id'";
                                $run_select_tyres_images = mysqli_query($conn, $select_tyres_images);
                                while ($get_tyres_images = mysqli_fetch_array($run_select_tyres_images)) {
                                    $previous_tyres_images_id = $get_tyres_images['id'];
                                    $previous_tyres_image = $get_tyres_images['image'];
                                }

                                // Electronic Function //
                                $electronic_query = "SELECT * FROM electronic_function WHERE preliminary_information_id='$update_inspection_id'";
                                $run_electronic = mysqli_query($conn, $electronic_query);
                                while ($get_inspection = mysqli_fetch_array($run_electronic)) {
                                    $previous_horn = $get_inspection['horn'];
                                    $previous_rightHeadlightOperation = $get_inspection['rightHeadlightOperation'];
                                    $previous_rightHeadlightCondition = $get_inspection['rightHeadlightCondition'];
                                    $previous_rightHeadlight = $get_inspection['rightHeadlight'];
                                    $previous_leftHeadlightOperation = $get_inspection['leftHeadlightOperation'];
                                    $previous_leftHeadlightCondition = $get_inspection['leftHeadlightCondition'];
                                    $previous_leftHeadlight = $get_inspection['leftHeadlight'];
                                    $previous_foglightsOperation = $get_inspection['foglightsOperation'];
                                    $previous_leftTaillightsOperation = $get_inspection['leftTaillightsOperation'];
                                    $previous_leftTaillightsCondition = $get_inspection['leftTaillightsCondition'];
                                    $previous_leftTaillights = $get_inspection['leftTaillights'];
                                    $previous_rightTaillightsOperation = $get_inspection['rightTaillightsOperation'];
                                    $previous_rightTaillightsCondition = $get_inspection['rightTaillightsCondition'];
                                    $previous_rightTaillights = $get_inspection['rightTaillights'];
                                    $previous_windshieldWipers = $get_inspection['windshieldWipers'];
                                    $previous_airbags = $get_inspection['airbags'];
                                    $previous_checkLights = $get_inspection['checkLights'];
                                    $previous_battery = $get_inspection['battery'];
                                }

                                // Suspension Function //
                                $suspension_query = "SELECT * FROM suspension_function where preliminary_information_id='$update_inspection_id'";
                                $run_suspension = mysqli_query($conn, $suspension_query);
                                while ($get_inspection = mysqli_fetch_array($run_suspension)) {
                                    $prev_steeringAssemblyplay = $get_inspection['steeringAssemblyplay'];
                                    $prev_axleBoots = $get_inspection['axleBoots'];
                                    $prev_rightBalljoint = $get_inspection['rightBalljoint'];
                                    $prev_leftBalljoint = $get_inspection['leftBalljoint'];
                                    $prev_tieRodend = $get_inspection['tieRodend'];
                                    $prev_rightBoot = $get_inspection['rightBoot'];
                                    $prev_leftBoot = $get_inspection['leftBoot'];
                                    $prev_rightBush = $get_inspection['rightBush'];
                                    $prev_leftBush = $get_inspection['leftBush'];
                                    $prev_rearRightshockAbsorder = $get_inspection['rearRightshockAbsorder'];
                                    $prev_rearLeftshockAbsorder = $get_inspection['rearLeftshockAbsorder'];
                                    $prev_frontRightshockAbsorder = $get_inspection['frontRightshockAbsorder'];
                                    $prev_frontLeftShockAbsorder = $get_inspection['frontLeftShockAbsorder'];
                                }


                                // exterior Body //
                                $exterior_query = "SELECT * FROM exterior_body where preliminary_information_id='$update_inspection_id'";
                                $run_exterior = mysqli_query($conn, $exterior_query);
                                while ($get_inspection = mysqli_fetch_array($run_exterior)) {
                                    $prev_passengerDpillar = $get_inspection['passengerDpillar'];
                                    $prev_passengerCpillar = $get_inspection['passengerCpillar'];
                                    $prev_passengerBpillar = $get_inspection['passengerBpillar'];
                                    $prev_passengerApillar = $get_inspection['passengerApillar'];
                                    $prev_driverDpillar = $get_inspection['driverDpillar'];
                                    $prev_driverCpillar = $get_inspection['driverCpillar'];
                                    $prev_driverBpillar = $get_inspection['driverBpillar'];
                                    $prev_driverApillar = $get_inspection['driverApillar'];
                                    $prev_panels = $get_inspection['panels'];
                                    $prev_roof = $get_inspection['roof'];
                                    $prev_frontDriverdoor = $get_inspection['frontDriverdoor'];
                                    $prev_rearDriverdoor = $get_inspection['rearDriverdoor'];
                                    $prev_rearDriverfender = $get_inspection['rearDriverfender'];
                                    $prev_rearWinshield = $get_inspection['rearWinshield'];
                                    $prev_trunk = $get_inspection['trunk'];
                                    $prev_rearPassengerfender = $get_inspection['rearPassengerfender'];
                                    $prev_rearPassengerdoor = $get_inspection['rearPassengerdoor'];
                                    $prev_frontPassengerdoor = $get_inspection['frontPassengerdoor'];
                                    $prev_frontPassengerfender = $get_inspection['frontPassengerfender'];
                                    $prev_frontWindshield = $get_inspection['frontWindshield'];
                                    $prev_bonnet = $get_inspection['bonnet'];
                                    $prev_frontDriverfender = $get_inspection['frontDriverfender'];
                                    $prev_trunkLock = $get_inspection['trunkLock'];
                                }

                                // Test Drive //
                                $test_drive_query = "SELECT * FROM test_drive where preliminary_information_id='$update_inspection_id'";
                                $run_test_drive = mysqli_query($conn, $test_drive_query);
                                while ($get_inspection = mysqli_fetch_array($run_test_drive)) {
                                    $prev_enginePick = $get_inspection['enginePick'];
                                    $prev_gearShifting = $get_inspection['gearShifting'];
                                    $prev_differentialNoise = $get_inspection['differentialNoise'];
                                    $prev_driveShaftnoise = $get_inspection['driveShaftnoise'];
                                    $prev_absActuation = $get_inspection['absActuation'];
                                    $prev_brakePedaloperation = $get_inspection['brakePedaloperation'];
                                    $prev_frontSuspensionNoise = $get_inspection['frontSuspensionNoise'];
                                    $prev_rearSuspensionNoise = $get_inspection['rearSuspensionNoise'];
                                    $prev_steeringFunction = $get_inspection['steeringFunction'];
                                    $prev_steeringWheelalignment = $get_inspection['steeringWheelalignment'];
                                    $prev_speedmeterInformation = $get_inspection['speedmeterInformation'];
                                    $prev_testDrivedoneBy = $get_inspection['testDrivedoneBy'];
                                    $prev_adminMessage = $get_inspection['adminMessage'];
                                }


                                // Accessories //
                                $accessories_query = "SELECT * FROM accessories where preliminary_information_id='$update_inspection_id'";
                                $run_accessories = mysqli_query($conn, $accessories_query);
                                while ($get_inspection = mysqli_fetch_array($run_accessories)) {
                                    $prev_spareWheel = $get_inspection['spareWheel'];
                                    $prev_toolKit = $get_inspection['toolKit'];
                                    $prev_jack = $get_inspection['jack'];
                                    $prev_punctureRepairkit = $get_inspection['punctureRepairkit'];
                                }
                            }

                            ?>