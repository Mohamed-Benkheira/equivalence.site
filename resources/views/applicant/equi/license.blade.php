<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Kodinger" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{ __('Register') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-login.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
</head>

<body class="my-login-page">
    @include('../partitions.applicant-header')
    <section class="py-5 pt-5 mt-5">
        <div class="container pt-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                    </div>
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="card-title text-center mb-4">{{ __('Register') }}</h4>

                            @if ($errors->all())
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li class="text-danger fw-bold">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('applicant.license.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="school-name" class="form-label">School Name (اسم المدرسة)</label>
                                    <input type="text" class="form-control" id="school-name" name="school_name"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="certificate-date" class="form-label">Date of Certificate (تاريخ
                                        الشهادة)</label>
                                    <input type="date" class="form-control" id="certificate-date"
                                        name="certificate_date" required>
                                </div>

                                <div class="mb-3">
                                    <label for="id-card" class="form-label">A copy of the applicant's ID card (نسخة عن
                                        بطاقة الهوية لصاحب الطلب)</label>
                                    <input class="form-control" type="file" id="id-card" name="id_card"
                                        accept=".pdf" required>
                                </div>

                                <div class="mb-3">
                                    <label for="bac-certificate-file" class="form-label">A copy of the baccalaureate, or
                                        a foreign certificate recognized as equivalent(نسخة من الباكالوريا او اي شهادة
                                        معادلة لها)</label>
                                    <input class="form-control" type="file" id="bac-certificate-file"
                                        name="bac_certificate_file" accept=".pdf" required>
                                </div>

                                <div class="mb-3">
                                    <label for="certificate-for-equivalence-file" class="form-label">A copy of the
                                        foreign certificate subject to the equivalence (نسخة عن الشهادة الأجنبية المراد
                                        معادلتها)</label>
                                    <input class="form-control" type="file" id="certificate-for-equivalence-file"
                                        name="certificate_for_equivalence_file" accept=".pdf" required>
                                </div>

                                <div class="mb-3">
                                    <label for="statement-of-marks" class="form-label">A copy of the transcript or
                                        certificate appendix (نسخة عن كشف النقاط أو ملحق الشهادة)</label>
                                    <input class="form-control" type="file" id="statement-of-marks"
                                        name="statement_of_marks_or_certificate_appendix" accept=".pdf" required>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="hidden" name="info_accuracy" value="0">
                                    <input type="checkbox" class="form-check-input" id="info-accuracy"
                                        name="info_accuracy" value="1" required>
                                    <label class="form-check-label" for="info-accuracy">I confirm that the information
                                        provided is accurate (أؤكد أن المعلومات المقدمة دقيقة)</label>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-block"
                                        style="background-color: #ef6603; border: none;">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/my-login.js') }}"></script>
</body>

</html>
