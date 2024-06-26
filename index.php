<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Volume of a square based pyramid" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Pablo Fiallos" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.yellow-lime.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Volume of a square based pyramid</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Volume of a square based pyramid</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/pyramid.png" alt="square based pyramid" width="250" />
        </div>
        <div class="page-content">Please enter the following:</div>
        <div class="page-content-php">
          <form action="answer.php" method="POST">
            <p><br/>l</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="l_value">
              <label class="mdl-textfield__label" for="l_value_input">enter...</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <p>w</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="w_value">
              <label class="mdl-textfield__label" for="w_value_input">enter...</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <p>h</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="h_value">
              <label class="mdl-textfield__label" for="h_value_input">enter...</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <!-- Accent-colored raised button with ripple -->
            <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          </form>
        </div>
      </main>
    </div>
  </body>
</html>