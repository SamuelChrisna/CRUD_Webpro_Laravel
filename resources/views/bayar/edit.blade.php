<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Pembayaran
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('bayar.update',$bayar->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nama" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input type="text" name="nama" id="nama" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('nama', $bayar->nama) }}" />
                            @error('nama')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="alamat" class="block font-medium text-sm text-gray-700">Alamat</label>
                            <input type="text" name="alamat" id="alamat" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('alamat', $bayar->alamat) }}" />
                            @error('alamat')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="jumlahbayar" class="block font-medium text-sm text-gray-700">Jumlah Pembayaran</label>
                            <input type="number" name="jumlahbayar" id="jumlahbayar" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('jumlahbayar', $bayar->jumlahbayar) }}" />
                            @error('jumlahbayar')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tanggal" class="block font-medium text-sm text-gray-700">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('tanggal', $bayar->tanggal) }}" />
                            @error('tanggal')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- @can('user_access')
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                            <input type="text" name="status" id="status" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('status', '') }}" />
                            @error('status')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        @endcan -->
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                            <select name="status" id="status" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('status', $bayar->status) }}">
                                <option value="Pending" selected>Pending</option>
                                @can('user_access')
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                                @endcan
                            </select>
                            @error('status')
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