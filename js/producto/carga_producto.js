function agregaFrmInformacion(idal){
       
 
    $.ajax({
      type:"POST",
      data:'idProduct='+idal,
      url:"../../controlador/producto/mostrar.php",
      success:function(r){
       datos=jQuery.parseJSON(r);
       //datos producto;
        $('#nombrep').text(datos['nombrep']);
        $('#descripcionI').text(datos['descripcion']);
        $('#categoriaI').text(datos['categoria']);
        $('#costoI').text(datos['costo']);
        $('#unidadCompraI').text(datos['unidadCompra']);
        $('#descuentoCompraI').text(datos['descuentoCompra'] +' %');
        $('#proveedorI').text(datos['proveedor']);
        $('#telefonoI').text(datos['telefono']);
         $('#precioI').text(datos['precio']);
        $('#unidadVentaI').text(datos['unidadVenta']);
        $('#ivaI').text(datos['iva']);
        $('#nombreDescuentoI').text(datos['nombreDescuento']);
        $('#detalleI').text(datos['detalle']);
       $('#descuentoI').text(datos['descuento']);
       
              

       var df="imagenesProductos/"+datos['imagen'];

        $("#my_image").attr('src',df);
      }

      
    });
  }


  //cargar fromulario actualizar
  function agregaFrmActualizar(idal){
       
 
    $.ajax({
      type:"POST",
      data:'idProduct='+idal,
      url:"../../controlador/producto/mostrarProducto.php",
      success:function(r){
       datos=jQuery.parseJSON(r);
       //datos=r;
        $('#nombreM').val(datos['nombre']);
        $('#descripcionM').val(datos['descripcion']);
        $('#cantidadM').val(datos['bodega']);
        $('#categoriasM').val(datos['categoria']).trigger('chosen:updated');
        $('#costoM').val(datos['costo']);
        $('#cantidadCompraM').val(datos['cantidadCompra']);
        $('#unidadesCompraM').val(datos['unidadCompra']).trigger('chosen:updated');
        $('#proveedoresM').val(datos['proveedor']).trigger('chosen:updated');
        $('#descuentoM').val(datos['descuentoCompra']);
        $('#precioM').val(datos['precio']);
        $('#cantidadVentaM').val(datos['cantidadVenta']);
        $('#unidadesVentaM').val(datos['unidadVenta']).trigger('chosen:updated');
        $('#ivaM').val(datos['iva']);
        $('#promocionesM').val(datos['codPromo']).trigger('chosen:updated');
        $('#idProducto').val(datos['codProducto']);
       var d="imagenesProductos/"+datos['imagen'];

        $("#imagenUpdate").attr('src',d);
      }

      
    });
  }