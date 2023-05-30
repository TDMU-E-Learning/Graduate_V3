<x-app-layout>
    <button type="submit" onclick="pause()" style="background-color: red; font-size: 20px; padding: 15px;">PAUSE</button>
    <button type="submit" onclick="swap()"style="background-color: blue; font-size: 20px; padding: 15px;">SWAP</button>
    <button type="submit" onclick="stop()"></button>

    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script src="{{ asset('assets/js/main-people.js') }}"></script>
    <script src="{{ asset('assets/js/socket.js') }}"></script>
</x-app-layout>