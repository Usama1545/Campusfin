<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }

    public function add_project()
    {
        return view('dashboard_layouts.add_project');
    }

    public function project_store(Request $request)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_logo' => 'nullable|image|max:2048',
            // Add validation rules for other fields
        ]);

        // Store the project logo file
        if ($request->hasFile('project_logo')) {
            $logoPath = $request->file('project_logo')->store('project_logos', 'public');
        }

        // Create the project record
        $project = Project::create([
            'project_name' => $validatedData['project_name'],
            'project_logo' => $logoPath ?? null,
            'project_symbol' => $request->input('project_symbol'),
            'project_type' => $request->input('project_type'),
            'project_domain' => $request->input('project_domain'),
            'project_category' => $request->input('project_category'),
            'project_launch_date' => $request->input('project_launch_date'),
            'project_audits' => $request->input('project_audits'),
            'token_standard' => $request->input('token_standard'),
            'blockchain_platform' => $request->input('blockchain_platform'),
            'project_website' => $request->input('project_website'),
            'project_github_link' => $request->input('project_github_link'),
            'project_whitepaper' => $request->input('project_whitepaper'),
            'project_comment' => $request->input('project_comment'),
            'developer_id' => $request->input('developer_id'),
        ]);

        return view('dashboard_layouts.add_project')->with('success', 'Project created successfully!');
    }


    public function project_list()
    {
        $projects = Project::paginate(6);


        return view('dashboard_layouts.project_list', compact('projects'));
    }

}
