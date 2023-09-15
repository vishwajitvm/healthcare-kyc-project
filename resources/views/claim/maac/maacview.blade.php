<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MAAC Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-4" style="display: inline">{{ __('Submit MAAC Form') }}</h1>
                <a href="{{ route('maac.claim.list', ['kycId' => request('kycId')]) }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full outline-none focus:shadow-outline hover:bg-blue-700" style="background: #6875f5; float:right">
                    {{ __('View Claims') }}
                </a>
                
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            
                <form method="POST" action="{{ route('claim.maac.store') }}" class="space-y-4">
                    @csrf

                    <div class="mt-4">
                        <x-input  type="hidden" value="{{ request('kycId') }}"  name="kyc_id" />
                    </div>

                    <div class="mt-4">
                        <x-label for="distributor_name" :value="__('Name of Distributor')" />
                        <x-input id="distributor_name" class="block mt-1 w-full" type="text" name="distributor_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="region" :value="__('Region')" />
                        <x-input id="region" class="block mt-1 w-full" type="text"  name="region" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="drs_name" :value="__('DRS Name')" />
                        <x-input id="drs_name" class="block mt-1 w-full" type="text" name="drs_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="drs_mobile" :value="__('DRS Mobile')" />
                        <x-input id="drs_mobile" class="block mt-1 w-full" type="text" name="drs_mobile" required />
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
                        <x-label for="bill_amount" :value="__('Bill Amount')" />
                        <x-input id="bill_amount" class="block mt-1 w-full" type="text" name="bill_amount" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="payment_received_date" :value="__('Payment Received Date')" />
                        <x-input id="payment_received_date" class="block mt-1 w-full" type="date" name="payment_received_date" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="goods_dispatch_date" :value="__('Goods Dispatch Date')" />
                        <x-input id="goods_dispatch_date" class="block mt-1 w-full" type="date" name="goods_dispatch_date" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="manager_name" :value="__('Name of Manager')" />
                        <x-input id="manager_name" class="block mt-1 w-full" type="text" name="manager_name" required />
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
