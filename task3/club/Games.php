<?php
session_start();
print_r($_SESSION);

if($_POST['calculate']) {
    if(isset($_POST['memberFamily0'])){
    
        $arr = $array();
        for($i=0;$i<$_SESSION['countFamily'];$i++){
          $arr[$i] = $_SESSION['memberFamily'.$i];
        }
    }
      print_r($arr);
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Games</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1> Bank</h1>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form method="post">
                    <div class="form-group">
                        <label for="name">Member Name </label>
                        <input type="name" name="name" id="name" value="<?=$_SESSION['name'] ?? "" ?>" placeholder=""
                            aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                        <label for="countFamily">count of family</label>
                        <input type="countFamily" name="countFamily" id="countFamily"
                            value="<?=$_SESSION['countFamily'] ?? "" ?>" class="form-control" placeholder=""
                            aria-describedby="helpId">

                    </div>

                    <label for="memberFamily">Member of family</label>
                    <?php for($i=0;$i<$_SESSION['countFamily'];$i++){?>
                    <input type="memberFamily" name="memberFamily$i" id="memberFamily" value="" class="form-control"
                        placeholder="" aria-describedby="helpId">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="300" id="defaultCheck1" name="footbal$i">
                        <label class="form-check-label" for="defaultCheck1">
                            Football
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="250" id="defaultCheck2"
                            name="Swimming$i">
                        <label class="form-check-label" for="defaultCheck2">
                            Swimming
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="150" id="defaultCheck2" name="Volley$i">
                        <label class="form-check-label" for="defaultCheck2">
                            Volley ball
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="100" id="defaultCheck2" name="Other$i">
                        <label class="form-check-label" for="defaultCheck2">
                            Other
                        </label>
                    </div>



                    <?php  } ?>




                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="calculate" value="submit">
                    </div>
                </form>
            </div>
        </div>
        <footer class="w-100 bg-dark text-light text-center py-2" style="position: fixed;bottom:0;">
            All Rights Reserved
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>