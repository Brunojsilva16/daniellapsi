<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function index(): void
    {
        $this->render('home', [
            'title' => 'Daniella Paes Barreto | Psicóloga Clínica - CRP 02/19051',
            'metaDescription' => 'Psicóloga Clínica em Recife. Terapia Cognitivo-Comportamental para adultos e casais. Ansiedade, depressão, compulsão alimentar e acompanhamento bariátrico.',
            'fullWidthLayout' => true,
            'hideHeaderNav' => true,
            'htmlClass' => 'scroll-smooth',
            'bodyClass' => 'font-sans text-textDark bg-white antialiased',
            'tailwindConfig' => <<<'JS'
{
    theme: {
        extend: {
            colors: {
                olive: {
                    DEFAULT: '#6b7754',
                    light: '#8a9671',
                    dark: '#4f593e'
                },
                beige: {
                    DEFAULT: '#F5F2EB',
                    dark: '#E8E4D9'
                },
                textDark: '#2D3748'
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                serif: ['Lora', 'serif']
            }
        }
    }
}
JS,
            'headContent' => <<<'HTML'
<!-- ========================================== -->
<!-- TAGS DE ADS E RASTREAMENTO (Substituir os IDs) -->
<!-- ========================================== -->

<!-- Google Tag Manager / Google Ads (Substituir G-XXXXXXXXXX ou AW-XXXXXXXXX) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-XXXXXXXXX"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    // gtag('config', 'AW-XXXXXXXXX');
</script>

<!-- Meta Pixel Code (Substituir XXXXXXXXXXXXXXX pelo seu ID do Pixel) -->
<script>
/*
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', 'XXXXXXXXXXXXXXX');
    fbq('track', 'PageView');
*/
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=XXXXXXXXXXXXXXX&ev=PageView&noscript=1" alt=""></noscript>
<!-- End Meta Pixel Code -->

<!-- ========================================== -->

<!-- SweetAlert2 para retorno visual do formulário -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
HTML,
            'beforeBodyClose' => '',
        ]);
    }

    public function notFound(): void
    {
        http_response_code(404);
        $this->render('404', [
            'title' => 'Página não encontrada',
            'bodyClass' => 'bg-gray-100 text-gray-900',
        ]);
    }
}
