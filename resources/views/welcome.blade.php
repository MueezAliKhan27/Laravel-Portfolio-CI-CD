<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Professional Portfolio - Creative Developer & Designer</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-white dark:bg-slate-900 text-gray-900 dark:text-white overflow-x-hidden">
        <!-- Navigation Bar -->
        <nav class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-gray-200 dark:border-slate-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Portfolio</h1>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="#home" class="hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                            <a href="#about" class="hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium">About</a>
                            <a href="#projects" class="hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                            <a href="#skills" class="hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium">Skills</a>
                            <a href="#reviews" class="hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium">Reviews</a>
                            <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-50 dark:from-slate-800 to-blue-50 dark:to-slate-900 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-8 animate-bounce">
                    <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-br from-blue-400 to-purple-600 flex items-center justify-center text-white text-5xl font-bold">JD</div>
                </div>
                <h2 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                    PHP Backend Engineer & Full-Stack Developer
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                    Building beautiful, responsive web experiences with modern technologies. Let's create something amazing together!
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#projects" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition transform hover:scale-105">
                        View My Work
                    </a>
                    <a href="#contact" class="border-2 border-blue-600 text-blue-600 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-slate-700 font-bold py-3 px-8 rounded-lg transition">
                        Get In Touch
                    </a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 px-4 bg-white dark:bg-slate-800">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold mb-12 text-center">About Me</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="https://via.placeholder.com/400x400/6366f1/ffffff?text=Profile+Photo" alt="Profile" class="rounded-lg shadow-lg">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold mb-4">PHP Backend Engineer</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            I'm a passionate PHP Backend Engineer with 3+ years of professional experience building scalable web applications. Currently pursuing a Master's in Data Science, I combine technical expertise with data-driven decision making to deliver innovative solutions.
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            My expertise spans Laravel, Magento, and Symfony frameworks, with proven success in performance optimization, API integration, and database optimization. I've delivered projects that achieved 30% reduction in page load times and 15% improvement in query response times.
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            I'm eager to contribute to innovative, data-driven projects where I can leverage my technical skills and problem-solving abilities to create impactful solutions.
                        </p>
                        <div class="flex gap-4">
                            <a href="#" class="text-2xl hover:text-blue-600">📘</a>
                            <a href="#" class="text-2xl hover:text-blue-600">🐦</a>
                            <a href="#" class="text-2xl hover:text-blue-600">💼</a>
                            <a href="#" class="text-2xl hover:text-blue-600">🔗</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- My Details Section -->
        <section id="details" class="py-20 px-4 bg-gradient-to-br from-blue-50 dark:from-slate-900 to-purple-50 dark:to-slate-800">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold mb-12 text-center">My Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Professional Summary -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg hover:shadow-xl transition">
                        <h3 class="text-2xl font-bold mb-4 text-blue-600 dark:text-blue-400">👤 Professional Summary</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Full-stack web developer with 5+ years of experience in creating scalable, high-performance applications. Passionate about modern technologies and best practices. Dedicated to delivering exceptional user experiences and solving complex technical challenges.
                        </p>
                    </div>

                    <!-- Experience -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg hover:shadow-xl transition">
                        <h3 class="text-2xl font-bold mb-4 text-purple-600 dark:text-purple-400">💼 Experience</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="font-bold">PHP Backend Engineer</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Crescentic Digital | Aug 2024 - Dec 2024</p>
                            </div>
                            <div>
                                <p class="font-bold">Software Engineer</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">A.A Logics Pvt Ltd | Aug 2022 - Jul 2024</p>
                            </div>
                            <div>
                                <p class="font-bold">Junior Executive</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">ProByte | Jun 2021 - Aug 2022</p>
                            </div>
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg hover:shadow-xl transition">
                        <h3 class="text-2xl font-bold mb-4 text-pink-600 dark:text-pink-400">🎓 Education</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="font-bold">Master of Science in Data Science</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Arden University, Germany | 2024 - 2025</p>
                            </div>
                            <div>
                                <p class="font-bold">Bachelor of Science in Computer Science</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Muhammad Ali Jinnah University, Pakistan | 2018 - 2022</p>
                            </div>
                        </div>
                    </div>

                    <!-- Certifications -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg hover:shadow-xl transition">
                        <h3 class="text-2xl font-bold mb-4 text-green-600 dark:text-green-400">🏆 Certifications</h3>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            <li class="flex items-center"><span class="mr-2">✓</span> AWS Certified Solutions Architect</li>
                            <li class="flex items-center"><span class="mr-2">✓</span> Laravel Certification (Laracasts)</li>
                            <li class="flex items-center"><span class="mr-2">✓</span> Google Cloud Professional</li>
                        </ul>
                    </div>

                    <!-- Languages -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg hover:shadow-xl transition">
                        <h3 class="text-2xl font-bold mb-4 text-indigo-600 dark:text-indigo-400">🌐 Languages</h3>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            <li class="flex items-center"><span class="mr-2">�🇧</span> English (Proficiency)</li>
                            <li class="flex items-center"><span class="mr-2">🇩🇪</span> German (A2 - Improving)</li>
                            <li class="flex items-center"><span class="mr-2">🇵🇰</span> Urdu (Native)</li>
                        </ul>
                    </div>

                    <!-- Personal Interests -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg hover:shadow-xl transition">
                        <h3 class="text-2xl font-bold mb-4 text-orange-600 dark:text-orange-400">🎯 Interests</h3>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            <li class="flex items-center"><span class="mr-2">�</span> Data-Driven Projects</li>
                            <li class="flex items-center"><span class="mr-2">🔧</span> Performance Optimization</li>
                            <li class="flex items-center"><span class="mr-2">🚀</span> Innovative Solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-20 px-4 bg-gradient-to-br from-slate-50 dark:from-slate-900 to-blue-50 dark:to-slate-800">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold mb-12 text-center">Featured Projects</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project Card 1 -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                        <img src="https://via.placeholder.com/400x250/3b82f6/ffffff?text=E-Commerce+Platform" alt="Project" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">E-Commerce Platform</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">A full-stack e-commerce solution with payment integration and inventory management.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">Laravel</span>
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">React</span>
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-3 py-1 rounded-full text-sm">MySQL</span>
                            </div>
                            <a href="#" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">View Project →</a>
                        </div>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                        <img src="https://via.placeholder.com/400x250/8b5cf6/ffffff?text=Project+Management" alt="Project" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Project Management Tool</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Real-time collaboration platform with task tracking and team communication features.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm">Vue.js</span>
                                <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm">Node.js</span>
                                <span class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-3 py-1 rounded-full text-sm">MongoDB</span>
                            </div>
                            <a href="#" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">View Project →</a>
                        </div>
                    </div>

                    <!-- Project Card 3 -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                        <img src="https://via.placeholder.com/400x250/ec4899/ffffff?text=Analytics+Dashboard" alt="Project" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Analytics Dashboard</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Data visualization platform with real-time metrics and comprehensive reporting capabilities.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 px-3 py-1 rounded-full text-sm">Next.js</span>
                                <span class="bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 px-3 py-1 rounded-full text-sm">Chart.js</span>
                                <span class="bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 px-3 py-1 rounded-full text-sm">PostgreSQL</span>
                            </div>
                            <a href="#" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">View Project →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-20 px-4 bg-white dark:bg-slate-800">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold mb-12 text-center">Skills & Technologies</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gradient-to-br from-blue-50 dark:from-slate-700 to-blue-100 dark:to-slate-600 rounded-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-blue-600">Frontend & Languages</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span>PHP (Laravel, Magento, Symfony)</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>JavaScript</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>HTML5 & CSS3</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Bootstrap</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 88%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 dark:from-slate-700 to-purple-100 dark:to-slate-600 rounded-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-purple-600">Backend & APIs</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span>MySQL & PostgreSQL</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 93%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>REST APIs</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 92%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>GraphQL</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>API Integration</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-pink-50 dark:from-slate-700 to-pink-100 dark:to-slate-600 rounded-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-pink-600">Tools & DevOps</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span>Docker</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-pink-600 h-2 rounded-full" style="width: 88%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Git/GitHub</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-pink-600 h-2 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Linux (Ubuntu)</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-pink-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Jenkins & Jira</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-pink-600 h-2 rounded-full" style="width: 82%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-pink-50 dark:from-slate-700 to-pink-100 dark:to-slate-600 rounded-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-pink-600">Tools & DevOps</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span>Docker</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-pink-600 h-2 rounded-full" style="width: 88%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Git/GitHub</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-pink-600 h-2 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Linux (Ubuntu)</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-pink-600 h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Jenkins & Jira</span>
                                <div class="w-24 bg-gray-300 dark:bg-gray-600 rounded-full h-2">
                                    <div class="bg-pink-600 h-2 rounded-full" style="width: 82%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Section -->
        <section id="reviews" class="py-20 px-4 bg-gradient-to-br from-slate-50 dark:from-slate-900 to-blue-50 dark:to-slate-800">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl font-bold mb-12 text-center">Client Reviews</h2>
                <div class="relative">
                    <!-- Scroll Container -->
                    <div id="reviewsScroll" class="overflow-x-hidden pb-4 px-4 -mx-4 scroll-smooth">
                        <div class="flex gap-8 min-w-max">
                    <!-- Review 1 -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg flex-shrink-0 w-96">
                        <div class="flex mb-4">
                            <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            "John delivered an exceptional website for our startup. His attention to detail and understanding of modern design trends were outstanding. Highly recommended!"
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="https://via.placeholder.com/48x48/6366f1/ffffff?text=AB" alt="Client" class="w-12 h-12 rounded-full">
                            <div>
                                <p class="font-bold">Alice Brown</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">CEO, Tech Startup Inc</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg flex-shrink-0 w-96">
                        <div class="flex mb-4">
                            <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            "Professional, reliable, and incredibly talented. John transformed our vision into a stunning reality. Our conversion rate increased by 40% after the redesign!"
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="https://via.placeholder.com/48x48/8b5cf6/ffffff?text=MC" alt="Client" class="w-12 h-12 rounded-full">
                            <div>
                                <p class="font-bold">Michael Chen</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Marketing Director, E-Commerce Co</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg flex-shrink-0 w-96">
                        <div class="flex mb-4">
                            <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            "Best decision we made for our project. John's expertise in both frontend and backend development saved us months of development time."
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="https://via.placeholder.com/48x48/ec4899/ffffff?text=SR" alt="Client" class="w-12 h-12 rounded-full">
                            <div>
                                <p class="font-bold">Sarah Rodriguez</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Project Manager, Digital Agency</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg flex-shrink-0 w-96">
                        <div class="flex mb-4">
                            <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            "Exceptional work! John goes above and beyond. The communication throughout the project was excellent and the final product exceeded our expectations."
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="https://via.placeholder.com/48x48/f59e0b/ffffff?text=JK" alt="Client" class="w-12 h-12 rounded-full">
                            <div>
                                <p class="font-bold">James Khan</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Founder, Creative Studios</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 5 -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg flex-shrink-0 w-96">
                        <div class="flex mb-4">
                            <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            "John is a true professional. He delivered on time, on budget, and the quality was outstanding. Will definitely hire him for future projects!"
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="https://via.placeholder.com/48x48/06b6d4/ffffff?text=EP" alt="Client" class="w-12 h-12 rounded-full">
                            <div>
                                <p class="font-bold">Emma Patterson</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Business Owner, Fashion Retail</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 6 -->
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-8 shadow-lg flex-shrink-0 w-96">
                        <div class="flex mb-4">
                            <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            "Working with John was a game-changer for our company. His technical skills combined with creative thinking resulted in an amazing product our users love!"
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="https://via.placeholder.com/48x48/10b981/ffffff?text=DL" alt="Client" class="w-12 h-12 rounded-full">
                            <div>
                                <p class="font-bold">David Lee</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">CTO, SaaS Platform</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>

                    <!-- Scroll Buttons -->
                    <button id="scrollLeft" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white rounded-full p-3 shadow-lg transition transform hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button id="scrollRight" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white rounded-full p-3 shadow-lg transition transform hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 px-4 bg-white dark:bg-slate-800">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-12 text-center">Get In Touch</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-2xl font-bold mb-8">Let's Talk!</h3>
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="text-3xl">📧</div>
                                <div>
                                    <p class="font-semibold">Email</p>
                                    <p class="text-gray-600 dark:text-gray-400">john.dev@example.com</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="text-3xl">📱</div>
                                <div>
                                    <p class="font-semibold">Phone</p>
                                    <p class="text-gray-600 dark:text-gray-400">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="text-3xl">📍</div>
                                <div>
                                    <p class="font-semibold">Location</p>
                                    <p class="text-gray-600 dark:text-gray-400">San Francisco, CA</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="text-3xl">⏰</div>
                                <div>
                                    <p class="font-semibold">Availability</p>
                                    <p class="text-gray-600 dark:text-gray-400">Available for freelance & full-time projects</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold mb-2">Name</label>
                                <input type="text" placeholder="Your Name" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-2">Email</label>
                                <input type="email" placeholder="your@email.com" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-2">Message</label>
                                <textarea placeholder="Your message here..." rows="4" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 dark:bg-slate-950 text-white py-12 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <div>
                        <h4 class="text-xl font-bold mb-4">Portfolio</h4>
                        <p class="text-gray-400">Creating amazing web experiences one project at a time.</p>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#home" class="hover:text-white">Home</a></li>
                            <li><a href="#projects" class="hover:text-white">Projects</a></li>
                            <li><a href="#about" class="hover:text-white">About</a></li>
                            <li><a href="#contact" class="hover:text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-4">Services</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#" class="hover:text-white">Web Design</a></li>
                            <li><a href="#" class="hover:text-white">Development</a></li>
                            <li><a href="#" class="hover:text-white">Consulting</a></li>
                            <li><a href="#" class="hover:text-white">Maintenance</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-4">Follow</h4>
                        <div class="flex gap-4 text-2xl">
                            <a href="#" class="hover:text-blue-400">📘</a>
                            <a href="#" class="hover:text-blue-400">🐦</a>
                            <a href="#" class="hover:text-blue-400">💼</a>
                            <a href="#" class="hover:text-blue-400">🔗</a>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-700 mb-8">
                <div class="text-center text-gray-400">
                    <p>&copy; 2024 John Developer. All rights reserved. | Designed & Built by John</p>
                </div>
            </div>
        </footer>

        <script>
            const reviewsScroll = document.getElementById('reviewsScroll');
            const scrollLeftBtn = document.getElementById('scrollLeft');
            const scrollRightBtn = document.getElementById('scrollRight');

            // Scroll amount per click (one card width + gap)
            const scrollAmount = 400;

            scrollLeftBtn.addEventListener('click', () => {
                reviewsScroll.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            });

            scrollRightBtn.addEventListener('click', () => {
                reviewsScroll.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            });
        </script>
    </body>
</html>
