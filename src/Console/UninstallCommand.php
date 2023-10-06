<?php

namespace Nicelizhi\Taobao\Console;

use Illuminate\Console\Command;

class UninstallCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'taobao:uninstall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Uninstall the taobao package';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if (!$this->confirm('Are you sure to uninstall laravel-admin taobao?')) {
            return;
        }

        $this->removeFilesAndDirectories();

        $this->line('<info>Uninstalling laravel-admin taobao!</info>');
    }

    /**
     * Remove files and directories.
     *
     * @return void
     */
    protected function removeFilesAndDirectories()
    {
        $this->laravel['files']->deleteDirectory(config('taobao.directory'));
        $this->laravel['files']->deleteDirectory(public_path('vendor/laravel-admin/'));
        $this->laravel['files']->delete(config_path('admin.php'));
    }
}
