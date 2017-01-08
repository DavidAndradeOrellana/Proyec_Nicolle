<ol class="breadcrumb">
  
  <li class="active">Comprobante #<?php echo str_pad($comprobante->id, 5, '0', STR_PAD_LEFT); ?></li>
</ol>

<div class="row">
        <div class="col-xs-12">

            <fieldset>
                <legend> Nombre</legend>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label>Cliente</label>
                            <input type="text" class="form-control" disabled value="<?php echo $comprobante->Cliente->Nombre; ?>" />
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" class="form-control" disabled value="<?php echo $comprobante->Cliente->RUC; ?>"  />                    
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" class="form-control" disabled value="<?php echo $comprobante->Cliente->Direccion; ?>" />                    
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <label>Telefono</label>
                         <input type="text" class="form-control" disabled value="<?php echo $comprobante->Cliente->Telefono; ?>" />  
                        </div>
                    </div>
                </div>
            </fieldset>
<legend>Producto</legend>
   ----------------------------    ----------------------------    ---------------------------      ------------------------------     ----------          CANTIDAD  ------------------  VALOR   ------------------------ TOTAL                                                                                           
            <ul id="facturador-detalle" class="list-group">
                <?php foreach($comprobante->Detalle as $d): ?>
                <li class="list-group-item">
                    <div class="row">

                        <div class="col-xs-7">
                            <?php echo $d->Producto->Nombre; ?>
                        </div>
                         
                        <div class="col-xs-1 text-right">
                            <?php echo $d->Cantidad; ?>
                        </div>
                        <div class="col-xs-2 text-right">
                            <?php echo number_format($d->PrecioUnitario, 2); ?>
                        </div>
                        <div class="col-xs-2 text-right">
                            <?php echo number_format($d->Total, 2); ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
                
               <li class="list-group-item">
                    <div class="row text-right">
                        <div class="col-xs-10 text-right">
                            Sub Total
                        </div>
                        <div class="col-xs-2">
                            <b><?php echo number_format($comprobante->SubTotal, 2); ?></b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row text-right">
                        <div class="col-xs-10 text-right">
                            IVA (13%)
                        </div>
                        <div class="col-xs-2">
                            <b><?php echo number_format($comprobante->IGV, 2); ?></b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row text-right">
                        <div class="col-xs-10 text-right">
                            Total <b>(S/.)</b>
                        </div>
                        <div class="col-xs-2">
                            <b><?php echo number_format($comprobante->Total, 2); ?></b>
                        </div>
                    </div>
                </li>
            </ul>
<div class="container" ><center><P>Tel 2614-7872 y 7715-6573</P></center>
<center><p>Correo studionicolledigital@hotmail.com</p></cenenter>
<center><p>Gracias por preferirnos, estamos innovando para servirte mejor.</p></center>



</div>
        </div>
</div>


<br>
<label>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>
<br>

 <h2 align="center">FACTURA</h2>
 <img class="venta1"  src="../../img/logo.jpg"  align="right">
<ol class="breadcrumb">
 
  <li class="active">Comprobante #<?php echo str_pad($comprobante->id, 5, '0', STR_PAD_LEFT); ?></li>

  
</ol>

<div class="row">
        <div class="col-xs-12">

            <fieldset>
                <legend> Nombre</legend>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label>Cliente</label>
                            <input type="text" class="form-control" disabled value="<?php echo $comprobante->Cliente->Nombre; ?>" />
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" class="form-control" disabled value="<?php echo $comprobante->Cliente->RUC; ?>"  />                    
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" class="form-control" disabled value="<?php echo $comprobante->Cliente->Direccion; ?>" />                    
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <label>Telefono</label>
                         <input type="text" class="form-control" disabled value="<?php echo $comprobante->Cliente->Telefono; ?>" />  
                        </div>
                    </div>
                </div>
            </fieldset>
<legend>Producto</legend>
  ----------------------------    ----------------------------    ---------------------------      ------------------------------     ----------          CANTIDAD  ------------------  VALOR   ------------------------ TOTAL 
            <ul id="facturador-detalle" class="list-group">
                <?php foreach($comprobante->Detalle as $d): ?>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-7">
                            <?php echo $d->Producto->Nombre; ?>
                        </div>
                         
                        <div class="col-xs-1 text-right">
                            <?php echo $d->Cantidad; ?>
                        </div>
                        <div class="col-xs-2 text-right">
                            <?php echo number_format($d->PrecioUnitario, 2); ?>
                        </div>
                        <div class="col-xs-2 text-right">
                            <?php echo number_format($d->Total, 2); ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
                
               <li class="list-group-item">
                    <div class="row text-right">
                        <div class="col-xs-10 text-right">
                            Sub Total
                        </div>
                        <div class="col-xs-2">
                            <b><?php echo number_format($comprobante->SubTotal, 2); ?></b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row text-right">
                        <div class="col-xs-10 text-right">
                            IVA (13%)
                        </div>
                        <div class="col-xs-2">
                            <b><?php echo number_format($comprobante->IGV, 2); ?></b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row text-right">
                        <div class="col-xs-10 text-right">
                            Total <b>(S/.)</b>
                        </div>
                        <div class="col-xs-2">
                            <b><?php echo number_format($comprobante->Total, 2); ?></b>
                        </div>
                    </div>
                </li>
            </ul>

<div class="container" ><center><P>Tel 2614-7872 y 7715-6573</P></center>
<center><p>Correo studionicolledigital@hotmail.com</p></cenenter>
<center><p>Gracias por preferirnos, estamos innovando para servirte mejor.</p></center>



</div>
        </div>
</div>

<script languaje="javascript">window.print()</script>