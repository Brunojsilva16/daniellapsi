<?php
$asset = static function (string $path): string {
    return BASE_URL . '/' . ltrim($path, '/');
};

$galeriaConsultorio = [
    ['arquivo' => 'consultorio-01.jpeg', 'alt' => 'Visão geral da recepção integrada do consultório'],
    ['arquivo' => 'consultorio-02.jpg', 'alt' => 'Sofá do consultório com almofadas verdes e ambiente acolhedor'],
    ['arquivo' => 'consultorio-03.jpeg', 'alt' => 'Mesa de atendimento com livros e luz natural no consultório'],
    ['arquivo' => 'consultorio-04.jpg', 'alt' => 'Poltrona do terapeuta e proximidade com o divã'],
    ['arquivo' => 'consultorio-05.jpg', 'alt' => 'Apoio de café e água do consultório'],
    ['arquivo' => 'consultorio-06.jpg', 'alt' => 'Poltronas claras em ambiente de atendimento'],
    ['arquivo' => 'consultorio-07.jpg', 'alt' => 'Poltrona verde com iluminação aconchegante'],
    ['arquivo' => 'consultorio-08.jpg', 'alt' => 'Sofá e poltrona do consultório em composição acolhedora'],
    ['arquivo' => 'consultorio-09.jpg', 'alt' => 'Mesa de atendimento próxima à janela'],
    ['arquivo' => 'consultorio-10.jpg', 'alt' => 'Sala de espera com poltronas terracota e quadro decorativo'],
    ['arquivo' => 'consultorio-11.jpeg', 'alt' => 'Sofá em tom suave com almofadas verdes'],
    ['arquivo' => 'consultorio-12.jpg', 'alt' => 'Poltrona verde e luminária do espaço terapêutico'],
    ['arquivo' => 'consultorio-13.jpg', 'alt' => 'Detalhes da mesa de atendimento e decoração natural'],
    ['arquivo' => 'consultorio-14.jpeg', 'alt' => 'Vista acolhedora do sofá e poltrona do consultório'],
    ['arquivo' => 'consultorio-15.jpg', 'alt' => 'Sofá em destaque no ambiente terapêutico'],

];
?>
<!-- Header / Navbar -->
<header class="fixed w-full top-0 bg-white/90 backdrop-blur-md z-50 shadow-sm transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="<?= BASE_URL ?: '/' ?>" class="flex-shrink-0 flex items-center" aria-label="Ir para a página inicial">
                <img src="<?= $asset('assets/logo/logo-daniella-horizontal-color.svg') ?>" alt="Daniella Paes Barreto Psicologia" class="h-12 md:h-14 w-auto max-w-[220px]" decoding="async">
            </a>

            <!-- Menu Desktop -->
            <nav class="hidden md:flex space-x-6">
                <a href="#sobre" class="text-gray-600 hover:text-olive transition-colors font-medium">Sobre mim</a>
                <a href="#servicos" class="text-gray-600 hover:text-olive transition-colors font-medium">Especialidades</a>
                <a href="#atendimento" class="text-gray-600 hover:text-olive transition-colors font-medium">Como Funciona</a>
                <a href="#galeria" class="text-gray-600 hover:text-olive transition-colors font-medium">Galeria</a>
                <a href="#localizacao" class="text-gray-600 hover:text-olive transition-colors font-medium">Consultório</a>
            </nav>

            <!-- CTA Header -->
            <div class="hidden md:flex items-center gap-3">
                <a href="https://www.instagram.com/psi.daniellapb" target="_blank" rel="noopener noreferrer" aria-label="Acompanhar Daniella Paes Barreto no Instagram" class="border border-olive/30 text-olive-dark hover:bg-beige hover:border-olive px-4 py-2.5 rounded-full font-medium transition-all flex items-center gap-2">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="2"></rect>
                        <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2"></circle>
                        <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"></circle>
                    </svg>
                    Instagram
                </a>

                <a href="https://wa.me/5581988111601?text=Olá,%20gostaria%20de%20agendar%20uma%20sessão." target="_blank" rel="noopener noreferrer" class="bg-olive hover:bg-olive-dark text-white px-6 py-2.5 rounded-full font-medium transition-all shadow-md hover:shadow-lg flex items-center gap-2">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                    Agendar Sessão
                </a>
            </div>

            <!-- Menu Mobile Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-600 hover:text-olive focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
        <div class="px-4 pt-2 pb-6 space-y-1 shadow-lg">
            <a href="#sobre" class="block px-3 py-3 text-base font-medium text-gray-700 hover:text-olive hover:bg-beige rounded-md">Sobre mim</a>
            <a href="#servicos" class="block px-3 py-3 text-base font-medium text-gray-700 hover:text-olive hover:bg-beige rounded-md">Especialidades</a>
            <a href="#atendimento" class="block px-3 py-3 text-base font-medium text-gray-700 hover:text-olive hover:bg-beige rounded-md">Como Funciona</a>
            <a href="#galeria" class="block px-3 py-3 text-base font-medium text-gray-700 hover:text-olive hover:bg-beige rounded-md">Galeria</a>
            <a href="#localizacao" class="block px-3 py-3 text-base font-medium text-gray-700 hover:text-olive hover:bg-beige rounded-md">Consultório</a>
            <a href="https://www.instagram.com/psi.daniellapb" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 mt-4 text-center border border-olive/30 text-olive-dark px-4 py-3 rounded-full font-medium hover:bg-beige transition-colors">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="2"></rect>
                    <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2"></circle>
                    <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"></circle>
                </svg>
                Instagram
            </a>
            <a href="https://wa.me/5581988111601" target="_blank" rel="noopener noreferrer" class="block text-center bg-olive text-white px-4 py-3 rounded-full font-medium">Agendar no WhatsApp</a>
        </div>
    </div>
