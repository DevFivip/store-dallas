@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Categorias de Productos') }}</div>

                <div class="card-body">
                    <form action="{{ route('categoria.update', $categoria['id']) }}" method="POST" enctype="multipart/form-data">

                        @method('PUT')
                        @csrf
                        <input type="file" name="imagen" class="file" accept="image/*">
                        <div class="text-center" style="height: 150px; width:150px; display: block; margin-left: auto; margin-right: auto;">
                            <img src="{{ url('storage/') }}/{{ $categoria['imagen'] }}" id="preview" class="img-thumbnail" style="height: 150px;">
                        </div>

                        <div class="form-group">
                            <label for="nombre">Descripción</label>
                            <input type="text" name="nombre" class="form-control" value="{{ $categoria['nombre'] }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary mb-2">Guardar</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>




<script>
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
    </script>
@endsection