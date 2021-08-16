<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/app.css" />
    <title>Табель учета времени</title>
  </head>
  <body>
    <div class="page">
      <header class="header">
        <div class="header__container">
          <div class="btn-justify"><i class="icon-blue bi bi-justify"></i></div>
          <div class="btn-justify_mobile">
            <i class="icon-blue bi bi-justify"></i>
          </div>
          <i class="icon-blue bi bi-chevron-left"></i>
          <h6 class="header__title">Заголовок</h6>
          <h6><span class="badge bg-secondary">Версия1</span></h6>
        </div>
        <div class="header__container">
          <i class="icon-blue bi bi-arrows-fullscreen"></i>
        </div>
      </header>
      <nav class="navigation">
        <ul class="navigation__items navbar-nav">
          <li class="navigation__item">
            <i class="icon__blue bi bi-house-door"></i>Главная
          </li>
          <li class="navigation__item navigation__item">
            <i class="icon__blue bi bi-bag-fill"></i>Проекты
          </li>
          <li class="navigation__item navigation__item_task">
            <i class="icon__blue bi bi-card-checklist"></i>Задачи
          </li>
          <li class="navigation__item">
            <i class="icon__blue bi bi-mailbox2"></i>Рекламации
          </li>
          <li class="navigation__item">
            <i class="icon__blue bi bi-book-fill"></i>Справочник
          </li>
        </ul>
      </nav>
      <div class="main">
        <div class="buttons">
          <button type="button" class="btn btn-light">
            <i class="icon-blue bi bi-chevron-left"></i>
          </button>
          <h1 class="title">Наименование раздела</h1>
          <button type="button" class="task-button btn-warning_mobile btn btn-warning">
            Добавить задачу
          </button>
        </div>
        <div class="buttons">
         
          <div class="dropdown">
            <button class="my-button btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              Все месяца
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item dropdown-item" href="#">Все месяца</a></li>
              <li><a class="dropdown-item dropdown-item-jan" href="#"> Январь</a></li>
              <li><a class="dropdown-item dropdown-item-fev" href="#">Февраль</a></li>
              <li><a class="dropdown-item dropdown-item-mart" href="#">Март</a></li>
              <li><a class="dropdown-item  dropdown-item-apr" href="#">Апрель</a></li>
              <li><a class="dropdown-item dropdown-item-may" href="#">Май</a></li>
              <li><a class="dropdown-item dropdown-item-june" href="#">Июнь</a></li>
              <li><a class="dropdown-item dropdown-item-july" href="#">Июль</a></li>
              <li><a class="dropdown-item dropdown-item-august" href="#">Август</a></li>
              <li><a class="dropdown-item dropdown-item-sent" href="#">Сентябрь</a></li>
              <li><a class="dropdown-item dropdown-item-oct " href="#">Октябрь</a></li>
              <li><a class="dropdown-item dropdown-item_-nov" href="#">Ноябрь</a></li>
              <li><a class="dropdown-item dropdown-item-dec" href="#">Декабрь</a></li>
            </ul>
          </div>

          <button class="my-button btn btn-success dropdown-toggle">
            <svg
              width="1em"
              height="1em"
              viewBox="0 0 16 16"
              class="bi bi-calendar2-week-fill"
              fill="currentColor"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M14 2H2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"
              />
              <path
                fill-rule="evenodd"
                d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"
              />
              <path
                d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"
              />
            </svg>
            Табель
          </button>
        </div>

        

      <table class="my-table table table-striped table-bordered">
        <thead class="thead">
          <tr class="tr">
            <th scope="col">id</th>
            <th scope="col">Пользователь</th>
            <th scope="col">Отработанное время</th>
            <th scope="col">Переработка</th>
          </tr>
        </thead>
        <tbody class="my-table__tbody"></tbody>
        <tbody class="my-table__tbody-june display-none"></tbody>
        <tbody class="my-table__tbody-july display-none"></tbody>
        <tbody class="my-table__tbody-august display-none"></tbody>
      </table>

      <table class="my-table-task table table-striped table-bordered display-none">
        <thead class="thead">
          <tr class="tr">
            <th scope="col">id</th>
            <th scope="col">id пользователя</th>
            <th scope="col">Наименование задачи</th>
            <th scope="col">Время выделенное на выполнение задачи в часах</th>
            <th scope="col">Время_затраченное на выполнение задачи в часах</th>
            <th scope="col">Дата и время старта задачи</th>
          </tr>
        </thead>
        <tbody class="my-table-task__tbody"></tbody>
      </table>

    </div>

    
    <div class="popup">
      
      <div class="popup__content">
       
      <svg width="2em" height="2em" viewBox="0 0 16 16" class="popup__close bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
</svg>



        <h3 class="popup__title">Добавить задачу</h>
        <form class="popup__form" name="formAdd" >
         <input type="text"name="id_user_task" id="link-error" class="popup__input popup__input_type_name"  required placeholder="id Пользователя" >
         <span class="error"></span>
         
         
          <input   type="text" name="task" class="popup__input popup__input_type_name"  required placeholder="Наименование задачи">
          <span  class="error"></span>
          <input type="text"name="time_task" class="popup__input popup__input_type_link-task" required placeholder="Время выделенное на выполнение задачи в часах">
          <span class="error"></span>
          <input type="text"name="real_time_task" class="popup__input popup__input_type_link-task"  required placeholder="Время затраченное на выполнение задачи в часах">
          <span  class="error"></span>
          <input type="text"  name="data" class="popup__input popup__input_type_link-task" required placeholder="Дата и время старта задач">
          <span  class="error"></span>
          <button type="submit" class="form-button popup__button  popup__button_valid" >+</button>
      </form>
    </div>

    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>
</html>
