<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\File;

class SetEnvironment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    /**
     * Execute the console command.
     */
        protected $signature = 'set:env {environment}';

        protected $description = 'Set the environment in .env file';
    
        public function handle()
        {
            $environment = $this->argument('environment');
        if (!in_array($environment, ['local', 'production'])) {
            $this->error('Invalid environment. Only "local" and "production" are supported.');
            return;
        }

                $envFilePath = base_path('.env');
                $currentEnvContent = file_get_contents($envFilePath);

                // Replace existing APP_ENV value or add it if it doesn't exist
                $newEnvContent = preg_replace(
                    '/^\s*APP_ENV\s*=\s*.*$/m',
                    "APP_ENV=$environment",
                    $currentEnvContent
                );

                file_put_contents($envFilePath, $newEnvContent);

                $this->info("Environment set to $environment.");
            
        }
    }
