<x-app-layout>
     @livewire('navigation-menu')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
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
                        <h6 class="mb-3">Experiencie Administration</h6>
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
                    Add Experience
                </button>
                <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Experinece</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method='POST' action='#' enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="position" class="form-label">Position</label>
                                        <input type="text" name="position" class="form-control border p-2" id="position" required>
                                        @error('position')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" name="company" class="form-control border p-2" id="company" required>
                                        @error('company')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" name="location" class="form-control border p-2" id="location" required>
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="initialdate" class="form-label">Initial Date</label>
                                        <input type="date" name="initialdate" class="form-control border p-2" id="initialdate" required>
                                        @error('initialdate')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Curren Job</label>
                                        <select name="status" class="form-control border p-2" id="status">
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="finaldate" class="form-label">Final Date</label>
                                        <input type="date" name="finaldate" class="form-control border p-2" id="finaldate" >
                                        @error('finaldate')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="textarea" name="description" class="form-control border p-2" id="description" required>
                                        @error('description')
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
                            <th scope="col">Job Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Location</th>
                            <th scope="col">Current Job</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                        <tr>
                            <td>{{ $job->id }}</td>
                            <td><textarea class="form-control p-2" id="floatingTextarea2" name="title" rows="3"
                                    cols="50">{{ $job->company }}</textarea></td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="description" rows="3"
                                    cols="50">{{ $job->job_title }}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="description" rows="3"
                                    cols="50">{{ $job->description }}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="description" rows="3"
                                    cols="50">{{ $job->start_date }}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="description" rows="3"
                                    cols="50">{{ $job->end_date }}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="description" rows="3"
                                    cols="50">{{ $job->location}}</textarea>
                            </td>
                            <td>
                                <textarea class="form-control p-2" id="floatingTextarea2" name="description" rows="3"
                                    cols="50">{{ $job->current_job }}</textarea>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{$job->id}}">
                                    Edit
                                </button>
                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{$job->id}}" tabindex="-1"
                                    aria-labelledby="editModalLabel{{$job->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{$job->id}}">Edit job
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method='POST' action='{{ route('experience.edit', $job->id) }}'
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="company" class="form-label">Company</label>
                                                        <input type="text" name="company" class="form-control border p-2"
                                                            id="company" value="{{ $job->company }}" required>
                                                        @error('company')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="position" class="form-label">Job Title</label>
                                                        <input type="text" name="position" class="form-control border p-2" id="position" value="{{ $job->job_title }}" required>
                                                        @error('position')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <input type="text" name="description"
                                                            class="form-control border p-2" id="description"
                                                            value="{{ $job->description }}" required>
                                                        @error('description')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="initialdate" class="form-label">Initial Date</label>
                                                        <input type="date" name="initialdate" class="form-control border p-2" id="initialdate" value="{{$job->start_date}}" required>
                                                        @error('initialdate')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="finaldate" class="form-label">Final Date</label>
                                                        <input type="date" name="finaldate" class="form-control border p-2" id="finaldate" value="{{$job->end_date}}">
                                                        @error('finaldate')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="location" class="form-label">Location</label>
                                                        <input type="text" name="location" class="form-control border p-2" id="location"
                                                            value="{{ $job->location }}" required>
                                                        @error('location')
                                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Curren Job</label>
                                                        @if($job->current_job == 1)
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
                                <form action="{{ route('experience.destroy', $job->id) }}" method="POST"
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