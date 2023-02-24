<nav class="navbar navbar-light bg-light shadow-lg mb-5 ">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href=""><img src="{{ asset('img/smktelkom.png') }}" alt="logo" width="200"></a>
        <div class="justify-content-end" id="navbarSupportedContent">
            <a class="navbar-brand fw-bold fs-3 btn btn-sm btn-danger text-light" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-person-circle fs-2"></i>
              </a>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda ingin logout?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Logout</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
    </div>
</nav>