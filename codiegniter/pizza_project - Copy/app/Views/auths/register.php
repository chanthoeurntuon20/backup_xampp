<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
       <div class="card">
          <div class="card-body">
          <form class="auth__form" autocomplete="off" action="register" method="post">
          <div class="auth__form_body">
            <h3 class="auth__form_title">
            <img src="../images/logo.svg" alt="" width="50">
            Peperoni App
            </h3>
            <div>
              <div class="form-group">
                <label class="text-uppercase small">Email</label>
                <input type="email" class="form-control" placeholder="Enter email" name = "email">
              </div>
              <div class="form-group">
                <label class="text-uppercase small">Password</label>
                <input type="password" class="form-control" placeholder="Password" name = "password">
              </div>
              <div class="form-group">
                <label class="text-uppercase small">Address</label>
                <textarea name=""  class="form-control" placeholder="Address" name = "textarea" class = "myclass"></textarea>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">I'm a manager
                </label>
            </div>
            </div>
          </div>
          <div class="auth__form_actions">
            <button class="btn btn-primary btn-lg btn-block">
             NEXT
            </button>
            <div class="mt-2">
              <a href="/user/sigin" class="small text-uppercase">
                SIGN IN INSTEAD
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