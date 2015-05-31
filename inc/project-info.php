<?php


$project = filter_var(strip_tags(trim($_GET['i'], "/")), FILTER_SANITIZE_STRING);

$projects = array(

  "spottydog" => array(
    "name" => "Spottydog",
    "type" => "Magento",
    "image" => "spottydog",
    "description" => "Responsive Magento project."
  )
);

if ((isset($projects[$project]))) {
  $project = $projects[$project];
}