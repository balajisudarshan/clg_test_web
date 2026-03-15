<?php
$notifications = [
    [
        "title" => "Women's Day notice-2026",
        "type" => "event",
        "isNew" => true,
        "link" => "https://example.com/announcements/womens-day-notice-2026"
    ],
    [
        "title" => "SAMNVAYA: A National Symposium on Universal Human Values-2026",
        "type" => "symposium",
        "isNew" => true,
        "link" => "https://example.com/announcements/samnvaya-symposium-2026"
    ],
    [
        "title" => "Exam schedule released",
        "type" => "academic",
        "isNew" => false,
        "link" => "https://example.com/announcements/exam-schedule"
    ],
    [
        "title" => "B.Tech 2nd Year Results Published",
        "type" => "results",
        "isNew" => true,
        "link" => "https://example.com/announcements/btech-results-2026"
    ],
    [
        "title" => "Library Timing Updated",
        "type" => "general",
        "isNew" => false,
        "link" => "https://example.com/announcements/library-timing-update"
    ],
    [
        "title" => "Campus Recruitment Drive - Infosys",
        "type" => "placement",
        "isNew" => true,
        "link" => "https://example.com/announcements/infosys-drive"
    ],
    [
        "title" => "Workshop on Artificial Intelligence",
        "type" => "workshop",
        "isNew" => true,
        "link" => "https://example.com/announcements/ai-workshop"
    ],
    [
        "title" => "Holiday Notice for Festival",
        "type" => "holiday",
        "isNew" => false,
        "link" => "https://example.com/announcements/festival-holiday"
    ]
];

$administrators = [
    [
        "name" => "Dr.Y Venkatarami Reddy",
        "designation" => "Chairman",
        "photo" => "./images/chaiman.png"
    ],
    [
        "name" => "Nedurumalli Ramkumar",
        "designation" => "Correspondent",
        "photo" => "./images/correspondent.png"
    ],
    [
        "name" => "Dr.V.Vijaya Kumar Reddy",
        "designation" => "Director",
        "photo" => "./images/director.png"
    ]
];



?>

<div class="px-6 py-6 flex-col md:flex-row flex gap-6 bg-slate-50">

    <!-- Notifications -->
    <div class="flex flex-col flex-1 bg-white border border-slate-200 rounded-xl shadow-md">

        <div class="bg-slate-800 text-white p-3 rounded-t-xl">
            <span class="text-lg font-semibold">Notifications</span>
        </div>

        <div class="flex flex-col gap-4 py-5 px-4 max-h-[350px] overflow-y-auto">

            <?php foreach ($notifications as $notification): ?>

            <div class="flex gap-3 items-start">

                <?php if($notification['isNew']): ?>
                <img src="./images/newlabel.gif" class="w-6 h-6 flex-shrink-0"/>
                <?php endif; ?>

                <a href="<?php echo $notification['link']; ?>"
                   target="_blank"
                   class="text-indigo-600 hover:text-indigo-500 hover:underline transition">

                   <?php echo $notification['title']; ?>

                </a>

            </div>

            <?php endforeach; ?>

        </div>
    </div>


    <!-- Administration -->
    <div class="flex flex-col flex-1 bg-white border border-slate-200 rounded-xl shadow-md">

        <div class="bg-slate-800 text-white p-3 rounded-t-xl">
            <span class="text-lg font-semibold">Administration</span>
        </div>

        <div class="flex flex-col gap-6 py-6 px-4">

            <?php foreach ($administrators as $admin): ?>

            <div class="flex gap-4 items-center">

                <img src="<?php echo $admin['photo']; ?>"
                     class="w-16 h-16 rounded-full object-cover border border-slate-200"/>

                <div>
                    <div class="font-semibold text-slate-800">
                        <?php echo $admin['name']; ?>
                    </div>

                    <div class="text-sm text-slate-500">
                        <?php echo $admin['designation']; ?>
                    </div>
                </div>

            </div>

            <?php endforeach; ?>

        </div>
    </div>
    

</div>