@extends('layouts.default')

@section('title')
    {{ __('Medical Reimbursement') }}
@endsection

@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Form Layouts</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Form Layouts</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        ใบเบิกค่ารักษาพยาบาล
                                    </h4>
                                    <h4 class="card-title">
                                        Medical Treatment Reimbursement Requisition Form
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-1 mb-1">
                                                                <fieldset>
                                                                    <div class="radio">
                                                                        <span>ประเภทการรักษา:</span>
                                                                    </div>
                                                                </fieldset>

                                                            </li>
                                                            <li class="d-inline-block mr-2 mb-1">
                                                                <fieldset>
                                                                    <div class="radio">
                                                                        <input type="radio" name="medical_type"
                                                                               id="medical-type-medical"
                                                                               checked="">
                                                                        <label for="medical-type-medical">รักษาพยาบาล
                                                                            (Medical)</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2 mb-1">
                                                                <fieldset>
                                                                    <div class="radio">
                                                                        <input type="radio" name="medical_type"
                                                                               id="medical-type-dental">
                                                                        <label for="medical-type-dental">ทันตกรรม
                                                                            (Dental)</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-md-6 d-inline-block">
                                                <span class="text-white">ประเภท (Type): <span
                                                        class="ml-3">Monthly</span></span>
                                            </div>
                                            <div class="col-md-6 d-inline-block">
                                                <span class="text-white">สาขา (Site): <span
                                                        class="ml-3">Korat</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->

                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                            <label for="employee-no"
                                                                   class="text-transform-none">เลขประจำตัวพนักงาน
                                                                (Employee No.)</label>
                                                            <input type="text" id="employee-no"
                                                                   class="form-control" name="employee_no"
                                                                   autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                            <label for="fullname"
                                                                   class="text-transform-none">ชื่อ-สกุล
                                                                (Name-Lastname)</label>
                                                            <input type="text" id="fullname"
                                                                   class="form-control" name="fullname"
                                                                   autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                            <label for="department"
                                                                   class="text-transform-none">ฝ่าย (Department)</label>
                                                            <input type="text" id="department"
                                                                   class="form-control" name="department"
                                                                   autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Vertical form layout section end -->

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <label>มีความประสงค์ขอเบิกค่ารักษาพยาบาลเนื่องจากป่วยเป็นโรค</label>
                                                        <label class="text-transform-none">I would like to reimburse
                                                            medical treatment due to
                                                            sick</label>
                                                    </div>
                                                    <div class="col-12 col-md-8 form-group">
                                                        <div class="row">
                                                            <div class="col-12 col-md-9">
                                                                <fieldset class="form-group mb-0">
                                                                    <select class="form-control" id="">
                                                                        <option>IT</option>
                                                                        <option>Blade Runner</option>
                                                                        <option>Thor Ragnarok</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-12 col-md-3 text-right">
                                                                <button
                                                                    class="btn btn-primary btn-sm h-100 mt-sm-1 mt-md-0 w-100">
                                                                    เพิ่มอาการ
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12 col-md-4">
                                                        <label>และได้รับการตรวจรักษาพยาบาลจาก (ชื่อสถานพยาบาล)</label>
                                                        <label class="text-transform-none">I was treated from
                                                            (Hospital's name)</label>
                                                    </div>
                                                    <div class="col-12 col-md-8 form-group">
                                                        <div class="row">
                                                            <div class="col-12 col-md-9">
                                                                <fieldset class="form-group mb-0">
                                                                    <select class="form-control" id="">
                                                                        <option>IT</option>
                                                                        <option>Blade Runner</option>
                                                                        <option>Thor Ragnarok</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-12 col-md-3 text-right">
                                                                <button
                                                                    class="btn btn-primary btn-sm h-100 mt-sm-1 mt-md-0 w-100">
                                                                    เพิ่มสถานพยาบาล
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                            <label for="treatment-date"
                                                                   class="text-transform-none">เมื่อวันที่
                                                                (Date)</label>
                                                            <input type="text" id="treatment-date"
                                                                   class="form-control" name="treatment_date"
                                                                   autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                            <label for="amount"
                                                                   class="text-transform-none">เป็นเงินรวมทั้งสิ้น
                                                                (Total Amount)</label>
                                                            <input type="email" id="amount"
                                                                   class="form-control" name="amount"
                                                                   autocomplete="off">
                                                            <small class="text-center d-inline-block w-100">คงเหลือ(Balance)
                                                                <span
                                                                    class="text-danger">8215.00</span> Baht</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                            <label for="reimburse-amount"
                                                                   class="text-transform-none">ยอดที่เบิกได้ (Eligible
                                                                for this reimburse)</label>
                                                            <input type="number" id="reimburse-amount"
                                                                   class="form-control" name="reimburse_amount"
                                                                   autocomplete="off">
                                                            <small class="text-center d-inline-block w-100"
                                                                   style="color: #FF5B5C!important;">Baht</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <label>และได้รับการตรวจรักษาพยาบาลจาก (ชื่อสถานพยาบาล)</label>
                                                        <label class="text-transform-none">I was treated from
                                                            (Hospital's name)</label>
                                                    </div>
                                                    <div class="col-12 col-md-8 form-group">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2 mb-1">
                                                                        <fieldset class="checkbox-multiline-label">
                                                                            <div class="checkbox">
                                                                                <input type="checkbox"
                                                                                       class="checkbox-input"
                                                                                       id="checkbox1">
                                                                                <label for="checkbox1">Medical
                                                                                    Certificate
                                                                                    <p class="mb-0">
                                                                                        ต้นฉบับใบรับรองแพทย์</p></label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2 mb-1">
                                                                        <fieldset class="checkbox-multiline-label">
                                                                            <div class="checkbox">
                                                                                <input type="checkbox"
                                                                                       class="checkbox-input"
                                                                                       id="checkbox2">
                                                                                <label for="checkbox2">Original
                                                                                    Receipt
                                                                                    <p class="mb-0">
                                                                                        ต้นฉบับใบเสร็จรับเงิน</p>
                                                                                </label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-12">
                                                        <button type="button"
                                                                onclick="submitMedReimbursement(); return false;"
                                                                class="btn btn-primary glow position-relative">
                                                            บันทึก
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>

@endsection


@section('script')
    <script>
        $(document).ready(function () {
        });

        async function submitMedReimbursement() {
            let data = {
                user_id: "2",
            }
            let response = await postData('{{ url('api/v1/medical-reimbursement') }}', data, 'POST')
            if (response.code === 200) {
                {{--location.href = '{{ url('medical-reimbursement') }}'--}}
            } else if (response.code === 204) {
                let alert = new Alert(false, true, '', '', 'Cancel', 'Ok', true);
                alert.doAlertPopup('Login', 'No user found!', 'warning')
            } else {
                let alert = new Alert(false, true, '', '', 'Cancel', 'Ok', true);
                alert.doAlertPopup('Login', 'Something went wrong!', 'warning')
            }
        }
    </script>


@endsection
