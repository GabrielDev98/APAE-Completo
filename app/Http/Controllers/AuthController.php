<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Certifique-se de ter o modelo User criado

class AuthController extends Controller
{
    /**
     * Mostra o formulário de login
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Processa o login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/Main');
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ])->onlyInput('email');
    }

    /**
     * Mostra o formulário de registro (apenas para usuários autenticados)
     */
    public function showRegisterForm()
    {
        $this->authorize('create', User::class); // Usando políticas (opcional)
        return view('registro');
    }

    /**
     * Processa o registro de novo usuário (apenas para usuários autenticados)
     */
    public function register(Request $request)
    {
        $this->authorize('create', User::class); // Usando políticas (opcional)
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'sometimes|string' // Se você tiver roles/permissões
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'] ?? 'user' // Valor padrão se não fornecido
        ]);

        // Se quiser logar o novo usuário automaticamente:
        // Auth::login($user);

        return redirect('/Main')->with('success', 'Usuário registrado com sucesso!');
    }

    /**
     * Faz logout do usuário
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}