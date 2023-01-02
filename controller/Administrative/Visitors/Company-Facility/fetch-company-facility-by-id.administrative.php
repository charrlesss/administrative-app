<?php

include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/company-facility.administrative.php');

  $response = array(
   "facility"=>get_compant_facility_by_id($facility_id),
   "amenities"=>get_compant_facility_amenities_by_id($facility_id),
   "services"=>get_compant_facility_services_by_id($facility_id)
   );

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);
