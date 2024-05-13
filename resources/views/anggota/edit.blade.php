<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Anggota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $anggota->nama }}" />
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $anggota->alamat }}" />
                        </div>
                        <div class="mb-4">
                            <label for="telepon" class="block text-sm font-medium text-gray-700 dark:text-gray-300">No. Telp</label>
                            <input type="text" name="telepon" id="telepon" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $anggota->telepon }}" />
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>