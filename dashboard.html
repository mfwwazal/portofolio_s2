<?php
session_start();
require 'config/db.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// Ambil data dari database
$skills = mysqli_query($conn, "SELECT * FROM skills");
$projects = mysqli_query($conn, "SELECT * FROM projects");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");

// Data edit
$data_edit_skill = null;
$data_edit_project = null;
$data_edit_cert = null;

// Edit handler
if (isset($_GET['edit_skill'])) {
    $id = (int)$_GET['edit_skill'];
    $data_edit_skill = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM skills WHERE id=$id"));
}
if (isset($_GET['edit_project'])) {
    $id = (int)$_GET['edit_project'];
    $data_edit_project = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM projects WHERE id=$id"));
}
if (isset($_GET['edit_certificate'])) {
    $id = (int)$_GET['edit_certificate'];
    $data_edit_cert = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM certificates WHERE id=$id"));
}

// Tambah
if (isset($_POST['tambah_skill'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama_skill']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);
    $persen = (int) $_POST['persen'];
    mysqli_query($conn, "INSERT INTO skills (nama_skill, level, persen) VALUES ('$nama', '$level', $persen)");
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['tambah_project'])) {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $gambar = mysqli_real_escape_string($conn, $_POST['gambar']);
    mysqli_query($conn, "INSERT INTO projects (judul, deskripsi, gambar) VALUES ('$judul', '$deskripsi', '$gambar')");
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['tambah_certificate'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $gambar = mysqli_real_escape_string($conn, $_POST['gambar']);
    $tahun = (int) $_POST['tahun'];
    mysqli_query($conn, "INSERT INTO certificates (nama, gambar, tahun) VALUES ('$nama', '$gambar', $tahun)");
    header("Location: dashboard.php");
    exit;
}

// Update
if (isset($_POST['update_skill'])) {
    $id = (int) $_POST['id_edit'];
    $nama = mysqli_real_escape_string($conn, $_POST['nama_skill']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);
    $persen = (int) $_POST['persen'];
    mysqli_query($conn, "UPDATE skills SET nama_skill='$nama', level='$level', persen=$persen WHERE id=$id");
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['update_project'])) {
    $id = (int) $_POST['id_project_edit'];
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $gambar = mysqli_real_escape_string($conn, $_POST['gambar']);
    mysqli_query($conn, "UPDATE projects SET judul='$judul', deskripsi='$deskripsi', gambar='$gambar' WHERE id=$id");
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['update_certificate'])) {
    $id = (int) $_POST['id_certificate_edit'];
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $gambar = mysqli_real_escape_string($conn, $_POST['gambar']);
    $tahun = (int) $_POST['tahun'];
    mysqli_query($conn, "UPDATE certificates SET nama='$nama', gambar='$gambar', tahun=$tahun WHERE id=$id");
    header("Location: dashboard.php");
    exit;
}

