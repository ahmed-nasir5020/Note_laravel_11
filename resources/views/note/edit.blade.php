
{{-- extent or call layout --}}
<x-app-layout>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
        <h1>
            edit note
        </h1>
        <form action="{{ route('note.update',$note->id) }}" method="post">
            @csrf
            @method('put')
            <textarea name="note" id="" cols="30" rows="10" >
                {{ $note->note }}
            </textarea>
            <div>
                <a href="{{  route('note.index')}}">cancel</a>
                <button>submit</button>
            </div>
        </form>
</x-app-layout>

