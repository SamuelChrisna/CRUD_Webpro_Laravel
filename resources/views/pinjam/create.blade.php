<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajukan Pinjaman
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('pinjam.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nama" class="block font-medium text-sm text-gray-700">Nama</label>
                            <input type="text" name="nama" id="nama" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('nama', Auth::user()->name) }}" readonly />
                            @error('nama')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="alamat" class="block font-medium text-sm text-gray-700">Alamat</label>
                            <input type="text" name="alamat" id="alamat" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('alamat', '') }}" />
                            @error('alamat')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="jumlahpinjam" class="block font-medium text-sm text-gray-700">Jumlah Pinjaman</label>
                            <input type="number" name="jumlahpinjam" id="jumlahpinjam" onkeyup="calculateUpdate()" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('jumlahpinjam', '') }}" />
                            @error('jumlahpinjam')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="cicil" class="block font-medium text-sm text-gray-700">Tempo Termin Pelunasan Pinjaman</label>
                            <select name="cicil" id="cicil" type="text" onclick="calculateTotal(this.value)" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('cicil', '') }}">
                                <option value="1" selected>1 Bulan</option>
                                <option value="3">3 Bulan</option>
                                <option value="6">6 Bulan</option>
                                <option value="12">12 Bulan</option>
                            </select>
                            @error('cicil')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <script>
                            function calculateTotal(value) {
                                let bunga;
                                if (value == '1') {
                                    bunga = 2 / 100;
                                } else if (value == '3') {
                                    bunga = 4 / 100;
                                } else if (value == '6') {
                                    bunga = 8 / 100;
                                } else if (value == '12') {
                                    bunga = 16 / 100;
                                }
                                let total, totalperbulan;
                                total = bunga * document.getElementById('jumlahpinjam').value;
                                totalperbulan = (Math.round(parseInt(total)+parseInt(document.getElementById('jumlahpinjam').value)))/value;
                                document.getElementById('bunga').value = Math.round(totalperbulan)
                            }

                            function calculateUpdate() {
                                let bunga;
                                let cicil = document.getElementById('cicil').value;
                                if (cicil == '1') {
                                    bunga = 2 / 100;
                                } else if (cicil == '3') {
                                    bunga = 4 / 100;
                                } else if (cicil == '6') {
                                    bunga = 8 / 100;
                                } else if (cicil == '12') {
                                    bunga = 16 / 100;
                                }
                                let total, totalperbulan;
                                total = bunga * document.getElementById('jumlahpinjam').value;
                                totalperbulan = (Math.round(parseInt(total)+parseInt(document.getElementById('jumlahpinjam').value)))/cicil;
                                document.getElementById('bunga').value = Math.round(totalperbulan)
                            }
                        </script>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="bunga" class="block font-medium text-sm text-gray-700">Besar Pembayaran Termin Per Bulan</label>
                            <input type="number" name="bunga" id="bunga" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('bunga', '') }}" readonly />
                            @error('bunga')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tanggal" class="block font-medium text-sm text-gray-700">Tanggal Pengajuan Pinjaman</label>
                            <input type="date" name="tanggal" id="tanggal" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full" value="<?= date('Y-m-d', time()); ?>" />
                            @error('tanggal')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- @can('user_access')
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                            <input type="text" name="status" id="status" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('status', 'Pending') }}" />
                            @error('status')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        @endcan -->
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                            <select name="status" id="status" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('status', '') }}">
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
                                Ajukan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
