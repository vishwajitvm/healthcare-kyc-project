<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Incentive Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-4" style="display: inline">{{ __('Submit Incentive Form') }}</h1>
                <a href="{{ route('incentive.claim.list', ['kycId' => request('kycId')]) }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full outline-none focus:shadow-outline hover:bg-blue-700" style="background: #6875f5; float:right">
                    {{ __('View Claims') }}
                </a>

                <form method="POST" action="{{ route('claim.incentive.store') }}" class="space-y-4">
                    @csrf

                    <div class="mt-4">
                        {{-- <x-label for="kyc_id" :value="__('KYC ID')" /> --}}
                        <x-input type="hidden" name="kyc_id" value="{{ request('kycId') }}" />
                    </div>

                    <div class="mt-4">
                        <x-label for="mr_name" :value="__('MR Name')" />
                        <x-input id="mr_name" class="block mt-1 w-full" type="text" name="mr_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="hq" :value="__('HQ')" />
                        <x-input id="hq" class="block mt-1 w-full" type="text" name="hq" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="region" :value="__('Region')" />
                        <x-input id="region" class="block mt-1 w-full" type="text" name="region" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="distributor_name" :value="__('Distributor Name')" />
                        <x-input id="distributor_name" class="block mt-1 w-full" type="text" name="distributor_name" required />
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
