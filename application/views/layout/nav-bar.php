<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo site_url('inicio_controller') ?>">Computo en la nube</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex">
                <span class="navbar-brand"><?php echo $this->session->firstName . ' ' . $this->session->lastName ?></span>
                <a href="<?php echo site_url('login_controller/close_session') ?>" class="btn btn-danger">Salir</a>
            </form>
        </div>
    </div>
</nav>