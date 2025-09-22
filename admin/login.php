<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <title>SmartCam</title>
</head>

<body class="min-h-screen bg-white antialiased">
    <div class="relative flex min-h-screen flex-col">
        <header class="fixed top-0 left-0 right-0 z-50 w-full border-b transition-all duration-300 bg-[hsl(0_0%_100%)] border-transparent">
            <div class="container flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <a class="group flex items-center space-x-2 transition-opacity hover:opacity-80" href="../index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-switch-camera-icon lucide-switch-camera w-6 h-6">
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
                        <a class="group relative px-3 py-2 text-sm font-medium text-black/60 hover:text-black transition-colors" href="#">
                            Features
                            <span class="absolute left-0 right-0 -bottom-0.5 h-px bg-gradient-to-r from-black/0 via-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        </a>

                        <a class="group relative px-3 py-2 text-sm font-medium text-black/60 hover:text-black transition-colors" href="#">
                            FAQ
                            <span class="absolute left-0 right-0 -bottom-0.5 h-px bg-gradient-to-r from-black/0 via-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        </a>

                        <a class="group relative px-3 py-2 text-sm font-medium text-black/60 hover:text-black transition-colors" href="#">
                            About
                            <span class="absolute left-0 right-0 -bottom-0.5 h-px bg-gradient-to-r from-black/0 via-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        </a>

                        <a class="group relative px-3 py-2 text-sm font-medium text-black/60 hover:text-black transition-colors" href="#">
                            Contact
                            <span class="absolute left-0 right-0 -bottom-0.5 h-px bg-gradient-to-r from-black/0 via-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        </a>
                    </nav>

                    <div class="hidden md:block h-4 w-px bg-gray-200"></div>

                    <a class="group inline-flex h-9 items-center justify-center rounded-full bg-[hsl(240_5.9%_10%)] px-4 text-sm font-medium text-[hsl(0_0%_98%)] transition-all hover:bg-primary/90 hover:scale-105 hover:shadow-lg " href="../admin/login.php">
                        Login
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right ml-1 h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>

                    <button class="md:hidden inline-flex items-center justify-center rounded-full p-2.5 text-[hsl(240_3.8%_46.1%)] hover:text-[hsl(240_10%_3.9%)] transition-colors hover:bg-[hsl(240_4.8%_95.9%)] cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu">
                            <path d="M4 5h16" />
                            <path d="M4 12h16" />
                            <path d="M4 19h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <main class="flex-1">
            <div class="mx-auto max-w-md py-40 px-4">
                <div class="text-center mb-8" style="opacity: 1; transform: none;">
                    <div class="flex justify-center mb-6">
                        <div class="bg-[hsl(240_5.9%_10%/0.05)] p-3 rounded-full">
                            <div class="bg-[hsl(240_5.9%_10%/0.1)] p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in-icon lucide-log-in text-[hsl(240_5.9%_10%)]">
                                    <path d="m10 17 5-5-5-5" />
                                    <path d="M15 12H3" />
                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h1 class="text-3xl font-bold mb-3">Welcome Back</h1>
                    <p class="text-muted-foreground max-w-sm mx-auto">Log in to your account to access your dashboard.</p>
                </div>

                <div style="opacity: 1; transform: none;">
                    <form class="space-y-6 bg-card p-8 rounded-xl border border-[hsl(240_5.9%_90%)] shadow-xs" action="POST">
                        <div class="space-y-5">
                            <div class="space-y-2">
                                <label for="email" name="email" class="block text-sm font-medium">Email Address</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-[hsl(240_5.9%_90%)] rounded-md focus:outline-none focus:ring-2 focus:ring-[hsl(240_5.9%_10%/0.5)]" placeholder="you@example.com">
                            </div>

                            <div class="space-y-2">
                                <div class="flex items-center justify-between">
                                    <label for="password" class="block text-sm font-medium">Password</label>
                                </div>
                                <div class="relative">
                                    <input type="password" id="password" name="password" required class="w-full px-4 py-3 border border-[hsl(240_5.9%_90%)] rounded-md focus:outline-none focus:ring-2 focus:ring-[hsl(240_5.9%_10%/0.5)]" placeholder="••••••••">
                                    <button type="button" id="showPassword" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[hsl(240_3.8%_46.1%)] hover:text-[hsl(240_10%_3.9%)] transition-colors">
                                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="rememberMe" name="rememberMe" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                                    <label for="rememberMe" class="ml-2 block text-sm">Remember Me</label>
                                </div>
                                <a class="text-sm text-primary text-[hsl(240_3.8%_46.1%)] 
                                    hover:text-[hsl(240_10%_3.9%)]" href="#">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="w-full inline-flex justify-center items-center px-4 py-3 bg-[hsl(240_5.9%_10%)] 
                            text-[hsl(0_0%_98%)] 
                            hover:bg-[hsl(240_5.9%_10%/0.9)] rounded-md transition-all hover:shadow-md cursor-pointer">Log in
                            </button>
                        </div>
                    </form>
                </div>

                <div class="mt-5 mb-10 text-center">
                    <a class="inline-flex items-center text-sm text-[hsl(240_3.8%_46.1%)] 
                    hover:text-[hsl(240_10%_3.9%)] transition-colors" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left-icon lucide-chevron-left mr-1">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                        Back to home
                    </a>
                </div>
            </div>
        </main>

        <footer class="bg-black text-[hsl(0_0%_100%/.8)]">
            <div class="container py-16 md:py-24">
                <div class="grid gap-12 md:grid-cols-12">
                    <div class="md:col-span-4 space-y-4">
                        <a class="flex items-center gap-2" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-switch-camera-icon lucide-switch-camera w-6 h-6">
                                <path d=" M11 19H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h5" />
                                <path d="M13 5h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5" />
                                <circle cx="12" cy="12" r="3" />
                                <path d="m18 22-3-3 3-3" />
                                <path d="m6 2 3 3-3 3" />
                            </svg>
                            <span class="hidden font-bold sm:inline-block">SMARTCAM</span>
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

                    <div class="md:col-span-2 space-y-4">
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

                    <div class="md:col-span-2 space-y-4">
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

                    <div class="md:col-span-4 space-y-4">
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

    <script>
        lucide.createIcons();
    </script>

    <script src="../js/script.js"></script>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</body>

</html>