<?php
require "Gapi.php";
$email='phuong.ltweb@gmail.com';
$pass='phuongnguyen';
$profile_id='108568711';
$ga = new Mylibrary_File_Gapi($emai, $pass);
$dimensions = array('source');
$metrics    = array('visits');

$ga->requestReportData(ga_profile_id, $dimensions, $metrics,'-visits');

$gaResults = $ga->getResults();
$i=1;
foreach($gaResults as $result)
{
    printf("%-4d %-40s %5dn",
        $i++,
        $result->getSource(),
        $result->getVisits());
}

echo "n-----------------------------------------n";
echo "Total Results : {$ga->getTotalResults()}";

?>