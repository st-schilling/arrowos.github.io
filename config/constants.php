<?php
$VERSIONS[] = array('version' => "arrow-12.1",
                    'gerrit'  => "yes");
$VERSIONS[] = array('version' => "arrow-12.0",
                    'gerrit'  => "yes");
$VERSIONS[] = array('version' => "arrow-11.0",
                    'gerrit'  => "no");
$VERSIONS[] = array('version' => "arrow-10.0",
                    'gerrit'  => "yes");
$VERSIONS[] = array('version' => "arrow-9.x",
                    'gerrit'  => "yes");

$VARIANTS = array(
    'official',
    'experiments',
    'community',
    'community_experiments'
);

$API_URL_CALLS = array(
    'oem_devices_list' => 'https://update.arrowos.net/api/v1/oem/devices/all/',
    'devices_support_info' => 'https://update.arrowos.net/api/v1/devices/support/all/',
    'device_info' => 'https://update.arrowos.net/api/v1/info/{device}/{variant}/{version}/{zipvariant}'
);
?>
