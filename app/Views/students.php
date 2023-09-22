

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type= "css/text" href="/css/default.css">
        <title>Document</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        ul li{
            list-style-type: none;
        }
        body{
            background-color:#49d16d;
           font-size:19px;
        }
        .container{
            font-size:20px;
        }
        .data{
            float:left;
        
        }
        .item{
            background-color:#6ce68c;
            border-style: solid ;
            width: 250px;
            text-align:center;
        }
    </style>
    </head>
    <body>

    <form action="/save" method = "post">
        <div class ="container">
        <input type="hidden" name ="id" value ="<?= isset($studs['id']) ? $studs['id']: ''?>">
        <label>Student Name: </label>
        <input type="text" name="StudName" placeholder ="Student Name" value ="<?= isset($studs['StudName']) ? $studs['StudName']: ''?>" required>
        <label>Gender: </label>
        <select name="StudGender" id = "gender" >
            <option>Male</option>
            <option>Female</option>
        </select>
        <label>Student Course: </label>
        <select name="StudCourse" >
        <option>BSIT</option>
        <option>BSCrim</option>
        <option>AbPsy</option>
        <option>BTVTED</option>
        
        </select>
        <label>Section:</label>
    <select name="StudSection" id="Section">
    <?php foreach($main as $sts):?>
    <option >

        <?= $sts['section']?>
        </option>
        <?php endforeach;?>
    </select>

        <label>Year Level: </label>
        <input type="number" name="StudYear" placeholder ="Year Level" value ="<?= isset($studs['StudYear'])? $studs['StudYear']: ''?>">
        <input type="submit" name ="Save" class="con4"></input>
            </form>
    </div>
        <?php foreach($student as $stud):?>
            <div class="data">
    <ul>
        <div class="item">
        
    <h4>Student <?= $stud['id']?></h4>
        <li> <?= $stud['StudName'] ?></li>
        <li> <?= $stud['StudGender'] ?></li>
        <li> <?= $stud['StudCourse'] ?></li>
        <li><?= $stud['StudSection']?></li>
        <li><?= $stud['StudYear']?></li>
        <li><a href="/edit/ <?=$stud['id']?>"><i class="fa-solid fa-pen-to-square"></i></a> || <a href="/delete/ <?=$stud['id']?>"><i class="fa-solid fa-trash"></i></a></</li>
    <br>
    <br>
    </ul>
        </div>
        </div>
    <?php endforeach?>
        </ul>
    
    </body>
    </html>