// Hapus
if (isset($_POST['hapus_skill'])) {
    $id = (int) $_POST['hapus_skill_id'];
    mysqli_query($conn, "DELETE FROM skills WHERE id=$id");
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['hapus_project'])) {
    $id = (int) $_POST['hapus_project_id'];
    mysqli_query($conn, "DELETE FROM projects WHERE id=$id");
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['hapus_certificate'])) {
    $id = (int) $_POST['hapus_certificate_id'];
    mysqli_query($conn, "DELETE FROM certificates WHERE id=$id");
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-white">
    <nav class="bg-slate-900 p-4 shadow-md flex justify-between">
        <h1 class="text-purple-400 font-bold text-lg">Dashboard Admin</h1>
        <a href="logout.php" class="text-pink-400 hover:underline">Logout</a>
    </nav>

    <main class="container mx-auto px-6 py-10 space-y-10">
        <!-- Skills Section -->
        <section>
            <h2 class="text-2xl font-bold mb-4">Skills</h2>
            <form method="POST" action="" class="mb-4 bg-slate-800 p-4 rounded shadow">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <input type="text" name="nama_skill" placeholder="Nama Skill" required class="p-2 rounded bg-slate-700">
                    <input type="text" name="level" placeholder="Level (Beginner/Intermediate/advanced)" required class="p-2 rounded bg-slate-700">
                    <input type="number" name="persen" placeholder="Progress %" min="0" max="100" required class="p-2 rounded bg-slate-700">
                </div>
                <button name="tambah_skill" class="mt-4 bg-purple-600 px-4 py-2 rounded">Tambah Skill</button>
            </form>
            <?php if ($data_edit_skill): ?>
            <form method="POST" class="mb-4 bg-yellow-800 p-4 rounded">
                <input type="hidden" name="id_edit" value="<?= $data_edit_skill['id'] ?>">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <input type="text" name="nama_skill" value="<?= $data_edit_skill['nama_skill'] ?>" class="p-2 rounded bg-slate-700">
                    <input type="text" name="level" value="<?= $data_edit_skill['level'] ?>" class="p-2 rounded bg-slate-700">
                    <input type="number" name="persen" value="<?= $data_edit_skill['persen'] ?>" class="p-2 rounded bg-slate-700">
                </div>
                <button name="update_skill" class="mt-4 bg-yellow-500 px-4 py-2 rounded">Update Skill</button>
            </form>
            <?php endif; ?>
            <table class="w-full text-sm mt-4 border border-slate-700">
                <thead class="bg-slate-700">
                    <tr>
                        <th class="p-2">#</th>
                        <th class="p-2">Skill</th>
                        <th class="p-2">Level</th>
                        <th class="p-2">Progress</th>
                        <th class="p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($skills as $s): ?>
                    <tr class="border-t border-slate-600">
                        <td class="p-2"><?= $i++ ?></td>
                        <td class="p-2"><?= $s['nama_skill'] ?></td>
                        <td class="p-2"><?= $s['level'] ?></td>
                        <td class="p-2"><?= $s['persen'] ?>%</td>
                        <td class="p-2">
                            <a href="?edit_skill=<?= $s['id'] ?>" class="text-yellow-400">Edit</a>
                            <form method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                                <input type="hidden" name="hapus_skill_id" value="<?= $s['id'] ?>">
                                <button name="hapus_skill" class="text-red-400 ml-2">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="mb-12">
    <form method="POST" action="dashboard.php" class="mb-6 bg-slate-900 p-4 rounded shadow-md">
        <h3 class="text-lg font-semibold text-purple-300 mb-4">Tambah Project</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <input type="text" name="judul" placeholder="Judul Project" required class="p-2 rounded bg-slate-800 text-white">
            <input type="text" name="deskripsi" placeholder="Deskripsi" required class="p-2 rounded bg-slate-800 text-white">
            <input type="text" name="gambar" placeholder="Link gambar (opsional)" required class="p-2 rounded bg-slate-800 text-white">
        </div>
        <button type="submit" name="tambah_project" class="mt-4 bg-purple-600 hover:bg-pink-500 px-4 py-2 rounded text-white font-semibold">Tambah Project</button>
    </form>

    <?php if ($data_edit_project): ?>
    <form method="POST" class="mb-6 bg-slate-900 p-4 rounded shadow-md">
        <h3 class="text-lg font-semibold text-yellow-300 mb-4">Edit Project</h3>
        <input type="hidden" name="id_project_edit" value="<?= $data_edit_project['id'] ?>">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <input type="text" name="judul" value="<?= $data_edit_project['judul'] ?>" required class="p-2 rounded bg-slate-800 text-white">
            <input type="text" name="deskripsi" value="<?= $data_edit_project['deskripsi'] ?>" required class="p-2 rounded bg-slate-800 text-white">
            <input type="text" name="gambar" value="<?= $data_edit_project['gambar'] ?>" required class="p-2 rounded bg-slate-800 text-white">
        </div>
        <button type="submit" name="update_project" class="mt-4 bg-yellow-500 hover:bg-yellow-400 px-4 py-2 rounded text-black font-semibold">
            Simpan Perubahan
        </button>
    </form>
    <?php endif; ?>

    <h2 class="text-2xl font-bold glow-text mb-4">Projects</h2>
    <div class="overflow-auto">
        <table class="min-w-full text-left text-sm border border-slate-700">
            <thead class="bg-slate-800 text-cyan-200">
                <tr>
                    <th class="p-2">#</th>
                    <th class="p-2">Judul</th>
                    <th class="p-2">Deskripsi</th>
                    <th class="p-2">Gambar</th>
                    <th class="p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach ($projects as $p): ?>
                <tr class="border-t border-slate-700 hover:bg-slate-800 text-center">
                    <td class="p-2"><?= $i++ ?></td>
                    <td class="p-2"><?= $p['judul'] ?></td>
                    <td class="p-2"><?= $p['deskripsi'] ?></td>
                    <td class="p-2">
                        <?php if (!empty($p['gambar'])): ?>
                            <img src="<?= $p['gambar'] ?>" alt="Project Image" class="w-24 h-24 object-cover rounded shadow-md">
                        <?php else: ?>
                            <span class="text-slate-400 italic">Tidak Ada Gambar</span>
                        <?php endif ?>
                    </td>
                    <td class="p-2">
                        <div class="flex justify-center gap-2">
                            <a href="dashboard.php?edit_project=<?= $p['id'] ?>" class="text-yellow-300 hover:underline">Edit</a>
                            <form method="POST" onsubmit="return confirm('Yakin mau hapus project ini?')" class="inline">
                                <input type="hidden" name="hapus_project_id" value="<?= $p['id'] ?>">
                                <button type="submit" name="hapus_project" class="text-red-400 hover:text-red-600">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>


<section class="mb-12">
    <form method="POST" action="dashboard.php" class="mb-6 bg-slate-900 p-4 rounded shadow-md">
        <h3 class="text-lg font-semibold text-purple-300 mb-4">Tambah Certificate</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <input type="text" name="nama" placeholder="Nama Sertifikat" required class="p-2 rounded bg-slate-800 text-white">
            <input type="text" name="gambar" placeholder="Link Gambar" required class="p-2 rounded bg-slate-800 text-white">
            <input type="date" name="tahun" placeholder="Tahun" required class="p-2 rounded bg-slate-800 text-white">
        </div>
        <button type="submit" name="tambah_certificate" class="mt-4 bg-purple-600 hover:bg-pink-500 px-4 py-2 rounded text-white font-semibold">Tambah</button>
    </form>

    <?php if ($data_edit_cert): ?>
    <form method="POST" class="mb-6 bg-slate-900 p-4 rounded shadow-md">
        <h3 class="text-lg font-semibold text-yellow-300 mb-4">Edit Certificate</h3>
        <input type="hidden" name="id_certificate_edit" value="<?= $data_edit_cert['id'] ?>">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <input type="text" name="nama" value="<?= $data_edit_cert['nama'] ?>" required class="p-2 rounded bg-slate-800 text-white">
            <input type="text" name="gambar" value="<?= $data_edit_cert['gambar'] ?>" required class="p-2 rounded bg-slate-800 text-white">
            <input type="date" name="tahun" value="<?= $data_edit_cert['tahun'] ?>" required class="p-2 rounded bg-slate-800 text-white">
        </div>
        <button type="submit" name="update_certificate" class="mt-4 bg-yellow-500 hover:bg-yellow-400 px-4 py-2 rounded text-black font-semibold">
            Simpan Perubahan
        </button>
    </form>
    <?php endif; ?>

    <h2 class="text-2xl font-bold glow-text mb-4">Certificates</h2>
    <div class="overflow-auto">
        <table class="min-w-full text-left text-sm border border-slate-700">
            <thead class="bg-slate-800 text-cyan-200">
                <tr>
                    <th class="p-2">#</th>
                    <th class="p-2">Nama</th>
                    <th class="p-2">Gambar</th>
                    <th class="p-2">Tahun</th>
                    <th class="p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;  while ($c = mysqli_fetch_assoc($certificates)): ?>
                <tr class="border-t border-slate-700 hover:bg-slate-800 text-center">
                    <td class="p-2"><?= $i++ ?></td>
                    <td class="p-2"><?= $c['nama'] ?></td>
                    <td class="p-2">
                        <?php if (!empty($c['gambar'])): ?>
                            <img src="<?= $c['gambar'] ?>" alt="Certificate Image" class="w-24 h-16 object-contain rounded shadow">
                        <?php else: ?>
                            <span class="text-slate-400 italic">Tidak ada gambar</span>
                        <?php endif ?>
                    </td>
                    <td class="p-2"><?= $c['tahun'] ?></td>
                    <td class="p-2">
                        <div class="flex justify-center gap-2">
                            <a href="dashboard.php?edit_certificate=<?= $c['id'] ?>" class="text-yellow-300 hover:underline">Edit</a>
                            <form method="POST" onsubmit="return confirm('Yakin mau hapus certificate ini?')" class="inline">
                                <input type="hidden" name="hapus_certificate_id" value="<?= $c['id'] ?>">
                                <button type="submit" name="hapus_certificate" class="text-red-400 hover:text-red-600">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</section>

    </main>
</body>
</html>
