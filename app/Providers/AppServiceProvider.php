<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//để sử dụng class Schema phải gọi use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Schema;
use App\Category;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //tăng độ dài mặc định của chuỗi
        Schema::defaultStringLength(191);
        //tạo biến giá trị cần truyền đến tất cả các view
        $parentCategories = Category::where('parent_id',0)->get();
        View::share('parentCategories', $parentCategories);
        $categories = Category::all();
        View::share('categories', $categories);
    }
}
