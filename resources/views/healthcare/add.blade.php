<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Healthcare Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-8" style="margin-bottom: 30px">
                    <h1 class="text-2xl font-semibold">{{ __('Add New Healthcare Record') }}</h1>
                    <a href="{{ route('healthcare.view') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full outline-none focus:shadow-outline hover:bg-blue-700" style="background: #6875f5">View Healthcare Records</a>
                </div>
                <form method="POST" action="" class="space-y-4">
                    @csrf

                    <div class="mt-4">
                        <x-label for="mr_name" :value="__('MR Name')" />
                        <x-input id="mr_name" class="block mt-1 w-full" type="text" name="mr_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="asm_name" :value="__('ASM Name')" />
                        <x-input id="asm_name" class="block mt-1 w-full" type="text" name="asm_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="rsm_name" :value="__('RSM Name')" />
                        <x-input id="rsm_name" class="block mt-1 w-full" type="text" name="rsm_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="hq_name" :value="__('HQ Name')" />
                        <x-input id="hq_name" class="block mt-1 w-full" type="text" name="hq_name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="choice_health" :value="__('Choice Health')" />
                        <select id="choice_health" name="choice_health" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 sm:text-sm" required>
                            <option value="MAAC">MAAC</option>
                            <option value="Ayurveda">Ayurveda</option>
                            <option value="Mak Loyalty">Mak Loyalty</option>
                        </select>
                    </div>
                    

                    <div class="mt-4">
                        <x-label for="status" :value="__('Status')" />
                        <select id="status" name="status" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 sm:text-sm" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end mt-5">
                        <x-button class="ml-4 mt-4" >
                            {{ __('Add Record') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
