<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
            <form method="POST" action="" class="mt-4">
                @csrf
                <label class="text-white">ID入力してください</label></br>
                <input type="text" name="id" value="" class="block mt-1 w-full"></br>
                <label class="text-white">パスワード入力してください</label></br>
                <input type="text" name="pass" value="" class="block mt-1 w-full"></br>
                @if (Route::has('password.request'))
                    <x-button class="mr-2">
                        {{ __('Log in') }}
                    </x-button>
                @endif
            </form>
    </x-auth-card>
</x-guest-layout>
