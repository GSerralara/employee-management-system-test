# Uplay Test
The aim of this test is to implement a simple employee management system using PHP, HTML & javascript.

## Requisites:
You are provided with a PHP implementation representing an initial employee structure.
- A global object containing a list of employees
- Each employee is defined by: id, name and category.

```php
<?php
define("Category_Admin", 0);
define("Category_Manager", 1);
define("Category_Lead", 2);
define("Category_Senior", 3);
define("Category_Junior", 4);
class Data
{
    public $auto_increment = 0;
    public $employees = [];
    public function AddEmployee($name, $category)
    {
        $this->auto_increment++;
        $this->employees []= new DataRow($this->auto_increment, $name, $category);
    }
}
class DataRow
{
    public $id;
    public $name;
    public $category;
    public function __construct($id, $name, $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
    }
}
$data = new Data();
$data->AddEmployee("James", Category_Admin);
$data->AddEmployee("Michael", Category_Lead);
$data->AddEmployee("Antoine", Category_Junior);
?>
```
Our admin has asked us to make a page where he can see all the people involved in the
company directly from his browser. This is what it should include:
- List all the employees
- Remove employees
- Add employees
- Persist the data in a text file (for future visits)

## Key Points:
- Change, move, add, remove everything you need, you are expected to do so. Including
provided code.
- HTML structure will be valued.
- You can add any extra features you desire, but focus on the main guidelines.
- Don’t use any external library.
- Take project scalability into account during this test. More actions might be added in the
future.
- Keep in mind that the code needs to be readable and understandable.
- Async handling of the add/remove operations is a plus.

## Development Process
- Create a SQL Script that initializes everything as in the given code
- Create Model Namespace that will retrive and edit de data in the Database
- Create Autoload function to get included automaticaly the dependencies when needed
- Create Request & Router function to load methods arguments from the route and render views
- Create Base Template
- Make a controller to load data into the view