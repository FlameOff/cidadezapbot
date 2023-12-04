<?php

$hubVerifyToken = 'cizapbot';
$acessToken = 'EAAKcH3QPpXMBOxAV2QZBZANgIc90dmc96uQkCfKUoz7F7QSrebeq1QdZBdZC3wD6GeMkVUfSp9FqggZAA60gn7njbj7uRpHWQhkhuDf1MVjZAwAABoTj85c06n4lDd4YhOixbhZCEmvlzwHd1Wm0Waqn86gFhk3aWPvoUOvgUBPs6zstldnETfOen9NUnZBEDZAH1FEnHZC8HKwvPZCs07t';

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['hub_challenge']) && isset($_GET['hub_verify_token']) && $_GET['hub_verify_token'] === $hubVerifyToken){
    echo $_GET['hub_challenge'];
    exit;
}
?>