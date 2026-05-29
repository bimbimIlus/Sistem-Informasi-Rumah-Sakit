<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Exports\PatientsExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $patients = Patient::when($search, function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('no_rm', 'like', '%' . $search . '%')
                    ->orWhere('nik', 'like', '%' . $search . '%');
        })
        ->latest()
        ->paginate(10)
        ->withQueryString();

        return Inertia::render('Patients/Index', [
            'patients' => $patients,
            'filters' => [
                'search' => $search
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Patients/Create');
    }

    public function exportPdf()
    {
        $patients = Patient::all();

        $pdf = Pdf::loadView(
            'pdf.patients',
            compact('patients')
        );

        return $pdf->download('patients.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(
            new PatientsExport,
            'patients.xlsx'
        );
    }

    private function generateNoRM()
    {
        $lastPatient = Patient::latest()->first();

        $number = 1;

        if ($lastPatient) {
            $lastId = $lastPatient->id + 1;
            $number = $lastId;
        }

        return 'RM-' . date('Ymd') . '-' . str_pad($number, 4, '0', STR_PAD_LEFT);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:patients,nik',
            'name' => 'required|max:255',
            'gender' => 'required|in:L,P',
            'birth_date' => 'required|date',
            'phone' => 'nullable|max:20',
            'address' => 'required',
            'blood_type' => 'nullable|in:A,B,AB,O',
        ]);

        $validated['no_rm'] = $this->generateNoRM();

        Patient::create($validated);

        return redirect()
            ->route('admin.patients.index')
            ->with('success', 'Data pasien berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return Inertia::render('Patients/Show', [
            'patient' => $patient
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return Inertia::render('Patients/Edit', [
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'no_rm' => 'required|unique:patients,no_rm,' . $patient->id,
            'nik' => 'required|unique:patients,nik,' . $patient->id,
            'name' => 'required|max:255',
            'gender' => 'required|in:L,P',
            'birth_date' => 'required|date',
            'phone' => 'nullable|max:20',
            'address' => 'required',
            'blood_type' => 'nullable|in:A,B,AB,O',
        ]);

        $patient->update($validated);

        return redirect()
            ->route('patients.index')
            ->with('success', 'Data pasien berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()
            ->route('patients.index')
            ->with('success', 'Data pasien berhasil dihapus');
    }
}