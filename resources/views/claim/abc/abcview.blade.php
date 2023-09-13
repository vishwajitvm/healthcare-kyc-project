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
                <form method="POST" action="{{ route('claim.ayurvedic-bhandar-claim.store') }}" class="space-y-4">
                    @csrf

                    <div class="mt-4">
                        <x-input  type="hidden" name="kyc_id" value="{{ request('kycId') }}" required />
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="name_of_ss" :value="__('Name of SS')" />
                        <x-input id="name_of_ss" class="block mt-1 w-full" type="text" name="name_of_ss" required />
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="name_of_ayurveda_bhandar" :value="__('Name of Ayurvedic Bhandar')" />
                        <x-input id="name_of_ayurveda_bhandar" class="block mt-1 w-full" type="text" name="name_of_ayurveda_bhandar" required />
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="mobile_number" :value="__('Mobile Number')" />
                        <x-input id="mobile_number" class="block mt-1 w-full" type="text" name="mobile_number" required />
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="name_of_distributor" :value="__('Name of Distributor')" />
                        <x-input id="name_of_distributor" class="block mt-1 w-full" type="text" name="name_of_distributor" required />
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="bill_number" :value="__('Bill Number')" />
                        <x-input id="bill_number" class="block mt-1 w-full" type="text" name="bill_number" required />
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="bill_date" :value="__('Bill Date')" />
                        <x-input id="bill_date" class="block mt-1 w-full" type="date" name="bill_date" required />
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="nrv_value" :value="__('NRV Value')" />
                        <x-input id="nrv_value" class="block mt-1 w-full" type="text" name="nrv_value" required />
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="claim_amount" :value="__('Claim Amount')" />
                        <x-input id="claim_amount" class="block mt-1 w-full" type="text" name="claim_amount" required />
                    </div>
                    

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
