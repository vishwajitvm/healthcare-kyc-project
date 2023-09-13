<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('KYC Claims') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-4">{{ __('Submit KYC Claim') }}</h1>
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <form method="GET" action="{{ route('claim.submit') }}" class="space-y-4">
                    @csrf

                    <div class="mt-4">
                        <x-label for="kyc_id" :value="__('KYC ID')" />
                        <x-input id="kyc_id" class="block mt-1 w-full" type="text" name="kyc_id" required />
                    </div>

                    <div class="flex items-center justify-end mt-5">
                        <x-button class="ml-4">
                            {{ __('Submit Claim') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
