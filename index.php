<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
     <!-- vue 2 -->
     <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script> -->
     <!-- axios -->
     <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <script src="script.js" type="text/javascript">

    </script>
    <title>PHP Dischi</title>

</head>
<body>
    <div id="app" class="container">
        <div class="row">

          <div v-for="cd in dischi" class="copertina">

            <h1>{{cd.title}}</h1>
            <div class="immagine">

              <img :src="cd.poster" alt="">

            </div>
            <h3>{{cd.author}}</h3>
            <h3>{{cd.genre}}</h3>
            <h3>{{cd.year}}</h3>


          </div>

        </div>
    </div>
  </body>  
</html>
