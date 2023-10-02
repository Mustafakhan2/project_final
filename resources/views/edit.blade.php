@include('includes.header')

@include('includes.sidebar')

<div class="main">
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
        </a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">

                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="message-square"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                        aria-labelledby="messagesDropdown">

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                        data-bs-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                    </a>

                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                        data-bs-toggle="dropdown">
                        <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                        <span class="text-dark">Charles Hall</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="pie-chart"></i> Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                data-feather="settings"></i> Settings & Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <main class="content">
        <div class="container-fluid p-0">

            <form class="row g-3 needs-validation" novalidate method="POST"
                action="{{ route('admin.edit', ['id' => $edituser->id]) }}">
                @csrf
                <div class="col-md-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="{{ $edituser->name }}" class="form-control" id="name"
                        name="name" value="" required placeholder="Enter Your New Name">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="passowrd" class="form-label">Password</label>
                    <input type="password" value="{{ $edituser->password }}" class="form-control" id="password"
                        name="password" value="" required placeholder="Enter Your New Password">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text" id="email">@</span>
                        <input type="text" value="{{ $edituser->email }}" class="form-control" id="email"
                            name="email" aria-describedby="inputGroupPrepend" placeholder="Enter Your New Email"
                            required>

                    </div>
                </div>




                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Change</button>
                </div>
            </form>





            @include('includes.footer')