</header>

<!-- 1. Hero Section -->
<section class="relative bg-beige pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="lg:grid lg:grid-cols-12 lg:gap-12 items-center">
            <!-- Text Content -->
            <div class="lg:col-span-6 lg:pr-8 text-center lg:text-left mb-12 lg:mb-0">
                <span class="inline-block py-1 px-3 rounded-full bg-white text-olive-dark text-sm font-semibold tracking-wider mb-6 shadow-sm border border-olive/10">
                    Psicóloga Clínica • CRP 02/19051
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-5xl font-serif text-textDark font-medium leading-tight mb-6">
                    Cuidar da sua saúde emocional é um passo <span class="text-olive italic">essencial</span>.
                </h1>
                <p class="text-lg text-gray-700 mb-8 leading-relaxed max-w-2xl mx-auto lg:mx-0 hyphens-auto text-justify">
                    Viva com mais equilíbrio, consciência e qualidade nas suas relações. Atendimento para adultos e casais com olhar acolhedor e estratégico através da Terapia Cognitivo-Comportamental.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="https://wa.me/5581988111601?text=Olá,%20vim%20pelo%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20a%20terapia." target="_blank" class="bg-olive hover:bg-olive-dark text-white text-lg px-8 py-4 rounded-full font-medium transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                        <i data-lucide="calendar-check" class="w-5 h-5"></i>
                        Agendar minha consulta
                    </a>
                    <!-- <a href="#servicos" class="bg-white hover:bg-gray-50 text-olive-dark text-lg px-8 py-4 rounded-full font-medium transition-all shadow-sm border border-gray-200 flex items-center justify-center">
                            Ver especialidades
                        </a> -->
                </div>
            </div>

            <!-- Image Content -->
            <div class="lg:col-span-6 relative flex justify-center lg:justify-end">
                <!-- Elemento decorativo de fundo -->
                <div class="absolute -inset-4 bg-olive/10 rounded-[3rem] transform rotate-3 scale-105 -z-10"></div>

                <img src="<?= $asset('assets/img/daniella01.jpeg') ?>" alt="Retrato profissional de Daniella Paes Barreto" class="relative z-10 w-full max-w-md lg:max-w-lg object-cover shadow-2xl rounded-tl-[4rem] rounded-br-[4rem] rounded-tr-xl rounded-bl-xl border-4 border-white aspect-[3/4]">

                <!-- Card flutuante -->
                <div class="absolute bottom-6 -left-6 lg:-left-12 bg-white p-4 rounded-2xl shadow-xl flex items-center gap-4 z-20 hidden sm:flex">
                    <div class="bg-beige w-12 h-12 rounded-full flex items-center justify-center text-olive">
                        <i data-lucide="heart-handshake" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-gray-800">Terapia Acolhedora</p>
                        <p class="text-xs text-gray-500">Presencial e Online</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 3. Serviços / Áreas de Atuação -->
<section id="servicos" class="py-20 lg:py-20 bg-beige">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-olive font-semibold tracking-wider text-sm uppercase mb-2">Especialidades</h2>
            <h3 class="text-3xl sm:text-4xl font-serif text-textDark mb-4">Como posso ajudar você?</h3>
            <p class="text-gray-600 text-lg">Áreas de foco no atendimento clínico para o desenvolvimento da sua saúde mental e qualidade de vida.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100 group">
                <div class="w-14 h-14 bg-beige rounded-xl flex items-center justify-center text-olive mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="brain-circuit" class="w-7 h-7"></i>
                </div>
                <h4 class="text-xl font-semibold text-textDark mb-3">Ansiedade</h4>
                <p class="text-gray-600">Ferramentas da TCC e DBT para lidar com preocupações excessivas, crises de pânico e recuperar o controle no momento presente.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100 group">
                <div class="w-14 h-14 bg-beige rounded-xl flex items-center justify-center text-olive mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="cloud-rain" class="w-7 h-7"></i>
                </div>
                <h4 class="text-xl font-semibold text-textDark mb-3">Depressão</h4>
                <p class="text-gray-600">Acolhimento empático e estratégias focadas na ativação comportamental e reestruturação cognitiva para resgatar o seu bem-estar.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100 group">
                <div class="w-14 h-14 bg-beige rounded-xl flex items-center justify-center text-olive mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="users" class="w-7 h-7"></i>
                </div>
                <h4 class="text-xl font-semibold text-textDark mb-3">Relacionamentos</h4>
                <p class="text-gray-600">Desenvolvimento de habilidades interpessoais, limites saudáveis e assertividade na comunicação afetiva.</p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100 group">
                <div class="w-14 h-14 bg-beige rounded-xl flex items-center justify-center text-olive mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="heart" class="w-7 h-7"></i>
                </div>
                <h4 class="text-xl font-semibold text-textDark mb-3">Terapia de Casal</h4>
                <p class="text-gray-600">Mediação neutra para resolução de conflitos, melhora na intimidade, comunicação e reconstrução da parceria conjugal.</p>
            </div>
            <!-- Card 5 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100 group">
                <div class="w-14 h-14 bg-beige rounded-xl flex items-center justify-center text-olive mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="utensils" class="w-7 h-7"></i>
                </div>
                <h4 class="text-xl font-semibold text-textDark mb-3">Compulsão Alimentar</h4>
                <p class="text-gray-600">Tratamento focado na relação com a comida, gatilhos emocionais e regulação dos impulsos alimentares.</p>
            </div>
            <!-- Card 6 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-gray-100 group">
                <div class="w-14 h-14 bg-beige rounded-xl flex items-center justify-center text-olive mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="activity" class="w-7 h-7"></i>
                </div>
                <h4 class="text-xl font-semibold text-textDark mb-3">Pré e Pós-Bariátrica</h4>
                <p class="text-gray-600">Acompanhamento psicológico essencial para a preparação cirúrgica e adaptação ao novo estilo de vida pós-operatório.</p>
            </div>
        </div>
    </div>
