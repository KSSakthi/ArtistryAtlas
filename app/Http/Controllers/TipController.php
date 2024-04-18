<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tip;
use Illuminate\Support\Facades\Storage;


class TipController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tipTitle' => 'required|string',
            'tipCategory' => 'required|string',
            'tipInstructions' => 'required|string',
            'tipToolsUsed' => 'required|string',
            'tipPdf' => 'required|file|mimes:pdf',
        ]);

        $pdfPath = $request->file('tipPdf')->store('tips_pdf');

        $tip = new Tip();
        $tip->title = $request->tipTitle;
        $tip->category = $request->tipCategory;
        $tip->instructions = $request->tipInstructions;
        $tip->tools_used = $request->tipToolsUsed;
        $tip->pdf = $pdfPath;
        $tip->user_id = auth()->id(); // Assuming you have authentication
        $tip->save();

        return redirect()->back()->with('success', 'Tip submitted successfully.');
    }

    public function index()
    {
        $tips = Tip::where('user_id', auth()->user()->id)->get();
        return view('artist.tips', compact('tips'));
    }

    public function edit(Tip $tip)
    {
        return view('artist.edit_tip', compact('tip'));
    }
    public function update(Request $request, Tip $tip)
    {
        $request->validate([
            'tipTitle' => 'required|string',
            'tipCategory' => 'required|string',
            'tipInstructions' => 'required|string',
            'tipToolsUsed' => 'required|string',
            'tipPdf' => 'file|mimes:pdf',
        ]);

        // Update other fields
        $tip->update([
            'title' => $request->tipTitle,
            'category' => $request->tipCategory,
            'instructions' => $request->tipInstructions,
            'tools_used' => $request->tipToolsUsed,
        ]);

        // Check if a new PDF file is provided
        if ($request->hasFile('tipPdf')) {
            // Delete the existing PDF file
            Storage::delete($tip->pdf);

            // Store the new PDF file
            $pdfPath = $request->file('tipPdf')->store('tips_pdf');
            
            // Update the 'pdf' field in the database
            $tip->update(['pdf' => $pdfPath]);
        }

        return redirect()->route('tips.index')->with('success', 'Tip updated successfully.');
    }

    public function destroy(Tip $tip)
    {
        $tip->delete();
        return redirect()->route('tips.index')->with('success', 'Tip deleted successfully.');
    }
    public function download(Tip $tip)
    {
        $filePath = storage_path('app/' . $tip->pdf);
        return response()->download($filePath);
    }
}
