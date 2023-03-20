<div class="modal fade show" id="NewEarnModal" tabindex="-1" aria-modal="true" role="dialog" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <div class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Gelir</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <div class="row">
                            <div class="col-xl-6 mb-5">
                                <div class="form-group">
                                    <label for="new_earn_date" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">İşlem Tarihi</span>
                                    </label>
                                    <input id="new_earn_date" type="date" class="form-control form-control-solid">
                                </div>
                            </div>
                            <div class="col-xl-6 mb-5">
                                <div class="form-group position-relative">
                                    <label for="new_earn_amount" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Tutar</span>
                                    </label>
                                    <input id="new_earn_amount" type="text" class="form-control form-control-solid moneyMask">
                                    <div class="position-absolute translate-middle-y end-0 me-5" style="top:71%!important">
                                        <i class="fa fa-lg fa-lira-sign"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mb-5">
                                <div class="form-group">
                                    <label for="new_earn_category_id" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Gelir & Gider Kategorisi</span>
                                    </label>
                                    <select id="new_earn_category_id" class="form-select form-select-solid select2Input" data-control="select2"></select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mb-5">
                                <div class="form-group">
                                    <label for="new_earn_description" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Açıklamalar</span>
                                    </label>
                                    <textarea rows="5" id="new_earn_description" type="date" class="form-control form-control-solid"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">İptal</button>
                        <button type="button" class="btn btn-primary" id="NewEarnButton">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
