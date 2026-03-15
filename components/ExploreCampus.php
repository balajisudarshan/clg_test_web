<div class="bg-slate-50 py-16">

    <h2 class="text-3xl text-slate-800 font-bold text-center mb-10">
        Explore Campus
    </h2>

    <div class="flex flex-wrap justify-center gap-8 px-6">

        <?php for($i = 0; $i < 5; $i++): ?>

        <div class="w-[300px] bg-white p-5 rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">

            <img src="./images/libr.png" class="rounded-lg w-full h-[180px] object-cover"/>

            <div class="mt-4">
                <h2 class="text-xl font-bold text-slate-800">
                    Central Library
                </h2>

                <p class="text-slate-600 text-sm mt-1">
                    Well equipped library with more than 44,197 books and 267 periodicals.
                </p>
            </div>

        </div>

        <?php endfor; ?>

    </div>

</div>