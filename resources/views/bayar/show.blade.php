<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Pembayaran
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
                                    <h1>{{ $bayar->nama }}, telah mengajukan pembayaran.</h1>
                                </div>
                                <div class="mt-6 text-black">
                                    <h1>Detail mengenai pembayaran:</h1>
                                </div>
                            </div>
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $bayar->id }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $bayar->nama }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Alamat
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $bayar->alamat }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jumlah Pembayaran
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        Rp.{{ $bayar->jumlahbayar }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $bayar->tanggal }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $bayar->status }}
                                    </td>
                                </tr>
                            </table>
                            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                @if($bayar->status == 'Approved')
                                <div class="mt-6 text-black">
                                    Selamat status pembayaran anda saat ini sudah <em><b>{{ $bayar->status }}</b></em>.
                                </div>
                                @elseif($bayar->status == 'Rejected')
                                <div class="mt-6 text-black">
                                    Mohon maaf status Pembayaran anda <em><b>{{ $bayar->status }}</b></em>.
                                </div>
                                @else
                                <div class="mt-6 text-black">
                                    Status pembayaran Anda saat ini masih <em><b>{{ $bayar->status }}</b></em>.
                                </div>
                                @endif
                                <div class="mt-6 text-gray-500">
                                    Detail Laporan diatas dibuat pada {{ $bayar->created_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block mt-8">
                <a href="{{ route('bayar.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Kembali</a>
            </div>
        </div>
    </div>
</x-app-layout>