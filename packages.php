<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'A$0therys Modpack 1.10.2',
    'version' => '4.0',
    'priority' => 0,
    'location' => 'a-therys-modpack-1.10.2.json',
);

$packages[] = array(
    'name' => 'A$0therys Modpack 1.11',
    'version' => '4.0',
    'priority' => 0,
    'location' => 'a-therys-modpack-1.11.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
