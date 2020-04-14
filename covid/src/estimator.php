<?php

  function covid19ImpactEstimator($data)
  { 
     $Impact["currentlyinfected"]=$data['reportedcases'] * 10;
  $severeImpact["currentlyinfected"]=$data["reportedcases"] 
  
    $Impact["infectionsbyrequestedtime"] = $Impact['currentlyinfected'] * pow(2,floor(periodConverter("TimeToElapse","periodType")/3));
    $severeImpact["infectionsbyrequestedtime"] = $severeImpact['currentlyinfected'] * pow(2,floor(periodConverter("TimeToElapse","periodType")/3));

  $Impact["severeCasesByRequestedTime"]=$Impact["infectionsbyrequestedtime"] * 0.15;
  $severeImpact["severeCasesByRequestedTime"]=$severeImpact["infectionsbyrequestedtime"] * 0.15;
  $Impact["hospitalBedsByRequestedTime"]=intval(($data["totalHospitalBeds"]*0.35)-$Impact["severeCasesByRequestedTime"]);
  $severeImpact["hospitalBedsByRequestedTime"]=intval(($data["totalHospitalBeds"]*0.35)-$severeImpact["severeCasesByRequestedTime"]);
  $Impact["casesForICUByRequestedTime"]=$Impact["infectionsbyrequestedtime"]*0.05;
  $severeImpact["casesForICUByRequestedTime"]=$severeImpact["infectionsbyrequestedtime"]*0.05;
  $Impact["casesForVentilatorsByRequestedTime"]=intval($Impact["infectionsByRequestedTime"]*0.02);
  $severeImpact["casesForVentilatorsByRequestedTime"]=intval($severeImpact["infectionsByRequestedTime"]*0.02);
  $Impact["dollarsInFlight"] = $Impact["infectionsbyrequestedtime"] * 0.65) * 1.5 * (floor(periodConverter("TimeToElapse","periodType")/3);
  $severeImpact["dollarsInFlight"] = $severeImpact["infectionsbyrequestedtime"] * 0.65) * 1.5 * $num * (floor(periodConverter("TimeToElapse","periodType")/3)

  return {"data"=> $data,
          "impact"=>$Impact,
          "severeImpact"=>$severeImpact];
  }
?>