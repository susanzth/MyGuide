
<!DOCTYPE html>
<html lang="en" ng-app="angular">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre Angular JS."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="Angular, angularjs, js, web developer, frontend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/fontRoboto.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of Angular JS | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr class="angular">
        <nav class="padd2 nav-angular">
            <a href="../myGuide.php#!directory-angularJS">Volver al directorio</a>
        </nav>
        <hr class="angular">
        <section class="section-angular padd5">
            <h4 class="text-center">Definiciones</h4>
                <div class="padd2 exam-angular">
                    <h6>Expresiones</h6>
                    <p class="padd2">
                        Expresión de sólo texto: {{'Hola'}}<br/>
                        Expresión de sólo texto con filtro lowercase: {{'Hola' | lowercase}}<br/>
                        Expresión de sólo texto con filtro uppercase: {{'Hola' | uppercase}}<br/>
                        Expresión de sólo número: {{10}}<br/>
                        Expresión de una suma: {{ 10 + 10 }}<br/>
                        Expresión de una moneda: {{50 | currency}}<br/> <!-- currency es un filtro que indica que el valor sea tratado como una moneda.-->
                        Expresión de una moneda definida: {{50 | currency:"Bs"}}<br/>
                    </p>
                </div>
        </section>
        <hr class="angular">
        <div ng-include src="'../partials/footer.php'"></div>
        
        <script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" rel="script">
            window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
        </script>
    </body>
</html>
