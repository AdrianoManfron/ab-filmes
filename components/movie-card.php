<?php
function card($poster, $alt, $title, $category, $year, $rating, $description, $link)
{
?>
    <a href="<?=$link?>" class="w-[280px] h-[360px] rounded-xl overflow-hidden group relative">
        <div class="absolute flex self-start top-2 right-2 justify-center items-center px-3 py-2 gap-2 bg-gray-100/80 group-hover:bg-gray-100 duration-500 rounded-full z-50">
            <div class="text-gray-700 title-lg"><?=$rating?> <span class="title-xs">/ 5</span></div>
            <div><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="fill-gray-700" viewBox="0 0 256 256">
                    <path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                </svg></div>
        </div>
        <div class="before:absolute before:-bottom-[45%] before:left-0 before:w-full before:h-full z-10 duration-1000 top-0 left-0 w-full h-full overflow-hidden group-hover:before:bottom-0">
            <img src="<?=$poster?>" alt="<?=$alt?>" class="absolute top-0 left-0 w-full h-full object-cover rounded-xl duration-500 group-hover:scale-110">
        </div>
        <div class="absolute opacity-0 top-0 left-0 w-full h-full duration-500 z-20 group-hover:opacity-100 bg-gradient-to-t from-[#090910d5] from-0% via-[#090910b4] via-50% to-[#09091000] to-100%"></div>
        <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-[#090910] from-0% to-[#09091000] to-73% z-30">
            <div class="absolute -bottom-[60%] left-0 w-full h-full p-5 group-hover:-bottom-[40%] duration-500 z-40">
                <h1 class="pt-16 title-lg text-gray-700"><?=$title?></h1>
                <div class="flex pt-1 gap-2 items-center">
                    <p class=""><?=$category?></p>
                    <span class="w-1 h-1 bg-gray-600 rounded-full"></span>
                    <p><?=$year?></p>
                </div>
                <p class="text-sm-regular text-gray-600 pt-5"><?= mb_strimwidth($description, 0, 80, "..."); ?></p>
            </div>
        </div>
    </a>
<?php
}
?>