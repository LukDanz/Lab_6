<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php 
        $name = "Muhammad Lukman Danish bin Hamidon";
        $matric_number = "AI240002";
        $course = "Bachelor of Computer Science (Software Engineering)";
        $year_of_study = "Year 2";
        $address = "1A, Lorong Wawasan 1, Jalan Parit Karjo, 86400 Parit Raja, Batu Pahat, Johor";
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matric_number"; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$year_of_study"; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>
