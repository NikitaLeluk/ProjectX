@extends('layout.app')
@section('title', 'Главная страница')
@section('content')
@include('layout.header')

  <main>

</br>
  <div class="jumbotron text-center text-black bg-transparent">  
<h2 class="display-4">АНГАРСК - город рожденный победой</h2>
</br>
</br>  
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="\img\Car1.jpg" 
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h3></h3>
            <p></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
      <img src="\img\Car2.jpg" 
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1></h1>
            <p></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="\img\Car3.jpg" 
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1></h1>
            <p></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
      <img src="\img\Car4.jpg" 
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1></h1>
            <p></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
      <img src="\img\Car5.jpg" 
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1></h1>
            <p></p>
          </div>
        </div>
      </div>


      <div class="carousel-item">
      <img src="\img\Car7.jpg" 
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1></h1>
            <p></p>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </br>
  </br>
  <div class="jumbotron text-center text-black bg-transparent">  
   


<div class="container"> 
    <div class="row align-items-start">
    <hr class="featurette-divider">
<h2 class="display-4">Музеи</h2>
<hr class="featurette-divider"> 
<div class="container">
  <div class="row align-items-start">
<div class="col-md-4">
  <div class="card" style="width:100%;">
  <img src="\img\Musei1.JPG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Музей победы</h5>
    <a href="https://museypobedy.edusite.ru/" class="btn btn-success">Перейти на сайт</a>
  </div>
</div>
  </div>
  <div class="col-md-4">
<div class="card" style="width:100%;">
  <img src="\img\Musei2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Музей часов</h5>
    <a href="http://clock.angarsk.ru/museum_clock/" class="btn btn-success">Перейти на сайт</a>
  </div>
</div>
</div>
  <div class="col-md-4">
<div class="card" style="width:100%;">
  <img src="\img\Musei3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Мозаичные панно</h5>
    <a href="http://www.angarsk-photos.ru/category/mozaiki-angarska/" class="btn btn-success">Перейти на сайт</a>
  </div>
</div>
    </div>
    </div>
    </div>
    </br>
  </br>

    
    <div class="container">
  <div class="row align-items-start">
    <div class="col-md-6">
<div class="card" style="width:100%;">
  <img src="\img\Musei4.jpg" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">Музей трудовой славы АО «АНХК»</h5>
    <a href="https://museum.anhk.ru/" class="btn btn-success">Перейти на сайт</a>
  </div>
</div>
    </div>
    <div class="col-md-6">
<div class="card" style="width:100%;">
<img src="\img\Musei5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Музей минералов</h5>
    <a href="http://clock.angarsk.ru/museum_minerals/" class="btn btn-success">Перейти на сайт</a>
  </div>
</div>
    </div>
    </div>
    </div>


    <div class="container"> 
    <div class="row align-items-start">
    <hr class="featurette-divider">
    <h2 class="display-4">Достопримичательности</h2>
<hr class="featurette-divider"> 
<div class="col-md-6">
  <div class="card" style="width:100%;">
  <img src="\img\dost1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ангарские ворота</h5>
    <a href="/ang_vorota" class="btn btn-success">Подробнее</a>
  </div>
</div>
  </div>
  <div class="col-md-6">
  <div class="card" style="width:100%;">
  <img src="\img\dost2.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Первая каменная постройка – жилой дом 1948 года</h5>
    <a href="/dom" class="btn btn-success">Подробнее</a>
  </div>
</div>
  </div>
  <div class="col-md-6">
  <div class="card" style="width:100%;">
  <img src="\img\dost3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Площадь Ленина </h5>
    <a href="/pllenina" class="btn btn-success">Подробнее</a>
  </div>
</div>
  </div>
  <div class="col-md-6">
  <div class="card" style="width:100%;">
  <img src="\img\dost4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Свято-троицкий кафедральный собор</h5>
    <a href="/sobor" class="btn btn-success">Подробнее</a>
  </div>
</div>
  </div>
  <div class="col-md-6">
  <div class="card" style="width:100%;">
  <img src="\img\dost5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Памятник «Голуби мира»</h5>
    <a href="/golubi" class="btn btn-success">Подробнее</a>
  </div>
</div>
  </div>
  <div class="col-md-6">
  <div class="card" style="width:100%;">
  <img src="\img\dost6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Старая квартира 1951 года</h5>
    <a href="/stkv" class="btn btn-success">Подробнее</a>
  </div>
</div>
  </div>

  <div class="container"> 
    <div class="row align-items-start">
    <hr class="featurette-divider">
    <h2 class="display-4">Парки</h2>
