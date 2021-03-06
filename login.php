<?php
    require_once 'core/init.php';

    $user = new User();

    if($user->check()) {
        Redirect::to('dashboard');
    }

    $validate = new Validation();

    if(Input::exists()) {
        if(Token::check(Input::get('token'))) {
            $validation = $validate->check(array(
                'username' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 20,
                    'unique' => 'users'
                ),
                'password' => array(
                    'required' => true,
                    'min' => 8
                )
            ));

            if($validation->passed()) {

                $login = $user->login(Input::get('username'), Input::get('password'));

                if($login) {
                    Redirect::to('dashboard');
                } else {
                    Session::flash('danger', 'Sorry, login failed! Please try again.');
                    Redirect::to('login');
                    echo 'Sorry, login failed!';
                }
            }
        }
    }

    Helper::getHeader('Algebra Contacts', 'header-index');

    require_once 'notifications.php';
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Sign In</h3>
            </div>
            <div class="panel-body">
                <form method="post">
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                    <div class="form-group <?php echo ($validate->hasError('username')) ? 'has-error' : '' ?>">
                        <label for="username" class="control-label">Username*</label>
                        <input type="text" class="form-control" id="username" name="username" autocomplete="off" placeholder="Enter your username" value="<?php echo escape(Input::get('username')); ?>">
                        <?php echo ($validate->hasError('username')) ? '<p class="text-danger">'.$validate->hasError('username').'</p>' : '' ?>
                    </div>
                    <div class="form-group <?php echo ($validate->hasError('password')) ? 'has-error' : '' ?>">
                        <label for="password" class="control-label">Password*</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
                        <?php echo ($validate->hasError('password')) ? '<p class="text-danger">'.$validate->hasError('password').'</p>' : '' ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    Helper::getFooter();
?>
