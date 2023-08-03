<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesi 2</title>
</head>
<body>
    @php
        $nama = "Edy";
    @endphp

    <?php
        $no_hp = "08123456789";
    ?>

    <h1>Belajar Laravel dengan {{ $nama }}</h1>

    <h2>Belejar Laravel dengan <?php echo $nama; ?></h2>

    <h3>Belejar Laravel dengan {{ $no_hp }}</h3>

    <h3>Topik : {{ $topik }}</h3>

    <h3>Tanggal : {{ $tanggal }}</h3>

    <hr>
</body>
</html>