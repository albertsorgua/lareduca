<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameScore;
use App\Models\GameSession;
use Carbon\Carbon;

class GameResultsController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'game_id' => 'required|integer',
            'attempts' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
        ]);
        // Calcula la diferencia en minutos usando Carbon
        $duration = Carbon::parse($validated['start_time'])->diffInMinutes($validated['end_time']);
        // Inicia la nota en 10 y ajusta según los intentos y la duración
        $score = max(10 - ($validated['attempts'] * 0.5) - ($duration *
            0.1), 0);
        // Crea una nueva sesión de juego y almacena el resultado
        $gameSession = GameSession::create([
            'user_id' => $validated['user_id'],
            'game_id' => $validated['game_id'],
            'start_time' => $validated['start_time'],
            'end_time' => $validated['end_time']
        ]);

        // Obtener la puntuación más alta del usuario para el juego
        $highScore = GameScore::where('user_id', $validated['user_id'])
            ->where('game_id', $validated['game_id'])
            ->max('score');

        // Actualizar la puntuación más alta si la nueva es mayor
        if ($score > $highScore) {
            $highScore = $score;
        }

        // Crear un nuevo registro de puntuación
        $gameScore = GameScore::create([
            'session_id' => $gameSession->id,
            'user_id' => $validated['user_id'],
            'game_id' => $validated['game_id'],
            'score' => $score,
            'high_score' => $highScore
        ]);


        return response()->json([
            'message' => 'Game results stored successfully',
            'score' => $score,
            'high_score' => $highScore
        ]);
    }
}
