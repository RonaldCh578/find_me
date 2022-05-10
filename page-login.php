<?php get_header("empty"); ?>

    <!-- content -->

   <div class="content-fluid">
       <div class="row purple-bg">
           <div class="col-sm-6 heigh100-l text-center">
                <h1 class="findme-title">Find.me</h1>
                <p class="are-new">Are you new in this app?</p>
                <a class="signup-btn" href="#">SIGN UP</a>
           </div>
           <div class="col-sm-6 heigh100-r">
                <div class="card">
                    <h2 class="subtitles">LOG IN</h2>
                    <form class="form-login" action="#">
                        <input class="inputs" type="text" placeholder="Username" name="username">
                        <input class="inputs" type="password" placeholder="Password" name="password">
                        <a class="forgot-password" href="../forgot_password">Forgot Password</a>
                        <input class="go-btn" type="submit" value="GO">
                    </form>
                </div>
           </div>
       </div>
   </div>

    <!-- content -->  

<?php get_footer("empty"); ?>