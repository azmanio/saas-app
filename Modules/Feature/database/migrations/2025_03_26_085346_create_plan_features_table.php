<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('plan_features', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('plan_id')
                ->references('id')
                ->on('plans')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignUuid('feature_id')
                ->references('id')
                ->on('features')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('plan_features');
    }
};
