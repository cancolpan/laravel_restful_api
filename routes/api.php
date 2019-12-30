<?php

use Illuminate\Http\Request;

//Buyers
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);
Route::resource('buyers.transactions', 'Buyer\BuyerTransactionController', ['only' => ['index']]);
Route::resource('buyers.products', 'Buyer\BuyerProductController', ['only' => ['index']]);

//Categories
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);

//Products
Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

//Sellers
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

//Transactions
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);

//Users
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);
