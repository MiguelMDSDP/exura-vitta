<?php

require_once("../../models/doctor.php");

$doctors = [];
$newName = "";
$newAddress = "";
$newEmail = "";
$newPhone = "";
$newSpeciality = "";
$newCRM = "";
$isAttrSwitched = False;

function fstart($parser, $element_name, $element_attrs) {
    if ($element_name == "DOCTOR") {
        $GLOBALS['newName'] = "";
        $GLOBALS['newAddress'] = "";
        $GLOBALS['newEmail'] = "";
        $GLOBALS['newPhone'] = "";
        $GLOBALS['newSpeciality'] = "";
        $GLOBALS['newCRM'] = "";
    } else if ($element_name != "DATA" && $element_name != $GLOBALS['newAttr']) {
        $GLOBALS['newAttr'] = $element_name;
        $GLOBALS['isAttrSwitched'] = True;
    }
}

function fstop($parser, $element_name) {
    if ($element_name == "DOCTOR") {
        $newDoctor = new Doctor(
            $newName,
            $newAddress,
            $newEmail,
            $newPhone,
            $newSpeciality,
            $newCRM
        );
        array_push($GLOBALS['doctors'], $newDoctor);
    }
}

function fchar($parser, $data) {
    switch ($GLOBALS['newAttr']) {
        case "NAME":
            $newName = $newName . $data;
            break;
        case "ADDRESS":
            $newAddress = $newAddress . $data;
            break;
        case "EMAIL":
            $newEmail = $newEmail . $data;
            break;
        case "PHONE":
            $newPhone = $newPhone . $data;
            break;
        case "SPECIALITY":
            $newSpeciality = $newSpeciality . $data;
            break;
        case "CRM":
            $newCRM = $newCRM . $data;
            break;
        default:
            break;
    }
}

function getAllDoctors() {
    $GLOBALS['doctors'] = [];

    $parser = xml_parser_create();
    xml_set_element_handler($parser, "fstart", "fstop");
    xml_set_character_data_handler($parser, "fchar");

    $xml = fopen("../../../db/doctors.xml", "r");
    while ($data = fread($xml, 4096)) {
        xml_parse($parser, $data, feof($xml)) or die("Erro na leitura do XML!");
    }

    xml_parser_free($parser);
}

?>