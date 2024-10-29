<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Law System - Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* Manteniendo el estilo del original */
            *, ::after, ::before {
                box-sizing: border-box;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
            }
            body {
                margin: 0;
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://imgmedia.larepublica.pe/640x371/larepublica/original/2022/04/21/6261eca2ea80e22fb844650d.webp') no-repeat center center fixed;
                background-size: cover;
                color: #f9f9f9;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
            }
            .content-wrapper {
                background: rgba(255, 255, 255, 0.9);
                padding: 3rem;
                border-radius: 15px;
                max-width: 1000px;
                margin: auto;
                margin-top: 80px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            }
            .header {
                text-align: center;
                margin-bottom: 3rem;
            }
            .header h1 {
                font-size: 3rem;
                color: #B8860B; /* Cambiado a un tono dorado para combinar con la imagen */
                margin-bottom: 0.5rem;
            }
            .header p {
                font-size: 1.25rem;
                color: #4B3621; /* Tono marrón oscuro para complementar */
            }
            .features {
                display: grid;
                gap: 2.5rem;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                margin-bottom: 3.5rem;
            }
            .feature {
                background: #fff;
                padding: 2rem;
                border-radius: 15px;
                box-shadow: 0 14px 34px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .feature:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            }
            .feature h2 {
                color: #B8860B; /* Mismo tono dorado para mantener consistencia */
                margin-bottom: 1rem;
            }
            .feature p {
                color: #4B3621; /* Tono marrón oscuro para texto */
                line-height: 1.6;
            }
            .cta {
                text-align: center;
                margin-top: 3rem;
            }
            .cta a {
                background-color: #B8860B; /* Botón dorado para destacar */
                color: #fff;
                padding: 1rem 2.5rem;
                border-radius: 50px;
                text-decoration: none;
                font-size: 1.25rem;
                box-shadow: 0 10px 20px rgba(184, 134, 11, 0.4);
                transition: background-color 0.3s, box-shadow 0.3s;
            }
            .cta a:hover {
                background-color: #8B6508; /* Oscurecer el dorado en hover */
                box-shadow: 0 15px 30px rgba(139, 101, 8, 0.6);
            }
        </style>
    </head>
    <body>
        <div class="content-wrapper">
            <!-- Header -->
            <header class="header">
                <h1>Bienvenido a Law System</h1>
                <p>Tu sistema integral para la gestión eficiente de procesos legales.</p>
            </header>

            <!-- Features Section -->
            <section class="features">
                <div class="feature">
                    <h2>Gestión de Expedientes</h2>
                    <p>Administra todos tus expedientes legales en un solo lugar. Nuestro sistema te permite almacenar, organizar y acceder a la información de tus casos de manera rápida y segura.</p>
                </div>
                <div class="feature">
                    <h2>Agenda de Tareas</h2>
                    <p>Mantén un registro actualizado de todas las tareas pendientes. La agenda te ayuda a cumplir con plazos y mantener el flujo de trabajo en cada caso.</p>
                </div>
                <div class="feature">
                    <h2>Documentos y Archivos</h2>
                    <p>Sube y organiza todos los documentos relevantes para cada caso. Genera un acceso seguro y rápido a todos los archivos legales que necesites.</p>
                </div>
                <div class="feature">
                    <h2>Comunicación con Clientes</h2>
                    <p>Facilita la comunicación con tus clientes con nuestra herramienta de mensajería integrada. Mantén a tus clientes informados y mejora la transparencia del proceso legal.</p>
                </div>
            </section>

            <!-- Call to Action -->
            <div class="cta">
                <a href="/login">Empieza ahora</a>
            </div>
        </div>
    </body>
</html>
