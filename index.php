<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>AJAX data sending</title>
  </head>
  <body>

    <div class="col-sm-10 col-md-10 col-lg-8 px-sm-0 mx-auto">

        <div id = 'output'> </div>
        <br>
            <div id = "oneForm">
                <form action="add.php" method="post" onsubmit="return submitData(this)">                 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control  text-center" name="email" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control text-center" name="password" placeholder="">
                    </div>

                    <button type="submit" id = "buttonOne" class="btn btn-info" name="submit" value="add">Отправить</button>
                </form>
            </div>
        </div>
  </body>
</html>