</section>

<!-- 2. Sobre a Psicóloga -->
<section id="sobre" class="py-20 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <div class="mb-10 lg:mb-0">
                <div class="relative max-w-md mx-auto lg:max-w-none">
                    <div class="absolute inset-0 bg-olive rounded-2xl transform -translate-x-3 translate-y-3 sm:-translate-x-4 sm:translate-y-4 -z-10"></div>
                    <img
                        src="<?= $asset('assets/img/daniella02.jpeg') ?>"
                        alt="Daniella Paes Barreto"
                        class="rounded-2xl shadow-lg object-cover sm:h-96 lg:h-[600px] w-full grayscale-[20%] sepia-[10%] shadow-2xl rounded-tl-[4rem] rounded-br-[4rem] rounded-tr-xl rounded-bl-xl border-4 border-white aspect-[3/4]"
                        loading="lazy"
                        decoding="async">
                </div>
            </div>
            <div>
                <h2 class="text-olive font-semibold tracking-wider text-sm uppercase mb-2">Conheça sua Psicóloga</h2>
                <h3 class="text-3xl sm:text-4xl font-serif text-textDark mb-6">Daniella Paes Barreto</h3>
                <div class="prose prose-lg text-gray-600 mb-8 hyphens-auto text-justify">
                    <p class="mb-4">
                        Sou graduada em Psicologia, com mais de <strong>11 anos de atuação clínica</strong>. Ofereço um espaço acolhedor, ético e seguro, com o objetivo de promover o seu autoconhecimento, regulação emocional e a construção de relações mais saudáveis.
                    </p>
                    <p>
                        Minha prática é fundamentada na <strong>Terapia Cognitivo-Comportamental (TCC)</strong> e na <strong>Terapia Comportamental Dialética (DBT)</strong>, abordagens baseadas em evidências científicas e altamente eficazes no tratamento das demandas emocionais contemporâneas.
                    </p>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <i data-lucide="check-circle-2" class="w-6 h-6 text-olive mr-3 flex-shrink-0 mt-0.5"></i>
                        <span class="text-gray-700">Psicóloga Clínica Hospitalar</span>
                    </li>
                    <li class="flex items-start">
                        <i data-lucide="check-circle-2" class="w-6 h-6 text-olive mr-3 flex-shrink-0 mt-0.5"></i>
                        <span class="text-gray-700">Especialista em Terapia de Casais</span>
                    </li>
                    <li class="flex items-start">
                        <i data-lucide="check-circle-2" class="w-6 h-6 text-olive mr-3 flex-shrink-0 mt-0.5"></i>
                        <span class="text-gray-700">Formação em Terapia Comportamental Dialética (DBT)</span>
                    </li>
                </ul>

                <div class="bg-beige p-6 rounded-xl border border-beige-dark">
                    <p class="font-serif italic text-lg text-olive-dark">
                        "Minha missão é guiar você rumo a uma vida que faça sentido, com mais consciência e bem-estar."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 4. Como Funciona o Atendimento -->
