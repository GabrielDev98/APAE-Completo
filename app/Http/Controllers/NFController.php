<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotaFiscal;

class NFController extends Controller
{

    public function index(Request $request)
    {
        $query = NotaFiscal::query();

        // Filtro por cliente
        if ($request->filled('cliente')) {
            $query->where('cliente', 'like', '%' . $request->cliente . '%');
        }

        // Filtro por data
        if ($request->filled('data')) {
            $query->whereDate('data', $request->data);
        }

        // Filtro por tipo
        if ($request->filled('entrada')) {
            $query->where('tipo', $request->entrada);
        }

        // Filtro por status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $notas_fiscais = $query->orderByDesc('data')->paginate(10);

        return view('notasfiscalview', compact('notas_fiscais'));
    }


    public function criar()
    {
        // Retorna a view para criar nova nota fiscal
        return view('notasfiscalcriar');
    }

    public function store(Request $request)
    {

        $request->validate([
            'numero' => 'required|unique:notas_fiscais,numero',
            'data' => 'required|date',
            'tipo' => 'required|in:entrada,saida',
            'cliente' => 'required',
            'valor' => ['required', 'regex:/^R?\$?\s?\d{1,3}(\.\d{3})*(,\d{2})?$/'],
            'status' => 'required|in:processada,pendente,cancelada',
        ]);

        // Converte o valor formatado com R$, . e , para número (ex: "R$ 1.234,56" => 1234.56)
        $valorLimpo = floatval(str_replace(['R$', '.', ','], ['', '', '.'], $request->valor));

        NotaFiscal::create([
            'numero' => $request->numero,
            'data' => $request->data,
            'tipo' => $request->tipo,
            'cliente' => $request->cliente,
            'valor' => $valorLimpo,
            'status' => $request->status,
        ]);

        return redirect()->route('notas.index')->with('success', 'Nota fiscal criada com sucesso!');
    }


    public function edit($id)
    {
        // Busca a nota fiscal para edição
        $nota = NotaFiscal::findOrFail($id);
        return view('notasfiscaleditar', compact('nota'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'numero' => 'required',
            'data_mysql' => 'required|date',
            'tipo' => 'required|in:entrada,saida',
            'cliente' => 'required|string|max:255',
            'valor_numerico' => 'required|numeric',
            'status' => 'required|in:processada,pendente,cancelada'
        ]);

        $nota = NotaFiscal::findOrFail($id);
        $nota->update([
            'numero' => $request->numero,
            'data' => $request->data_mysql,
            'tipo' => $request->tipo,
            'cliente' => $request->cliente,
            'valor' => $request->valor_numerico,
            'status' => $request->status
        ]);

        return redirect()->route('notas.index')->with('success', 'Nota fiscal atualizada com sucesso!');
    }

    public function destroy($id)
    {
        // Remove a nota fiscal do banco
        $nota = NotaFiscal::findOrFail($id);
        $nota->delete();

        return redirect()->route('notas.index')->with('success', 'Nota fiscal excluída com sucesso!');
    }
}
