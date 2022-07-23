<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- lien Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
            <!-- lien fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Fredoka+One&family=Joan&family=Kdam+Thmor+Pro&family=Lobster&family=Montserrat:wght@200;400&family=Roboto&family=Source+Code+Pro&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
       @include('layouts.navigation')
       @yield('content')


</body>
</html>