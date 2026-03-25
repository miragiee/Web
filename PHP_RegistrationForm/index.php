<?php
    error_reporting(E_ALL & ~E_WARNING);
    $inputName =  $_GET['Name'];
    $inputEmail = $_GET['Email'];
    $inputNumber = $_GET['PhoneNumber'] ?? "Не указан";
    $inputTheme = $_GET['themeInput'];
    $inputSection = $_GET['sectionInput'];
    $mailSpamInput = $_GET['wantMailSpam'] ?? "Выключена";
    $currentTime = date('Y-m-d H:i:s');

    $messageColor = '';
    
    $sections = [
        1 => "Веб-технологии",
        2 => "Базы данных",
        3 => "Искусственный интеллект",
        4 => "Кибербезопасность",
        5 => "Мобильная разработка"
    ];

    if(isset($_GET["send"])){
        $messageForUser = "Заявка успешно заполнена";
        $messageColor = "green";
    }
    else{
        $messageForUser = "Заполните заявку";
        $messageColor = "red";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма заявки</title>
    <style>

        * {
            font-family:Arial, Helvetica, sans-serif;
        }

        .container{
            display: flex;
            flex-direction: column;
            padding: 20px;
            
        }

        .input{
            display: flex;
            flex-direction: column;
            font-weight: bold;
            margin-top: 25px;
        }

        .checkbox{
            display: flex;
            flex-direction: row;
            align-items: center;

            margin-top: 25px;
        }

        .inputCheckBox{
            margin-left: 30px;
        }

        .output{
            display: flex;
            flex-direction: column;

            border: 1px solid gray;

            margin-top: 30px;
            padding: 10px;
        }

        .output>label{
            display: flex;
            align-items: center;
        }

        .result>p{
            margin-left: 10px;
        }

        .Send{
            margin: 25px 0px 25px 0px;

            width: 200px;
            height: 40px;
        }

        form{
            border: 2px solid black;
            margin: 5%;
        }

        input{
            height: 30px;
        }
        select{
            height: 35px;
        }
        
        .MessageForUser{
            color: <?php echo $messageColor; ?>;
        }

        

    </style>
</head>
<body>
    <form action="index.php" method="GET">
        <div class="container" style="display: flex">
            <h1>Подача заявки на конференцию</h1>
            <div class="MessageForUser">
                <?php echo $messageForUser ?> 
            </div>

            <label class="input">
                ФИО*:
                <input type="text" name="Name" id="nameInput" required>
            </label>

            <label class="input">
                Email*:
                <input type="email" name="Email" id="emailInput" required>
            </label>

            <label class="input">
                Телефон:
                <input type="tel" name="PhoneNumber" id="phoneInput">
            </label>

            <label class="input" id="themeInput">
                Тема доклада*:
                <textarea name="themeInput" required></textarea>
            </label>

            <label class="input">
                Выберите секцию*:
                <select name="sectionInput" required>
                    <option value="">-- Выберите секцию --</option>
                    <option name=sections[] value="<?php echo $sections[1] ?>">Веб-технологии</option>
                    <option name=sections[] value="<?php echo $sections[2] ?>">Базы данных</option>
                    <option name=sections[] value="<?php echo $sections[3] ?>">Искусственный интеллект</option>
                    <option name=sections[] value="<?php echo $sections[4] ?>">Кибербезопасность</option>
                    <option name=sections[] value="<?php echo $sections[5] ?>">Мобильная разработка</option>
                </select>
            </label>

            <label class="checkbox">
                Хочу получать новости о конференции
                <input type="checkbox" class="inputCheckBox" name="wantMailSpam" value="Включена">
            </label>

            <input type="submit" class="Send" name="send">
                Отправить заявку
                ы
            </input>

            <div class="output">
                <h2>Ваша заявка:</h2>
                <label class="result">
                    ФИО:
                    <p id="nameOutput">
                        <?php echo $inputName ?>
                    </p>
                </label>
                <label class="result">
                    Email: 
                    <p id="emailOutput">
                        <?php echo $inputEmail ?>    
                    </p>
                </label>
                <label class="result">
                    Телефон:
                     <p id="phoneOutput">
                        <?php echo $inputNumber ?>
                     </p>
                </label>
                <label class="result">
                    Тема доклада: 
                    <p id="themeOutput">
                        <?php echo $inputTheme ?>
                    </p>
                </label>
                <label class="result">
                    Секция: 
                    <p id="sectionOutput">
                        <?php echo $inputSection ?>
                    </p>
                </label>
                <label class="result">
                    Рассылка: 
                    <p id="mailSpamOutput">
                        <?php echo $mailSpamInput ?>
                    </p>
                </label>
                <label class="result">
                    Время подачи: <p id="timeOutput">
                        <?php echo $currentTime ?>
                    </p>
                </label>
            </div>
        </div>
    </form>
    

</body>
</html>

