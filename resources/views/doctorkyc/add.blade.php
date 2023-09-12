<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Doctor KYC Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-8" style="margin-bottom: 30px">
                    <h1 class="text-2xl font-semibold">{{ __('Add New Doctor KYC Record') }}</h1>
                    <a href="{{ route('doctorkyc.view') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full outline-none focus:shadow-outline hover:bg-blue-700" style="background: #6875f5">View Doctor KYC Records</a>
                </div>
                <form method="POST" action="{{ route('doctorkyc.store') }}" class="space-y-4" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-4">
                        <x-label for="doctor_name" :value="__('Doctor Name')" />
                        <x-input id="doctor_name" class="block mt-1 w-full" type="text" name="doctor_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="state" :value="__('State')" />
                        <x-input id="state" class="block mt-1 w-full" type="text" name="state" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="city" :value="__('City')" />
                        <x-input id="city" class="block mt-1 w-full" type="text" name="city" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="locality" :value="__('Locality')" />
                        <x-input id="locality" class="block mt-1 w-full" type="text" name="locality" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="phone" :value="__('Phone')" />
                        <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="practice_in" :value="__('Practice In')" />
                        <select id="practice_in" name="practice_in" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 sm:text-sm" required>
                            <option hidden>Select Practice</option>
                            <option value="Ayurvedic">Ayurvedic</option>
                            <option value="Allopathic">Allopathic</option>
                            <option value="Homeopathic">Homeopathic</option>
                            <option value="Mix">Mix</option>
                        </select>
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="record_type" :value="__('Record Type')" />
                        <select id="claim_type" name="claim_type" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 sm:text-sm" required>
                            <option value="MAAC">MAAC</option>
                            <option value="Incentive">Incentive</option>
                            <option value="Ayurved Bhandar Claim">Ayurved Bhandar Claim</option>
                        </select>
                    </div>
                    

                    <div class="mt-4">
                        <x-label for="upload_visiting_card" :value="__('Upload Visiting Card')" />
                        <x-input id="upload_visiting_card" class="block mt-1 w-full" type="file" name="upload_visiting_card"  />
                    </div>

                    <div class="mt-4">
                        <x-label for="upload_letter_head" :value="__('Upload Letter Head')" />
                        <x-input id="upload_letter_head" class="block mt-1 w-full" type="file" name="upload_letter_head"  />
                    </div>

                    <div class="mt-4">
                        <x-label for="status" :value="__('Status')" />
                        <select id="status" name="status" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 sm:text-sm" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end">
                        <x-button class="ml-4 mt-4" >
                            {{ __('Add Record') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
