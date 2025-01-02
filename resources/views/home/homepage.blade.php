@extends('layouts.app')

@section('content')
    @extends('components.navbar.navbar')
    <div class="bg-primary-custom text-light-custom">
        <div class="container pt-4 pb-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div style="width: 87%;">
                        <div style="font-weight: bold; font-size: 64px; margin-bottom: 32px;">
                            Masterminds to Your Positive Goal
                        </div>
                        <div style="font-size: 18px; font-weight: lighter; text-align: justify; margin-bottom: 48px;">
                            Experience a rise in your pursuits with our expert consulting. We excel in tailoring success
                            strategies to your unique goals, covering diverse fields for maximum impact, professionally and
                            delightfully.
                        </div>

                        <div class="d-flex gap-3 mb-5">
                            <div class="bg-secondary-custom text-light-custom; px-4 py-2" style="border-radius: 4px;">
                                Collaborate with Us
                            </div>
                            <div class="bg-primary-custom text-light-secondary; px-4 py-2"
                                style="border-radius: 4px; border: 1px solid var(--secondary-color);">
                                Learn More
                            </div>
                        </div>

                        <hr class="bg-secondary-custom" style="height: 2px;">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div style="width: 100%;">
                        <img src="{{ asset('images/cover.png') }}" alt=""
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 24px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary-custom text-light-custom mb-5">
        <div class="container pt-2 pb-5">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="mb-4" style="font-size: 32px; font-weight: bold;">
                        This is Our result
                    </div>
                    <div style="font-size: 16px; font-weight: lighter;">
                        How capable we are at work shines through in every endeavor.
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div style="font-weight: bold; font-size: 64px; text-align: center;">
                                160
                            </div>
                            <div style="font-size: 18px; font-weight: lighter; text-align: center;">
                                Client Project
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div style="font-weight: bold; font-size: 64px; text-align: center;">
                                340
                            </div>
                            <div style="font-size: 18px; font-weight: lighter; text-align: center;">
                                Successfull Project
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div style="font-weight: bold; font-size: 64px; text-align: center;">
                                300+
                            </div>
                            <div style="font-size: 18px; font-weight: lighter; text-align: center;">
                                Team Members
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div style="font-weight: bold; font-size: 64px; text-align: center;">
                                82M
                            </div>
                            <div style="font-size: 18px; font-weight: lighter; text-align: center;">
                                Total Revenue
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
