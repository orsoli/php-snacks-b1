<?php

if(isset($_GET["name"]) && (strlen($_GET["name"]) > 3 && isset($_GET["email"]) && isset($_GET["age"]) && !empty($_GET["age"]))){
    echo "You are loged in succesfully";
}else{
    echo "Invalid data";
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Meta data  -->
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='Orsol Filaj'>
    <meta name='description' content='Snack 2'>
    <!-- Title  -->
    <title>Snack 2</title>
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
        <form action="" method="get">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Insert age</label>
                <Input type="number" class="form-control w-25" id="age" name="age" placeholder="18">
            </div>
            <div>
                <button class="btn btn-primary">Log In</button>
                <button class="btn btn-warning">Reset</button>
            </div>
        </form>
    </div>
</body>


</html>