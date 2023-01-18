<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Pinjaman
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                <div class="mt-8 text-2xl">
                                    <h1>{{ $pinjam->nama }}, telah mengajukan pinjaman.</h1>
                                </div>
                                <div class="mt-6 text-black">
                                    <h1>Detail mengenai pinjaman:</h1>
                                </div>
                            </div>
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $pinjam->id }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $pinjam->nama }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Alamat
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $pinjam->alamat }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah Pinjaman
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        Rp. {{ $pinjam->jumlahpinjam }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tempo Termin Pelunasan Pinjaman
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $pinjam->cicil }} Bulan
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Besar Pembayaran Termin Per Bulan
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        Rp.{{ $pinjam->bunga }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal Pengajuan Pinjaman
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $pinjam->tanggal }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Total
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        Rp.{{ $pinjam->jumlahpinjam + $pinjam->bunga }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $pinjam->status }}
                                    </td>
                                </tr>
                            </table>
                            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                <div class="mt-6 text-black">
                                    Total dana yang harus dikembalikan ialah sebesar <b>Rp.{{ $pinjam->jumlahpinjam + $pinjam->bunga }}</b>
                                </div>
                                <div class="mt-6 text-black">
                                    Total pelunasan termin per bulan selama {{ $pinjam->cicil }} bulan ialah sebesar <b>Rp.{{ $pinjam->bunga }}</b>
                                </div>
                                @if($pinjam->status == 'Approved')
                                <div class="mt-6 text-black">
                                    Selamat pengajuan pinjaman anda sudah <em><b>{{ $pinjam->status }}</b></em>.
                                </div>
                                @elseif($pinjam->status == 'Rejected')
                                <div class="mt-6 text-black">
                                    Mohon maaf status pengajuan pinjaman anda <em><b>{{ $pinjam->status }}</b></em>.
                                </div>
                                @else
                                <div class="mt-6 text-black">
                                    Status pinjaman anda saat ini masih <em><b>{{ $pinjam->status }}</b></em>.
                                </div>
                                @endif
                                <div class="mt-6 text-gray-500">
                                    Detail laporan diatas dibuat pada {{ $pinjam->created_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block mt-8">
                <a href="{{ route('pinjam.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Kembali</a>
            </div>
        </div>
    </div>
</x-app-layout>
