<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Ebook;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebooks')->insert([
            [
                'title' => 'IT ENDS WITH US',
                'author' => 'Colleen Hoover',
                'description' => 'A battered wife raised in a violent home attempts to halt the cycle of abuse.',
            ],
            [
                'title' => 'VERITY',
                'author' => 'Colleen Hoover',
                'description' => 'Lowen Ashleigh is hired by the husband of an injured writer to complete her popular series and uncovers a horrifying truth.',
            ],
            [
                'title' => 'THE SEVEN HUSBANDS OF EVELYN HUGO',
                'author' => 'Taylor Jenkins Reid',
                'description' => 'A movie icon recounts stories of her loves and career to a struggling magazine writer.',
            ],
            [
                'title' => 'UGLY LOVE',
                'author' => 'Colleen Hoover',
                'description' => 'Tate Collins and Miles Archer, an airline pilot, think they can handle a no strings attached arrangement. But they cant.',
            ],
            [
                'title' => 'THE MAID',
                'author' => 'Nita Prose',
                'description' => 'When a wealthy man is found dead in his room, a maid at the Regency Grand Hotel becomes a lead suspect.',
            ],
            [
                'title' => 'THE 1619 PROJECT',
                'author' => 'Nikole Hannah-Jones, Caitlin Roper, Ilena Silverman and Jake Silverstein',
                'description' => 'Viewing America’s entanglement with slavery and its legacy, in essays adapted and expanded from The New York Times Magazine.',
            ],
            [
                'title' => 'THE POWER OF REGRET',
                'author' => 'Daniel H. Pink',
                'description' => 'A look at four core regrets and potential strategies to make them a positive force.',
            ],
            [
                'title' => 'HOW TO BE PERFECT',
                'author' => 'Michael Schur',
                'description' => 'The creator of “The Good Place” incorporates works by various philosophers to examine ethical questions and moral issues.',
            ],
        ]);
    }
}
