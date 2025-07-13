<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\BudgetController;

$controller = new BudgetController();
$controller->show();