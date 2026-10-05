<?php 
$pageTitle = $pageTitle ?? 'Telkom University - Praktikum Web'; 
$currentPage = basename($_SERVER['PHP_SELF']); 
?> 
<!doctype html> 
<html lang="id"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title><?= htmlspecialchars($pageTitle) ?></title> 
    <link rel="stylesheet" href="assets/css/style.css"> 
</head> 
<body> 
<footer class="site-footer"> 
    <div class="container footer-grid"> 
        <div> 
            <strong>Telkom University</strong> 
            <p>Website simulasi untuk pembelajaran HTML, CSS, PHP native, MySQL, dan Git.</p> 
        </div> 
        <div> 
            <strong>Catatan</strong> 
            <p>Konten pada proyek ini hanya untuk praktikum dan bukan situs resmi institusi.</p> 
        </div> 
    </div> 
    <p class="copyright">&copy; <?= date('Y') ?> Praktikum Pengembangan Web.</p>
</body> 
</html>