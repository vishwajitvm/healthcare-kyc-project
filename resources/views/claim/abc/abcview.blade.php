<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ayurvedic Bhandar Claim Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-4">{{ __('Submit Ayurvedic Bhandar Claim Form') }}</h1>
                <form method="POST" action="" class="space-y-4">
                    {{-- {{ route('ayurvedic-bhandar-claim.store') }} --}}
                    @csrf

                    <div class="mt-4">
                        <x-label for="kyc_id" :value="__('KYC ID')" />
                        <x-input id="kyc_id" class="block mt-1 w-full" type="text" name="kyc_id" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="ss_name" :value="__('Name of SS')" />
                        <x-input id="ss_name" class="block mt-1 w-full" type="text" name="ss_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="bhandar_name" :value="__('Name of Ayurvedic Bhandar')" />
                        <x-input id="bhandar_name" class="block mt-1 w-full" type="text" name="bhandar_name" required />
                    </div>

                    <!-- Add fields for Mobile Number, Distributor Name, Bill Number, Bill Date, NRV Value, and Claim Amount here -->

                    <div class="flex items-center justify-end mt-5">
                        <x-button class="ml-4">
                            {{ __('Submit Form') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
