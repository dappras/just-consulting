@php
    $testimonials = [
        (object) [
            'name' => 'Heimlin Marka',
            'role' => 'Informatics Engineering',
            'image' => 'images/testimony/photo-profile1.png',
            'rating' => 4,
            'text' =>
                'Working with this consulting firm was a game-changer for our business. Their strategic insights transformed our approach and boosted our success.',
        ],
        (object) [
            'name' => 'Karmel Otto',
            'role' => 'Accountant & Finance Manager',
            'image' => 'images/testimony/photo-profile2.png',
            'rating' => 5,
            'text' =>
                'Exceptional service! The consulting firm navigated us through challenges with precision, delivering impactful strategies that led to tangible and sustainable results.',
        ],
        (object) [
            'name' => 'Karmen Posto',
            'role' => 'Project Manager',
            'image' => 'images/testimony/photo-profile3.png',
            'rating' => 5,
            'text' =>
                "The consulting team's proactive approach and in-depth analysis provided invaluable insights, guiding us towards effective decision-making and successful outcomes.",
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
            See What Clients Are Saying
        </div>
        <div style="font-size: 16px; margin-bottom: 60px;">
            Explore the authentic sentiments and experiences of our clients as they share their thoughts and
            satisfaction.
        </div>

        <div class="row">
            @foreach ($testimonials as $item)
                <div class="col-lg-4 mb-4">
                    <div class="px-5 py-4"
                        style="background-color: #F5F7FF; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                        <div style="font-size: 15px;">
                            {{ $item->text }}
                        </div>
                    </div>
                    <div class="bg-secondary-custom px-5 py-4 text-light-custom"
                        style="border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                        <div class="d-flex gap-3">
                            <div style="width:64px; height: 64px;">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                                    style="width: 100%; height: 100%; object-fit: content;">
                            </div>
                            <div style="width: 80%;">
                                <div class="mb-1" style="font-size: 20px; font-weight: bold;">
                                    {{ $item->name }}
                                </div>
                                <div class="mb-2" style="font-size: 16px; font-weight: lighter;">
                                    {{ $item->role }}
                                </div>
                                <div class="d-flex justify-content-end" style="font-size: 24px;">
                                    @for ($i = 0; $i < $item->rating; $i++)
                                        ★
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
