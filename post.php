<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">

            <div class="alert alert-primary" role="alert">
                A simple primary alert—check it out!
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text" id="inputGroup-sizing-default">氏名</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text" id="inputGroup-sizing-default">メールアドレス</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text" id="inputGroup-sizing-default">好きなゲーム</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="mt-3 d-flex justify-content-center">
                <button type="button" class="btn btn-primary">Primary</button>
            </div>

        </div>

        <?php
        echo "あいうえお";
        $name =29;

        echo $name;

        $num = rand(1,5);

        if($num === 1){
            echo "1です";
        }else{
            echo "2です";
        }



        ?>
        
    </div>
    
    <script src="js/index.js"></script>
</body>
</html>