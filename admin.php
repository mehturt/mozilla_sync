<?php

// Check if user is admin, redirect to home if not
\OCP\User::checkAdminUser();

// Load JavaScript files
\OCP\Util::addScript("mozilla_sync", "admin");
\OCP\Util::addScript("mozilla_sync", "show_notification");

// Assign admin template
$tmpl = new \OCP\Template('mozilla_sync', 'admin');

$tmpl->assign('mozillaSyncRestrictGroup', \OCA\mozilla_sync\User::getAuthorizedGroup());
$tmpl->assign('mozillaSyncQuota', \OCA\mozilla_sync\User::getQuota());

return $tmpl->fetchPage();

/* vim: set ts=4 sw=4 tw=80 noet : */

