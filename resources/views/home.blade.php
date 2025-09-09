@extends('layouts.guest')

@section('content')
    <div class="mx-auto flex items-center justify-center p-4 bg-gradient-to-br from-amber-700 via-amber-800 to-amber-900 text-white">

        <div class="max-w-7xl h-[90vh] flex items-center justify-center flex-col text-center space-y-6">

            <!-- App Name -->
            <h1 class="font-extrabold font-[Poppins] text-[64px] leading-tight tracking-wide drop-shadow-lg">
                Welcome to <span class="text-amber-300">ListoNotes</span>
            </h1>

            <!-- Subheading -->
            <p class="max-w-2xl text-lg font-light opacity-90 leading-relaxed">
                The most secure and reliable notes app designed for professionals, students, and teams.
                Organize your thoughts, collaborate seamlessly, and keep your ideas safe — all in one place.
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 items-center justify-center">
                <a href="/register"
                   class="mt-4 bg-amber-500 hover:bg-amber-400 text-white font-medium py-3 px-6 rounded-xl shadow-md transition">
                   Get Started Free
                </a>
                <a href="/demo"
                   class="mt-4 border border-amber-400 hover:bg-amber-400/20 text-white font-medium py-3 px-6 rounded-xl shadow-md transition">
                   View Demo
                </a>
            </div>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16 text-left">
                <div class="bg-white/10 p-6 rounded-2xl shadow-md hover:scale-105 transition">
                    <h3 class="text-2xl font-semibold mb-2">🔒 Secure Cloud</h3>
                    <p class="text-sm opacity-80">
                        Your notes are encrypted and stored safely with top-notch cloud security.
                    </p>
                </div>
                <div class="bg-white/10 p-6 rounded-2xl shadow-md hover:scale-105 transition">
                    <h3 class="text-2xl font-semibold mb-2">📱 Access Anywhere</h3>
                    <p class="text-sm opacity-80">
                        Use ListoNotes across devices — desktop, tablet, or mobile — with seamless sync.
                    </p>
                </div>
                <div class="bg-white/10 p-6 rounded-2xl shadow-md hover:scale-105 transition">
                    <h3 class="text-2xl font-semibold mb-2">🤝 Team Collaboration</h3>
                    <p class="text-sm opacity-80">
                        Share notes with your team and work together in real-time without limits.
                    </p>
                </div>
            </div>

        </div>

    </div>
@endsection
