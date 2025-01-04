@php
    $sosomed = [
        (object) [
            'name' => 'facebook',
            'image' => 'images/footer/sosmed1.png',
        ],
        (object) [
            'name' => 'twitter',
            'image' => 'images/footer/sosmed2.png',
        ],
        (object) [
            'name' => 'instagram',
            'image' => 'images/footer/sosmed3.png',
        ],
        (object) [
            'name' => 'linkedin',
            'image' => 'images/footer/sosmed4.png',
        ],
        (object) [
            'name' => 'pinterest',
            'image' => 'images/footer/sosmed5.png',
        ],
    ];
@endphp

<div class="bg-primary-custom text-light-custom" style="padding-top: 100px; padding-bottom: 32px;">
    <div class="container">
        <div class="row align-items-end" style="margin-bottom: 60px;">
            <div class="col-lg-6">
                <div style="font-size: 32px; font-weight: bold;">
                    Get in Touch on Us for Your Path to Success
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-end gap-3">
                    @foreach ($sosomed as $item)
                        <div style="width: 42px; height: 42px;">
                            <img src="{{ asset($item->image) }}" alt="..."
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="d-flex gap-3" style="margin-bottom: 60px;">
            <div style="font-size: 20px;">
                Home
            </div>
            <div style="font-size: 20px;">
                About
            </div>
            <div style="font-size: 20px;">
                Contact Us
            </div>
        </div>
        <hr class="bg-secondary-custom" style="height: 2px; margin-bottom: 20px;">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div style="font-size: 28px; font-weight: bold;">
                    JustConsulting
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-end">
                    <div style="font-size: 14px; font-weight: lighter;">
                        © 2023 JustConsulting by Thanks For Today Studio • All Rights Reserved
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
