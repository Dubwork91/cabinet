@extends('doctor.templateDt')
@section('title', 'Rendez-vous')
@section('content')

    @if (session('success'))
        <x-alert :message="session('success')" />
    @endif
    @if (session('error'))
        <x-alert type="danger" :message="session('error')" />
    @endif

    <div class="card-body">
        <form method="POST" action="{{ route('docApp.store') }}">
            @csrf

            <div class="row">
                <div class="col-md-6">

                    {{-- <select name="name" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    @foreach (\App\Models\User::where('role', 'Patient')->get() as $patient)
                        <option value="{{ $patient->name }}">{{ $patient->name }}</option>
                    @endforeach

                </select><label for="floatingSelect">Nom complet : <span class="text-danger">*</span></label> --}}
                    <div class="form-floating mb-4">
                        <input type="text"
                            class="form-control form-control-lg @error('name')is-invalid
                    
                @enderror"
                            id="floatingInput" placeholder="Nom complet" name="name" />
                        <label for="floatingInput">Nom complet <span class="text-danger">*</span></label>
                    </div>
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="tel" id="floatingInput"
                            class="form-control form-control-lg @error('phone')is-invalid
                    
                @enderror"
                            placeholder="Téléphone" name="phone" />
                        <label for="floatingInput">Téléphone <span class="text-danger">*</span></label>
                    </div>
                    @error('phone')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control form-control-lg" id="floatingInput"
                            placeholder="Adresse de résidence" name="address" />
                        <label for="floatingInput">Adresse</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-floating mb-4">
                        <input type="datetime-local"
                            class="form-control form-control-lg @error('time')is-invalid
                    
                @enderror"
                            id="time" placeholder="Date rendez-vous " name="time">

                        <label for="floatingInput">Date rendez-vous <span class="text-danger">*</span></label>
                    </div>
                    @error('time')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>



            <div class="row">
                <div class="col-md-6 mb-4">
                    <label for="splt">Département : <span class="text-danger">*</span></label>
                    <select class="form-select @error('disease')is-invalid
                
            @enderror"
                        aria-label="Default select example" name="disease">

                        <option value="{{ Auth::user()->speciality }}">{{ Auth::user()->speciality }}</option>



                    </select>
                    @error('disease')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="">Docteur : <span class="text-danger">*</span></label>
                    <select name="doctor" id="" class="form-select" aria-label="Default select example">

                        <option value="{{ Auth::user()->name }}">{{ Auth::user()->name }}</option>


                    </select>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="">Motif : <span class="text-danger">*</span></label>
                    <select name="motif" id=""
                        class="form-select @error('motif')is-invalid
                    
                @enderror"
                        aria-label="Default select example">
                        <option value="Consultation">Consultation</option>
                        <option value="Traitement">Traitement</option>
                    </select>
                    @error('motif')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-end pt-3 me-5">
                <button type="submit" class="btn btn-primary btn-lg ms-2">Enregister</button>
            </div>


        </form>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#time", {
            enableTime: true,
            time_24hr: true,
            minTime: "9:00",
            maxTime: "17:00",
            minDate: "today",
            locale: {
                firstDayOfWeek: 1
            },
            "disable": [

                function(date) {
                    return (date.getDay() === 0 || date.getDay() === 6);

                }

            ]
        });
    </script>
@endsection
