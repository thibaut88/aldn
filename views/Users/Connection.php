
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="container">
                        <div class="row margin-vert-30">
                            <!-- Login Box -->
                            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                <form class="login-page" action="<?=WEBROOT?>Users/Connection" method="POST">
                                    <div class="login-header margin-bottom-30">
                                        <h2>Connectez votre compte</h2>
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input name="inputEmail"placeholder="Email" class="form-control" type="email" required>
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input name="inputPassword" placeholder="Mot de passe" class="form-control" type="password" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="checkbox">
                                                <input name="stayLog" type="checkbox" >Se rappeler de moi</label>
                                        </div>
                                        <div class="col-md-6">
                                            <button name="sendLogin" class="btn btn-primary pull-right" type="submit">Connection</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Mot de passe oublié ?</h4>
                                    <p>
                                        <a href="<?=str_replace('index.php','',$_SERVER['SCRIPT_NAME'])?>Users/Restauration">Cliquez ici </a>
										Restaurez votre mot de passe.</p>
                                </form>
                            </div>
                            <!-- End Login Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
