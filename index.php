<?php
use ShahariaAzam\GDriveLinkExtractor\GoogleDriveLink;

require "vendor/autoload.php";

$sharableURL = 'GOOGLE_DRIVE_SHARABLE_LINK';
$downloadLink = GoogleDriveLink::get($sharableURL);
