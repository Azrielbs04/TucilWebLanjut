    <div class="container">
        <form>
                <div><img src="/img/iconlogin.png" id="icon" alt="User Icon" /></div>
                <h2 class="text-center">LOGIN</h2>
                <hr>
                <div class="form-group">
                    <label >Username</label>
                    <input type="email" name="" class="form-control" placeholder="Username"></div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="" class="form-control"  placeholder="Password"></div>
                <div class="text-center">   <a class="btn btn-primary " href="<?= site_url('auth/index')?>">Login</a></div>
                <div class="text-center" ><a href="/auth/register">Create Account</a></div>           
        </form>
    </div>
    