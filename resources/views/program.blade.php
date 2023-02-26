<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Tilt Warp', cursive;
            margin: 0;
        }
        a{
            color: black;
        }
        .row{
            width: 80%;
            margin: auto;
        }

        .card{
            height: 400px;
        }
        h1,h5{
            text-align: center;
        }

        a{
            text-decoration: none;
        }

    </style>

</head>
<body>
        <h1>HOT NEWS</h1>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
              <div class="card">
                <img  src="https://www.posindonesia.co.id/en/artikel/image/ycfIvztwYiDBN8sY.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="/program/pos">POS Indonesia</a></h5>
                  </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://fh.upgris.ac.id/wp-content/uploads/2022/12/yt-scaled.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="/program/msib">MSIB 2022</a></h5>
                 </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://www.cenergi-sea.com/wp-content/uploads/2021/05/DSC_0774-2048x1365.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="/program/baksos">BAKTI SOSIAL</a></h5>
                </div>
              </div>
            </div>
          </div>
          {{-- <a href="/"><button type="button" class="btn btn-primary btn-sm">Home</button></a> --}}
          <h2 style="background-color:#BAD7E9; color:white; text-align:center; width:150px; padding:5px; margin:auto; font-size:20px; margin-top:10px; border-radius:10px"><a href="/">Home</a></h2>
</body>
</html>
