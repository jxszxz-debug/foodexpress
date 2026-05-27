<!DOCTYPE html>
<html>
<head>
    <title>FoodExpress</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <style>
    body{
        font-family: Arial;
        background-color: #fff5e6;
        text-align: center;
    }
    h2{
        color: red;
    }
    a{
        margin: 10px;
        text-decoration: none;
        color: black;
        font-weight: bold;
    }
    img {
        border-radius: 10px;
    }
    form {
        background: white;
        padding: 15px;
        display: inline-block;
        border-radius: 10px;
    }
    .reportes button {
        margin: 5px;
        padding: 10px 18px;
        cursor: pointer;
        font-size: 15px;
        border-radius: 8px;
        border: 1px solid #ccc;
        background: white;
    }
    .reportes button:hover {
        background: #f0f0f0;
    }
    </style>
</head>

<body>

<p>Realiza tu pedido de manera rápida y segura 🍔🚚</p>

<img src="logo.png" width="150">

<h2>🍔 FoodExpress</h2>

<hr>
<a href="index.php">📦 Registro de pedidos</a>
<a href="ver.php">🚚 Seguimiento</a>
<a href="repartidores.php">🛵 Repartidores</a>
<hr>

<div>
    <img id="carrusel" src="comida1.jpg" width="300">
</div>

<h3>Registrar pedido</h3>

<form method="POST" action="guardar.php">
    <input type="text" name="nombre" placeholder="Nombre" required><br><br>
    <input type="text" name="direccion" placeholder="Dirección" required><br><br>
    <input type="text" name="telefono" placeholder="Teléfono" required><br><br>
    <textarea name="pedido" placeholder="Pedido" required></textarea><br><br>
    <input type="submit" value="Guardar pedido">
</form>

<h3>📍 Ubicación</h3>

<iframe 
src="https://www.google.com/maps?q=Cancun&output=embed"
width="300" height="200">
</iframe>

<h3>📞 Contacto</h3>

<p>Teléfono: 998 123 4567</p>
<p>WhatsApp: 998 765 4321</p>
<p>Email: foodexpress@gmail.com</p>
<p>Dirección: Av. Las Palmas #123, Cancún</p>

<h2>📄 Reportes y contacto</h2>

<div class="reportes">

    <!-- Botón imprimir: imprime toda la plantilla actual -->
    <button onclick="window.print()">
        🖨 Imprimir reporte
    </button>

    <!-- Botón PDF real con jsPDF -->
    <button onclick="descargarPDF()">
        📥 Descargar PDF
    </button>

    <!-- Botón Excel real con SheetJS -->
    <button onclick="descargarExcel()">
        📊 Exportar Excel
    </button>

</div>
<br><br>

<!-- Módulo de correo electrónico (funciona aunque no esté en red) -->
<h3>📧 Enviar correo electrónico</h3>

<form onsubmit="enviarCorreo(event)">

    <input type="email" id="correoDestino" placeholder="Correo electrónico" required>

    <br><br>

    <textarea id="mensajeCorreo" placeholder="Escribe el mensaje" required></textarea>

    <br><br>

    <button type="submit">
        Enviar correo
    </button>

</form>

<p id="mensajeEstado" style="color:green; font-weight:bold;"></p>

<script>
/* ── Carrusel ── */
let imagenes = ["comida1.jpg","comida2.jpg","comida3.jpg"];
let i = 0;
setInterval(() => {
    i = (i + 1) % imagenes.length;
    document.getElementById("carrusel").src = imagenes[i];
}, 2000);

/* ── Descargar PDF real ── */
function descargarPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    doc.setFontSize(20);
    doc.text("FoodExpress - Reporte", 20, 20);

    doc.setFontSize(13);
    doc.text("--- Informacion de contacto ---", 20, 35);
    doc.text("Telefono: 998 123 4567", 20, 47);
    doc.text("WhatsApp: 998 765 4321", 20, 57);
    doc.text("Email: foodexpress@gmail.com", 20, 67);
    doc.text("Direccion: Av. Las Palmas #123, Cancun", 20, 77);

    doc.setFontSize(11);
    doc.text("Generado el: " + new Date().toLocaleString(), 20, 95);

    doc.save("reporte_foodexpress.pdf");
}

/* ── Exportar Excel real ── */
function descargarExcel() {
    const datos = [
        ["Campo", "Valor"],
        ["Telefono", "998 123 4567"],
        ["WhatsApp", "998 765 4321"],
        ["Email", "foodexpress@gmail.com"],
        ["Direccion", "Av. Las Palmas #123, Cancun"],
        ["Fecha de reporte", new Date().toLocaleString()]
    ];

    const hoja = XLSX.utils.aoa_to_sheet(datos);
    const libro = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(libro, hoja, "Reporte FoodExpress");
    XLSX.writeFile(libro, "reporte_foodexpress.xlsx");
}

/* ── Envío de correo electrónico (módulo funcional sin red) ── */
function enviarCorreo(event) {
    event.preventDefault();

    const destino = document.getElementById("correoDestino").value;
    const mensaje = document.getElementById("mensajeCorreo").value;

    if (destino && mensaje) {
        // Abre el cliente de correo del sistema (funciona sin internet)
        const asunto = encodeURIComponent("Mensaje desde FoodExpress");
        const cuerpo = encodeURIComponent(mensaje);
        window.location.href = "mailto:" + destino + "?subject=" + asunto + "&body=" + cuerpo;

        document.getElementById("mensajeEstado").textContent =
            "✅ Correo preparado para: " + destino;

        document.getElementById("correoDestino").value = "";
        document.getElementById("mensajeCorreo").value = "";
    }
}
</script>

</body>
</html>
