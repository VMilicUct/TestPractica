@extends('adminlte::page')

@section('title', 'Plan de Pruebas')

@section('content_header')

    <div class="header-section">
        <h1>Planes de prueba</h1>
    </div>
    
@stop

@section('content')

<div class="main-content">
    <!-- Botón para abrir el modal -->
    <div class="text-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createTestPlanModal">
            Crear Plan de Prueba
        </button>
    </div>

     <!-- Filtros y búsqueda (Sección 1) -->
     <div class="section">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar por ID Caso de Prueba o Título" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            <button class="btn btn-outline-secondary ml-2" type="button">Filtro</button>
        </form>
    </div>

    <!-- Tabla de resultados (Sección 2) -->
    <div class="section">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Prioridad</th>
                    <th>Propietario</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CP-1</td>
                    <td>Perfil de graduación</td>
                    <td>Alta</td>
                    <td>Vicente Milic</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="createTestPlanModal" tabindex="-1" role="dialog" aria-labelledby="createTestPlanLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createTestPlanLabel">Crear Plan de Prueba</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Parte izquierda del formulario -->
                        <div class="col-md-8">
                            <form id="testPlanForm">
                                <div class="form-group">
                                    <label for="planTitle">Título</label>
                                    <input type="text" class="form-control" id="planTitle" placeholder="Ingresa el nombre del plan">
                                </div>

                                <div class="form-group">
                                    <label for="module">Módulo</label>
                                    <input type="text" class="form-control" id="module" value="Módulo CELUCT POSGRADO" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="description">Descripción</label>
                                    <textarea class="form-control" id="description" rows="3" placeholder="Ingresa cualquier prerequisito para hacer la prueba"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="prerequisites">Pre requisitos</label>
                                    <textarea class="form-control" id="prerequisites" rows="2" placeholder="Ingresa cualquier prerequisito para hacer la prueba"></textarea>
                                </div>

                                <!-- Sección de pasos y resultados -->
                                <div id="stepsContainer">
                                    <div class="form-group step">
                                        <label>Paso 1:</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <textarea class="form-control" placeholder="Pasos de la prueba" rows="3"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea class="form-control" placeholder="Resultado esperado" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="addStepButton" class="btn btn-outline-primary mt-2">+ Añadir paso</button>

                                <!-- Sección de adjuntos -->
                                <div class="form-group">
                                    <label>Adjuntos</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="fileInput">
                                            <label class="custom-file-label" for="fileInput">Cargar Archivo</label>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Tamaño máx. archivo: 50 MB | Cant. máx. 10 por carga</small>
                                </div>
                            </form>
                        </div>

                        <!-- Parte derecha del formulario -->
                        <div class="col-md-4 right-panel">
                            <div class="form-group">
                                <label for="status">Estado</label>
                                <select id="status" class="form-control">
                                    <option>Activo</option>
                                    <option>Inactivo</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="owner">Propietario</label>
                                <select id="owner" class="form-control">
                                    <option>Vicente Milic</option>
                                    <option>Otro Propietario</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="priority">Prioridad</label>
                                <select id="priority" class="form-control">
                                    <option>Alta</option>
                                    <option>Media</option>
                                    <option>Baja</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="testCriteria">Criterio de prueba</label>
                                <select id="testCriteria" class="form-control">
                                    <option>Funcional</option>
                                    <option>No funcional</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Plan de Prueba</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/ppcal.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/ppcal.js') }}"></script>
@stop