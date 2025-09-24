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
                                    <a href="./dashboard.php"
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
                                    <button onclick="toggleMenu(this)"
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

                                    <ul class="submenu h-0 opacity-0 overflow-hidden border-l border-[#e2e8f0] border-opacity-0 mx-3.5 flex min-w-0 translate-x-px flex-col gap-1 px-2.5">
                                        <li class="group/menu-sub-item relative">
                                            <a href="./users.php"
                                                class="text-sidebar-foreground ring-sidebar-ring hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)] active:bg-sidebar-accent active:text-sidebar-accent-foreground flex h-7 min-w-0 -translate-x-px items-center gap-2 overflow-hidden rounded-md px-2 outline-hidden focus-visible:ring-2 focus-visible:ring-[oklch(0.704_0.04_256.788)] disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 [&>svg]:text-inherit data-[active=true]:bg-sidebar-accent data-[active=true]:text-sidebar-accent-foreground text-sm group-data-[collapsible=icon]:hidden">
                                                <span>Users</span>
                                            </a>
                                        </li>

                                        <li class="group/menu-sub-item relative">
                                            <a href="#"
                                                class="text-sidebar-foreground ring-sidebar-ring hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)] active:bg-sidebar-accent active:text-sidebar-accent-foreground flex h-7 min-w-0 -translate-x-px items-center gap-2 overflow-hidden rounded-md px-2 outline-hidden focus-visible:ring-2 focus-visible:ring-[oklch(0.704_0.04_256.788)] disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 [&>svg]:text-inherit data-[active=true]:bg-sidebar-accent data-[active=true]:text-sidebar-accent-foreground text-sm group-data-[collapsible=icon]:hidden">
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tooltip -->
                                    <div
                                        class="pointer-events-none absolute left-[calc(100%+10px)] top-1/2 z-20 -translate-y-1/2 whitespace-nowrap rounded-md bg-gray-900 px-2 py-1 text-xs text-white opacity-0 translate-x-[-6px] transition-all duration-300 ease-out group-hover/menu-item:opacity-100 group-hover/menu-item:translate-x-0 group-data-[collapsible=icon]:pointer-events-auto group-data-[collapsible=icon]:block hidden before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-[4px] before:border-y-[6px] before:border-r-[6px] before:border-y-transparent before:border-r-gray-900 content-['']">
                                        User Management
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

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scroll-text-icon lucide-scroll-text" aria-hidden="true">
                                            <path d="M15 12h-5" />
                                            <path d="M15 8h-5" />
                                            <path d="M19 17V5a2 2 0 0 0-2-2H4" />
                                            <path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                                        </svg>
                                        <span>Attendance</span>
                                    </a>

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

                        <!-- When the admin left scroll down the notification, it must back to top when opened again || new notifs always on top -->
                        <div class="relative">
                            <button id="notifBtn"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium cursor-pointer size-9 rounded-full hover:bg-gray-100 relative"
                                type="button" aria-haspopup="menu">

                                <!-- Bell icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell-icon lucide-bell w-5 h-5" aria-hidden="true">
                                    <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                                    <path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326" />
                                </svg>

                                <!-- Red badge -->
                                <span
                                    class="absolute -top-0.5 -right-0.5 flex h-4 w-4 items-center justify-center rounded-full bg-red-600 text-[10px] font-semibold text-white shadow">
                                    2
                                </span>
                            </button>

                            <!-- Dropdown -->
                            <div id="notifMenu"
                                class="absolute right-0 mt-2 w-80 origin-top-right rounded-xl border border-gray-200 bg-white shadow-lg transition-all duration-300 ease-out transform scale-95 opacity-0 pointer-events-none">

                                <!-- Header -->
                                <div class="flex justify-center px-4 py-3 border-b border-gray-200">
                                    <h3 class="text-sm font-semibold text-gray-900">Notifications</h3>
                                </div>

                                <!-- Notifications list -->
                                <div class="max-h-96 overflow-y-auto divide-y divide-gray-100">
                                    <!-- Item -->
                                    <div class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition">
                                        <img src="https://i.pravatar.cc/40?img=1" class="h-10 w-10 rounded-full" />
                                        <div class="flex-1">
                                            <p class="text-sm"><span class="font-semibold text-gray-900">Guard John</span> detected an unrecognized ID at <span class="font-medium">Main Gate</span></p>
                                            <p class="text-xs text-gray-500">Guard • 5 min ago</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition bg-blue-50">
                                        <img src="https://i.pravatar.cc/40?img=2" class="h-10 w-10 rounded-full" />
                                        <div class="flex-1">
                                            <p class="text-sm"><span class="font-semibold text-gray-900">Student Alex</span> scanned ID successfully at <span class="font-medium">North Gate</span></p>
                                            <p class="text-xs text-gray-500">Student • 28 min ago</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition">
                                        <img src="https://i.pravatar.cc/40?img=3" class="h-10 w-10 rounded-full" />
                                        <div class="flex-1">
                                            <p class="text-sm"><span class="font-semibold text-gray-900">Guard Maria</span> flagged a student for missing ID scan in <span class="font-medium">Class 10B</span></p>
                                            <p class="text-xs text-gray-500">Guard • 1 hour ago</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition">
                                        <img src="https://i.pravatar.cc/40?img=4" class="h-10 w-10 rounded-full" />
                                        <div class="flex-1">
                                            <p class="text-sm"><span class="font-semibold text-gray-900">Student Emily</span> attempted entry with expired ID at <span class="font-medium">Side Gate</span></p>
                                            <p class="text-xs text-gray-500">Student • 3 hours ago</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition">
                                        <img src="https://i.pravatar.cc/40?img=5" class="h-10 w-10 rounded-full" />
                                        <div class="flex-1">
                                            <p class="text-sm"><span class="font-semibold text-gray-900">Guard Kevin</span> approved late entry for <span class="font-medium">Student Brian</span></p>
                                            <p class="text-xs text-gray-500">Guard • 5 hours ago</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3 px-4 py-3 hover:bg-gray-50 transition">
                                        <img src="https://i.pravatar.cc/40?img=6" class="h-10 w-10 rounded-full" />
                                        <div class="flex-1">
                                            <p class="text-sm"><span class="font-semibold text-gray-900">Teacher Lisa</span> reviewed attendance logs for <span class="font-medium">Class 12A</span></p>
                                            <p class="text-xs text-gray-500">Teacher • 1 day ago</p>
                                        </div>
                                    </div>
                                </div>


                                <!-- Footer -->
                                <div class="border-t border-gray-200">
                                    <a href="#"
                                        class="block px-4 py-3 text-center text-sm font-medium text-blue-600 hover:bg-blue-50">View all</a>
                                </div>
                            </div>
                        </div>

                        <!-- Profile button -->
                        <div class="relative">
                            <button id="profileMenuBtn"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none cursor-pointer disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 hover:bg-accent hover:text-accent-foreground px-4 py-2 has-[>svg]:px-3 relative h-8 w-8 rounded-full"
                                type="button" aria-haspopup="menu">
                                <span class="relative flex size-8 shrink-0 overflow-hidden rounded-full h-8 w-8">
                                    <span class="bg-gray-100 flex size-full items-center justify-center rounded-full">KF</span>
                                </span>
                            </button>

                            <!-- Dropdown -->
                            <div id="profileMenu"
                                class="absolute right-0 mt-2 w-56 origin-top-right rounded-xl border border-gray-200 bg-white shadow-lg transition transform scale-95 opacity-0 pointer-events-none">
                                <div class="px-4 py-3">
                                    <p class="text-sm font-medium text-gray-900">Kenneth Francisco</p>
                                    <p class="text-sm text-gray-500 truncate">shurikendev@gmail.com</p>
                                </div>
                                <div class="border-t border-gray-200">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                </div>
                                <div class="border-t border-gray-200">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Log out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard -->
            <main class="px-4 py-6 @7xl/content:mx-auto @7xl/content:w-full @7xl/content:max-w-7xl">
                <div class="mb-2 flex flex-wrap items-center justify-between space-y-2">
                    <div>
                        <h2 class="text-2xl font-bold tracking-tight">User List</h2>
                        <p class="text-">Manage your users and their roles here.</p>
                    </div>

                    <!-- Add User Button -->
                    <div>
                        <button id="addUser"
                            class="inline-flex items-center gap-2 rounded-lg bg-black px-4 h-10 text-sm font-medium text-white shadow-sm transition-colors hover:bg-gray-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-gray-400 disabled:pointer-events-none disabled:opacity-50 cursor-pointer">
                            <span class="hidden sm:inline">Add User</span>
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <line x1="19" x2="19" y1="8" y2="14" />
                                <line x1="22" x2="16" y1="11" y2="11" />
                            </svg>
                        </button>
                    </div>

                    <!-- Add User Modal -->
                    <div id="userModal"
                        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 transition-opacity duration-200 opacity-0">

                        <div class="bg-white w-full max-w-lg mx-4 rounded-xl shadow-lg relative transform scale-95 transition-transform duration-200">
                            <!-- Header -->
                            <div class="flex items-center justify-between border-b border-gray-300 px-6 py-4">
                                <div>
                                    <h2 class="text-lg font-semibold">Add New User</h2>
                                    <p class="text-sm text-gray-500">Create new user here. Click save when you're done.</p>
                                </div>
                                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-x">
                                        <path d="M18 6 6 18" />
                                        <path d="m6 6 12 12" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Scrollable Body -->
                            <div class="max-h-[60vh] overflow-y-auto px-6 py-4 space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">First Name</label>
                                    <input type="text" id="firstName" placeholder="John"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Middle Name (Optional)</label>
                                    <input type="text" id="middleName" placeholder="Smith"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Last Name</label>
                                    <input type="text" id="lastName" placeholder="Doe"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Role</label>
                                    <select id="role"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30">
                                        <option selected disabled hidden>Select a role</option>
                                        <option>Security Guard</option>
                                        <option>Teacher</option>
                                        <option>Student</option>
                                        <option>Parent/Guardian</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" id="email" placeholder="john.doe@gmail.com"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Contact Number</label>
                                    <input type="tel" id="contact" placeholder="+639123456789"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Parent Contact</label>
                                    <input type="text" id="parentContact" placeholder="Email or +639123456789"
                                        pattern="(^\+?\d{7,15}$)|(^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$)"
                                        title="Enter a valid email or phone number"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Birthdate</label>
                                    <input type="date" id="birthdate"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Country</label>
                                    <select id="country"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30">
                                        <option value="">Select Country</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Province</label>
                                    <select id="province"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30">
                                        <option value="">Select Province</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">City / Municipality</label>
                                    <select id="city"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30">
                                        <option value="">Select City</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Street / Barangay</label>
                                    <input type="text" id="street" placeholder="Enter Street or Barangay"
                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="border-t border-gray-300 px-6 py-4 flex justify-end">
                                <button type="submit"
                                    class="rounded-lg bg-black px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="-mx-4 flex-1 overflow-auto px-4 py-1 lg:flex-row lg:space-y-0 lg:space-x-12">
                    <div class="space-y-4 max-sm:has-[div[role=&quot;toolbar&quot;]]:mb-16">
                        <div class="flex items-center justify-between">
                            <div class="flex flex-1 flex-col-reverse items-start gap-3 sm:flex-row sm:items-center sm:gap-4">
                                <!-- Search Input -->
                                <input
                                    type="text"
                                    placeholder="Filter users..."
                                    class="file:text-foreground placeholder:text-gray-400 selection:bg-black selection:text-white
      border border-gray-300 rounded-md bg-white px-3 py-2 text-sm shadow-sm 
      transition-all duration-200 ease-in-out outline-none 
      focus:border-black focus:ring-2 focus:ring-black/80
      disabled:pointer-events-none disabled:opacity-50
      w-full sm:w-[200px] lg:w-[250px]" />

                                <!-- Filter Buttons -->
                                <div class="flex gap-2">
                                    <!-- Status -->
                                    <button
                                        class="inline-flex items-center justify-center gap-1.5 rounded-md border border-gray-300 
        bg-white px-3 py-2 text-sm font-medium shadow-sm 
        transition-all duration-200 ease-in-out
        hover:bg-gray-100 hover:text-gray-900
        focus:outline-none h-9">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock">
                                            <path d="M12 6v6l4 2" />
                                            <circle cx="12" cy="12" r="10" />
                                        </svg>
                                        <span class="inline">Status</span>
                                    </button>

                                    <!-- Role -->
                                    <button
                                        class="inline-flex items-center justify-center gap-1.5 rounded-md border border-gray-300 
        bg-white px-3 py-2 text-sm font-medium shadow-sm 
        transition-all duration-200 ease-in-out
        hover:bg-gray-100 hover:text-gray-900
        focus:outline-none h-9">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-user-round-icon lucide-circle-user-round">
                                            <path d="M18 20a6 6 0 0 0-12 0" />
                                            <circle cx="12" cy="10" r="4" />
                                            <circle cx="12" cy="12" r="10" />
                                        </svg>
                                        <span class="inline">Role</span>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="overflow-hidden rounded-md border border-gray-300">
                            <div class="relative w-full overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 hover:[&::-webkit-scrollbar-thumb]:bg-gray-400 [&::-webkit-scrollbar-thumb]:rounded-full">
                                <table class="w-full caption-bottom text-sm border border-gray-200 rounded-md overflow-hidden">
                                    <thead class="bg-blue-100 [&_tr]:border-b">
                                        <tr class="border-b transition-colors group/row border-gray-300">
                                            <th
                                                class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap sticky start-0 z-10 rounded-tl-md">
                                                <button
                                                    class="peer border border-gray-300 bg-white size-4 shrink-0 rounded-[4px] shadow-xs transition-shadow outline-none focus-visible:ring-2 focus-visible:ring-blue-500 data-[state=checked]:bg-blue-600 data-[state=checked]:border-blue-600 data-[state=checked]:text-white"></button>
                                            </th>

                                            <th class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap">ID</th>
                                            <th class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap">Full Name</th>
                                            <th class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap">Role</th>
                                            <th class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap">Email</th>
                                            <th class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap">Contact Number</th>
                                            <th class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap">Parent Contact</th>
                                            <th class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap">Birthdate</th>
                                            <th class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap">Address</th>
                                            <th class="text-gray-900 h-12 px-4 text-start align-middle font-medium whitespace-nowrap">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody class="[&_tr:last-child]:border-0">
                                        <tr class="hover:bg-gray-50 border-b border-gray-300 transition-colors duration-200 ease-in-out group/row">
                                            <td class="px-4 py-3 align-middle whitespace-nowrap sticky start-0 z-10 bg-white transition-colors duration-200 ease-in-out group-hover/row:bg-gray-50">
                                                <button
                                                    class="peer border border-gray-300 bg-white size-4 shrink-0 rounded-[4px] shadow-xs transition-shadow outline-none focus-visible:ring-2 focus-visible:ring-blue-500 data-[state=checked]:bg-blue-600 data-[state=checked]:border-blue-600 data-[state=checked]:text-white">
                                                </button>
                                            </td>

                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">1</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">Kevin Stratvert</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">Teacher</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">kevinstvrt@gmail.com</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">+639352863828</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">email/contact number</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">2000-02-05</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">Philippines, Cebu City</div>
                                            </td>

                                            <!-- Actions -->
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="flex items-center gap-3">
                                                    <!-- Edit User Button -->
                                                    <button id="editUser"
                                                        class="inline-flex items-center justify-center rounded-md border border-blue-500 bg-blue-50 px-3 py-1.5 text-sm font-medium text-blue-700 shadow-sm transition-colors duration-200 ease-in-out hover:bg-blue-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                                                        Edit
                                                    </button>

                                                    <!-- Edit Modal -->
                                                    <div id="editModal"
                                                        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 transition-opacity duration-200 opacity-0">
                                                        <div
                                                            class="bg-white w-full max-w-lg mx-4 rounded-xl shadow-lg relative transform scale-95 transition-transform duration-200">

                                                            <!-- Header -->
                                                            <div class="flex items-center justify-between border-b border-gray-300 px-6 py-4">
                                                                <div>
                                                                    <h2 class="text-lg font-semibold">Edit User</h2>
                                                                    <p class="text-sm text-gray-500">Update user details and click save when done.</p>
                                                                </div>
                                                                <button id="closeEditModal" class="text-gray-500 hover:text-gray-700">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round" class="lucide lucide-x">
                                                                        <path d="M18 6 6 18" />
                                                                        <path d="m6 6 12 12" />
                                                                    </svg>
                                                                </button>
                                                            </div>

                                                            <!-- Scrollable Body -->
                                                            <div class="max-h-[60vh] overflow-y-auto px-6 py-4 space-y-3">
                                                                <input type="hidden" id="editUserId" />

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">First Name</label>
                                                                    <input type="text" id="editFirstName" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Middle Name (Optional)</label>
                                                                    <input type="text" id="editMiddleName" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Last Name</label>
                                                                    <input type="text" id="editLastName" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Role</label>
                                                                    <select id="editRole" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30">
                                                                        <option selected disabled hidden>Select a role</option>
                                                                        <option>Security Guard</option>
                                                                        <option>Teacher</option>
                                                                        <option>Student</option>
                                                                        <option>Parent/Guardian</option>
                                                                    </select>
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                                                    <input type="email" id="editEmail" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Contact Number</label>
                                                                    <input type="tel" id="editContact" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Parent Contact</label>
                                                                    <input type="text" id="editParentContact" pattern="(^\+?\d{7,15}$)|(^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$)"
                                                                        class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Birthdate</label>
                                                                    <input type="date" id="editBirthdate" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Country</label>
                                                                    <select id="editCountry" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30"></select>
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Province</label>
                                                                    <select id="editProvince" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30"></select>
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">City / Municipality</label>
                                                                    <select id="editCity" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30"></select>
                                                                </div>

                                                                <div>
                                                                    <label class="block text-sm font-medium text-gray-700">Street / Barangay</label>
                                                                    <input type="text" id="editStreet" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-black focus:ring focus:ring-black/30" />
                                                                </div>
                                                            </div>

                                                            <!-- Footer -->
                                                            <div class="border-t border-gray-300 px-6 py-4 flex justify-end">
                                                                <button type="submit" id="saveEdit"
                                                                    class="rounded-lg bg-black px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                                                    Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Archive Button -->
                                                    <button
                                                        class="inline-flex items-center justify-center rounded-md border border-amber-500 bg-amber-50 px-3 py-1.5 text-sm font-medium text-amber-700 shadow-sm transition-colors duration-200 ease-in-out hover:bg-amber-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-500">
                                                        Archive
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-gray-50 border-b border-gray-300 transition-colors duration-200 ease-in-out group/row">
                                            <td class="px-4 py-3 align-middle whitespace-nowrap sticky start-0 z-10 bg-white transition-colors duration-200 ease-in-out group-hover/row:bg-gray-50">
                                                <button
                                                    class="peer border border-gray-300 bg-white size-4 shrink-0 rounded-[4px] shadow-xs transition-shadow outline-none focus-visible:ring-2 focus-visible:ring-blue-500 data-[state=checked]:bg-blue-600 data-[state=checked]:border-blue-600 data-[state=checked]:text-white">
                                                </button>
                                            </td>

                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">2</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">Mike Nazarenoob</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">Student</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">mikedoe@gmail.com</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">+639178888888</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">contact number only</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">1995-07-20</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">Philippines, Nueva Ecija</div>
                                            </td>

                                            <!-- Actions -->
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="flex items-center gap-3">
                                                    <!-- Edit Button -->
                                                    <button
                                                        class="inline-flex items-center justify-center rounded-md border border-blue-500 bg-blue-50 px-3 py-1.5 text-sm font-medium text-blue-700 shadow-sm transition-colors duration-200 ease-in-out hover:bg-blue-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                                                        Edit
                                                    </button>

                                                    <!-- Archive Button -->
                                                    <button
                                                        class="inline-flex items-center justify-center rounded-md border border-amber-500 bg-amber-50 px-3 py-1.5 text-sm font-medium text-amber-700 shadow-sm transition-colors duration-200 ease-in-out hover:bg-amber-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-500">
                                                        Archive
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-gray-50 border-b border-gray-300 transition-colors duration-200 ease-in-out group/row">
                                            <td class="px-4 py-3 align-middle whitespace-nowrap sticky start-0 z-10 bg-white transition-colors duration-200 ease-in-out group-hover/row:bg-gray-50">
                                                <button
                                                    class="peer border border-gray-300 bg-white size-4 shrink-0 rounded-[4px] shadow-xs transition-shadow outline-none focus-visible:ring-2 focus-visible:ring-blue-500 data-[state=checked]:bg-blue-600 data-[state=checked]:border-blue-600 data-[state=checked]:text-white">
                                                </button>
                                            </td>

                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">3</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">Maria Altina</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">Parent</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">maria.altina@gmail.com</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">+639171234567</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">contact number only</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">1995-11-23</div>
                                            </td>
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="max-w-40">Philippines, Bulacan</div>
                                            </td>

                                            <!-- Actions -->
                                            <td class="px-4 py-3 align-middle whitespace-nowrap transition-colors duration-200 ease-in-out">
                                                <div class="flex items-center gap-3">
                                                    <!-- Edit Button -->
                                                    <button
                                                        class="inline-flex items-center justify-center rounded-md border border-blue-500 bg-blue-50 px-3 py-1.5 text-sm font-medium text-blue-700 shadow-sm transition-colors duration-200 ease-in-out hover:bg-blue-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                                                        Edit
                                                    </button>

                                                    <!-- Archive Button -->
                                                    <button
                                                        class="inline-flex items-center justify-center rounded-md border border-amber-500 bg-amber-50 px-3 py-1.5 text-sm font-medium text-amber-700 shadow-sm transition-colors duration-200 ease-in-out hover:bg-amber-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-500">
                                                        Archive
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="flex items-center justify-between overflow-clip px-2 @max-2xl/content:flex-col-reverse @max-2xl/content:gap-4" style="overflow-clip-margin: 1px;">
                            <div class="flex w-full items-center justify-between">
                                <div class="flex w-[100px] items-center justify-center text-sm font-medium @2xl/content:hidden">
                                    Page 1 of 100
                                </div>
                                <div class="flex items-center gap-2 @max-2xl/content:flex-row-reverse">
                                    <button class="border-input data-[placeholder]:text-muted-foreground [&_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 rounded-md border border-gray-300 bg-transparent px-3 py-2 text-sm whitespace-nowrap shadow-xs transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4 h-8 w-[70px]">
                                        <span style="pointer-events: none;">10</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down size-4 opacity-50">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>
                                    <p class="hidden text-sm font-medium sm:block">Rows per page</p>
                                </div>
                            </div>

                            <div class="flex items-center sm:space-x-6 lg:space-x-8">
                                <div class="flex w-[100px] items-center justify-center text-sm font-medium @max-3xl/content:hidden">
                                    Page 1 of 100
                                </div>

                                <div class="flex items-center space-x-2">
                                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border border-gray-300 bg-white hover:bg-gray-100 shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 has-[>svg]:px-3 size-8 p-0">
                                        <span class="sr-only">Go to previous page</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left-icon lucide-chevron-left w-4 h-4 opacity-50">
                                            <path d="m15 18-6-6 6-6" />
                                        </svg>
                                    </button>

                                    <div class="flex items-center">
                                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-black text-white shadow-xs hover:bg-black/90 py-2 has-[>svg]:px-3 h-8 min-w-8 px-2">
                                            <span class="sr-only">Go to page 1</span>
                                            1
                                        </button>
                                    </div>

                                    <div class="flex items-center">
                                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border border-gray-300 bg-white shadow-xs hover:bg-gray-100 hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 py-2 has-[>svg]:px-3 h-8 min-w-8 px-2">
                                            <span class="sr-only">Go to page 2</span>
                                            2
                                        </button>
                                    </div>

                                    <div class="flex items-center">
                                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border border-gray-300 bg-white shadow-xs hover:bg-gray-100 hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 py-2 has-[>svg]:px-3 h-8 min-w-8 px-2">
                                            <span class="sr-only">Go to page 3</span>
                                            3
                                        </button>
                                    </div>

                                    <div class="flex items-center">
                                        <span class="text-muted-foreground px-1 text-sm">
                                            ...
                                        </span>
                                    </div>

                                    <div class="flex items-center">
                                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border border-gray-300 bg-white shadow-xs hover:bg-gray-100 hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 py-2 has-[>svg]:px-3 h-8 min-w-8 px-2">
                                            <span class="sr-only">100</span>
                                            100
                                        </button>
                                    </div>

                                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border border-gray-300 bg-white hover:bg-gray-100 shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 has-[>svg]:px-3 size-8 p-0">
                                        <span class="sr-only">Go to next page</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right w-4 h-4 opacity-50">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Sidebar Toggle -->
    <div class="mobile-overlay fixed inset-0 bg-black/50 opacity-0 invisible z-50 transition-opacity duration-300 ease-in-out" data-state="closed"></div>

    <div class="mobile-sidebar fixed inset-y-0 start-0 z-50 flex flex-col gap-4 
    shadow-lg border-e border-gray-200 sm:max-w-sm 
    bg-[oklch(1_0_0)] text-sidebar-foreground 
    w-[18rem] p-0 [&>button]:hidden
    transform -translate-x-full transition-transform duration-300 ease-in-out"
        data-state="closed"
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
                            <a href="./dashboard.php"
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
                        </li>

                        <li class="group/menu-item relative">
                            <button onclick="toggleMenu(this)"
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

                            <ul class="submenu h-0 opacity-0 overflow-hidden border-l border-[#e2e8f0] border-opacity-0 mx-3.5 flex min-w-0 translate-x-px flex-col gap-1 px-2.5">
                                <li class="group/menu-sub-item relative">
                                    <a href="./users.php"
                                        class="text-sidebar-foreground ring-sidebar-ring hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)] active:bg-sidebar-accent active:text-sidebar-accent-foreground flex h-7 min-w-0 -translate-x-px items-center gap-2 overflow-hidden rounded-md px-2 outline-hidden focus-visible:ring-2 focus-visible:ring-[oklch(0.704_0.04_256.788)] disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 [&>svg]:text-inherit data-[active=true]:bg-sidebar-accent data-[active=true]:text-sidebar-accent-foreground text-sm group-data-[collapsible=icon]:hidden">
                                        <span>Users</span>
                                    </a>
                                </li>

                                <li class="group/menu-sub-item relative">
                                    <a href="#"
                                        class="text-sidebar-foreground ring-sidebar-ring hover:bg-[oklch(0.968_0.007_247.896)] hover:text-[oklch(0.208_0.042_265.755)] active:bg-sidebar-accent active:text-sidebar-accent-foreground flex h-7 min-w-0 -translate-x-px items-center gap-2 overflow-hidden rounded-md px-2 outline-hidden focus-visible:ring-2 focus-visible:ring-[oklch(0.704_0.04_256.788)] disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 [&>span:last-child]:truncate [&>svg]:size-4 [&>svg]:shrink-0 [&>svg]:text-inherit data-[active=true]:bg-sidebar-accent data-[active=true]:text-sidebar-accent-foreground text-sm group-data-[collapsible=icon]:hidden">
                                        <span>Archive</span>
                                    </a>
                                </li>
                            </ul>
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

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scroll-text-icon lucide-scroll-text" aria-hidden="true">
                                    <path d="M15 12h-5" />
                                    <path d="M15 8h-5" />
                                    <path d="M19 17V5a2 2 0 0 0-2-2H4" />
                                    <path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                                </svg>
                                <span>Attendance</span>
                            </a>
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
    <script src="../js/profile.js"></script>
    <script src="../js/notification.js"></script>
    <script src="../js/addUser.js"></script>
    <script src="../js/editUser.js"></script>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

</body>

</html>