<x-layout>
    <div class="note-container single-note">
        <h1>Edit you note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter you note here">{{ $note->$note }}</textarea>
            <div class="note-buttons">
                <a href="" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
