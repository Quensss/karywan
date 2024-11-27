<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Client Request') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="mb-4 text-green-600">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Form Add Client Request -->
                    <form action="{{ route('client-requests.store') }}" method="POST">
                        @csrf

                        <!-- Nama Perusahaan -->
                        <div class="mb-4">
                            <label for="nama_perusahaan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" id="nama_perusahaan" value="{{ old('nama_perusahaan') }}" 
                                   class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900">
                            @error('nama_perusahaan')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Posisi -->
                        <div class="mb-4">
                            <label for="posisi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Posisi yang Dibutuhkan</label>
                            <input type="text" name="posisi" id="posisi" value="{{ old('posisi') }}" 
                                   class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900">
                            @error('posisi')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Jumlah Pegawai -->
                        <div class="mb-4">
                            <label for="jumlah_pegawai" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah Pegawai</label>
                            <input type="number" name="jumlah_pegawai" id="jumlah_pegawai" value="{{ old('jumlah_pegawai') }}" 
                                   class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900">
                            @error('jumlah_pegawai')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Lokasi Penempatan -->
                        <div class="mb-4">
                            <label for="lokasi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Lokasi Penempatan</label>
                            <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi') }}" 
                                   class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900">
                            @error('lokasi')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Durasi Kontrak -->
                        <div class="mb-4">
                            <label for="durasi_kontrak" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Durasi Kontrak</label>
                            <input type="text" name="durasi_kontrak" id="durasi_kontrak" value="{{ old('durasi_kontrak') }}" 
                                   class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900">
                            @error('durasi_kontrak')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Kualifikasi -->
                        <div class="mb-4">
                            <label for="kualifikasi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kualifikasi</label>
                            <textarea name="kualifikasi" id="kualifikasi" rows="4" 
                                      class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900">{{ old('kualifikasi') }}</textarea>
                            @error('kualifikasi')
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-end">
                            <button type="submit" 
                                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
