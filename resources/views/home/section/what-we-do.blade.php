@php
    $content = [
        (object) [
            'title' => 'Analysis & Research',
            'description' =>
                'The consulting firm conducts detailed analysis and research, employing strategic methodologies to deliver client-focused insights and effective solutions.',
            'img' => 'images/what-we-do/icon1.png',
        ],
        (object) [
            'title' => 'Actualization',
            'description' =>
                'In the execution phase, the consulting firm adeptly translates strategies into action, ensuring seamless actualization of client objectives and aspirations.',
            'img' => 'images/what-we-do/icon2.png',
        ],
        (object) [
            'title' => 'Initiate',
            'description' =>
                'The consulting firm kickstarts client initiatives with strategic expertise, ensuring a smooth launch and effective implementation of customized solutions.',
            'img' => 'images/what-we-do/icon3.png',
        ],
    ];
@endphp

<div style="margin-top: 42px;">
    <div class="d-flex justify-content-end me-4">
        <div style="width: 25%;" class="">
            <img src="{{ asset('images/line.png') }}" alt="..." style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div>

    <div class="container" style="margin-bottom: 40px;">
        <div style="font-size: 32px; font-weight: bold; margin-bottom: 20px;">
            Our Work is For Your Success
        </div>
        <div style="font-size: 16px; margin-bottom: 60px;">
            Tailored systematic solutions for your goals, ensuring comprehensive support and an effective path to
            success and objectives.
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
