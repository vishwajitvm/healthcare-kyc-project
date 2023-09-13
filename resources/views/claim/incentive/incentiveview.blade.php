<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Incentive Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-4">{{ __('Submit Incentive Form') }}</h1>
                <form method="POST" action="" class="space-y-4">
                    {{-- {{ route('incentive.store') }} --}}
                    @csrf

                    <div class="mt-4">
                        <x-label for="kyc_id" :value="__('KYC ID')" />
                        <x-input id="kyc_id" class="block mt-1 w-full" type="text" name="kyc_id" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="mr_name" :value="__('MR Name')" />
                        <x-input id="mr_name" class="block mt-1 w-full" type="text" name="mr_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="hq" :value="__('HQ')" />
                        <x-input id="hq" class="block mt-1 w-full" type="text" name="hq" required />
                    </div>

                    <!-- Add fields for Region, Distributor Name, Bill Number, Bill Date, and NRV Value here -->

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
