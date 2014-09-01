<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bibliography extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bibliographies', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('type_id'); // Foreign key
			$table->string('abbr_case_number', 45)->nullable();
			$table->string('broadcaster', 45)->nullable();
			$table->string('case_number', 45)->nullable();
			$table->integer('chapter_number')->nullable();
			$table->string('city', 100)->nullable();
			$table->text('comments')->nullable();
			$table->string('conference_publication_name')->nullable();
			$table->string('corporate_author')->nullable();
			$table->string('corporate_performer')->nullable();
			$table->string('country_region')->nullable();
			$table->string('court')->nullable();
			$table->string('day')->nullable();
			$table->string('day_accessed')->nullable();
			$table->string('department')->nullable();
			$table->string('distributor')->nullable();
			$table->string('edition')->nullable();
			$table->boolean('has_artists')->nullable();
			$table->boolean('has_authors')->nullable();
			$table->boolean('has_book_authors')->nullable();
			$table->boolean('has_compilers')->nullable();
			$table->boolean('has_composers')->nullable();
			$table->boolean('has_conductors')->nullable();
			$table->boolean('has_counsel')->nullable();
			$table->boolean('has_directors')->nullable();
			$table->boolean('has_interviewee')->nullable();
			$table->boolean('has_interviewer')->nullable();
			$table->boolean('has_inventors')->nullable();
			$table->boolean('has_performers')->nullable();
			$table->boolean('has_producers_name')->nullable();
			$table->boolean('has_translators')->nullable();
			$table->boolean('has_writers')->nullable();
			$table->string('institution')->nullable();
			$table->integer('issue')->nullable();
			$table->string('journal_name')->nullable();
			$table->string('media_type')->nullable();
			$table->string('medium')->nullable();
			$table->string('month')->nullable();
			$table->string('month_accessed')->nullable();
			$table->string('name_webpage')->nullable();
			$table->string('name_website')->nullable();
			$table->string('number_of_volume')->nullable();
			$table->string('pages')->nullable();
			$table->string('patent_number')->nullable();
			$table->string('place_published')->nullable();
			$table->string('publication_title')->nullable();
			$table->string('production_company')->nullable();
			$table->string('publisher')->nullable();
			$table->integer('recording_number')->nullable();
			$table->string('reporter')->nullable();
			$table->string('report_type')->nullable();
			$table->string('short_title')->nullable();
			$table->string('standard_number')->nullable();
			$table->string('state_province')->nullable();
			$table->string('station')->nullable();
			$table->string('theater')->nullable();
			$table->string('title')->nullable();
			$table->text('url_full')->nullable(); // versi lengkap url yang dimaksud. Ex: http://ex.com/?p=1&p=4&g=k
			$table->text('url_base')->nullable(); // versi url dasar yang dimaksud. Ex: http://ex.com/
			$table->float('version')->nullable();
			$table->string('volume')->nullable();
			$table->integer('year')->nullable();
			$table->integer('year_accessed')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bibliographies');
	}

}
