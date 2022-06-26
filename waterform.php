<?php
include "config.php";


if(isset($_POST['but_submit'])){
    $DWResidential = $_POST['DWResidential'];
    $DWLandscapeIrr = $_POST['DWLandscapeIrr'];
    $DWCommercial = $_POST['DWCommercial'];
    $DWIndustrial = $_POST['DWIndustrial'];
    $DWAgricultural = $_POST['DWAgricultural'];
    $RWLandscapeIrr = $_POST['RWLandscapeIrr'];
    $RWResidentialIrr = $_POST['RWResidentialIrr'];
    $RWCommercial = $_POST['RWCommercial'];
    $RWAgricultural = $_POST['RWAgricultural'];
    $RWConstruction = $_POST['RWConstruction'];
    $RWIndustrial = $_POST['RWIndustrial'];
    $sql = "INSERT INTO water(ZipCode, DWResidential, DWLandscape, DWCommercial, DWAgricultural, DWIndustrial, RWLandscape, RWResidential, RWCommercial, RWAgricultural, RWConstruction, RWIndustrial) VALUES (12345,".$DWResidential.",".$DWLandscapeIrr.",".$DWCommercial.",". $DWAgricultural.",".$DWIndustrial.",". $RWLandscapeIrr.",".$RWResidentialIrr.",".$RWCommercial.",".$RWAgricultural.",".$RWConstruction.",".$RWIndustrial.")";

    // $sql = "INSERT INTO water(ZipCode, DWResidential, DWLandscape, DWCommercial) 
    // VALUES (12345,".$DWResidential.",".$DWLandscapeIrr.",".$DWCommercial.")";
        
 if ($con->query($sql) === TRUE) {
     echo "New record created successfully";
     header('Location: access.php');
     } else {
     echo "Error: " . $sql . "<br>" . $con->error;
     }
  

}