<hr class="featurette-divider"> 
<div class="col-md-4">
  <div class="card" style="width:100%;">
  <img src="\img\park1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Парк "Современник"</h5>
    <a href="https://yandex.ru/profile/109220620033?no-distribution=1&source=wizbiz_new_map_single&ysclid=l45e9nsuw993271520" class="btn btn-success">На карте</a>
  </div>
</div>
  </div>
  <div class="col-md-4">
<div class="card" style="width:100%;">
  <img src="\img\park2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Парк "Победы"</h5>
    <a href="https://yandex.ru/profile/162155296618?no-distribution=1&source=wizbiz_new_map_single&ysclid=l45ed90eh34737509" class="btn btn-success">На карте</a>
  </div>
</div>
</div>
  <div class="col-md-4">
<div class="card" style="width:100%;">
  <img src="\img\park3.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Парк профилоктория "Родник"</h5>
    <a href="https://yandex.ru/profile/93613796347?no-distribution=1&source=wizbiz_new_map_single&ysclid=l45edx7zyz390080386" class="btn btn-success">На карте</a>
  </div>
</div>
    </div>
    </div>
    </div>

<div class="container">
  <div class="row align-items-start">
<div class="col-md-4">
  <div class="card" style="width:100%;">
  <img src="\img\park4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Парк "Строителей"</h5>
    <a href="https://yandex.ru/profile/22825011922?no-distribution=1&source=wizbiz_new_map_single&ysclid=l45eeom9k9373679144" class="btn btn-success">На карте</a>
  </div>
</div>
  </div>
  <div class="col-md-4">
<div class="card" style="width:100%;">
  <img src="\img\park5.JPG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Парк "им.10-летия Ангарска"</h5>
    <a href="https://yandex.ru/profile/51994097935?no-distribution=1&source=wizbiz_new_map_single&ysclid=l45efcosbs464954290" class="btn btn-success">На карте</a>
  </div>
</div>
</div>
  <div class="col-md-4">Ф
<div class="card" style="width:100%;">
  <img src="\img\park6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Парк "Нефтехимиков"</h5>
    <a href="https://yandex.ru/profile/215276474492?no-distribution=1&source=wizbiz_new_map_single&ysclid=l45eg46ffa291394698" class="btn btn-success">На карте</a>
  </div>
</div>
    </div>
    </div>
    </div>
    <div class="container"> 
    <div class="row align-items-start">
    <hr class="featurette-divider">
    <h2 class="display-4">Набережная</h2>
<hr class="featurette-divider"> 
<div class="col-md-6">
Поистине историческое событие – открытие набережной – состоялось в Ангарске 29 сентября. В торжествах участвовали председатель Законодательного Собрания региона Сергей Сокол, руководители округа, депутаты Думы, Почетные граждане, а также гости из соседних муниципалитетов, города-побратима Мытищи и города-партнера Омска. Тысячи жителей стали зрителями и участниками праздничных мероприятий, которые длились весь день.

Об этапах создания городской набережной мэр Ангарского округа Сергей Петров рассказал во время официальной части ее открытия. Глава округа подчеркнул, что первым шагом к строительству набережной стало берегоукрепление реки Китой. Точка отсчета – 2015 год, когда был подготовлен проект. Строительство защитной дамбы стартовало в январе 2017 года. Работы шли на двух участках: в районе Кирова и Старицы.

«Серьезное двухъярусное сооружение общей длиной 1200 метров стало основой для создания прогулочной части вдоль береговой линии. Работы по берегоукреплению были завершены на год раньше контрактных сроков. Успешная реализация этого проекта – стало знаковой задачей для муниципалитета. Появилась уверенность: набережной – быть!» - отметил мэр.

Центральный подход к набережной был обустроен в 2018 году. Пешеходный бульвар в результате онлайн-голосования получил название Набережный.

В 2019 году проведено благоустройство спуска к воде. Вдоль берега обустроены пешеходные и велодорожки, детские и спортивные площадки, зоны отдыха, установлены тренажеры. Построена улица Кировская. Разбит сквер. Высажены сотни крупномерных сосен, а также декоративные кустарники.

Набережная протянулась на семь километров, от парка за ДК «Современник» до старого Китойского моста. Оценивая проделанную работу, Сергей Сокол отметил, что она стала действительно долгожданной.

