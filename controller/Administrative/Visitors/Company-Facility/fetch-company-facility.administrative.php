<?php

include( $_SERVER['DOCUMENT_ROOT'].'/freight/model/Administrative/Visitors/company-facility.administrative.php');


$fetch_facility = get_compant_facility();
$fetch_facility_size = count($fetch_facility);
$facility = [];

$company_details = get_compant_details();
$company_size = count($company_details);
$company = [];

for ($x = 0; $x <= $company_size -1; $x++) {
  $new = array(
   "company"=>$company_details[$x],
   "amenities"=>get_compant_facility_amenities_by_id($company_details[$x]["amenities"]),
   "services"=>get_compant_facility_services_by_id($company_details[$x]["services"])
   );
   array_push($company,$new);
 }

for ($x = 0; $x <= $fetch_facility_size -1; $x++) {
   $new = array(
    "facility"=>$fetch_facility[$x],
    "amenities"=>get_compant_facility_amenities_by_id($fetch_facility[$x]["facility_id"]),
    "services"=>get_compant_facility_services_by_id($fetch_facility[$x]["facility_id"])
    );
    array_push($facility,$new);
  }


$response = array(
    'facility'=>$facility,
    "company"=>$company
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);
