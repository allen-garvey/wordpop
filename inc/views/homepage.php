<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Wordpop</title>
        <meta name="description" content="Displays words in order of popularity from Craigslist search"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="<?= STYLES_URL.'master.css'; ?>"/>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>
        <header class='jumbotron'>
            <div class='container'>
                <h1>Wordpop</h1>
            </div>
        </header>
        
        <main class='container'>
            <ol id='main_list'></ol>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript">var WDP = {};WDP.baseUrl = <?= BASE_URL; ?></script>
        <script type="text/javascript" src="<?= SCRIPTS_URL.'app.min.js'; ?>"></script>
    </body>
</html>