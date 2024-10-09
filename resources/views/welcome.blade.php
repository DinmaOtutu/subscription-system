<x-guest-layout>
    <div class="flex flex-col bg-indigo-900 w-full h-screen justify-start items-center">
        <nav class="flex justify-between items-center w-full max-w-screen-lg py-5 text-indigo-200"> 
            <a  class="text-4xl font-bold" href="/">
                <x-application-logo class="h-16 w-16 fill-current" />
            </a>
            <div class="flex justify-end">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-white text-lg">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-white text-lg">
                        Login
                    </a>
                @endauth
            </div>
        </nav>
    </div>
</x-guest-layout>
