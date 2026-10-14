<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <title>Escola Infantil Pequenos Exploradores</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&amp;family=Outfit:wght@500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed-variant": "#004e5f",
                        "on-secondary-container": "#6b4b00",
                        "on-primary-fixed": "#001f27",
                        "tertiary-fixed-dim": "#75daa8",
                        "primary-fixed": "#b2ebff",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#92f7c3",
                        "on-surface": "#001e2f",
                        "primary-container": "#219ebc",
                        "outline": "#6e797d",
                        "surface-bright": "#f6faff",
                        "on-tertiary-container": "#00321f",
                        "primary": "#00677d",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#002f3a",
                        "surface": "#f6faff",
                        "inverse-on-surface": "#e5f2ff",
                        "secondary-fixed-dim": "#ffba27",
                        "secondary": "#7d5800",
                        "secondary-fixed": "#ffdea9",
                        "on-tertiary-fixed-variant": "#005235",
                        "surface-container-high": "#d4ebff",
                        "surface-tint": "#00677d",
                        "surface-variant": "#c8e6ff",
                        "on-surface-variant": "#3e484d",
                        "surface-container-highest": "#c8e6ff",
                        "on-secondary-fixed": "#271900",
                        "error-container": "#ffdad6",
                        "surface-container-low": "#ebf5ff",
                        "on-background": "#001e2f",
                        "error": "#ba1a1a",
                        "inverse-primary": "#69d4f4",
                        "inverse-surface": "#07344b",
                        "outline-variant": "#bdc8cd",
                        "tertiary-container": "#3ca376",
                        "background": "#f6faff",
                        "tertiary": "#006c48",
                        "surface-container": "#e0f0ff",
                        "on-tertiary-fixed": "#002113",
                        "on-primary": "#ffffff",
                        "surface-dim": "#b9dffc",
                        "secondary-container": "#ffb702",
                        "on-error-container": "#93000a",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed-dim": "#69d4f4",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed-variant": "#5e4100"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "space-xl": "3rem",
                        "margin-desktop": "3rem",
                        "space-md": "1.25rem",
                        "gutter-tablet": "1.5rem",
                        "space-xs": "0.375rem",
                        "gutter-desktop": "2rem",
                        "margin-tablet": "2rem",
                        "margin": "1.25rem",
                        "space-lg": "2rem",
                        "space-sm": "0.75rem",
                        "gutter": "1rem"
                    },
                    "fontFamily": {
                        "headline-sm": ["Outfit"],
                        "headline-lg": ["Outfit"],
                        "body-md": ["Nunito Sans"],
                        "label-lg": ["Outfit"],
                        "headline-lg-mobile": ["Outfit"],
                        "headline-md": ["Outfit"],
                        "headline-md-mobile": ["Outfit"],
                        "label-sm": ["Outfit"],
                        "body-sm": ["Nunito Sans"],
                        "headline-xl": ["Outfit"],
                        "label-md": ["Outfit"],
                        "headline-xl-mobile": ["Outfit"],
                        "body-lg": ["Nunito Sans"]
                    },
                    "fontSize": {
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "label-lg": ["16px", {
                            "lineHeight": "22px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["26px", {
                            "lineHeight": "34px",
                            "fontWeight": "700"
                        }],
                        "headline-md": ["28px", {
                            "lineHeight": "36px",
                            "fontWeight": "600"
                        }],
                        "headline-md-mobile": ["22px", {
                            "lineHeight": "30px",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "700"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "headline-xl": ["44px", {
                            "lineHeight": "52px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "18px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-xl-mobile": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-background font-body-md text-on-surface antialiased">
    <header class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(2,48,71,0.06)]">
        <div class="h-20 w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop flex items-center justify-between gap-space-sm">
            <div class="flex items-center gap-space-sm"><img alt="Logo Pequenos Exploradores" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCseoX65pp96bZGSP2QNOWjuw4LrJIeognyXnxPgKdG5XL_YO31moAew6ajqfUM_6ubesdjyZr3sa0oLIijkwUYbauorER2bvTjltY9JcU3kiwArQ7NQ5WNX4E0AKT7k-jjwmHAAjl08U3YGRAMwkC0iwCFXZWXOS9IxCEHa3dnv7mdiEbqjEcMb2oeVt80FJTO9-Nn9j81WwaUPzu6SHemQeldAie_R4ZRw5pRm4zV_pBCJscbNr7p" /><span class="font-headline-sm text-headline-sm text-primary tracking-tight">Pequenos Exploradores</span></div>
            <nav class="hidden xl:flex items-center gap-space-xs" data-active-classes="bg-surface-container-high text-primary font-bold rounded-full shadow-[0_2px_10px_rgba(2,48,71,0.04)]"><a aria-current="page" class="px-space-sm py-space-xs transition-all bg-surface-container-high text-primary font-bold rounded-full shadow-[0_2px_10px_rgba(2,48,71,0.04)]" data-path="inicio" href="#">Início</a><a class="px-space-sm py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all" data-path="proposta-pedagogica" href="#">Proposta Pedagógica</a><a class="px-space-sm py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all" data-path="niveis-de-ensino" href="#">Níveis de Ensino</a><a class="px-space-sm py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all" data-path="estrutura-e-espacos" href="#">Estrutura e Espaços</a><a class="px-space-sm py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-all" data-path="depoimentos" href="#">Depoimentos</a></nav>
            <div class="flex items-center gap-space-sm"><a class="hidden sm:inline-flex items-center justify-center px-space-md py-space-xs rounded-full bg-secondary-container text-on-secondary-container font-label-md text-label-md shadow-[0_4px_14px_rgba(255,183,2,0.35)] hover:bg-secondary hover:text-on-secondary transition-all transform hover:-translate-y-0.5" data-path="agendar-visita" href="#">Agendar Visita</a><a class="flex items-center gap-space-xs p-1 rounded-full hover:bg-surface-container-low transition-all" data-path="portal-da-familia" href="#" title="Portal da Família"><img alt="Profile" class="w-8 h-8 rounded-full object-cover ring-2 ring-secondary-container" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvunGJFguSGyiz30PaZrj3ZUHfrTKAhZD1uERT7dUqLDxHzNRJWH8PR8oWLcYeHmuQf9Ib0qP2YnNDNwIc0yGYNcD9RCv9sv9jviWpzpqsh3tvRjH0sitylmP6StS8GEkTbF0aoX2zVtzt_y5S4gDecXJRsxhJfeP1TKGOLQjr5PIt4uAU4zwasslKNCwJ_I8o9zkETYnKNsw_bLtQIeoW4Ck9EkYB1OVYSBOgKjqtN1pzQuh3MiI-" /></a><button aria-label="Menu Principal" class="xl:hidden p-space-xs rounded-xl bg-surface-container-low text-primary hover:bg-surface-container-high transition-colors" type="button"><span class="material-symbols-outlined">menu</span></button></div>
        </div>
    </header>
    <main class="w-full pt-20 bg-background">
        <div class="flex flex-col w-full">
            <!-- HERO SECTION -->
            <section class="relative w-full overflow-hidden bg-gradient-to-b from-surface-container-low via-surface to-surface-bright py-space-lg lg:py-space-xl">
                <!-- Ambient organic blobs -->
                <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-fixed/40 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute top-1/2 -right-20 w-80 h-80 bg-secondary-fixed/50 rounded-full blur-3xl pointer-events-none"></div>
                <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
                        <!-- Left Column: Copy & CTAs -->
                        <div class="lg:col-span-7 space-y-space-md">
                            <!-- Tag pill -->
                            <div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-secondary-fixed text-on-secondary-fixed text-label-sm font-label-sm shadow-sm">
                                <span class="material-symbols-outlined text-[18px] text-secondary">wb_sunny</span>
                                <span>Matrículas Abertas para o Ano Letivo 2025</span>
                            </div>
                            <!-- Title -->
                            <h1 class="font-headline-xl text-headline-xl text-primary tracking-tight">
                                Onde cada descoberta começa com <span class="text-secondary-container underline decoration-wavy decoration-2">amor</span>, brincadeira e segurança.
                            </h1>
                            <!-- Empathic Subtitle -->
                            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                                Educação infantil afetiva e bilíngue dos 4 meses aos 5 anos. Estimulamos a autonomia, a curiosidade viva e a imaginação sensível em um ambiente cercado pela natureza.
                            </p>
                            <!-- CTAs -->
                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-sm pt-space-xs">
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-4 rounded-full bg-secondary-container text-on-secondary-container font-label-lg text-label-lg shadow-[0_8px_20px_rgba(255,183,2,0.35)] hover:bg-secondary hover:text-on-secondary transition-all transform hover:-translate-y-1 text-center" href="#agendamento">
                                    <span class="material-symbols-outlined">calendar_month</span>
                                    <span>Agendar Visita Guiada</span>
                                </a>
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-4 rounded-full bg-surface-container-high text-primary font-label-lg text-label-lg hover:bg-primary-container hover:text-on-primary transition-all text-center" href="#niveis-ensino">
                                    <span class="material-symbols-outlined">explore</span>
                                    <span>Conhecer Metodologia</span>
                                </a>
                            </div>
                            <!-- Trust Badges -->
                            <div class="pt-space-md grid grid-cols-1 sm:grid-cols-3 gap-space-xs">
                                <div class="flex items-center gap-space-xs bg-surface-container-lowest p-space-xs rounded-xl shadow-sm">
                                    <span class="w-9 h-9 rounded-full bg-primary-fixed flex items-center justify-center text-primary shrink-0">
                                        <span class="material-symbols-outlined text-[20px]">videocam</span>
                                    </span>
                                    <span class="font-label-sm text-label-sm text-on-surface leading-tight">100% monitorado por câmeras</span>
                                </div>
                                <div class="flex items-center gap-space-xs bg-surface-container-lowest p-space-xs rounded-xl shadow-sm">
                                    <span class="w-9 h-9 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary shrink-0">
                                        <span class="material-symbols-outlined text-[20px]">restaurant</span>
                                    </span>
                                    <span class="font-label-sm text-label-sm text-on-surface leading-tight">Nutrição balanceada inclusa</span>
                                </div>
                                <div class="flex items-center gap-space-xs bg-surface-container-lowest p-space-xs rounded-xl shadow-sm">
                                    <span class="w-9 h-9 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary shrink-0">
                                        <span class="material-symbols-outlined text-[20px]">groups</span>
                                    </span>
                                    <span class="font-label-sm text-label-sm text-on-surface leading-tight">Turmas reduzidas (máx. 12)</span>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column: Visual Collage with Overlays -->
                        <div class="lg:col-span-5 relative">
                            <div class="relative mx-auto max-w-md lg:max-w-none">
                                <!-- Main Hero Image -->
                                <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_40px_-10px_rgba(2,48,71,0.18)] bg-surface-container">
                                    <img class="w-full h-[460px] object-cover" data-alt="A warm and joyful early childhood educator sitting in a sun-drenched Montessori classroom, smiling gently as she assists two happy toddlers building wooden colorful blocks on a soft carpet, surrounded by lush potted plants and natural sunlight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKpniAFb45zoxgZx70j4h_fm7nthdqp9C_YcAknMVwupy6khYbVLySH_SB9uQPB9DI3EpTXT81r30LM2zLUAz9zoFrfyU5agED6xoNpUYQ18GDSt1b66eJytKVcJrQqhjDRTAJ3VDlhhNAJkBzNOPVZpPZUU414rQGkqzJDSmoa2aO--Bs545-VbGwQCUc7dbmi49DxYqm6uk0YmEdGzOvSlXoTkBhMZ0892J36xDAjXKEgFJcyR0F" />
                                    <!-- Bottom gradient bar -->
                                    <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-on-surface/80 via-on-surface/20 to-transparent p-space-md text-surface">
                                        <p class="font-headline-sm text-headline-sm text-surface font-semibold">Vivências Sensoriais Diárias</p>
                                        <p class="font-body-sm text-body-sm text-surface-variant">Afeto, escuta ativa e descobertas naturais a cada instante.</p>
                                    </div>
                                </div>
                                <!-- Floating Stamp Card 1 -->
                                <div class="absolute -bottom-6 -left-6 bg-surface-container-lowest p-space-sm rounded-2xl shadow-[0_10px_25px_rgba(2,48,71,0.12)] flex items-center gap-space-xs">
                                    <div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary shrink-0">
                                        <span class="material-symbols-outlined text-[26px]">spa</span>
                                    </div>
                                    <div>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant">Espaço Ecológico</p>
                                        <p class="font-headline-sm text-[16px] text-tertiary font-bold">1.200m² ao Ar Livre</p>
                                    </div>
                                </div>
                                <!-- Floating Stamp Card 2 -->
                                <div class="hidden sm:flex absolute -top-5 -right-4 bg-surface-container-lowest p-space-xs px-space-sm rounded-2xl shadow-[0_10px_25px_rgba(2,48,71,0.12)] items-center gap-space-xs">
                                    <span class="material-symbols-outlined text-secondary-container text-[24px]">verified</span>
                                    <p class="font-label-sm text-label-sm text-primary font-bold">Avaliação 4.9 de 5 ★</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SEÇÃO 2: DIFERENCIAIS PEDAGÓGICOS & PILARES -->
            <section class="w-full py-space-xl bg-surface-bright">
                <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
                    <!-- Section Header -->
                    <div class="text-center max-w-2xl mx-auto space-y-space-xs mb-space-lg">
                        <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Nossa Abordagem</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Pilares de uma Infância Feliz e Conectada</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Inspirados nas abordagens Reggio Emilia e Montessori, respeitamos o ritmo único de cada criança através da investigação, toque e afeto.
                        </p>
                    </div>
                    <!-- Bento Grid Differentials -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
                        <!-- Card 1 -->
                        <div class="group relative bg-surface-container-lowest p-space-md rounded-2xl shadow-[0_4px_20px_-2px_rgba(2,48,71,0.05)] hover:shadow-[0_12px_28px_-4px_rgba(33,158,188,0.18)] transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between">
                            <div class="space-y-space-sm">
                                <div class="w-14 h-14 rounded-2xl bg-primary-fixed flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                    <span class="material-symbols-outlined text-[30px]">toys</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Metodologia Ativa &amp; Lúdica</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Incentivo ao brincar heurístico, pesquisa com elementos não estruturados e desenvolvimento da criatividade e raciocínio investigativo.
                                </p>
                            </div>
                            <div class="pt-space-md flex items-center gap-space-xs text-primary font-label-sm text-label-sm">
                                <span>Inspirado em Reggio Emilia</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="group relative bg-surface-container-lowest p-space-md rounded-2xl shadow-[0_4px_20px_-2px_rgba(2,48,71,0.05)] hover:shadow-[0_12px_28px_-4px_rgba(33,158,188,0.18)] transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between">
                            <div class="space-y-space-sm">
                                <div class="w-14 h-14 rounded-2xl bg-secondary-fixed flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-on-secondary transition-colors">
                                    <span class="material-symbols-outlined text-[30px]">translate</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Bilinguismo Natural</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Imersão lúdica na língua inglesa por meio de contação de histórias, cantigas, rotinas culinárias e exploração sem cobranças gramaticais precoces.
                                </p>
                            </div>
                            <div class="pt-space-md flex items-center gap-space-xs text-secondary font-label-sm text-label-sm">
                                <span>Imersão Diária 100% Afetiva</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="group relative bg-surface-container-lowest p-space-md rounded-2xl shadow-[0_4px_20px_-2px_rgba(2,48,71,0.05)] hover:shadow-[0_12px_28px_-4px_rgba(33,158,188,0.18)] transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between">
                            <div class="space-y-space-sm">
                                <div class="w-14 h-14 rounded-2xl bg-tertiary-fixed flex items-center justify-center text-tertiary group-hover:bg-tertiary group-hover:text-on-tertiary transition-colors">
                                    <span class="material-symbols-outlined text-[30px]">potted_plant</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Espaço Verde &amp; Horta</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Contato diário com a terra, compostagem, plantio de mudas e árvores frutíferas. Consciência ecológica vivida na prática com pés descalços.
                                </p>
                            </div>
                            <div class="pt-space-md flex items-center gap-space-xs text-tertiary font-label-sm text-label-sm">
                                <span>Sustentabilidade Infantil</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="group relative bg-surface-container-lowest p-space-md rounded-2xl shadow-[0_4px_20px_-2px_rgba(2,48,71,0.05)] hover:shadow-[0_12px_28px_-4px_rgba(33,158,188,0.18)] transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between">
                            <div class="space-y-space-sm">
                                <div class="w-14 h-14 rounded-2xl bg-surface-variant flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-on-primary transition-colors">
                                    <span class="material-symbols-outlined text-[30px]">nutrition</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Cuidado Nutricional &amp; Afeto</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Alimentos orgânicos e cardápios elaborados por nutricionista pediátrica. Introdução alimentar acolhedora e educação socioemocional empática.
                                </p>
                            </div>
                            <div class="pt-space-md flex items-center gap-space-xs text-primary font-label-sm text-label-sm">
                                <span>Cozinha Própria Sem Ultraprocessados</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SEÇÃO 3: NÍVEIS DE ENSINO COM ABAS INTERATIVAS (JS) -->
            <section class="w-full py-space-xl bg-surface-container-low" id="niveis-ensino">
                <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
                    <div class="text-center max-w-xl mx-auto space-y-space-xs mb-space-lg">
                        <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Trajetória Pedagógica</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Cada Fase do Crescimento é Única</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Ambientes e estímulos rigorosamente adaptados às necessidades anatômicas e emocionais da faixa etária.
                        </p>
                    </div>
                    <!-- Tab Buttons -->
                    <div class="flex justify-center mb-space-lg">
                        <div class="inline-flex p-1.5 bg-surface-container-highest rounded-full shadow-inner max-w-full overflow-x-auto" id="education-tabs">
                            <button class="tab-trigger active px-space-md py-space-xs rounded-full font-label-md text-label-md transition-all duration-200 bg-primary text-on-primary shadow-md" data-tab="bercario" type="button">
                                Berçário (4m a 1 ano)
                            </button>
                            <button class="tab-trigger px-space-md py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all duration-200" data-tab="maternal" type="button">
                                Maternal I &amp; II (1 a 3 anos)
                            </button>
                            <button class="tab-trigger px-space-md py-space-xs rounded-full font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all duration-200" data-tab="preescola" type="button">
                                Pré-Escola (4 a 5 anos)
                            </button>
                        </div>
                    </div>
                    <!-- Tab Content Panels Container -->
                    <div class="bg-surface-container-lowest rounded-3xl p-space-md md:p-space-lg shadow-[0_4px_24px_rgba(2,48,71,0.06)]">
                        <!-- Tab 1: Berçário -->
                        <div class="tab-panel grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center" id="tab-bercario">
                            <div class="lg:col-span-6 space-y-space-md">
                                <div class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded-full bg-primary-fixed text-primary font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-[16px]">child_care</span>
                                    <span>Berçário de 4 meses a 1 ano</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-on-surface">Estimulação Precoce &amp; Afeto Integral</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Nosso berçário combina lactário exclusivo higienizado com fluxo rigoroso, sala de sono com controle termoacústico e piso acolchoado atóxico. A proporção é de 1 berçarista para cada 3 bebês, garantindo colo e respeito às janelas biológicas de sono.
                                </p>
                                <div class="space-y-space-xs">
                                    <h4 class="font-label-md text-label-md text-on-surface font-bold">Rotina e Destaques:</h4>
                                    <ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant">
                                        <li class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-tertiary-container text-[18px]">check_circle</span>
                                            <span>Banho de sol diário matinal no solário privativo</span>
                                        </li>
                                        <li class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-tertiary-container text-[18px]">check_circle</span>
                                            <span>Estímulo proprioceptivo com fisioterapia pediátrica preventiva</span>
                                        </li>
                                        <li class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-tertiary-container text-[18px]">check_circle</span>
                                            <span>Diário digital em tempo real com registros de mamadeiras, trocas e soninhos</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pt-space-xs">
                                    <a class="inline-flex items-center gap-space-xs text-primary font-label-md text-label-md hover:underline font-bold" href="#agendamento">
                                        <span>Agendar visita ao Berçário</span>
                                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                            <div class="lg:col-span-6">
                                <div class="relative rounded-2xl overflow-hidden shadow-lg h-[340px]">
                                    <img class="w-full h-full object-cover" data-alt="A clean, serene, pastel-colored infant nursery room in an upscale preschool with wooden cribs, soft floor cushions, a gentle baby reaching for a suspended soft sensory mobile while a nurse gently smiles in uniform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQLLzeJHrDdqahyIP7HUsOqOMcyv5fp2XyWohhsYaY7-8ylJQuXVP3QizALwbqpAJdM2jIgLdK4thedkptk7AWYf6mtbttlqDMrgHyphxe9Q-Pp80AE848eM428_5_n1l14kxu0rSt0M8E5jF5EbrOcMhkuC4MW5sBGdWjHBqg1uq3pMXmvWOlja5q9U2KSrt6K5f3KvVZPAYhj1rVBhUeCrvaaxQU6P4yEuOJNpWAAeVhogznZtz6" />
                                </div>
                            </div>
                        </div>
                        <!-- Tab 2: Maternal (Hidden initially) -->
                        <div class="tab-panel hidden grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center" id="tab-maternal">
                            <div class="lg:col-span-6 space-y-space-md">
                                <div class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded-full bg-secondary-fixed text-secondary font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-[16px]">sentiment_satisfied</span>
                                    <span>Maternal I &amp; II de 1 a 3 anos</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-on-surface">Exploração Motora, Fala e Autonomia</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Fase caracterizada pelo despertar da linguagem verbal, primeiros passos firmes e socialização com os pares. Promovemos vivências de desfralde gentil e sem traumas, autonomia alimentar e oficinas de musicalização sensorial.
                                </p>
                                <div class="space-y-space-xs">
                                    <h4 class="font-label-md text-label-md text-on-surface font-bold">Rotina e Destaques:</h4>
                                    <ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant">
                                        <li class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-tertiary-container text-[18px]">check_circle</span>
                                            <span>Circuito de psicomotricidade ampla e escalada montessoriana</span>
                                        </li>
                                        <li class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-tertiary-container text-[18px]">check_circle</span>
                                            <span>Roda de histórias teatralizada e canções bilíngues diárias</span>
                                        </li>
                                        <li class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-tertiary-container text-[18px]">check_circle</span>
                                            <span>Iniciação a hábitos higiênicos com mobília em escala infantil</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pt-space-xs">
                                    <a class="inline-flex items-center gap-space-xs text-secondary font-label-md text-label-md hover:underline font-bold" href="#agendamento">
                                        <span>Agendar visita ao Maternal</span>
                                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                            <div class="lg:col-span-6">
                                <div class="relative rounded-2xl overflow-hidden shadow-lg h-[340px]">
                                    <img class="w-full h-full object-cover" data-alt="Two adorable toddlers sitting at a child-sized round wooden table in a luminous classroom, painting on textured paper with finger paints, full of smiles and joyful colors, warm modern daylight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSCFWjkyWiATuY9yWsF-Vm5HQE5JrIiexNRV0SzbJ0sRqzziBXpwn3LcFCaEDO0VrU9b5J0UDPfS0PIh2B7x1r1PQWSRZFwRyqYpyHHzLPZ-qez9BrU08vT9DpooJnk6I6Ykb7IUX6Tb4TLZH9eLkMiqvdu5y6cnxl3KwgE3bQk9VdFsqL_POIQTuIZ_xEXcZiR3YFuolqmkS6I78npg8wpqZNh0oq1TdWZ6CIAsUbWsjSo3BwtiCD" />
                                </div>
                            </div>
                        </div>
                        <!-- Tab 3: Pré-Escola (Hidden initially) -->
                        <div class="tab-panel hidden grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center" id="tab-preescola">
                            <div class="lg:col-span-6 space-y-space-md">
                                <div class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded-full bg-tertiary-fixed text-tertiary font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-[16px]">menu_book</span>
                                    <span>Pré-Escola de 4 a 5 anos</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-on-surface">Pensamento Crítico, Letramento &amp; Imaginação</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Preparação integral para o Ensino Fundamental com ênfase na pré-alfabetização fonológica, conceitos matemáticos através de jogos concretos, resolução colaborativa de problemas e expressão artística complexa.
                                </p>
                                <div class="space-y-space-xs">
                                    <h4 class="font-label-md text-label-md text-on-surface font-bold">Rotina e Destaques:</h4>
                                    <ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant">
                                        <li class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-tertiary-container text-[18px]">check_circle</span>
                                            <span>Projetos de investigação científica infantil com feira anual</span>
                                        </li>
                                        <li class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-tertiary-container text-[18px]">check_circle</span>
                                            <span>Programa de socioemocionalidade para empatia e autorregulação</span>
                                        </li>
                                        <li class="flex items-center gap-space-xs">
                                            <span class="material-symbols-outlined text-tertiary-container text-[18px]">check_circle</span>
                                            <span>Robótica unplugged (lógica sem telas) e oficinas de culinária</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pt-space-xs">
                                    <a class="inline-flex items-center gap-space-xs text-tertiary font-label-md text-label-md hover:underline font-bold" href="#agendamento">
                                        <span>Agendar visita à Pré-Escola</span>
                                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                            <div class="lg:col-span-6">
                                <div class="relative rounded-2xl overflow-hidden shadow-lg h-[340px]">
                                    <img class="w-full h-full object-cover" data-alt="Diverse group of 5-year-old kids collaborating in a bright preschool studio, building an eco-friendly cardboard city with natural wood elements, supervised by an enthusiastic teacher, modern pedagogical environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUpo5qISS0NkupVG0iASKss4H0SNDJ9B-ItwnUM-PhmlvRwsVidoa9lXzzQ1TrTRzCOhAZKqB1-twM-WSH_OZBM6EJ9tJc9xqeiA2YpQyb1sn-YyPdjXKyAE-DrC7iFTqkbMSf2PeDl_QOF85rEQlVc8CxgJfY6qo679Q4KNMaOsN7EtcyhMatQGgqcGs6g02p2AvSxgUYaA51qh-SlxxTyqmsReKx_dv35wpP9O1S3JUl8dj9nG78" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SEÇÃO 4: SIMULADOR INTERATIVO DE PERÍODOS (JS UI COMPONENT) -->
            <!-- SEÇÃO 5: TOUR PELOS AMBIENTES & ESTRUTURA (GALERIA COM FILTROS JS) -->
            <section class="w-full py-space-xl bg-surface-container-low">
                <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm mb-space-lg">
                        <div class="space-y-space-xs max-w-xl">
                            <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Nossa Estrutura</span>
                            <h2 class="font-headline-lg text-headline-lg text-on-surface">Um Mundo Planejado para o Olhar da Criança</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Segurança de ponta a ponta: quinas arredondadas, iluminação natural generosa e áreas livres com amortecimento.
                            </p>
                        </div>
                        <!-- Filter Buttons -->
                        <div class="flex items-center gap-1.5 flex-wrap" id="gallery-filters">
                            <button class="gallery-btn active px-space-sm py-1.5 rounded-full font-label-sm text-label-sm bg-primary text-on-primary transition-all" data-filter="all" type="button">Todos</button>
                            <button class="gallery-btn px-space-sm py-1.5 rounded-full font-label-sm text-label-sm bg-surface-container-highest text-on-surface hover:bg-primary hover:text-on-primary transition-all" data-filter="externo" type="button">Área Externa &amp; Natureza</button>
                            <button class="gallery-btn px-space-sm py-1.5 rounded-full font-label-sm text-label-sm bg-surface-container-highest text-on-surface hover:bg-primary hover:text-on-primary transition-all" data-filter="salas" type="button">Salas Temáticas</button>
                            <button class="gallery-btn px-space-sm py-1.5 rounded-full font-label-sm text-label-sm bg-surface-container-highest text-on-surface hover:bg-primary hover:text-on-primary transition-all" data-filter="artes" type="button">Ateliê &amp; Alimentação</button>
                        </div>
                    </div>
                    <!-- Gallery Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md" id="gallery-grid">
                        <!-- Item 1 -->
                        <div class="gallery-card externo group relative rounded-2xl overflow-hidden shadow-md bg-surface-container h-72">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Vibrant outdoor playground of a daycare with safe shock-absorbing soft green grass floor, natural certified wooden climbing structures, sand pit, and sunny trees in a secure backyard" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBA0KKvXkd1HT46QEhmnz53z5n0bBpREajMOgiJ0vg-guaxjRS0FnRyA_20Ngw2zPG31BJkqs_Tkp224vtw0AcBtesBdCT_4tqod9tVRiWJBdDdtudcMrneCWlBLHiKgSspPdOZb2fVlQ9Psu8tc-qYgBQCn4lwULQkVmRgVKW1JMdgITFHF82JqnAxMbKCBmM4q0vxuZp0bTHq4iJYSyS0xAIhHTbwBECWA_Dq7WzfKQw2fKPLmfDt" />
                            <div class="absolute inset-0 bg-gradient-to-t from-on-surface/90 via-transparent to-transparent flex flex-col justify-end p-space-sm text-white">
                                <span class="text-xs font-label-sm text-secondary-fixed">Área Externa</span>
                                <p class="font-headline-sm text-[18px] font-bold">Parque com Piso Amortecedor</p>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="gallery-card salas group relative rounded-2xl overflow-hidden shadow-md bg-surface-container h-72">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Montessori indoor playroom filled with natural wooden educational toys, low reachable shelves, clean white walls, warm sunny wooden floor, and joyful child-sized furniture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXrLYdH-7nbFGfm43Zq2P5quhVVpn8Ucbl5oc8ttR_rP93T-DJCxFRuFtLpHQ8SUEQbCRKTIO2tngfjNiL4eJHX7yNW6SgR-kQAOHPnRYLB3Y_Zrr9nW0Cq7Rq8_f6ZU1iiMysaenpLZbH9hZ-_uojdhNf6JCOmRs_GgWoTdl-NIMmVDvc04rxg5LjBZU_fQKdNmiWnu18UCvXb2dcDhZjAOJFZw4fFshOjopGza068iqg85I6l4RT" />
                            <div class="absolute inset-0 bg-gradient-to-t from-on-surface/90 via-transparent to-transparent flex flex-col justify-end p-space-sm text-white">
                                <span class="text-xs font-label-sm text-primary-fixed">Salas Temáticas</span>
                                <p class="font-headline-sm text-[18px] font-bold">Salas de Atividades Arejadas</p>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="gallery-card artes group relative rounded-2xl overflow-hidden shadow-md bg-surface-container h-72">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Vibrant arts atelier for kids with small wooden easels, ceramic clay tables, colorful jars with tempera paint and natural paintbrushes, light-flooded studio room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSczq3fk8p_cPpnAMgfj6YX9mrdI5URGz7oCQ41CFbxDBsECmHsn9H8kTUIxijPXE5vYBTJIkqA98WDJNkhN95KAcp-0jgGDJaPVR_qfl0m-QgcPFopS_v_Iqb5ym0S73XKCpmpv5fGh_WCw0dagOj6LfDnBQe7pi8_Wfrahi5APBuAUlWbaYwTwXTsFyqoJ32z_9o4nzGlANyZto2Doe_v3vEK_98pLAipCPkSC3sy3bQkTadegDu" />
                            <div class="absolute inset-0 bg-gradient-to-t from-on-surface/90 via-transparent to-transparent flex flex-col justify-end p-space-sm text-white">
                                <span class="text-xs font-label-sm text-tertiary-fixed">Ateliê &amp; Artes</span>
                                <p class="font-headline-sm text-[18px] font-bold">Espaço Maker &amp; Expressão Plástica</p>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="gallery-card externo group relative rounded-2xl overflow-hidden shadow-md bg-surface-container h-72">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Lush raised vegetable garden beds with cherry tomatoes, basil, and strawberries in an elementary school backyard, children watering cans placed neatly on a stone path" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDB98eHoagFvej2s3DQw5xU9XHHSv6hY1few-4-Zcc5dMZJVbNZJnVJ4bEwWsz9eW3uufJdJHndtWmojzkyRsoTcMDi-Ygcb7niOB8sy2r0-5XbfDxavrUz7c_s7mmQJjy0ZGaDjdWJtPWgMlXTt9t8e_CMnmO0JB5mR-XlLBR8svs-kUXybmcwis8iB3KZbIyqzywz3QW1yr9CQHai53xdvzqKFW3mrV1gSkkcAM4u64t0eLhkA6rt" />
                            <div class="absolute inset-0 bg-gradient-to-t from-on-surface/90 via-transparent to-transparent flex flex-col justify-end p-space-sm text-white">
                                <span class="text-xs font-label-sm text-tertiary-fixed">Área Externa</span>
                                <p class="font-headline-sm text-[18px] font-bold">Horta Orgânica &amp; Sensorial</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SEÇÃO 6: DEPOIMENTOS DE PAIS COM AVALIAÇÕES 5 ESTRELAS -->
            <section class="w-full py-space-xl bg-surface-bright">
                <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
                    <div class="text-center max-w-xl mx-auto space-y-space-xs mb-space-lg">
                        <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Comunidade de Pais</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Histórias de Amor e Transformação</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            A tranquilidade de quem deixa o bem mais precioso em mãos dedicadas todos os dias.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <!-- Testimonial 1 -->
                        <div class="bg-surface-container-lowest p-space-md rounded-3xl shadow-[0_4px_20px_-2px_rgba(2,48,71,0.06)] flex flex-col justify-between space-y-space-md">
                            <div class="space-y-space-xs">
                                <!-- Stars -->
                                <div class="flex items-center text-secondary-container">
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant italic">
                                    "A adaptação do Théo no Berçário foi inacreditavelmente tranquila. A equipe tem uma sensibilidade ímpar para respeitar os sonos dele e a introdução alimentar foi conduzida sem nenhuma pressa. Sinto paz absoluta enquanto trabalho."
                                </p>
                            </div>
                            <div class="flex items-center gap-space-xs pt-space-xs">
                                <img class="w-12 h-12 rounded-full object-cover shadow-sm" data-alt="Portrait of an affectionate Brazilian mother in her early 30s smiling gently in natural soft outdoor daylight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbtbb0-CcYLcBIbpCoYwhc8JXdZUQiW3121qwKn9xXxJ2uMjhuiIlDi9-vK1f5E-gfiqUOHHRpDUj9xCfHwMdYRPl2UfbW7Ep94ugPYv6AFd9qsZXj_xKcycT8BeIjCGUiqnDMf7sqVwPHAz1vvIpiJWTtObEhKUmggR0BUXstz6Lz8wx1_9w1lSx5nan2Ehs2snhSDjGDkLUM9c0YSqQ-Q_NethC6GBvVtwxiSyM_yzLLeEJxFv3L" />
                                <div>
                                    <p class="font-headline-sm text-[16px] text-on-surface font-semibold">Mariana &amp; Gabriel Silveira</p>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant">Pais do Théo (Berçário - 9 meses)</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="bg-surface-container-lowest p-space-md rounded-3xl shadow-[0_4px_20px_-2px_rgba(2,48,71,0.06)] flex flex-col justify-between space-y-space-md">
                            <div class="space-y-space-xs">
                                <div class="flex items-center text-secondary-container">
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant italic">
                                    "O salto na autonomia da Alice no Maternal foi nítido! Ela começou a falar frases em inglês espontaneamente em casa cantando músicas que aprendeu na horta. O contato diário com terra e plantas é maravilhoso."
                                </p>
                            </div>
                            <div class="flex items-center gap-space-xs pt-space-xs">
                                <img class="w-12 h-12 rounded-full object-cover shadow-sm" data-alt="Portrait of a smiling caring father in his mid 30s with friendly warm eyes in casual apparel" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUvDWBRW-HtU6R5k1GBudxnmdF-w4Ks5JPKKD2YGXuwfxWOl43RiTmMteFMk8F1bYs40x60Ufl6TwEV8U_gb-OKDLkrZ6SjNJVym-y7Rpd0C66W7BlQYUarimO7IZLjoKWwDDIyhwuWaAB_iBgHsu7fq3Ai-NBQryxg9ANg3atEzSHTgmkOikj148OFzvloUAwT-o1frUmhJcNqiBeeRmrdyB5mkNlhlAgB-mA1gNxjevvs64MVRSr" />
                                <div>
                                    <p class="font-headline-sm text-[16px] text-on-surface font-semibold">Rodrigo Mendonça</p>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant">Pai da Alice (Maternal II - 2 anos e meio)</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="bg-surface-container-lowest p-space-md rounded-3xl shadow-[0_4px_20px_-2px_rgba(2,48,71,0.06)] flex flex-col justify-between space-y-space-md">
                            <div class="space-y-space-xs">
                                <div class="flex items-center text-secondary-container">
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant italic">
                                    "A Pré-Escola dos Pequenos Exploradores une rigor acadêmico com respeito à essência da infância. Nosso filho aprendeu a gostar de ler com projetos lúdicos, sem telas e com muito acolhimento socioemocional."
                                </p>
                            </div>
                            <div class="flex items-center gap-space-xs pt-space-xs">
                                <img class="w-12 h-12 rounded-full object-cover shadow-sm" data-alt="Portrait of a happy mother with eyeglasses and cheerful expression holding her child drawing" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCV3-1KenCfIGqfWznePmlFaNMRSPJROlm8PqbRK5ZZ5fMK7nynZbDCRhFoPDU3WTOU2zkQ11FLenOU4BO_Zujm3gv83FggQkK8rFO27Rd_Cg3xmZo0uqEfQ-Va2UyQx4glwsvomAC0hlGdTKFzI5WyFQ7L3rPJM47eHzIG39XjioP4QoHgLYTvekM88nRG7Q_OgSl9400gJ3NBBDgJwcn_GNWc8fOJNGDsm-fNoHGVsCVamozoK8Ul" />
                                <div>
                                    <p class="font-headline-sm text-[16px] text-on-surface font-semibold">Dra. Camila Nogueira</p>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant">Mãe do Lucas (Pré II - 5 anos)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SEÇÃO 7: FORMULÁRIO DE AGENDAMENTO + FAQ ACORDEÃO -->
            <section class="w-full py-space-xl bg-surface-container-low" id="agendamento">
                <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                        <!-- Form Column -->
                        <div class="lg:col-span-7 bg-surface-container-lowest p-space-md md:p-space-lg rounded-3xl shadow-[0_10px_35px_rgba(2,48,71,0.07)] space-y-space-md">
                            <div>
                                <span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Venha nos Conhecer</span>
                                <h2 class="font-headline-lg text-headline-lg text-on-surface">Agende uma Visita com a Coordenação</h2>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Conheça nossas instalações, tire suas dúvidas com a equipe pedagógica e sinta o acolhimento do nosso espaço.
                                </p>
                            </div>
                            <form class="space-y-space-sm" id="visit-form" onsubmit="event.preventDefault(); document.getElementById('form-success-banner').classList.remove('hidden');">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                                    <div class="space-y-1">
                                        <label class="font-label-md text-label-md text-on-surface">Nome dos Pais / Responsáveis *</label>
                                        <input class="w-full h-[50px] px-space-sm rounded-xl bg-surface-bright border-2 border-outline-variant/40 focus:border-primary focus:outline-none transition-colors font-body-md text-body-md" placeholder="Ex: Fernanda e Paulo Souza" required="" type="text" />
                                    </div>
                                    <div class="space-y-1">
                                        <label class="font-label-md text-label-md text-on-surface">WhatsApp para Confirmação *</label>
                                        <input class="w-full h-[50px] px-space-sm rounded-xl bg-surface-bright border-2 border-outline-variant/40 focus:border-primary focus:outline-none transition-colors font-body-md text-body-md" placeholder="(11) 98765-4321" required="" type="tel" />
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                                    <div class="space-y-1">
                                        <label class="font-label-md text-label-md text-on-surface">Nome e Idade da Criança *</label>
                                        <input class="w-full h-[50px] px-space-sm rounded-xl bg-surface-bright border-2 border-outline-variant/40 focus:border-primary focus:outline-none transition-colors font-body-md text-body-md" placeholder="Ex: Sofia, 2 anos" required="" type="text" />
                                    </div>
                                    <div class="space-y-1">
                                        <label class="font-label-md text-label-md text-on-surface">Turno de Interesse</label>
                                        <select class="w-full h-[50px] px-space-sm rounded-xl bg-surface-bright border-2 border-outline-variant/40 focus:border-primary focus:outline-none transition-colors font-body-md text-body-md text-on-surface">
                                            <option value="integral">Período Integral (07h às 19h)</option>
                                            <option value="manha">Manhã (07h30 às 12h)</option>
                                            <option value="tarde">Tarde (13h às 17h30)</option>
                                            <option value="indefinido">Ainda estou avaliando</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                                    <div class="space-y-1">
                                        <label class="font-label-md text-label-md text-on-surface">Melhor Data para Visita</label>
                                        <input class="w-full h-[50px] px-space-sm rounded-xl bg-surface-bright border-2 border-outline-variant/40 focus:border-primary focus:outline-none transition-colors font-body-md text-body-md text-on-surface" type="date" />
                                    </div>
                                    <div class="space-y-1">
                                        <label class="font-label-md text-label-md text-on-surface">Horário Preferencial</label>
                                        <select class="w-full h-[50px] px-space-sm rounded-xl bg-surface-bright border-2 border-outline-variant/40 focus:border-primary focus:outline-none transition-colors font-body-md text-body-md text-on-surface">
                                            <option value="09:00">09h00 (Manhã)</option>
                                            <option value="10:30">10h30 (Manhã)</option>
                                            <option value="14:30">14h30 (Tarde)</option>
                                            <option value="16:00">16h00 (Tarde)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label class="font-label-md text-label-md text-on-surface">Mensagem ou Observação Adicional</label>
                                    <textarea class="w-full p-space-sm rounded-xl bg-surface-bright border-2 border-outline-variant/40 focus:border-primary focus:outline-none transition-colors font-body-md text-body-md" placeholder="Conte-nos se a criança tem alergias, necessidades específicas ou fase de desfralde..." rows="3"></textarea>
                                </div>
                                <!-- Success Alert (Hidden until submit) -->
                                <div class="hidden p-space-sm bg-tertiary-fixed text-on-tertiary-container rounded-xl flex items-center gap-space-xs" id="form-success-banner">
                                    <span class="material-symbols-outlined text-[24px] text-tertiary">check_circle</span>
                                    <p class="font-label-md text-label-md">Obrigado! Sua solicitação foi recebida com carinho. Entraremos em contato via WhatsApp em até 2 horas úteis.</p>
                                </div>
                                <div class="pt-space-xs flex flex-col sm:flex-row items-center gap-space-sm">
                                    <button class="w-full sm:w-auto px-space-lg py-4 rounded-full bg-secondary-container text-on-secondary-container font-label-md text-label-md hover:bg-secondary hover:text-on-secondary transition-all shadow-md" type="submit">
                                        Confirmar Solicitação de Visita
                                    </button>
                                    <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs px-space-md py-4 rounded-full bg-tertiary text-on-tertiary font-label-md text-label-md hover:bg-tertiary-container transition-all" href="https://wa.me/5511987654321" rel="noopener noreferrer" target="_blank">
                                        <span class="material-symbols-outlined text-[20px]">chat</span>
                                        <span>Falar no WhatsApp Agora</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <!-- FAQ Column -->
                        <div class="lg:col-span-5 space-y-space-md">
                            <div>
                                <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Dúvidas Frequentes</span>
                                <h3 class="font-headline-md text-headline-md text-on-surface">Perguntas Comuns dos Pais</h3>
                            </div>
                            <div class="space-y-space-xs" id="faq-accordion">
                                <!-- Accordion Item 1 -->
                                <div class="faq-item bg-surface-container-lowest rounded-2xl p-space-sm shadow-sm transition-all">
                                    <button class="faq-trigger w-full flex items-center justify-between text-left font-headline-sm text-[17px] text-on-surface" type="button">
                                        <span>Como funciona o período de adaptação?</span>
                                        <span class="material-symbols-outlined faq-icon transition-transform duration-200">expand_more</span>
                                    </button>
                                    <div class="faq-content hidden pt-space-xs font-body-sm text-body-sm text-on-surface-variant">
                                        Nosso processo é 100% individualizado. Os pais acompanham a criança nos primeiros dias em horários reduzidos (1 a 2 horas), aumentando gradativamente o tempo conforme o vínculo afetivo com as educadoras se consolida.
                                    </div>
                                </div>
                                <!-- Accordion Item 2 -->
                                <div class="faq-item bg-surface-container-lowest rounded-2xl p-space-sm shadow-sm transition-all">
                                    <button class="faq-trigger w-full flex items-center justify-between text-left font-headline-sm text-[17px] text-on-surface" type="button">
                                        <span>Crianças com restrições alimentares têm cardápio próprio?</span>
                                        <span class="material-symbols-outlined faq-icon transition-transform duration-200">expand_more</span>
                                    </button>
                                    <div class="faq-content hidden pt-space-xs font-body-sm text-body-sm text-on-surface-variant">
                                        Sim! Nossa nutricionista elabora substituições rigorosas para celíacos, APLV (alergia à proteína do leite), vegetarianos e crianças em introdução alimentar guiada por métodos combinados (BLW + participativa).
                                    </div>
                                </div>
                                <!-- Accordion Item 3 -->
                                <div class="faq-item bg-surface-container-lowest rounded-2xl p-space-sm shadow-sm transition-all">
                                    <button class="faq-trigger w-full flex items-center justify-between text-left font-headline-sm text-[17px] text-on-surface" type="button">
                                        <span>Como é a segurança e acesso às câmeras?</span>
                                        <span class="material-symbols-outlined faq-icon transition-transform duration-200">expand_more</span>
                                    </button>
                                    <div class="faq-content hidden pt-space-xs font-body-sm text-body-sm text-on-surface-variant">
                                        Possuímos portaria com reconhecimento biométrico e clausura de segurança. Os pais autorizados recebem acesso criptografado ao app escolar com monitoramento e linha direta com a coordenação em tempo real.
                                    </div>
                                </div>
                                <!-- Accordion Item 4 -->
                                <div class="faq-item bg-surface-container-lowest rounded-2xl p-space-sm shadow-sm transition-all">
                                    <button class="faq-trigger w-full flex items-center justify-between text-left font-headline-sm text-[17px] text-on-surface" type="button">
                                        <span>Qual a formação pedagógica das educadoras?</span>
                                        <span class="material-symbols-outlined faq-icon transition-transform duration-200">expand_more</span>
                                    </button>
                                    <div class="faq-content hidden pt-space-xs font-body-sm text-body-sm text-on-surface-variant">
                                        Todas as professoras titulares são pedagogas pós-graduadas em Primeira Infância ou Neuroeducação, com certificação em primeiros socorros pediátricos (Lei Lucas) e fluência na abordagem bilíngue.
                                    </div>
                                </div>
                            </div>
                            <!-- Direct Location Box -->
                            <div class="bg-surface-container-highest p-space-md rounded-2xl space-y-space-xs">
                                <div class="flex items-center gap-space-xs text-primary">
                                    <span class="material-symbols-outlined text-[24px]">pin_drop</span>
                                    <h4 class="font-headline-sm text-[17px] font-bold">Fácil Acesso &amp; Estacionamento</h4>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Rua tranquila e arborizada com vaga rápida de desembarque assistido e portaria protegida.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive Logic in Vanilla JS -->
            <script>
                // Tab Controller for Níveis de Ensino
                const tabTriggers = document.querySelectorAll('.tab-trigger');
                const tabPanels = document.querySelectorAll('.tab-panel');

                tabTriggers.forEach(button => {
                    button.addEventListener('click', () => {
                        const target = button.getAttribute('data-tab');

                        tabTriggers.forEach(btn => {
                            btn.classList.remove('active', 'bg-primary', 'text-on-primary', 'shadow-md');
                            btn.classList.add('text-on-surface-variant');
                        });
                        button.classList.add('active', 'bg-primary', 'text-on-primary', 'shadow-md');
                        button.classList.remove('text-on-surface-variant');

                        tabPanels.forEach(panel => {
                            if (panel.id === `tab-${target}`) {
                                panel.classList.remove('hidden');
                            } else {
                                panel.classList.add('hidden');
                            }
                        });
                    });
                });

                // Routine Simulator State & Logic
                let currentAge = 'bercario';
                let currentShift = 'manha';

                const simAgeButtons = document.querySelectorAll('.sim-age-btn');
                const simShiftRadios = document.querySelectorAll('input[name="shift"]');
                const simTitle = document.getElementById('sim-plan-title');
                const simInclusions = document.getElementById('sim-inclusions');

                const simulatorData = {
                    bercario: {
                        name: 'Berçário (4m a 1a)',
                        manha: [
                            'Lactário e amamentação / fórmulas sob demanda respeitosa',
                            'Banho de sol matinal e estimulação motora com fisioterapeuta',
                            'Almoço com papinhas orgânicas feitas no dia e sono restaurador',
                            'Comunicação contínua via aplicativo das trocas e sonecas'
                        ],
                        tarde: [
                            'Estimulação musical suave e massagem shantala pós-soneca',
                            'Lanche da tarde à base de frutas in natura da horta',
                            'Jantar balanceado e higiene relaxante para entrega tranquila',
                            'Diário de bordo digital entregue diariamente'
                        ],
                        integral: [
                            'Acompanhamento integral das 07h às 19h (1 educadora para 3 bebês)',
                            '5 refeições completas balanceadas por nutricionista pediátrica',
                            'Sala de sono com temperatura e ruído branco regulados',
                            'Banho de sol, banho morno, shantala e oficinas sensoriais diárias'
                        ]
                    },
                    maternal: {
                        name: 'Maternal I & II (1 a 3a)',
                        manha: [
                            'Roda de acolhimento e contação de histórias bilíngue',
                            'Circuito motor no parque externo com piso emborrachado',
                            'Colação de frutas + almoço colorido e oficina de higiene bucal',
                            'Brincar heurístico com elementos da natureza'
                        ],
                        tarde: [
                            'Oficina de artes plásticas com tintas atóxicas e argila',
                            'Horta educativa e rega das plantinhas da turma',
                            'Lanche nutritivo e jantar leve antes da despedida',
                            'Iniciação ao desfralde carinhoso em sanitários infantis'
                        ],
                        integral: [
                            'Imersão bilíngue contínua durante todo o dia com vivências práticas',
                            'Soneca tranquila em leitos individuais higienizados',
                            '5 refeições nutritivas com desenvolvimento de autonomia à mesa',
                            'Oficinas extracurriculares: Capoeira lúdica e Psicomotricidade'
                        ]
                    },
                    pre: {
                        name: 'Pré-Escola (4 a 5a)',
                        manha: [
                            'Círculo de investigação e levantamento de hipóteses científicas',
                            'Jogos estruturados de pré-alfabetização fonológica e matemática',
                            'Projetos em inglês e ateliê de criação artística',
                            'Almoço completo e auto-serviço orientado'
                        ],
                        tarde: [
                            'Robótica desplugada, jogos de raciocínio e tabuleiro',
                            'Culinária experimental com ingredientes colhidos na horta',
                            'Parque livre, esportes cooperativos e teatro infantil',
                            'Jantar completo e reflexão socioemocional do dia'
                        ],
                        integral: [
                            'Formação completa para transição segura ao Ensino Fundamental',
                            'Todas as refeições diárias inclusas com alimentos orgânicos',
                            'Atividades bilíngues imersivas da manhã ao final da tarde',
                            'Aulas especializadas de Música, Yoga Infantil e Expressão Teatral'
                        ]
                    }
                };

                function updateSimulator() {
                    const data = simulatorData[currentAge];
                    const shiftName = currentShift === 'manha' ? 'Turno da Manhã' : (currentShift === 'tarde' ? 'Turno da Tarde' : 'Período Integral');
                    simTitle.textContent = `${data.name} • ${shiftName}`;

                    const items = data[currentShift];
                    simInclusions.innerHTML = items.map(text => `
        <p class="font-body-sm text-body-sm flex items-center gap-2">
          <span class="material-symbols-outlined text-secondary-container text-[20px]">check</span>
          <span>${text}</span>
        </p>
      `).join('');
                }

                simAgeButtons.forEach(btn => {
                    btn.addEventListener('click', () => {
                        simAgeButtons.forEach(b => {
                            b.classList.remove('active', 'bg-primary', 'text-on-primary');
                            b.classList.add('bg-surface-container-low', 'text-on-surface');
                        });
                        btn.classList.add('active', 'bg-primary', 'text-on-primary');
                        btn.classList.remove('bg-surface-container-low', 'text-on-surface');
                        currentAge = btn.getAttribute('data-val');
                        updateSimulator();
                    });
                });

                simShiftRadios.forEach(radio => {
                    radio.addEventListener('change', (e) => {
                        currentShift = e.target.value;
                        updateSimulator();
                    });
                });

                // Gallery Filter Logic
                const galleryBtns = document.querySelectorAll('.gallery-btn');
                const galleryCards = document.querySelectorAll('.gallery-card');

                galleryBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        const filter = btn.getAttribute('data-filter');
                        galleryBtns.forEach(b => {
                            b.classList.remove('active', 'bg-primary', 'text-on-primary');
                            b.classList.add('bg-surface-container-highest', 'text-on-surface');
                        });
                        btn.classList.add('active', 'bg-primary', 'text-on-primary');
                        btn.classList.remove('bg-surface-container-highest', 'text-on-surface');

                        galleryCards.forEach(card => {
                            if (filter === 'all' || card.classList.contains(filter)) {
                                card.classList.remove('hidden');
                            } else {
                                card.classList.add('hidden');
                            }
                        });
                    });
                });

                // Accordion Logic for FAQ
                const faqTriggers = document.querySelectorAll('.faq-trigger');
                faqTriggers.forEach(trigger => {
                    trigger.addEventListener('click', () => {
                        const content = trigger.nextElementSibling;
                        const icon = trigger.querySelector('.faq-icon');
                        const isOpen = !content.classList.contains('hidden');

                        // Close other items
                        document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
                        document.querySelectorAll('.faq-icon').forEach(i => i.style.transform = 'rotate(0deg)');

                        if (!isOpen) {
                            content.classList.remove('hidden');
                            icon.style.transform = 'rotate(180deg)';
                        }
                    });
                });
            </script>
        </div>
    </main>
    <footer class="w-full bg-surface-container-lowest mt-space-xl">
        <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop pt-space-xl pb-space-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
                <div class="space-y-space-sm">
                    <div class="flex items-center gap-space-xs"><img alt="Logo Pequenos Exploradores" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCseoX65pp96bZGSP2QNOWjuw4LrJIeognyXnxPgKdG5XL_YO31moAew6ajqfUM_6ubesdjyZr3sa0oLIijkwUYbauorER2bvTjltY9JcU3kiwArQ7NQ5WNX4E0AKT7k-jjwmHAAjl08U3YGRAMwkC0iwCFXZWXOS9IxCEHa3dnv7mdiEbqjEcMb2oeVt80FJTO9-Nn9j81WwaUPzu6SHemQeldAie_R4ZRw5pRm4zV_pBCJscbNr7p" /><span class="font-headline-sm text-headline-sm text-primary">Pequenos Exploradores</span></div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Educação infantil acolhedora, respeitosa e guiada pela curiosidade natural das crianças. Berçário, Maternal e Pré-Escola de excelência.</p>
                    <div class="flex items-center gap-space-xs text-tertiary bg-surface-container-low px-space-sm py-space-xs rounded-full w-fit"><span class="material-symbols-outlined text-[18px]">verified</span><span class="font-label-sm text-label-sm">Credenciado pelo MEC &amp; CME</span></div>
                </div>
                <div class="space-y-space-sm">
                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Atendimento</h4>
                    <div class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant">
                        <p class="flex items-start gap-space-xs"><span class="material-symbols-outlined text-primary text-[18px]">schedule</span><span>Segunda a Sexta: 07h00 às 19h00 (Períodos Integral, Manhã e Tarde)</span></p>
                        <p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-primary text-[18px]">call</span><span>(11) 4567-8901</span></p>
                        <p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-tertiary-container text-[18px]">chat</span><span>WhatsApp: (11) 98765-4321</span></p>
                    </div>
                </div>
                <div class="space-y-space-sm">
                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Localização</h4>
                    <p class="font-body-sm text-body-sm text-on-surface-variant flex items-start gap-space-xs"><span class="material-symbols-outlined text-primary text-[18px]">location_on</span><span>Alameda das Palmeiras, 340 - Jardim das Flores, São Paulo - SP</span></p>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Estacionamento seguro com baia exclusiva de embarque e desembarque assistido.</p>
                </div>
                <div class="space-y-space-sm">
                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Acompanhe Nossos Momentos</h4>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Vivências pedagógicas, atividades sensoriais e celebrações comunitárias em nossas redes.</p>
                    <div class="flex items-center gap-space-xs pt-space-xs"><span class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary"><span class="material-symbols-outlined text-[20px]">photo_camera</span></span><span class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary"><span class="material-symbols-outlined text-[20px]">smart_display</span></span><span class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary"><span class="material-symbols-outlined text-[20px]">forum</span></span></div>
                </div>
            </div>
            <div class="mt-space-lg pt-space-md bg-surface-container-low rounded-xl px-space-md py-space-sm flex flex-col sm:flex-row items-center justify-between gap-space-sm text-center sm:text-left">
                <p class="font-body-sm text-body-sm text-on-surface-variant">© 2025 Escola Pequenos Exploradores. Todos os direitos reservados. Segurança e carinho em cada detalhe.</p>
                <div class="flex items-center gap-space-md font-label-sm text-label-sm text-on-surface-variant"><a class="hover:text-primary" data-path="politica-de-privacidade" href="#">Privacidade</a><a class="hover:text-primary" data-path="normas-de-convivencia" href="#">Regulamento Interno</a></div>
            </div>
        </div>
    </footer>
</body>

</html>