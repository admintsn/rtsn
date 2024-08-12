<div class="grid grid-cols-3 justify-evenly justify-items-center bg-gray-100">
    <div>
        
    </div>
    <div class="card card-compact w-72 bg-base-100 shadow-xl">
        @foreach ($jadwala as $jadwalaa)
        <figure><img src="{{ asset('storage/'.$jadwalaa->poster) }}" alt="SS-siaran" /></figure>
        <div class="card-body">
            @endforeach
            <table class="table table-xs w-full text-xs text-left">
                <tbody>
                    <tr>
                        <td>
                            <div class="flex items-center">
                                <div class="avatar">
                                    <div class="w-5 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M7 4a3 3 0 016 0v6a3 3 0 11-6 0V4z" />
                                            <path d="M5.5 9.643a.75.75 0 00-1.5 0V10c0 3.06 2.29 5.585 5.25 5.954V17.5h-1.5a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-1.5v-1.546A6.001 6.001 0 0016 10v-.357a.75.75 0 00-1.5 0V10a4.5 4.5 0 01-9 0v-.357z" />
                                        </svg>
                                    </div>
                                </div>
                                </<div>
                        </td>
                        <td>
                            @foreach ($penyiar as $a)
                            {{$a->ustadz." حافظه الله "}}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flex items-center">
                                <div class="avatar">
                                    <div class="w-5 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M10.75 16.82A7.462 7.462 0 0115 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0018 15.06v-11a.75.75 0 00-.546-.721A9.006 9.006 0 0015 3a8.963 8.963 0 00-4.25 1.065V16.82zM9.25 4.065A8.963 8.963 0 005 3c-.85 0-1.673.118-2.454.339A.75.75 0 002 4.06v11a.75.75 0 00.954.721A7.506 7.506 0 015 15.5c1.579 0 3.042.487 4.25 1.32V4.065z" />
                                        </svg>


                                    </div>
                                </div>
                                </<div>
                        </td>
                        <td>
                            @foreach ($penyiarm as $pm)
                            {{$pm->materi}}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flex items-center">
                                <div class="avatar">
                                    <div class="w-5 rounded">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M8.157 2.175a1.5 1.5 0 00-1.147 0l-4.084 1.69A1.5 1.5 0 002 5.251v10.877a1.5 1.5 0 002.074 1.386l3.51-1.453 4.26 1.763a1.5 1.5 0 001.146 0l4.083-1.69A1.5 1.5 0 0018 14.748V3.873a1.5 1.5 0 00-2.073-1.386l-3.51 1.452-4.26-1.763zM7.58 5a.75.75 0 01.75.75v6.5a.75.75 0 01-1.5 0v-6.5A.75.75 0 017.58 5zm5.59 2.75a.75.75 0 00-1.5 0v6.5a.75.75 0 001.5 0v-6.5z" clip-rule="evenodd" />
                                        </svg>


                                    </div>
                                </div>
                                </<div>
                        </td>
                        <td>
                            @foreach ($penyiart as $pt)
                            {{$pt->tempat}}
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
        
    </div>
</div>  