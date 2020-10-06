<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

//Tabeliao
    Route::get('/Admin', 'Admin\TabeliaoController@index')
        ->name('Admin');
    Route::get('/Admin/adicionar', 'Admin\TabeliaoController@adicionar')
        ->name('Admin.adicionar');
    Route::post('/Admin/salvar', 'Admin\TabeliaoController@salvar')
        ->name('Admin.salvar');
    Route::get('Admin/editar/{id}', 'Admin\TabeliaoController@editar')
        ->name('Admin.editar');
    Route::put('Admin/atualizar/{id}', 'Admin\TabeliaoController@atualizar')
        ->name('Admin.atualizar');
    Route::delete('/Admin/deletar/{id}', 'Admin\TabeliaoController@deletar')
        ->name('Admin.deletar');

//Certidao
    Route::get('/AdminCertidao', 'Admin\CertidaoController@index')
    ->name('AdminCertidao');
    Route::get('/AdminCertidao/adicionar', 'Admin\CertidaoController@adicionar')
    ->name('AdminCertidao.adicionar');
    Route::post('/AdminCertidao/salvar', 'Admin\CertidaoController@salvar')
    ->name('AdminCertidao.salvar');
    Route::get('AdminCertidao/editar/{id}', 'Admin\CertidaoController@editar')
    ->name('AdminCertidao.editar');
    Route::put('AdminCertidao/atualizar/{id}', 'Admin\CertidaoController@atualizar')
    ->name('AdminCertidao.atualizar');
    Route::delete('/AdminCertidao/deletar/{id}', 'Admin\CertidaoController@deletar')
    ->name('AdminCertidao.deletar');

//Contrato
    Route::get('/AdminContrato', 'Admin\ContratoController@index')
    ->name('AdminContrato');
    Route::get('/AdminContrato/adicionar', 'Admin\ContratoController@adicionar')
    ->name('AdminContrato.adicionar');
    Route::post('/AdminContrato/salvar', 'Admin\ContratoController@salvar')
    ->name('AdminContrato.salvar');
    Route::get('AdminContrato/editar/{id}', 'Admin\ContratoController@editar')
    ->name('AdminContrato.editar');
    Route::put('AdminContrato/atualizar/{id}', 'Admin\ContratoController@atualizar')
    ->name('AdminContrato.atualizar');
    Route::delete('/AdminContrato/deletar/{id}', 'Admin\ContratosController@deletar')
    ->name('AdminContrato.deletar');