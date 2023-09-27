<?php 
$studentGrades = [
    ['Math' => 85, 'English' => 90, 'Science' => 78],
    ['Math' => 92, 'English' => 88, 'Science' => 95],
    ['Math' => 78, 'English' => 85, 'Science' => 90]
];

// Define a function to calculate and print the average grade for each student
function calculateGrades($grades) {
    foreach ($grades as $student) {
        $total = array_sum($student);
        $average = $total / count($student);
        
        echo "Average Grade: " . round($average, 2) . "\n";
    }
}

calculateGrades($studentGrades);
?>