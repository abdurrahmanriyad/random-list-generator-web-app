<?php
    $oldlist = [
        'Abdur Rahman',
        'Habib',
        'Md Suza',
        'Riyad Uddin',
        'Arif Hossain'
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop listing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .btn{
            width: 100%;
            font-size: 20px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Previous list</h1> <br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($oldlist as $serial => $name){
                        echo '<tr>';
                        echo '<td>'.$serial.'</td>';
                        echo '<td>'.$name.'</td>';
                        echo '</tr>';
                    }
                    ?>

                    </tbody>
                </table>

                <button class="btn btn-success">Click here to create a new list</button>

                <h1>New list</h1> <br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
