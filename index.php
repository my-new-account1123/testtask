<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="app/style.css">
    <link rel="stylesheet" href="app/jquery.multiselect.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="app/jquery.multiselect.js"></script>
    
</head>
<body>
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Добавить соотрудника</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Форма заполнения </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <form action="app/php/action.php" method="post">
                <div class="form-group">
                    <label for="surname">Фамилия</label>
                    <input name="surname" id="surname" type="text">
                </div>
                <div class="form-group">
                    <label for="firstname">Имя</label>
                    <input name="firstname" id="firstname" type="text">
                </div>
                <div class="form-group">
                    <label for="patronymic">Отчество</label>
                    <input name="patronymic"  id="patronymic" type="text">
                </div>
                <div class="form-group">
                    <label for="start">Дата рождения </label>
                    <input type="date" id="date_bithd" name="date_bithd" min="1900-01-01" max="2020-01-01">
                </div>
                <div class="form-group">
                    <label for="number">Табельный номер </label>
                    <input name="number" id="number" type="text">
                </div>
                <div class="form-group">
                  <label for="city">Город проживания</label>
                  <select name="city_option" class="form-control" id="city">
                    <option value="Almaty">Алматы</option>
                    <option value="Astana">Астана</option>
                    <option value="Karaganda">Караганда</option>
                    <option value="Uralsk">Уральск</option>
                    <option value="Shymkent">Шымкент</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lang">Языки общения</label>
                <select id="lang" name="lang_option[]" multiple="multiple" class="1col active">
                    <option value="казахский">казахский</option>
                    <option value="русский">русский</option>
                    <option value="английский">английский</option>
                    <option value="французский">французский</option>
                </select>
            </div>
            <div class="form-group">
                <label for="newlang">Языки общения</label>
                <select id="newlang" name="newlang[]" multiple="multiple" class="1col active">
                 <option value="Многозадачность">Многозадачность</option>
                 <option value="Энтузиазм">Энтузиазм</option>
                 <option value="Организация">Организация</option>
                 <option value="Честность">Честность</option>
                 <option value="Умение работать в команде">Умение работать в команде</option>
             </select>
         </div>
         <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Добавить"/>
        </div>
    </form>
</div>
</div>
</div>
</div>
<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Информация о соотруднике</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <div style=" display: flex;" class="short_info">
        <img class="image_ava"style="width: 200px;height: 200px;" src="img/no-avatar.png" alt="">
        <div  class="short_info-name">
            <div  style="display: flex;"class="flexable">
                <p>Фамилия:</p><p id="surname_text"></p>
            </div>            
            <div  style="display: flex;"class="flexable">
               <p>Имя:</p><p id="firstname_text"></p>
           </div>           
           <div style="display: flex;" class="flexable">
               <p>Отчество:</p><p id="patronymic_text"></p>
           </div>           
           <div style="display: flex;" class="flexable">
               <p>Дата рождения:</p><p id="birth_date_text"></p>
           </div>           
           <div style="display: flex;" class="flexable">
            <p>Табельный номер:</p><p id="table_number_text"></p>
        </div>            
        <div  style="display: flex;"class="flexable">
            <p>Город:</p><p id="city_text"></p>
        </div>            
        <div  style="display: flex;"class="flexable">
            <p>Языки:</p><p id="lang_text"></p>
        </div>            
        <div  style="display: flex;" class="flexable">
           <p>Навыки:</p><p id="skills_text"></p>
       </div>           
   </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<?php
include('app/config/dbconfig.php');
$result = mysqli_query($conn,"SELECT * FROM workers");

echo  '<table class="table table-striped">';
echo '  <thead>
<tr>
<th>id</th>
<th>Имя</th>
<th>Фамилия</th>
<th>Очество</th>
</tr>
</thead>';

while($row = mysqli_fetch_array($result))
{

    echo '<tr>
    <a href="">
    <td> '. $row['id'] .'</td>
    <td> '. $row['surname'] .'</td>
    <td>' . $row['firstname'] .'</td>
    <td>' . $row['patronymic'] . '</td>
    <td> <button id="modal_send" type="button" data-toggle="modal" data-target="#info" class="btn btn-primary" data-surname ="'. $row['surname'] .'" 
    data-firstname ="'. $row['firstname'] .'"  data-patronymic="'. $row['patronymic'] .'" data-birth_date="'. $row['birth_date'] .'"data-table_number ="'. 
    $row['table_number'] .'" data-city ="'. $row['city'] .'" data-lang ="'. $row['lang'] .'" data-skills ="'. $row['skills'] .'">Подробнее</button> </td>
    </tr>';
}
echo "</table>";

?>
</div>
<script src="app/active.js"></script>
</body>
</html>