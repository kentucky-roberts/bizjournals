<article class="detail chunk">
    <header class="detail__header u-spacing--bottom clearfix">
        <div class="chunk chunk--flex" style="align-items:flex-end;">
            <div class="primary">
                <h1 itemprop="name" class="detail__headline">Forms</h1>
            </div><!--/.primary -->
        </div><!--/.chunk chunk-flex -->
    </header>
    <div class="row">
        <div class="1/2" style="padding-left:15px;padding-right:15px;">
            <!-- Form module -->
            <div class="module module--stacked module--ruled">

                <div class="module__header">
                    <h2 class="module__title"><strong>Default Styling</strong></h2>
                </div><!-- /.module__header -->

                <div class="module__body">
                    <div class="form-item">
                        <label>Name</label>
                        <input type="text" value="" class="form-item__control">
                    </div><!-- /.form-item -->

                    <div class="form-item">
                        <label>Password</label>
                        <input type="password" value="" class="form-item__control">
                        <p class="form-item__help-text">At least 42 characters, but fewer than 43.</p>
                    </div><!-- /.form-item -->

                    <div class="form-item form-item--required">
                        <label>Required Field</label>
                        <input type="password" value="" class="form-item__control">
                    </div><!-- /.form-item -->

                    <div class="form-item">
                        <label>Select</label>
                        <select class="form-item__control">
                            <option value=""></option>
                            <option value="1">First option</option>
                            <option value="2">Second option</option>
                        </select>
                    </div><!-- /.form-item -->

                    <div class="form-item">
                        <div class="checkbox">
                            <label><input type="checkbox" value=""> This is just a checkbox.</label>
                        </div><!-- /.checkbox -->
                    </div><!-- /.form-item -->

                    <div class="form-item">
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio-example" value="1" checked="">
                                First radio option goes before the second, duh
                            </label>
                        </div><!-- /.radio -->
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio-example" value="2">
                                The second option for this radio example
                            </label>
                        </div><!-- /.radio -->
                    </div><!-- /.form-item -->

                    <div class="form-item">
                        <label>Comment</label>
                        <textarea class="form-item__control" rows="8"></textarea>
                    </div><!-- /.form-item -->

                    <div class="form-item">
                        <a href="#" class="btn btn--primary btn--large">Submit</a>
                    </div>

                </div><!--/.module__body -->
            </div><!-- /.module -->
            <div class="module module--stacked module--ruled">
                <div class="module__header module__header--ruled">
                    <h2 class="module__title"><strong>Float Form</strong></h2>
                </div><!-- /.module__header -->
                <div class="module__body">
                    <form class="float-form" method="post">
                        <div class="float-form__group">
                            <div class="form-item form-item--required form-item--float-label">
                                <label class="form-item__label" for="email" id="mpregistrationFormErroremail">Email</label>

                                <input type="text" name="email" id="emailAddress" value="" title="Email Address" class="form-item__control" maxlength="255">
                            </div><!-- /.form-item -->

                            <div class="form-item form-item--required form-item--float-label">
                                <label class="form-item__label" for="newPassword" id="mpregistrationFormErrorpassword">Password</label>
                                <input type="password" name="password" id="newPassword" value="" class="form-item__control">
                            </div><!-- /.form-item -->

                        </div><!-- /.float-form__group -->

                        <div class="float-form__group">
                            <div class="row row--flush">
                                <div class="1/2">
                                    <div class="form-item form-item--required form-item--float-label">
                                        <label class="form-item__label" for="firstName">First Name</label>
                                        <input type="text" name="firstname" id="firstName" value="" title="First Name" class="form-item__control ">
                                    </div><!-- /.form-item -->
                                </div><!-- /col -->

                                <div class="1/2">
                                    <div class="form-item form-item--required form-item--float-label">
                                        <label class="form-item__label" for="lastName">Last Name</label>
                                        <input type="text" name="lastname" id="lastName" value="" title="Last Name" class="form-item__control ">
                                    </div><!-- /.form-item -->
                                </div><!-- /col -->

                            </div><!-- /.row -->
                        </div><!-- /.float-form__group -->

                        <div class="float-form__group">
                            <div class="form-item form-item--required form-item--float-label" style="width:100px;">
                                <label class="form-item__label" for="zipCode">Zip Code</label>
                                <input type="text" name="zip" id="zip" value="" title="Zip Code" class="form-item__control " maxlength="10">
                            </div><!-- /.form-item -->
                        </div><!-- /.float-form__group -->

                        <div class="form-item">
                            <div class="checkbox">
                                <label for="email_optin">
                                    <input type="checkbox" style="" name="email_optin" id="email_optin" value="1"><strong>Get Newsletters and Alerts</strong><p class="form-item__help-text">Morning Edition, Afternoon Edition, and Breaking News</p>
                                </label>
                            </div><!-- /.checkbox -->
                        </div><!-- /.form-item -->
                        <br>

                        <button name="submit" value="submit" class="btn btn--primary btn--large btn--block" style="display:block;width:100%;border-radius:0;" type="submit"><span>Continue Reading</span></button>
                        <span style='display:none' id='progress'><img src='lib/img/ajax-loader.gif'> Processing...</span>

                    </form><!-- /.float-form -->
                </div>
            </div>
        </div>
        <div class="1/2" style="padding-left:15px;padding-right:15px;">
            <!-- Form module -->
            <div class="module module--stacked">
                <div class="module__header">
                    <h2 class="module__title"><strong>Forms with Errors</strong></h2>
                </div><!-- /.module__header -->
                <div class="module__body">
                    <div class="form-item form-item--error">
                        <label>Name</label>
                        <input type="text" value="" class="form-item__control">
                        <p class="form-item__help-text">Name is required.</p>
                    </div><!-- /.form-item -->

                    <div class="form-item form-item--error">
                        <label>Password</label>
                        <input type="password" value="" class="form-item__control">
                        <p class="form-item__help-text">At least 42 characters, but fewer than 43.</p>
                    </div><!-- /.form-item -->

                    <div class="form-item form-item--required form-item--error">
                        <label>Required Field</label>
                        <input type="password" value="" class="form-item__control">
                    </div><!-- /.form-item -->
                </div>
            </div><!-- /.module -->
            <!-- / Form module -->
        </div>
    </div>
</article>