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
  <h1>PRODUCTOS</h1>
  <a href="/datatable/productos/datatable" class="btn btn-link">LISTADO DE PRODUCTOS</a>
  <a href="/datatable/productos/estadistica" class="btn btn-link">GRAFICA VENTA PRODUCTOS</a>
  <a href="/datatable/clientes/index" class="btn btn-link">LISTADO DE CLIENTES</a>
  <a href="/datatable/clientes/estadistica2" class="btn btn-link">GRAFICA VENTA CLIENTES</a>
  <a href="/datatable/logout" class="btn btn-danger">CERRAR SESIÓN</a>
</div>

</body>
</html>

<h1>Datatable de productos</h1>
<div class="row justify-content-center">
    <div class="col table-responsive">
        <table id="tablaProductos" class="table table-bordered table-hover">
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/productos/index.js') ?>"></script>