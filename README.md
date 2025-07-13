# Budget Tracker – CS 85 Module 6B MVC App

## App Description
This is a simple budget tracker built using the Model-View-Controller (MVC) design pattern in PHP. The application allows the user to define a budget entry (category, amount, and date) and outputs a formatted summary. It uses Composer with PSR-4 autoloading for class management and adheres to clean code separation.

## Setup Instructions

1. Clone the repo:
git clone https://github.com/Kida2211/cs85-module6b-mvcapp.git
cd cs85-module6b-mvcapp

2. Install dependencies:
3.  Start the PHP development server:


## AI Code Review and Critique

### Prompt:
> Write a PHP class for a budget entry that includes a constructor, properties for category, amount, and date, and a method that returns a formatted summary of the entry.

### Raw AI Output:
```php
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
     return "You spent \${$this->amount} on {$this->category} on {$this->date}.";
 }
}

Critique:
The AI-generated code was very close to what I needed. It correctly included a constructor and public properties.
The summary() method also provided a helpful string. However, the output lacked a namespace, which I needed to add
(App\Models) to match my PSR-4 autoloading setup. After making that one change, the class worked perfectly.
This showed me how AI can accelerate my workflow, but still requires developer awareness of the environment and architecture.

Reflection:
I chose the topic of a budget tracker because it’s something useful in everyday life. I often track spending manually,
and I wanted to see how I could implement something small but functional using the MVC structure. The idea of
representing simple budget entries — like spending $45.75 on groceries — made for a clean example that still
required me to use Composer, models, controllers, and views. The app uses one model (BudgetEntry), one controller
(BudgetController), and one view (budget_view.php). The controller generates a sample budget entry and passes it
to the view for display. Composer handles class autoloading using the PSR-4 standard, which makes it easy to scale
the project without lots of require_once statements. The hardest part was getting the view to recognize the model data.
I originally created $entry inside the controller’s show() method, but the view couldn’t access it, leading to a
“Call to a member function on null” error. I learned that when you use include inside a method, the view doesn’t
inherit the same variable scope. I fixed this by using extract() to pass the model object into the view’s scope,
 which solved the issue.
This project helped me understand MVC in a real PHP context. The separation of logic makes
it easier to reason about each part of the app. I also gained experience using Composer, which is essential for managing
modern PHP applications. The autoloading setup was a new concept for me, but it made the app more maintainable and
professional.
Using AI for the BudgetEntry class helped speed up my coding, but I also learned to critically evaluate
the output. Without adding the namespace, the class wouldn't have worked with my app’s autoloading.
I’m glad I was able to identify that and apply the fix myself.
