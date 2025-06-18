<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 6 Q2</title>
    </head>

    <body>
        <?php 
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]
            ];

        foreach ($students as $key => $value)
            echo $key . ": " . $value . "<br"
        ?>

        

    </body>