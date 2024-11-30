<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="/docs/5.3/assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Album example · Bootstrap v5.3</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

  <!-- Agregar FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">

  <style>
    .btn-celeste {
      background-color: #0096c9;
      /* Color celeste */
      border-color: #00b4e6;
      /* Borde ligeramente más oscuro */
      color: #ffffff;
      /* Color del texto */
    }

    .btn-celeste:hover {
      background-color: #00a8e0;
      /* Color más oscuro al pasar el mouse */
      border-color: #0096c9;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }

    footer {
      position: fixed;
      bottom: 0;
      left: 0;
      background-color: #f8f9fa;
      text-align: center;
      height: auto;
      width: 200px !important;
      /* Ancho forzado */
      border-top: 1px solid #dee2e6;
      z-index: 1000;
      padding: 5px;
      display: block !important;
      /* Asegura que respete las dimensiones */
      box-sizing: border-box;
    }

    .card {
      height: 550px;
      /* Define una altura fija para todas las tarjetas */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      /* Asegura que los botones y textos se distribuyan correctamente */
    }

    .card-img-top {
      height: 200px;
      /* Define una altura uniforme para las imágenes */
      object-fit: cover;
      /* Ajusta la imagen para que encaje sin deformarse */
    }

    .card-text {
      display: -webkit-box;
      /* Activa el comportamiento de caja flexible */
      -webkit-line-clamp: 2;
      /* Limita el texto a 2 líneas */
      -webkit-box-orient: vertical;
      /* Define orientación vertical de las cajas */
      overflow: hidden;
      /* Oculta el texto sobrante */
      text-overflow: ellipsis;
      /* Muestra "..." al final del texto largo */
      min-height: 3em;
      /* Reserva espacio para dos líneas */
      line-height: 1.5em;
      /* Define la altura de cada línea */
    }

    .card-body {
      display: flex;
      flex-direction: column;
      /* Asegura que los elementos internos estén en columna */
      justify-content: space-between;
      /* Espacia correctamente el contenido y los botones */
      flex-grow: 1;
      /* Permite que el cuerpo se expanda según sea necesario */
    }


    .card-title {
      text-overflow: ellipsis;
      /* Muestra "..." para textos largos */
      overflow: hidden;
      white-space: nowrap;
      /* Mantiene el texto en una sola línea */
    }

    .text-disponible {
      color: green;

    }

    .text-no-disponible {
      color: red;

    }
  </style>
</head>

<body>

  <header data-bs-theme="dark">
    <!-- Offcanvas para mostrar información a la izquierda -->
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="navbarHeader"
      aria-labelledby="navbarHeaderLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="navbarHeaderLabel">¿ Quienes Somos ?</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 py-4">
              <p class="text-body-secondary">Add some information about the album below, the author, or any other
                background context. Make it a few sentences long so folks can pick up some informative tidbits. Then,
                link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-12 py-4">
              <h4>Contactanos</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Siguenos en Twitter</a></li>
                <li><a href="#" class="text-white">Dale me gusta en Facebook</a></li>
                <li><a href="#" class="text-white">Escribenos por Email</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar con el botón para abrir el offcanvas -->
    <div class="navbar navbar-dark bg-dark shadow-sm fixed-top">
      <div class="container d-flex justify-content-between align-items-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarHeader"
          aria-controls="navbarHeader" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <button class="btn btn-celeste d-flex align-items-center" type="button" data-bs-toggle="modal"
          data-bs-target="#createModal">
          <svg xmlns="" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 1 2 2h4l2-3h6l2 3h4a2 2 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" />
          </svg>
          <strong>Crear Registro</strong>
        </button>
        <div class="col-lg-6 col-md-4 text-end">
          <a href="{{ request()->fullUrlWithQuery(['all' => 'true']) }}" class="btn btn-link"
            style="font-size: 1.15rem; text-decoration: none;">Ver todo</a>
          <a href="{{ url()->current() }}" class="btn btn-link" style="font-size: 1.15rem; text-decoration: none;">Ver
            paginados</a>
        </div>

      </div>
    </div>

    <!-- Espaciado para evitar que el contenido quede oculto detrás de la barra -->
    <div style="margin-top: 70px;"></div>


  </header>

  <!-- Alerts-->
  @if (session('success') || session('error'))
    <div class="d-flex justify-content-center mt-3">
    <div
      class="alert {{ session('success') ? 'alert-success' : 'alert-danger' }} alert-dismissible fade show text-center w-50"
      role="alert">
      {{ session('success') ?? session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    </div>
  @endif

  <!-- Contenido de la pagina-->
  <main>

    <div class="row py-2">
      <div class="col-lg-6 col-md-8 mx-auto text-center">
        <h1 class="fw-light mt-0 mb-4" style="color: #000000;">
          <strong>Menú</strong>
        </h1>
      </div>
    </div>

    @section('content')
    <div class="album py-5 bg-body-tertiary pb-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <tbody>


            @foreach ($platillo as $item)
        <div class="col">
          <div class="card shadow-sm">
          <img src="{{ asset('storage/' . $item->imagen) }}" class="bd-placeholder-img card-img-top"
            alt="Platillo Imagen"
            style="object-fit: contain; width: 300px; height: 300px; display: block; margin-left: auto; margin-right: auto;">

          <div class="card-body">
            <h5 class="card-title">{{ $item->nombre }}</h5>
            <p class="card-text">{{ $item->descripcion }}</p>
            <p class="card-title">Categoria: <strong>{{ $item->categoria }}</strong></p>
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

              <div class="btn-group">
              <!-- Botón para subir imagen -->
              <form action="{{ route('platillo.update', $item->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Botón para seleccionar imagen -->
                <button class="btn btn-warning btn-sm" type="button"
                onclick="document.getElementById('uploadImage{{ $item->id }}').click()">
                <i class="fa fa-upload"></i> Imagen
                </button>

                <!-- Campo de entrada de archivo oculto -->
                <input type="file" id="uploadImage{{ $item->id }}" name="imagen" style="display: none;"
                accept="image/*" onchange="this.form.submit()">
              </form>

              </div>
            </div>
            <small class="text-body-secondary"
              style="font-weight: bold; font-size: 1.10rem;">${{ $item->precio }}</small>
            </div>
          </div>
          </div>
        </div>

        <!-- Modal para editar este platillo -->
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
          aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Editar Platillo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">

            <form id="update-form-{{ $item->id }}" method="POST"
              action="{{ route('platillo.update', $item->id) }}">
              @csrf
              @method('PUT')

              <div class="mb-3">
              <label for="nombre{{ $item->id }}" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre{{ $item->id }}" name="nombre"
                value="{{ $item->nombre }}" required>
              </div>
              <div class="mb-3">
              <label for="descripcion{{ $item->id }}" class="form-label">Descripción:</label>
              <textarea class="form-control" id="descripcion{{ $item->id }}" name="descripcion" rows="3"
                required>{{ $item->descripcion }}</textarea>
              </div>
              <div class="mb-3">
              <label for="categoria{{ $item->id }}" class="form-label">Categoría:</label>
              <select class="form-control" id="categoria{{ $item->id }}" name="categoria" required>
                <option value="" disabled>Selecciona una categoría</option>
                <option value="Entradas" {{ $item->categoria == 'Entradas' ? 'selected' : '' }}>Entradas
                </option>
                <option value="Ensaladas" {{ $item->categoria == 'Ensaladas' ? 'selected' : '' }}>Ensaladas
                </option>
                <option value="Sopa y Pastas" {{ $item->categoria == 'Sopa y Pastas' ? 'selected' : '' }}>Sopa y
                Pastas</option>
                <option value="Carne y Aves" {{ $item->categoria == 'Carne y Aves' ? 'selected' : '' }}>Carne y
                Aves</option>
                <option value="Pescado y Mariscos" {{ $item->categoria == 'Pescado y Mariscos' ? 'selected' : '' }}>Pescado y Mariscos</option>
                <option value="Pizza y Hamburguesas" {{ $item->categoria == 'Pizza y Hamburguesas' ? 'selected' : '' }}>Pizza y Hamburguesas</option>
              </select>

              </div>
              <div class="mb-3">
              <label for="disponible{{ $item->id }}" class="form-label">Disponible:</label>
              <select class="form-control" id="disponible{{ $item->id }}" name="disponible" required>
                <option value="1" {{ $item->disponible ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ !$item->disponible ? 'selected' : '' }}>No</option>
              </select>
              </div>
              <div class="mb-3">
              <label for="ingredientes{{ $item->id }}" class="form-label">Ingredientes:</label>
              <textarea class="form-control" id="ingredientes{{ $item->id }}" name="ingredientes"
                rows="3">{{ $item->ingredientes }}</textarea>
              </div>
              <div class="mb-3">
              <label for="precio{{ $item->id }}" class="form-label">Precio:</label>
              <input type="number" class="form-control" id="precio{{ $item->id }}" name="precio" step="0.01"
                value="{{ $item->precio }}" required>
              </div>
            </form>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" form="update-form-{{ $item->id }}" class="btn btn-primary">Guardar
              Cambios</button>
            </div>
          </div>
          </div>
        </div>

        <!-- Modal para crear un platillo -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="createModalLabel">Crear Platillo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
            <form id="create-form" method="POST" action="{{ route('platillo.store') }}"
              enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>
              <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción:</label>
              <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
              </div>
              <div class="mb-3">
              <label for="categoria" class="form-label">Categoría:</label>
              <select class="form-control" id="categoria" name="categoria" required>
                <option value="" disabled selected>Selecciona una categoría</option>
                <option value="Entradas">Entradas</option>
                <option value="Ensaladas">Ensaladas</option>
                <option value="Sopa y Pastas">Sopa y Pastas</option>
                <option value="Carne y Aves">Carne y Aves</option>
                <option value="Pescado y Mariscos">Pescado y Mariscos</option>
                <option value="Pizza y Hamburguesas">Pizza y Hamburguesas</option>
              </select>
              </div>
              <div class="mb-3">
              <label for="disponible" class="form-label">Disponible:</label>
              <select class="form-control" id="disponible" name="disponible" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
              </select>
              </div>
              <div class="mb-3">
              <label for="ingredientes" class="form-label">Ingredientes:</label>
              <textarea class="form-control" id="ingredientes" name="ingredientes" rows="3"></textarea>
              </div>
              <div class="mb-3">
              <label for="imagen" class="form-label">Imagen:</label>
              <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
              </div>
              <div class="mb-3">
              <label for="precio" class="form-label">Precio:</label>
              <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
              </div>
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" form="create-form" class="btn btn-primary">Crear</button>
            </div>
          </div>
          </div>
        </div>

      @endforeach


          </tbody>

        </div>
      </div>
    </div>

    <!-- Contenedor del paginador-->
    <div class="container-fluid py-3">
      @if ($platillo instanceof \Illuminate\Pagination\LengthAwarePaginator)
      <div class="row">
      <div class="col-12 d-flex justify-content-center">
        {{ $platillo->links() }}
      </div>
      </div>
    @endif
    </div>


  </main>


  <footer class="text-body-secondary py-5">
    <p class="text-start mb-1">
      <a href="#">Regresar al inicio</a>
    </p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.js"></script>

</body>

</html>