<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?= $this->safe($config['name']); ?></title>

    <style>
        body { padding: 16px 30px; }
        header { margin-bottom: 3rem; font-size: 1.3rem; font-weight: bold; }
        button { padding: 3px 10px; background: #63b614; border: 1px solid #48850e; border-radius: 3px; color: #fff; cursor: pointer; }
        p { margin-bottom: 1rem; }
    </style>
</head>
<body>
<header>Awesome PromoCode App</header>
<main>
    <?= $content; ?>
</main>
</body>
</html>