<section id="atendimento" class="py-20 bg-olive text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:flex lg:justify-between lg:items-center gap-12">
            <div class="lg:w-1/3 mb-12 lg:mb-0">
                <h2 class="text-beige-dark font-semibold tracking-wider text-sm uppercase mb-2">Estrutura</h2>
                <h3 class="text-3xl sm:text-4xl font-serif mb-6">Como funciona a terapia?</h3>
                <p class="text-beige-dark opacity-90 mb-8 text-lg">
                    Um processo estruturado pensado para o seu conforto e evolução constante.
                </p>
                <a href="https://wa.me/5581988111601" target="_blank" class="inline-block bg-white text-olive-dark font-semibold px-8 py-3 rounded-full hover:bg-beige transition-colors">
                    Tirar Dúvidas no WhatsApp
                </a>
            </div>

            <div class="lg:w-2/3 grid sm:grid-cols-2 gap-6">
                <div class="bg-olive-dark/50 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                    <i data-lucide="clock" class="w-8 h-8 text-beige mb-4"></i>
                    <h4 class="text-xl font-medium mb-2">Sessões de 50 minutos</h4>
                    <p class="text-sm text-beige-dark opacity-80">Tempo ideal para aprofundar as questões com foco e qualidade em cada encontro.</p>
                </div>
                <div class="bg-olive-dark/50 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                    <i data-lucide="calendar" class="w-8 h-8 text-beige mb-4"></i>
                    <h4 class="text-xl font-medium mb-2">Frequência Semanal</h4>
                    <p class="text-sm text-beige-dark opacity-80">Encontros semanais recomendados inicialmente, podendo ser ajustados conforme sua necessidade e evolução.</p>
                </div>
                <div class="bg-olive-dark/50 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                    <i data-lucide="monitor-smartphone" class="w-8 h-8 text-beige mb-4"></i>
                    <h4 class="text-xl font-medium mb-2">Online e Presencial</h4>
                    <p class="text-sm text-beige-dark opacity-80">Flexibilidade de escolha. Atendimento presencial em Recife ou online para qualquer lugar do mundo.</p>
                </div>
                <div class="bg-olive-dark/50 p-6 rounded-xl border border-white/10 backdrop-blur-sm">
                    <i data-lucide="shield-check" class="w-8 h-8 text-beige mb-4"></i>
                    <h4 class="text-xl font-medium mb-2">Regras Claras</h4>
                    <p class="text-sm text-beige-dark opacity-80">Políticas de pagamento e cancelamento definidas previamente para garantir a organização e respeito mútuo.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 5. Galeria do Consultório -->
<section id="galeria" class="py-20 lg:py-20 bg-beige overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-12">
            <div class="max-w-3xl">
                <h2 class="text-olive font-semibold tracking-wider text-sm uppercase mb-2">Galeria</h2>
                <h3 class="text-3xl sm:text-4xl font-serif text-textDark mb-4">Conheça o consultório</h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Um espaço pensado para acolher você com conforto, privacidade e tranquilidade durante o processo terapêutico.
                </p>
            </div>
            <a href="#localizacao" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-gray-50 text-olive-dark px-6 py-3 rounded-full font-medium transition-all shadow-sm border border-olive/10">
                Ver endereço
                <i data-lucide="map-pin" class="w-4 h-4"></i>
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 auto-rows-[170px] sm:auto-rows-[220px] lg:auto-rows-[250px]">
            <?php foreach ($galeriaConsultorio as $index => $foto): ?>
                <?php
                $classeDestaque = match ($index) {
                    0 => 'col-span-2 row-span-2',
                    4 => 'md:row-span-2',
                    9 => 'md:col-span-2',
                    default => '',
                };
                ?>
                <button
                    type="button"
                    class="group relative overflow-hidden rounded-2xl bg-white shadow-sm border border-white/70 focus:outline-none focus:ring-4 focus:ring-olive/30 <?= $classeDestaque ?>"
                    data-gallery-index="<?= (int)$index ?>"
                    data-gallery-src="<?= $asset('assets/galeria-consultorio/' . $foto['arquivo']) ?>"
                    data-gallery-alt="<?= htmlspecialchars($foto['alt'], ENT_QUOTES, 'UTF-8') ?>"
                    aria-label="Ampliar foto do consultório">
                    <img
                        src="<?= $asset('assets/galeria-consultorio/' . $foto['arquivo']) ?>"
                        alt="<?= htmlspecialchars($foto['alt'], ENT_QUOTES, 'UTF-8') ?>"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        loading="lazy"
                        decoding="async">
                    <span class="absolute inset-0 bg-gradient-to-t from-black/45 via-black/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></span>
                    <span class="absolute left-4 bottom-4 hidden sm:inline-flex items-center gap-2 text-white text-sm font-medium opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all drop-shadow">
                        <i data-lucide="maximize-2" class="w-4 h-4"></i>
                        Ampliar foto
                    </span>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Modal da Galeria -->
<div id="gallery-modal" class="fixed inset-0 z-[80] hidden items-center justify-center bg-black/85 backdrop-blur-sm px-4 py-6" aria-hidden="true">
    <button type="button" id="gallery-modal-close" class="absolute top-5 right-5 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors" aria-label="Fechar galeria">
        <i data-lucide="x" class="w-6 h-6"></i>
    </button>

    <button type="button" id="gallery-modal-prev" class="absolute left-4 md:left-8 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors" aria-label="Foto anterior">
        <i data-lucide="chevron-left" class="w-7 h-7"></i>
    </button>

    <figure class="w-full max-w-5xl">
        <img id="gallery-modal-img" src="" alt="" class="mx-auto max-h-[82vh] w-auto max-w-full rounded-2xl object-contain shadow-2xl">
        <figcaption id="gallery-modal-caption" class="mt-4 text-center text-sm text-white/80"></figcaption>
    </figure>

    <button type="button" id="gallery-modal-next" class="absolute right-4 md:right-8 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors" aria-label="Próxima foto">
        <i data-lucide="chevron-right" class="w-7 h-7"></i>
    </button>
</div>

