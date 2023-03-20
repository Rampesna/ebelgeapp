<div class="modal fade show" id="CreateUserModal" tabindex="-1" aria-modal="true" role="dialog" data-bs-backdrop="static">
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
                        <h1 class="mb-3">Yeni Kullanıcı Oluştur</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <div class="row">
                            <div class="col-xl-6 mb-10">
                                <div class="form-group">
                                    <label for="create_user_name" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Ad</span>
                                    </label>
                                    <input id="create_user_name" type="text" class="form-control form-control-solid" placeholder="Ad">
                                </div>
                            </div>
                            <div class="col-xl-6 mb-10">
                                <div class="form-group">
                                    <label for="create_user_surname" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Soyad</span>
                                    </label>
                                    <input id="create_user_surname" type="text" class="form-control form-control-solid" placeholder="Soyad">
                                </div>
                            </div>
                            <div class="col-xl-6 mb-10">
                                <div class="form-group">
                                    <label for="create_user_email" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">E-posta Adresi</span>
                                    </label>
                                    <input id="create_user_email" type="text" class="form-control form-control-solid emailMask" placeholder="E-posta Adresi">
                                </div>
                            </div>
                            <div class="col-xl-6 mb-10">
                                <div class="form-group">
                                    <label for="create_user_phone" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span>Telefon</span>
                                    </label>
                                    <input id="create_user_phone" type="text" class="form-control form-control-solid phoneMask" placeholder="Telefon">
                                </div>
                            </div>
                            <div class="col-xl-12 mb-10">
                                <div class="form-group">
                                    <label for="create_user_password" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Şifre</span>
                                    </label>
                                    <input id="create_user_password" type="password" class="form-control form-control-solid" placeholder="Şifre">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">İptal</button>
                        <button type="button" class="btn btn-primary" id="CreateUserButton">Oluştur</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
