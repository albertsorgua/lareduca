<style>
    .bg-color {
        margin: 0;
        line-height: inherit;
        background-color: #ECB3B3;
    }
</style>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-color">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
