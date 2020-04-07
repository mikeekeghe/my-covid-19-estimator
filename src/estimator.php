<?php
//get data from input
$json = $_GET['json'];

$data = json_decode($json);

function covid19ImpactEstimator($data)
{
  $reportedCases = $data->reportedCases;

  // 1A. currentlyInfected =  reportedCases * 10).
  $impact->currentlyInfected =  $reportedCases * 10;

  //1B
  $severeImpact->currentlyInfected =$reportedCases * 50;

  //1C
  $impact->infectionsByRequestedTime = $impact->currentlyInfected * 512;
  $severeImpact->infectionsByRequestedTime = $severeImpact->currentlyInfected * 512;

    return $data;
}
