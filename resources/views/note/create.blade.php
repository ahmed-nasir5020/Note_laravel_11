{{-- extent or call layout or use it --}}
<x-app-layout>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
        <div>
            <h1>
                create new note
            </h1>
            <form action="{{ route('note.store') }}" method="post">
                @csrf
                <textarea name="note" id="" cols="30" rows="10"></textarea>
                <a href="{{ route('note.index') }}">cancel</a>
                <button>submit</button>
            </form>
        </div>
</x-app-layout>
