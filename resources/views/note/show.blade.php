
{{-- extent or call layout --}}
<x-layout>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    
        <div>
            <h1>
                note date {{ $note->created_at }}
            </h1>
            <div>
                <a href="{{ route('note.edit',$note->id) }}">edit</a>
                <form action="{{ route('note.destroy',$note->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button>delete</button>
                </form>
            </div>
            <div>
                <h3>
                    {{ $note->note }}
                </h3>
            </div>
        </div>
</x-layout>



