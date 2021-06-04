<?php

$archive = [
    ['name' => 'John Doe' ,
    'group' => 'student',
    'email' => 'john@gmail.com',
    'phone' =>'123-213-12'
    ],
    ['name' => 'Katy Pery' ,
    'group' => 'student',
    'email' => 'Katy@gmail.com',
    'phone' => '243-74-58'
    ],
    ['name' => 'Josh Redlif' ,
    'group' => 'student',
    'email' => 'Red@gmail.com',
    'phone' => '563-74-85'
    ],
    ['name' => 'Glen Scotch' ,
    'group' => 'student',
    'email' => 'Wiskey@gmail.com',
    'phone' => '247-10-58'
    ],
    ['name' => 'Mark Facker' ,
    'group' => 'student',
    'email' => 'Fast@gmail.com',
    'phone' => '899-85-55'
    ],
    ['name' => 'Carl Duone' ,
    'group' => 'teacher',
    'email' => 'Duos@gmail.com',
    'phone' => '900-04-02'
    ],
    ['name' => 'Meg Raine' ,
    'group' => 'teacher',
    'email' => 'Rain@gmail.com',
    'phone' => '900-03-01'
    ],
    ['name' => 'Ted Arey' ,
    'group' => 'teacher',
    'email' => 'Agent@gmail.com',
    'phone' => '800-34-12'
    ],
    ['name' => 'Yana Size' ,
    'group' => 'administrator',
    'email' => 'S_size@gmail.com',
    'phone' => '007-07-07'
    ],
    ['name' => 'Carlite Lee' ,
    'group' => 'administrator',
    'email' => 'Lee-ca@gmail.com',
    'phone' => '888-08-07'
    ]
] ;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Learning some hard method GET">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Method GET / POST</title>
</head>
<body>
    <h1 class="text-center">Our Administrators</h1>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Group</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($archive as $number => $person) : ?>  
                <?php if($person['group'] == 'administrator') : ?>
                    <tr>
                        <th scope="row"><?= ++$number; ?></th> 
                        <td><?= $person['name']; ?></td>
                        <td><?= $person['group']; ?></td>
                        <td><?= $person['email']; ?></td>
                        <td><?= $person['phone']; ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>   
        </tbody>
    </table>
    
</body>
</html>