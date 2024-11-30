<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach ($platillos as $item)
    <div class="col">
        <div class="card shadow-sm">
            <img src="{{ asset('storage/' . $item->imagen) }}" class="bd-placeholder-img card-img-top"
                 alt="Platillo Imagen"
                 style="object-fit: contain; width: 300px; height: 300px; display: block; margin-left: auto; margin-right: auto;">

            <div class="card-body">
                <h5 class="card-title">{{ $item->nombre }}</h5>
                <p class="card-text">{{ $item->descripcion }}</p>
                <p class="card-title">Categoria: {{ $item->categoria }}</p>
                <p class="card-title {{ $item->disponible ? 'text-disponible' : 'text-no-disponible' }}">
                    {{ $item->disponible ? 'Disponible' : 'No Disponible' }}
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{ route('platillo.show', $item->id) }}" class="btn btn-sm btn-success">
                            <i class="fa fa-eye"></i> Ver
                        </a>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#editModal{{ $item->id }}">
                            <i class="fa fa-pencil-alt"></i> Editar
                        </button>
                        <form action="{{ route('platillo.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Seguro que desea eliminar este registro?')">
                                <i class="fa fa-trash-alt"></i> Eliminar
                            </button>
                        </form>
                    </div>
                </div>
                <small class="text-body-secondary" style="font-weight: bold; font-size: 1.10rem;">${{ $item->precio }}</small>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $platillos->links() }} <!-- Esto genera el paginador automáticamente -->
</div>