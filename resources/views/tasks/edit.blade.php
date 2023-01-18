<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Transaksi
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('tasks.update', $task->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nama" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input type="text" name="nama" id="nama" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('nama', '') }}" />
                            @error('nama')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="jenis" class="block font-medium text-sm text-gray-700">Jenis</label>
                            <input type="text" name="jenis" id="jenis" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('jenis', '') }}" />
                            @error('jenis')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="jumlahtransaksi" class="block font-medium text-sm text-gray-700">Jumlah Transaksi</label>
                            <input type="text" name="jumlahtransaksi" id="jumlahtransaksi" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('jumlahtransaksi', '') }}" />
                            @error('jumlahtransaksi')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tanggal" class="block font-medium text-sm text-gray-700">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('tanggal', '') }}" />
                            @error('tanggal')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="keterangan" class="block font-medium text-sm text-gray-700">Keterangan</label>
                            <input type="text" name="keterangan" id="keterangan" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('keterangan', '') }}" />
                            @error('keterangan')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>