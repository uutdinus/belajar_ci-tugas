<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('NiceAdmin/assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
    <link href="<?= base_url('NiceAdmin/assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
    <link href="<?= base_url('NiceAdmin/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?= base_url('NiceAdmin/assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href=".">
                    <i class="bi bi-grid"></i>
                    <span>Home</span>
                </a>
            </li><!-- End Home Nav -->

            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
                    <i class="bi bi-cart-check"></i>
                    <span>Keranjang</span>
                </a>
            </li>
            <?php
            if (session()->get('role') == 'admin') {
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
                        <i class="bi bi-receipt"></i>
                        <span>Produk</span>
                    </a>
                </li><!-- End Produk Nav -->
                <?php
            }
            ?>
               <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'kontak') ? "" : "collapsed" ?>" href="kontak">
                    <i class="bi bi-envelope"></i>
                    <span>Kontak</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->
</body>

</html>