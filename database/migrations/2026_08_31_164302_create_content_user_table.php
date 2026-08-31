<?php

use App\Enums\ContributorRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->enum('role', ContributorRole::cases());
            $table->timestamps();
        });
    }
};