<!-- 6. Depoimentos (Prova Social) -->
<section class="py-20 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-olive font-semibold tracking-wider text-sm uppercase mb-2">Depoimentos</h2>
            <h3 class="text-3xl sm:text-4xl font-serif text-textDark mb-4">A experiência de quem já cuidou de si</h3>
            <p class="text-gray-600">Relatos reais de pacientes (identidades preservadas por ética profissional).</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Depoimento 1 -->
            <div class="bg-beige p-8 rounded-2xl relative">
                <i data-lucide="quote" class="w-10 h-10 text-olive/20 absolute top-6 right-6"></i>
                <div class="flex text-yellow-500 mb-4">
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                </div>
                <p class="text-gray-700 italic mb-6">"Começar a terapia com a Daniella foi o melhor investimento que fiz em mim mesma. A abordagem direta e ao mesmo tempo extremamente acolhedora me ajudou a sair de crises severas de ansiedade."</p>
                <p class="font-semibold text-sm text-textDark">- Paciente, Mulher, 32 anos</p>
            </div>

            <!-- Depoimento 2 -->
            <div class="bg-beige p-8 rounded-2xl relative">
                <i data-lucide="quote" class="w-10 h-10 text-olive/20 absolute top-6 right-6"></i>
                <div class="flex text-yellow-500 mb-4">
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                </div>
                <p class="text-gray-700 italic mb-6">"Fizemos terapia de casal quando achávamos que não tinha mais jeito. A forma como ela conduziu as sessões nos ensinou a comunicar o que realmente sentíamos sem atacar o outro."</p>
                <p class="font-semibold text-sm text-textDark">- Paciente, Casal em Terapia</p>
            </div>

            <!-- Depoimento 3 -->
            <div class="bg-beige p-8 rounded-2xl relative">
                <i data-lucide="quote" class="w-10 h-10 text-olive/20 absolute top-6 right-6"></i>
                <div class="flex text-yellow-500 mb-4">
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                </div>
                <p class="text-gray-700 italic mb-6">"O preparo para a bariátrica me deixava apavorado. As sessões foram fundamentais para entender minha relação emocional com a comida e hoje sigo firme no pós-operatório com muito mais consciência."</p>
                <p class="font-semibold text-sm text-textDark">- Paciente, Homem, 45 anos</p>
            </div>
        </div>
    </div>
</section>

