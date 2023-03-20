@extends('user.layouts.master')
@section('title', 'Faturalar | ')

@section('subheader')
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Faturalar</h1>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">

        </div>
    </div>
@endsection

@section('content')

    @include('user.modules.invoice.index.components.contextMenu')

    @include('user.modules.invoice.index.modals.eInvoiceHtml')
    @include('user.modules.invoice.index.modals.sendToGib')
    @include('user.modules.invoice.index.modals.delete')

    <div class="row mb-5">
        <div class="col-xl-4 text-end mb-5">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-xl-12 d-grid">
                            <button onclick="createInvoiceWithoutCompany()" class="btn btn-info btn-sm">
                                <span>Carisiz Fatura Oluştur</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-xl-12 d-grid">
                            <button onclick="createInvoice()" class="btn btn-primary btn-sm">
                                <span>Yeni Fatura Oluştur</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-5">
                        <h5>Filtreleme Seçenekleri</h5>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 mb-10">
                            <div class="form-group">
                                <label for="filter_transaction_type_id" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">İşlem Türü</span>
                                </label>
                                <select id="filter_transaction_type_id" class="form-select form-select-solid filterInput" data-control="select2" data-hide-search="true"></select>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-10">
                            <div class="form-group">
                                <label for="filter_datetime_start" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Başlangıç Tarihi</span>
                                </label>
                                <input id="filter_datetime_start" type="datetime-local" class="form-control form-control-solid filterInput">
                            </div>
                        </div>
                        <div class="col-xl-4 mb-10">
                            <div class="form-group">
                                <label for="filter_datetime_end" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Bitiş Tarihi</span>
                                </label>
                                <input id="filter_datetime_end" type="datetime-local" class="form-control form-control-solid filterInput">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body pt-0">
                    <br>
                    <div class="row">
                        <div class="col-xl-1">
                            <div class="form-group">
                                <label>
                                    <select data-control="select2" id="pageSize" data-hide-search="true" class="form-select border-0">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-xl-11 text-end">
                            <button class="btn btn-sm btn-icon bg-transparent bg-hover-opacity-0 text-dark" id="pageDown" disabled>
                                <i class="fas fa-angle-left"></i>
                            </button>
                            <button class="btn btn-sm btn-icon bg-transparent bg-hover-opacity-0 text-dark cursor-default" disabled>
                                <span class="text-muted" id="page">1</span>
                            </button>
                            <button class="btn btn-sm btn-icon bg-transparent bg-hover-opacity-0 text-dark" id="pageUp">
                                <i class="fas fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                    <hr class="text-muted">
                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                        <tr class="text-start text-dark fw-bolder fs-7 gs-0">
                            <th>Fatura Bilgisi</th>
                            <th class="hideIfMobile">Tarih</th>
                            <th>Tutar</th>
                            <th class="text-end">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600" id="invoices"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customStyles')
    @include('user.modules.invoice.index.components.style')
@endsection

@section('customScripts')
    @include('user.modules.invoice.index.components.script')
@endsection
