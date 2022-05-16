<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

<main class="main">     
   <section id="section-search" class="section section_secondary section_background" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/search-bg.jpg?f4e0d92b96b5b6812b1aa1ed20504e57)">
      <div class="container">
         <div class="section__wrapper">
            <div class="section__heading">
               
               <h1 class="section__title">Для любой задачи есть специалист
                  <p class="section__subtitle">Поможем найти надежного исполнителя для любых задач.</p>
            </h1></div>
            <div class="section__content">
               <form method="post" action="" class="search-form">
                  <input name="search" class="search-form__input" placeholder="Поиск">
                  <button class="search-form__btn">
                     <ion-icon name="arrow-forward-outline"></ion-icon>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </section>
   
   <section class="section section_primary">
      <div class="container">
         <div class="section__wrapper">
            <div class="section__heading">
               <h2 class="section__title">Наши услуги</h2>
               <a href="services.html" class="btn">Посмотреть все</a>
            </div>
            <div class="section__content">
               <div class="services">
                  <div class="service">
                     <a href="#" class="service__card">
                        
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/1.png?abc714a94271a24679db82fd226e5549" alt="" class="service__img">
                        <p class="service__text">Уборка</p>
                     </a>
                  </div>
                  <div class="service">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/2.png?c369db928eaba21add1dda007aace39b" alt="" class="service__img">
                        <p class="service__text">Электрика</p>
                     </a>
                  </div>
                  <div class="service">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/3.png?7994d848b7332c6fa2dfcebac5e391a7" alt="" class="service__img">
                        <p class="service__text">Тренировки</p>
                     </a>
                  </div>
                  <div class="service">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/4.png?a0ae0bfd0b19a5e679c822f8fef258b2" alt="" class="service__img">
                        <p class="service__text">Перевозка вещей</p>
                     </a>
                  </div>
                  <div class="service">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/5.png?a067d8cf11b53ada1e5b73ffd5a67f1d" alt="" class="service__img">
                        <p class="service__text">Юристы</p>
                     </a>
                  </div>
                  <div class="service">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/6.png?8ed85f4c8703ee9273848daf64fa3b97" alt="" class="service__img">
                        <p class="service__text">Дизайнеры</p>
                     </a>
                  </div>
                  <div class="service">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/7.png?a1233defe5c951a54ff411cb2ece3896" alt="" class="service__img">
                        <p class="service__text">Репетиторство</p>
                     </a>
                  </div>
                  <div class="service">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/8.png?e5c91b0f8886faf9491d785acef1ddca" alt="" class="service__img">
                        <p class="service__text">Психологи</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <section class="section section_secondary">
      <div class="container">
         <div class="section__wrapper">
            <div class="section__heading">
               <h2 class="section__title">О сервисе</h2>
            </div>
            <div class="section__content">
               <div class="about-us">
                  <div class="about-us__content">
                     <p class="about-us__text">Услуги.ру — это сервис, который помогает клиентам и специалистам
                        встретиться. Клиенты находят здесь профессионалов для решения любых задач — репетиторов,
                        автоинструкторов, сантехников, парикмахеров.<br>А специалисты, в свою очередь, быстро находят
                        клиентов, ведь с помощью сайта можно в один клик организовать свой бизнес на дому без
                        вложений.</p>
                     <a href="about-us.html" class="btn">Читать далее</a>
                  </div>
                  <div class="about-us__img">
                     <img src="<?=SITE_TEMPLATE_PATH?>/images/about-us.png?a14381182c5ab45547e8239b419f8218" alt="about-us-img">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <section class="section section_primary">
      <div class="container">
         <div class="section__wrapper">
            <div class="section__heading">
               <h2 class="section__title">Наша статистика</h2>
               <p class="section__subtitle">За время работы с заказчиками и исполнителями</p>
            </div>
            <div class="section__content">
               <div class="stats">
                  <div class="stats__item">
                     <h3 class="stats__number">5928</h3>
                     <p class="stats__text">Пользователей с нами</p>
                  </div>
                  <div class="stats__item">
                     <h3 class="stats__number">3638</h3>
                     <p class="stats__text">Довольных пользователей</p>
                  </div>
                  <div class="stats__item">
                     <h3 class="stats__number">847</h3>
                     <p class="stats__text">Специалистов на сайте</p>
                  </div>
                  <div class="stats__item">
                     <h3 class="stats__number">9842</h3>
                     <p class="stats__text">Выполнено заказов</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <section class="section section_secondary">
      <div class="container">
         <div class="section__wrapper">
            <div class="section__heading">
               <h2 class="section__title">Причины выбрать нас</h2>
            </div>
         </div>
         <div class="section__content">
            
            
            <div class="swiper">
               
               <div class="swiper-wrapper">
                  
                  <div class="swiper-slide">
                     <div class="reason">
                        
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/reason-1.png?7821a94566bdb4f73796b765078eebc8" alt="" class="reason__img">
                        <strong class="reason__title">Ответственность</strong>
                        <small class="reason__text">Проверяем каждый отзыв. Если заказ спорный, мы узнаем
                           подробности.</small>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="reason">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/reason-2.png?db133027c3d866113ec761ebccc9fb9c" alt="" class="reason__img">
                        <strong class="reason__title">Продуктивность</strong>
                        <small class="reason__text">Находим специалистов, которые точно готовы взяться за
                           дело.</small>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="reason">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/reason-3.png?29a51ca209eab12afbc9f9b3c63e417b" alt="" class="reason__img">
                        <strong class="reason__title">Качество</strong>
                        <small class="reason__text">В рейтинге мы учитываем опыт специалиста, качество работы,
                           культуру общения и пунктуальность.</small>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="reason">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/reason-4.png?c63ff48bad6b128ada3658f3af57eef6" alt="" class="reason__img">
                        <strong class="reason__title">Скорость</strong>
                        <small class="reason__text">Предлагаем специалистов, которые соответствуют вашему заказу -
                           выбирайте подходящего!</small>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="swiper-custom-pagination"></div>
         </div>
      </div>
   </section>
   
   <section class="section section_primary">
      <div class="container">
         <div class="section__wrapper">
            <div class="section__heading">
               <h2 class="section__title">Популярные услуги</h2>
               <a href="services.html" class="btn">Посмотреть все</a>
            </div>
            <div class="section__content">
               
               <div class="services">
                  <div class="service service_popular">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/1.png?abc714a94271a24679db82fd226e5549" alt="" class="service__img">
                        <p class="service__text">Уборка</p>
                     </a>
                  </div>
                  <div class="service service_popular">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/9.png?a2be5c50e793f57062477bd5e58d34d8" alt="" class="service__img">
                        <p class="service__text">Электрика</p>
                     </a>
                  </div>
                  <div class="service service_popular">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/10.png?995f2c491da2f60df5f418216b5444d9" alt="" class="service__img">
                        <p class="service__text">Тренировки</p>
                     </a>
                  </div>
                  <div class="service service_popular">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/11.png?0dbdcb3d4ad2dc5f2ee3362e90984047" alt="" class="service__img">
                        <p class="service__text">Перевозка вещей</p>
                     </a>
                  </div>
                  <div class="service service_popular">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/12.png?9108fc27abecb9e321a769b73d329713" alt="" class="service__img">
                        <p class="service__text">Юристы</p>
                     </a>
                  </div>
                  <div class="service service_popular">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/13.png?0fb281cd3ddb91c5c545e39363b58769" alt="" class="service__img">
                        <p class="service__text">Дизайнеры</p>
                     </a>
                  </div>
                  <div class="service service_popular">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/14.png?79bac2f39cf24fbcecb1f92392db8c3c" alt="" class="service__img">
                        <p class="service__text">Репетиторство</p>
                     </a>
                  </div>
                  <div class="service service_popular">
                     <a href="#" class="service__card">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/15.png?b7c1df4522b124603f0a712ebbbb6e63" alt="" class="service__img">
                        <p class="service__text">Психологи</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <section class="section section_secondary">
      <div class="container">
         <div class="section__wrapper">
            <div class="section__heading">
               <h2 class="section__title">Мы здесь, чтобы помочь</h2>
            </div>
            <div class="section__content">
               <div class="feedback">
                  <img src="<?=SITE_TEMPLATE_PATH?>/images/feedback.png?dfa60ac6960a221c7c050a5a95d024b0" alt="" class="feedback__img">
                  
                  <form method="post" action="" class="feedback-form">
                     <input name="name" class="input" placeholder="Имя">
                     <input name="company" class="input" placeholder="Ваша компания">
                     <input name="theme" class="input" placeholder="Тема">
                     <input name="email" class="input" placeholder="Email" type="email">
                     <textarea name="comment" placeholder="Сообщение" class="input"></textarea>
                     <button class="btn">Отправить</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <section class="section section_primary">
      <div class="container">
         <div class="section__wrapper">
            <div class="section__heading">
               <h2 class="section__title">Где используют наш сервис</h2>
               <p class="section__subtitle">Наш сервис используют по всей России, Вы можете найти нужного вам
                  специалиста в любом городе. На данной странице вы узнаете, где найти хорошего специалиста в вашем
                  городе, его контакты и расценки.
                  Мы помогаем найти специалиста в городе и найти ему замену в случае необходимости.
                  Срочный вызов специалиста на дом – это отличная возможность быстро решить возникшую проблему и не
                  ожидать долгие часы, когда приедет ремонтная бригада.</p>
            </div>
            <div class="section__content">
               
               <img src="<?=SITE_TEMPLATE_PATH?>/images/map.png?4c8a3d5c65f40de2c2279ce36e3c613e" alt="map-img">
            </div>
         </div>
      </div>
   </section>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>