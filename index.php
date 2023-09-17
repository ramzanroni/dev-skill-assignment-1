<?php 
   $students = [
    [
        'name' => 'John',
        'age' => 20,
        'favorite_subjects' => ['Math', 'Science','English'],
    ],
    [
        'name' => 'Alice',
        'age' => 18,
        'favorite_subjects' => ['History', 'English'],
    ],
    [
        'name' => 'Bob',
        'age' => 19,
        'favorite_subjects' => ['Art', 'Music'],
    ],
];

function ageAverage($students){
    $totalAge = 0;
    $numStudents = count($students);

    foreach ($students as $student) {
        $totalAge += $student["age"];
    }

    $averageAge = $totalAge / $numStudents;

    return $averageAge;
}


echo "Question-1 the avarage age of the students: ". ageAverage($students).'<hr>';

function findmostFavorites($students) {
    $mostFavorites = 0;
    $studentWithMostFavorites = null;

    foreach ($students as $student) {
        $numFavorites = count($student["favorite_subjects"]);
        if ($numFavorites > $mostFavorites) {
            $mostFavorites = $numFavorites;
            $studentWithMostFavorites = $student;
        }
    }

    return $studentWithMostFavorites;
}

echo "Question-2 find the most favorite subject student<br>";
print_r(findmostFavorites($students));
echo '<hr>';

$encodedStudents=json_encode($students);
echo "Encoded students json:<br>". $encodedStudents.'<hr>';
echo "<h1>After decode:</h1>";
$decodeStudents=json_decode($encodedStudents);
foreach ($decodeStudents as $student) {
    echo "Name: ". $student->name.'<br>';
    echo "Age: ". $student->age.'<br>';
    echo 'Subject: <br>';
    echo '<ul>';
    foreach ($student->favorite_subjects as $subject) {
        echo '<li>'.$subject.'</li>';
    }
    echo '</ul><br><hr>';
}