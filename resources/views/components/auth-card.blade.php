<div class="flex flex-col justify-center items-center bg-black min-h-screen">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md px-6 bg-black shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
