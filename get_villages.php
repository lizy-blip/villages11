<?php
// Define an array of villages for each district
$villages = array(
	"Erode" => array(
		"Chithode",
		"Perodu",
		"Nochipalayam"
		"Ellapalyam"
		"Gangapuram"
		"Thottani"
		"Thindal"
		"Rayapalyam"
        "Moolakarai"

	),
	"Krishnagiri" => array(
		"Aandiyur"
		"Achamangalam"
		"Achettipalli"
		"Advanapalli"
		"Alasapalli"
		"Bathimadugu"
		"Bayanapalli"
		"Chaparthi"
		"Ebbiri"
		"Ettipalli"
	)
);

// Get the selected district from the POST data
$district = $_POST["district"];

// If the district is not in the villages array, return an empty array
if (!array_key_exists($district, $villages)) {
	echo json_encode(array());
	exit;
}

// Otherwise, return the villages for the selected district as a JSON-encoded array
echo json_encode($villages[$district]);
?>
