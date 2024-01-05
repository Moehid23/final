<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Add Patient</h4>

        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-8">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Patient</h5>
                </div>
                <div class="card-body text-center">
                    <?php Flasher::flash(); ?>
                </div>
                <div class="card-body">
                    <form action="<?= BASEURL; ?>/patients/createactive" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="first_name">First Name:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="mb-3">
                            <label class="form-label" for="gender">Gender:</label><br>
                            <label>Male</label>
                            <input type="radio" name="gender" id="male" value="male" checked>
                            <label>Female</label>
                            <input type="radio" name="gender" id="female" value="female">
                            </fieldset>
                        </div>
                            </div>
                            <div class="col">
                            <div class="mb-3">
            <label for="flatpickr-date" class="form-label">Date Picker</label>
            <input type="text" class="form-control flatpickr-input" placeholder="YYYY-MM-DD" id="flatpickr-date" readonly="readonly">
          </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="contact">Contact:</label>
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Address:</label>
                            <textarea class="form-control" id="address" name="address" required></textarea><br>
                            

                        </div>

                        <input type="submit" value="Tambah Pasien" class="btn btn-primary">
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <script>
        var flatpickrDate = document.querySelector("#flatpickr-date");

flatpickrDate.flatpickr({
  monthSelectorType: "static"
});
    </script>

</div>