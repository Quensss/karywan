<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <!-- Button to Add Permintaan -->
                    <div class="mt-4 mb-6">
                        <a href="{{ route('client-requests.create') }}"
                           class="inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">
                            Add Permintaan
                        </a>
                    </div>

                    <!-- Table to display Client Requests -->
                    <table class="min-w-full bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Nama Perusahaan</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Posisi</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Jumlah Pegawai</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Lokasi</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Durasi Kontrak</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-900 dark:text-gray-100">Kualifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientRequests as $clientRequest)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $clientRequest->nama_perusahaan }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $clientRequest->posisi }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $clientRequest->jumlah_pegawai }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $clientRequest->lokasi }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $clientRequest->durasi_kontrak }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $clientRequest->kualifikasi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
