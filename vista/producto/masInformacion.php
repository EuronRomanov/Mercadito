 
<!--
    Fomrulario de información extra

 -->
 <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Información General</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Compra</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Venta</a>
                                <a class="nav-item nav-link" id="nav-promocion-tab" data-toggle="tab" href="#nav-promocion" role="tab" aria-controls="nav-contact" aria-selected="false">Promociones</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    
                                    <tbody>
                                      <tr>
                                        <td rowspan="3"><img id="my_image"   width="150" height="200"/></td>
                                        <th colspan="2" id="nombrep" scope="row" style="text-align:center;"></th>
                                        
                                     </tr>
                                      <tr>
                                          <th   scope="row">Descripción</th>
                                          <td id="descripcionI" ></td>
                                      </tr>
                                      <tr>
                                      <th   scope="row">Categoria</th>
                                          <td id="categoriaI" style="text-align:left;"></td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    
                                    <tbody>
                                        <tr>
                                            <th scope="row">Costo</th>
                                            <td id="costoI"></td>
                                        </tr>
                                       <tr>
                                            <th scope="row">Cantidad</th>
                                            <td id="unidadCompraI"></td>
                                       </tr>
                                       <tr>
                                            <th scope="row">Descuento</th>
                                            <td id="descuentoCompraI"></td>
                                       </tr>
                                       <tr>
                                            <th scope="row">Proveedor</th>
                                            <td id="proveedorI"></td>
                                       </tr>
                                       <tr>
                                            <th scope="row" >Contacto</th>
                                            <td id="telefonoI"></td>
                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
                                    
                                    <tbody>
                                        <tr>
                                            <th scope="row">Precio</th>
                                            <td id="precioI"></td>
                                        </tr>
                                       <tr>
                                            <th scope="row">Cantidad</th>
                                            <td id="unidadVentaI"></td>
                                       </tr>
                                       <tr>
                                            <th scope="row">Tiene IVA?</th>
                                            <td id="ivaI"></td>
                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-promocion" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
                                <tbody>
                                        <tr>
                                            <th scope="row">Nombre</th>
                                            <td id="nombreDescuentoI"></td>
                                        </tr>
                                       <tr>
                                            <th scope="row">Descripción</th>
                                            <td id="detalleI"></td>
                                       </tr>
                                       <tr>
                                            <th scope="row">Descuento</th>
                                            <td id="descuentoI"></td>
                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>