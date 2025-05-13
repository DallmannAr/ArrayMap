<?php 

$students = [ [
    'name' => 'Edgar Herculano',
    'RM' => '200', 
    'email' => 'edgar.herculano@etec.sp.gov.br',
    'grades' => [10, 8 ,9.5]
],
    [
    'name' => 'Rodolfo Votto',
    'RM' => '404', 
    'email' => 'rodolfo.votto@etec.sp.gov.br',
    'grades' => [10, 10 , 5]
    ],
    [
    'name' => 'Acassio Oliveira',
    'RM' => '502', 
    'email' => 'acassio.oliveira@etec.sp.gov.br',
    'grades' => [9, 9.5 , 10]
    ],
    [
    'name' => 'Artur Dallmann',
    'RM' => '303', 
    'email' => 'artur.dallmann@etec.sp.gov.br',
    'grades' => [0, 8, 3]  
    ]
    ]; 

function calculateAverage($grades) {
    return ($grades[0] + $grades[1] + $grades[2]) / 3;
}

for ($i = 0; $i < 4; $i++) {
    $student = $students[$i];
    $average = calculateAverage($student['grades']);
    $status = $average >= 6.0 ? "Aprovado" : "Reprovado";

echo "Nome: " . $student['name'] . "\n";
echo "RM: " . $student['RM'] . "\n";
echo "Email: " . $student['email'] . "\n";
echo "Notas: " .$student["grades"][0] . " ," .$student["grades"][1] . " ," .$student["grades"][2] .  "\n";
echo "Média: " . round($average, 1) . "\n";  
echo "Status: " . $status . "\n";
echo "----------------------------------------\n";

}
?>