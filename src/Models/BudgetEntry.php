<?php
namespace App\Models;

class BudgetEntry {
    public $category;
    public $amount;
    public $date;

    public function __construct($category, $amount, $date) {
        $this->category = $category;
        $this->amount = $amount;
        $this->date = $date;
    }

    public function summary() {
        return "Spent \${$this->amount} on {$this->category} on {$this->date}.";
    }
}
