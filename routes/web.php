<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/redirect', [AuthController::class, 'check_login'])->middleware(['auth', 'verified'])->name('redirect');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/admin/testimonial/view', 'testimonial_view')->name('testimonial.view');
    Route::get('/admin/testimonial/all', 'testimonial_all')->name('testimonial.all');
    Route::post('/admin/testimonial/add', 'testimonial_add')->name('testimonial.add');
    Route::post('/admin/testimonial/delete/{id}', 'testimonial_delete')->name('testimonial.delete');
    Route::get('/admin/testimonial/edit/{id}', 'testimonial_edit')->name('testimonial.edit');
    Route::post('/admin/testimonial/update/{id}', 'testimonial_update')->name('testimonial.update');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
});

Route::controller(ProjectController::class)->group(function () {
    Route::get('/projects', 'project')->name('project');
    Route::get('/admin/project/view', 'project_view')->name('project.view');
    Route::get('/admin/project/all', 'project_all')->name('project.all');
    Route::post('/admin/project/add', 'project_add')->name('project.add');
    Route::post('/admin/project/delete/{id}', 'project_delete')->name('project.delete');
    Route::get('/admin/project/edit/{id}', 'project_edit')->name('project.edit');
    Route::post('/admin/project/update/{id}', 'project_update')->name('project.update');
    Route::get('project/details/{id}', 'project_detail')->name('project.detail');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'product')->name('product');
    Route::get('/admin/product/view', 'product_view')->name('product.view');
    Route::get('/admin/product/all', 'product_all')->name('product.all');
    Route::post('/admin/product/add', 'product_add')->name('product.add');
    Route::post('/admin/product/delete/{id}', 'product_delete')->name('product.delete');
    Route::get('/admin/product/edit/{id}', 'product_edit')->name('product.edit');
    Route::post('/admin/product/update/{id}', 'product_update')->name('product.update');
    Route::get('product/details/{name}', 'product_detail')->name('product.detail');
});


Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'all_blog')->name('blog');
    Route::get('/admin/category/manage', 'category_view')->name('category.view');
    Route::post('/admin/category/add', 'category_add')->name('category.add');
    Route::post('/admin/category/delete/{id}', 'category_delete')->name('category.delete');
    Route::get('/admin/category/edit/{id}', 'category_edit')->name('category.edit');
    Route::post('/admin/category/update/{id}', 'category_update')->name('category.update');
    Route::get('/admin/post/view', 'post_view')->name('post.view');
    Route::get('/admin/post/all', 'post_all')->name('post.all');
    Route::post('/admin/post/add', 'post_add')->name('post.add');
    Route::post('/admin/post/delete/{id}', 'post_delete')->name('post.delete');
    Route::get('/admin/post/edit/{id}', 'post_edit')->name('post.edit');
    Route::post('/admin/post/update/{id}', 'post_update')->name('post.update');
    Route::get('/blog/{name}', 'post_detail')->name('blog.detail');
    Route::get('/blog/category/{name}', 'post_category')->name('blog.category');
    Route::post('/comment/add', 'comment_add')->name('comment.save');
    Route::get('/admin/comment/all', 'get_all_comment')->name('comment.all');
    Route::post('/admin/comment/delete/{id}', 'comment_delete')->name('comment.delete');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/save', 'contact_save')->name('contact.save');
    Route::get('/admin/contact/all', 'get_all_message')->name('contact.all');
    Route::post('/admin/contact/delete/{id}', 'message_delete')->name('contact.delete');
});

Route::middleware('auth')->group(function () {

Route::controller(\App\Http\Controllers\UserController::class)->group(function () {
    Route::get('/my/orders', 'my_order')->name('my.order');
    Route::get('/all/orders', 'all_orders')->name('all.orders');
    Route::get('/view/invoice/{id}', 'view_invoice')->name('view.invoice');
    Route::get('/order/detail/{id}', 'order_detail')->name('order.detail');
    Route::post('admin/order/status/{id}', 'admin_order_status')->name('admin.order.status');
    Route::post('admin/payment/resolution/{id}', 'admin_payment_resolution')->name('admin.payment.resolution');
    Route::get('/download/invoice/{id}', 'download_invoice')->name('download.invoice');
    Route::get('admin/change/password', 'admin_change_password')->name('admin.change.password');
    Route::get('admin/user/all', 'admin_user_all')->name('admin.user.all');
    Route::post('/user/password/change/', 'user_password_change')->name('user.password.change');

    Route::post('/profile/update/{id}', 'user_profile_update')->name('user.profile.update');
    Route::post('/password/update', 'user_password_update')->name('user.password.update');
    Route::get('/profile/view', 'user_profile_view')->name('my.profile');

    Route::post('admin/user/delete/{id}', 'admin_user_delete')->name('admin.user.delete');
    Route::post('admin/user/visibility/{id}', 'admin_user_visibility')->name('admin.user.visibility');
    Route::post('admin/member/block/{id}', 'admin_member_block')->name('admin.member.block');
    Route::post('admin/member/password/{id}', 'admin_member_password_change')->name('admin.member.password.change');
});



    Route::controller(ProductController::class)->group(function () {
        Route::post('product/add/cart/', 'add_cart')->name('add.cart');
        Route::get('product/cart/', 'product_cart')->name('cart');
        Route::post('/cart/delete', 'cart_delete')->name('cart.delete');
        Route::post('/cart/update', 'cart_update')->name('cart.update');
        Route::post('/cart/checkout', 'cart_checkout')->name('cart.checkout');
        Route::get('/repay/bill/{id}', 'repay_bill')->name('repay.bill');
        Route::get('/payment/callback/paystack', 'paymentCallbackPaystack')->name('pay.callback.paystack');
    });



});
require __DIR__.'/auth.php';
