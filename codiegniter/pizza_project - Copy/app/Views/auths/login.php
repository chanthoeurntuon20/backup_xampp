<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
      <div class="auth">
  <div class="auth__header">
    <div class="auth__logo">
      <img height="90" src="../images/logo.svg" alt="">
      
    </div>
  </div>
  <div class="auth__body">
  <div class="card">
      <div class="card-body bg-light">
      <form class="auth__form" autocomplete="off" action="/" method="post">
      <div class="auth__form_body">
        <h3 class="auth__form_title">Peperoni App</h3>
        <div>
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" class="form-control" placeholder="Password">
          </div>
        </div>
      </div>
      <div class="auth__form_actions">
        <a href="/" class="btn btn-primary btn-lg btn-block">
          NEXT
        </a>
        <div class="mt-2">
          <a href="/user/register" class="small text-uppercase">
            CREATE ACCOUNT
          </a>
        </div>
      </div>
    </form>
      </div>
  </div>
  </div>
</div>
      </div>
      <div class="col-3"></div>
    </div>
</div>
<?= $this->endSection() ?>