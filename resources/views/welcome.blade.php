<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="step">
            <ol>
                <li>Setup Laravel Project</li>
                <li>Go to <a href="https://pushjs.org/">push.org</a></li>
                <li>Install package by npm run</a></li>
                <li>Write this line in your webpack.mix.js file in your project rood directory - mix.copy('node_modules/push.js/bin/push.min.js', 'public/assets/js/push.min.js');</a></li>
                <li>Run in your terminal 'npm run dev' to compile</li>
                <li>Include before end body tag <script src="{{ asset('public/assets/js/push.min.js') }}"></script></li>
                <li>Write <script src="">Push.create('Hello World!')</script></li>
                <li>To see push notification need run your project with https (you can setup virtual host in your xampp server in local machine)</li>
                <li>You move index.php and .htaccess file in root directory from public directory and remove /.. from vendor and bootstrap line (maybe 34 and 47 line in index.php file)</li>
                <li>All Done! you can run and see notification</li>
            </ol>
        </div>
       
        <script src="{{ asset('public/assets/js/push.min.js') }}"></script>
        <script>
            Push.create("Yeah! Got Ha Ha", {
                body: "Boom! Yeah got it",
                icon: '{{ asset("public/assets/img/alamin.jpg") }}',
                timeout: 4000,
                onClick: function () {
                    window.focus();
                    this.close();
                }
            });
        </script>
    </body>
    
</html>
