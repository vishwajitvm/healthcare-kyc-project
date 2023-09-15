<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Ayurvedic Bhandar Claims') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Claim ID</th>
                            <th class="px-4 py-2">KYC ID</th>
                            <th class="px-4 py-2">Name of SS</th>
                            <th class="px-4 py-2">Name of Ayurvedic Bhandar</th>
                            <th class="px-4 py-2">Mobile Number</th>
                            <th class="px-4 py-2">Name of Distributor</th>
                            <th class="px-4 py-2">Bill Number</th>
                            <th class="px-4 py-2">Bill Date</th>
                            <th class="px-4 py-2">NRV Value</th>
                            <th class="px-4 py-2">Claim Amount</th>
                            <th class="px-4 py-2">Created At</th>
                            <th class="px-4 py-2">Updated At</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($claims as $claim)
                            <tr>
                                <td class="px-4 py-2">{{ $claim->id }}</td>
                                <td class="px-4 py-2">{{ $claim->kyc_id }}</td>
                                <td class="px-4 py-2">{{ $claim->name_of_ss }}</td>
                                <td class="px-4 py-2">{{ $claim->name_of_ayurveda_bhandar }}</td>
                                <td class="px-4 py-2">{{ $claim->mobile_number }}</td>
                                <td class="px-4 py-2">{{ $claim->name_of_distributor }}</td>
                                <td class="px-4 py-2">{{ $claim->bill_number }}</td>
                                <td class="px-4 py-2">{{ $claim->bill_date }}</td>
                                <td class="px-4 py-2">{{ $claim->nrv_value }}</td>
                                <td class="px-4 py-2">{{ $claim->claim_amount }}</td>
                                <td class="px-4 py-2">{{ $claim->created_at }}</td>
                                <td class="px-4 py-2">{{ $claim->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
