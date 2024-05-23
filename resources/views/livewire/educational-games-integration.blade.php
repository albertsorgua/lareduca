<div>
    <div>
        <h3 class="">Available Games</h3>
    </div>
    <ul>
        @foreach ($games as $game)
            <li wire:click="startGameSession({{ $game->id }})">{{ $game->title }}</li>
        @endforeach
    </ul>
    @if ($selectedGameId)
        <div>
            <!-- Aquí puedes integrar el juego React seleccionado.
    Podrías usar Livewire para emitir eventos o directamente con JavaScript
    para iniciar el juego. -->
            <script>
                // Ejemplo de cómo iniciar un juego React aquí.
            </script>
        </div>
    @endif
</div>
