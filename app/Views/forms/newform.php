<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">New</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-white">
                <div class="card-header">
                    <h3 class="card-title">Asset Details</h3>
                </div>
                <div class="card-body">

                    <?php $validation = \Config\Services::validation(); ?>

                    <form action="<?= base_url('/create') ?>" method="post">
                        <input type="hidden" name="createdby" value="<?php $session = session();
                                                                        echo $session->email; ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>L/O Number</label>
                                    <input type="text" class="form-control" name="lonumber" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>L/O Title</label>
                                    <input type="number" class="form-control" name="lotitle" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control" name="atype">
                                        <option value="t1">PC</option>
                                        <option value="t2">Laptop</option>
                                        <option value="t3">Printer</option>
                                        <option value="t4">Scanner</option>
                                        <option value="t5">Photostat Machine</option>
                                        <option value="t6">Access Door</option>
                                        <option value="t7">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="form-control" name="abrand">
                                        <option value="b1">Dell</option>
                                        <option value="b2">HP</option>
                                        <option value="b3">Lenovo</option>
                                        <option value="b4">ss</option>
                                        <option value="b5">dd</option>
                                        <option value="b6">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Barcode</label>
                                    <input type="number" class="form-control" name="abarcode" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Serial No.</label><em> -if available..</em>
                                    <input type="text" class="form-control" name="aserial" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Receive Date</label>
                                    <input type="date" class="form-control" name="ardate" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>User</label><em> eg; ali bin abu</em>
                                    <input type="text" class="form-control" name="auser" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Current Location</label><em> eg; ward, room, jabatan etc..</em>
                                    <input type="text" class="form-control" name="alocation">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Owner</label><em> -Asset Officer</em>
                                    <select class="form-control" name="aofficer">
                                        <option value="o1">Zulfazry Bin Zulkafeli</option>
                                        <option value="o2">Mek Rogayah Binti Hussin</option>
                                        <option value="o3">Abd Malik Bin Abd Manan</option>
                                        <option value="o4">TC. Mohammad Asrul Nizam Bin Mohammad Rizuan</option>
                                        <option value="o5">Wan Faira Binti Wan Hamid</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-primary" href="<?= base_url('/'); ?>" role="button">
                                        < Back</a>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="reset" class="btn btn-info">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>