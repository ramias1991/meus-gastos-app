@if (session()->has('message'))
    <div class="px-5 py-4 border-indigo-900 bg-indigo-500 text-white mb-10">
        <h3>{{ session('message') }}</h3>
    </div>
@endif
