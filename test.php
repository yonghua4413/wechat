<?php
require_once "src/Factory.php";
require_once "src/OfficialAccount/Application.php";

use yonghua4413\wechat\Factory;

$app = Factory::OfficialAccount([])->test();

