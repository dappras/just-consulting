@php
    $content = [
        (object) [
            'title' => 'Dedication',
            'description' => 'Dedication at work is the key to sustained excellence and success.',
            'img' => 'images/about/values1.png',
        ],
        (object) [
            'title' => 'Clarity',
            'description' => 'Clear objectives at work pave the way for strategic success.',
            'img' => 'images/about/values2.png',
        ],
        (object) [
            'title' => 'Innovation',
            'description' => 'Work to push creativity, driving continual improvement and growth.',
            'img' => 'images/about/values3.png',
        ],
        (object) [
            'title' => 'Synergy',
            'description' => 'Workplace synergy through teamwork cultivates a culture of collaboration.',
            'img' => 'images/about/values4.png',
        ],
        (object) [
            'title' => 'Improvement',
            'description' => 'Commitment to improvement fuels a culture of continuous success.',
            'img' => 'images/about/values5.png',
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

    <div class="container">
        <div style="font-size: 32px; font-weight: bold; margin-bottom: 20px;">
            The Values We Maintain at Work
        </div>
        <div style="font-size: 16px; margin-bottom: 60px;">
            We are a team with a variety of skills, each member contributes their expertise, and works professionally
            among members and clients.
        </div>
        <div class="row justify-content-center">
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

    <div class="d-flex justify-content-start ms-4" style="margin-bottom: 40px;">
        <div style="width: 25%;" class="">
            <img src="{{ asset('images/line.png') }}" alt="..."
                style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div>
</div>
