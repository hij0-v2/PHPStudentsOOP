<link rel="stylesheet" href="view/css/style.css"/>

<?php
use StudentsApp\Students;

$student1 = new Students("5b", rand(10, 1000),strtoupper("jurgis"),strtoupper("jurgaitis"),round((9+9+9)/3,2),date("Y-m-d"));
$student2 = new Students("5b", rand(10, 1000),strtoupper("petras"),strtoupper("petraitis"),round((8+8+9)/3,2),date("Y-m-d"));
$student3 = new Students("5b", rand(10, 1000),strtoupper("romas"),strtoupper("romaitis"),round((6+4+8)/3,2),date("Y-m-d"));
$student4 = new Students("5b", rand(10, 1000),strtoupper("bela"),strtoupper("belaite"),round((10+10+10)/3,2),date("Y-m-d"));
$student5 = new Students("5b", rand(10, 1000),strtoupper("margarita"),strtoupper("margaite"),round((4+10+2)/3,2),date("Y-m-d"));
$student6 = new Students("5b", rand(10, 1000),strtoupper("varis"),strtoupper("varaitis"),round((6+5+5)/3,2),date("Y-m-d"));
$student7 = new Students("5b", rand(10, 1000),strtoupper("marija"),strtoupper("jurgaite"),round((7+7+5)/3,2),date("Y-m-d"));
$student8 = new Students("5b", rand(10, 1000),strtoupper("moris"),strtoupper("moraitis"),round((6+5+9)/3,2),date("Y-m-d"));
$student9 = new Students("5b", rand(10, 1000),strtoupper("voris"),strtoupper("voraitis"),round((10+5+5)/3,2),date("Y-m-d"));
$student10 = new Students("5b", rand(10, 1000),strtoupper("romis"),strtoupper("buraitis"),round((6+10+10)/3,2),date("Y-m-d"));

?>

<table>
    <tr>
        <th>Klase</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Kontroliniu darbu vidurkis</th>
        <th>Duomenu formavimo data</th>
    </tr>
    <tr>
        <?php foreach ($student1->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($student2->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($student3->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($student4->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($student5->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($student6->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($student7->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($student8->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($student9->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($student10->showStudents() as $students):?>
            <td><?=$students?></td>
        <?php endforeach; ?>
    </tr>
</table>
