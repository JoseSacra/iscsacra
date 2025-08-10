<x-app-layout>
    @livewire('navigation-menu')
    <main class="main-content degree-relative max-height-vh-100 h-100 border-radius-lg ">
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
                        <h6 class="mb-3">Education Administration</h6>
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
                    Add Education
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method='POST' action='{{route('education.create')}}' enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="institution" class="form-label">institutionn</label>
                                        <input type="text" name="institution" class="form-control border p-2" id="institution"
                                            required>
                                        @error('institution')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="degree" class="form-label">Carrera</label>
                                        <input type="text" name="degree" class="form-control border p-2" id="degree"
                                            required>
                                        @error('degree')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" name="location" class="form-control border p-2" id="location"
                                            required>
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">Initial Date</label>
                                        <input type="date" name="start_date" class="form-control border p-2"
                                            id="start_date" required>
                                        @error('start_date')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="current_study" class="form-label">Curren education</label>
                                        <select name="current_study" class="form-control border p-2" id="current_study">
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">Final Date</label>
                                        <input type="date" name="end_date" class="form-control border p-2"
                                            id="end_date">
                                        @error('end_date')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="textarea" name="description" class="form-control border p-2"
                                            id="description" required>
                                        @error('description')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="type" class="form-label">Tipo</label>
                                        <input type="text" name="type" class="form-control border p-2" id="type" required>
                                        @error('type')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
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
                            <th scope="col">Company</th>
                            <th scope="col">education Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Type</th>
                            <th scope="col" style="display: none;">Start Date</th>
                            <th scope="col"style="display: none;">End Date</th>
                            <th scope="col">Location</th>
                            <th scope="col"style="display: none;">Current education</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($educations as $education)
                        <tr>
                            <td>{{ $education->id }}</td>
                            <td><textarea class="form-control p-2" id="floatingTextarea2" name="institution" rows="3"
                                    cols="50">{{ $education->institution }}</textarea></td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="degree" rows="3"
                                    cols="50">{{ $education->degree }}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="description" rows="3"
                                    cols="50">{{ $education->description }}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="type" rows="3"
                                    cols="50">{{ $education->type }}</textarea>
                            </td>
                            <td style="display: none;">
                                <textarea class="form-control p-2" id="floatingTextarea2" name="start_date" rows="3"
                                    cols="50">{{ $education->start_date }}</textarea>
                            </td>
                            <td style="display: none;">
                                <textarea class="form-control p-2" id="floatingTextarea2" name="ende_date" rows="3"
                                    cols="50">{{ $education->end_date }}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="location" rows="3"
                                    cols="50">{{ $education->location}}</textarea>
                            </td>
                            <td style="display: none;">
                                <textarea class="form-control p-2" id="floatingTextarea2" name="current_study" rows="3"
                                    cols="50">{{ $education->current_study }}</textarea>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{$education->id}}">
                                    Edit
                                </button>
                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{$education->id}}" tabindex="-1"
                                    aria-labelledby="editModalLabel{{$education->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{$education->id}}">Edit education
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method='POST' action='{{ route('education.edit', $education->id) }}'
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="institution" class="form-label">Institucion</label>
                                                        <input type="text" name="institution"
                                                            class="form-control border p-2" id="institution"
                                                            value="{{ $education->institution }}" required>
                                                        @error('institution')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="degree" class="form-label">Education Title</label>
                                                        <input type="text" name="degree"
                                                            class="form-control border p-2" id="degree"
                                                            value="{{ $education->degree }}" required>
                                                        @error('degree')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <input type="text" name="description"
                                                            class="form-control border p-2" id="description"
                                                            value="{{ $education->description }}" required>
                                                        @error('description')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="type" class="form-label">Type</label>
                                                        <input type="text" name="type" class="form-control border p-2" id="type"
                                                            value="{{ $education->type }}" required>
                                                        @error('type')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="start_date" class="form-label">Initial Date</label>
                                                        <input type="date" name="start_date"
                                                            class="form-control border p-2" id="start_date"
                                                            value="{{$education->start_date}}" required>
                                                        @error('start_date')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="end_date" class="form-label">Final Date</label>
                                                        <input type="date" name="end_date"
                                                            class="form-control border p-2" id="end_date"
                                                            value="{{$education->end_date}}">
                                                        @error('end_date')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="location" class="form-label">Location</label>
                                                        <input type="text" name="location"
                                                            class="form-control border p-2" id="location"
                                                            value="{{ $education->location }}" required>
                                                        @error('location')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Curren education</label>
                                                        @if($education->current_education == 1)
                                                        <select name="status" class="form-control border p-2"
                                                            id="status">
                                                            <option value="1" selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                        @else
                                                        <select name="status" class="form-control border p-2"
                                                            id="status">
                                                            <option value="0" selected>Inactive</option>
                                                            <option value="1">Active</option>
                                                        </select>
                                                        @endif
                                                    </div>
                                                    <button type="submit" class="btn bg-gradient-dark">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('education.destroy', $education->id) }}" method="POST"
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