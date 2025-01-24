<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Username'); 
            $table->string('notesImg');
            $table->string('notesName');
            $table->string('notesTitle');
            $table->timestamps(); 

           
            $table->foreign('Username')->references('name')->on('users')
                  ->onDelete('cascade') 
                  ->onUpdate('cascade'); 
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
