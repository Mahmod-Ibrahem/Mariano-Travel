<div class="relative flex flex-col flex-shrink-0 group snap-start">
    <div class="overflow-hidden w-full aspect-square rounded-3xl shadow-lg relative">
        <a href="#" class="block w-full h-full">
            <img src="{{$country->image}}"
                class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500 transform"
                alt="{{$country->name}}">
        </a>
        <div
            class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-all duration-300 pointer-events-none">
        </div>
    </div>
    <div class="absolute left-1/2 -translate-x-1/2 -bottom-4 z-10 w-[85%] md:w-[80%] max-w-[18rem]">
        <h1 class="text-lg font-semibold text-center py-3 px-4 rounded-xl  bg-white shadow-lg whitespace-nowrap 
            overflow-hidden text-ellipsis">
            {{$country->name}}
        </h1>
    </div>
</div>