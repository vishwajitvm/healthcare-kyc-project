<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Healthcare') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-8" style="margin-bottom: 30px">
                    <h1 class="text-2xl font-semibold">{{ __('View Healthcare') }}</h1>
                    <a href="{{ route('healthcare.add') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full outline-none focus:shadow-outline hover:bg-blue-700" style="background: #6875f5">Add Records</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse table-auto">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">MR Name</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">ASM Name</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">RSM Name</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">HQ Name</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Choice Health</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Created At</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Updated At</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($healthcareRecords as $record)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->id }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->mr_name }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->asm_name }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->rsm_name }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->hq_name }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->choice_health }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->status }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->created_at }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $record->updated_at }}</td>

                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <a href="{{ route('healthcare.edit', ['id' => $record->id]) }}" class="text-blue-500 hover:text-blue-700 font-bold" title="Edit">Edit</a>
                                    <span class="mx-2">|</span> <!-- Add a separator -->
                                    <a href="{{ route('healthcare.delete', ['id' => $record->id]) }}" class="text-red-500 hover:text-red-700 font-bold" title="Delete">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                <div class="mt-4">
                    {{ $healthcareRecords->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
