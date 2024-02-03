@if ($message = Session::get('error'))
    <div class="z-20 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded m-4" role="alert">
        <strong class="font-bold">Nice try, fatty!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif
@if ($errors->any())
    <div class="z-20 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded m-4" role="alert">
        <strong class="font-bold">Nice try, fatty!</strong>
        <span class="block sm:inline">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="z-20 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded m-4 fade" role="alert">
        <strong class="font-bold">Way to go, slim!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('expired'))
    <div class="z-20 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded m-4" role="alert">
        <strong class="font-bold">Whoops!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif