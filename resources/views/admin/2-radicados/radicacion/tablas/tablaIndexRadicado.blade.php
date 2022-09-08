<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.form-mensaje')
        <div class="card card-info">
            <div class="card-header with-border form-group row">
                <h3 class="card-title-1 col-lg-10">Radicados</h3>
                <div class="card-tools pull-right col-lg-2">
                    <button type="button" class="btn btn-default" name="crear_radicado" id="crear_radicado" data-toggle="modal" data-target="#modal-u"><i class="fa fa-fw fa-plus-circle"></i>Crear Radicado</button>
                    </button>
                </div>
            </div>
            <div class="card-body table-responsive p-2">

                <table id="tradicado" class="table table-hover  text-nowrap">
                    
                    <thead>
                        <tr>
                            <th>Acciones</th>
                            <th>Radicado</th>
                            <th>Observaciones</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>