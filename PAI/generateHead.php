<?php

echo <<<END
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Movie House</title>
<link rel="stylesheet" href="css/loginStyle.css" type="text/css"/>
<link rel="stylesheet" href="css/articleStyle.css" type="text/css"/>
<link rel="stylesheet" href="css/registerStyle.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/fontello.css" type="text/css"/>

<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Open+Sans|Viga" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>


        $(window).scroll(function () {

                if ($(this).scrollTop() > 155)
                    $('.smallLogo').fadeIn(300);
                else
                    $('.smallLogo').fadeOut(100);
            }
        );
</script>
<script src="//cdn.tinymce.com/4/tinymce.js"></script>
<script>tinymce.init({ selector:'textarea', theme: "modern",plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor media"
        ]});
</script>


END;


?>

