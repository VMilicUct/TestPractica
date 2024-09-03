<!DOCTYPE html>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario CKEditor</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar nuevo cuadro de formulario</h2>
        <form id="mainForm">
            <div class="form-group">
                <label for="folio">Folio:</label>
                <select class="form-control" id="folio">
                    <option>Seleccione un folio</option>
                </select>
            </div>
            <div class="form-group">
                <label for="identificacion">Identificación:</label>
                <select class="form-control" id="identificacion">
                    <option>Seleccione identificación</option>
                </select>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-control" id="estado">
                    <option>Seleccione estado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="modulo">Módulo:</label>
                <select class="form-control" id="modulo">
                    <option>Seleccione módulo</option>
                </select>
            </div>
            <div id="commentsContainer">
                <div class="comment-box">
                    <label for="comentarios">Comentarios:</label>
                    <textarea class="form-control" rows="2" placeholder="Escriba sus comentarios aquí..."></textarea>
                </div>
            </div>
            <button type="button" class="btn btn-secondary mt-3" id="addComment">Agregar otra caja de comentarios</button>
            <button type="submit" class="btn btn-primary mt-3">Agregar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#addComment').click(function() {
                $('#commentsContainer').append(`
                    <div class="comment-box">
                        <label for="comentarios">Comentarios:</label>
                        <textarea class="form-control" rows="2" placeholder="Escriba sus comentarios aquí..."></textarea>
                    </div>
                `);
            });
        });
    </script>
</body>
</html>