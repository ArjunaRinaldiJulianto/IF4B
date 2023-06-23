<?php include 'layout/header.php'; ?>

<body>
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="card" style="width: 18rem;">
        <div class="card-header text-center">
            Data Barang
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Barang: <?php echo $nama; ?></li>
            <li class="list-group-item">Harga: Rp <?php echo $harga; ?></li>
            <li class="list-group-item">Stok: <?php echo $stok; ?></li>
        </ul>
    </div>
</div>
</body>

<?php include 'layout/footer.php'; ?>
