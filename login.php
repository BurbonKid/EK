<?php require_once('./layout/header.php'); ?> 

<section class="w-100 p-4 d-flex justify-content-center pb-4">
    <form>
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Username</label>
            <input type="email" id="form2Example1" class="form-control" />
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" id="form2Example2" class="form-control" />
        </div>
        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Log In</button>
    </form>
</section>
<?php require_once('./layout/footer.php'); ?>