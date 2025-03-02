<div id="ModalLaboratory" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <form action="javascript:void(0);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Nuevo Laboratorio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div><!--end col-->
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="lastNameinput" class="form-label">Dirección</label>
                                <input type="text" class="form-control">
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div><!--end col-->
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="phone" class="form-label">Telefono</label>
                                <input type="number" class="form-control" id="phone">
                            </div>
                        </div><!--end col-->
                        <div class="col-12">
                            <div class="mb-2">
                                <label for="detalle" class="form-label">Detalle</label>
                                <textarea class="form-control" id="detalle" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-2">
                                <p class="fs-10">Guardar como predeterminado <br> 
                                (Todas las Prestaciones de Laboratorio se guardaran en este Laboratorio)</p>
                            </div>
                        </div>
                    </div><!--end row-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success ">Agregar</button>
                </div>

            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->