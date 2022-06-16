<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Rutas login */
Route::get('/', function () {
    return view('home');
});

//Panel de control Administradores y Empresas
/*Panel de Control */
Route::resource('panel','PanelController');

/* Rutas almacen */
Route::resource('almacen/articulo','ArticuloController');
Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/presentacion','PresentacionController');
Route::resource('ventas/rubro','RubroController');
Route::resource('ventas/rubroarticulo','RubroArticuloController');

/*Rutas Compras */
Route::resource('compras/ingreso','IngresoController');
Route::resource('compras/proveedor','ProveedorController');
Route::resource('compras/vendedor','VendedorController');

/* Rutas ventas */

Route::get('ventas/venta/detalle', 'VentaController@detdestroy');
Route::get('ventas/venta/modals', 'VentaController@destroycerrar');
Route::get('ventas/orden/aventa', 'OrdenController@aventa');
Route::resource('ventas/venta','VentaController');
Route::resource('ventas/inventario','InventarioController');
Route::resource('ventas/orden','OrdenController');

/* Rutas seguridad */
Route::resource('seguridad/usuario','UsuarioController');
Route::resource('seguridad/doctor','DoctorController');
Route::resource('seguridad/configuracion','ConfiguracionController');

/* Rutas Dias */
Route::resource('seguridad/dias','DiasController');


/*Rutas Pacientes */
    /*Pacientes */

Route::resource('pacientes/paciente','PacienteController');
Route::resource('pacientes/cita','CitaController');
Route::get('pacientes/historiales/recetas/quitar', 'RecetaController@quitar');
Route::get('pacientes/historiales/recetas/editar', 'RecetaController@editarmedicamento');
Route::get('pacientes/historiales/recetas/agregar', 'RecetaController@agregar');
Route::get('pacientes/historiales/recetas/eliminar', 'RecetaController@eliminarreceta');
Route::get('pacientes/historiales/fisicos/eliminar', 'FisicoController@eliminarfisico');
Route::get('pacientes/historiales/embarazos/eliminar', 'EmbarazoController@eliminarembarazo');
Route::get('pacientes/historiales/embarazos/controles/eliminar', 'ControlController@eliminarcontrol');
Route::resource('pacientes/historiales/historias','HistoriaController');
Route::resource('pacientes/historiales/recetas','RecetaController');
Route::resource('pacientes/historiales/fisicos','FisicoController');
Route::resource('pacientes/historiales/embarazos','EmbarazoController');
Route::resource('pacientes/historiales/embarazos/controles','ControlController');
Route::resource('pacientes/historiales/radiofrecuencias','RadiofrecuenciaController');
Route::resource('pacientes/historiales/radiofrecuencias/sesiones','RadiofrecuenciaSesionController');
Route::resource('pacientes/historiales/radiofrecuencias/fotomodulaciones','RadiofrecuenciaFotomodulacionController');
Route::resource('pacientes/historiales/sillaselectromagneticas','SillaElectromagneticaController');
Route::resource('pacientes/historiales','HistorialController');



/*Reportes */
Route::resource('reportes/bitacora','BitacoraController');
Route::resource('reportes/ventas','ReporteVentasController');
Route::resource('reportes/ingresos','ReporteIngresosController');

/*Rutas pdf */
    
    /*Usuarios */
    Route::post('pdf/usuarios','ReportesController@reporteusuarios');
    Route::post('pdf/usuarios/vista','ReportesController@vistausuario');

    /*Pacientes */
    Route::post('pdf/pacientes','ReportesController@reportepacientes');
    Route::post('pdf/pacientes/vista','ReportesController@vistapaciente');

    /*Historiales */
    Route::post('pdf/recetas','ReportesController@vistareceta');
    Route::post('pdf/fisicos','ReportesController@vistafisico');
    Route::post('pdf/embarazos','ReportesController@vistaembarazo');
    Route::post('pdf/embarazos','ReportesController@vistaembarazo');

    /*Historiales */
    Route::post('pdf/historias','ReportesController@vistahistoria');

    /*Doctores */
    Route::post('pdf/doctores','ReportesController@reportedoctores');
    Route::post('pdf/doctores/vista','ReportesController@vistadoctor');

    /*Citas */
    Route::post('pdf/citas','ReportesController@reportecitas');
    Route::post('pdf/citas/vista','ReportesController@vistacita');

    /*Articulos */

    Route::post('pdf/articulos','ReportesController@reportearticulos');
    Route::post('pdf/articulos/cliente','ReportesController@reportearticuloscliente');
    Route::post('pdf/articulos/vista','ReportesController@vistaarticulo');

    /*Categorias */
    Route::post('pdf/categorias','ReportesController@reportecategorias');
    Route::post('pdf/categorias/vista','ReportesController@vistacategoria');

    /*Compras */
    Route::post('pdf/compras','ReportesController@reportecompras');
    Route::post('pdf/compras/vista','ReportesController@vistacompra');
    Route::post('reportes/ingresos/vista','ReportesController@vistacomprareporte');

    /*Ventas */
    Route::post('pdf/ventas','ReportesController@reporteventas');
    Route::post('pdf/ventas/vista','ReportesController@vistaventa');
    Route::post('reportes/ventas/vista','ReportesController@vistaventareporte');

    /*Inventario */
    Route::post('pdf/inventario','ReportesController@reporteinventario');

    /*Ordenes */
    Route::post('pdf/ordenes','ReportesController@reporteordenes');
    Route::post('pdf/ordenes/vista','ReportesController@vistaorden');

    /*Proveedores */
    Route::post('pdf/proveedores','ReportesController@reporteproveedores');
    Route::post('pdf/proveedores/vista','ReportesController@vistaproveedor');

    /*Bitacora */
    Route::post('pdf/bitacora','ReportesController@reportebitacora');
    Route::post('pdf/bitacora/vista','ReportesController@vistabitacora');
    Route::post('reportes/bitacora/vista','ReportesController@vistabitacorareporte');

//Vistas 
    /* Inicio */
Route::resource('vistas/vinicio','InicioController');
    /* Rutas Usuario */
Route::resource('vistas/vusuario','VistaUsuarioController');
Route::resource('vistas/configuracion','ConfiguracionController');
    /* Contacto */
Route::resource('vistas/vcontacto','ContactoController');
    /* Rutas Auth */
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
