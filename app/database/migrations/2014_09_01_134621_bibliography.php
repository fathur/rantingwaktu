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

			$table->integer('type_id'); // FK
			$table->string('abbr_case_number', 45);
			$table->string('broadcaster', 45);
			$table->string('case_number', 45);
			$table->integer('chapter_number');
			$table->string('city', 100);
			$table->text('comments');
			$table->string('conference_publication_name');
			$table->string('corporate_author');
			$table->string('corporate_performer');
			$table->string('country_region');
			$table->string('court');
			$table->string('day');
			$table->string('day_accessed');
			$table->string('department');
			$table->string('distributor');
			$table->string('edition');
			$table->boolean('has_artists');
			$table->boolean('has_authors');
			$table->boolean('has_book_authors');
			$table->boolean('has_compilers');
			$table->boolean('has_composers');
			$table->boolean('has_conductors');
			$table->boolean('has_counsel');
			$table->boolean('has_directors');
			$table->boolean('has_interviewee');
			$table->boolean('has_interviewer');
			$table->boolean('has_inventors');
			$table->boolean('has_performers');
			$table->boolean('has_producers_name');
			$table->boolean('has_translators');
			$table->boolean('has_writers');
			$table->string('institution');
			$table->integer('issue');
			$table->string('journal_name');
			$table->string('media_type');
			$table->string('medium');
			$table->string('month');
			$table->string('month_accessed');
			$table->string('name_webpage');
			$table->string('name_website');
			$table->string('number_of_volume');
			$table->string('pages');
			$table->string('patent_number');
			$table->string('place_published');
			$table->string('publication_title');
			$table->string('production_company');
			$table->string('publisher');
			$table->integer('recording_number');
			$table->string('reporter');
			$table->string('report_type');
			$table->string('short_title');
			$table->string('standard_number');
			$table->string('state_province');
			$table->string('station');
			$table->string('theater');
			$table->string('title');
			$table->text('url');
			$table->float('version');
			$table->string('volume');
			$table->integer('year');
			$table->integer('year_accessed');

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
