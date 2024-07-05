<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/laravel-2.svg" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Portofolio | Kim Geovedi</title>

</head>
<body class="bg-dark">
    {{-- Header Start --}}
    <header class="bg-transparent absolute shadow-xl top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="" class="font-bold text-lg text-primary block py-6">KIM GEOVEDI</a>
                </div>
                <div class="flex items-center px-4 ">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-nav shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-tulisan py-2 mx-8 flex group-hover:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-tulisan py-2 mx-8 flex group-hover:text-primary">About</a>
                            </li>
                            <li class="group">
                                <a href="#skills" class="text-base text-tulisan py-2 mx-8 flex group-hover:text-primary">Skills</a>
                            </li>
                            <li class="group">
                                <a href="#portofolio" class="text-base text-tulisan py-2 mx-8 flex group-hover:text-primary">Portofolio</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-tulisan py-2 mx-8 flex group-hover:text-primary">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- Header End --}}
    {{-- Hero Section --}}
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-tulisan md:text-xl">Hello, I am <span class="block font-bold text-primary text-4xl my-1 lg:text-5xl"><span class="typing-container">Kim Geovedi</span></span></h1>
                <h2 class=" font-medium text-lg mb-5 text-tulisan lg:text-2xl">Web Developer | <span class="text-primary">Data Analyst</span></h2>
                <p class="font-medium mb-10 text-paragraf leading-relaxed"></p>
            <a href="#" class="text-base  font-semibold bg-primary text-white py-3 px-8 rounded-full hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Contact Me</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="img/profile.png" alt="" class="max-w-full mx-auto">
                        <span class="absolute -top-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125 ">
                            <svg width="400" height="400"  viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#8b5cf6" d="M46.2,-49.7C58.6,-33.8,66.5,-16.9,64.3,-2.3C62,12.3,49.5,24.6,37.1,36.1C24.6,47.7,12.3,58.3,-2.8,61.2C-18,64,-36,59,-45.1,47.5C-54.1,36,-54.2,18,-50.8,3.4C-47.4,-11.2,-40.5,-22.4,-31.5,-38.4C-22.4,-54.3,-11.2,-74.9,2.8,-77.7C16.9,-80.6,33.8,-65.6,46.2,-49.7Z" transform="translate(100 100) scale(1.2)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}
    {{-- About Start --}}
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full mb-10 px-4 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">About Me</h4>
                    <h2 class="font-bold text-tulisan text-3xl mb-5 max-w-md lg:text-4xl">My Background</h2>
                    <p class="font-medium text-base text-paragraf max-w-xl lg:text-lg">Hello! I'm Kim Geovedi, a skilled web development and data analysis specialist. With a strong background in creating dynamic and responsive websites, I bring expertise in HTML, CSS, JavaScript, and Laravel. I also excel in data visualization and business intelligence using Looker Studio and Excel.

                        My journey in the tech world began with a passion for problem-solving and a keen eye for detail. Over the years, I have honed my skills and gained certifications as a Data Analyst from RevoU and Data Analyst for Business Development from PT LPP Agro Nusantara (PTPN Group).</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semi-bold text-tulisan text-base mb-6 lg:text-3xl lg:pt-10">let's collaborate</h3>
                    <p class="font-medium text-base text-paragraf max-w-xl mb-10 lg:text-lg">I pride myself on delivering high-quality, efficient, and effective solutions tailored to meet the unique needs of my clients. Whether it's building a user-friendly website or creating insightful dashboards for decision support systems, I am committed to excellence and continuous improvement. <p class="font-medium text-base text-paragraf max-w-xl mb-10 lg:text-lg">Let's collaborate to turn your vision into reality with cutting-edge technology and data-driven insights!</p></p>
                <div class="flex items-center">
                    {{-- Youtube --}}
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white hover:scale-150 wy-8 duration-500">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    {{-- Youtube --}}
                    {{-- Instagram --}}
                    <a href="https://www.instagram.com/kim_geovedi" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:scale-150 wy-8 duration-500 hover:text-white">
                        <svg role="img" width="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                    </a>
                    {{-- Instagram --}}
                    {{-- Github --}}
                    <a href="https://github.com/kim-geovedi" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white hover:scale-150 wy-8 duration-500">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                    {{-- Github --}}
                    {{-- LinkedIn --}}
                    <a href="https://www.linkedin.com/in/mohamad-mustofa-hakim/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white hover:scale-150 wy-8 duration-500">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    {{-- LinkedIn --}}
                </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}
       {{-- Skills Start --}}
       <section id="skills" class="pt-36 pb-16 bg-transaparent bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary">My Skills</h4>
                    <h2 class="font-bold text-tulisan text-3xl mb-4 sm:text-4xl lg:text-5xl">My Experience</h2>
                    <p class="font-medium text-md text-paragraf lg:text-lg">With my combination of skills, I am ready to assist you in web development and data analysis projects with efficient, effective, and high-quality solutions.</p>
                </div>
            </div>
            <div class="w-full grid grid-cols-2 sm:grid-cols-4 gap-4 text-center py-8">
                <div class="shadow-md shadow-[#040c16] w-full hover:scale-110 wy-8 grayscale hover:grayscale-0 duration-500">
                    <img src="img/skills/html-1.svg" class="w-20 mx-auto ">
                    <p class="text-white my-3 text-center">HTML</p>
                </div>
                <div class="shadow-md shadow-[#040c16] w-full hover:scale-110 wy-8 duration-500 grayscale hover:grayscale-0">
                    <img src="img/skills/css-3.svg" class="w-20 mx-auto">
                    <p class="text-white my-3 text-center">CSS</p>
                </div>
                <div class="shadow-md shadow-[#040c16] w-full hover:scale-110 wy-8 duration-500 grayscale hover:grayscale-0">
                    <img src="img/skills/javascript-1.svg" class="w-20 mx-auto">
                    <p class="text-white my-3 text-center">JAVASCRIPT</p>
                </div>
                <div class="shadow-md shadow-[#040c16] w-full hover:scale-110 wy-8 duration-500 grayscale hover:grayscale-0">
                    <img src="img/laravel-2.svg" class="w-20 mx-auto">
                    <p class="text-white my-4 text-center">LARAVEL</p>
                </div>
                <div class="shadow-md shadow-[#040c16] w-full hover:scale-110 wy-8 duration-500 grayscale hover:grayscale-0">
                    <img src="img/skills/tailwind-css-2.svg" class="mx-auto w-32">
                    <p class="text-white align-text-bottom my-4">TAILWIND</p>
                </div>
                <div class="shadow-md shadow-[#040c16] w-full hover:scale-110 wy-8 duration-500 grayscale hover:grayscale-0">
                    <img src="img/skills/looker-1.svg" class="w-full mx-auto">
                    <p class="text-white my-3 text-center">LOOKER</p>
                </div>
                <div class="shadow-md shadow-[#040c16] w-full hover:scale-110 wy-8 duration-500 grayscale hover:grayscale-0">
                    <img src="img/skills/excel-4.svg" class="w-20 mx-auto">
                    <p class="text-white my-3 text-center">EXCEL</p>
                </div>
                <div class="shadow-md shadow-[#040c16] w-full hover:scale-110 wy-8 duration-500 grayscale hover:grayscale-0">
                    <img src="img/skills/bootstrap-5-1.svg" class="w-20 mx-auto">
                    <p class="text-white my-3 text-center">BOOTSTRAP</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Skills End --}}
    {{-- Portofolio Start --}}
    {{-- <section id="portofolio" class="pt-36 pb-16 bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary">Portofolio</h4>
                    <h2 class="font-bold text-tulisan text-3xl mb-4 sm:text-4xl lg:text-5xl">Project Terbaru</h2>
                    <p class="font-medium text-md text-paragraf lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quos nemo excepturi corrupti! Asperiores et eveniet quis. Provident, quaerat nihil.</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/1.png" alt="App-sales" width="w-full">
                        <h3 class="font-semibold text-tulisan text-xl mt-5 mb-3">Invoice App Sales</h3>
                        <p class="font-medium text-base text-paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repellendus obcaecati dignissimos?</p>
                    </div>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/2.png" alt="App-sales" width="w-full">
                        <h3 class="font-semibold text-tulisan text-xl mt-5 mb-3">Knowledge Management System</h3>
                        <p class="font-medium text-base text-paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repellendus obcaecati dignissimos?</p>
                    </div>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/3.png" alt="App-sales" width="w-full">
                        <h3 class="font-semibold text-tulisan text-xl mt-5 mb-3">Dashboar Human Resource Development</h3>
                        <p class="font-medium text-base text-paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repellendus obcaecati dignissimos?</p>
                    </div>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/4.png" alt="App-sales" width="w-full">
                        <h3 class="font-semibold text-tulisan text-xl mt-5 mb-3">Web E-Commerce</h3>
                        <p class="font-medium text-base text-paragraf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repellendus obcaecati dignissimos?</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- Portofolio End--}}
    {{-- blog Start --}}
    <section id="portofolio" class="pt-36 pb-16 bg-transaparent">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary">Portofolio</h4>
                    <h2 class="font-bold text-tulisan text-3xl mb-4 sm:text-4xl lg:text-5xl">This Is My Portofolio</h2>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="img/Porto Dashboard_page-0002.jpg" alt="" class="w-full">
                        <div class="py-4 px-4">
                            <h3><a href="" class="block mb-3 font-semibold text-dark text-xl hover:text-primary truncate">Dashboard Human Resource Development</a></h3>
                            <p class="font-medium text-base text-tulisan mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, expedita?</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-70">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="img/Screenshot 2024-07-04 210344.png" alt="" class="w-full h-56">
                        <div class="py-4 px-4">
                            <h3><a href="" class="block mb-3 font-semibold text-dark text-xl hover:text-primary truncate">Invoice App Sales</a></h3>
                            <p class="font-medium text-base text-tulisan mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, expedita?</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-70">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://placehold.co/360x200" alt="" class="w-full">
                        <div class="py-4 px-4">
                            <h3><a href="" class="block mb-3 font-semibold text-dark text-xl hover:text-primary truncate">Tips Belajar Programming</a></h3>
                            <p class="font-medium text-base text-tulisan mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, expedita?</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-70">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Blog End --}}
    {{-- contact start --}}
    <section id="contact" class="pt-36 pb-16 bg-transaparent">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary">Contact</h4>
                    <h2 class="font-bold text-tulisan text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
                    <p class="font-medium text-md text-paragraf lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quos nemo excepturi corrupti! Asperiores et eveniet quis. Provident, quaerat nihil.</p>
                </div>
            </div>
            <form action="">
                <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
                <label for="name" class="text-base text-primary font-bold upp">Name :</label>
            <input type="text" name="name" id="name" class="w-full bg-paragraf p-3 rounded-md focus:outline- focus:ring-primary focus:right-1 focus:border-primary"/>
            </div>
            <div class="w-full px-4 mb-8">
                <label for="email" class="text-base text-primary font-bold upp">Email :</label>
            <input type="text" name="email" id="email" class="w-full bg-paragraf p-3 rounded-md focus:outline- focus:ring-primary focus:right-1 focus:border-primary"/>
            </div>
            <div class="w-full px-4 mb-8">
                <label for="pesan" class="text-base text-primary font-bold upp">Pesan :</label>
            <textarea type="text" name="pesan" id="pesan" class="w-full bg-paragraf p-3 rounded-md focus:outline- focus:ring-primary focus:right-1 focus:border-primary h-32"></textarea>
            </div>
            <div class="w-full px-4">
                <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
            </div>
        </div>
            </form>
        </div>
    </section>
    {{-- contact end --}}
    {{-- footer start --}}
    <footer class="bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    {{-- Youtube --}}
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    {{-- Youtube --}}
                    {{-- Instagram --}}
                    <a href="https://www.instagram.com/kim_geovedi/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                    </a>
                    {{-- Instagram --}}
                    {{-- Github --}}
                    <a href="https://github.com/kim-geovedi" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                    {{-- Github --}}
                    {{-- LinkedIn --}}
                    <a href="https://www.linkedin.com/in/mohamad-mustofa-hakim/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    {{-- LinkedIn --}}
                </div>
                <p class="font-medium text-sm text-slate-500 text-center mb-3"> Dibuat Oleh Kim Geovedi, Menggunakan Tailwind Css</p>
            </div>
        </div>
    </footer>
    {{-- footer end --}}
    <script src="js/scripts.js"></script>
</body>
</html>
