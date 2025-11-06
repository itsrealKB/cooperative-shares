<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('listing');
            $table->string('property_title');
            $table->text('description');
            $table->string('category');
            $table->string('listed_in');
            $table->decimal('price', 10, 2);
            $table->decimal('tax_rate', 10, 2);
            $table->string('size_in_ft');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('kitchens');
            $table->string('garages');
            $table->string('garage_size');
            $table->date('year_built');
            $table->string('floors');
            $table->text('listing_description');
            $table->longtext('files');
            $table->string('ac')->nullable();
            $table->string('garages')->nullable();
            $table->string('pool')->nullable();
            $table->string('parking')->nullable();
            $table->string('lakeview')->nullable();
            $table->string('garden')->nullable();
            $table->string('fireplace')->nullable();
            $table->string('pet')->nullable();
            $table->string('ceiling')->nullable();
            $table->string('shower')->nullable();
            $table->string('refrigerator')->nullable();
            $table->string('dryer')->nullable();
            $table->string('wifi')->nullable();
            $table->string('tv')->nullable();
            $table->string('bbq')->nullable();
            $table->string('laundry')->nullable();
            $table->string('accessible')->nullable();
            $table->string('lawn')->nullable();
            $table->string('elevator')->nullable();
            $table->text('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('zip-code');
            $table->string('map_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
