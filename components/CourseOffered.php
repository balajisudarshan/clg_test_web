<?php
    $courses = [
    [
        "name" => "B.Tech Computer Science and Engineering (CSE)",
        "image" => "./images/course/cse.png"
    ],
    [
        "name" => "B.Tech Artificial Intelligence & Data Science (AI & DS)",
        "image" => "./images/course/aiml_ds.png"
    ],
    [
        "name" => "B.Tech Electronics & Communication Engineering (ECE)",
        "image" => "./images/course/ece.png"
    ],
    [
        "name" => "B.Tech Electrical & Electronics Engineering (EEE)",
        "image" => "./images/course/eee.png"
    ],
    [
        "name" => "B.Tech Mechanical Engineering",
        "image" => "./images/course/mech.png"
    ],
    [
        "name" => "B.Tech Civil Engineering",
        "image" => "./images/course/civil.png"
    ]
];
?>

<div class="py-16 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-slate-800 text-center mb-12">
            Courses Offered
        </h2>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">

            <?php foreach($courses as $course): ?>

            <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center 
                        hover:shadow-xl hover:-translate-y-1 transition duration-300">

                <img src="<?php echo $course['image']; ?>"
                     class="w-50 h-50 object-contain mb-4">

                <h3 class="text-lg font-semibold text-slate-800 leading-snug">
                    <?php echo $course['name']; ?>
                </h3>

                <button class="mt-4 text-sm bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                    Learn More
                </button>

            </div>

            <?php endforeach; ?>

        </div>

    </div>

</div>