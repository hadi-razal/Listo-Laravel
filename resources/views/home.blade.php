@extends('layouts.guest')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-700 via-amber-800 to-amber-900 text-white font-poppins">


    <div class="container mx-auto px-4 py-8 lg:py-16">
        <div class="max-w-7xl mx-auto">

            <!-- Hero Section -->
            <div class="text-center space-y-8 lg:space-y-12 mb-20 lg:mb-32">

                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-amber-500/20 border border-amber-400/30 rounded-full text-sm text-amber-200 backdrop-blur-sm">
                    <span class="w-2 h-2 bg-amber-400 rounded-full mr-2 animate-pulse"></span>
                    Trusted by 50,000+ users worldwide
                </div>

                <!-- Main Heading -->
                <h1 class="font-extrabold text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl leading-tight tracking-tight">
                    Your Ideas,
                    <span class="text-amber-300 block">Organized & Secure</span>
                </h1>

                <!-- Subheading -->
                <p class="max-w-4xl mx-auto text-lg sm:text-xl lg:text-2xl font-light opacity-90 leading-relaxed px-4">
                    Transform the way you capture, organize, and share your thoughts with ListoNotes.
                    The intelligent notes app that grows with your creativity and keeps your data protected.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 items-center justify-center px-4 pt-6">
                    <a href="/register"
                       class="group w-full sm:w-auto bg-amber-500 hover:bg-amber-400 text-white font-semibold py-4 px-10 rounded-xl shadow-2xl hover:shadow-amber-500/25 transform hover:-translate-y-1 transition-all duration-300 text-center text-lg">
                        <span class="mr-2">🚀</span>
                        Start Free Trial
                        <span class="ml-2 group-hover:translate-x-1 transition-transform inline-block">→</span>
                    </a>
                    <a href="/demo"
                       class="group w-full sm:w-auto border-2 border-amber-400 hover:bg-amber-400/20 text-white font-semibold py-4 px-10 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 text-center text-lg">
                        <span class="mr-2">👀</span>
                        Watch Demo
                    </a>
                </div>

                <!-- Social Proof -->
                <div class="pt-8">
                    <p class="text-amber-200/70 text-sm mb-4">Loved by teams at</p>
                    <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                        <div class="bg-white/10 px-4 py-2 rounded-lg text-sm font-medium">TechCorp</div>
                        <div class="bg-white/10 px-4 py-2 rounded-lg text-sm font-medium">University</div>
                        <div class="bg-white/10 px-4 py-2 rounded-lg text-sm font-medium">StartupXYZ</div>
                        <div class="bg-white/10 px-4 py-2 rounded-lg text-sm font-medium">Design Studio</div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div id="features" class="mb-20 lg:mb-32">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-5xl font-bold mb-6">
                        Why Choose <span class="text-amber-300">ListoNotes?</span>
                    </h2>
                    <p class="text-xl text-amber-100/80 max-w-3xl mx-auto">
                        Powerful features designed to supercharge your productivity and keep your ideas flowing.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10 mb-16">

                    <!-- Feature 1 -->
                    <div class="group bg-white/5 backdrop-blur-md p-8 lg:p-10 rounded-3xl shadow-2xl border border-white/10 hover:border-amber-400/50 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl">🔒</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-4 text-amber-100">
                            Bank-Level Security
                        </h3>
                        <p class="text-amber-100/70 leading-relaxed mb-6">
                            Your notes are protected with AES-256 encryption, zero-knowledge architecture, and enterprise-grade security protocols.
                        </p>
                        <ul class="space-y-2 text-sm text-amber-200/60">
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> End-to-end encryption</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Zero-knowledge storage</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Regular security audits</li>
                        </ul>
                    </div>

                    <!-- Feature 2 -->
                    <div class="group bg-white/5 backdrop-blur-md p-8 lg:p-10 rounded-3xl shadow-2xl border border-white/10 hover:border-amber-400/50 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl">⚡</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-4 text-amber-100">
                            Lightning Fast Sync
                        </h3>
                        <p class="text-amber-100/70 leading-relaxed mb-6">
                            Access your notes instantly across all devices with real-time synchronization and offline-first design.
                        </p>
                        <ul class="space-y-2 text-sm text-amber-200/60">
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Real-time sync</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Offline access</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Cross-platform support</li>
                        </ul>
                    </div>

                    <!-- Feature 3 -->
                    <div class="group bg-white/5 backdrop-blur-md p-8 lg:p-10 rounded-3xl shadow-2xl border border-white/10 hover:border-amber-400/50 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2 md:col-span-2 lg:col-span-1">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl">🤝</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-4 text-amber-100">
                            Smart Collaboration
                        </h3>
                        <p class="text-amber-100/70 leading-relaxed mb-6">
                            Work together seamlessly with advanced sharing, commenting, and real-time editing capabilities.
                        </p>
                        <ul class="space-y-2 text-sm text-amber-200/60">
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Real-time collaboration</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Advanced permissions</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Comment & review system</li>
                        </ul>
                    </div>

                    <!-- Feature 4 -->
                    <div class="group bg-white/5 backdrop-blur-md p-8 lg:p-10 rounded-3xl shadow-2xl border border-white/10 hover:border-amber-400/50 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl">🎨</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-4 text-amber-100">
                            Rich Media Support
                        </h3>
                        <p class="text-amber-100/70 leading-relaxed mb-6">
                            Create engaging notes with images, videos, audio recordings, drawings, and interactive elements.
                        </p>
                        <ul class="space-y-2 text-sm text-amber-200/60">
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Image & video embedding</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Voice recordings</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Hand-drawn sketches</li>
                        </ul>
                    </div>

                    <!-- Feature 5 -->
                    <div class="group bg-white/5 backdrop-blur-md p-8 lg:p-10 rounded-3xl shadow-2xl border border-white/10 hover:border-amber-400/50 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl">🔍</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-4 text-amber-100">
                            AI-Powered Search
                        </h3>
                        <p class="text-amber-100/70 leading-relaxed mb-6">
                            Find anything instantly with intelligent search that understands context and suggests related content.
                        </p>
                        <ul class="space-y-2 text-sm text-amber-200/60">
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Semantic search</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Smart suggestions</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Auto-tagging</li>
                        </ul>
                    </div>

                    <!-- Feature 6 -->
                    <div class="group bg-white/5 backdrop-blur-md p-8 lg:p-10 rounded-3xl shadow-2xl border border-white/10 hover:border-amber-400/50 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl">📊</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-4 text-amber-100">
                            Analytics & Insights
                        </h3>
                        <p class="text-amber-100/70 leading-relaxed mb-6">
                            Gain insights into your productivity patterns and discover trends in your note-taking habits.
                        </p>
                        <ul class="space-y-2 text-sm text-amber-200/60">
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Usage analytics</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Productivity insights</li>
                            <li class="flex items-center"><span class="text-amber-400 mr-2">✓</span> Team performance</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center bg-gradient-to-r from-amber-600/20 to-amber-500/20 backdrop-blur-md rounded-3xl p-12 lg:p-16 border border-amber-400/30">
                <h2 class="text-3xl lg:text-5xl font-bold mb-6">
                    Ready to Transform Your Note-Taking?
                </h2>
                <p class="text-xl text-amber-100/80 mb-8 max-w-2xl mx-auto">
                    Join thousands of professionals who have already revolutionized their productivity with ListoNotes.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 items-center justify-center">
                    <a href="/register"
                       class="group bg-amber-500 hover:bg-amber-400 text-white font-bold py-4 px-10 rounded-xl shadow-2xl hover:shadow-amber-500/25 transform hover:-translate-y-1 transition-all duration-300 text-lg">
                        Start Your Free Trial
                        <span class="ml-2 group-hover:translate-x-1 transition-transform inline-block">→</span>
                    </a>
                    <p class="text-amber-200/60 text-sm">No credit card required • 14-day free trial</p>
                </div>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-20 lg:mt-32 text-center">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 opacity-70">
                    <div class="flex flex-col items-center">
                        <div class="text-2xl mb-2">🔐</div>
                        <div class="text-sm font-medium text-amber-200">256-bit Encryption</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl mb-2">🌍</div>
                        <div class="text-sm font-medium text-amber-200">GDPR Compliant</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl mb-2">⚡</div>
                        <div class="text-sm font-medium text-amber-200">99.9% Uptime</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl mb-2">🎧</div>
                        <div class="text-sm font-medium text-amber-200">24/7 Support</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuBtn.addEventListener('click', function() {
        const isOpen = mobileMenu.classList.contains('translate-y-0');

        if (isOpen) {
            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');
            mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'invisible');
        } else {
            mobileMenu.classList.remove('-translate-y-full', 'opacity-0', 'invisible');
            mobileMenu.classList.add('translate-y-0', 'opacity-100', 'visible');
        }
    });

    // Close mobile menu when clicking on links
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');
            mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'invisible');
        });
    });
});
</script>
@endsection
