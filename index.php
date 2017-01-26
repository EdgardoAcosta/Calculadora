<html xmlns="http://www.w3.org/1999/html">

<head>
    <title>Calculadora</title>
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">

    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/roboto.min.css" rel="stylesheet">
    <link href="css/material-fullpalette.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="js/index.js"></script>
</head>

<body>
<div class="calculator container col-md-7">
    <div class="row">
        <h2>Calculadora</h2>
    </div>
    <div class="row">
        <div class="col-xs-5">
            <input id="Num"  value="" autofocus>
        </div>
    </div>
    <div class="row">
        <div class="buttonContainer">
            <div class="row">
                <div class="col-xs-12">
                    <button class=" btn btn-primary" value="7">7</button>
                    <button class=" btn btn-primary" value="8">8</button>
                    <button class=" btn btn-primary" value="9">9</button>
                    <button class=" btn btn-primary" id="suma">+</button>
                    <button class=" btn btn-primary" id="abre">(</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class=" btn btn-primary" value="4">4</button>
                    <button class=" btn btn-primary" value="5">5</button>
                    <button class=" btn btn-primary" value="6">6</button>
                    <button class=" btn btn-primary" id="resta">-</button>
                    <button class=" btn btn-primary" id="cierra">)</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class=" btn btn-primary" value="1">1</button>
                    <button class=" btn btn-primary" value="2">2</button>
                    <button class=" btn btn-primary" value="3">3</button>
                    <button class=" btn btn-primary" id="multi">x</button>
                    <button class=" btn btn-primary" id="division">&#47;</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class=" btn btn-primary" value="0">0</button>
                    <button class=" btn btn-primary" id="punto">.</button>
                    <button class=" btn btn-success" id="igual">=</button>
                    <button class=" btn btn-warning" id="clean" >C</button>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="togglebutton">
            <label>
                <input checked="" name="mode" type="checkbox" id="changeMode"><span class="toggle"></span>
                <h3 id="opcion">HTML</h3>
            </label>
        </div>
    </div>
</div>
<div class="container col-md-1"></div>
<div class="container col-md-4">
    <div class="row historial">
        <div class="col-xs-5">
            <h2>Historial</h2>
            <textarea id="Respuesta" rows="10" cols="30"  style="resize: vertical" disabled value=""></textarea>
            <button class=" btn btn-warning" id="cleanTA" >Limpiar historial</button>
        </div>
    </div>
</div>
</body>
</html>