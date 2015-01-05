<? include "layout/header--index.php"; ?>

<div class="products section">
  <div class="container">
    <h2 class="section__title"><b>Каталог</b> продукции</h2>

    <table class="product-list">
      <tr>
        <td><a href="#"><img src="assets/img/product1.png"></a></td>
        <td><a href="#"><img src="assets/img/product2.png"></a></td>
        <td><a href="#"><img src="assets/img/product3.png"></a></td>
      </tr>
      <tr class="product-list__text">
        <td>Битумные материалы<br>для гидроизоляции</td>
        <td class="product-list__text--center">Теплоизоляция</td>
        <td>Строительные смеси</td>
      </tr>
      <tr class="product-list__empty"></tr>
      <tr>
        <td><a href="#"><img src="assets/img/product4.png"></a></td>
        <td><a href="#"><img src="assets/img/product5.png"></a></td>
        <td><a href="#"><img src="assets/img/product6.png"></a></td>
      </tr>
      <tr class="product-list__text">
        <td>Крепёж</td>
        <td class="product-list__text--center">Цемент</td>
        <td>Основит</td>
      </tr>
    </table>
  </div>
</div>

<div class="about section">
  <div class="container">
    <h2 class="section__title section__title--right">О <b>компании</b></h2>

    <p class="about__text">Задача нашей компании - это  оперативные поставки различных строительных материалов по всей России. Мы поставляем материлы на объекты на разных стадиях строительства, от фундамента до внутренней отделки. 
Индивидуальный подход к заказчику - вот одно из наших правил. Самые выгодные условия мы предлагаем крупным клиентам на большие объемы, но готовы обсуждать цены, работая на перспективу.
Наш главный принцип - честноть и открытость при работе с Вами. Мы делаем одно общее дело вместе с Вами и так же заинтересованы максимально быстро и без проблем поставить материалы на объект.</p>
  </div>
</div>

<div class="objects section">
  <div class="container">
    <h2 class="section__title">Наши <b>объекты</b></h2>

    <div class="objects__slider js-slider-objects">

      <? for ($i=0; $i < 3; $i++) { ?>
      <div class="object">
        <img src="assets/img/object.png" alt="" class="object__thumb">
        <div class="object__definition">
          <div class="object__type">Деловой центр</div>
          <div class="object__title">Central Yard</div>
          <div class="object__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis officiis ducimus, inventore voluptatibus ad magnam eveniet vitae alias facilis consequatur autem vero illo dolorum aliquid, et earum repellendus saepe at!</div>
        </div>

        <div class="clear"></div>
      </div>
      <? } ?>

    </div>
  </div>
</div>

<? include "layout/footer.php"; ?>