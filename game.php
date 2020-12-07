 <?php

 echo '<div class = "game">' 



 . '<p id = "name-games">' 

 . $z['name'] 

 . '</p>' 



 . '<div id = "info_game">'
 . 'Номер игры - '
 . $z['id']
 . '   Дата публикации - '
 . $z['datap'] 

 . '</div>'


 . '<div class = "A1">'
 . '<img src = "img/1/' . $z['id'] . '.jpg">'
 
 . '</div>'


 . '<p class = "ogm">'
 . $z['ogm'] 

 . '</p>'

 . '<div class = "info">'

 . '<p>'
 . 'Год - ' 
 . $z['data']
 . '</p>'

  . '<p>'
 . 'Жанр - ' 
 . $z['schanr']
 . '</p>'

  . '<p>'
 . 'Разработчик - ' 
 . $z['razrab']
 . '</p>'

  . '<p>'
 . 'Цена - ' 
 . $z['sell']
 . '</p>'

  . '<p>'
 . 'Язык - ' 
 . $z['lang']
 . '</p>'

   . '<p>'
 . 'Кряк - ' 
 . $z['kr9k']
 . '</p>'


 . '</div>'


 . '<div id = "treb">'
 . '<pre>'
 . $z['treb']
 . '</pre>'

 . '</div>'







 . '</div>';


?>



