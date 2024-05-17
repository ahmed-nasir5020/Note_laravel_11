
{{-- extent or call layout --}}
<x-layout>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->

        index 
        <table border="1">
          <tr>
              <a href="{{ route('note.create') }}">New Note</a>
          </tr>
    @foreach ($notes as $note)
              
          <tr>
            <td>
                {{ Str::words($note->note,20)}}
            </td>
            <td>
                <a href="{{ route('note.show',$note->id) }}">view</a>
            </td>
         </tr>
    @endforeach
      
        </table>
        {{ $notes->links() }}
</x-layout>


