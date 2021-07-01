<div class="container mt-5">
    <div class="row text-center">
        <div class="col-2"></div>
        <main class="form-signin col-8">
            <img class="mb-4" src="<?php echo base_url('assets/img/login.svg') ?>" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
            <?php
            if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-warning" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
            }
            ?>

            <form action="<?php echo site_url('login_controller/validate_session') ?>" method="POST">
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                    <label for="email">Correo electrónico</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
                    <label for="pass">Contraseña</label>
                </div>
                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
            </form>
        </main>
        <div class="col-2"></div>
    </div>
</div>