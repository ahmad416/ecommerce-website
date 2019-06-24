<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img src="{{asset("images/website/logos/main-logo.png")}}" width="30%" alt="branding logo">
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Easily Using</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="text-center">
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                                        <span class="la la-facebook"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                                        <span class="la la-twitter"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                                        <span class="la la-linkedin font-medium-4"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                                        <span class="la la-github font-medium-4"></span>
                                    </a>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    <span>OR Using Account Details</span>
                                </p>
                                <div class="card-body">
                                    <form class="form-horizontal" action="{{ route('login') }}"  method="post" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input
                                                    id="user-name"
                                                    type="email"
                                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    name="email"
                                                    placeholder="Enter Your Email"
                                                    value="{{ old('email') }}"
                                                    required
                                                    autofocus
                                                   >
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input
                                                    id="user-password"
                                                    type="password"
                                                   class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   name="password"
                                                   placeholder="Enter Password"
                                                   required>
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input
                                                            type="checkbox"
                                                            id="remember-me"
                                                            class="chk-remember"
                                                            name="rememberme"
                                                            {{ old('remember') ? 'checked' : '' }}
                                                    >
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="" class="card-link">Forgot Password?</a></div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i>Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>