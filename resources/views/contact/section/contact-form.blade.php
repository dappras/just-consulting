<div class="container" style="margin-bottom: 64px;">
    <div class="row align-items-start">
        <div class="col-lg-5">
            <div style="background-color: #eeeae7; padding-top: 48px; ">
                <div style="font-size: 32px; font-weight: bold; margin-bottom: 56px;" class="px-5">
                    What Do You Need?
                </div>
                <div style="width: 100%;">
                    <img src="{{ asset('images/contact/cover.png') }}" alt=""
                        style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">
                </div>
            </div>
        </div>
        <div class="col-lg-7 mt-5">
            <div style="font-size: 32px; font-weight: bold; margin-bottom: 32px;">
                We will be happy to help you
            </div>

            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="fullname" style="font-size: 16px; font-weight: 600;" class="form-label">Full
                                Name</label>
                            <input type="text" class="form-control" style="" id="fullname" name="fullname"
                                placeholder="Martha Mc Kean" value="{{ old('fullname') }}" required>
                            @if ($errors->has('fullname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('fullname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="fullname" style="font-size: 16px; font-weight: 600;"
                                class="form-label">Company</label>
                            <input type="text" class="form-control" style="" id="fullname" name="fullname"
                                placeholder="NovaBurst Cafe" value="{{ old('fullname') }}" required>
                            @if ($errors->has('fullname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('fullname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="email" style="font-size: 16px; font-weight: 600;"
                                class="form-label">Email</label>
                            <input type="email" class="form-control" style="" id="email" name="email"
                                placeholder="novabt@email.com" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-4">
                            <label for="phone" style="font-size: 16px; font-weight: 600;" class="form-label">Phone
                                Number</label>
                            <input type="text" class="form-control" style="" id="phone" name="phone"
                                placeholder="+62 123-456-789" value="{{ old('phone') }}" required>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="subjectDiscuss" style="font-size: 16px; font-weight: 600;" class="form-label">Subject
                        You Want to Discuss</label>
                    <input type="subjectDiscuss" class="form-control" style="" id="subjectDiscuss"
                        name="subjectDiscuss" placeholder="Audience awareness" value="{{ old('subjectDiscuss') }}"
                        required>
                    @if ($errors->has('subjectDiscuss'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('subjectDiscuss') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="message" style="font-size: 16px; font-weight: 600;" class="form-label">Message</label>
                    <textarea name="message" id="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}"
                        value="{{ old('message') }}" required cols="30" rows="7">{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Tombol Submit -->
                <div class="d-flex justify-content-end">
                    <button type="submit"
                        style="padding-top: 12px; padding-bottom: 12px; font-size: 16px; font-weight: 600;"
                        class="btn bg-secondary-custom text-light-custom">Submit Form</button>
                </div>
            </form>
        </div>
    </div>
</div>
