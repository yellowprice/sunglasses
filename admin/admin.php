<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="goods-out"></div>
<h1>Товар</h1>
<label for="gname">Название: </label>
<input type="text" id="gname"><br><br>
<label for="gcost">Стоимость: </label>
<input type="text" id="gcost"><br><br>
<label for="gdescr">Описание: </label>
<textarea id="gdescr" cols="30" rows="10"></textarea><br><br>
<label for="gorder">Порядок: </label>
<input type="text" id="gorder"><br><br>
<label for="gimg">Изображение: </label>
<input type="text" id="gimg"><br><br>
<input type="hidden" id="gid">
<input type="submit" value="Обновить" class="add-to-db">

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="js/admin.js"></script>
</body>
</html>