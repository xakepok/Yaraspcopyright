<?php
defined('_JEXEC') or die;
$domain = $params->get('domain', 'https://www.joomla.org');
$apikey = $params->get('apikey', '');
$bannerType = $params->get('bannertype', '');
$result = file_get_contents("{$domain}/?apikey={$apikey}&format=json");
$result = json_decode($result);
switch ($bannerType)
{
    case 'vm': {
        $banner = $result->copyright->logo_vm;
        break;
    }
    case 'vd': {
        $banner = $result->copyright->logo_vd;
        break;
    }
    case 'hy': {
        $banner = $result->copyright->logo_hy;
        break;
    }
    case 'vy': {
        $banner = $result->copyright->logo_vy;
        break;
    }
    case 'hm': {
        $banner = $result->copyright->logo_hm;
        break;
    }
    default: $banner = $result->copyright->logo_vy;
}
echo $banner;
?>