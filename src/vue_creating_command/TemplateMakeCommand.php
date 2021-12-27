<?php

namespace Vue\Create;

use Illuminate\Console\Command;
use App\Models\Wallet;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class TemplateMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vueTemplateMake';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'viewMaker(^^)';

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
        $allTables = DB::connection()->getDoctrineSchemaManager()->listTableNames();
        $modelName = $this->ask('モデル名の頭文字を入力してください。ex."w" or "u"' . $allTables);
        if($modelName == 'w') {
            $columnName = $this->ask('カラム名の頭文字を入力してください。ex."c"');
            if($columnName == 'c') {
                Artisan::call('fileMake');
                dd('色のeditを作成しました。');
            }
        } else if($modelName == 'u'){
            dd(Schema::getColumnListing('users'));
        } else {
            dd();
        }
        // dd(Wallet::all());
    }
}
