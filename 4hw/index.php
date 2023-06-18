<!--https://www.w3schools.com/php/phptryit.asp?filename=tryphp_compiler-->
<!--https://paiza.io/en/projects/new?language=php-->

<?php
$name = "Роман";
$prof = "Программист";
$town = "Минск";
$email = "lepihovrom@yandex.by";
$phone = "+375293493335";

$skills = [
    [
        'name' => 'Фотошоп',
        'percent' => 30,
    ],
    [
        'name' => 'Иллюстратор',
        'percent' => 70,
    ],
    [
        'name' => 'Медиа',
        'percent' => 40,
    ],
];

$experiences = [
    [
        'name' => 'Системный администратор компьютерного клуба.',
        'date_from' => '01.01.2002',
        'date_to' => '01.02.2007',
        'description' => 'Системное администрирование парка компьютеров компьютерного клуба.'
    ],
    [
        'name' => 'Системный администратор торговой фирмы.',
        'date_from' => '01.02.2007',
        'date_to' => '01.04.2015',
        'description' => 'Администрирование ЛВС организации. Системное администрирование компьютерного парка организации. Администрирование/Программирование 1с:Предприятие: Бухгалтерия и склад. Поддержка/Обслуживание веб-сайта организации.'
    ],
    [
        'name' => 'Индивидуальный предприниматель.',
        'date_from' => '01.04.2015',
        'date_to' => '',
        'description' => 'Работа с различными организациями в области ИТ-аутсорсинг: администрирование ЛВС, системное администрирование, обслуживание/доработка 1c:Предприятия, поддержка веб-сайтов.'
    ]
];

$photo_path = 'photo.jpg';

function getFormatDate($date){
    $months = array(
        "01"=>"Январь","02"=>"Февраль","03"=>"Март",
        "04"=>"Апрель","5"=>"Май", "06"=>"Июнь",
        "07"=>"Июль","08"=>"Август","09"=>"Сентябрь",
        "10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");

    $dateArr = explode(".", $date);

    $month = $months[$dateArr[1]];

    return $month . " " . $dateArr[2];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Jost', sans-serif;
        }
    </style>
</head>
<body class="w3-light-grey">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
        <!-- Left Column -->
        <div class="w3-third">
            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">
                    <img
                        src="<?php echo $photo_path ?>"
                        style="width:100%" alt="Avatar">
                    <div class="w3-display-bottomleft w3-container w3-text-black">
                        <h2><?php echo $name; ?></h2>
                    </div>
                </div>
                <div class="w3-container">
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $prof; ?>
                    </p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $town; ?></p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?>
                    </p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone; ?></p>

                    <hr>

                    <?php foreach ($skills as $skill): ?>
                        <p class="w3-large"><b><i
                                    class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i><?php echo $skill["name"] ?>
                            </b></p>
                        <p><?php echo $skill["name"] ?></p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal"
                                 style="width:<?php echo $skill["percent"] ?>%">
                                <?php echo $skill["percent"] ?>%
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <br>
                </div>
            </div>
            <br>
            <!-- End Left Column -->
        </div>
        <!-- Right Column -->
        <div class="w3-twothird">
            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i
                        class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>

                <?php foreach ($experiences as $experience): ?>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b><?php echo $experience["name"] ?></b></h5>
                        <h6 class="w3-text-teal"><i
                                class="fa fa-calendar fa-fw w3-margin-right"></i>
                            <?php echo getFormatDate($experience["date_from"]) . " - ";
                            if (empty($experience["date_to"])) { ?>
                                <span class="w3-tag w3-teal w3-round">Current</span>
                            <?php } else {
                                echo getFormatDate($experience["date_to"]);
                            } ?>
                        </h6>
                        <p><?php echo $experience["description"] ?></p>
                        <hr>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="w3-container w3-card w3-white">
                <h2 class="w3-text-grey w3-padding-16"><i
                        class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>gb.ru</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                    <p>Web Development! All I need to know in one place</p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>London Business School</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                    <p>Master Degree</p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>School of Coding</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
                    <p>Bachelor Degree</p><br>
                </div>
            </div>
            <!-- End Right Column -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Page Container -->
</div>
<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
</footer>
</body>
</html>