<!-- 7. Localização e Contato -->
<section id="localizacao" class="py-20 lg:py-20 bg-beige">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100">

            <!-- Info e Form -->
            <div class="p-8 lg:p-12">
                <h2 class="text-3xl font-serif text-textDark mb-6">Vamos conversar?</h2>
                <p class="text-gray-600 mb-8">Agende sua sessão ou envie uma mensagem para tirar dúvidas sobre o processo terapêutico.</p>

                <div class="space-y-6 mb-10">
                    <div class="flex items-start">
                        <i data-lucide="map-pin" class="w-6 h-6 text-olive mr-4 flex-shrink-0"></i>
                        <div>
                            <h4 class="font-semibold text-textDark">Endereço Presencial</h4>
                            <p class="text-gray-600 text-sm">Av. República do Líbano, 251<br>Rio mar Trade Center, Torre 4, Sala 502<br>Pina, Recife - PE</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i data-lucide="map-pin" class="w-6 h-6 text-olive mr-4 flex-shrink-0"></i>
                        <div>
                            <h4 class="font-semibold text-textDark">Endereço Presencial</h4>
                            <p class="text-gray-600 text-sm">Rua Professora Anunciada da Rocha Melo, 214<br>Empresarial Melo Gouveia, sala 801<br>Madalena - Recife PE</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i data-lucide="smartphone" class="w-6 h-6 text-olive mr-4 flex-shrink-0"></i>
                        <div>
                            <h4 class="font-semibold text-textDark">WhatsApp</h4>
                            <p class="text-gray-600 text-sm">(81) 98811-1601</p>
                        </div>
                    </div>
                </div>

                <!-- Formulário Rápido de Contato -->
                <form id="lead-whatsapp-form" class="space-y-5" action="<?= BASE_URL ?>/lead/enviar" method="post">
                    <div>
                        <label for="nome" class="block text-base font-semibold text-textDark mb-2">Nome <span class="text-olive-dark">*</span></label>
                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            required
                            autocomplete="name"
                            placeholder="Seu nome aqui"
                            class="w-full px-4 py-3 rounded-none bg-white border border-olive-dark/40 focus:outline-none focus:ring-2 focus:ring-olive/30 focus:border-olive transition-colors placeholder:text-gray-400">
                    </div>

                    <div class="grid md:grid-cols-2 gap-5 md:gap-8">
                        <div>
                            <label for="email" class="block text-base font-semibold text-textDark mb-2">Email <span class="text-olive-dark">*</span></label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                autocomplete="email"
                                placeholder="exemplo@email.com"
                                class="w-full px-4 py-3 rounded-none bg-white border border-olive-dark/40 focus:outline-none focus:ring-2 focus:ring-olive/30 focus:border-olive transition-colors placeholder:text-gray-400">
                        </div>

                        <div>
                            <label for="telefone" class="block text-base font-semibold text-textDark mb-2">Telefone <span class="text-olive-dark">*</span></label>
                            <input
                                type="tel"
                                id="telefone"
                                name="telefone"
                                required
                                autocomplete="tel"
                                inputmode="tel"
                                maxlength="15"
                                placeholder="(DD) 9 0000-0000"
                                class="w-full px-4 py-3 rounded-none bg-white border border-olive-dark/40 focus:outline-none focus:ring-2 focus:ring-olive/30 focus:border-olive transition-colors placeholder:text-gray-400">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-5 md:gap-8">
                        <div>
                            <label for="assunto" class="block text-base font-semibold text-textDark mb-2">como posso te ajudar? <span class="text-olive-dark">*</span></label>
                            <select
                                id="assunto"
                                name="assunto"
                                required
                                class="w-full px-4 py-3 rounded-none bg-white border border-olive-dark/40 focus:outline-none focus:ring-2 focus:ring-olive/30 focus:border-olive transition-colors text-gray-700">
                                <option value="">Selecione...</option>
                                <option value="Psicoterapia">Psicoterapia</option>
                                <option value="Terapia sexual e casal">Terapia sexual e casal</option>
                                <option value="Acompanhamento bariátrica">Acompanhamento bariátrica</option>
                            </select>
                        </div>

                        <div>
                            <label for="formato_sessao" class="block text-base font-semibold text-textDark mb-2">Formato da sessão:</label>
                            <select
                                id="formato_sessao"
                                name="formato_sessao"
                                class="w-full px-4 py-3 rounded-none bg-white border border-olive-dark/40 focus:outline-none focus:ring-2 focus:ring-olive/30 focus:border-olive transition-colors text-gray-700">
                                <option value="">Selecione...</option>
                                <option value="Presencial">Presencial</option>
                                <option value="Online">Online</option>
                                <option value="Presencial ou Online">Presencial ou Online</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="mensagem" class="block text-base font-semibold text-textDark mb-2">Mensagem <span class="text-olive-dark">*</span></label>
                        <textarea
                            id="mensagem"
                            name="mensagem"
                            required
                            rows="5"
                            placeholder="Digite aqui"
                            class="w-full px-4 py-3 rounded-none bg-white border border-olive-dark/40 focus:outline-none focus:ring-2 focus:ring-olive/30 focus:border-olive transition-colors placeholder:text-gray-400 resize-y"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-olive hover:bg-olive-dark text-white font-medium py-3.5 rounded-lg transition-colors flex items-center justify-center gap-2 disabled:opacity-70 disabled:cursor-not-allowed shadow-md hover:shadow-lg">
                        <span>Enviar Mensagem</span>
                        <i data-lucide="send" class="w-4 h-4"></i>
                    </button>
                </form>
            </div>

            <!-- Imagens e Mapa -->
            <div class="h-full flex flex-col">
                <!-- Espaço para as fotos do consultório que serão enviadas -->
                <div class="h-64 bg-gray-200 relative group overflow-hidden">
                    <img src="<?= $asset('assets/img/consultorio.jpeg') ?>" alt="Consultório" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <span class="text-white font-medium drop-shadow-md">Conheça o espaço</span>
                    </div>
                </div>
                <!-- Mapa do Google -->
                <div class="flex-1 min-h-[300px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.155498877144!2d-34.89437168467543!3d-8.086202494178553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f1e9c2c62c7%3A0x8e8eb4b74ebf4ab!2sRioMar%20Trade%20Center!5e0!3m2!1spt-BR!2sbr!4v1684801234567!5m2!1spt-BR!2sbr"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-textDark text-white py-12 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8 items-center text-center md:text-left">
            <!-- Brand -->
            <div>
                <img src="<?= $asset('assets/logo/logo-daniella-horizontal-light.svg') ?>" alt="Daniella Paes Barreto Psicologia" class="h-16 md:h-20 w-auto mx-auto md:mx-0 mb-3" loading="lazy" decoding="async">
                <p class="text-gray-400 text-sm mb-4">Psicóloga Clínica • CRP 02/19051</p>

                <a href="https://www.instagram.com/psi.daniellapb" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm text-beige hover:text-white transition-colors border border-white/10 hover:border-beige/60 rounded-full px-4 py-2">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="2"></rect>
                        <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2"></circle>
                        <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"></circle>
                    </svg>
                    @psi.daniellapb
                </a>
            </div>

            <!-- Links -->
            <div class="flex flex-col space-y-2 text-sm text-gray-400">
                <a href="#sobre" class="hover:text-beige transition-colors">Sobre mim</a>
                <a href="#servicos" class="hover:text-beige transition-colors">Especialidades</a>
                <a href="#atendimento" class="hover:text-beige transition-colors">Política de Atendimento</a>
            </div>

            <!-- Copyright -->
            <div class="md:text-right text-gray-500 text-sm">
                <p>&copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Daniella Paes Barreto.</p>
                <p>Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Botão Flutuante do WhatsApp -->
