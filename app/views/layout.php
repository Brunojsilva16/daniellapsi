<!DOCTYPE html>
<html lang="pt-BR" class="<?= htmlspecialchars($htmlClass ?? 'scroll-smooth', ENT_QUOTES, 'UTF-8') ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Daniella Paes Barreto | Psicóloga Clínica', ENT_QUOTES, 'UTF-8') ?></title>

    <?php if (!empty($metaDescription)): ?>
        <meta name="description" content="<?= htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8') ?>">
    <?php endif; ?>

    <?php if (!empty($headContent)): ?>
        <?= $headContent ?>
    <?php endif; ?>

    <!-- Tailwind CSS precisa carregar antes da configuração personalizada. -->
    <script src="https://cdn.tailwindcss.com"></script>

    <?php if (!empty($tailwindConfig)): ?>
        <!-- Configuração do Tailwind: usa window.tailwind para evitar "tailwind is not defined". -->
        <script>
            window.tailwind = window.tailwind || {};
            window.tailwind.config = <?= $tailwindConfig ?>;
        </script>
    <?php endif; ?>

    <!-- Fontes do Google usadas na home original -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Ícones Lucide usados pelos atributos data-lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
    <link rel="icon" type="image/png" href="<?= htmlspecialchars($faviconImg ?? (BASE_URL . '/assets/favicon.png'), ENT_QUOTES, 'UTF-8') ?>">

    <style>
        /* Estilos mantidos do layout da plataforma */
        .category-tag {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            line-height: 1.25;
            text-transform: capitalize;
        }

        .category-platinum {
            background-color: #e5e7eb;
            color: #4b5563;
            border: 1px solid #d1d5db;
        }

        .category-premium {
            background-color: #fffbeb;
            color: #b45309;
            border: 1px solid #fde68a;
        }

        /* Custom Styles da home original */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <?php if (!empty($pageStyles) && is_array($pageStyles)): ?>
        <?php foreach ($pageStyles as $style): ?>
            <link rel="stylesheet" href="<?= htmlspecialchars($style, ENT_QUOTES, 'UTF-8') ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($pageScriptsHeader) && is_array($pageScriptsHeader)): ?>
        <?php foreach ($pageScriptsHeader as $script): ?>
            <script src="<?= htmlspecialchars($script, ENT_QUOTES, 'UTF-8') ?>" defer></script>
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body class="<?= htmlspecialchars($bodyClass ?? 'font-sans text-textDark bg-white antialiased', ENT_QUOTES, 'UTF-8') ?>">
    <?php if (!empty($fullWidthLayout)): ?>
        <?= $pageContent ?? '' ?>
    <?php else: ?>
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <?= $pageContent ?? '' ?>
        </main>
    <?php endif; ?>

    <?php if (!empty($pageScriptsFooter) && is_array($pageScriptsFooter)): ?>
        <?php foreach ($pageScriptsFooter as $script): ?>
            <script src="<?= htmlspecialchars($script, ENT_QUOTES, 'UTF-8') ?>" defer></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($beforeBodyClose)): ?>
        <?= $beforeBodyClose ?>
    <?php endif; ?>
</body>

</html>
