<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\EloquentRepositoryInterface;

use App\Repositories\UsersRepositoryInterface;
use App\Repositories\Eloquent\UsersRepository;
use App\Repositories\BooksRepositoryInterface;
use App\Repositories\Eloquent\BooksRepository;
use App\Repositories\TagsRepositoryInterface;
use App\Repositories\Eloquent\TagsRepository;
use App\Repositories\FilesRepositoryInterface;
use App\Repositories\Eloquent\FilesRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        
        $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
        $this->app->bind(BooksRepositoryInterface::class, BooksRepository::class);
        $this->app->bind(TagsRepositoryInterface::class, TagsRepository::class);
        $this->app->bind(FilesRepositoryInterface::class, FilesRepository::class);
    }
}

    