<a href="https://wa.me/5581988111601?text=Olá,%20gostaria%20de%20agendar%20uma%20consulta." target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:bg-[#1ebd5a] hover:scale-110 transition-all z-50 flex items-center justify-center animate-bounce group">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
    </svg>
    <span class="absolute right-16 bg-white text-gray-800 text-sm py-1 px-3 rounded-full shadow-md whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none font-medium">Fale comigo!</span>
</a>

<!-- Scripts de Interatividade -->
<script>
    // Inicializa os ícones do Lucide
    if (window.lucide) {
        lucide.createIcons();
    }

    // Menu Mobile Toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }

    // Fechar menu mobile ao clicar em um link
    const mobileLinks = menu ? menu.querySelectorAll('a') : [];
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
        });
    });



    // Galeria do consultório com modal simples
    const galleryButtons = Array.from(document.querySelectorAll('[data-gallery-src]'));
    const galleryModal = document.getElementById('gallery-modal');
    const galleryModalImg = document.getElementById('gallery-modal-img');
    const galleryModalCaption = document.getElementById('gallery-modal-caption');
    const galleryModalClose = document.getElementById('gallery-modal-close');
    const galleryModalPrev = document.getElementById('gallery-modal-prev');
    const galleryModalNext = document.getElementById('gallery-modal-next');
    let currentGalleryIndex = 0;

    const openGalleryModal = (index) => {
        if (!galleryModal || !galleryModalImg || galleryButtons.length === 0) {
            return;
        }

        currentGalleryIndex = (index + galleryButtons.length) % galleryButtons.length;
        const selected = galleryButtons[currentGalleryIndex];
        const src = selected.getAttribute('data-gallery-src') || '';
        const alt = selected.getAttribute('data-gallery-alt') || 'Foto do consultório';

        galleryModalImg.src = src;
        galleryModalImg.alt = alt;

        if (galleryModalCaption) {
            galleryModalCaption.textContent = `${currentGalleryIndex + 1} de ${galleryButtons.length} • ${alt}`;
        }

        galleryModal.classList.remove('hidden');
        galleryModal.classList.add('flex');
        galleryModal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');
    };

    const closeGalleryModal = () => {
        if (!galleryModal) {
            return;
        }

        galleryModal.classList.add('hidden');
        galleryModal.classList.remove('flex');
        galleryModal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');

        if (galleryModalImg) {
            galleryModalImg.src = '';
        }
    };

    galleryButtons.forEach((button, index) => {
        button.addEventListener('click', () => openGalleryModal(index));
    });

    if (galleryModalClose) {
        galleryModalClose.addEventListener('click', closeGalleryModal);
    }

    if (galleryModalPrev) {
        galleryModalPrev.addEventListener('click', () => openGalleryModal(currentGalleryIndex - 1));
    }

    if (galleryModalNext) {
        galleryModalNext.addEventListener('click', () => openGalleryModal(currentGalleryIndex + 1));
    }

    if (galleryModal) {
        galleryModal.addEventListener('click', (event) => {
            if (event.target === galleryModal) {
                closeGalleryModal();
            }
        });
    }

    document.addEventListener('keydown', (event) => {
        if (!galleryModal || galleryModal.classList.contains('hidden')) {
            return;
        }

        if (event.key === 'Escape') {
            closeGalleryModal();
        }

        if (event.key === 'ArrowLeft') {
            openGalleryModal(currentGalleryIndex - 1);
        }

        if (event.key === 'ArrowRight') {
            openGalleryModal(currentGalleryIndex + 1);
        }
    });

    // Máscara do campo Telefone: aceita somente números e formata como (00) 00000-0000
    const telefoneInput = document.getElementById('telefone');

    const normalizarTelefoneBrasil = (value) => {
        let digits = String(value || '').replace(/\D/g, '');

        // Caso o visitante cole com +55, mantém apenas DDD + número.
        if (digits.startsWith('55') && digits.length > 11) {
            digits = digits.slice(2);
        }

        return digits.slice(0, 11);
    };

    const aplicarMascaraTelefone = (value) => {
        const digits = normalizarTelefoneBrasil(value);

        if (digits.length === 0) {
            return '';
        }

        if (digits.length <= 2) {
            return `(${digits}`;
        }

        if (digits.length <= 6) {
            return `(${digits.slice(0, 2)}) ${digits.slice(2)}`;
        }

        if (digits.length <= 10) {
            return `(${digits.slice(0, 2)}) ${digits.slice(2, 6)}-${digits.slice(6)}`;
        }

        return `(${digits.slice(0, 2)}) ${digits.slice(2, 7)}-${digits.slice(7, 11)}`;
    };

    if (telefoneInput) {
        telefoneInput.addEventListener('input', () => {
            telefoneInput.value = aplicarMascaraTelefone(telefoneInput.value);
        });

        telefoneInput.addEventListener('paste', () => {
            setTimeout(() => {
                telefoneInput.value = aplicarMascaraTelefone(telefoneInput.value);
            }, 0);
        });
    }

    // Envio do formulário para o endpoint PHP, que confirma se salvou no Google Sheets
    const leadForm = document.getElementById('lead-whatsapp-form');
    const whatsappDestino = '5581988111601';

    const emailValido = (email) => {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(String(email || '').trim());
    };

    if (leadForm) {
        leadForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            const baseUrl = <?= json_encode(BASE_URL, JSON_UNESCAPED_SLASHES) ?>;
            const endpointPrincipal = leadForm.getAttribute('action') || `${baseUrl}/lead/enviar`;
            const endpointCandidates = [
                endpointPrincipal,
                `${baseUrl}/lead/enviar`,
                `${baseUrl}/lead-enviar`,
                `${baseUrl}/lead-enviar.php`
            ].filter((value, index, array) => value && array.indexOf(value) === index);

            const submitButton = leadForm.querySelector('button[type="submit"]');
            const originalButtonContent = submitButton ? submitButton.innerHTML : '';
            const formData = new FormData(leadForm);

            const nome = String(formData.get('nome') || '').trim();
            const email = String(formData.get('email') || '').trim();
            const telefone = String(formData.get('telefone') || '').trim();
            const telefoneLimpo = normalizarTelefoneBrasil(telefone);
            const assunto = String(formData.get('assunto') || '').trim();
            const formatoSessao = String(formData.get('formato_sessao') || '').trim();
            const mensagem = String(formData.get('mensagem') || '').trim();

            if (!nome || !email || !telefone || !assunto || !mensagem) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Dados incompletos',
                    text: 'Preencha nome, email, telefone, como posso te ajudar e mensagem.',
                    confirmButtonText: 'Entendi',
                    confirmButtonColor: '#6b7754'
                });
                return;
            }

            if (!emailValido(email)) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Email inválido',
                    text: 'Informe um email válido. Exemplo: exemplo@email.com.',
                    confirmButtonText: 'Entendi',
                    confirmButtonColor: '#6b7754'
                });
                return;
            }

            if (telefoneLimpo.length < 10 || telefoneLimpo.length > 11) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Telefone inválido',
                    text: 'Informe um número com DDD. Exemplo: (81) 99999-9999.',
                    confirmButtonText: 'Entendi',
                    confirmButtonColor: '#6b7754'
                });

                if (telefoneInput) {
                    telefoneInput.focus();
                }

                return;
            }

            if (telefoneInput) {
                telefoneInput.value = aplicarMascaraTelefone(telefoneLimpo);
                formData.set('telefone', telefoneInput.value);
            }

            try {
                if (submitButton) {
                    submitButton.disabled = true;
                    submitButton.innerHTML = '<span>Enviando...</span><i data-lucide="loader-circle" class="w-4 h-4 animate-spin"></i>';
                    if (window.lucide) {
                        lucide.createIcons();
                    }
                }

                const enviarParaEndpoint = async () => {
                    let ultimoErro = null;

                    for (const endpoint of endpointCandidates) {
                        const tentativaFormData = new FormData(leadForm);

                        if (telefoneInput) {
                            tentativaFormData.set('telefone', telefoneInput.value);
                        }

                        try {
                            const response = await fetch(endpoint, {
                                method: 'POST',
                                headers: {
                                    'Accept': 'application/json'
                                },
                                body: tentativaFormData
                            });

                            const responseText = await response.text();
                            let resultJson = null;

                            try {
                                resultJson = JSON.parse(responseText);
                            } catch (parseError) {
                                ultimoErro = new Error('Endpoint sem JSON: ' + endpoint + '. Resposta: ' + responseText.substring(0, 180));

                                // Se caiu na página 404 do MVC/Apache, tenta o próximo caminho.
                                if (response.status === 404 || /Página não encontrada|Not Found/i.test(responseText)) {
                                    continue;
                                }

                                throw ultimoErro;
                            }

                            if (!response.ok || !resultJson || resultJson.status !== 'success') {
                                ultimoErro = new Error(resultJson && resultJson.message ? resultJson.message : 'Não foi possível salvar os dados na planilha.');

                                // Se o endpoint respondeu 404 em JSON, tenta o próximo caminho.
                                if (response.status === 404) {
                                    continue;
                                }

                                throw ultimoErro;
                            }

                            return resultJson;
                        } catch (errorEndpoint) {
                            ultimoErro = errorEndpoint;

                            // Erro de rota inexistente: continua tentando os demais caminhos.
                            if (/Página não encontrada|Not Found|Endpoint sem JSON/i.test(String(errorEndpoint.message || errorEndpoint))) {
                                continue;
                            }

                            throw errorEndpoint;
                        }
                    }

                    throw ultimoErro || new Error('Nenhum endpoint de envio foi encontrado. Verifique as rotas lead/enviar, lead-enviar e lead-enviar.php.');
                };

                await enviarParaEndpoint();

                leadForm.reset();

                const mensagemWhatsapp = encodeURIComponent(
                    `Olá, me chamo ${nome}. Vim pelo site e gostaria de atendimento.\n\n` +
                    `Email: ${email}\n` +
                    `Telefone: ${telefone}\n` +
                    `Como posso te ajudar: ${assunto}\n` +
                    `Formato da sessão: ${formatoSessao || 'Não informado'}\n` +
                    `Mensagem: ${mensagem}`
                );

                const swalResult = await Swal.fire({
                    icon: 'success',
                    title: 'Mensagem enviada com sucesso!',
                    html: 'Seus dados foram salvos na planilha e em breve entraremos em contato.<br><br>Você também pode iniciar a conversa agora pelo WhatsApp.',
                    confirmButtonText: 'Chamar no WhatsApp',
                    cancelButtonText: 'Fechar',
                    showCancelButton: true,
                    confirmButtonColor: '#6b7754',
                    cancelButtonColor: '#6b7280',
                    background: '#ffffff',
                    color: '#2D3748'
                });

                if (swalResult.isConfirmed) {
                    window.open(`https://wa.me/${whatsappDestino}?text=${mensagemWhatsapp}`, '_blank', 'noopener,noreferrer');
                }
            } catch (error) {
                console.error('Erro ao enviar lead para Google Sheets:', error);

                Swal.fire({
                    icon: 'error',
                    title: 'Não foi possível enviar',
                    html: `${String(error.message || error).replace(/</g, '&lt;').replace(/>/g, '&gt;')}<br><br>Você pode chamar diretamente pelo WhatsApp enquanto ajustamos o envio.`,
                    confirmButtonText: 'Entendi',
                    confirmButtonColor: '#6b7754'
                });
            } finally {
                if (submitButton) {
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalButtonContent;
                    if (window.lucide) {
                        lucide.createIcons();
                    }
                }
            }
        });
    }
</script>