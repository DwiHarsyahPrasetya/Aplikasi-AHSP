<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="container col-lg-5">
            <div class="row header p-lg-4">
                <div class="header-login p-lg-2">
                    <img src="<?= base_url('assets/'); ?>img/Logo_PU.jpg" class="logo me-3" width="20%">
                    <h4 class="logo-text fs-4">BBWS SUMATERA VIII</h4>
                    <!-- <h4 class="logo-text fs-6">DIREKTORAT JENDRAL SUMBER DAYA AIR</h4> -->
                    <h4 class="logo-text fs-5">KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT</h4>
                </div>
            </div>
            <div class="row">
                <div class="card p-lg-4">
                    <!-- <h2 class="text-center">Login</h2> -->
                    <?= $this->session->flashdata('massage'); ?>
                    <form class="p-lg-4" action="" method="post">
                        <div class="mb-3">
                            <!-- <label for="exampleInputEmail1" class="form-label">NIP</label> -->
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nip" placeholder="NIP">
                            <small class="form-text text-danger"><?= form_error('nip'); ?></small>
                        </div>
                        <div class="mb-3">
                            <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                            <small class="form-text text-danger"><?= form_error('password'); ?></small>

                            <p class="text-end fs-6">
                                <a href="#">Forgot password ? </a>
                            </p>
                        </div>
                        <button type="submit" class="form-control btn btn-primary">LOGIN</button>

                        <p class="text-center">Haven't created an account yet ?<a href="#"> Create account </a></p>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p class="text-center">Copyright</p>
    </div>

    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
</body>

</html>