<?php

    require('_funcs.php');

?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>PAGE_TITLE_HERE</title>
    <meta name="description" content="PAGE_DESCRIPTION_HERE">

    <meta property="og:title" content="PAGE_TITLE_HERE">
    <meta property="og:image" content="IMG_HERE">
    <meta property="og:description" content="DESCRIPTION_HERE">

    <link defer rel="stylesheet" href="/css/main.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body>

    <div class="container">

        <header mobile="1-1">
            <a href="/">Logo</a>
            <nav>
                <ul>
                    <li><a href="/about">about</a></li>
                </ul>
            </nav>
        </header>


        <section>

        </section>


        <footer class="text-center" mobile="1-1">
            &copy; <?php echo date('Y'); ?>
        </footer>

    </div>

<?php
    load_scripts([
      'https://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.6/zepto.min.js'
    , 'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.5.0/lodash.min.js'
    ], 'defer');
?>

</body>
</html>
