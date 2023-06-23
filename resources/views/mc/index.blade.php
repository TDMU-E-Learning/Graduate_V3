<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Danh sách nhận bằng') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-whitedark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-100">
                    <table class="table-auto" id="queueTable">
                        <thead>
                            <tr>
                                <th>MSSV/MSHV</th>
                                <th>Họ và tên</th>
                                <th>Loại bằng</th>
                                <th>Chuyên ngành</th>
                                <th>Thời gian</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{env('SOCKET_URL')}}/socket.io/socket.io.js"></script>
    <script>
        var app_url = "{{env('APP_URL')}}";
        var socket_url = "{{env('SOCKET_URL')}}";
    </script>
    <script src="{{ asset('assets/js/socket.js') }}"></script>
    <script src="{{ asset('assets/js/mc.js') }}"></script>
</x-app-layout>