<?php
// Detectar automaticamente o caminho base correto
$script_path = $_SERVER['SCRIPT_FILENAME'] ?? __FILE__;

// Verificar se estamos em uma subpasta (servicos/)
if (strpos(str_replace('\\', '/', $script_path), '/servicos/') !== false) {
    $base_path = '../';
} else {
    $base_path = '';
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $page_title ?? 'BPO Innova'; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $base_path; ?>css/global.css">
  <?php if (isset($custom_css) && !empty($custom_css)): ?>
    <style>
      <?php echo $custom_css; ?>
    </style>
  <?php endif; ?>
</head>

<body>
  <?php include __DIR__ . '/sections/header.php'; ?>

  <?php echo $page_content ?? ''; ?>

  <?php include __DIR__ . '/sections/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
  </script>
  <?php if (isset($custom_js) && !empty($custom_js)): ?>
    <script>
      <?php echo $custom_js; ?>
    </script>
  <?php endif; ?>
</body>

</html>
