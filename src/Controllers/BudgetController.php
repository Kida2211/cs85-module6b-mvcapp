<?php 
    namespace App\Controllers;
    use App\Models\BudgetEntry;

    class BudgetController {
        public function show() {
            $entry = new BudgetEntry("Groceries", 45.75, "2023-10-01");
             include __DIR__ . '/../../views/budget_view.php';
        }
    }

?>