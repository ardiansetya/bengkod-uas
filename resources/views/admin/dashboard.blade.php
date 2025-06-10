<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <section>
                    <header class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            Selamat datang di Dashboard Admin
                        </h2>
                    </header>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <!-- Kartu Jumlah Dokter -->
                        <div class="bg-blue-100 p-4 rounded-lg shadow">
                            <h3 class="text-sm text-blue-700 font-semibold">Jumlah Dokter</h3>
                            <p class="text-3xl font-bold text-blue-900 mt-2">{{ $jumlahDokter }}</p>
                        </div>

                        <!-- Kartu Jumlah Poli -->
                        <div class="bg-green-100 p-4 rounded-lg shadow">
                            <h3 class="text-sm text-green-700 font-semibold">Jumlah Poli</h3>
                            <p class="text-3xl font-bold text-green-900 mt-2">{{ $jumlahPoli }}</p>
                        </div>

                        <!-- Kartu Jumlah Pasien -->
                        <div class="bg-amber-100 p-4 rounded-lg shadow">
                            <h3 class="text-sm text-amber-700 font-semibold">Jumlah Pasien</h3>
                            <p class="text-3xl font-bold text-amber-900 mt-2">{{ $jumlahPasien }}</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
   

   
</x-app-layout>
