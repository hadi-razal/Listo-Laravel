@extends('layouts.guest')

@section('content')
    <div class="mx-auto flex items-center justify-center font-poppins p-4
                bg-gradient-to-br from-amber-700 via-amber-800 to-amber-900 text-white">

        <div class="max-w-7xl h-[90vh] flex items-center justify-center flex-col text-center space-y-3">

            <!-- App Name -->
            <h1 class="font-extrabold text-[64px] leading-tight tracking-wide drop-shadow-lg">
                Welcome to <span class="text-amber-300">ListoNotes</span>
            </h1>

            <!-- Subheading -->
            <p class="max-w-2xl text-lg font-extralight opacity-90 leading-relaxed">
                The most secure and reliable notes app designed for professionals, students, and teams.
                Organize your thoughts, collaborate seamlessly, and keep your ideas safe — all in one place.
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 items-center justify-center">
                <a href="/register"
                   class="mt-4 bg-amber-500 hover:bg-amber-400 text-white font-medium py-3 px-6
                          rounded-xl shadow-md transition duration-300">
                   🚀 Get Started Free
                </a>
                <a href="/demo"
                   class="mt-4 border border-amber-400 hover:bg-amber-400/30 text-white font-medium py-3 px-6
                          rounded-xl shadow-md transition duration-300">
                   👀 View Demo
                </a>
            </div>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16 text-left w-full px-6 md:px-0">
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl shadow-lg
                            border border-white/20 hover:border-amber-400 transition duration-300">
                    <h3 class="text-2xl font-semibold mb-3">🔒 Secure Cloud</h3>
                    <p class="text-sm opacity-80 font-extralight  leading-relaxed">
                        Your notes are encrypted and stored safely with top-notch cloud security.
                    </p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl shadow-lg
                            border border-white/20 hover:border-amber-400 transition duration-300">
                    <h3 class="text-2xl font-semibold mb-3">📱 Access Anywhere</h3>
                    <p class="text-sm font-extralight  opacity-80 leading-relaxed">
                        Use ListoNotes across devices — desktop, tablet, or mobile — with seamless sync.
                    </p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl shadow-lg
                            border border-white/20 hover:border-amber-400 transition duration-300">
                    <h3 class="text-2xl font-semibold mb-3">🤝 Team Collaboration</h3>
                    <p class="text-sm font-extralight  opacity-80 leading-relaxed">
                        Share notes with your team and work together in real-time without limits.
                    </p>
                </div>
            </div>

        </div>

    </div>
@endsection
