<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Craigslist Visualizer</title>
        <meta name="description" content="This site scrapes Craigslist and displays the results visually"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= STYLES_URL.'master.css'; ?>"/>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>
        <header class='jumbotron'>
            <div class='container'>
                <h1>Craigslist Visualizer</h1>
            </div>
        </header>
        
        <main class='container'>
            <ol id='main_list'></ol>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript">var CLV = {};CLV.baseUrl = <?= BASE_URL; ?></script>
        <script type="text/javascript" src="<?= SCRIPTS_URL.'app.min.js'; ?>"></script>
    </body>
</html>