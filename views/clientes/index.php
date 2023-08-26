<!DOCTYPE html>
<html>
<head>
<style>
.container {
  text-align: center;
  margin-top: 50px;
  background-color: #87CEEB; 
  padding: 20px;
  border-radius: 10px;
}

h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

.btn {
  display: inline-block;
  margin: 10px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
}

.btn-link {
  background-color: #f0f0f0;
  color: #333;
}

.btn-link:hover {
  background-color: #ccc;
}

.btn-danger {
  background-color: #d9534f;
  color: #fff;
}

.btn-danger:hover {
  background-color: #c9302c;
}
</style>
</head>
<body>

<div class="container">
  <h1>FORMULARIO DE CLIENTES</h1>
  <a href="/datatable/productos/datatable" class="btn btn-link">LISTADO DE PRODUCTOS</a>
  <a href="/datatable/productos/estadistica" class="btn btn-link">GRAFICA VENTA PRODUCTOS</a>
  <a href="/datatable/clientes/index" class="btn btn-link">LISTADO DE CLIENTES</a>
  <a href="/datatable/clientes/estadistica2" class="btn btn-link">GRAFICA VENTA CLIENTES</a>
  <a href="/datatable/logout" class="btn btn-danger">CERRAR SESIÓN</a>
</div>

</body>
</html>


<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioClientes">
        <input type="hidden" name="cliente_id" id="cliente_id">
        <div class="row mb-3">
            <div class="col">
                <label for="cliente_nombre">INGRESE EL NOMBRE DEL CLIENTE</label>
                <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cliente_nit">INGRESE EL NIT DEL CLIENTE</label>
                <input type="text" name="cliente_nit" id="cliente_nit" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioClientes" id="btnGuardar" data-saludo="hola" data-saludo2="hola2"
                    class="btn btn-primary w-100">GUARDAR</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">MODIFICAR</button>
            </div>
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">BUSCAR</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">CANCELAR</button>
            </div>
        </div>
    </form>
</div>
<div class="row justify-content-center">
    <div class="col table-responsive">

        <table id="tablaClientes" class="table table-bordered table-hover">
        </table>
    </div>
</div>

<script src="<?= asset('./build/js/clientes/index.js') ?>"></script>