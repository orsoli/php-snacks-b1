<?php
$db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];


foreach($db as $key=>$data) {
    if($key === "teachers"){
        $teachersList = $data;
    }else{
        $pmList = $data;
    }
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Meta data  -->
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='Orsol Filaj'>
    <meta name='description' content='Snack 3'>
    <!-- Title  -->
    <title>Snack 3</title>
    <!-- Link Bootstrap Css -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
    <!-- Link Bootstrap icons  -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css'>
    <!-- Link font Awesome  -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css'
        integrity='sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=='
        crossorigin='anonymous' referrerpolicy='no-referrer'>

</head>

<body>
    <!-- Container  -->
    <div class='container mx-auto py-4'>
        <div class="row">
            <div class="col bg-secondary">
                <h2>Teachers</h2>
                <?php foreach($teachersList as $teacher){ ?>
                <p>
                    <?=  $teacher["name"]." ".$teacher["lastname"] ?>
                </p>
                <?php } ?>
            </div>
            <div class="col bg-success">
                <h2>PM</h2>
                <?php foreach($pmList as $pm){ ?>
                <p>
                    <?=  $pm["name"]." ".$pm["lastname"] ?>
                </p>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>