«Это прекрасная набережная, где можно хорошо отдохнуть, заняться спортом, является результатом титанического труда команды мэра. Ни один год понадобился главе округа, чтобы консолидировать усилия, муниципалитета, областных и федеральных властей. На реализацию проекта потребовался большой объем средств, при этом муниципальных средств потрачено минимальное количество. На один муниципальный рубль сюда привлекли в 5-6 раз больше федеральных и областных. Так и нужно работать!» - сказал председатель областного парламента.

Делясь впечатлениями от увиденного, заместитель главы администрации городского округа Мытищи Ирина Шутовская, назвала новую набережную настоящим украшением Ангарска. Первый заместитель мэра Омска Евгений Фомин подчеркнул, что открытие такого объекта является эпохальным событием, а люди, которые воплотили его в жизнь, войдут в историю.

Качество нового объекта спортивной инфраструктуры в день открытия оценили 1200 взрослых и 300 детей, которые приняли участие  в спортивном старте - первом Ангарском полумарафоне. Соревнования прошли на трех дистанциях. Участие в забеге на 10 километров принял и мэр Сергей Петров вместе с супругой.

Еще одним знаковым событием праздника стало открытие архитектурной композиции «Свадебное дерево» на втором ярусе городской набережной. Композиция изготовлена на личные средства Сергея Петрова. 29 сентября три молодые семьи Николай и Ольга Харламовы, Илья Агафонов и Татьяна Коваленко, Максим и Валерия Шамановы скрепили свои чувства символическим замком, который разместили на дереве, а ключи выбросили в воды Китоя, чтобы быть вместе долгие счастливые годы.

Во время праздника на набережной работали 40 интерактивных площадок: бои на мечах, игра-бродилка, твистер, эстафеты, фотозоны, шоу мыльных пузырей, баннеры-раскарски. Праздничное настроение создавали аниматоры, живые скульптуры, художники-портретисты, музыканты и творческие коллективы округа.
Торжества продолжились театрализованной программой «Легенды реки Китой» и концертом группы «Любэ». 
</br>
Ярким завершением вечера стал фейерверк, который впервые запустили с острова Большой. 
</div>
<div class="col-md-6">
<img src="\img\naber1.jpg" class="card-img-top" alt="...">
</br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77684.24200131692!2d103.71227456249997!3d52.52198840000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d079d76304dfb95%3A0xcebf96280eee20d5!2zItCd0L7QstCw0Y8g0L3QsNCx0LXRgNC10LbQvdCw0Y8i!5e0!3m2!1sru!2sru!4v1654681288651!5m2!1sru!2sru" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</br>
 
    <iframe width="100%" height="400" src="https://www.youtube.com/embed/xFeVUytvC64" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </br>
      <img src="\img\naber2.jpg" class="card-img-top" alt="...">
    </div> 
    </div>
    </div>
    <hr class="featurette-divider"> 
  <div class="continer">
  <h2 class="display-4">Факты об Ангарске</h2>
  <hr class="featurette-divider"> 
</div>

  <div class="continer">
  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Факт #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Название Ангарск получил благодаря реке Ангара, на берегу которой он стоит. Эта река весьма интересна — будучи вторым по полноводности среди всех притоков в России, она является единственной, вытекающей из озера Байкал, крупнейшего в мире резервуара с пресной водой.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Факт #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> Ангарск неофициально носит звание “Город нефтехимиков”. Это обусловлено тем, что основу его экономики составляет переработка нефти, и здесь много различных химических предприятий. Увы, есть у этого и отрицательная сторона — экология здесь далеко не самая лучшая. Ряд экологов называет состояние воздуха и окружающей среды в Ангарске катастрофическим.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Факт #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Климат в Ангарске весьма суровый. Тело тёплое, а вот зима иногда экстремально холодная, к тому же долгая. Лишь около 100 дней в году здесь не бывает заморозков, а среднегодовая температура воздуха немного ниже 0 °C. Для сравнения, даже в Южно-Сахалинске, приравненном к районам Крайнего Севера, она выше 0 °C.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
  Факт #4
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">В 2005 и 2008 годах Ангарск занимал первое место в конкурсе “Самый благоустроенный город России”. А в 2013 получил первое место в списке самых чистых городов из числа имеющих более 100.000 жителей.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
  Факт #5
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Почётный Орден Трудового Красного знамени Ангарск получил ещё в 1971 году, став 25-м из городов СССР, удостоенных этой награды. За всё время, что этот орден вручался городам, получили его менее 80 из них.</div>
    </div>
  </div>
</div>
</div>
<!-- /.row -->


    <!-- START THE FEATURETTES -->

   
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  @include('layout.footer')
</main>
@endsection
