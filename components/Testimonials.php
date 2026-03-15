<?php
    $testimonials = [
        [
            "name"=>"A.Neetu Reddy",
            "description"=>"NBKR campus gave me opportunities to participate in technical events and develop leadership skills",
            "class"=>"III Btech , DataScience"
        ],
        [
            "name"=>"Shaik Safeena",
            "description"=>"NBKR Institute provided me strong technical knowledge and helped me build confidence for my career",
            "class"=>"III Btech , CSE AIML"
        ],
        [
            "name"=>"YEMPULURU SAI SATHWIK",
            "description"=>"The supportive faculty and learning environment helped me grow academically and personally",
            "class"=>"B.Tech CSE AI/ML 2023 Batch"
        ]
    ]
?>

<div class="mt-10 ">
    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-slate-800">Student Testimonials</h2>
        <p class="text-slate-500 mt-2">What our students say about the institution</p>
    </div>

    <div>
        <div class="swiper">
            <div class="swiper-wrapper">

                <?php foreach($testimonials as $testimonial): ?>
                <div class="swiper-slide p-6 bg-white rounded-lg shadow-md flex flex-col items-center gap-4">
                    <img src="./images/avatar.png" class="w-16 h-16 rounded-full">
                    <h3 class="text-lg font-semibold text-slate-800"><?php echo $testimonial['name']; ?></h3>
                    <p class="text-slate-500 text-center"><?php echo $testimonial['description']; ?></p>
                    <span class="text-sm text-indigo-600"><?php echo $testimonial['class']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>