<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pedidos</title>
  <style>
    body {
      font-family: sans-serif;
      padding: 40px;
      background: #f9f9f9;
    }

    h1 {
      margin-bottom: 20px;
      font-size: 22px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
    }

    th, td {
      text-align: left;
      padding: 10px 14px;
      border-bottom: 1px solid #eee;
    }

    th {
      background: #f1f1f1;
      font-size: 13px;
      color: #555;
    }

    tr:hover {
      background: #fafafa;
    }

    .pendiente {
      background: #fff8e1;
      color: #b36b00;
      padding: 3px 8px;
      border-radius: 4px;
      font-size: 12px;
    }
  </style>
</head>
<body>
<body>

<button onclick="window.print()">
🖨 Imprimir pantalla
</button>

<h1>Lista de pedidos</h1>


  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Pedido</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td><td>Mily</td><td>Pino</td><td>12345678</td><td>Burguer</td><td><span class="pendiente">Pendiente</span></td>
      </tr>
      <tr>
        <td>2</td><td>Mily</td><td>Pino</td><td>12345678</td><td>Burguer</td><td><span class="pendiente">Pendiente</span></td>
      </tr>
      <tr>
        <td>3</td><td>Edith</td><td>Las Lomas</td><td>9876453</td><td>Burguer 1</td><td><span class="pendiente">Pendiente</span></td>
      </tr>
      <tr>
        <td>4</td><td>Elías</td><td>La Sierra</td><td>976664666</td><td>3 Burguers</td><td><span class="pendiente">Pendiente</span></td>
      </tr>
      <tr>
        <td>5</td><td>Jared</td><td>Castillo Tielmans</td><td>978326646</td><td>5 Burguers</td><td><span class="pendiente">Pendiente</span></td>
      </tr>
      <tr>
        <td>6</td><td>Edith</td><td>Las Lomas</td><td>9422324</td><td>Burguer</td><td><span class="pendiente">Pendiente</span></td>
      </tr>
    </tbody>
  </table>

</body>
</html>