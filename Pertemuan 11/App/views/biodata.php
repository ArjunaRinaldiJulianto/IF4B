<?php include 'layout/header.php'; ?>

<body>
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="card" style="width: 18rem;">
        <div class="card-header text-center">
            Biodata
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama: <?php echo $nama; ?></li>
            <li class="list-group-item">NIM: <?php echo $nim; ?></li>
            <li class="list-group-item">Kelas: <?php echo $kelas; ?></li>
        </ul>
    </div>
</div>
</body>

<?php include 'layout/footer.php'; ?>
