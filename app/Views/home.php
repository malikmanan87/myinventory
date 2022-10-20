<?= $this->extend('layout/master') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <?php
          $session = session();
          if ($session->access == 1) {
            echo "<button type='button' class='btn bg-gradient-info btn-xs'><b>Role :</b> Guest</button>";
          } elseif ($session->access == 2) {
            echo "<button type='button' class='btn bg-gradient-info btn-xs'><b>Role :</b> Technician</button>";
          } elseif ($session->access == 3) {
            echo "<button type='button' class='btn bg-gradient-info btn-xs' data-toggle='modal' data-target='.bd-example-modal-sm' title='click to display SESSION variables'><b>Role :</b> Administrator</button>";
          } else {
            echo "<button type='button' class='btn bg-gradient-info btn-xs' ><b>Role :</b> Unknown</button>";
          }
          ?>

          <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <pre><?= var_dump($_SESSION) ?></pre>
              </div>
            </div>
          </div>

        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content hidden-pc">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg">
          <a href="<?= base_url('/new') ?>">
            <div class="small-box bg-white">
              <div class="inner">
                <h4>+ New Ticket</h4>
                <!-- <small><i>*create new case</i></small> -->
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- script datatable dipanggil didalam template master (view/layout/master) -->
<!-- sweetalert -->
<?php
$session = session();
if ($session->create) { ?>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'center',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'success',
      title: 'Thank you, new ticket has been created.'
    })
  </script>
<?php } elseif ($session->signin) { ?>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'center',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'success',
      title: 'Welcome <?= $session->name ?>'
    })
  </script>
<?php } elseif ($session->cancelsuccess) { ?>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'center',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'info',
      title: 'Cancel successfully! case completed!'
    })
  </script>
<?php } elseif ($session->completed) { ?>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'center',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'info',
      title: 'Thank you, ticket <?= $session->name ?> completed!'
    })
  </script>
<?php } else {
} ?>

<?= $this->endSection() ?>