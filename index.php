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
    <link href="style.css" rel="stylesheet">
    <title>Method GET / POST</title>
</head>
<body>
    <h1 class="text-center">Main page</h1>
    <div class="row">
        <a href="students.php" class="col-4">Students</a>
        <a href="teachers.php" class="col-4">Teachers</a>
        <a href="administrators.php" class="col-4">Administrators</a>
    </div>
    <?php if(!empty($_GET) && !($_GET['age'] == NULL)) : ?>
    <h2>
        <?php if($_GET['age'] <= 17 ) : ?>
            Извините, Вы слишком молоды!
        <?php  elseif($_GET['status'] == '1') :$archive[10] = ['name' =>  $_GET['name'],'group' => 'student', 'email' => $_GET['email'], 'phone' => $_GET['phone']]; ?>
            Поздравляем, Вы успешно зарегистрированы и добавлены в список студентов!
        <?php  elseif($_GET['status'] == '2') : $archive[10] = ['name' =>  $_GET['name'],'group' => 'teacher', 'email' => $_GET['email'], 'phone' => $_GET['phone']]; ?>
            Поздравляем, Вы успешно зарегистрированы и добавлены в список преподавателей!
        <?php  elseif($_GET['status'] == '3') : $archive[10] = ['name' =>  $_GET['name'],'group' => 'administrator', 'email' => $_GET['email'], 'phone' => $_GET['phone']]; ?>
            Поздравляем, Вы успешно зарегистрированы и добавлены в список администраторов!    
        <?php endif; ?>
        </h2>
    <?php endif; ?>
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
                <tr>
                    <th scope="row"><?= ++$number; ?></th> 
                    <td><?= $person['name']; ?></td>
                    <td><?= $person['group']; ?></td>
                    <td><?= $person['email']; ?></td>
                    <td><?= $person['phone']; ?></td>
                </tr>
            <?php endforeach; ?>   
        </tbody>
    </table>

    <form action="/" method="get">
        <div class="form-group mb-3">
            <label>ФИО<br>
                <input type="text" name="name">
            </label>  
        </div>
        <div class="form-group mb-3">
            <select class="form-select" name="status">
                <option selected>Статус</option>
                <option value="1">Студент</option>
                <option value="2">Преподаватель</option>
                <option value="3">Администратор</option>
            </select>  
        </div>
        <div class="form-group mb-3">
            <label>Возраст <br>
                <input type="text" name="age">
            </label>  
        </div>
        <div class="form-group mb-3">
            <label>Email<br>
                <input type="text" name="email">
            </label>  
        </div>
        <div class="form-group mb-3">
            <label>Телефон<br>
                <input type="text" name="phone">
            </label>  
        </div>
        <button class="btn btn-primary">Отправить</button>

    </form>
    
</body>
</html>