
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form id="form" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Имя</label>
            <input name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Фамилия</label>
            <input name="family" class="form-control" id="exampleInputPassword1" placeholder="Enter family" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Возраст</label>
            <input name="age" class="form-control" id="exampleInputPassword1" placeholder="Enter age" required pattern="[0-9]{2}">
        </div>
        <button type="submit" class="btn btn-primary">сохранить</button>
    </form>
    <button onclick="location.href = 'Controller.php'" style="margin-top: 5px" class="btn btn-primary">Выгрузить</button>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<script src="js/ajax.js"></script>

</body>
</html>