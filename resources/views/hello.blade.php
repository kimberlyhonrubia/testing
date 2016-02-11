<html>
  <head>
    <title>Angular 2 QuickStart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <!-- 1. Load libraries -->
    <!-- IE required polyfills, in this exact order -->
    <script src="es6-shim/es6-shim.min.js"></script>
    <script src="systemjs/dist/system-polyfills.js"></script>

    <script src="angular2/bundles/angular2-polyfills.js"></script>
    <script src="systemjs/dist/system.src.js"></script>
    <script src="rxjs/bundles/Rx.js"></script>
    <script src="angular2/bundles/angular2.dev.js"></script>

    <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>

    <!-- 2. Configure SystemJS -->
    <script>
      System.config({
        packages: {        
          typescript: {
            format: 'register',
            defaultExtension: 'js'
          }
        }
      });
      System.import('typescript/boot')
            .then(null, console.error.bind(console));
    </script>

  </head>

  <!-- 3. Display the application -->
  <body>
    <div class="container">
      <div class="content">
          <my-app>Loading...</my-app>
      </div>
    </div>
  </body>

</html>
