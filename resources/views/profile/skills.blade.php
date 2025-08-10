<x-app-layout>
    @livewire('navigation-menu')
    <main class="main-content percentage-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Header bar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <!-- Ubicacion -->
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                            {{Route::currentRouteName()}} </li>
                    </ol>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                        @csrf
                    </form>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign
                                    Out</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Header bar -->
        <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-3">Skills Administration</h6>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                @if (session('status'))
                <div class="row">
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                        <span class="text-sm">{{ Session::get('status') }}</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif
                <button type="button" class="btn bg-gradient-dark" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Add skill
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add skill</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method='POST' action='{{route('skills.create')}}'
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control border p-2"
                                            id="name" required>
                                        @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="percentage" class="form-label">Percentage</label>
                                        <input type="text" name="percentage" class="form-control border p-2" id="percentage"
                                            required>
                                        @error('percentage')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="icon" class="form-label">icon</label>
                                        <input type="text" name="icon" class="form-control border p-2" id="icon">
                                        @error('icon')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" class="form-control border p-2" id="category">
                                            <option value="" selected>Selecciona una Categira</option>
                                            <option value="lenguaje">Lenguaje</option>
                                            <option value="sistema Operativo">Sistema Operativo</option>
                                            <option value="base de datos">Base de Datos</option>
                                            <option value="framework">Framework</option>
                                            <option value="herramienta">Herramienta</option>
                                            <option value="design">Diseño</option>
                                            <option value="ofimatica">Ofimatica</option>
                                            <option value="ciberseguridad">Ciberseguridad</option>
                                            <option value="blandas">Habilidades Blandas</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn bg-gradient-dark">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Percentage</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Category</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                        <tr>
                            <td>{{ $skill->id }}</td>
                            <td><label class="form-control p-2" id="floatinglabel2" name="name" rows="3"
                                    cols="50">{{ $skill->name }}</label></td>
                            <td>
                                <label class="form-control p-2" id="floatinglabel2" name="percentage" rows="3"
                                    cols="50">{{ $skill->percentage }}</label>
                            </td>
                            <td>
                                <icon class="p-2"><img src="{{ $skill->icon }}" /> </icon>
                                {{-- Uncomment if you want to use a label for icon --}}
                                {{-- <label class="form-control p-2" id="floatinglabel2" name="icon" rows="3"
                                    cols="50">{{ $skill->icon }}</label> --}}
                            </td>
                            <td>
                                <label class="form-control p-2" id="floatinglabel2" name="type" rows="3"
                                    cols="50">{{ $skill->category }}</label>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{$skill->id}}">
                                    Edit
                                </button>
                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{$skill->id}}" tabindex="-1"
                                    aria-labelledby="editModalLabel{{$skill->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{$skill->id}}">Edit
                                                    skill
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method='POST' action='{{ route('skills.edit', $skill->id)
                                                    }}'
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Skill</label>
                                                        <input type="text" name="name"
                                                            class="form-control border p-2" id="name"
                                                            value="{{ $skill->name }}" required>
                                                        @error('name')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="percentage" class="form-label">Porcentaje</label>
                                                        <input type="text" name="percentage" class="form-control border p-2"
                                                            id="percentage" value="{{ $skill->percentage }}" required>
                                                        @error('percentage')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="icon" class="form-label">Icon</label>
                                                        <input type="text" name="icon"
                                                            class="form-control border p-2" id="icon"
                                                            value="{{ $skill->icon }}" required>
                                                        @error('icon')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category" class="form-label">Category</label>
                                                        <select name="category" class="form-control border p-2" id="category">
                                                            <option value="" selected>Selecciona una Categira</option>
                                                            <option value="lenguaje">Lenguaje</option>
                                                            <option value="sistema Operativo">Sistema Operativo</option>
                                                            <option value="base de datos">Base de Datos</option>
                                                            <option value="framework">Framework</option>
                                                            <option value="herramienta">Herramienta</option>
                                                            <option value="design">Diseño</option>
                                                            <option value="ofimatica">Ofimatica</option>
                                                            <option value="ciberseguridad">Ciberseguridad</option>
                                                            <option value="blandas">Habilidades Blandas</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn bg-gradient-dark">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())

                            </script>,
                            made by Jose Sacramento Muñoz Perez for a better web.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>
</x-app-layout>