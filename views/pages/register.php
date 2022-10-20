<?php

use app\core\forms\Form;

$form = new Form();
?>
<main class="wp-content">
         <div class="breadcrumb_content">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <nav>
                        <ol class="breadcrumb-list breadcrumb">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Create Account</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>

         <div class="login_wrapper">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="login_form_container">
                        <!-- <form action="<?= BASE_URL . "/register" ?>" method="post"> -->
                        <?php $form->begin(BASE_URL . "/register", 'post', 'register') ?>
                           <div class="login_text register_text">
                              <h2>Create Account</h2>
                              <p>Please register using account detail bellow.</p>
                           </div>
                           <div class="login_form">
                              <?php echo $form->field($params['model'], "fullName")?>
                              <?php echo $form->field($params['model'], "username")?>
                              <?php echo $form->field($params['model'], "email")?>
                              <?php echo $form->field($params['model'], "password")->passwordField()?>
                              <!-- <div class="form-group">
                                 <input id="fullname" placeholder="Fullname" class="form-control" type="text" name="fullname">
                              </div>
                              <div class="form-group">
                                 <input id="username" placeholder="Username" class="form-control" type="text" name="username">
                              </div>
                              <div class="form-group">
                                 <input id="email" class="form-control" placeholder="Email" type="email" name="email">
                              </div>
                              <div class="form-group">
                                 <input id="password" class="form-control" placeholder="Password" type="password"
                                    name="password">
                              </div> -->

                              <div class="toggle-btn">
                                 <div class="form-action-button">
                                    <button class="btn btn_login" type="submit">Create</button>
                                 </div>
                                 <div class="account-option">
                                    <a href="<?= BASE_URL . '/login' ?>">Return Login</a>
                                 </div>
                              </div>
                           </div>
                           <?php $form->end() ?>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>