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
    <title>Dashboard</title>
</head>

<body>
    <!-- Top Progress Bar -->
    <div class="fixed top-0 left-0 z-50 h-[2px] w-full bg-transparent">
        <div class="h-full w-0 bg-[#62748e] opacity-100">
            <div class="absolute left-[-5.5%] h-full w-[5%] -translate-y-[2px] rotate-2 opacity-100 shadow-[0_0_10px_#62748e,0_0_10px_#62748e]"></div>
        </div>
    </div>

    <div class="flex min-h-svh w-full" style="--sidebar-width: 16rem; --sidebar-width-icon: 3rem;">

        <!-- Sidebar -->
        <aside id="sidebar" class="group peer text-[oklch(0.129 0.042 264.695)] hidden md:block" data-state="expanded" data-collapsible data-variant="inset" data-side="left" data-slot="sidebar">
            <div class="relative w-(--sidebar-width) bg-transparent transition-[width] duration-200 ease-linear group-data-[collapsible=offcanvas]:w-0 group-data-[side=right]:rotate-180 group-data-[collapsible=icon]:w-[calc(var(--sidebar-width-icon)+(--spacing(4)))]"></div>
            <div class="fixed inset-y-0 z-10 hidden h-svh w-(--sidebar-width) transition-[inset-inline,width] duration-200 ease-linear md:flex start-0 group-data-[collapsible=offcanvas]:-start-[calc(var(--sidebar-width))] p-2 group-data-[collapsible=icon]:w-[calc(var(--sidebar-width-icon)+(--spacing(4))+2px)]">
                <div class="bg-[oklch(1 0 0)] group-data-[variant=floating]:border-sidebar-border flex h-full w-full flex-col group-data-[variant=floating]:rounded-lg group-data-[variant=floating]:border group-data-[variant=floating]:shadow-sm">

                    <!-- User Profile -->
                    <div class="flex flex-col gap-2 p-2">
                        <ul class="flex w-full min-w-0 flex-col gap-1">
                            <li class="group/menu-item relative">
                                <button class="peer/menu-button flex w-full items-center gap-2 overflow-hidden cursor-pointer rounded-md p-2 text-start outline-hidden ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2  disabled:pointer-events-none disabled:opacity-50 group-has-data-[sidebar=menu-action]/menu-item:pe-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 group-data-[collapsible=icon]:size-8! [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 hover:bg-[oklch(0.968_0.007_247.896)] h-12 text-sm group-data-[collapsible=icon]:p-0! data-[state=open]:bg-sidebar-accent data-[state=open]:text-sidebar-accent-foreground">
                                    <div class="bg-[#020618] text-[#fcf9fa] flex aspect-square size-8 items-center justify-center rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-school-icon lucide-school size-4" aria-hidden="true">
                                            <path d="M14 21v-3a2 2 0 0 0-4 0v3" />
                                            <path d="M18 5v16" />
                                            <path d="m4 6 7.106-3.79a2 2 0 0 1 1.788 0L20 6" />
                                            <path d="m6 11-3.52 2.147a1 1 0 0 0-.48.854V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a1 1 0 0 0-.48-.853L18 11" />
                                            <path d="M6 5v16" />
                                            <circle cx="12" cy="9" r="2" />
                                        </svg>
                                    </div>
                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <span class="truncate font-semibold">Holy Cross College</span>
                                        <span class="truncate text-xs">Admin</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down ms-auto" aria-hidden="true">
                                        <path d="m7 15 5 5 5-5" />
                                        <path d="m7 9 5-5 5 5" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>

                    <!-- Navigation Menu -->
                    <section class="flex min-h-0 flex-1 flex-col gap-2">
                        <div class="relative flex w-full min-w-0 flex-col p-2">
                            <div class=" flex h-8 shrink-0 items-center rounded-md px-2 text-gray-700 text-xs font-medium outline-hidden transition-[margin,opacity] duration-200 ease-linear focus-visible:ring-2 [&>svg]:size-4 [&>svg]:shrink-0 group-data-[collapsible=icon]:-mt-8 group-data-[collapsible=icon]:opacity-0">General</div>
                            <ul class="flex w-full min-w-0 flex-col gap-1">
                                <li class="group/menu-item relative">
                                    <a href="#"
                                        class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden
    transition-[width,height,padding] focus-visible:ring-2
    disabled:pointer-events-none disabled:opacity-50
    [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0
    h-8 text-sm
    hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)]
    focus-visible:ring-[oklch(0.704_0.04_256.788)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-layout-dashboard-icon lucide-layout-dashboard"
                                            aria-hidden="true">
                                            <rect width="7" height="9" x="3" y="3" rx="1" />
                                            <rect width="7" height="5" x="14" y="3" rx="1" />
                                            <rect width="7" height="9" x="14" y="12" rx="1" />
                                            <rect width="7" height="5" x="3" y="16" rx="1" />
                                        </svg>
                                        <span>Dashboard</span>
                                    </a>

                                    <!-- Tooltip -->
                                    <div
                                        class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                        Dashboard
                                    </div>

                                </li>

                                <li class="group/menu-item relative">
                                    <a href="#"
                                        class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden
    transition-[width,height,padding] focus-visible:ring-2
    disabled:pointer-events-none disabled:opacity-50
    [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0
    h-8 text-sm
    hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)]
    focus-visible:ring-[oklch(0.704_0.04_256.788)]">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scan-eye-icon lucide-scan-eye" aria-hidden="true">
                                            <path d="M3 7V5a2 2 0 0 1 2-2h2" />
                                            <path d="M17 3h2a2 2 0 0 1 2 2v2" />
                                            <path d="M21 17v2a2 2 0 0 1-2 2h-2" />
                                            <path d="M7 21H5a2 2 0 0 1-2-2v-2" />
                                            <circle cx="12" cy="12" r="1" />
                                            <path d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0" />
                                        </svg>
                                        <span>Live Monitoring</span>
                                    </a>

                                    <!-- Tooltip -->
                                    <div
                                        class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                        Live Monitoring
                                    </div>
                                </li>

                                <li class="group/menu-item relative">
                                    <button
                                        class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 focus-visible:ring-[oklch(0.704_0.04_256.788)] active:bg-sidebar-accent active:text-sidebar-accent-foreground disabled:pointer-events-none disabled:opacity-50 group-has-data-[sidebar=menu-action]/menu-item:pe-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent data-[state=open]:hover:text-sidebar-accent-foreground group-data-[collapsible=icon]:size-8! group-data-[collapsible=icon]:p-2! [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)] h-8 text-sm">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users" aria-hidden="true">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <circle cx="9" cy="7" r="4" />
                                        </svg>
                                        <span>User Management</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right ms-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90"
                                            aria-hidden="true">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </button>

                                    <!-- Tooltip -->
                                    <div
                                        class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                        User Management
                                    </div>
                                </li>

                                <li class="group/menu-item relative">
                                    <button
                                        class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 focus-visible:ring-[oklch(0.704_0.04_256.788)] active:bg-sidebar-accent active:text-sidebar-accent-foreground disabled:pointer-events-none disabled:opacity-50 group-has-data-[sidebar=menu-action]/menu-item:pe-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent data-[state=open]:hover:text-sidebar-accent-foreground group-data-[collapsible=icon]:size-8! group-data-[collapsible=icon]:p-2! [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)] h-8 text-sm">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scroll-text-icon lucide-scroll-text" aria-hidden="true">
                                            <path d="M15 12h-5" />
                                            <path d="M15 8h-5" />
                                            <path d="M19 17V5a2 2 0 0 0-2-2H4" />
                                            <path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                                        </svg>
                                        <span>Attendance</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right ms-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90"
                                            aria-hidden="true">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </button>

                                    <!-- Tooltip -->
                                    <div
                                        class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                        Attendance
                                    </div>
                                </li>

                                <li class="group/menu-item relative">
                                    <a href="#"
                                        class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden
    transition-[width,height,padding] focus-visible:ring-2
    disabled:pointer-events-none disabled:opacity-50
    [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0
    h-8 text-sm
    hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)]
    focus-visible:ring-[oklch(0.704_0.04_256.788)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-files-icon lucide-files" aria-hidden="true">
                                            <path d="M15 2a2 2 0 0 1 1.414.586l4 4A2 2 0 0 1 21 8v7a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" />
                                            <path d="M15 2v4a2 2 0 0 0 2 2h4" />
                                            <path d="M5 7a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h8a2 2 0 0 0 1.732-1" />
                                        </svg>
                                        <span>Reports</span>
                                    </a>

                                    <!-- Tooltip -->
                                    <div
                                        class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                        Reports
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <button
                        data-sidebar="rail"
                        data-slot="sidebar-rail"
                        aria-label="Toggle Sidebar"
                        tabindex="-1"
                        title="Toggle Sidebar"
                        class="absolute inset-y-0 z-20 hidden w-4 -translate-x-1/2 transition-all ease-linear group-data-[side=left]:-end-4 group-data-[side=right]:start-0 after:absolute after:inset-y-0 after:start-1/2 after:w-[2px] hover:after:bg-[hsl(214.19_33.11%_91.43%)] sm:flex in-data-[side=left]:cursor-w-resize in-data-[side=right]:cursor-e-resize [[data-side=left][data-state=collapsed]_&]:cursor-e-resize [[data-side=right][data-state=collapsed]_&]:cursor-w-resize hover:group-data-[collapsible=offcanvas]:bg-sidebar group-data-[collapsible=offcanvas]:translate-x-0 group-data-[collapsible=offcanvas]:after:start-full [[data-side=left][data-collapsible=offcanvas]_&]:-end-2 [[data-side=right][data-collapsible=offcanvas]_&]:-start-2 rtl:translate-x-1/2 rtl:in-data-[side=left]:cursor-e-resize rtl:in-data-[side=right]:cursor-w-resize rtl:[[data-side=left][data-state=collapsed]_&]:cursor-w-resize rtl:[[data-side=right][data-state=collapsed]_&]:cursor-e-resize">
                    </button>

                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="bg-[oklch(1 0 0)] relative flex w-full flex-1 flex-col md:peer-data-[variant=inset]:m-2 md:peer-data-[variant=inset]:ms-0 md:peer-data-[variant=inset]:rounded-xl md:peer-data-[variant=inset]:shadow-sm md:peer-data-[variant=inset]:peer-data-[state=collapsed]:ms-2 @container/content has-[[data-layout=fixed]]:h-svh peer-data-[variant=inset]:has-[[data-layout=fixed]]:h-[calc(100svh-(var(--spacing)*4))]">

            <header class="z-50 h-16 shadow-none">
                <div class="relative flex h-full items-center gap-3 p-4 sm:gap-4">
                    <button id="toggleSidebar"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none cursor-pointer disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive border border-gray-200 bg-background shadow-xs hover:bg-accent hover:text-accent-foreground size-7 max-md:scale-125">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-panel-left-icon lucide-panel-left" aria-hidden="true">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M9 3v18" />
                        </svg>
                        <span class="sr-only">Toggle Sidebar</span>
                    </button>

                    <div class="ms-auto flex items-center space-x-6">
                        <button
                            class="group inline-flex items-center gap-2 whitespace-nowrap transition-all disabled:pointer-events-none cursor-pointer disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive border border-gray-300 hover:text-gray-900 px-4 py-2 has-[>svg]:px-3 bg-gray-50/40 hover:bg-gray-100/50 text-gray-500 relative h-8 w-full flex-1 justify-start rounded-md text-sm font-normal shadow-none sm:w-40 sm:pe-12 md:flex-none lg:w-52 xl:w-64">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-search absolute start-1.5 top-1/2 -translate-y-1/2"
                                aria-hidden="true">
                                <path d="m21 21-4.34-4.34" />
                                <circle cx="11" cy="11" r="8" />
                            </svg>

                            <span class="ms-4">Search</span>

                            <kbd
                                class="bg-gray-100 group-hover:bg-gray-50 absolute end-[0.3rem] top-[0.3rem] hidden h-5 items-center gap-1 rounded border border-gray-300 px-1.5 font-mono text-[10px] font-medium opacity-100 select-none sm:flex">
                                <span class="text-xs">Ctrl K</span>
                            </kbd>
                        </button>

                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none cursor-pointer disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive hover:bg-gray-100 hover:text-accent-foreground size-9 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell-icon lucide-bell" aria-hidden="true">
                                <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                                <path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326" />
                            </svg>
                        </button>

                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none cursor-pointer disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 hover:bg-accent hover:text-accent-foreground px-4 py-2 has-[>svg]:px-3 relative h-8 w-8 rounded-full" type="button" aria-haspopup="menu" data-state="closed">
                            <span class="relative flex size-8 shrink-0 overflow-hidden rounded-full h-8 w-8">
                                <span class="bg-gray-100 flex size-full items-center justify-center rounded-full">KF</span>
                            </span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Dashboard -->
            <main class="px-4 py-6 @7xl/content:mx-auto @7xl/content:w-full @7xl/content:max-w-7xl">
                <div class="mb-6 flex items-center justify-between">
                    <h1 class="text-2xl font-bold tracking-tight">Dashboard</h1>
                    <div class="flex items-center space-x-2">
                        <button
                            class="inline-flex items-center justify-center gap-2 rounded-lg text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-3 focus-visible:ring-offset-1 focus-visible:ring-gray-400/50 bg-black hover:bg-gray-800 text-white shadow h-9 px-4 py-2 cursor-pointer">
                            Download
                        </button>
                    </div>
                </div>

                <section class="flex-1 outline-none space-y-4">
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        <article class="bg-white text-black flex flex-col gap-4 rounded-xl border border-gray-200 py-6 shadow-sm">
                            <div class="@container/card-header auto-rows-min grid-rows-[auto_auto] gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 flex flex-row items-center justify-between space-y-0 pb-2">
                                <h2 class="text-sm font-medium">Today's Attendance</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-round-icon lucide-users-round w-5 h-5 text-gray-500" aria-hidden="true">
                                    <path d="M18 21a8 8 0 0 0-16 0" />
                                    <circle cx="10" cy="8" r="5" />
                                    <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                                </svg>
                            </div>
                            <div class="px-6">
                                <h3 class="text-3xl font-extrabold text-gray-900">9,123</h3>
                                <!-- <p class="text-gray-500 text-xs">+20.1% from last month</p> -->
                            </div>
                        </article>

                        <article class="bg-white text-black flex flex-col gap-4 rounded-xl border border-gray-200 py-6 shadow-sm">
                            <div class="@container/card-header auto-rows-min grid-rows-[auto_auto] gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 flex flex-row items-center justify-between space-y-0 pb-2">
                                <h2 class="text-sm font-medium">Active Cameras</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera-icon lucide-camera w-5 h-5 text-gray-500" aria-hidden="true">
                                    <path d="M13.997 4a2 2 0 0 1 1.76 1.05l.486.9A2 2 0 0 0 18.003 7H20a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1.997a2 2 0 0 0 1.759-1.048l.489-.904A2 2 0 0 1 10.004 4z" />
                                    <circle cx="12" cy="13" r="3" />
                                </svg>
                            </div>
                            <div class="px-6">
                                <h3 class="text-3xl font-extrabold text-gray-900">5/5</h3>
                            </div>
                        </article>

                        <article class="bg-white text-black flex flex-col gap-4 rounded-xl border border-gray-200 py-6 shadow-sm">
                            <div class="@container/card-header auto-rows-min grid-rows-[auto_auto] gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 flex flex-row items-center justify-between space-y-0 pb-2">
                                <h2 class="text-sm font-medium">Alerts</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert w-5 h-5 text-gray-500" aria-hidden="true">
                                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
                                    <path d="M12 9v4" />
                                    <path d="M12 17h.01" />
                                </svg>
                            </div>
                            <div class="px-6">
                                <h3 class="text-3xl font-extrabold text-gray-900">2</h3>
                            </div>
                        </article>

                        <article class="bg-white text-black flex flex-col gap-4 rounded-xl border border-gray-200 py-6 shadow-sm">
                            <div class="@container/card-header auto-rows-min grid-rows-[auto_auto] gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 flex flex-row items-center justify-between space-y-0 pb-2">
                                <h2 class="text-sm font-medium">Flagged</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flag-off-icon lucide-flag-off w-5 h-5 text-gray-500" aria-hidden="true">
                                    <path d="M16 16c-3 0-5-2-8-2a6 6 0 0 0-4 1.528" />
                                    <path d="m2 2 20 20" />
                                    <path d="M4 22V4" />
                                    <path d="M7.656 2H8c3 0 5 2 7.333 2q2 0 3.067-.8A1 1 0 0 1 20 4v10.347" />
                                </svg>
                            </div>
                            <div class="px-6">
                                <h3 class="text-3xl font-extrabold text-gray-900">5</h3>
                            </div>
                        </article>
                    </div>

                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-7">

                        <article class="bg-[oklch(1 0 0)] text-[oklch(0.129 0.042 264.695)] flex flex-col gap-6 rounded-xl border border-gray-200 py-6 shadow-sm col-span-1 lg:col-span-4">
                            <header class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                <h2 class="leading-none font-semibold">Overview</h2>
                            </header>
                            <figure class="px-6 ps-5.5">
                                <div class="h-[400px] w-full">
                                    <canvas id="overviewChart"></canvas>
                                </div>
                                <figcaption class="sr-only">Bar chart showing monthly student attendance</figcaption>
                            </figure>
                        </article>

                        <div class="bg-[oklch(1 0 0)] text-[oklch(0.129 0.042 264.695)] flex flex-col gap-6 rounded-xl border border-gray-200 py-6 shadow-sm col-span-1 lg:col-span-3">
                            <div class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                <div class="leading-none font-semibold">Recent Attendance</div>
                                <div class="text-muted-foreground text-sm">SmartCam captured 999 students today.</div>
                            </div>

                            <div class="px-6">
                                <div class="space-y-8">
                                    <div class="flex items-center gap-4">
                                        <span class="relative flex size-8 shrink-0 overflow-hidden rounded-full h-9 w-9">
                                            <span class="bg-purple-100 flex size-full items-center justify-center rounded-full">KF</span>
                                        </span>
                                        <div class="flex flex-1 flex-wrap items-center justify-between">
                                            <div class="space-y-1">
                                                <p class="text-sm leading-none font-medium">Kenneth Francisco</p>
                                                <p class="text-muted-foreground text-sm">12342022@holycross.edu.ph</p>
                                            </div>
                                            <div class="font-medium">7:00 AM</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <span class="relative flex size-8 shrink-0 overflow-hidden rounded-full h-9 w-9">
                                            <span class="bg-green-100 flex size-full items-center justify-center rounded-full">DG</span>
                                        </span>
                                        <div class="flex flex-1 flex-wrap items-center justify-between">
                                            <div class="space-y-1">
                                                <p class="text-sm leading-none font-medium">Don Galo Agus</p>
                                                <p class="text-muted-foreground text-sm">91012022@holycross.edu.ph</p>
                                            </div>
                                            <div class="font-medium">7:00 AM</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <span class="relative flex size-8 shrink-0 overflow-hidden rounded-full h-9 w-9">
                                            <span class="bg-lime-100 flex size-full items-center justify-center rounded-full">ME</span>
                                        </span>
                                        <div class="flex flex-1 flex-wrap items-center justify-between">
                                            <div class="space-y-1">
                                                <p class="text-sm leading-none font-medium">Mhike Evangelista</p>
                                                <p class="text-muted-foreground text-sm">1415022@holycross.edu.ph</p>
                                            </div>
                                            <div class="font-medium">7:00 AM</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <span class="relative flex size-8 shrink-0 overflow-hidden rounded-full h-9 w-9">
                                            <span class="bg-orange-100 flex size-full items-center justify-center rounded-full">JM</span>
                                        </span>
                                        <div class="flex flex-1 flex-wrap items-center justify-between">
                                            <div class="space-y-1">
                                                <p class="text-sm leading-none font-medium">Jay-l Millanes</p>
                                                <p class="text-muted-foreground text-sm">56782022@holycross.edu.ph</p>
                                            </div>
                                            <div class="font-medium">7:00 AM</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <span class="relative flex size-8 shrink-0 overflow-hidden rounded-full h-9 w-9">
                                            <span class="bg-red-100 flex size-full items-center justify-center rounded-full">MD</span>
                                        </span>
                                        <div class="flex flex-1 flex-wrap items-center justify-between">
                                            <div class="space-y-1">
                                                <p class="text-sm leading-none font-medium">Mark Aian Dela Cruz</p>
                                                <p class="text-muted-foreground text-sm">1213022@holycross.edu.ph</p>
                                            </div>
                                            <div class="font-medium">7:00 AM</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <span class="relative flex size-8 shrink-0 overflow-hidden rounded-full h-9 w-9">
                                            <span class="bg-sky-100 flex size-full items-center justify-center rounded-full">AT</span>
                                        </span>
                                        <div class="flex flex-1 flex-wrap items-center justify-between">
                                            <div class="space-y-1">
                                                <p class="text-sm leading-none font-medium">Arjel Talplacido</p>
                                                <p class="text-muted-foreground text-sm">1617022@holycross.edu.ph</p>
                                            </div>
                                            <div class="font-medium">7:00 AM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <div class="mobile-overlay hidden data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 fixed inset-0 z-50 bg-black/50"></div>

    <div class="mobile-sidebar hidden data-[state=open]:animate-in data-[state=closed]:animate-out 
    fixed z-50 flex flex-col gap-4 shadow-lg transition ease-in-out 
    data-[state=closed]:duration-300 data-[state=open]:duration-500
    data-[state=closed]:slide-out-to-start data-[state=open]:slide-in-from-start 
    inset-y-0 start-0 h-full border-e border-gray-200 sm:max-w-sm 
    bg-[oklch(1_0_0)] text-sidebar-foreground w-(--sidebar-width) p-0 [&>button]:hidden"
        style="--sidebar-width: 18rem; pointer-events: auto;">
        <div class="flex h-full w-full flex-col">
            <div class="flex flex-col gap-2 p-2">
                <ul class="flex w-full min-w-0 flex-col gap-1">
                    <li class="group/menu-item relative">
                        <button class="peer/menu-button flex w-full items-center gap-2 overflow-hidden cursor-pointer rounded-md p-2 text-start outline-hidden ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2  disabled:pointer-events-none disabled:opacity-50 group-has-data-[sidebar=menu-action]/menu-item:pe-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 group-data-[collapsible=icon]:size-8! [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 hover:bg-[oklch(0.968_0.007_247.896)] h-12 text-sm group-data-[collapsible=icon]:p-0! data-[state=open]:bg-sidebar-accent data-[state=open]:text-sidebar-accent-foreground">
                            <div class="bg-[#020618] text-[#fcf9fa] flex aspect-square size-8 items-center justify-center rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-school-icon lucide-school size-4" aria-hidden="true">
                                    <path d="M14 21v-3a2 2 0 0 0-4 0v3" />
                                    <path d="M18 5v16" />
                                    <path d="m4 6 7.106-3.79a2 2 0 0 1 1.788 0L20 6" />
                                    <path d="m6 11-3.52 2.147a1 1 0 0 0-.48.854V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a1 1 0 0 0-.48-.853L18 11" />
                                    <path d="M6 5v16" />
                                    <circle cx="12" cy="9" r="2" />
                                </svg>
                            </div>
                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">Holy Cross College</span>
                                <span class="truncate text-xs">Admin</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down ms-auto" aria-hidden="true">
                                <path d="m7 15 5 5 5-5" />
                                <path d="m7 9 5-5 5 5" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>

            <section class="flex min-h-0 flex-1 flex-col gap-2">
                <div class="relative flex w-full min-w-0 flex-col p-2">
                    <div class=" flex h-8 shrink-0 items-center rounded-md px-2 text-gray-700 text-xs font-medium outline-hidden transition-[margin,opacity] duration-200 ease-linear focus-visible:ring-2 [&>svg]:size-4 [&>svg]:shrink-0 group-data-[collapsible=icon]:-mt-8 group-data-[collapsible=icon]:opacity-0">General</div>
                    <ul class="flex w-full min-w-0 flex-col gap-1">
                        <li class="group/menu-item relative">
                            <a href="#"
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden
    transition-[width,height,padding] focus-visible:ring-2
    disabled:pointer-events-none disabled:opacity-50
    [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0
    h-8 text-sm
    hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)]
    focus-visible:ring-[oklch(0.704_0.04_256.788)]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-layout-dashboard-icon lucide-layout-dashboard"
                                    aria-hidden="true">
                                    <rect width="7" height="9" x="3" y="3" rx="1" />
                                    <rect width="7" height="5" x="14" y="3" rx="1" />
                                    <rect width="7" height="9" x="14" y="12" rx="1" />
                                    <rect width="7" height="5" x="3" y="16" rx="1" />
                                </svg>
                                <span>Dashboard</span>
                            </a>

                            <!-- Tooltip -->
                            <div
                                class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                Dashboard
                            </div>

                        </li>

                        <li class="group/menu-item relative">
                            <a href="#"
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden
    transition-[width,height,padding] focus-visible:ring-2
    disabled:pointer-events-none disabled:opacity-50
    [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0
    h-8 text-sm
    hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)]
    focus-visible:ring-[oklch(0.704_0.04_256.788)]">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scan-eye-icon lucide-scan-eye" aria-hidden="true">
                                    <path d="M3 7V5a2 2 0 0 1 2-2h2" />
                                    <path d="M17 3h2a2 2 0 0 1 2 2v2" />
                                    <path d="M21 17v2a2 2 0 0 1-2 2h-2" />
                                    <path d="M7 21H5a2 2 0 0 1-2-2v-2" />
                                    <circle cx="12" cy="12" r="1" />
                                    <path d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0" />
                                </svg>
                                <span>Live Monitoring</span>
                            </a>

                            <!-- Tooltip -->
                            <div
                                class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                Live Monitoring
                            </div>
                        </li>

                        <li class="group/menu-item relative">
                            <button
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 focus-visible:ring-[oklch(0.704_0.04_256.788)] active:bg-sidebar-accent active:text-sidebar-accent-foreground disabled:pointer-events-none disabled:opacity-50 group-has-data-[sidebar=menu-action]/menu-item:pe-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent data-[state=open]:hover:text-sidebar-accent-foreground group-data-[collapsible=icon]:size-8! group-data-[collapsible=icon]:p-2! [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)] h-8 text-sm">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users" aria-hidden="true">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <circle cx="9" cy="7" r="4" />
                                </svg>
                                <span>User Management</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-right ms-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90"
                                    aria-hidden="true">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </button>

                            <!-- Tooltip -->
                            <div
                                class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                User Management
                            </div>
                        </li>

                        <li class="group/menu-item relative">
                            <button
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 focus-visible:ring-[oklch(0.704_0.04_256.788)] active:bg-sidebar-accent active:text-sidebar-accent-foreground disabled:pointer-events-none disabled:opacity-50 group-has-data-[sidebar=menu-action]/menu-item:pe-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent data-[state=open]:hover:text-sidebar-accent-foreground group-data-[collapsible=icon]:size-8! group-data-[collapsible=icon]:p-2! [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)] h-8 text-sm">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scroll-text-icon lucide-scroll-text" aria-hidden="true">
                                    <path d="M15 12h-5" />
                                    <path d="M15 8h-5" />
                                    <path d="M19 17V5a2 2 0 0 0-2-2H4" />
                                    <path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                                </svg>
                                <span>Attendance</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chevron-right ms-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90"
                                    aria-hidden="true">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </button>

                            <!-- Tooltip -->
                            <div
                                class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                Attendance
                            </div>
                        </li>

                        <li class="group/menu-item relative">
                            <a href="#"
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-start outline-hidden
    transition-[width,height,padding] focus-visible:ring-2
    disabled:pointer-events-none disabled:opacity-50
    [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0
    h-8 text-sm
    hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)]
    focus-visible:ring-[oklch(0.704_0.04_256.788)]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-files-icon lucide-files" aria-hidden="true">
                                    <path d="M15 2a2 2 0 0 1 1.414.586l4 4A2 2 0 0 1 21 8v7a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" />
                                    <path d="M15 2v4a2 2 0 0 0 2 2h4" />
                                    <path d="M5 7a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h8a2 2 0 0 0 1.732-1" />
                                </svg>
                                <span>Reports</span>
                            </a>

                            <!-- Tooltip -->
                            <div
                                class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                Reports
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/chart.js"></script>
    <script src="../js/sidebar-toggle.js"></script>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

</body>

</html>