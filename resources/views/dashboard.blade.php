<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white border rounded-lg overflow-hidden shadow-md">
                    <!-- First Block -->
                    <div class="p-6 bg-indigo-500 text-white">
                        <h2 class="text-xl font-semibold mb-2">MR Name</h2>
                        <p class="text-sm">{{ $user->mr_name }}</p>
                    </div>
                
                    <!-- Second Block -->
                    <div class="p-6 bg-indigo-500 text-white">
                        <h2 class="text-xl font-semibold mb-2">ASM Name</h2>
                        <p class="text-sm">{{ $user->asm_name }}</p>
                    </div>
                
                    <!-- Third Block -->
                    <div class="p-6 bg-indigo-500 text-white">
                        <h2 class="text-xl font-semibold mb-2">RSM Name</h2>
                        <p class="text-sm">{{ $user->rsm_name }}</p>
                    </div>
                
                    <!-- Fourth Block -->
                    <div class="p-6 bg-indigo-500 text-white">
                        <h2 class="text-xl font-semibold mb-2">HQ Name</h2>
                        <p class="text-sm">{{ $user->hq_name }}</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
