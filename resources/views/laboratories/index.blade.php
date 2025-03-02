@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/libs/@simonwep/pickr/themes/classic.min.css')}}" /> <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{asset('assets/libs/@simonwep/pickr/themes/monolith.min.css')}}" /> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{asset('assets/libs/@simonwep/pickr/themes/nano.min.css')}}" /> <!-- 'nano' theme -->
@endsection
@section('content')
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h6 class="mb-sm-0">Administración / Laboratorios</h6>

                                <div class="page-title-right">
                                    <a href="javascript:void(0);" class="btn btn-success btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#ModalLaboratory">
                                        <i class="ri-add-line"></i> Nuevo Laboratorio
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    @include('laboratories.modal-create')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header "> 
                                    <div class="row g-2">
                                        <div class="col-md-3 ">
                                            <div class="search-box">
                                                <input type="text" class="form-control form-control-sm search" placeholder="Buscar...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                <option selected>Laboratorios Habilitados</option>
                                                <option value="1">Laboratorios Deshabilitados</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                <option selected>Prestaciones de Laboratorio</option>
                                                <option value="1">Prestaciones Habilitados</option>
                                                <option value="1">Prestaciones Deshabilitados</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                <option selected>Solicitudes</option>
                                                <option value="1">Pendiente</option>
                                                <option value="1">En Proceso</option>
                                                <option value="1">En Revisión</option>
                                                <option value="1">Finalizado</option>
                                            </select>
                                        </div>
                                    </div>
                                    

                                </div>
                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                       
                                        <div class="table-responsive table-card ">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort">Id</th>
                                                        <th class="sort">Nombre</th>
                                                        <th class="sort">Detalle</th>
                                                        <th class="sort">Por Pagar</th>
                                                        <th class="sort" style="width: 100px;">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                                                    <tr class="align-middle p-0">
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id">
                                                            <a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <span><i class="ri-dropbox-fill"></i> Laboratorios Perfiles</span>
                                                        </td>
                                                        <td class="py-0 px-1 ">
                                                            <span class="flex-wrap">Lorem Ipsum is simply dummy text of the printing</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <span>$ 600</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-danger w-lg btn-sm">Deshabilitar</button>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
@endsection
@section('scripts')
    <script src="{{asset('assets/libs/@simonwep/pickr/pickr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/choices/choices.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
    <!-- init js -->
    <script src="{{asset('assets/js/pages/form-pickers.init.js')}}"></script>
@endsection