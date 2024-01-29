<?php

use App\Http\Controllers\Chart\ChartController;
use App\Http\Controllers\Extras\ExtrasController;
use App\Http\Controllers\Form\FormController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Mail\MailController;
use App\Http\Controllers\Other\CalendarController;
use App\Http\Controllers\Other\GalleryController;
use App\Http\Controllers\Other\KanbanController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\Table\TableController;
use App\Http\Controllers\UI\UILayoutController;
use Illuminate\Support\Facades\Route;

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

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('index');
// Widget Route
Route::get('/widget', [HomeController::class, 'index'])->name('widget');
// Chart Route
Route::prefix('chart')->group(function () {
    Route::get('/chart-js', [ChartController::class, 'chartJs'])->name('chart.chartJs');
    Route::get('/flot', [ChartController::class, 'chartflot'])->name('chart.flot');
    Route::get('/inline', [ChartController::class, 'chartInline'])->name('chart.inline');
    Route::get('/uplot', [ChartController::class, 'chartUplot'])->name('chart.uplot');
});
// UI Layout Route
Route::prefix('ui')->group(function () {
    Route::get('/general', [UILayoutController::class, 'general'])->name('ui.general');
    Route::get('/button', [UILayoutController::class, 'button'])->name('ui.button');
    Route::get('/icon', [UILayoutController::class, 'icon'])->name('ui.icon');
    Route::get('/modal-alert', [UILayoutController::class, 'modalAlert'])->name('ui.modalAlert');
    Route::get('/nav-tab', [UILayoutController::class, 'navTab'])->name('ui.navTab');
    Route::get('/slider', [UILayoutController::class, 'slider'])->name('ui.slider');
    Route::get('/timeline', [UILayoutController::class, 'timeline'])->name('ui.timeline');
    Route::get('/ribbon', [UILayoutController::class, 'ribbon'])->name('ui.ribbon');
});
// Forms Route
Route::prefix('forms')->group(function () {
    Route::get('/general', [FormController::class, 'general'])->name('forms.general');
    Route::get('/advanced', [FormController::class, 'advanced'])->name('forms.advanced');
    Route::get('/editor', [FormController::class, 'editor'])->name('forms.editor');
    Route::get('/validation', [FormController::class, 'validation'])->name('forms.validation');
});
// Table Route
Route::prefix('tables')->group(function () {
    Route::get('/simple', [TableController::class, 'simple'])->name('table.simple');
    Route::get('/data-table', [TableController::class, 'dataTable'])->name('table.dataTable');
    Route::get('/js-grid', [TableController::class, 'jsGrid'])->name('table.jsGrid');
});
// Calendar Route
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
// Gallery Route
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
// Kanban Route
Route::get('/kanban', [KanbanController::class, 'index'])->name('kanban');
// Mail Route
Route::prefix('mail')->group(function () {
    Route::get('/inbox', [MailController::class, 'inbox'])->name('mail.inbox');
    Route::get('/compose', [MailController::class, 'compose'])->name('mail.compose');
    Route::get('/read', [MailController::class, 'read'])->name('mail.read');
});
// Search Route
Route::prefix('search')->group(function () {
    Route::get('/simple', [SearchController::class, 'simple'])->name('search.simple');
    Route::get('/enhanced', [SearchController::class, 'enhanced'])->name('search.enhanced');
});
// Pages Route
Route::prefix('pages')->group(function () {
    Route::get('/invoice', [PageController::class, 'invoice'])->name('pages.invoice');
    Route::get('/profile', [PageController::class, 'profile'])->name('pages.profile');
    Route::get('/e-commerce', [PageController::class, 'eCommerce'])->name('pages.eCommerce');
    Route::get('/projects', [PageController::class, 'project'])->name('pages.projects');
    Route::get('/project-edit', [PageController::class, 'projectEdit'])->name('pages.ProjectEdit');
    Route::get('/project-add', [PageController::class, 'projectAdd'])->name('pages.projectAdd');
    Route::get('/project-details', [PageController::class, 'projectDetail'])->name('pages.projectDetails');
    Route::get('/contacts', [PageController::class, 'contacts'])->name('pages.contacts');
    Route::get('/faq', [PageController::class, 'faq'])->name('pages.faq');
    Route::get('/contact-us', [PageController::class, 'contactUs'])->name('pages.contactUs');
});

// Extras Route
Route::prefix('extras')->group(function () {
    // Login Route
    Route::prefix('login')->group(function () {
        Route::get('/v1', [ExtrasController::class, 'loginV1'])->name('extras.login.v1');
        Route::get('/v2', [ExtrasController::class, 'loginV2'])->name('extras.login.v2');
    });
    // Register Route
    Route::prefix('register')->group(function () {
        Route::get('/v1', [ExtrasController::class, 'registerV1'])->name('extras.register.v1');
        Route::get('/v2', [ExtrasController::class, 'registerV2'])->name('extras.register.v2');
    });
    // Forget password Route
    Route::prefix('forget-password')->group(function () {
        Route::get('/v1', [ExtrasController::class, 'forgetV1'])->name('extras.forget.password.v1');
        Route::get('/v2', [ExtrasController::class, 'forgetV2'])->name('extras.forget.password.v2');
    });
    // Recover password Route
    Route::prefix('recover-password')->group(function () {
        Route::get('/v1', [ExtrasController::class, 'recoverV1'])->name('extras.recover.password.v1');
        Route::get('/v2', [ExtrasController::class, 'recoverV2'])->name('extras.recover.password.v2');
    });
    // Error Route
    Route::get('/error-404', [ExtrasController::class, 'error404'])->name('extras.error404');
    Route::get('/error-500', [ExtrasController::class, 'error500'])->name('extras.error500');
});

