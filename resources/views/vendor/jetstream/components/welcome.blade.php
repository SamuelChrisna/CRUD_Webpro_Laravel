<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div class="mt-8 text-2xl">
        Selamat Datang di Dashboard Lenders.
    </div>
    @can('user_access')
    <div class="hidden text-2xl sm:flex">
        Anda terdaftar sebagai Admin.
    </div>
    @endcan

    <div class="mt-6 text-gray-500">
        Silahkan gunakan menu Transaksi diatas.
    </div>
    @can('user_access')
    <div class="hidden text-gray-500 sm:flex">
        Anda juga dapat mengakses menu Users.
    </div>
    @endcan

</div>
