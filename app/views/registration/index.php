<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="registration-form">
        <form action="<?php echo htmlspecialchars($_SERVER[' PHP_SELF ']);?>" method="post">
            <input type="text" name="name" class="<?=in_array('name', $errors)?'error':'';?>" placeholder="Имя" required="required" value="<?=isset($_POST['name'])?htmlspecialchars($_POST['name']):'';?>">
            <label for="name" class="<?=in_array('name', $errors)?'':'hidden';?>">Имя не должно быть длиннее 200 символов и может только содержать русские буквы, пробел, знаки ' и -</label>
            <input type="text" name="surname" class="<?=in_array('surname', $errors)?'error':'';?>" placeholder="Фамилия" required="required" value="<?=isset($_POST['surname'])?htmlspecialchars($_POST['surname']):'';?>">
            <label for="surname" class="<?=in_array('surname', $errors)?'':'hidden';?>">Фамилия не должна быть длиннее 200 символов и может только содержать русские буквы, пробел, знаки ' и -</label>
            <input type="text" name="studentGroup" class="<?=in_array('studentGroup', $errors)?'error':'';?>" placeholder="Номер группы" required="required" value="<?=isset($_POST['studentGroup'])?htmlspecialchars($_POST['studentGroup']):'';?>">
            <label for="studentGroup" class="<?=in_array('studentGroup', $errors)?'':'hidden';?>">Номер группы должен состоять из 4 символов: букв и цифр</label>
            <input type="email" name="email" class="<?=in_array('email', $errors)?'error':'';?>" placeholder="Электронный адрес" required="required" value="<?=isset($_POST['email'])?htmlspecialchars($_POST['email']):'';?>">
            <label for="email" class="<?=in_array('email', $errors)?'':'hidden';?>">Неверный email</label>
            <input type="text" name="phone" class="<?=in_array('phone', $errors)?'error':'';?>" placeholder="Номер телефона" required="required" value="<?=isset($_POST['phone'])?htmlspecialchars($_POST['phone']):'';?>">
            <label for="phone" class="<?=in_array('phone', $errors)?'':'hidden';?>">Номер телефона должен иметь следующий формат: +79999999999</label>
            <input type="text" name="egeResult" class="<?=in_array('egeResult', $errors)?'error':'';?>" placeholder="Сумма баллов ЕГЭ" required="required" value="<?=isset($_POST['egeResult'])?htmlspecialchars($_POST['egeResult']):'';?>">
            <label for="egeResult" class="<?=in_array('egeResult', $errors)?'':'hidden';?>">Недопустимое значение</label>
            <input type="date" name="birthday" class="<?=in_array('birthday', $errors)?'error':'';?>" placeholder="Дата рождения" required="required" value="<?=isset($_POST['birthday'])?htmlspecialchars($_POST['birthday']):'';?>">
            <label for="birthday" class="<?=in_array('birthday', $errors)?'':'hidden';?>">Неправдоподобная информация</label>
            <p class="sex"><span style="font-weight: 800;text-align: left;">Пол:</span>
                <input type="radio" name="sex" value="male" id="sex1" required="required" <?=(isset($_POST[ 'sex']) && $_POST[ 'sex']=='male' )? 'checked': '';?>> Мужской
                <input type="radio" name="sex" value="female" id="sex2" required="required" <?=(isset($_POST[ 'sex']) && $_POST[ 'sex']=='female' )? 'checked': '';?>> Женский</p>
            <input type="submit" name="submited" value="Записаться">
        </form>
    </div>
</body>

</html>