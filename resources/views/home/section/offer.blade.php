@php
    $content = [
        (object) [
            'title' => 'Method Development',
            'description' => 'Strategic method development for business excellence and progress.',
            'img' => 'images/offer/icon1.png',
        ],
        (object) [
            'title' => 'Quality Assurance',
            'description' => 'Quality excellence for optimal and sustainable business operation.',
            'img' => 'images/offer/icon2.png',
        ],
        (object) [
            'title' => 'Human Resources',
            'description' => 'Optimize human resources for sustainable business growth.',
            'img' => 'images/offer/icon3.png',
        ],
        (object) [
            'title' => 'Policy Compliance',
            'description' => 'Strategic policy compliance for seamless business operations.',
            'img' => 'images/offer/icon4.png',
        ],
        (object) [
            'title' => 'Business Strategies',
            'description' => 'Unlocking growth potential using dynamic business strategies.',
            'img' => 'images/offer/icon5.png',
        ],
        (object) [
            'title' => 'Management System',
            'description' => 'Maximize productivity with our advanced management structure.',
            'img' => 'images/offer/icon6.png',
        ],
    ];
@endphp

<div>
    <div class="d-flex justify-content-end me-4">
        <div style="width: 25%;" class="">
            <img src="{{ asset('images/elipsis.png') }}" alt="..."
                style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div>

    <div class="container" style="margin-bottom: 40px;">
        <div style="font-size: 32px; font-weight: bold; margin-bottom: 20px;">
            What We Can Offer You
        </div>
        <div style="font-size: 16px; margin-bottom: 60px;">
            Optimize your journey with our consulting services, delivering personalized solutions for success.
        </div>
        <div class="row">
            @foreach ($content as $item)
                <div class="col-lg-4 d-flex flex-column align-items-center" style="margin-bottom: 60px;">
                    <div style="width: 18%; margin-bottom: 32px;">
                        <img src="{{ asset($item->img) }}" alt="..."
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="font-size: 22px; font-weight: bold; margin-bottom: 20px; ">
                        {{ $item->title }}
                    </div>
                    <div style="font-size: 16px; text-align: center; width: 75%;">
                        {{ $item->description }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
