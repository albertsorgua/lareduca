<div class="p-6 bg-color">
    <div class="p-6 bg-white rounded shadow">
        <div class="mb-4 bg-gray-300 rounded-lg shadow-md p-4">
            <h1 class="text-2xl font-bold">{{ $assignment->title }}</h1>
            <p class="text-sm text-gray-600">{{ $assignment->description }}</p>
        </div>

        <form wire:submit.prevent="saveSubmission" class="space-y-4">
            <textarea wire:model="submissionText" placeholder="Texto de la entrega" class="w-full p-2 border rounded"></textarea>
            <input type="file" wire:model="submissionFile" class="w-full p-2 border rounded">
            <button type="submit" class="w-full p-2 text-white bg-blue-500 rounded hover:bg-blue-600">Enviar</button>
        </form>

        @if ($submissions)
            @foreach ($submissions as $submission)
                <div class="mt-6 border-t pt-4">
                    <p class="font-bold">{{ $submission->user->name }}: <span
                            class="font-normal">{{ $submission->submission_text }}</span></p>
                    @if ($submission->submission_file)
                        <a href="{{ Storage::url($submission->submission_file) }}" target="_blank"
                            class="text-blue-500 hover:underline">Ver archivo adjunto</a>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
</div>
