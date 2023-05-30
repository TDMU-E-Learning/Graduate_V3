<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-whitedark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-100">
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>MSSV</th>
                                <th>Họ và tên</th>
                                <th>Ngành</th>
                            </tr>
                        </thead>
                        <tbody id="data-table"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script src="{{ asset('assets/js/queue.js') }}"></script>
    <script src="{{ asset('assets/js/socket.js') }}"></script>
</x-app-layout>