<?php

namespace App\Console\Commands;


use File;
use Illuminate\Console\Command;

class FileMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fileMake';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'えこーだよ^^';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // スタブファイルの内容を読み込む
        $stub = File::get(app_path() . './stubs/blade.stub');

        // 〜スタブファイルに対して置換などの加工処理などを行う〜
 
        // vueファイルのパスを作成
        $blade = resource_path() . '/js/' . 'create' . '.vue';
 
        // bladeファイルを作成
        File::put($blade, $stub);
        dd('呼ばれたよ');
    }
}
