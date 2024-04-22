@extends('layouts.app')
@section('content')
    <main class="p-10">
            <h1 class="text-3xl font-medium mb-16">Dashboard</h1>
            <section class="relative overflow-x-auto shadow-md sm:rounded-xl mt-10 bg-white p-3">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            nik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            tempat lahir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            tanggal lahir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            agama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            gender
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['participants'] as $participant)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $participant->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $participant->nik }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $participant->phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $participant->place_of_birth }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $participant->date_of_birth }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $participant->agama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $participant->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $participant->gender }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @if ($data['participants']->hasPages())
                    <div class="pagination flex justify-end items-center mt-3 p-5">
                        <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-"
                           href="{{ $data['participants']->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
                        <span class="text-gray-600 dark:text-gray-400 font-medium mr-2">{{ $data['participants']->currentPage() }} of {{ $data['participants']->lastPage() }}</span>
                        <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-"
                           href="{{ $data['participants']->nextPageUrl() }}" rel="next">Next &raquo;</a>
                    </div>
                @endif
            </section>

            <section class="rounded-xl p-3 mt-10 shadow-md max-w-xs bg-white">
                <table class="max-w-xl text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Total Peserta
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['totalParticipants'] }}
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            peserta terverifikasi
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['countIsVerified'] }}
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            peserta tidak terverifikasi
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['countIsNotVerified'] }}
                        </td>

                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Laki-Laki
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['countMale'] }}
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            perempuan
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['countFermale'] }}
                        </td>
                    </tr>
                </table>
            </section>
    </main>
@endsection
