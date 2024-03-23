<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_logo',
        'project_symbol',
        'project_type',
        'project_domain',
        'project_category',
        'project_launch_date',
        'project_audits',
        'token_standard',
        'blockchain_platform',
        'project_website',
        'project_github_link',
        'project_whitepaper',
        'project_comment',
        'developer_id',
    ];
}
