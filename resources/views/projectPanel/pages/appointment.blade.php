@extends('projectPanel.layouts.master')
@section('content')

    <!-- Appoinment -->
    <section class="appoinment-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="section-header text-center">
                        <h6>Appointment</h6>
                        <h2 class="text-white">Book An Appointment</h2>
                        <p class="text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo, sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Appoinment -->

    <!-- Appoinment Form -->
    <form action="{{route('addAppointment')}}" method="post">
        @csrf
        <div class="appmt-form location-col">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" id="email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" name="mobilphone" id="mobilphone">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="department">Select Department</label>
                                            <select class="form-control" id="department">
                                                <option value="">Select Department</option>
                                                <!-- Departmanlar burada listelenecek -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="doctor">Select Doctor</label>
                                            <select class="form-control" id="doctor" name="doctorname">
                                                <option value="">Select Doctor</option>
                                                <!-- Doktorlar burada listelenecek -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3 col-lg-2">
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="time" class="form-control" name="time" id="time">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3 col-lg-2">
                                        <div class="form-group mb-0">
                                            <label>Date</label>
                                            <input type="date" class="form-control" name="date" id="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 text-center">
                                    <button href="#" class="btn-yellow" type="submit">Make an Appointment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    <!-- /Appoinment Form -->


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Departmanları yükleme
            fetch('{{ route('getDepartments') }}')
                .then(response => response.json())
                .then(data => {
                    let departmentSelect = document.getElementById('department');
                    data.forEach(department => {
                        let option = document.createElement('option');
                        option.value = department.id;
                        option.textContent = department.name;
                        departmentSelect.appendChild(option);
                    });
                });

            // Departman seçildiğinde doktorları yükleme
            document.getElementById('department').addEventListener('change', function () {
                let departmentId = this.value;
                let doctorSelect = document.getElementById('doctor');
                doctorSelect.innerHTML = '<option value="">Select Doctor</option>'; // Önceki doktorları temizle

                if (departmentId) {
                    fetch(`/doctors/${departmentId}`)
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(doctor => {
                                let option = document.createElement('option');
                                option.value = doctor.id;
                                option.textContent = `${doctor.title} ${doctor.name} ${doctor.surname}`;
                                doctorSelect.appendChild(option);
                            });
                        });
                }
            });
        });
    </script>
@endsection
