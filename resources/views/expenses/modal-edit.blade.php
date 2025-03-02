<div id="ModalExpenseEdit{{ $i }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <form action="javascript:void(0);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Editar Gasto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                
                    <div class="row">
                        <div class="col-6">
                            <label for="firstNameinput" class="form-label">Categoria</label>
                            <div class="input-group mb-2">
                                <select class="form-select " id="inputGroupSelect02">
                                    <option selected>Seleccione</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                <button class="btn btn-ghost-primary waves-effect waves-light material-shadow-none px-2" for="inputGroupSelect02">
                                    <i class="ri-edit-fill fs-12 p-0"></i>
                                </button>
                                <button class="btn btn-ghost-danger waves-effect waves-light material-shadow-none px-2" for="inputGroupSelect02">
                                    <i class="ri-delete-bin-fill fs-12 p-0"></i>
                                </button>
                            </div><!-- ghost Buttons -->

                        </div><!--end col-->
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="firstNameinput" class="form-label">Fecha Factura</label>
                                <input type="text" class="form-control" data-provider="flatpickr" 
                                data-date-format="d-m-Y" data-locale="es" placeholder="Fecha de factura">
                            </div>
                        </div><!--end col-->
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="lastNameinput" class="form-label">Monto</label>
                                <input type="number" class="form-control" placeholder="0.00">
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="lastNameinput" class="form-label">Fecha de Pago</label>
                                <input type="text" class="form-control" data-provider="flatpickr" 
                                data-date-format="d-m-Y" data-locale="es" placeholder="Fecha de Pago">
                            </div>
                        </div><!--end col-->
                        <div class="col-6">
                            <div class="mb-2">
                                <!-- Inline Checkbox -->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">$</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">u$s</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-2">
                                <label for="detalle" class="form-label">Detalle</label>
                                <textarea class="form-control" id="detalle" rows="2"></textarea>
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