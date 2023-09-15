<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Claims') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">KYC ID</th>
                            <th class="px-4 py-2">Distributor Name</th>
                            <th class="px-4 py-2">Region</th>
                            <th class="px-4 py-2">Drs name</th>
                            <th class="px-4 py-2">Drs Mobile</th>
                            <th class="px-4 py-2">Bill Number</th>
                            <th class="px-4 py-2">bill_date</th>
                            <th class="px-4 py-2">bill_amount</th>
                            <th class="px-4 py-2">Payement Recive</th>
                            <th class="px-4 py-2">Dispatch Date</th>
                            <th class="px-4 py-2">manager_name</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($claims as $claim)
                            <tr>
                                <td class="px-4 py-2">{{ $claim->id }}</td>
                                <td class="px-4 py-2">{{ $claim->kyc_id }}</td>
                                <td class="px-4 py-2">{{ $claim->distributor_name }}</td>
                                <td class="px-4 py-2">{{ $claim->region }}</td>
                                <td class="px-4 py-2">{{ $claim->drs_name }}</td>
                                <td class="px-4 py-2">{{ $claim->drs_mobile }}</td>
                                <td class="px-4 py-2">{{ $claim->bill_number }}</td>
                                <td class="px-4 py-2">{{ $claim->bill_date }}</td>
                                <td class="px-4 py-2">{{ $claim->bill_amount }}</td>
                                <td class="px-4 py-2">{{ $claim->payment_received_date }}</td>
                                <td class="px-4 py-2">{{ $claim->goods_dispatch_date }}</td>
                                <td class="px-4 py-2">{{ $claim->manager_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
