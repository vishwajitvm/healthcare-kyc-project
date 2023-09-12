<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Doctor KYC') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-8" style="margin-bottom: 30px">
                    <h1 class="text-2xl font-semibold">{{ __('View Doctor KYC') }}</h1>
                    <a href="{{ route('doctorkyc.add') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full outline-none focus:shadow-outline hover:bg-blue-700" style="background: #6875f5">Add Records</a>
                </div>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                
                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse table-auto">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">KYC</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Doctor Name</th>
                                {{-- <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">State</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">City</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Locality</th> --}}
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Phone</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Practice In</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Claim Type</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Status</th>
                                {{-- <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Created At</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Updated At</th> --}}
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doctorKycRecords as $record)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->id }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->kyc_id }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->doctor_name }}</td>
                                {{-- <td class="px-6 py-4 whitespace-no-wrap">{{ $record->state }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->city }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->locality }}</td> --}}
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->phone }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->practice_in }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->claim_type ?? "N/A" }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->status }}</td>
                                {{-- <td class="px-6 py-4 whitespace-no-wrap">{{ $record->created_at }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->updated_at }}</td> --}}

                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <a href="{{ route('doctorkyc.edit', ['id' => $record->id]) }}" class="text-blue-500 hover:text-blue-700 font-bold" title="Edit">Edit</a>
                                    <span class="mx-2">|</span> <!-- Add a separator -->
                                    <a href="{{ route('doctorkyc.delete', ['id' => $record->id]) }}" class="text-red-500 hover:text-red-700 font-bold" title="Delete">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $doctorKycRecords->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
