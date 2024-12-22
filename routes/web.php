<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiQualities;
use App\Http\Controllers\iotController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\API\AquariumController;
use App\Http\Controllers\WaterQualityController;
use App\Http\Controllers\KeranjangItemController;
use App\Http\Controllers\RekapPenjualanController;
use App\Http\Controllers\DeliveryScheduleController;
use App\Mail\notification;

// Rute untuk landing page
Route::get('/', function () {
    return view('welcome');
})->name('landing.page');

// Rute untuk halaman umum
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/toko', function () {
    return view('toko');
})->name('toko');

Route::get('/keranjang_Items', function () {
    return view('keranjang_Items.index');
})->name('keranjang_Items');

Route::get('/pakan', function () {
    return view('pakan');
})->name('pakan');

Route::get('/alat', function () {
    return view('alat');
})->name('alat');

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/logout',[HomeController::class,'logout'])->name('logout');

Route::get('/rekap', function () {
    return view('rekap');
})->name('rekap');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/detailProduk', function () {
    return view('detailProduk');
})->name('detailProduk');

// Rute untuk dashboard yang dilindungi
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute untuk rekap penjualan

Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::post('/profil', [ProfilController::class, 'update'])->name('profil.update');



// Rute untuk admin
Route::middleware([Admin::class])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
});
// Rute untuk admin
Route::middleware([Admin::class])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products'); // Menampilkan daftar produk
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create'); // Menampilkan form untuk membuat produk
    Route::post('/admin/products/save', [ProductController::class, 'save'])->name('admin.products.save');
    Route::post('/api/send-email',[iotController::class,'mail']);
});

// Rute untuk produk
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products');
// Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::get('/admin/products/{id}', [ProductController::class, 'show'])->name('admin.products.show');
Route::put('/admin/products/update/{id}', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
Route::get('/toko', [ProductController::class, 'index'])->name('toko');

// Rute untuk jadwal pengantaran
Route::get('/admin/delivery-schedules', [DeliveryScheduleController::class, 'index'])->name('admin.delivery-schedules');
Route::get('/admin/delivery-schedules/create', [DeliveryScheduleController::class, 'create'])->name('admin.delivery-schedules.create');
Route::post('/admin/delivery-schedules/store', [DeliveryScheduleController::class, 'store'])->name('admin.delivery-schedules.store');
Route::get('/admin/delivery-schedules/edit/{id}', [DeliveryScheduleController::class, 'edit'])->name('admin.delivery-schedules.edit');
Route::get('/admin/delivery-schedules/{id}', [DeliveryScheduleController::class, 'show'])->name('admin.delivery-schedules.show');
Route::put('/admin/delivery-schedules/update/{id}', [DeliveryScheduleController::class, 'update'])->name('admin.delivery-schedules.update');
Route::delete('/admin/delivery-schedules/{id}', [DeliveryScheduleController::class, 'destroy'])->name('admin.delivery-schedules.destroy');

// Rute untuk kualitas air (admin)
// Rute untuk kualitas air (admin)
Route::post('/device', [DeviceController::class, 'store'])->name('device.add');
Route::delete('/device/{id}', [DeviceController::class, 'destroy'])->name('device.delete');
Route::put('/device', [DeviceController::class, 'edit'])->name('device.edit');
Route::get('/device', [DeviceController::class, 'show'])->name('device.show');

Route::get('admin/monitoring', [iotController::class, 'index'])->name('admin.monitoring');

    Route::resource('water_quality', WaterQualityController::class);
    
    Route::get('admin/water_quality/edit/{id}', [WaterQualityController::class, 'edit'])->name('admin.water_quality.edit');
    Route::put('admin/water_quality/{id}', [WaterQualityController::class, 'update'])->name('admin.water_quality.update');
    Route::delete('admin/water_quality/{id}', [WaterQualityController::class, 'destroy'])->name('admin.water_quality.destroy');
    Route::get('admin/water_quality', [WaterQualityController::class, 'index'])->name('admin.water_quality.index');
    Route::resource('admin/water_quality', WaterQualityController::class);
    Route::get('admin.water_quality/create', [DeviceController::class, 'create'])->name('admin.water_quality.create');
    Route::post('admin/water_quality', [DeviceController::class, 'store'])->name('admin.water_quality.store');
    Route::get('admin/water_quality/export-pdf', [WaterQualityController::class, 'exportPdf'])->name('admin.water_quality.export_pdf');
    Route::get('/admin/water_quality', [WaterQualityController::class, 'index']);
// });
Route::post('api/qualities/', [apiQualities::class, 'store'])->name('qualities.create');
    //route API AQUARIUM
    Route::get('/aquariums', [AquariumController::class, 'index']);
    Route::get('/admin.water_quality.create', [AquariumController::class, 'create']);
    Route::get('admin/water_quality/create', [AquariumController::class, 'create'])->name('admin.water_quality.create');
    Route::post('/admin/water_quality/store', [AquariumController::class, 'store'])->name('admin.water_quality.store');
    Route::get('/api/aquariums', [AquariumController::class, 'getAquariums']);

    // Route untuk menyimpan data aquarium
    Route::post('/admin/water_quality/store', [AquariumController::class, 'store'])->name('admin.water_quality.store');
    Route::get('/admin/water_quality/create', [WaterQualityController::class, 'create'])->name('admin.water_quality.create');
    Route::post('/admin/water_quality/store', [WaterQualityController::class, 'store'])->name('admin.water_quality.store');
    Route::get('/admin/water_quality', [WaterQualityController::class, 'index'])->name('admin.water_quality.index');
});
// Menambahkan route resource dan menyesuaikan dengan kebutuhan
Route::resource('rekappenjualans', RekapPenjualanController::class)->names([
    'index' => 'admin.rekappenjualans.index',
    'create' => 'admin.rekappenjualans.create',
    'store' => 'admin.rekappenjualans.store',
    'edit' => 'admin.rekappenjualans.edit',
    'update' => 'admin.rekappenjualans.update',
    'destroy' => 'admin.rekappenjualans.destroy',
])
    ->except(['show']); // Menghilangkan show karena kita akan membuat route custom

// Menambahkan route show khusus untuk menampilkan semua Rekap Penjualan
Route::get('admin/rekappenjualans/show', [RekapPenjualanController::class, 'showAll'])->name('admin.rekappenjualans.showAll');

Route::get('rekappenjualans/cetak', [RekapPenjualanController::class, 'cetak'])->name('admin.rekappenjualans.cetak');

// Rute tambahan untuk fitur cetak
Route::get('rekap/cetak', [RekapPenjualanController::class, 'cetak'])->name('admin.rekap.cetak');

// Rute untuk landing page
Route::get('/landing', [LandingPageController::class, 'show']);

// Memuat rute autentikasi
require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/keranjang_items', [KeranjangItemController::class, 'index'])->name('keranjang_items.index');
    Route::post('/keranjang_items/add', [KeranjangItemController::class, 'add'])->name('keranjang_items.add');
    Route::put('/keranjang_items/update/{id}', [KeranjangItemController::class, 'update'])->name('keranjang_items.update');
    Route::delete('/keranjang_items/delete/{id}', [KeranjangItemController::class, 'delete'])->name('keranjang_items.delete');
    Route::get('/keranjang-items', [KeranjangItemController::class, 'index'])->name('keranjang_Items.index');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::delete('/checkout/{id}', [CheckoutController::class, 'destroy'])->name('checkout.destroy');
});
