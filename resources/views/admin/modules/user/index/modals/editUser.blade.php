<div class="modal fade show" id="EditUserModal" tabindex="-1" aria-modal="true" role="dialog" data-bs-backdrop="static">
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
                        <h1 class="mb-3">Kullanıcı Düzenle</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <div class="row mb-5">
                            <div class="col-xl-3 mt-3">
                                <label for="user_name" class="font-weight-bolder">Kullanıcı Adı</label>
                            </div>
                            <div class="col-xl-9">
                                <div class="form-group">
                                    <input id="user_name" type="text" class="form-control form-control-solid">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-xl-3 mt-3">
                                <label for="user_surname" class="font-weight-bolder">Kullanıcı Soyadı</label>
                            </div>
                            <div class="col-xl-9">
                                <div class="form-group">
                                    <input id="user_surname" type="text" class="form-control form-control-solid">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-xl-3 mt-3">
                                <label for="user_email" class="font-weight-bolder">Kullanıcı Email</label>
                            </div>
                            <div class="col-xl-9">
                                <div class="form-group">
                                    <input id="user_email" type="text" class="form-control form-control-solid">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-xl-3 mt-3">
                                <label for="user_phone" class="font-weight-bolder">Kullanıcı Telefon</label>
                            </div>
                            <div class="col-xl-9">
                                <div class="form-group">
                                    <input id="user_phone" type="text" class="form-control form-control-solid">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-xl-3 mt-3">
                                <label for="user_title" class="font-weight-bolder">Kullanıcı Başlık</label>
                            </div>
                            <div class="col-xl-9">
                                <div class="form-group">
                                    <input id="user_title" type="text" class="form-control form-control-solid">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-xl-3 mt-3">
                                <label for="user_suspend" class="font-weight-bolder">Kullanıcı Durum</label>
                            </div>
                            <div class="col-xl-9">
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" id="user_suspend">
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">Vazgeç</button>
                        <button type="button" class="btn btn-success" id="CreatePrCardButton" onclick="updateUser()">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
