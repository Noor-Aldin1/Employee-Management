<?php

namespace App\Http\Controllers;

use App\Models\Department;
use mPDF;

class DepartmentReportController extends Controller
{
    public function generatePDF()
    {
        // Fetch all departments with their employees
        $departments = Department::with('employees')->get();

        // Load the view to generate the HTML content for the PDF
        $pdfContent = view('summaries.department_pdf', compact('departments'))->render();

        // Initialize mPDF
        $mpdf = new \Mpdf\Mpdf;

        // Write the HTML content to the PDF
        $mpdf->WriteHTML($pdfContent);

        // Output the PDF to the browser
        return $mpdf->Output('Department_Report.pdf', 'I'); // 'I' for inline display in the browser
    }
}
