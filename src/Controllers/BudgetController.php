<?php
namespace App\Controllers;

use App\Models\BudgetEntry;

class BudgetController {
    public function show() {
        $entry = new BudgetEntry("Groceries", 45.75, date("Y-m-d"));

        // ✅ This line makes $entry available in the view
        extract(['entry' => $entry]);

        include __DIR__ . '/../../views/budget_view.php';
    }
}
