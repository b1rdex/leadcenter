<?php

$sent = false;

function getPostPatameter($name, $default = '') {
  return isset($_POST[$name]) ? $_POST[$name] : $default;
}

if (getPostPatameter('submit')) {
  $titles = [
    '',
    'Заявка на сайте: запускаем поток клиентов',
    'Заявка на сайте: узнайте стоимость наших услуг для Вашей компании',
    'Заявка на сайте: получите бесплатную консультацию как привлечь новых клиентов прямо сейчас',
  ];

  $title = isset($titles[getPostPatameter('submit')])
    ? $titles[getPostPatameter('submit')]
    : 'Заявка на сайте'
  ;

  $name = htmlspecialchars(trim(getPostPatameter('name')));
  $phone = htmlspecialchars(trim(getPostPatameter('phone')));
  $mail = htmlspecialchars(trim(getPostPatameter('mail')));

  $message = <<<MESSAGE
Имя отправителя: {$name}
Phone: {$phone}
Email: {$mail}
MESSAGE;

  $from = 'leadcentr.ru <noreply@leadcentr.ru>';
  $to = 'info@leadcentr.ru';

  if (mail($to, $title, $message, 'From:' . $from)) {
    $sent = true;
  }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link rel="stylesheet" href="/main.css">
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
  <?php if ($sent): ?>
    <div class="alert alert-success email-sent">
      <strong>Мы получили ваше письмо</strong>
      и скоро свяжемся с вами!
    </div>
  <?php endif ?>

  <div class="stripe stripe-head">
    <div class="container">
      <div class="row">
        <div class="col-md-8 logo">
          <a class="brand" href="/"><img src="/img/logo.png" alt=""></a>
        </div>

        <div class="col-md-4">
          <address>
            <div class="phone">8 (423) 259-08-08</div>
            <div class="city">г. Владивосток</div>
          </address>
        </div>
      </div>


      <h1>
        ИНТЕРНЕТ-МАРКЕТИНГ
        <div class="subheader">всего за <em>20 дней</em></div>
      </h1>

      <div class="row dreams">
        <div class="col-md-6">
          привлечем новых клиентов
          <span><small>от</small> 25%</span>
        </div>
        <div class="col-md-6">
          увеличим продажи
          <span><small>от</small> 30%</span>
        </div>
      </div>


	  <form action="" method="post">
        <h3>Готовы к потоку клиентов?</h3>
        <input type="text" placeholder="Имя" class="form-control" name="name" required>
        <input type="tel" placeholder="Телефон" class="form-control" name="phone" required>
        <button type="submit" class="btn btn-yellow" name="submit" value="1">Запускаем</button>
      </form>
    </div>
  </div>

  <div class="stripe stripe-why-you-here">
    <div class="container">
      <h2>Вы здесь потому что:</h2>

      <div class="row">
        <ul class="col-md-6">
          <li class="icon-1"><span>У Вас мало клиентов</span></li>
          <li class="icon-3"><span>На фоне кризиса упали продажи</span></li>
          <li class="icon-2"><span>У Вас есть сайт, но мало посещений и тем более продаж</span></li>
        </ul>

        <ul class="col-md-6">
          <li class="icon-4"><span>Вы внедряете новый продукт или новую услугу</span></li>
          <li class="icon-5"><span>Большие затраты на рекламу, которая не окупается</span></li>
          <li class="icon-6"><span>У Вас все хорошо, но хочется масштабировать бизнес</span></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="stripe stripe-why-marketing">
    <div class="container">
      <h2>Почему интернет-маркетинг?</h2>

      <div class="row diag">
        <div class="col-md-4">
          <span>Реклама 2010 год</span>
          <img src="/img/diag3.png" alt="">
          <span class="diag-label">
            интернет-реклама
          </span>
        </div>
        <div class="col-md-4">
          <span>Реклама 2012-2013 года</span>
          <img src="/img/diag1.png" alt="">
        </div>
        <div class="col-md-4">
          <span>Реклама сейчас</span>
          <img src="/img/diag2.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="stripe stripe-comparison">
    <div class="container">
      <h3>Интернет и интернет реклама самые динамично развивающиеся сегменты</h3>

      <div class="row users">
        <div class="col-md-6 users-few">
          традиционное привлечение клиентов
        </div>
        <div class="col-md-6 users-many">
          Использование интернет маркетинга с нами
        </div>
      </div>
    </div>
  </div>

  <div class="stripe stripe-services">
    <div class="container">
      <h2>Наши услуги</h2>

      <ul class="list">
        <li class="nav left"> </li>
        <li class="active">Создание Landing Page с конверсией от 7 %</li>
        <li>Поддержка сайта</li>
        <li>Поддержка сайта</li>
        <li class="nav right"> </li>
      </ul>

      <div class="service service1">
        <div class="content">
          <h3 class="title">Создание Landing Page с конверсией от 7%</h3>
          <ul>
            <li>Landing Page от 15 000 руб.</li>
            <li>Сайт компании от 15 000 руб.</li>
            <li>Сайт портфолио от 8 000 руб.</li>
            <li>Интернет-магазин от 20 000 руб</li>
          </ul>

          <p>Наши сайты отличаются высоким уровнем продаваемости представляемых услуг</p>
        </div>

        <a href="#" class="btn btn-yellow">Заказать</a>
      </div>
    </div>
  </div>

<!--   <div class="stripe stripe-works">
  <div class="container">
    <h2>Наши работы</h2>

    Компания по ремонту смартфонов, планшетов и компьютеров

    Заказано
    Создание нового сайта компании
    Настройка аналитики
    Настройка контекстной рекламы
    Аудит отдела продаж
    Создание уникальных торговых предложений сервиса
    Итого: 57 000 руб.

    Результат
    За 2 недели ежедневное посещение сайта увеличилось с 50 до 300 уникальных посетителей
    Заказов в день с 7-10 до 25-35
    Выручка компании в первые две недели увеличена на 50 000 руб, через месяц на 90 000 руб.

    окупаемость за 2 недели
  </div>
</div> -->

  <div class="stripe stripe-want-better">
    <div class="container">
      <h2>Хотите такие результаты и даже лучше?</h2>

      <form action="" class="vertical" method="post">
        <h4>Узнайте стоимость наших услуг для Вашей компании</h4>
        <input type="text" placeholder="Имя" class="form-control" name="name" required>
        <input type="tel" placeholder="Телефон" class="form-control" name="phone" required>
        <input type="email" placeholder="Электронная почта" class="form-control" name="mail" required>
        <button type="submit" class="btn btn-yellow" name="submit" value="2">Получить расчет</button>
        <small>Ваши данные надежно защищены</small>
      </form>
    </div>
  </div>

  <div class="stripe stripe-want-important">
    <div class="container">
      <h2>Важно</h2>
      <div class="row importants">
        <div class="col-md-6 important1">
          <span>
            Из одной сферы работаем только с одной компанией.
            С Вашими конкурентами работать не будем!
          </span>
        </div>
        <div class="col-md-6 important2">
          <span>
            Для хорошего результата у Вас должен быть
            налаженный отдел продаж
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="stripe stripe-questions" id="questions">
    <div class="container">
      <h2>У Вас остались вопросы?</h2>

      <form action="" class="vertical" method="post">
        <h4>Получите бесплатную консультацию как привлечь новых клиентов прямо сейчас!</h4>
        <input type="text" placeholder="Имя" class="form-control" name="name" required>
        <input type="tel" placeholder="Телефон" class="form-control" name="phone" required>
        <input type="email" placeholder="Электронная почта" class="form-control" name="mail" required>
        <button type="submit" class="btn btn-yellow" name="submit" value="3">Получить консультацию</button>
        <small>Ваши данные надежно защищены</small>
      </form>
    </div>
  </div>

  <div class="stripe stripe-footer">
    <div class="container">
      <div class="col-md-9 words">
        <a class="brand" href="#"><img src="/img/logo.png" alt=""></a>
        <p>© 2016 "Lead Centr" — агентство интернет маркетинга</p>

        <div class="social-icons">
          <a href=""><img src="/img/social-icons/tw.png" alt=""></a>
          <a href=""><img src="/img/social-icons/fb.png" alt=""></a>
          <a href=""><img src="/img/social-icons/ig.png" alt=""></a>
          <a href=""><img src="/img/social-icons/vk.png" alt=""></a>
        </div>
      </div>

      <div class="col-md-3 contacts">
        <address>
          <div class="phone">8 (423) 259-08-08</div>
          <div class="working-time">ПН-ПТ с 9-00 до 19-00</div>
        </address>
        <a href="#questions" class="request-call">Заказать звонок</a>
        <a href="mailto:info@leadcentr.ru" class="email">info@leadcentr.ru</a>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75789984-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>
