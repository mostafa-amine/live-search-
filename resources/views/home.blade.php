<x-layouts.app title="Home">

    <x-slot:content>
        <div class="container mt-5">
            <div class="d-flex  justify-content-center">
                <form action="{{ route('posts.search') }}" method="post" class="col-6 d-flex align-items-center" id="search_form">
                    <input type="text" class="form-control rounded-0 border-1" id="q">
                    <button class="border-0 rounded-0 btn btn-secondary px-5 py-2">Search</button>
                </form>
            </div>

            <div class="d-flex flex-column align-items-center" id="post">
                @foreach ($posts as $post)
                    <div class="bg-light col-6 border border-1 p-3 mt-2" >
                        <div>
                            <h3>{{ $post->title }}</h3>
                        </div>

                        <div>
                            <p>{{ $post->title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </x-slot:content>

</x-layouts.app>
