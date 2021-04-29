 
<? 

  include "reg/connect.php";
  session_start();

  function up_views($id)
  {
    global $connection;
    $connection->query("UPDATE articles SET views = views + 1 WHERE id = $id");
  }

  up_views($_GET['id']);

?>

 <!DOCTYPE html>
<html>
<head>
  <title>Jornd News</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/more.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
<div class="clear"></div>
<div class="wrapper">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="top">
  <a class="navbar-brand" href="#" id="name">Jornd News</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="button_2">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" id="news_1">
        <a class="nav-link" href="news.html">Новости</a>
      </li>
      <div class="wrapper1">
      <input type="checkbox" id="checkbox1"/>
    <label for="checkbox1"></label>
</div>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <div class="d6">
  <form>
  <input type="text" placeholder="Искать здесь..." id="search">
  <button type="submit"></button>
</form>
  </div>
    </form>
  </div>
</nav>

<br><br>
<br><br><br><br><br>
  <div id="id">Просмотров - </div>
<div id="wrapper2">
<div id="test">
<div id="test2">
<div id='search_result'>
    <img src="photos/catalina.png" id="news_aga">

<div class="jumbotron jumbotron-fluid" id="about">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">Музыка
Создано для Apple Music1
Слушайте музыку в потоковом режиме без рекламы или скачивайте её из огромной медиатеки на 50 миллионов песен. А во вкладке «Для вас» вы найдёте рекомендации от Apple Music, основанные на ваших музыкальных предпочтениях.
Music Store
Если вы предпочитаете приобретать песни, музыкальный магазин iTunes Store всегда у вас под рукой.
Воспроизведение
Плеер нового приложения «Музыка» позволяет не только слушать песни, но и читать их текст. Следующую композицию можно выбрать одним кликом. А удобный режим миниплеера поможет не отвлекаться от дел.
Медиатека
Вся ваша музыка собрана в одну коллекцию. Списки исполнителей, альбомов, песен, плейлистов и недавно добавленных композиций вы найдёте на удобной боковой панели с привычным интерфейсом. А на страницах медиатеки теперь можно ввести запрос и быстро найти нужную песню в вашей подборке.
Apple TV
Медиатека
В обновлённой вкладке «Медиатека» легко найти все купленные фильмы. Сортируйте список фильмов по времени покупки, жанру и другим параметрам.
Фильмы
Покупайте или берите напрокат новинки кино, находите интересные фильмы и сериалы в каталоге из тысяч наименований, включая крупнейшую подборку контента в формате 4K HDR.2
Платформа для Apple TV+
Новый уникальный стриминговый сервис от Apple — это множество эксклюзивных фильмов и сериалов от самых талантливых авторов. Сервис Apple TV+ появится в приложении Apple TV этой осенью.
Смотреть сейчас
Вкладка «Смотреть сейчас» — это главный экран в приложении Apple TV. Здесь вы найдёте подборки от редакторов и персональные рекомендации.
На очереди
Во вкладке «Смотреть сейчас» есть раздел «На очереди», где вы можете быстро найти и включить свой любимый контент. Продолжайте смотреть с того момента, на котором остановились, — на любом из ваших устройств.
Приложение Apple TV на всех ваших устройствах
Продолжить воспроизведение можно на Apple TV, iPad,
iPhone, некоторых моделях смарт‑телевизоров. А теперь и на Mac.
Dolby Atmos
Встроенные динамики некоторых моделей Mac воспроизводят объёмный звук в форматах Dolby Atmos, Dolby Digital или Dolby Digital Plus в приложении Apple TV.3
Подкасты
Вкладка «Слушать»
Послушайте новый выпуск любимого подкаста или узнайте, когда выходит следующий. На основе подкастов, прослушанных ранее, для вас будет сформирована подборка персональных рекомендаций.
Медиатека
В медиатеке приложения «Подкасты» собраны все подкасты, на которые вы подписаны, и все добавленные выпуски, отсортированные по названию. Вы можете сохранить любимые подкасты и слушать их офлайн.
Обзор
Из сотен тысяч подкастов нашего каталога редакторы Apple каждую неделю отбирают лучший контент. Вы всегда сможете найти, что послушать, в разделе «Новое и интересное» и в топ‑чартах.
Поиск
Теперь результаты поиска подкастов по теме или имени будут более точными. Вы даже сможете найти выпуски по имени ведущего или гостя передачи.
Синхрони­зация
Синхронизация медиаконтента
Все три сервиса — Apple TV, Apple Music и Подкасты от Apple — используют облако для синхронизации на всех ваших устройствах. Контент каждого из трёх приложений можно также синхронизировать с помощью кабеля.
Резервное копирование, обновление и восстановление данных через Finder
Каждый раз, когда вы подключаете устройство, оно отображается в боковом меню Finder. Отсюда можно выполнить резервное копирование, обновить или восстановить данные на вашем устройстве.</p>
  </div>
</div>
</div>
</div>
</div>
</div>
  <script src="js/search.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>
</body>
</html>
