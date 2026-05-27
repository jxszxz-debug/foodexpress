<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Repartidores - FoodExpress</title>

<style>

body{
    font-family: Arial;
    background:#f5f5f5;
    margin:0;
    padding:0;
    text-align:center;
}

h1{
    background:#d62828;
    color:white;
    padding:20px;
    margin:0;
}

.contenedor{
    width:80%;
    margin:auto;
    margin-top:30px;
}

.tarjeta{
    background:white;
    margin:15px;
    padding:20px;
    border-radius:15px;
    box-shadow:0px 4px 10px rgba(0,0,0,0.2);
    font-size:20px;
}

.disponible{
    color:green;
    font-weight:bold;
}

.entrega{
    color:orange;
    font-weight:bold;
}

</style>
</head>

<body>

<button onclick="window.print()">
🖨 Imprimir pantalla
</button>

<h1> Repartidores FoodExpress</h1>

<div class="contenedor">

<div class="tarjeta">
 Juan — <span class="disponible">Disponible</span>
</div>

<div class="tarjeta">
 Pedro — <span class="entrega">En entrega</span>
</div>

<div class="tarjeta">
 Romeo — <span class="entrega">En entrega</span>
</div>

<div class="tarjeta">
Luisa — <span class="disponible">Disponible</span>
</div>

<div class="tarjeta">
 Santiago — <span class="entrega">En entrega</span>
</div>

</div>

</body>
</html>