<div class="flex flex-col bg-indigo-900 w-full h-screen justify-start items-center" x-data="{
    showSubscribe:false,
    showSuccess:false,
    }">
    <nav class="flex justify-between items-center w-full max-w-screen-lg py-5 text-indigo-200">
        <a class="text-4xl font-bold" href="/">
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
    <div class="flex container mx-auto items-center h-full">
        <div class="flex flex-col w-1/3 items-start">
            <h1 class="text-white font-bold text-5xl leading-tight mb-4"> Subscribe To My Newsletter
            </h1>
            <p class="text-indigo-200 text-xl mb-10">
                Be the first to <span class="font-bold underline">receive information </span>about my tech courses and projects
            </p>
            <x-primary-button class="py-3 px-8 bg-red-500 hover:bg-red-600" x-on:click="showSubscribe = true">Subscribe</x-primary-button>
        </div>

    </div>
    <x-my-modal class="bg-pink-500" trigger=showSubscribe>
        <p class="text-white text-5xl font-extrabold text-center">
            Let's do it!
        </p>
        <form class="flex flex-col items-center p-24" wire:submit.prevent="subscribe">
            <input class="px-5 py-3 w-80 border border-blue-400" type="email" name="email" placeholder="Email Address" wire:model="email" />
            <span class="text-gray-100 text-xs">
                {{
        $errors->has('email') 
            ? $errors->first('email') 
            : 'We will send you a confirmation email'
    }}
            </span>
            <x-primary-button class="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center">Get In</x-primary-button>

        </form>
    </x-my-modal>

    <x-my-modal class="bg-green-500" trigger=showSuccess>
        <p class="animate-pulse text-white text-9xl font-extrabold text-center">
            &check;
        </p>
        <p class=" text-white text-5xl font-extrabold text-center mt-16">
            Great!
        </p>
        <p class="text-white text-3xl text-center">
            Please, check your inbox for the confirmation email;
        </p>
    </x-my-modal>

</div>
