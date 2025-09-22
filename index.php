<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <title>SmartCam</title>
</head>

<body class="flex flex-col min-h-screen bg-white antialiased">
    <div class="relative flex min-h-screen flex-col">
        <header class="fixed top-0 left-0 right-0 z-50 w-full border-b transition-all duration-300 bg-[hsl(0_0%_100%)] border-transparent">
            <div class="container flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <a class="group flex items-center space-x-2 transition-opacity hover:opacity-80" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-switch-camera-icon lucide-switch-camera w-6 h-6">
                            <path d=" M11 19H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h5" />
                            <path d="M13 5h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5" />
                            <circle cx="12" cy="12" r="3" />
                            <path d="m18 22-3-3 3-3" />
                            <path d="m6 2 3 3-3 3" />
                        </svg>
                        <span class="hidden font-bold sm:inline-block">SMARTCAM</span>
                    </a>
                </div>

                <div class="flex items-center gap-6">
                    <nav class="hidden md:flex items-center space-x-1">
                        <a class="group relative px-3 py-2 text-sm font-medium text-black/60 hover:text-black transition-colors"
                            href="#">Features
                            <span
                                class="absolute left-0 right-0 -bottom-0.5 h-px bg-gradient-to-r from-black/0 via-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        </a>
                        <a class="group relative px-3 py-2 text-sm font-medium text-black/60 hover:text-black transition-colors"
                            href="#">FAQ
                            <span
                                class="absolute left-0 right-0 -bottom-0.5 h-px bg-gradient-to-r from-black/0 via-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        </a>
                        <a class="group relative px-3 py-2 text-sm font-medium text-black/60 hover:text-black transition-colors"
                            href="#">About
                            <span
                                class="absolute left-0 right-0 -bottom-0.5 h-px bg-gradient-to-r from-black/0 via-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        </a>
                        <a class="group relative px-3 py-2 text-sm font-medium text-black/60 hover:text-black transition-colors"
                            href="#">Contact
                            <span
                                class="absolute left-0 right-0 -bottom-0.5 h-px bg-gradient-to-r from-black/0 via-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        </a>
                    </nav>

                    <div class="hidden md:block h-4 w-px bg-gray-200"></div>

                    <a class="group inline-flex h-9 items-center justify-center rounded-full bg-[hsl(240_5.9%_10%)] px-4 text-sm font-medium text-[hsl(0_0%_98%)] transition-all hover:bg-primary/90 hover:scale-105 hover:shadow-lg "
                        href="./admin/login.php">
                        Login
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right-icon lucide-chevron-right ml-1 h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>

                    <button id="menu-btn"
                        class="md:hidden inline-flex items-center justify-center rounded-full p-2.5 text-[hsl(240_3.8%_46.1%)] hover:text-[hsl(240_10%_3.9%)] transition-colors hover:bg-[hsl(240_4.8%_95.9%)] cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-menu-icon lucide-menu">
                            <path d="M4 5h16" />
                            <path d="M4 12h16" />
                            <path d="M4 19h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Blur Bg -->
            <div id="menu-overlay"
                class="fixed inset-0 z-40 bg-[hsl(0_0%_100%/.8)] backdrop-blur-sm md:hidden opacity-0 invisible transition-opacity duration-300"></div>

            <!-- Mobile Menu -->
            <div id="mobile-menu"
                class="fixed right-0 top-0 bottom-0 w-[280px] bg-[hsl(0_0%_100%)] border-l border-gray-200 z-50 px-6 py-3 md:hidden transform translate-x-full transition-transform duration-300 ease-in-out">
                <div class="flex items-center justify-between mb-8">
                    <span class="font-bold">Menu</span>
                    <button id="close-btn"
                        class="rounded-md p-2.5 text-[hsl(240_3.8%_46.1%)] hover:text-[hsl(240_10%_3.9%)] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-x-icon lucide-x">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
                <nav class="flex flex-col gap-4">
                    <a class="font-medium py-2 transition-colors block text-[hsl(240_10%_3.9%/.6)] hover:text-[hsl(240_10%_3.9%/.8)]"
                        href="#">Features</a>
                    <a class="font-medium py-2 transition-colors block text-[hsl(240_10%_3.9%/.6)] hover:text-[hsl(240_10%_3.9%/.8)]"
                        href="#">FAQ</a>
                    <a class="font-medium py-2 transition-colors block text-[hsl(240_10%_3.9%/.6)] hover:text-[hsl(240_10%_3.9%/.8)]"
                        href="#">About</a>
                    <a class="font-medium py-2 transition-colors block text-[hsl(240_10%_3.9%/.6)] hover:text-[hsl(240_10%_3.9%/.8)]"
                        href="#">Contact</a>
                </nav>
            </div>
        </header>

        <main class="flex-grow pt-16">

            <!-- Hero -->
            <section class="relative py-24 overflow-hidden">
                <div class="container mx-auto px-4 md:px-6 relative">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">

                        <!-- Left Column -->
                        <div class="space-y-6 text-center lg:text-left mx-auto">
                            <span class="inline-block px-4 py-1.5 text-sm font-medium bg-blue-50 text-blue-700 rounded-full">
                                Smart Camera Technology
                            </span>

                            <h1 class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl lg:text-6xl leading-tight">
                                <span class="text-blue-600">Secure</span> Campus <br />
                                using <span class="text-blue-600">SmartCam</span>
                            </h1>

                            <p class="max-w-xl text-gray-600 md:text-lg lg:text-xl leading-relaxed mx-auto lg:mx-0">
                                Discover SmartCam technology and monitoring systems designed to prevent violence while creating safer schools and protecting every student.
                            </p>

                            <div>
                                <a href="#"
                                    class="inline-flex group items-center px-4 py-2 sm:px-5 sm:py-2.5 md:px-6 md:py-3 text-sm sm:text-base md:text-lg font-medium text-white bg-black rounded-xl hover:bg-gray-800 transition-all duration-300 hover:shadow-lg">
                                    How it Works
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="ml-2 h-4 w-4 sm:h-5 sm:w-5 transition-transform group-hover:translate-x-0.5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>

                            <!-- Stats -->
                            <div class="flex flex-row justify-center lg:justify-start p-6 mt-12 space-x-16 bg-blue-50 rounded-xl">
                                <div class="text-center lg:text-left">
                                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-700">5000</div>
                                    <p class="text-xs sm:text-sm md:text-base text-gray-600">Active Users</p>
                                </div>
                                <div class="text-center lg:text-left">
                                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-700">3100</div>
                                    <p class="text-xs sm:text-sm md:text-base text-gray-600">Students Monitored</p>
                                </div>
                                <div class="text-center lg:text-left">
                                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-700">80%</div>
                                    <p class="text-xs sm:text-sm md:text-base text-gray-600">Accuracy</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="relative h-full">
                            <img src="./images/campus.jpg" alt="Renewable Energy" class="w-full h-full object-cover rounded-2xl shadow-lg">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Powerful Features -->
            <section class="relative py-24 overflow-hidden bg-black">
                <div class="container mx-auto px-4 md:px-6 relative">
                    <header class="flex flex-col items-center text-center mb-12 max-w-[800px] mx-auto" style="opacity: 1; transform: none;">
                        <span class="inline-flex items-center rounded-full border border-white/20 bg-white/5 backdrop-blur-sm px-3 py-1 text-sm text-[hsl(0_0%_100%/.8)]  mb-4 hover:border-[hsl(0_0%_100%/.4)] hover:bg-white/10 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-atom-icon lucide-atom mr-1.5 h-3.5 w-3.5">
                                <circle cx="12" cy="12" r="1" />
                                <path d="M20.2 20.2c2.04-2.03.02-7.36-4.5-11.9-4.54-4.52-9.87-6.54-11.9-4.5-2.04 2.03-.02 7.36 4.5 11.9 4.54 4.52 9.87 6.54 11.9 4.5Z" />
                                <path d="M15.7 15.7c4.52-4.54 6.54-9.87 4.5-11.9-2.03-2.04-7.36-.02-11.9 4.5-4.52 4.54-6.54 9.87-4.5 11.9 2.03 2.04 7.36.02 11.9-4.5Z" />
                            </svg>
                            Powerful Features
                        </span>

                        <h2 class="text-4xl md:text-5xl font-bold text-[hsl(0_0%_100%)] mb-4">
                            Advanced Campus Safety & Student Monitoring
                        </h2>

                        <p class="text-lg text-[hsl(0_0%_100%/.8)] max-w-2xl mx-auto">
                            Explore how our Web-based Anti-Violence and Student Monitoring System
                            using SmartCam Technology supports a safer learning environment.
                        </p>
                    </header>

                    <!-- Feature Grid -->
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Card 1 -->
                        <div class="group relative rounded-2xl border border-[hsl(0_0%_100%/.2)] bg-[hsl(0_0%_100%/.1)] p-8 overflow-hidden transition-colors duration-500 ease-in-out hover:border-blue-400/50">
                            <!-- Animated background layer -->
                            <div class="absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-500 ease-in-out bg-gradient-to-br from-blue-500/20 to-purple-500/20 group-hover:opacity-100"></div>

                            <div class="relative">
                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-blue-500/20 text-blue-400 mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-camera w-6 h-6">
                                        <path
                                            d="M13.997 4a2 2 0 0 1 1.76 1.05l.486.9A2 2 0 0 0 18.003 7H20a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1.997a2 2 0 0 0 1.759-1.048l.489-.904A2 2 0 0 1 10.004 4z" />
                                        <circle cx="12" cy="13" r="3" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[hsl(0_0%_100%)] mb-3">Smart Violence Detection</h3>
                                <p class="text-[hsl(0_0%_100%/.8)] leading-relaxed">
                                    Real-time monitoring with AI-powered smart cameras to detect and alert staff of potential violent activities.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="group relative rounded-2xl border border-[hsl(0_0%_100%/.2)] bg-[hsl(0_0%_100%/.1)] p-8 overflow-hidden transition-colors duration-500 ease-in-out hover:border-green-400/50">
                            <!-- Animated background layer -->
                            <div class="absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-500 ease-in-out bg-gradient-to-br from-green-500/20 to-teal-500/20 group-hover:opacity-100"></div>

                            <!-- Content -->
                            <div class="relative">
                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-green-500/20 text-green-400 mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-id-card-lanyard w-6 h-6">
                                        <path d="M13.5 8h-3" />
                                        <path d="m15 2-1 2h3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h3" />
                                        <path d="M16.899 22A5 5 0 0 0 7.1 22" />
                                        <path d="m9 2 3 6" />
                                        <circle cx="12" cy="15" r="3" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[hsl(0_0%_100%)] mb-3">Automated Attendance</h3>
                                <p class="text-[hsl(0_0%_100%/.8)] leading-relaxed">
                                    Automated attendance logging using secure ID scanning for accurate and reliable student tracking.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="group relative rounded-2xl border border-[hsl(0_0%_100%/.2)] bg-[hsl(0_0%_100%/.1)] p-8 overflow-hidden transition-colors duration-500 ease-in-out hover:border-pink-400/50">
                            <!-- Animated background layer -->
                            <div class="absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-500 ease-in-out bg-gradient-to-br from-pink-500/20 to-red-500/20 group-hover:opacity-100"></div>

                            <div class="relative">
                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-pink-500/20 text-pink-400 mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-triangle-alert w-6 h-6">
                                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
                                        <path d="M12 9v4" />
                                        <path d="M12 17h.01" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[hsl(0_0%_100%)] mb-3">Instant Alerts</h3>
                                <p class="text-[hsl(0_0%_100%/.8)] leading-relaxed">
                                    Sends real-time notifications to school administrators and security teams during incidents.
                                </p>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="group relative rounded-2xl border border-[hsl(0_0%_100%/.2)] bg-[hsl(0_0%_100%/.1)] p-8 overflow-hidden transition-colors duration-500 ease-in-out hover:border-yellow-400/50">
                            <!-- Animated background layer -->
                            <div class="absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-500 ease-in-out bg-gradient-to-br from-yellow-500/20 to-orange-500/20 group-hover:opacity-100"></div>

                            <div class="relative">
                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-yellow-500/20 text-yellow-400 mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-square-activity w-6 h-6">
                                        <rect width="18" height="18" x="3" y="3" rx="2" />
                                        <path d="M17 12h-2l-2 5-2-10-2 5H7" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[hsl(0_0%_100%)] mb-3">Behavior Monitoring</h3>
                                <p class="text-[hsl(0_0%_100%/.8)] leading-relaxed">
                                    Tracks student behavior trends and provides data-driven reports for early intervention strategies.
                                </p>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="group relative rounded-2xl border border-[hsl(0_0%_100%/.2)] bg-[hsl(0_0%_100%/.1)] p-8 overflow-hidden transition-colors duration-500 ease-in-out hover:border-purple-400/50">
                            <!-- Animated background layer -->
                            <div class="absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-500 ease-in-out bg-gradient-to-br from-purple-500/20 to-indigo-500/20 group-hover:opacity-100"></div>

                            <div class="relative">
                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-purple-500/20 text-purple-400 mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-shield-check w-6 h-6">
                                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                        <path d="m9 12 2 2 4-4" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[hsl(0_0%_100%)] mb-3">Secure Data Storage</h3>
                                <p class="text-[hsl(0_0%_100%/.8)] leading-relaxed">
                                    Protects sensitive student information with end-to-end encryption and secure cloud storage.
                                </p>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="group relative rounded-2xl border border-[hsl(0_0%_100%/.2)] bg-[hsl(0_0%_100%/.1)] p-8 overflow-hidden transition-colors duration-500 ease-in-out hover:border-cyan-400/50">
                            <!-- Animated background layer -->
                            <div class="absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-500 ease-in-out bg-gradient-to-br from-cyan-500/20 to-blue-500/20 group-hover:opacity-100"></div>

                            <div class="relative">
                                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-cyan-500/20 text-cyan-400 mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-cloud-check w-6 h-6">
                                        <path d="m17 15-5.5 5.5L9 18" />
                                        <path d="M5 17.743A7 7 0 1 1 15.71 10h1.79a4.5 4.5 0 0 1 1.5 8.742" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-[hsl(0_0%_100%)] mb-3">Remote Access</h3>
                                <p class="text-[hsl(0_0%_100%/.8)] leading-relaxed">
                                    Administrators can securely access monitoring dashboards and reports anytime, anywhere.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="bg-black text-[hsl(0_0%_100%/.8)]">
            <div class="container py-16 md:py-24">
                <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-6">
                    <div class="lg:col-span-2 space-y-4">
                        <a class="flex items-center gap-2" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-switch-camera-icon lucide-switch-camera w-6 h-6">
                                <path d=" M11 19H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h5" />
                                <path d="M13 5h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5" />
                                <circle cx="12" cy="12" r="3" />
                                <path d="m18 22-3-3 3-3" />
                                <path d="m6 2 3 3-3 3" />
                            </svg>
                            <span class="font-bold sm:inline-block">SMARTCAM</span>
                        </a>
                        <p class="text-sm text-[hsl(0_0%_100%/0.6)] max-w-xs">SmartCam helps you secure and monitor your camera footage with real-time alerts and easy dashboard access.</p>
                        <div class="flex items-center gap-4">
                            <a class="flex h-8 w-8 items-center justify-center rounded-full bg-[hsl(0_0%_100%/0.05)] text-[hsl(0_0%_100%/0.6)] hover:bg-[hsl(0_0%_100%/0.1)] hover:text-[hsl(0_0%_100%)]
                            transition-colors" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook w-4 h-4">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                </svg>
                            </a>

                            <a class="flex h-8 w-8 items-center justify-center rounded-full bg-[hsl(0_0%_100%/0.05)] text-[hsl(0_0%_100%/0.6)] hover:bg-[hsl(0_0%_100%/0.1)] hover:text-[hsl(0_0%_100%)]
                            transition-colors" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter-icon lucide-twitter w-4 h-4">
                                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                                </svg>
                            </a>

                            <a class="flex h-8 w-8 items-center justify-center rounded-full bg-[hsl(0_0%_100%/0.05)] text-[hsl(0_0%_100%/0.6)] hover:bg-[hsl(0_0%_100%/0.1)] hover:text-[hsl(0_0%_100%)]
                            transition-colors" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin-icon lucide-linkedin w-4 h-4">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                    <rect width="4" height="12" x="2" y="9" />
                                    <circle cx="4" cy="4" r="2" />
                                </svg>
                            </a>

                            <a class="flex h-8 w-8 items-center justify-center rounded-full bg-[hsl(0_0%_100%/0.05)] text-[hsl(0_0%_100%/0.6)] hover:bg-[hsl(0_0%_100%/0.1)] hover:text-[hsl(0_0%_100%)]
                            transition-colors" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram w-4 h-4">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class=" space-y-4">
                        <h4 class="text-sm font-semibold text-[hsl(0_0%_100%)]">Quick Links</h4>
                        <ul class="space-y-2">
                            <li>
                                <a class="text-sm text-[hsl(0_0%_100%/0.6)] hover:text-[hsl(0_0%_100%)] transition-colors" href="#">Features</a>
                            </li>
                            <li>
                                <a class="text-sm text-[hsl(0_0%_100%/0.6)] hover:text-[hsl(0_0%_100%)] transition-colors" href="" #>Contact</a>
                            </li>
                            <li>
                                <a class="text-sm text-[hsl(0_0%_100%/0.6)] hover:text-[hsl(0_0%_100%)] transition-colors" href="#">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class=" space-y-4">
                        <h4 class="text-sm font-semibold text-[hsl(0_0%_100%)]">Legal</h4>
                        <ul class="space-y-2">
                            <li>
                                <a class="text-sm text-[hsl(0_0%_100%/0.6)] hover:text-[hsl(0_0%_100%)] transition-colors" href="#">FAQ</a>
                            </li>
                            <li>
                                <a class="text-sm text-[hsl(0_0%_100%/0.6)] hover:text-[hsl(0_0%_100%)] transition-colors" href="" #>Privacy Policy</a>
                            </li>
                            <li>
                                <a class="text-sm text-[hsl(0_0%_100%/0.6)] hover:text-[hsl(0_0%_100%)] transition-colors" href="#">Terms of Service</a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-2 space-y-4">
                        <h4 class="text-sm font-semibold text-[hsl(0_0%_100%)]">Contact</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-2 text-sm text-[hsl(0_0%_100%/0.6)]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin w-4 h-4">
                                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>Brgy. Rizal, Santa Rosa, Nueva Ecija 3101
                            </li>
                            <li class="flex items-center gap-2 text-sm text-[hsl(0_0%_100%/0.6)]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone w-4 h-4">
                                    <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                                </svg>+(63) 044-940-0237
                            </li>
                            <li class="flex items-center gap-2 text-sm text-[hsl(0_0%_100%/0.6)]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail w-4 h-4">
                                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                                    <rect x="2" y="4" width="20" height="16" rx="2" />
                                </svg>info@holycross.edu.ph
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-16 pt-8 border-t border-[hsl(0_0%_100%/0.1)]">
                    <div class="text-center text-sm text-[hsl(0_0%_100%/0.6)]">
                        © <span id="year"></span> SMARTCAM. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="./js/mobile-menu.js"></script>
    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>