<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dunder Miflin</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
    <?php
    require 'Company.php';
    require 'Office.php';
    require 'Department.php';
    require 'Employee.php';

    $company = new Company();
    $company->set_name("Dunder Mifflin");
    echo "<h2>".$company->get_name()."<h5>";
    echo "<hr><hr>";
    $department = new Department();
    $department->set_name("Management Department");
    echo "<h5>".$department->get_name()."</h5>";
    $employee = new Employee();
    $employee->set_name("Michael Scott");
    echo $employee->get_name();
    $employee->set_title(" = Manager");
    echo $employee->get_title();
    echo "<hr><hr>";

    $department = new Department();
    $department->set_name("Marketing");
    echo "<h5>".$department->get_name()."</h5>";

    $employee = new Employee();
    $employee->set_name("Dwight Schrute");
    echo $employee->get_name();
    $employee->set_title(" = Salesman");
    echo $employee->get_title();
    echo "<br>";

    $employee = new Employee();
    $employee->set_name("Jim Halpert");
    echo $employee->get_name();
    $employee->set_title("  = Salesman");
    echo $employee->get_title();
    echo "<br>";

    $employee = new Employee();
    $employee->set_name("Stanley Hudson");
    echo $employee->get_name();
    $employee->set_title(" = Salesman");
    echo $employee->get_title();
    echo "<br>";

    $employee = new Employee();
    $employee->set_name("Phyllis Vance");
    echo $employee->get_name();
    $employee->set_title(" = Saleswoman");
    echo $employee->get_title();
    echo "<br>";

    $employee = new Employee();
    $employee->set_name("Pam Beesly");
    echo $employee->get_name();
    $employee->set_title(" = Saleswoman");
    echo $employee->get_title();
    echo "<br>";

    $employee = new Employee();
    $employee->set_name("Andy Bernard");
    echo $employee->get_name();
    $employee->set_title(" = Salesman");
    echo $employee->get_title();
    echo "<hr><hr>";

    $department = new Department();
    $department->set_name("Accounting");
    echo "<h5>".$department->get_name()."</h5>";


    $employee = new Employee();
    $employee->set_name("Angela Martin");
    echo $employee->get_name();
    $employee->set_title(" = Accountant");
    echo $employee->get_title();
    echo "<br>";

    $employee = new Employee();
    $employee->set_name("Oscar Martinez");
    echo $employee->get_name();
    $employee->set_title(" = Accountant");
    echo $employee->get_title();
    echo "<br>";

    $employee = new Employee();
    $employee->set_name("Kevin Malone");
    echo $employee->get_name();
    $employee->set_title(" = Accountant");
    echo $employee->get_title();
    echo "<br>";

    $employee = new Employee();
    $employee->set_name("Meredith Palmer");
    echo $employee->get_name();
    $employee->set_title(" = Procurement/Supplier Relations");
    echo $employee->get_title();
    echo "<hr><hr>";

    $department = new Department();
    $department->set_name("Product");
    echo "<h5>".$department->get_name()."</h5>";
    $employee = new Employee();
    $employee->set_name("Creed Bratton");
    echo $employee->get_name();
    $employee->set_title(" = Quality Assurance publicanager");
    echo $employee->get_title();
    echo "<hr><hr>";

    $department = new Department();
    $department->set_name("Public Relations");
    echo "<h5>".$department->get_name()."</h5>";

    $employee = new Employee();
    $employee->set_name("Kelly Kapoor");
    echo $employee->get_name();
    $employee->set_title(" = Public Relations Specialist");
    echo $employee->get_title();

    echo "<hr><hr>";
    $department = new Department();
    $department->set_name("Human Resources");
    echo "<h5>".$department->get_name()."</h5>";
    $employee = new Employee();
    $employee->set_name("Toby Flenderson");
    echo $employee->get_name();
    $employee->set_title(" = Human Resources Specialist");
    echo $employee->get_title();

    echo "<hr><hr>";
    $department = new Department();
    $department->set_name("Subworker");
    echo "<h5>".$department->get_name()."</h5>";

    $employee = new Employee();
    $employee->set_name("Erin Hannon");
    echo $employee->get_name();
    $employee->set_title(" = Receptionist");
    echo $employee->get_title();
    echo "<br>";
    $employee = new Employee();
    $employee->set_name("Ryan Howard");
    echo $employee->get_name();
    $employee->set_title(" = Temporary");
    echo $employee->get_title();
    
    echo '<br><br>';


    ?>
                </div>
        </div>
    </div>
 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>