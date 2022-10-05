<?php
// dynamic table => 3 levels only
// dynamic rows //4
// dynamic columns // 4
// check if gender of user == m ==> male // 1
// check if gender of user == f ==> female // 1

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running',
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        // 'phones'=>"0123123",
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        // 'phones'=>"2345",
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        // 'phones'=>"",
    ]
];
//$user1 = $users[1];
//print_r($user1);
////foreach ($users as $key=>$value){
//    print_r($users[0]- );
//
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<!--    --><?php //foreach ($users As $user ){?>


    <h2> Table</h2>
    <table class="table table-bordered">
        <?php foreach ($users[0] as $key=>$value){?>
        <thead>

        <tr>
            <th><?= $key;?></th>
            <th><?=$key;?></th>
            <th><?=$key;?></th>
            <?php } ?>
        </tr>

        </thead>

        <?php  foreach ($users As $user ){?>
        <tbody>
        <tr>
            <td><?php echo "$user->id";

//                if (array_key_exists("id",$user1))
//                {
//                echo "$user->id";
//            }else{die();}

            ?></td>
            <td><?=$user->name;?></td>
            <td><?php foreach ($user->gender as $gender){
                if($user->gender->gender =='m'){
                echo "male". "<br>";
                }else{
                    echo "female". "<br>";
                }}?></td>
            <td><?php foreach ($user->hobbies as $hobby){
                echo $hobby ."<br>";
                }?></td>
            <td><?php foreach ($user->activities as $activity){
                    echo $activity ."<br>";
                }?></td>



        </tr>

   <?php }?>


</div>

</body>
</html>
